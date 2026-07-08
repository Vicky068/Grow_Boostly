<?php
header('Content-Type: application/json; charset=UTF-8');

require_once __DIR__ . '/includes/smtp_mail.php';
$mail_config = require __DIR__ . '/includes/mail_config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'message' => 'Invalid request method.']);
    exit;
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$message = trim($_POST['message'] ?? '');
$website = trim($_POST['website'] ?? '');
$errors = [];

if ($website !== '') {
    echo json_encode(['ok' => true, 'message' => 'Thank you. Your consultation request has been sent.']);
    exit;
}

if ($name === '') {
    $errors[] = 'Please enter your full name.';
} elseif (preg_match('/\d/', $name) || !preg_match("/^[a-zA-Z\s.'-]{2,60}$/u", $name)) {
    $errors[] = 'Please enter a valid name.';
}

if ($email === '') {
    $errors[] = 'Please enter your email address.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid email address.';
}

if ($phone === '') {
    $errors[] = 'Please enter your phone number.';
} elseif (preg_match('/[^\d+\s().-]/', $phone) || strlen(preg_replace('/\D/', '', $phone)) < 10) {
    $errors[] = 'Please enter a valid phone number.';
}

if ($message === '') {
    $errors[] = 'Please enter your message.';
} elseif (strlen($message) < 10) {
    $errors[] = 'Message should be at least 10 characters long.';
}

if ($errors) {
    http_response_code(422);
    echo json_encode(['ok' => false, 'message' => implode(' ', $errors)]);
    exit;
}

$safe_name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$safe_email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$safe_phone = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
$safe_message = nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'));

$email_body = '';
$email_body .= "New Book Consultation request from GrowBoostly website<br><br>\r\n";
$email_body .= 'Name: ' . $safe_name . "<br>\r\n";
$email_body .= 'Email: ' . $safe_email . "<br>\r\n";
$email_body .= 'Phone: ' . $safe_phone . "<br>\r\n";
$email_body .= 'Message: ' . $safe_message . "<br>\r\n";

$result = gb_send_contact_email(
    $mail_config,
    $mail_config['to_email'],
    'Book Consultation Request from ' . $name,
    $email_body,
    $email,
    $name
);

if (!$result['ok']) {
    http_response_code(500);
    echo json_encode(['ok' => false, 'message' => 'Sorry, your request could not be sent. Please try again.']);
    exit;
}

echo json_encode(['ok' => true, 'message' => 'Thank you. Your consultation request has been sent.']);
