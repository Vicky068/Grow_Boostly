<!doctype html>
<html lang="en">

<head>
<?php include __DIR__ . '/../includes/google-tag.php'; ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Grow enrollments with growboostly’s Education Marketing Services. Get education lead generation, EdTech marketing solutions, webinar funnels, ads and student follow-up automation.">
    <meta name="keywords" content="education marketing services, education lead generation, EdTech marketing solutions, webinar funnels, student acquisition, growboostly">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph -->
    <meta property="og:title" content="Education Marketing Services for Coaching &amp; EdTech | growboostly">
    <meta property="og:description" content="Grow enrollments with growboostly’s Education Marketing Services. Get education lead generation, EdTech marketing solutions, webinar funnels, ads and student follow-up automation.">
    <meta property="og:url" content="https://www.growboostly.com/industries/education-coaching">
    <meta property="og:type" content="website">

    <!-- Bootstrap CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/jquery-ui.css" rel="stylesheet">
    <!-- Bootstrap Icon CSS -->
    <link href="../assets/css/bootstrap-icons.css" rel="stylesheet">
    <!-- CSS -->
    <link href="../assets/css/animate.min.css" rel="stylesheet">
    <!-- FancyBox CSS -->
    <link href="../assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <!-- Swiper slider CSS -->
    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
    <!--Nice Select CSS -->
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <!-- Slick slider CSS -->
    <link rel="stylesheet" href="../assets/css/slick.css">
    <link rel="stylesheet" href="../assets/css/slick-theme.css">
    <!-- BoxIcon CSS -->
    <link href="../assets/css/boxicons.min.css" rel="stylesheet">
    <!-- Style CSS -->
    <?php include __DIR__ . '/../includes/head-style.php'; ?>
    
    <!-- Title -->
    <title>Education Marketing Services for Coaching &amp; EdTech | growboostly</title>
    <link rel="icon" href="../assets/img/fav-icon.svg" type="image/gif" sizes="20x20">

    <style>
        /* ── EDUCATION & COACHING THEME VARIABLES ── */
        :root {
            --ed-primary: #6366f1;      /* Modern Indigo */
            --ed-dark: #4f46e5;         /* Deep Rich Indigo */
            --ed-light: #e0e7ff;        /* Ultra Light Indigo */
            --ed-accent: #f97316;       /* Actionable Orange */
            --ed-border: #c7d2fe;       /* Indigo Border */
            --ed-navy: #0f172a;         /* Charcoal Slate */
            --ed-text-gray: #475569;
        }

        /* ── HERO SECTION ── */
        .ed-modern-hero {
            background: radial-gradient(circle at 10% 20%, rgba(99,102,241,0.06) 0%, rgba(255,255,255,0) 50%), #ffffff;
            padding: 110px 0 90px;
            overflow: hidden;
            position: relative;
            border-bottom: 1px solid var(--ed-border);
        }
        .ed-modern-hero .hero-content-wrap {
            position: relative;
            z-index: 2;
        }
        .ed-modern-hero .breadcrumb-list {
            justify-content: flex-start;
            margin-bottom: 25px;
            padding: 0;
            display: flex;
            align-items: center;
            gap: 8px;
            list-style: none;
        }
        .ed-modern-hero .breadcrumb-list li, .ed-modern-hero .breadcrumb-list li a {
            font-size: 14px;
            font-weight: 500;
            color: var(--ed-text-gray);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .ed-modern-hero .breadcrumb-list li a:hover {
            color: var(--ed-primary);
        }
        .ed-modern-hero .ed-tag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(99,102,241,0.08);
            color: var(--ed-dark);
            padding: 6px 18px;
            border-radius: 30px;
            font-weight: 700;
            font-size: 13px;
            margin-bottom: 24px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border: 1px solid rgba(99,102,241,0.15);
        }
        .ed-modern-hero h1 {
            font-size: clamp(36px, 4.8vw, 36px);
            font-weight: 850;
            color: var(--ed-navy);
            line-height: 1.15;
            margin-bottom: 24px;
            letter-spacing: -1.2px;
        }
        .ed-modern-hero h3 {
            font-size: 22px;
            font-weight: 600;
            color: var(--ed-primary);
            margin-bottom: 24px;
            line-height: 1.4;
        }
        .ed-modern-hero p {
            font-size: 17.5px;
            color: var(--ed-text-gray);
            line-height: 1.65;
            margin-bottom: 36px;
        }
        .ed-modern-hero .hero-actions {
            display: flex;
            gap: 16px;
            align-items: center;
            flex-wrap: wrap;
            margin-bottom: 48px;
        }
        .ed-modern-hero .btn-primary {
            background: linear-gradient(135deg, var(--ed-primary) 0%, var(--ed-dark) 100%);
            color: #fff !important;
            padding: 16px 36px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 16px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(99,102,241,0.2);
            border: none;
        }
        .ed-modern-hero .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 25px rgba(99,102,241,0.3);
            color: #fff !important;
        }
        .ed-modern-hero .btn-secondary {
            background: #fff;
            color: var(--ed-navy);
            padding: 15px 32px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 16px;
            text-decoration: none;
            border: 2px solid var(--ed-border);
            transition: all 0.3s ease;
        }
        .ed-modern-hero .btn-secondary:hover {
            border-color: var(--ed-primary);
            color: var(--ed-primary);
        }
        .ed-modern-hero .hero-stats {
            display: flex;
            gap: 40px;
            border-top: 1px solid #e2e8f0;
            padding-top: 32px;
        }
        .ed-modern-hero .stat-block strong {
            display: block;
            font-size: 28px;
            font-weight: 800;
            color: var(--ed-navy);
            line-height: 1.2;
        }
        .ed-modern-hero .stat-block span {
            font-size: 13px;
            color: var(--ed-text-gray);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 600;
        }

        /* Hero Image & Floating Cards */
        .ed-modern-hero .hero-visual-wrapper {
            position: relative;
            width: 100%;
            height: 100%;
            min-height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .ed-modern-hero .main-img {
            border-radius: 20px;
            box-shadow: 0 30px 60px rgba(15,23,42,0.12);
            max-width: 100%;
            height: auto;
            position: relative;
            z-index: 2;
            border: 1px solid var(--ed-border);
        }
        .ed-modern-hero .floating-card {
            position: absolute;
            background: #fff;
            padding: 20px 24px;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(15,23,42,0.06);
            border: 1px solid var(--ed-border);
            z-index: 3;
            display: flex;
            align-items: center;
            gap: 16px;
            animation: ed-float 6s ease-in-out infinite;
        }
        .ed-modern-hero .floating-card .icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: rgba(99,102,241,0.1);
            color: var(--ed-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }
        .ed-modern-hero .floating-card strong {
            display: block;
            font-size: 22px;
            font-weight: 800;
            color: var(--ed-navy);
            line-height: 1.2;
        }
        .ed-modern-hero .floating-card span {
            display: block;
            font-size: 13px;
            color: var(--ed-text-gray);
            font-weight: 500;
        }
        .ed-modern-hero .ed-fc-1 {
            top: 10%;
            left: -5%;
            animation-delay: 0s;
        }
        .ed-modern-hero .ed-fc-2 {
            bottom: 15%;
            right: -5%;
            animation-delay: 2.5s;
        }
        @keyframes ed-float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        @media (max-width: 991px) {
            .ed-modern-hero .hero-visual-wrapper {
                margin-bottom: 60px;
                min-height: 400px;
            }
            .ed-modern-hero .ed-fc-1 { left: 5%; }
            .ed-modern-hero .ed-fc-2 { right: 5%; }
            .ed-modern-hero .hero-stats { gap: 24px; flex-wrap: wrap; }
        }

        /* ── STATS BAR ── */
        .ed-stats-bar {
            background: linear-gradient(135deg, var(--ed-navy) 0%, #1e293b 100%);
            padding: 50px 0;
            margin-bottom: 80px;
        }
        .ed-stats-bar .stat-item {
            text-align: center;
            padding: 20px 15px;
            border-right: 1px solid rgba(255,255,255,0.12);
        }
        .ed-stats-bar .stat-item:last-child { border-right: none; }
        .ed-stats-bar .stat-number {
            font-size: 44px;
            font-weight: 850;
            color: #fff;
            line-height: 1;
            margin-bottom: 8px;
        }
        .ed-stats-bar .stat-number span { color: var(--ed-accent); }
        .ed-stats-bar .stat-label {
            font-size: 14px;
            color: rgba(255,255,255,0.7);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 500;
        }
        @media (max-width: 767px) {
            .ed-stats-bar .stat-item { border-right: none; border-bottom: 1px solid rgba(255,255,255,0.1); }
            .ed-stats-bar .stat-item:last-child { border-bottom: none; }
        }

        /* ── SECTION TITLE HELPER ── */
        .ed-section-title {
            margin-bottom: 48px;
            text-align: center;
        }
        .ed-section-title h2 { font-size: 34px; font-weight: 800; color: var(--ed-navy); }
        .ed-section-title p {
            font-size: 16px;
            color: var(--ed-text-gray);
            max-width: 720px;
            margin: 14px auto 0;
            text-align: center;
            line-height: 1.75;
        }
        .ed-section-title .title-tag {
            display: inline-block;
            background: var(--ed-light);
            color: var(--ed-dark);
            font-size: 13px;
            font-weight: 700;
            padding: 5px 16px;
            border-radius: 20px;
            margin-bottom: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* ── WHAT IS / EDITORIAL GRID ── */
        .ed-what-section { padding: 90px 0; background: #fff; overflow: hidden; }
        .ed-what-inner { display: grid; grid-template-columns: 1.1fr 0.9fr; gap: 60px; align-items: center; }
        @media (max-width: 1199px) { .ed-what-inner { grid-template-columns: 1fr; } }
        .ed-what-left .eyebrow { display: inline-block; background: var(--ed-light); color: var(--ed-primary); font-size: 12px; font-weight: 800; padding: 6px 16px; border-radius: 30px; text-transform: uppercase; letter-spacing: .8px; margin-bottom: 20px; }
        .ed-what-left h2 { font-size: clamp(30px, 3.8vw, 44px); font-weight: 850; color: var(--ed-navy); line-height: 1.15; margin-bottom: 24px; letter-spacing: -0.8px; }
        .ed-what-left p { font-size: 16.5px; color: var(--ed-text-gray); line-height: 1.75; margin-bottom: 28px; }
        .ed-what-left .ed-highlight { color: var(--ed-primary); font-weight: 700; }
        
        .ed-btn-solid {
            background: linear-gradient(135deg, var(--ed-primary) 0%, var(--ed-dark) 100%);
            color: #fff !important;
            padding: 16px 36px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 16px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(99,102,241,0.15);
            border: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .ed-btn-solid:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 25px rgba(99,102,241,0.25);
            color: #fff !important;
        }

        .ed-struggle-box { 
            background: #fbfbfe; 
            border: 1.5px solid var(--ed-border); 
            border-radius: 16px; 
            padding: 32px; 
            margin-top: 30px; 
            box-shadow: 0 8px 30px rgba(99,102,241, 0.02);
        }
        .ed-struggle-box h4 { color: var(--ed-dark); font-weight: 800; font-size: 20px; margin-bottom: 12px; }
        .ed-struggle-box p { font-size: 15px; margin-bottom: 0; color: var(--ed-dark); }
        .ed-struggle-list { list-style: none; padding: 0; margin: 24px 0 0; }
        .ed-struggle-list li { display: flex; align-items: flex-start; gap: 12px; font-size: 15.5px; font-weight: 700; color: var(--ed-navy); margin-bottom: 16px; }
        .ed-struggle-list li i { color: var(--ed-primary); flex-shrink: 0; font-size: 18px; }

        /* ── STRATEGY SECTION ── */
        .ed-strategy {
            padding: 90px 0;
            background: #fafafa;
            border-top: 1px solid #f1f5f9;
        }
        .ed-feature-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            margin-top: 35px;
        }
        @media (max-width: 767px) { .ed-feature-grid { grid-template-columns: 1fr; } }
        
        .ed-feature-card {
            background: #fff;
            border: 1.5px solid #f1f5f9;
            border-radius: 16px;
            padding: 30px 24px;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            gap: 12px;
            height: 100%;
        }
        .ed-feature-card:hover {
            border-color: var(--ed-primary);
            box-shadow: 0 12px 36px rgba(99,102,241,0.08);
            transform: translateY(-4px);
        }
        .ed-feature-card .icon-wrap {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: var(--ed-light);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: var(--ed-primary);
        }
        .ed-feature-card h5 {
            font-size: 17.5px;
            font-weight: 800;
            color: var(--ed-navy);
            margin: 0;
        }
        .ed-feature-card p {
            font-size: 14.5px;
            color: var(--ed-text-gray);
            margin: 0;
            line-height: 1.6;
        }

        /* ── ORBIT FLYWHEEL SECTION ── */
        .ed-flywheel-section {
            padding: 95px 0;
            background: #fff;
        }
        .ed-flywheel-section .ed-flywheel-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 20px;
            border-radius: 30px;
            font-weight: 800;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            color: #fff;
            background: linear-gradient(135deg, var(--ed-primary) 0%, var(--ed-accent) 100%);
            box-shadow: 0 8px 24px rgba(99, 102, 241, 0.28);
            margin-bottom: 16px;
        }
        .ed-flywheel-section h2 {
            font-size: clamp(28px, 3.2vw, 40px);
            font-weight: 850;
            color: var(--ed-navy);
            letter-spacing: -0.8px;
            margin-bottom: 18px;
            line-height: 1.2;
        }
        .ed-flywheel-section h2 .ed-highlight-compounding {
            background: linear-gradient(135deg, var(--ed-primary) 0%, var(--ed-accent) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .ed-flywheel-wrap { position: relative; max-width: 600px; margin: 0 auto; }
        .ed-flywheel-hub { 
            width: 170px; 
            height: 170px; 
            border-radius: 50%; 
            background: var(--ed-navy); 
            display: flex; 
            flex-direction: column; 
            align-items: center; 
            justify-content: center; 
            text-align: center; 
            position: absolute; 
            top: 50%; 
            left: 50%; 
            transform: translate(-50%, -50%); 
            z-index: 10; 
            box-shadow: 0 0 0 16px rgba(99,102,241,.08), 0 0 0 32px rgba(99,102,241,.04); 
        }
        .ed-flywheel-hub h4 { font-size: 15.5px; font-weight: 900; color: #fff; margin: 0; line-height: 1.3; }
        .ed-flywheel-hub span { font-size: 11px; color: var(--ed-primary); font-weight: 700; text-transform: uppercase; letter-spacing: .6px; }
        
        .ed-orbit { position: relative; width: 540px; height: 540px; margin: 0 auto; }
        @media (max-width: 767px) { .ed-orbit { width: 340px; height: 340px; } }
        .ed-orbit::before { content: ''; position: absolute; inset: 0; border-radius: 50%; border: 2px dashed rgba(99,102,241,.25); }
        .ed-orbit-node { position: absolute; width: 125px; text-align: center; transform: translate(-50%, -50%); }
        @media (max-width: 767px) { .ed-orbit-node { width: 85px; } }
        .ed-orbit-node .on-circle { 
            width: 62px; 
            height: 62px; 
            border-radius: 50%; 
            background: #fff; 
            border: 2px solid var(--ed-border); 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            font-size: 22px; 
            margin: 0 auto 8px; 
            box-shadow: 0 4px 16px rgba(0,0,0,.06); 
            transition: all .3s; 
        }
        @media (max-width: 767px) { .ed-orbit-node .on-circle { width: 44px; height: 44px; font-size: 16px; } }
        .ed-orbit-node:hover .on-circle { background: var(--ed-primary); border-color: var(--ed-primary); box-shadow: 0 0 0 8px rgba(99,102,241,.15); color: #fff; }
        .ed-orbit-node:hover .on-circle i { color: #fff; }
        .ed-orbit-node .on-label { font-size: 11.5px; font-weight: 800; color: var(--ed-navy); text-transform: uppercase; letter-spacing: .6px; line-height: 1.3; }
        .ed-orbit-node .on-sub { font-size: 10px; color: var(--ed-text-gray); margin-top: 3px; }
        
        /* Node Positions */
        .ed-orbit-node:nth-child(1) { top: 0%;   left: 50%; }
        .ed-orbit-node:nth-child(2) { top: 25%;  left: 93.3%; }
        .ed-orbit-node:nth-child(3) { top: 75%;  left: 93.3%; }
        .ed-orbit-node:nth-child(4) { top: 100%; left: 50%; }
        .ed-orbit-node:nth-child(5) { top: 75%;  left: 6.7%; }
        .ed-orbit-node:nth-child(6) { top: 25%;  left: 6.7%; }

        @media (max-width: 767px) {
            .ed-flywheel-section, .ed-flywheel-wrap, .ed-orbit { display: none !important; }
        }

        /* ── EXPERT BOOKING ── */
        .ed-expert-section {
            padding: 90px 0;
            background: #fafafa;
            border-top: 1px solid #f1f5f9;
            border-bottom: 1px solid #f1f5f9;
        }
        .ed-expert-card {
            background: #fff;
            border-radius: 20px;
            padding: 45px;
            box-shadow: 0 20px 50px rgba(15,23,42,0.05);
            border: 1px solid var(--ed-border);
        }

        /* ── FAQ ── */
        .ed-faq {
            padding: 90px 0;
        }
        .ed-faq .accordion-item {
            border: 1px solid var(--ed-border);
            border-radius: 12px !important;
            margin-bottom: 16px;
            overflow: hidden;
        }
        .ed-faq .accordion-button {
            font-size: 16.5px;
            font-weight: 700;
            color: var(--ed-navy);
            background: #fff;
            padding: 22px 24px;
        }
        .ed-faq .accordion-button:not(.collapsed) {
            color: var(--ed-dark);
            background: var(--ed-light);
            box-shadow: none;
        }
        .ed-faq .accordion-body {
            font-size: 15px;
            color: var(--ed-text-gray);
            padding: 18px 24px 22px;
            background: #fbfbfe;
            line-height: 1.65;
        }

        /* ── FINAL CTA ── */
        .ed-final-cta {
            padding: 95px 0;
            background: linear-gradient(135deg, var(--ed-primary) 0%, var(--ed-dark) 100%);
            text-align: center;
            color: #fff;
            position: relative;
            overflow: hidden;
        }
        .ed-final-cta::before {
            content: '';
            position: absolute;
            top: -20%;
            left: -10%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(255,255,255,0.08) 0%, transparent 60%);
            pointer-events: none;
        }
        .ed-final-cta h2 {
            font-size: 38px;
            font-weight: 850;
            color: #fff;
            margin-bottom: 18px;
            letter-spacing: -0.8px;
        }
        .ed-final-cta p {
            font-size: 18px;
            color: rgba(255,255,255,0.9);
            margin-bottom: 36px;
            max-width: 720px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.7;
        }
        .ed-final-cta .cta-phone {
            font-size: 22px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 30px;
            display: block;
        }
        .ed-final-cta .cta-phone a { color: #fff; text-decoration: none; }
        .ed-final-cta .cta-phone a:hover { text-decoration: underline; }
        
        .ed-cta-btn {
            display: inline-block;
            background: #fff;
            color: var(--ed-dark);
            font-size: 16px;
            font-weight: 700;
            padding: 16px 38px;
            border-radius: 40px;
            text-decoration: none;
            margin: 6px 8px;
            transition: all 0.3s;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .ed-cta-btn:hover {
            background: var(--ed-navy);
            color: #fff;
            transform: translateY(-2px);
        }
        .ed-cta-btn.outline {
            background: transparent;
            color: #fff;
            border: 2px solid rgba(255,255,255,0.7);
            box-shadow: none;
        }
        .ed-cta-btn.outline:hover {
            background: #fff;
            color: var(--ed-dark);
        }
        .ed-final-cta .highlight-note {
            display: inline-block;
            background: rgba(255,255,255,0.12);
            border: 1px solid rgba(255,255,255,0.25);
            border-radius: 8px;
            padding: 14px 28px;
            font-size: 15px;
            color: #fff;
            margin-top: 36px;
            font-weight: 600;
        }

        .ed-brands-section {
            padding: 90px 0;
            background: var(--ed-light);
            border-top: 1px solid var(--ed-border);
            border-bottom: 1px solid var(--ed-border);
        }
        .ed-brands-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            margin-top: 40px;
        }
        @media (max-width: 991px) { .ed-brands-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 575px) { .ed-brands-grid { grid-template-columns: 1fr; } }
        .ed-brand-card {
            background: #fff;
            border: 1px solid var(--ed-border);
            border-radius: 16px;
            padding: 28px 24px;
            transition: all 0.3s ease;
        }
        .ed-brand-card:hover {
            border-color: var(--ed-primary);
            box-shadow: 0 12px 30px rgba(99,102,241,0.12);
            transform: translateY(-4px);
        }
        .ed-brand-card .icon { font-size: 28px; margin-bottom: 14px; }
        .ed-brand-card h5 { font-size: 17px; font-weight: 800; color: var(--ed-navy); margin-bottom: 10px; }
        .ed-brand-card p { font-size: 14px; color: var(--ed-text-gray); margin: 0; line-height: 1.6; }

        .ed-deliverables-section { padding: 90px 0; background: #fff; }
        .ed-deliverables-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 28px;
            margin-top: 40px;
        }
        @media (max-width: 767px) { .ed-deliverables-grid { grid-template-columns: 1fr; } }
        .ed-deliverable-item {
            display: flex;
            gap: 18px;
            padding: 24px;
            border-radius: 14px;
            border: 1px solid #e2e8f0;
            background: #f8fafc;
        }
        .ed-deliverable-item .num {
            flex-shrink: 0;
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--ed-primary), var(--ed-dark));
            color: #fff;
            font-weight: 800;
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .ed-deliverable-item h5 { font-size: 16px; font-weight: 800; color: var(--ed-navy); margin-bottom: 8px; }
        .ed-deliverable-item p { font-size: 14px; color: var(--ed-text-gray); margin: 0; line-height: 1.65; }

        .ed-industries-section {
            padding: 85px 0;
            background: var(--ed-navy);
            color: #fff;
        }
        .ed-industries-section h2 { color: #fff; font-weight: 850; margin-bottom: 12px; }
        .ed-industries-list {
            list-style: none;
            padding: 0;
            margin: 0;
            border-top: 1px solid rgba(255,255,255,0.12);
        }
        .ed-industries-list li a {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 0;
            border-bottom: 1px solid rgba(255,255,255,0.12);
            color: rgba(255,255,255,0.9);
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.25s;
        }
        .ed-industries-list li a:hover { color: var(--ed-accent); padding-left: 10px; }
        .ed-industries-list .ind-left { display: flex; align-items: center; gap: 14px; }
        .ed-industries-list .ind-icon { font-size: 22px; }

        /* ── WHY CHOOSE SECTION ── */
        .ed-choose-section {
            padding: 95px 0;
            background: #fafafa;
            border-top: 1px solid var(--ed-border);
            border-bottom: 1px solid var(--ed-border);
        }
        .ed-choose-section h2 { font-size: 34px; font-weight: 800; color: var(--ed-navy); margin-bottom: 24px; }
        .ed-choose-section p { font-size: 16px; color: var(--ed-text-gray); line-height: 1.75; }
        .ed-choose-section .title-tag {
            display: inline-block;
            background: var(--ed-light);
            color: var(--ed-dark);
            font-size: 13px;
            font-weight: 700;
            padding: 5px 16px;
            border-radius: 20px;
            margin-bottom: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .ed-value-card {
            background: #fff;
            border: 1px solid var(--ed-border);
            border-radius: 16px;
            padding: 24px;
            display: flex;
            gap: 20px;
            align-items: flex-start;
            transition: all 0.3s ease;
            height: 100%;
        }
        .ed-value-card:hover {
            border-color: var(--ed-primary);
            box-shadow: 0 12px 30px rgba(99,102,241,0.08);
            transform: translateY(-3px);
        }
        .ed-value-card .icon-box {
            width: 44px;
            height: 44px;
            border-radius: 10px;
            background: rgba(99,102,241,0.1);
            color: var(--ed-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            flex-shrink: 0;
        }
        .ed-value-card h5 {
            font-size: 16px;
            font-weight: 800;
            color: var(--ed-navy);
            margin-bottom: 0;
            line-height: 1.4;
        }
        .ed-value-card.single-line {
            align-items: center;
        }
    </style>
</head>

<body class="tt-magic-cursor digital-agency">

    <?php include '../header.php'; ?>

    <!-- ── EDUCATION HERO SECTION ── -->
    <div class="ed-modern-hero mb-0">
        <div class="container">
            <div class="row align-items-center g-5">
                <!-- Left Column: Text Content -->
                <div class="col-lg-6">
                    <div class="hero-content-wrap">
                        <div class="breadcrumb-list">
                            <li><a href="<?php echo gb_url('index'); ?>">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i></li>
                            <li><a href="<?php echo gb_url('industries'); ?>">Industries</a></li>
                            <li><i class="bi bi-chevron-right"></i></li>
                            <li>Education &amp; Coaching</li>
                        </div>
                        <span class="ed-tag mb-3">Education Marketing Services for Coaching Institutes, EdTech &amp; Student Growth</span>
                        <h1>Scale Your Enrollments, Students &amp; Coaching Clients</h1>
                        <h3>Data-Driven Student Acquisition Pathways.</h3>
                        <p>At growboostly, we are providing Education Marketing Services for coaching institutes, online course creators, EdTech platforms, schools, training centers and high-ticket coaches that want more student enquiries, better webinar attendance and predictable enrollment growth. We build enrollment pipelines using paid ads, webinar funnels, VSL pages, application forms, WhatsApp nurturing, education landing pages and student-focused automation.</p>
                        <p>Our approach helps education brands attract high-intent learners, qualify student interest, reduce wasted ad spend and fill cohorts with prospects who are more likely to attend, engage and enroll.</p>
                        <div class="hero-actions">
                            <a href="<?php echo gb_url('contact'); ?>?ref=ed-consultation" class="btn-primary">Book Free Consultation</a>
                            <a href="<?php echo gb_url('contact'); ?>?ref=ed-growth-plan" class="btn-secondary">Get Free Growth Plan</a>
                        </div>
                        <div class="hero-stats">
                            <div class="stat-block">
                                <strong>4.6x</strong>
                                <span>Average ROI</span>
                            </div>
                            <div class="stat-block">
                                <strong>80k+</strong>
                                <span>Students Enrolled</span>
                            </div>
                            <div class="stat-block">
                                <strong>92%</strong>
                                <span>Show-up Rate</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right Column: Visual Image -->
                <div class="col-lg-6">
                    <div class="hero-visual-wrapper">
                        <div class="floating-card ed-fc-1">
                            <div class="icon"><i class="bi bi-laptop-fill"></i></div>
                            <div>
                                <strong>+240%</strong>
                                <span>Enrollment Growth</span>
                            </div>
                        </div>
                        <img src="../assets/img/services/education-coaching-hero.png" alt="Education Marketing Services and student enrollment solutions by growboostly" class="main-img">
                        <div class="floating-card ed-fc-2">
                            <div class="icon"><i class="bi bi-person-video3"></i></div>
                            <div>
                                <strong>4.8x</strong>
                                <span>Webinar ROI</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ── STATS BAR ── -->
    <div class="ed-stats-bar">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number"><span>4.6</span>X+</div>
                        <div class="stat-label">Average Campaign ROI</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number"><span>80</span>k+</div>
                        <div class="stat-label">Students Acquired</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number"><span>92</span>%</div>
                        <div class="stat-label">Webinar Attendance Rate</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number"><span>30</span>%</div>
                        <div class="stat-label">Reduction in Cost-Per-Acquisition</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ── THE STRUGGLE / WHY IT MATTERS ── -->
    <section class="ed-what-section">
        <div class="container">
            <div class="ed-what-inner">
                <div class="ed-what-left">
                    <span class="eyebrow">The Challenge</span>
                    <h2>Are Your Course Ads Getting Clicks but No Enrollments?</h2>
                    <p>Educators often exhaust their resources on generic branding campaigns, cheap lead forms and broad social media promotions that only bring cold contacts. Buying lists, spamming groups or running ads without a funnel can lead to low trust, poor attendance rates and high cost-per-enrollment.</p>
                    <p>Many coaching institutes and EdTech brands face the same problem: traffic comes in, but the student journey is weak. Landing pages do not explain outcomes clearly, webinar reminders are missing, WhatsApp follow-ups are inconsistent, and there is no proper qualification before the counseling call.</p>
                    <p>At growboostly, we design <span class="ed-highlight">high-intent student pathways</span>. As an EdTech Marketing Agency in Lucknow, we build EdTech Marketing Solutions that connect ads, landing pages, application forms, webinar reminders, CRM tracking and enrollment follow-ups into one clear growth system.</p>
                    
                    <a href="<?php echo gb_url('contact'); ?>?ref=ed-project-discussion" class="ed-btn-solid">Discuss Your Project <i class="bi bi-arrow-right ms-2"></i></a>
                </div>
                
                <div>
                    <div class="ed-struggle-box">
                        <h4>Struggling with these education marketing bottlenecks?</h4>
                        <p>Our tailored Education Marketing Services resolve these issues:</p>
                        <ul class="ed-struggle-list">
                            <li><i class="bi bi-exclamation-circle-fill"></i> High ad costs with low course sales velocity</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> High webinar dropout rates &amp; empty classes</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> Low trust from students in crowded markets</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> Difficulty scaling cohort-based program calls</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> Low-quality form leads with no real intent</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> Poor landing page conversion for courses and batches</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> No WhatsApp or email nurturing after enquiry</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> Unclear tracking of student acquisition cost</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> Weak admission follow-up from counsellor teams</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> No structured funnel for online, offline and hybrid programs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── WHO WE HELP (EDUCATION & COACHING) ── -->
    <section class="ed-brands-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="ed-section-title">
                        <span class="title-tag">Who We Help</span>
                        <h2>Education &amp; Coaching Brands We Scale</h2>
                        <p>Whether you run a coaching institute, sell online courses or build an EdTech app, we create enrollment systems matched to your ticket price, cohort size, student journey and sales team capacity.</p>
                    </div>
                </div>
            </div>
            <div class="ed-brands-grid">
                <div class="ed-brand-card">
                    <div class="icon">🎓</div>
                    <h5>Coaching Institutes</h5>
                    <p>Competitive exam prep, skill academies, tuition centers and classroom brands filling batches with local + digital lead funnels.</p>
                </div>
                <div class="ed-brand-card">
                    <div class="icon">💻</div>
                    <h5>Online Course Creators</h5>
                    <p>Webinar funnels, VSL pages, application pages, retargeting and payment flows for high-ticket and mid-ticket digital programs.</p>
                </div>
                <div class="ed-brand-card">
                    <div class="icon">📱</div>
                    <h5>EdTech Platforms</h5>
                    <p>App installs, free-trial signups, activation emails, paid user acquisition and retention flows for learning apps.</p>
                </div>
                <div class="ed-brand-card">
                    <div class="icon">🎯</div>
                    <h5>Business &amp; Career Coaches</h5>
                    <p>Qualified discovery calls, nurture sequences, LinkedIn campaigns and Meta campaigns for 1:1 and group coaching programs.</p>
                </div>
                <div class="ed-brand-card">
                    <div class="icon">🏫</div>
                    <h5>Schools &amp; Training Centers</h5>
                    <p>Local SEO, parent/student enquiry forms, admission-season campaigns and campus visit funnels for physical education centers.</p>
                </div>
                <div class="ed-brand-card">
                    <div class="icon">🌍</div>
                    <h5>Study Abroad Consultants</h5>
                    <p>Lead qualification by country, course, budget, timeline and CRM handoff to counsellor teams.</p>
                </div>
                <div class="ed-brand-card">
                    <div class="icon">📚</div>
                    <h5>Skill Development Academies</h5>
                    <p>Course-specific landing pages, certification program campaigns, WhatsApp follow-ups and placement-focused messaging.</p>
                </div>
                <div class="ed-brand-card">
                    <div class="icon">🧑‍🏫</div>
                    <h5>Tutors &amp; Online Educators</h5>
                    <p>Personal brand funnels, demo class booking pages, online batch promotions and student review-based trust systems.</p>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="<?php echo gb_url('contact'); ?>?ref=ed-brands-discuss" class="ed-btn-solid">Discuss Your Project <i class="bi bi-arrow-right ms-2"></i></a>
            </div>
        </div>
    </section>

    <!-- ── CORE EDUCATION STRATEGIES ── -->
    <section class="ed-strategy">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="ed-section-title">
                        <span class="title-tag">Our System</span>
                        <h2>High-Performance Education Marketing Services</h2>
                        <p>We deploy webinar funnels, application booking flows, YouTube ads, Meta ads, Google search campaigns, nurture automation, education SEO content and landing pages built to fill cohorts and coaching calendars.</p>
                    </div>
                </div>
            </div>
            
            <div class="ed-feature-grid">
                <div class="ed-feature-card">
                    <div class="icon-wrap"><i class="bi bi-collection-play-fill"></i></div>
                    <h5>Webinar &amp; VSL Funnels</h5>
                    <p>Construct high-converting webinar and video sales letter funnels. We optimize registration pages, create reminder sequences, build VSL structures and design follow-up systems that increase attendance and conversion.</p>
                </div>
                <div class="ed-feature-card">
                    <div class="icon-wrap"><i class="bi bi-telephone-fill"></i></div>
                    <h5>Application &amp; Booking Funnels</h5>
                    <p>Secure pre-qualified enrollment calls. Our custom application systems qualify prospective students by program fit, budget capability, timeline, career goals and course interest before scheduling a call.</p>
                </div>
                <div class="ed-feature-card">
                    <div class="icon-wrap"><i class="bi bi-rocket-takeoff-fill"></i></div>
                    <h5>EdTech Growth Ads</h5>
                    <p>Acquire platform users at scale. We run targeted app install, free-trial registration, demo booking and course enrollment ads across Google Search, YouTube, Meta and remarketing channels to lower your student acquisition cost.</p>
                </div>
                <div class="ed-feature-card">
                    <div class="icon-wrap"><i class="bi bi-envelope-check-fill"></i></div>
                    <h5>Student Recall &amp; Nurturing</h5>
                    <p>Nurture your leads automatically. We configure email, SMS and WhatsApp nurturing flows that address student doubts, share success stories, remind prospects about deadlines and bring them back into the enrollment journey.</p>
                </div>
                <div class="ed-feature-card">
                    <div class="icon-wrap"><i class="bi bi-layout-text-window-reverse"></i></div>
                    <h5>Education Website &amp; Landing Page Development</h5>
                    <p>We build course landing pages, coaching institute websites, admission pages, webinar registration pages and application forms that explain outcomes clearly and convert visitors into student enquiries.</p>
                </div>
                <div class="ed-feature-card">
                    <div class="icon-wrap"><i class="bi bi-diagram-3-fill"></i></div>
                    <h5>Education CRM &amp; Counsellor Follow-Up</h5>
                    <p>We help connect lead forms, WhatsApp, CRM systems and counsellor pipelines so your team can follow up faster and track every student enquiry properly.</p>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="<?php echo gb_url('contact'); ?>?ref=ed-strategy" class="ed-btn-solid">Get Industry Strategy <i class="bi bi-arrow-right ms-2"></i></a>
            </div>
        </div>
    </section>

    <!-- ── GROWTH DELIVERABLES ── -->
    <section class="ed-deliverables-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="ed-section-title">
                        <span class="title-tag">What You Get</span>
                        <h2>End-to-End Education Growth Deliverables</h2>
                        <p>Every engagement is built around enrollments and show-up rates, not cheap form fills. Here is what a typical growboostly education and coaching growth plan includes.</p>
                    </div>
                </div>
            </div>
            <div class="ed-deliverables-grid">
                <div class="ed-deliverable-item">
                    <span class="num">1</span>
                    <div>
                        <h5>Offer &amp; Funnel Architecture</h5>
                        <p>Webinar, VSL or application funnel mapped to your program price, cohort dates, sales team capacity and student decision cycle.</p>
                    </div>
                </div>
                <div class="ed-deliverable-item">
                    <span class="num">2</span>
                    <div>
                        <h5>Paid Student Acquisition</h5>
                        <p>Meta, YouTube and Google campaigns with creative testing for hooks, outcomes, student pain points and audience segments.</p>
                    </div>
                </div>
                <div class="ed-deliverable-item">
                    <span class="num">3</span>
                    <div>
                        <h5>Nurture &amp; Reminder Automation</h5>
                        <p>Email, WhatsApp and SMS sequences for webinar reminders, demo class follow-ups, objection handling and deadline pushes.</p>
                    </div>
                </div>
                <div class="ed-deliverable-item">
                    <span class="num">4</span>
                    <div>
                        <h5>Tracking &amp; Enrollment Reporting</h5>
                        <p>Cost per lead, cost per booked call, show-up rate, student acquisition cost and enrollment conversion tied to ad spend.</p>
                    </div>
                </div>
                <div class="ed-deliverable-item">
                    <span class="num">5</span>
                    <div>
                        <h5>Education Landing Page Development</h5>
                        <p>Course pages, admission pages, webinar registration pages and application forms designed for clear communication and better conversion.</p>
                    </div>
                </div>
                <div class="ed-deliverable-item">
                    <span class="num">6</span>
                    <div>
                        <h5>Student Qualification System</h5>
                        <p>Question-based forms, program-fit filters, budget range, course interest and timeline checks before counsellor calls.</p>
                    </div>
                </div>
                <div class="ed-deliverable-item">
                    <span class="num">7</span>
                    <div>
                        <h5>Retargeting &amp; Trust Building</h5>
                        <p>Campaigns for webinar viewers, application starters, page visitors and previous enquiries using testimonials, results and success stories.</p>
                    </div>
                </div>
                <div class="ed-deliverable-item">
                    <span class="num">8</span>
                    <div>
                        <h5>CRM &amp; Counsellor Workflow</h5>
                        <p>Lead routing, follow-up stages, missed call handling and WhatsApp communication flow for admission teams.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="<?php echo gb_url('contact'); ?>?ref=ed-deliverables-plan" class="ed-btn-solid">Get Free Growth Plan <i class="bi bi-arrow-right ms-2"></i></a>
            </div>
        </div>
    </section>

    <!-- ── WHY CHOOSE SECTION ── -->
    <section class="ed-choose-section">
        <div class="container">
            <div class="row g-5">
                <!-- Left Side: Copy and Sticky Header -->
                <div class="col-lg-5">
                    <div class="sticky-top" style="top: 100px; z-index: 1;">
                        <span class="title-tag">Why Choose Us</span>
                        <h2>Why Education Brands Choose growboostly</h2>
                        <p>Education marketing needs more than leads. It needs trust, clear outcomes, qualification, reminders, counsellor follow-up and a strong student journey.</p>
                        <p>Growboostly combines Education Marketing Services, Education Lead Generation, paid advertising, landing page development, CRM automation and student nurturing into one growth framework. Instead of only generating contacts, we help education brands create enrollment systems that move students from awareness to enquiry, webinar attendance, counselling and admission.</p>
                        <p>As an EdTech Marketing Agency in Lucknow, we understand how students, parents and working professionals evaluate courses before enrolling. They compare outcomes, reviews, fee structure, placement support, batch timing and credibility. Our strategy helps education brands answer these concerns through better funnels, messaging and automation.</p>
                    </div>
                </div>
                
                <!-- Right Side: Value Cards Grid -->
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-12">
                            <div class="ed-value-card single-line">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>Student lead generation campaigns</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="ed-value-card single-line">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>Course and admission landing pages</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="ed-value-card single-line">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>Webinar and VSL funnel setup</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="ed-value-card single-line">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>Google Ads, YouTube Ads and Meta Ads</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="ed-value-card single-line">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>WhatsApp and email nurturing flows</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="ed-value-card single-line">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>CRM and counsellor follow-up systems</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="ed-value-card single-line">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>Education SEO and local visibility</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="ed-value-card single-line">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>Tracking for CPL, show-up rate and enrollment rate</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="ed-value-card single-line">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>EdTech Marketing Solutions for scalable growth</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── FAQ SECTION ── -->
    <div class="ed-faq">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="ed-section-title">
                        <span class="title-tag">FAQ</span>
                        <h2>Education &amp; Coaching Marketing FAQ</h2>
                        <p>Common questions answered about student enrollment systems, webinar setups, qualification funnels and education lead generation support.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="accordion" id="educationFaq">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What is the average lead quality on coaching funnels?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#educationFaq">
                                <div class="accordion-body">
                                    Lead quality depends on offer clarity, targeting, funnel structure and qualification questions. We improve quality by using application forms, webinar registration filters, course interest questions and budget/timeline checks. This helps reduce casual enquiries and sends more serious students or parents to your counsellor team.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Can you help us build the webinar funnel or VSL pages?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#educationFaq">
                                <div class="accordion-body">
                                    Yes. We can help build webinar registration pages, VSL pages, thank-you pages, reminder flows, follow-up messages and retargeting campaigns. These funnels are useful for online courses, coaching programs, high-ticket training, career coaching and cohort-based programs.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What platforms do you support for course and community delivery?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#educationFaq">
                                <div class="accordion-body">
                                    We can support marketing and funnel setup for platforms like custom websites, WordPress, LearnDash, Thinkific, Teachable, Kajabi, Graphy, Zoom, Google Meet, WhatsApp communities, Telegram groups and custom EdTech platforms. The final setup depends on your current system and student journey.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How do you track student acquisition cost?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#educationFaq">
                                <div class="accordion-body">
                                    We track student acquisition cost by measuring total ad spend, lead volume, qualified enquiries, booked calls, webinar attendance, enrollment rate and final admissions. This gives a clearer view than only tracking cost per lead because cheap leads do not always become enrolled students.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Do you work with low-ticket courses or only high-ticket coaching?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#educationFaq">
                                <div class="accordion-body">
                                    Yes. We work with low-ticket courses, mid-ticket programs, high-ticket coaching, offline batches, online cohorts and EdTech apps. The funnel strategy changes based on price point. Low-ticket courses need faster checkout and volume, while high-ticket coaching needs qualification, trust building and counsellor calls.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    How soon can we fill the next cohort after launching ads?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#educationFaq">
                                <div class="accordion-body">
                                    Paid campaigns can start generating enquiries soon after launch, but stronger enrollment performance usually improves after creative testing, funnel optimization and follow-up refinement. If your offer is strong and the cohort deadline is clear, you may see movement within the first few weeks.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Do you provide Education Lead Generation for coaching institutes?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#educationFaq">
                                <div class="accordion-body">
                                    Yes. growboostly provides Education Lead Generation for coaching institutes, online course creators, schools, training centers, EdTech platforms and career coaches. We use ads, landing pages, webinars, WhatsApp follow-ups and CRM workflows to generate and manage student enquiries.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    Can you help with local SEO for coaching institutes?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#educationFaq">
                                <div class="accordion-body">
                                    Yes. We can help coaching institutes improve local visibility through Google Business Profile optimization, location pages, course pages, local keywords, reviews and admission-focused content. This is useful for institutes that depend on nearby students and parents.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    Do you build education websites and landing pages?
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#educationFaq">
                                <div class="accordion-body">
                                    Yes. We build education websites, course landing pages, admission pages, webinar registration pages, application forms and demo class booking pages. These pages are designed to explain outcomes clearly and convert visitors into enquiries.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    Can you automate WhatsApp follow-ups for student enquiries?
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#educationFaq">
                                <div class="accordion-body">
                                    Yes. We can create WhatsApp, SMS and email follow-up flows for webinar reminders, demo class reminders, fee deadline updates, application follow-ups and objection handling. This helps reduce missed opportunities and improves show-up rates.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ── LEAD GENERATION FLYWHEEL ── -->
    <section class="ed-flywheel-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="ed-flywheel-wrap">
                        <div class="ed-flywheel-hub">
                            <h4>STUDENT<br>ACQUISITION</h4>
                            <span>Flywheel</span>
                        </div>
                        <div class="ed-orbit">
                            <!-- Node 1 -->
                            <div class="ed-orbit-node">
                                <div class="on-circle"><i class="bi bi-eye-fill"></i></div>
                                <div class="on-label">Attract</div>
                                <div class="on-sub">YouTube &amp; Social Ads</div>
                            </div>
                            <!-- Node 2 -->
                            <div class="ed-orbit-node">
                                <div class="on-circle"><i class="bi bi-journal-check"></i></div>
                                <div class="on-label">Qualify</div>
                                <div class="on-sub">Application Quiz</div>
                            </div>
                            <!-- Node 3 -->
                            <div class="ed-orbit-node">
                                <div class="on-circle"><i class="bi bi-calendar2-check-fill"></i></div>
                                <div class="on-label">Schedule</div>
                                <div class="on-sub">Booking Intake</div>
                            </div>
                            <!-- Node 4 -->
                            <div class="ed-orbit-node">
                                <div class="on-circle"><i class="bi bi-patch-check-fill"></i></div>
                                <div class="on-label">Educate</div>
                                <div class="on-sub">SMS &amp; Email Proof</div>
                            </div>
                            <!-- Node 5 -->
                            <div class="ed-orbit-node">
                                <div class="on-circle"><i class="bi bi-credit-card-fill"></i></div>
                                <div class="on-label">Enroll</div>
                                <div class="on-sub">Secure checkout</div>
                            </div>
                            <!-- Node 6 -->
                            <div class="ed-orbit-node">
                                <div class="on-circle"><i class="bi bi-star-fill"></i></div>
                                <div class="on-label">Case Study</div>
                                <div class="on-sub">Alumni Referrals</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="ps-lg-4">
                        <span class="ed-flywheel-eyebrow mb-3">Compounding Classrooms</span>
                        <h2>The <span class="ed-highlight-compounding">Compounding</span> Student Flywheel</h2>
                        <p>Instead of relying on random promotional campaigns, we install a systematic acquisition flywheel. By tying together digital webinars, application funnels, automated student review loops, CRM follow-ups and community groups, we turn single sign-ups into long-term course referrals.</p>
                        <p>The flywheel starts with targeted ads and SEO visibility. Students enter through a webinar, demo class, application form or course page. Then they are qualified, reminded, educated and followed up through WhatsApp, SMS and email. After enrollment, testimonials and alumni referrals help bring the next group of students.</p>
                        <p>This automated enrollment flow speeds up student registrations, improves show-up rates and keeps your course cohorts, demo classes and group calls consistently full.</p>
                        
                        <a href="<?php echo gb_url('contact'); ?>?ref=ed-lead-gen" class="ed-btn-solid mt-3">Start Lead Generation <i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── EDUCATION EXPERT BOOKING ── -->
    <section class="ed-expert-section">
        <div class="container">
            <div class="ed-expert-card">
                <div class="row align-items-center g-4">
                    <div class="col-lg-8">
                        <h2 style="font-weight: 850; color: var(--ed-navy); margin-bottom: 14px;">Consult an Education Growth Expert</h2>
                        <p style="font-size: 16.5px; color: var(--ed-text-gray); margin-bottom: 14px; line-height: 1.6;">Launching a cohort-based program, scaling an EdTech platform or building a high-ticket coaching business? Connect directly with an education marketing specialist to architect your funnel strategy.</p>
                        <p style="font-size: 16.5px; color: var(--ed-text-gray); margin: 0; line-height: 1.6;">We review your offer, pricing, target audience, current lead quality, course page, webinar process, CRM workflow and enrollment conversion before recommending the right growth plan.</p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a href="<?php echo gb_url('contact'); ?>?ref=ed-talk-expert" class="ed-btn-solid">Talk To Growth Expert <i class="bi bi-chat-square-text-fill ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── OTHER INDUSTRIES ── -->
    <section class="ed-industries-section">
        <div class="container">
            <div class="row g-5 align-items-start">
                <div class="col-lg-5">
                    <span class="ed-tag" style="background:rgba(255,255,255,0.1);color:#fff;border-color:rgba(255,255,255,0.2);">Explore More</span>
                    <h2>Marketing for Other Industries</h2>
                    <p style="color:rgba(255,255,255,0.72);line-height:1.7;">growboostly also builds growth systems for healthcare, real estate, eCommerce, SaaS, BPO, finance and local service businesses.</p>
                    <a href="<?php echo gb_url('contact'); ?>?ref=ed-other-industry" class="ed-btn-solid mt-3">Get Industry Strategy <i class="bi bi-arrow-right ms-2"></i></a>
                </div>
                <div class="col-lg-7">
                    <ul class="ed-industries-list">
                        <li><a href="<?php echo gb_url('industries/healthcare-clinics'); ?>"><span class="ind-left"><span class="ind-icon">🏥</span>Healthcare &amp; Clinics</span><i class="bi bi-arrow-right"></i></a></li>
                        <li><a href="<?php echo gb_url('industries/real-estate'); ?>"><span class="ind-left"><span class="ind-icon">🏠</span>Real Estate &amp; Property</span><i class="bi bi-arrow-right"></i></a></li>
                        <li><a href="<?php echo gb_url('industries/ecommerce-d2c'); ?>"><span class="ind-left"><span class="ind-icon">🛒</span>eCommerce &amp; D2C Brands</span><i class="bi bi-arrow-right"></i></a></li>
                        <li><a href="<?php echo gb_url('industries/local-businesses'); ?>"><span class="ind-left"><span class="ind-icon">🏪</span>Local Businesses</span><i class="bi bi-arrow-right"></i></a></li>
                        <li><a href="<?php echo gb_url('industries/saas-it-technology'); ?>"><span class="ind-left"><span class="ind-icon">💻</span>SaaS &amp; IT Companies</span><i class="bi bi-arrow-right"></i></a></li>
                        <li><a href="<?php echo gb_url('industries/bpo-service-companies'); ?>"><span class="ind-left"><span class="ind-icon">📞</span>BPO &amp; Service Companies</span><i class="bi bi-arrow-right"></i></a></li>
                        <li><a href="<?php echo gb_url('industries/finance-insurance'); ?>"><span class="ind-left"><span class="ind-icon">🏦</span>Finance &amp; Insurance</span><i class="bi bi-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ── FINAL CONVERSION CTA BANNER ── -->
    <div class="ed-final-cta">
        <div class="container">
            <h2>Fill Your Next Cohort Predictably</h2>
            <p>Ready to stop stress-testing random ad campaigns and start running a validated enrollment funnel? Partner with our education marketing team to configure your multi-channel student acquisition system.</p>
            <span class="cta-phone">
                📞 Call / WhatsApp: <a href="tel:+919919020887">+91-9919020887</a>
            </span>
            <div>
                <a href="<?php echo gb_url('contact'); ?>?ref=ed-final-consultation" class="ed-cta-btn">Book Free Consultation</a>
                <a href="<?php echo gb_url('contact'); ?>?ref=ed-final-growth-plan" class="ed-cta-btn outline">Get Free Growth Plan</a>
            </div>
            <div class="mt-3">
                <a href="<?php echo gb_url('contact'); ?>?ref=ed-final-project" class="ed-cta-btn outline" style="font-size:15px;padding:12px 28px;">Discuss Your Project</a>
                <a href="<?php echo gb_url('contact'); ?>?ref=ed-final-expert" class="ed-cta-btn outline" style="font-size:15px;padding:12px 28px;">Talk To Growth Expert</a>
            </div>
            <div class="highlight-note">
                ⭐ Average Client Student Enrollment Increases by 220% Within the First 4 Months
            </div>
        </div>
    </div>
    <br>

    <?php include '../footer.php'; ?>

</body>
</html>
