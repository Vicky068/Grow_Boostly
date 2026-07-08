<?php
extract($_REQUEST);
require_once __DIR__ . '/includes/smtp_mail.php';
$mail_config = require __DIR__ . '/includes/mail_config.php';

$msg = '';
$form_alert = '';

if (@$submit == 'submit') {
    $name_val    = trim($name ?? '');
    $company_val = trim($company ?? '');
    $email_val   = trim($email ?? '');
    $phone_val   = trim($phone ?? '');
    $message_val = trim($message ?? '');
    $errors      = [];

    if ($name_val === '') {
        $errors[] = 'Please enter your full name.';
    } elseif (preg_match('/\d/', $name_val)) {
        $errors[] = 'Name should not contain numbers.';
    } elseif (!preg_match("/^[a-zA-Z\s.'-]{2,60}$/u", $name_val)) {
        $errors[] = 'Please enter a valid name using letters only (min 2 characters).';
    }

    if ($company_val !== '') {
        if (!preg_match('/[a-zA-Z]/', $company_val)) {
            $errors[] = 'Company name must include at least one letter.';
        } elseif (!preg_match("/^[a-zA-Z0-9\s.&'-]{2,100}$/u", $company_val)) {
            $errors[] = 'Please enter a valid company name.';
        }
    }

    if ($email_val === '') {
        $errors[] = 'Please enter your email address.';
    } elseif (!filter_var($email_val, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please enter a valid email address.';
    }

    if ($phone_val === '') {
        $errors[] = 'Please enter your phone number.';
    } elseif (preg_match('/[^\d+\s().-]/', $phone_val)) {
        $errors[] = 'Phone number should contain only digits, +, spaces, brackets, or hyphens.';
    } elseif (strlen(preg_replace('/\D/', '', $phone_val)) < 10) {
        $errors[] = 'Please enter a valid phone number (at least 10 digits).';
    }

    if ($message_val === '') {
        $errors[] = 'Please enter your message.';
    } elseif (strlen($message_val) < 10) {
        $errors[] = 'Message should be at least 10 characters long.';
    }

    if (!empty($errors)) {
        $msg = implode('<br>', $errors);
        $form_alert = 'error';
    } else {
        $email_body = '';
        $email_body .= 'Name: ' . htmlspecialchars($name_val, ENT_QUOTES, 'UTF-8') . "<br />\r\n";
        $email_body .= 'Email: ' . htmlspecialchars($email_val, ENT_QUOTES, 'UTF-8') . "<br />\r\n";
        $email_body .= 'Number: ' . htmlspecialchars($phone_val, ENT_QUOTES, 'UTF-8') . "<br />\r\n";
        if ($company_val !== '') {
            $email_body .= 'Company: ' . htmlspecialchars($company_val, ENT_QUOTES, 'UTF-8') . "<br />\r\n";
        }
        $assist_labels = [
            'it-consulting'     => 'IT Consulting',
            'bpo-calling'       => 'BPO & Calling',
            'web-development'   => 'Web Development',
            'mobile-apps'       => 'Mobile Apps',
            'digital-marketing' => 'Digital Marketing',
            'career'            => 'Career / Job Application',
        ];
        $assist_val = is_array($assist ?? null) ? trim($assist[0] ?? '') : trim($assist ?? '');
        $assist_text = isset($assist_labels[$assist_val]) ? $assist_labels[$assist_val] : 'Not specified';
        $email_body .= "How we can assist: $assist_text<br />\r\n";
        $email_body .= 'Message: ' . nl2br(htmlspecialchars($message_val, ENT_QUOTES, 'UTF-8')) . "<br />\r\n";

        $to  = $mail_config['to_email'];
        $sub = 'Enquiry from ' . $name_val;

        $result = gb_send_contact_email($mail_config, $to, $sub, $email_body, $email_val, $name_val);

        if ($result['ok']) {
            $msg = 'Thank You, Your Query has been Sent Successfully !';
            $form_alert = 'success';
            $name = $company = $email = $phone = $message = '';
        } else {
            $msg = 'Sorry! please try again or contact service provider.';
            $form_alert = 'error';
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
<?php include __DIR__ . '/includes/google-tag.php'; ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/jquery-ui.css" rel="stylesheet">
    <link href="assets/css/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link href="assets/css/boxicons.min.css" rel="stylesheet">
    <?php include __DIR__ . '/includes/head-style.php'; ?>
    <title>Contact GrowBoostly</title>
    <link rel="icon" href="assets/img/fav-icon.svg" type="image/gif" sizes="20x20">
    <style>
        :root {
            --c-blue: #2563eb;
            --c-green: #16c784;
            --c-slate: #f8fafc;
            --c-dark: #0f172a;
            --c-text: #334155;
            --grad-bg: linear-gradient(135deg, #f0fdf4 0%, #eff6ff 100%);
        }
        body { background: #fff; color: var(--c-text); font-family: 'Inter', sans-serif; }
        
        /* Hero */
        .b2b-contact-hero {
            padding: 140px 20px 100px;
            background: var(--grad-bg);
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .b2b-contact-hero h1 { font-size: clamp(38px, 5vw, 56px); font-weight: 800; color: var(--c-dark); margin-bottom: 18px; letter-spacing: -1px; }
        .b2b-contact-hero p { font-size: 18px; color: #475569; max-width: 650px; margin: 0 auto; line-height: 1.7; }
        
        /* Contact Cards */
        .contact-cards-wrap {
            margin-top: -60px;
            position: relative;
            z-index: 10;
        }
        .b2b-contact-card {
            background: #fff;
            border-radius: 16px;
            padding: 35px 25px;
            text-align: center;
            box-shadow: 0 12px 32px rgba(15,23,42,0.06);
            border: 1px solid #e2e8f0;
            transition: transform 0.3s ease;
            height: 100%;
        }
        .b2b-contact-card:hover { transform: translateY(-5px); }
        .b2b-contact-card.card-support { background: linear-gradient(145deg, #f0f9ff 0%, #e0f2fe 100%); border-color: #bae6fd; }
        .b2b-contact-card.card-sales { background: linear-gradient(145deg, #fdf4ff 0%, #fae8ff 100%); border-color: #f5d0fe; }
        .b2b-contact-card.card-office { background: linear-gradient(145deg, #f0fdf4 0%, #dcfce7 100%); border-color: #bbf7d0; }
        .b2b-contact-card .icon-circle {
            width: 64px; height: 64px; border-radius: 50%;
            background: linear-gradient(135deg, rgba(37,99,235,0.1), rgba(22,199,132,0.1));
            color: var(--c-blue); font-size: 26px;
            display: flex; align-items: center; justify-content: center;
            margin: 0 auto 20px;
        }
        .b2b-contact-card h4 { font-size: 20px; font-weight: 700; color: var(--c-dark); margin-bottom: 12px; }
        .b2b-contact-card a { color: var(--c-text); font-size: 15px; font-weight: 500; display: block; margin-bottom: 6px; transition: color 0.2s; }
        .b2b-contact-card a:hover { color: var(--c-blue); }
        .b2b-contact-card p { color: #64748b; font-size: 14px; margin: 0; }

        /* Form Area */
        .b2b-form-section { padding: 100px 0; background: #fff; }
        .b2b-form-wrap {
            background: #fff; border-radius: 24px; padding: 50px;
            box-shadow: 0 20px 60px rgba(15,23,42,0.05); border: 1px solid #e2e8f0;
        }
        .b2b-form-wrap h3 { font-size: 32px; font-weight: 700; color: var(--c-dark); margin-bottom: 10px; }
        .b2b-form-wrap > p { color: #64748b; font-size: 16px; margin-bottom: 35px; }
        
        .b2b-input-group { margin-bottom: 24px; text-align: left; }
        .b2b-input-group label { display: block; font-size: 14px; font-weight: 600; color: #334155; margin-bottom: 8px; }
        .b2b-input-group input, .b2b-input-group textarea {
            width: 100%; padding: 14px 18px; border: 1px solid #cbd5e1; border-radius: 12px;
            font-size: 15px; transition: all 0.2s ease; background: #f8fafc;
        }
        .b2b-input-group input:focus, .b2b-input-group textarea:focus { outline: none; border-color: var(--c-blue); box-shadow: 0 0 0 4px rgba(37,99,235,0.1); background: #fff; }
        .b2b-input-group textarea { height: 140px; resize: vertical; }
        
        .b2b-tag-grid { display: flex; flex-wrap: wrap; gap: 10px; margin-top: 10px; }
        .b2b-tag-item {
            padding: 10px 18px; border-radius: 30px; border: 1px solid #cbd5e1; background: #fff;
            color: #475569; font-size: 14px; font-weight: 500; cursor: pointer; transition: all 0.2s;
            user-select: none;
        }
        .b2b-tag-item input { display: none; }
        .b2b-tag-item:has(input:checked) { background: var(--c-blue); color: #fff; border-color: var(--c-blue); box-shadow: 0 4px 12px rgba(37,99,235,0.2); }
        
        .b2b-submit-btn {
            background: linear-gradient(135deg, var(--c-green), var(--c-blue)); color: #fff;
            padding: 16px 32px; border-radius: 12px; font-size: 16px; font-weight: 700; border: none;
            width: 100%; cursor: pointer; transition: transform 0.2s, box-shadow 0.2s; margin-top: 20px;
        }
        .b2b-submit-btn:hover { transform: translateY(-2px); box-shadow: 0 10px 20px rgba(37,99,235,0.2); }

        .b2b-form-alert {
            padding: 14px 18px;
            border-radius: 12px;
            font-size: 15px;
            font-weight: 500;
            margin-bottom: 28px;
            text-align: center;
        }
        .b2b-form-alert.success {
            background: #ecfdf5;
            color: #047857;
            border: 1px solid #a7f3d0;
        }
        .b2b-form-alert.error {
            background: #fef2f2;
            color: #b91c1c;
            border: 1px solid #fecaca;
        }
        
        /* Map Area */
        .b2b-map-wrap { max-width: 1200px; margin: 0 auto 100px; padding: 0 20px; }
        .b2b-map-wrap iframe {
            width: 100%; height: 450px; border-radius: 20px; border: none;
            box-shadow: 0 16px 40px rgba(15,23,42,0.08); filter: grayscale(20%); transition: filter 0.3s;
        }
        .b2b-map-wrap iframe:hover { filter: grayscale(0%); }

        @media (max-width: 768px) {
            .b2b-form-wrap { padding: 30px 20px; }
            .b2b-contact-hero { padding: 120px 20px 60px; }
        }
    </style>
</head>
<body class="digital-agency">
    <?php include 'header.php'; ?>

    <section class="b2b-contact-hero">
        <div class="container">
            <h1>Get in Touch with GrowBoostly</h1>
            <p>Ready to accelerate your business growth? Whether you need BPO support, custom software, or digital marketing, our team is here to help.</p>
        </div>
    </section>

    <div class="container contact-cards-wrap">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="b2b-contact-card card-support">
                    <div class="icon-circle"><i class="bi bi-headset"></i></div>
                    <h4>Support</h4>
                    <a href="tel:+919919020887">+91-9919020887</a>
                    <p>Call us 24/7 for operational support</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="b2b-contact-card card-sales">
                    <div class="icon-circle"><i class="bi bi-envelope"></i></div>
                    <h4>Sales</h4>
                    <a href="mailto:info@growboostly.com">info@growboostly.com</a>
                    <a href="mailto:growboostly@gmail.com">growboostly@gmail.com</a>
                    <p>Discuss new projects and partnerships</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="b2b-contact-card card-office">
                    <div class="icon-circle"><i class="bi bi-geo-alt"></i></div>
                    <h4>Our Office</h4>
                    <a href="https://maps.google.com">Pratap Tower, Office No. 1, 4th Floor<br>Near Phoenix Mall, LDA Colony<br>Lucknow — 226012, UP, India</a>
                </div>
            </div>
        </div>
    </div>

    <section class="b2b-form-section" id="contact-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="b2b-form-wrap">
                        <div class="text-center">
                            <h3>Collaborate with Us!</h3>
                            <p>Fill out the form below and our team will get back to you within 24 hours.</p>
                        </div>
                        <?php if (@$submit == 'submit' && $msg !== '') : ?>
                        <div class="b2b-form-alert <?php echo htmlspecialchars($form_alert, ENT_QUOTES, 'UTF-8'); ?>">
                            <?php echo $msg; ?>
                        </div>
                        <?php endif; ?>
                        <form method="post" action="#contact-form" novalidate>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="b2b-input-group">
                                        <label>Full Name</label>
                                        <input type="text" name="name" placeholder="John Doe" value="<?php echo htmlspecialchars($name ?? '', ENT_QUOTES, 'UTF-8'); ?>" pattern="[A-Za-z][A-Za-z\s.'-]{1,59}" title="Letters only — no numbers" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="b2b-input-group">
                                        <label>Company</label>
                                        <input type="text" name="company" placeholder="Acme Corp" value="<?php echo htmlspecialchars($company ?? '', ENT_QUOTES, 'UTF-8'); ?>" pattern="[A-Za-z0-9][A-Za-z0-9\s.&'-]{1,99}" title="Enter a valid company name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="b2b-input-group">
                                        <label>Email Address</label>
                                        <input type="email" name="email" placeholder="john@example.com" value="<?php echo htmlspecialchars($email ?? '', ENT_QUOTES, 'UTF-8'); ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="b2b-input-group">
                                        <label>Phone Number</label>
                                        <input type="tel" name="phone" placeholder="+91 99190 20887" value="<?php echo htmlspecialchars($phone ?? '', ENT_QUOTES, 'UTF-8'); ?>" pattern="[\d+\s().-]{10,}" title="At least 10 digits" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="b2b-input-group">
                                        <label>How can we assist you?</label>
                                        <div class="b2b-tag-grid">
                                            <?php
                                            $assist_options = [
                                                'it-consulting'     => 'IT Consulting',
                                                'bpo-calling'       => 'BPO & Calling',
                                                'web-development'   => 'Web Development',
                                                'mobile-apps'       => 'Mobile Apps',
                                                'digital-marketing' => 'Digital Marketing',
                                                'career'            => 'Career / Job Application',
                                            ];
                                            $assist_current = is_array($assist ?? null) ? ($assist[0] ?? '') : ($assist ?? '');
                                            foreach ($assist_options as $value => $label) :
                                                $checked = ($assist_current === $value) ? ' checked' : '';
                                                $id_attr = $value === 'career' ? ' id="assist-career"' : '';
                                            ?>
                                            <label class="b2b-tag-item"><input type="radio" name="assist" value="<?php echo htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); ?>"<?php echo $checked . $id_attr; ?>> <?php echo htmlspecialchars($label, ENT_QUOTES, 'UTF-8'); ?></label>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="b2b-input-group">
                                        <label>Your Message</label>
                                        <textarea id="contact-message" name="message" placeholder="Tell us about your project or requirements..." required><?php echo htmlspecialchars($message ?? '', ENT_QUOTES, 'UTF-8'); ?></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" name="submit" value="submit" class="b2b-submit-btn">Send Message <i class="bi bi-arrow-right ms-2"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="b2b-map-wrap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.011589095241!2d80.8945316!3d26.7972867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bffc21bca7cc5%3A0xa872f4ed3415f7b!2sGrow%20Boostly!5e0!3m2!1sen!2sin!4v1777701433834!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <?php include 'footer.php'; ?>
    
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script>
    (function () {
        var params = new URLSearchParams(window.location.search);
        var ref = params.get('ref');
        if (!ref || ref.indexOf('career-') !== 0) return;

        var careerRadio = document.getElementById('assist-career');
        if (careerRadio) careerRadio.checked = true;

        var roleMap = {
            'career-performance-marketing': 'Performance Marketing Executive',
            'career-seo-content': 'SEO & Content Strategist',
            'career-ui-ux': 'UI/UX Designer',
            'career-ai-automation': 'AI Automation Engineer',
            'career-b2b-lead-gen': 'B2B Lead Generation Specialist',
            'career-telecaller': 'Telecaller Executive',
            'career-digital-marketing': 'Digital Marketing Executive'
        };

        var role = roleMap[ref];
        var message = document.getElementById('contact-message');
        if (message && role) {
            message.placeholder = 'I am applying for the ' + role + ' position. Please find my resume details and a brief note below...';
        }

        if (window.location.hash === '#contact-form') {
            var formSection = document.getElementById('contact-form');
            if (formSection) formSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    })();
    </script>
</body>
</html>
