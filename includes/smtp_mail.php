<?php

function gb_smtp_read($socket): string
{
    $data = '';
    while ($line = fgets($socket, 515)) {
        $data .= $line;
        if (isset($line[3]) && $line[3] === ' ') {
            break;
        }
    }
    return $data;
}

function gb_smtp_write($socket, string $command): void
{
    fwrite($socket, $command . "\r\n");
}

function gb_smtp_send(array $config, string $to, string $subject, string $htmlBody, string $replyToEmail, string $replyToName = ''): array
{
    if (empty($config['smtp_pass'])) {
        return ['ok' => false, 'error' => 'SMTP password is not set in includes/mail_config.php'];
    }

    $host   = $config['smtp_host'];
    $port   = (int) $config['smtp_port'];
    $secure = strtolower($config['smtp_secure'] ?? 'ssl');
    $user   = $config['smtp_user'];
    $pass   = $config['smtp_pass'];
    $from   = $config['from_email'];
    $fromName = $config['from_name'] ?? 'GrowBoostly';

    $remote = ($secure === 'ssl' ? 'ssl://' : 'tcp://') . $host . ':' . $port;
    $context = stream_context_create([
        'ssl' => [
            'verify_peer'       => false,
            'verify_peer_name'  => false,
            'allow_self_signed' => true,
        ],
    ]);

    $socket = @stream_socket_client($remote, $errno, $errstr, 30, STREAM_CLIENT_CONNECT, $context);
    if (!$socket) {
        return ['ok' => false, 'error' => 'Could not connect to mail server: ' . $errstr];
    }

    stream_set_timeout($socket, 30);

    $greet = gb_smtp_read($socket);
    if (strpos($greet, '220') !== 0) {
        fclose($socket);
        return ['ok' => false, 'error' => 'Mail server did not greet properly.'];
    }

    gb_smtp_write($socket, 'EHLO growboostly.com');
    $ehlo = gb_smtp_read($socket);

    if ($secure === 'tls') {
        if (stripos($ehlo, 'STARTTLS') === false) {
            fclose($socket);
            return ['ok' => false, 'error' => 'STARTTLS is not supported by the mail server.'];
        }
        gb_smtp_write($socket, 'STARTTLS');
        $tls = gb_smtp_read($socket);
        if (strpos($tls, '220') !== 0) {
            fclose($socket);
            return ['ok' => false, 'error' => 'STARTTLS failed.'];
        }
        if (!stream_socket_enable_crypto($socket, true, STREAM_CRYPTO_METHOD_TLS_CLIENT)) {
            fclose($socket);
            return ['ok' => false, 'error' => 'TLS encryption failed.'];
        }
        gb_smtp_write($socket, 'EHLO growboostly.com');
        gb_smtp_read($socket);
    }

    gb_smtp_write($socket, 'AUTH LOGIN');
    $authStart = gb_smtp_read($socket);
    if (strpos($authStart, '334') !== 0) {
        fclose($socket);
        return ['ok' => false, 'error' => 'SMTP AUTH is not available.'];
    }

    gb_smtp_write($socket, base64_encode($user));
    gb_smtp_read($socket);
    gb_smtp_write($socket, base64_encode($pass));
    $authResult = gb_smtp_read($socket);
    if (strpos($authResult, '235') !== 0) {
        fclose($socket);
        return ['ok' => false, 'error' => 'SMTP login failed. Check email username and password in mail_config.php.'];
    }

    gb_smtp_write($socket, 'MAIL FROM:<' . $from . '>');
    $mailFrom = gb_smtp_read($socket);
    if (strpos($mailFrom, '250') !== 0) {
        fclose($socket);
        return ['ok' => false, 'error' => 'Sender address rejected by mail server.'];
    }

    gb_smtp_write($socket, 'RCPT TO:<' . $to . '>');
    $rcpt = gb_smtp_read($socket);
    if (strpos($rcpt, '250') !== 0) {
        fclose($socket);
        return ['ok' => false, 'error' => 'Recipient address rejected by mail server.'];
    }

    gb_smtp_write($socket, 'DATA');
    $dataStart = gb_smtp_read($socket);
    if (strpos($dataStart, '354') !== 0) {
        fclose($socket);
        return ['ok' => false, 'error' => 'Mail server rejected message data.'];
    }

    $replyName = $replyToName !== '' ? $replyToName : $replyToEmail;
    $encodedSubject = '=?UTF-8?B?' . base64_encode($subject) . '?=';
    $headers  = 'From: ' . $fromName . ' <' . $from . '>' . "\r\n";
    $headers .= 'To: <' . $to . '>' . "\r\n";
    $headers .= 'Reply-To: ' . $replyName . ' <' . $replyToEmail . '>' . "\r\n";
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-Type: text/html; charset=UTF-8' . "\r\n";
    $headers .= 'Content-Transfer-Encoding: 8bit' . "\r\n";
    $headers .= 'Subject: ' . $encodedSubject . "\r\n";
    $headers .= 'Date: ' . date('r') . "\r\n";
    $headers .= 'X-Mailer: GrowBoostly-ContactForm' . "\r\n";

    $body = preg_replace("/\r\n\./", "\r\n..", $htmlBody);
    $message = $headers . "\r\n" . $body . "\r\n.";
    gb_smtp_write($socket, $message);
    $dataEnd = gb_smtp_read($socket);

    gb_smtp_write($socket, 'QUIT');
    fclose($socket);

    if (strpos($dataEnd, '250') !== 0) {
        return ['ok' => false, 'error' => 'Message was not accepted by the mail server.'];
    }

    return ['ok' => true, 'error' => ''];
}

function gb_send_contact_email(array $config, string $to, string $subject, string $htmlBody, string $replyToEmail, string $replyToName = ''): array
{
    if (!empty($config['smtp_pass'])) {
        return gb_smtp_send($config, $to, $subject, $htmlBody, $replyToEmail, $replyToName);
    }

    $from = $config['from_email'];
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
    $headers .= 'From: ' . ($config['from_name'] ?? 'GrowBoostly') . ' <' . $from . '>' . "\r\n";
    $headers .= 'Reply-To: ' . $replyToEmail . "\r\n";

    $sent = @mail($to, $subject, $htmlBody, $headers, '-f ' . $from);
    if ($sent) {
        return ['ok' => true, 'error' => ''];
    }

    return ['ok' => false, 'error' => 'PHP mail() failed. Add your email password in includes/mail_config.php'];
}
