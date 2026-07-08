<!doctype html>
<html lang="en">

<head>
<?php include __DIR__ . '/../includes/google-tag.php'; ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Grow your local business with growboostly’s Local Business Marketing Services. Get local SEO, Google Maps optimization, lead generation, reviews and call tracking.">
    <meta name="keywords" content="local business marketing, Google Maps optimization, local SEO services agency, get more customer phone calls, contractor lead generation, home services marketing">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph -->
    <meta property="og:title" content="Local Business Marketing Services &amp; Lead Generation | growboostly">
    <meta property="og:description" content="Grow your local business with growboostly’s Local Business Marketing Services. Get local SEO, Google Maps optimization, lead generation, reviews and call tracking.">
    <meta property="og:url" content="https://www.growboostly.com/industries/local-businesses">
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
    <title>Local Business Marketing Services &amp; Lead Generation | growboostly</title>
    <link rel="icon" href="../assets/img/fav-icon.svg" type="image/gif" sizes="20x20">

    <style>
        /* ── LOCAL BUSINESS THEME VARIABLES ── */
        :root {
            --lb-primary: #0f766e;      /* Rich Service Teal */
            --lb-dark: #115e59;         /* Deep Forest Teal */
            --lb-light: #f0fdfa;        /* Fresh Clean Mint Glow */
            --lb-accent: #ea580c;       /* Direct Action Orange */
            --lb-border: #ccfbf1;       /* Soft Teal Border */
            --lb-navy: #0f172a;         /* Deep Slate Gray */
            --lb-text-gray: #475569;
        }

        /* ── HERO SECTION ── */
        .lb-modern-hero {
            background: radial-gradient(circle at 10% 20%, rgba(15,118,110,0.06) 0%, rgba(255,255,255,0) 50%), #ffffff;
            padding: 110px 0 90px;
            overflow: hidden;
            position: relative;
            border-bottom: 1px solid var(--lb-border);
        }
        .lb-modern-hero .hero-content-wrap {
            position: relative;
            z-index: 2;
        }
        .lb-modern-hero .breadcrumb-list {
            justify-content: flex-start;
            margin-bottom: 25px;
            padding: 0;
            display: flex;
            align-items: center;
            gap: 8px;
            list-style: none;
        }
        .lb-modern-hero .breadcrumb-list li, .lb-modern-hero .breadcrumb-list li a {
            font-size: 14px;
            font-weight: 500;
            color: var(--lb-text-gray);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .lb-modern-hero .breadcrumb-list li a:hover {
            color: var(--lb-primary);
        }
        .lb-modern-hero .lb-tag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(15,118,110,0.08);
            color: var(--lb-dark);
            padding: 6px 18px;
            border-radius: 30px;
            font-weight: 700;
            font-size: 13px;
            margin-bottom: 24px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border: 1px solid rgba(15,118,110,0.15);
        }
        .lb-modern-hero h1 {
            font-size: clamp(36px, 4.8vw, 36px);
            font-weight: 850;
            color: var(--lb-navy);
            line-height: 1.15;
            margin-bottom: 24px;
            letter-spacing: -1.2px;
        }
        .lb-modern-hero h3 {
            font-size: 22px;
            font-weight: 600;
            color: var(--lb-primary);
            margin-bottom: 24px;
            line-height: 1.4;
        }
        .lb-modern-hero p {
            font-size: 17.5px;
            color: var(--lb-text-gray);
            line-height: 1.65;
            margin-bottom: 36px;
        }
        .lb-modern-hero .hero-actions {
            display: flex;
            gap: 16px;
            align-items: center;
            flex-wrap: wrap;
            margin-bottom: 48px;
        }
        .lb-modern-hero .btn-primary {
            background: linear-gradient(135deg, var(--lb-primary) 0%, var(--lb-dark) 100%);
            color: #fff !important;
            padding: 16px 36px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 16px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(15,118,110,0.2);
            border: none;
        }
        .lb-modern-hero .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 25px rgba(15,118,110,0.3);
            color: #fff !important;
        }
        .lb-modern-hero .btn-secondary {
            background: #fff;
            color: var(--lb-navy);
            padding: 15px 32px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 16px;
            text-decoration: none;
            border: 2px solid var(--lb-border);
            transition: all 0.3s ease;
        }
        .lb-modern-hero .btn-secondary:hover {
            border-color: var(--lb-primary);
            color: var(--lb-primary);
        }
        .lb-modern-hero .hero-stats {
            display: flex;
            gap: 40px;
            border-top: 1px solid #e2e8f0;
            padding-top: 32px;
        }
        .lb-modern-hero .stat-block strong {
            display: block;
            font-size: 28px;
            font-weight: 800;
            color: var(--lb-navy);
            line-height: 1.2;
        }
        .lb-modern-hero .stat-block span {
            font-size: 13px;
            color: var(--lb-text-gray);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 600;
        }

        /* Hero Image & Floating Cards */
        .lb-modern-hero .hero-visual-wrapper {
            position: relative;
            width: 100%;
            height: 100%;
            min-height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .lb-modern-hero .main-img {
            border-radius: 20px;
            box-shadow: 0 30px 60px rgba(15,23,42,0.12);
            max-width: 100%;
            height: auto;
            position: relative;
            z-index: 2;
            border: 1px solid var(--lb-border);
        }
        .lb-modern-hero .floating-card {
            position: absolute;
            background: #fff;
            padding: 20px 24px;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(15,23,42,0.06);
            border: 1px solid var(--lb-border);
            z-index: 3;
            display: flex;
            align-items: center;
            gap: 16px;
            animation: lb-float 6s ease-in-out infinite;
        }
        .lb-modern-hero .floating-card .icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: rgba(15,118,110,0.1);
            color: var(--lb-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }
        .lb-modern-hero .floating-card strong {
            display: block;
            font-size: 22px;
            font-weight: 800;
            color: var(--lb-navy);
            line-height: 1.2;
        }
        .lb-modern-hero .floating-card span {
            display: block;
            font-size: 13px;
            color: var(--lb-text-gray);
            font-weight: 500;
        }
        .lb-modern-hero .lb-fc-1 {
            top: 10%;
            left: -5%;
            animation-delay: 0s;
        }
        .lb-modern-hero .lb-fc-2 {
            bottom: 15%;
            right: -5%;
            animation-delay: 2.5s;
        }
        @keyframes lb-float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        @media (max-width: 991px) {
            .lb-modern-hero .hero-visual-wrapper {
                margin-bottom: 60px;
                min-height: 400px;
            }
            .lb-modern-hero .lb-fc-1 { left: 5%; }
            .lb-modern-hero .lb-fc-2 { right: 5%; }
            .lb-modern-hero .hero-stats { gap: 24px; flex-wrap: wrap; }
        }

        /* ── STATS BAR ── */
        .lb-stats-bar {
            background: linear-gradient(135deg, var(--lb-navy) 0%, #1e293b 100%);
            padding: 50px 0;
            margin-bottom: 80px;
        }
        .lb-stats-bar .stat-item {
            text-align: center;
            padding: 20px 15px;
            border-right: 1px solid rgba(255,255,255,0.12);
        }
        .lb-stats-bar .stat-item:last-child { border-right: none; }
        .lb-stats-bar .stat-number {
            font-size: 44px;
            font-weight: 850;
            color: #fff;
            line-height: 1;
            margin-bottom: 8px;
        }
        .lb-stats-bar .stat-number span { color: var(--lb-accent); }
        .lb-stats-bar .stat-label {
            font-size: 14px;
            color: rgba(255,255,255,0.7);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 500;
        }
        @media (max-width: 767px) {
            .lb-stats-bar .stat-item { border-right: none; border-bottom: 1px solid rgba(255,255,255,0.1); }
            .lb-stats-bar .stat-item:last-child { border-bottom: none; }
        }

        /* ── SECTION TITLE HELPER ── */
        .lb-section-title {
            margin-bottom: 48px;
            text-align: center;
        }
        .lb-section-title h2 { font-size: 34px; font-weight: 800; color: var(--lb-navy); }
        .lb-section-title p {
            font-size: 16px;
            color: var(--lb-text-gray);
            max-width: 720px;
            margin: 14px auto 0;
            text-align: center;
            line-height: 1.75;
        }
        .lb-section-title .title-tag, .lb-choose-section .title-tag {
            display: inline-block;
            background: var(--lb-light);
            color: var(--lb-dark);
            font-size: 13px;
            font-weight: 700;
            padding: 5px 16px;
            border-radius: 20px;
            margin-bottom: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* ── WHAT IS / EDITORIAL GRID ── */
        .lb-what-section { padding: 90px 0; background: #fff; overflow: hidden; }
        .lb-what-inner { display: grid; grid-template-columns: 1.1fr 0.9fr; gap: 60px; align-items: center; }
        @media (max-width: 1199px) { .lb-what-inner { grid-template-columns: 1fr; } }
        .lb-what-left .eyebrow { display: inline-block; background: var(--lb-light); color: var(--lb-primary); font-size: 12px; font-weight: 800; padding: 6px 16px; border-radius: 30px; text-transform: uppercase; letter-spacing: .8px; margin-bottom: 20px; }
        .lb-what-left h2 { font-size: clamp(30px, 3.8vw, 44px); font-weight: 850; color: var(--lb-navy); line-height: 1.15; margin-bottom: 24px; letter-spacing: -0.8px; }
        .lb-what-left p { font-size: 16.5px; color: var(--lb-text-gray); line-height: 1.75; margin-bottom: 28px; }
        .lb-what-left .lb-highlight { color: var(--lb-primary); font-weight: 700; }
        
        .lb-btn-solid {
            background: linear-gradient(135deg, var(--lb-primary) 0%, var(--lb-dark) 100%);
            color: #fff !important;
            padding: 16px 36px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 16px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(15,118,110,0.15);
            border: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .lb-btn-solid:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 25px rgba(15,118,110,0.25);
            color: #fff !important;
        }

        .lb-struggle-box { 
            background: #f0fdfa; 
            border: 1.5px solid var(--lb-border); 
            border-radius: 16px; 
            padding: 32px; 
            margin-top: 30px; 
            box-shadow: 0 8px 30px rgba(15,118,110, 0.02);
        }
        .lb-struggle-box h4 { color: var(--lb-dark); font-weight: 800; font-size: 20px; margin-bottom: 12px; }
        .lb-struggle-box p { font-size: 15px; margin-bottom: 0; color: var(--lb-dark); }
        .lb-struggle-list { list-style: none; padding: 0; margin: 24px 0 0; }
        .lb-struggle-list li { display: flex; align-items: flex-start; gap: 12px; font-size: 15.5px; font-weight: 700; color: var(--lb-navy); margin-bottom: 16px; }
        .lb-struggle-list li i { color: var(--lb-primary); flex-shrink: 0; font-size: 18px; }

        /* ── STRATEGY SECTION ── */
        .lb-strategy {
            padding: 90px 0;
            background: #fafafa;
            border-top: 1px solid #f1f5f9;
        }
        .lb-feature-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            margin-top: 35px;
        }
        @media (max-width: 767px) { .lb-feature-grid { grid-template-columns: 1fr; } }
        
        .lb-feature-card {
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
        .lb-feature-card:hover {
            border-color: var(--lb-primary);
            box-shadow: 0 12px 36px rgba(15,118,110,0.08);
            transform: translateY(-4px);
        }
        .lb-feature-card .icon-wrap {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: var(--lb-light);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: var(--lb-primary);
        }
        .lb-feature-card h5 {
            font-size: 17.5px;
            font-weight: 800;
            color: var(--lb-navy);
            margin: 0;
        }
        .lb-feature-card p {
            font-size: 14.5px;
            color: var(--lb-text-gray);
            margin: 0;
            line-height: 1.6;
        }

        /* ── ORBIT FLYWHEEL SECTION ── */
        .lb-flywheel-section {
            padding: 95px 0;
            background: #fff;
        }
        .lb-flywheel-section .lb-flywheel-eyebrow {
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
            background: linear-gradient(135deg, var(--lb-primary) 0%, var(--lb-accent) 100%);
            box-shadow: 0 8px 24px rgba(15, 23, 42, 0.14);
            margin-bottom: 16px;
        }
        .lb-flywheel-section h2 {
            font-size: clamp(28px, 3.2vw, 40px);
            font-weight: 850;
            color: var(--lb-navy);
            letter-spacing: -0.8px;
            margin-bottom: 18px;
            line-height: 1.2;
        }
        .lb-flywheel-section h2 .lb-highlight-compounding {
            background: linear-gradient(135deg, var(--lb-primary) 0%, var(--lb-accent) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .lb-flywheel-wrap { position: relative; max-width: 600px; margin: 0 auto; }
        .lb-flywheel-hub { 
            width: 170px; 
            height: 170px; 
            border-radius: 50%; 
            background: var(--lb-navy); 
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
            box-shadow: 0 0 0 16px rgba(15,118,110,.08), 0 0 0 32px rgba(15,118,110,.04); 
        }
        .lb-flywheel-hub h4 { font-size: 15.5px; font-weight: 900; color: #fff; margin: 0; line-height: 1.3; }
        .lb-flywheel-hub span { font-size: 11px; color: var(--lb-accent); font-weight: 700; text-transform: uppercase; letter-spacing: .6px; }
        
        .lb-orbit { position: relative; width: 540px; height: 540px; margin: 0 auto; }
        @media (max-width: 767px) { .lb-orbit { width: 340px; height: 340px; } }
        .lb-orbit::before { content: ''; position: absolute; inset: 0; border-radius: 50%; border: 2px dashed rgba(15,118,110,.25); }
        .lb-orbit-node { position: absolute; width: 125px; text-align: center; transform: translate(-50%, -50%); }
        @media (max-width: 767px) { .lb-orbit-node { width: 85px; } }
        .lb-orbit-node .on-circle { 
            width: 62px; 
            height: 62px; 
            border-radius: 50%; 
            background: #fff; 
            border: 2px solid var(--lb-border); 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            font-size: 22px; 
            margin: 0 auto 8px; 
            box-shadow: 0 4px 16px rgba(0,0,0,.06); 
            transition: all .3s; 
        }
        @media (max-width: 767px) { .lb-orbit-node .on-circle { width: 44px; height: 44px; font-size: 16px; } }
        .lb-orbit-node:hover .on-circle { background: var(--lb-primary); border-color: var(--lb-primary); box-shadow: 0 0 0 8px rgba(15,118,110,.15); color: #fff; }
        .lb-orbit-node:hover .on-circle i { color: #fff; }
        .lb-orbit-node .on-label { font-size: 11.5px; font-weight: 800; color: var(--lb-navy); text-transform: uppercase; letter-spacing: .6px; line-height: 1.3; }
        .lb-orbit-node .on-sub { font-size: 10px; color: var(--lb-text-gray); margin-top: 3px; }
        
        /* Node Positions */
        .lb-orbit-node:nth-child(1) { top: 0%;   left: 50%; }
        .lb-orbit-node:nth-child(2) { top: 25%;  left: 93.3%; }
        .lb-orbit-node:nth-child(3) { top: 75%;  left: 93.3%; }
        .lb-orbit-node:nth-child(4) { top: 100%; left: 50%; }
        .lb-orbit-node:nth-child(5) { top: 75%;  left: 6.7%; }
        .lb-orbit-node:nth-child(6) { top: 25%;  left: 6.7%; }

        @media (max-width: 767px) {
            .lb-flywheel-section, .lb-flywheel-wrap, .lb-orbit { display: none !important; }
        }

        /* ── EXPERT BOOKING ── */
        .lb-expert-section {
            padding: 90px 0;
            background: #fafafa;
            border-top: 1px solid #f1f5f9;
            border-bottom: 1px solid #f1f5f9;
        }
        .lb-expert-card {
            background: #fff;
            border-radius: 20px;
            padding: 45px;
            box-shadow: 0 20px 50px rgba(15,23,42,0.05);
            border: 1px solid var(--lb-border);
        }

        /* ── FAQ ── */
        .lb-faq {
            padding: 90px 0;
        }
        .lb-faq .accordion-item {
            border: 1px solid var(--lb-border);
            border-radius: 12px !important;
            margin-bottom: 16px;
            overflow: hidden;
        }
        .lb-faq .accordion-button {
            font-size: 16.5px;
            font-weight: 700;
            color: var(--lb-navy);
            background: #fff;
            padding: 22px 24px;
        }
        .lb-faq .accordion-button:not(.collapsed) {
            color: var(--lb-dark);
            background: var(--lb-light);
            box-shadow: none;
        }
        .lb-faq .accordion-body {
            font-size: 15px;
            color: var(--lb-text-gray);
            padding: 18px 24px 22px;
            background: #fdfdfd;
            line-height: 1.65;
        }

        /* ── FINAL CTA ── */
        .lb-final-cta {
            padding: 95px 0;
            background: linear-gradient(135deg, var(--lb-primary) 0%, var(--lb-dark) 100%);
            text-align: center;
            color: #fff;
            position: relative;
            overflow: hidden;
        }
        .lb-final-cta::before {
            content: '';
            position: absolute;
            top: -20%;
            left: -10%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(255,255,255,0.08) 0%, transparent 60%);
            pointer-events: none;
        }
        .lb-final-cta h2 {
            font-size: 38px;
            font-weight: 850;
            color: #fff;
            margin-bottom: 18px;
            letter-spacing: -0.8px;
        }
        .lb-final-cta p {
            font-size: 18px;
            color: rgba(255,255,255,0.9);
            margin-bottom: 36px;
            max-width: 720px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.7;
        }
        .lb-final-cta .cta-phone {
            font-size: 22px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 30px;
            display: block;
        }
        .lb-final-cta .cta-phone a { color: #fff; text-decoration: none; }
        .lb-final-cta .cta-phone a:hover { text-decoration: underline; }
        
        .lb-cta-btn {
            display: inline-block;
            background: #fff;
            color: var(--lb-dark);
            font-size: 16px;
            font-weight: 700;
            padding: 16px 38px;
            border-radius: 40px;
            text-decoration: none;
            margin: 6px 8px;
            transition: all 0.3s;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .lb-cta-btn:hover {
            background: var(--lb-navy);
            color: #fff;
            transform: translateY(-2px);
        }
        .lb-cta-btn.outline {
            background: transparent;
            color: #fff;
            border: 2px solid rgba(255,255,255,0.7);
            box-shadow: none;
        }
        .lb-cta-btn.outline:hover {
            background: #fff;
            color: var(--lb-dark);
        }
        .lb-final-cta .highlight-note {
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

        .lb-brands-section {
            padding: 90px 0;
            background: var(--lb-light);
            border-top: 1px solid var(--lb-border);
            border-bottom: 1px solid var(--lb-border);
        }
        .lb-brands-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            margin-top: 40px;
        }
        @media (max-width: 991px) { .lb-brands-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 575px) { .lb-brands-grid { grid-template-columns: 1fr; } }
        .lb-brand-card {
            background: #fff;
            border: 1px solid var(--lb-border);
            border-radius: 16px;
            padding: 28px 24px;
            transition: all 0.3s ease;
        }
        .lb-brand-card:hover {
            border-color: var(--lb-primary);
            box-shadow: 0 12px 30px rgba(234,88,12,0.12);
            transform: translateY(-4px);
        }
        .lb-brand-card .icon { font-size: 28px; margin-bottom: 14px; }
        .lb-brand-card h5 { font-size: 17px; font-weight: 800; color: var(--lb-navy); margin-bottom: 10px; }
        .lb-brand-card p { font-size: 14px; color: var(--lb-text-gray); margin: 0; line-height: 1.6; }

        .lb-deliverables-section { padding: 90px 0; background: #fff; }
        .lb-deliverables-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 28px;
            margin-top: 40px;
        }
        @media (max-width: 767px) { .lb-deliverables-grid { grid-template-columns: 1fr; } }
        .lb-deliverable-item {
            display: flex;
            gap: 18px;
            padding: 24px;
            border-radius: 14px;
            border: 1px solid #e2e8f0;
            background: var(--lb-light);
        }
        .lb-deliverable-item .num {
            flex-shrink: 0;
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--lb-primary), var(--lb-dark));
            color: #fff;
            font-weight: 800;
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .lb-deliverable-item h5 { font-size: 16px; font-weight: 800; color: var(--lb-navy); margin-bottom: 8px; }
        .lb-deliverable-item p { font-size: 14px; color: var(--lb-text-gray); margin: 0; line-height: 1.65; }

        .lb-industries-section {
            padding: 85px 0;
            background: var(--lb-navy);
            color: #fff;
        }
        .lb-industries-section h2 { color: #fff; font-weight: 850; margin-bottom: 12px; }
        .lb-industries-list {
            list-style: none;
            padding: 0;
            margin: 0;
            border-top: 1px solid rgba(255,255,255,0.12);
        }
        .lb-industries-list li a {
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
        .lb-industries-list li a:hover { color: var(--lb-primary); padding-left: 10px; }
        .lb-industries-list .ind-left { display: flex; align-items: center; gap: 14px; }
        .lb-industries-list .ind-icon { font-size: 22px; }

        /* ── WHY CHOOSE SECTION ── */
        .lb-choose-section {
            padding: 95px 0;
            background: #fafafa;
            border-top: 1px solid var(--lb-border);
            border-bottom: 1px solid var(--lb-border);
        }
        .lb-choose-section h2 { font-size: 34px; font-weight: 800; color: var(--lb-navy); margin-bottom: 24px; }
        .lb-choose-section p { font-size: 16px; color: var(--lb-text-gray); line-height: 1.75; }
        
        .lb-value-card {
            background: #fff;
            border: 1px solid var(--lb-border);
            border-radius: 16px;
            padding: 24px;
            display: flex;
            gap: 20px;
            align-items: flex-start;
            transition: all 0.3s ease;
            height: 100%;
        }
        .lb-value-card:hover {
            border-color: var(--lb-primary);
            box-shadow: 0 12px 30px rgba(15,118,110,0.08);
            transform: translateY(-3px);
        }
        .lb-value-card .icon-box {
            width: 44px;
            height: 44px;
            border-radius: 10px;
            background: rgba(15,118,110,0.1);
            color: var(--lb-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            flex-shrink: 0;
        }
        .lb-value-card h5 {
            font-size: 16px;
            font-weight: 800;
            color: var(--lb-navy);
            margin-bottom: 6px;
            line-height: 1.4;
        }
        .lb-value-card p {
            font-size: 13.5px;
            color: var(--lb-text-gray);
            margin: 0;
            line-height: 1.55;
        }
        .lb-value-card.single-line {
            align-items: center;
        }
        .lb-value-card.single-line h5 {
            margin-bottom: 0;
        }
    </style>
</head>

<body class="tt-magic-cursor digital-agency">

    <?php include '../header.php'; ?>

    <!-- ── LOCAL BUSINESS HERO SECTION ── -->
    <div class="lb-modern-hero mb-0">
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
                            <li>Local Businesses</li>
                        </div>
                        <span class="lb-tag mb-3">Local Business Marketing Services for More Calls, Leads &amp; Bookings</span>
                        <h1>Dominate Local Map Search &amp; Customer Phone Calls</h1>
                        <h3>Data-Driven Local Business Growth Systems.</h3>
                        <p>At growboostly, we are providing Local Business Marketing Services for home service companies, local contractors, professional service providers, showrooms, clinics, restaurants, garages and brick-and-mortar businesses that want more phone calls, map visibility and booked appointments. We build lead generation engines using Google Map optimization, Local Service Ads, local SEO, review automation, website improvements and conversion-focused landing pages.</p>
                        <p>Our goal is simple: help your local business appear where customers are already searching, generate more direct calls and reduce dependence on shared lead portals.</p>
                        <div class="hero-actions">
                            <a href="<?php echo gb_url('contact'); ?>?ref=lb-consultation" class="btn-primary">Book Free Consultation</a>
                            <a href="<?php echo gb_url('contact'); ?>?ref=lb-growth-plan" class="btn-secondary">Get Free Growth Plan</a>
                        </div>
                        <div class="hero-stats">
                            <div class="stat-block">
                                <strong>5.4x</strong>
                                <span>Average ROI</span>
                            </div>
                            <div class="stat-block">
                                <strong>+260%</strong>
                                <span>Phone Call Volume</span>
                            </div>
                            <div class="stat-block">
                                <strong>94%</strong>
                                <span>Lead Intent Accuracy</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right Column: Visual Image -->
                <div class="col-lg-6">
                    <div class="hero-visual-wrapper">
                        <div class="floating-card lb-fc-1">
                            <div class="icon"><i class="bi bi-telephone-inbound-fill"></i></div>
                            <div>
                                <strong>+210%</strong>
                                <span>Direct Calls</span>
                            </div>
                        </div>
                        <img src="../assets/img/services/local-businesses-hero.png" alt="Local Business Marketing Services and Lead Generation for Local Businesses by growboostly" class="main-img">
                        <div class="floating-card lb-fc-2">
                            <div class="icon"><i class="bi bi-geo-alt-fill"></i></div>
                            <div>
                                <strong>#1 Rank</strong>
                                <span>Local 3-Pack</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ── STATS BAR ── -->
    <div class="lb-stats-bar">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number"><span>5.4</span>X+</div>
                        <div class="stat-label">Average Campaign ROI</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number"><span>210</span>%</div>
                        <div class="stat-label">Increase in Customer Calls</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number"><span>30</span>%</div>
                        <div class="stat-label">Lower Lead Acquisition Cost</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number"><span>95</span>%</div>
                        <div class="stat-label">Local Map Review Rate</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ── THE STRUGGLE / WHY IT MATTERS ── -->
    <section class="lb-what-section">
        <div class="container">
            <div class="lb-what-inner">
                <div class="lb-what-left">
                    <span class="eyebrow">The Challenge</span>
                    <h2>Is Your Storefront Invisible on Google Maps and Local Searches?</h2>
                    <p>Too many local businesses waste money on low-intent clicks, random ads or listing portals that sell the same lead to multiple competitors. Unoptimized Google Business profiles, weak local landing pages, missing reviews and slow websites can result in fewer phone calls, low trust and empty appointment calendars.</p>
                    <p>Many local businesses also struggle because their marketing is not connected. Ads run separately, website forms do not convert, Google Maps visibility is weak, and customer reviews are not collected consistently. This leads to wasted budget and missed local demand.</p>
                    <p>At growboostly, we design <span class="lb-highlight">local domination systems</span> for businesses that need measurable calls, bookings and enquiries. From Google Map 3-Pack positioning to pay-per-call Service Ads, local SEO pages, review automation and lead tracking, we connect high-intent local customers directly to your phone lines.</p>
                    
                    <a href="<?php echo gb_url('contact'); ?>?ref=lb-project-discussion" class="lb-btn-solid">Discuss Your Project <i class="bi bi-arrow-right ms-2"></i></a>
                </div>
                
                <div>
                    <div class="lb-struggle-box">
                        <h4>Struggling with these local marketing limits?</h4>
                        <p>We solve the key growth bottlenecks that hold back local storefronts and services:</p>
                        <ul class="lb-struggle-list">
                            <li><i class="bi bi-exclamation-circle-fill"></i> Locked out of Google Map pack results</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> Paying high portal margins for shared, cold leads</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> Low phone call volume and booking conversion</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> Wasting ad budget on clicks outside your service area</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> Weak Google Business Profile optimization</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> Low number of customer reviews and ratings</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> No proper lead tracking or call reporting</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> Slow website pages reducing local enquiries</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> No location-based landing pages for service areas</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── WHO WE HELP (LOCAL BUSINESSES) ── -->
    <section class="lb-brands-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="lb-section-title">
                        <span class="title-tag">Who We Help</span>
                        <h2>Local Businesses We Grow</h2>
                        <p>Whether you run a home service crew, neighborhood storefront, professional office or multi-branch local brand, our Local Business Digital Marketing system is matched to your service radius, local competition, customer intent and average job value.</p>
                    </div>
                </div>
            </div>
            <div class="lb-brands-grid">
                <div class="lb-brand-card">
                    <div class="icon">🔧</div>
                    <h5>Home Services</h5>
                    <p>HVAC, plumbing, electrical, appliance repair and emergency services with pay-per-call LSAs, map SEO and high-intent search campaigns.</p>
                </div>
                <div class="lb-brand-card">
                    <div class="icon">🏗️</div>
                    <h5>Contractors &amp; Renovation</h5>
                    <p>Roofing, remodeling, landscaping, painting and construction businesses winning “near me” searches with quote funnels and review growth.</p>
                </div>
                <div class="lb-brand-card">
                    <div class="icon">⚖️</div>
                    <h5>Legal &amp; Professional Services</h5>
                    <p>Local attorneys, accountants, consultants and advisors capturing neighborhood searches, consultation bookings and direct enquiries.</p>
                </div>
                <div class="lb-brand-card">
                    <div class="icon">🍽️</div>
                    <h5>Restaurants &amp; Retail Stores</h5>
                    <p>Foot traffic, reservations, offer campaigns, Google Maps visibility and geo-targeted social promotions for local customers.</p>
                </div>
                <div class="lb-brand-card">
                    <div class="icon">🚗</div>
                    <h5>Auto &amp; Local Garages</h5>
                    <p>Service booking ads, map rankings, recall reminders and local landing pages for repair shops and dealership service bays.</p>
                </div>
                <div class="lb-brand-card">
                    <div class="icon">✨</div>
                    <h5>Cleaning &amp; Maintenance</h5>
                    <p>Recurring job funnels, seasonal recall SMS and local offer ads for cleaning, pest control, facility services and maintenance teams.</p>
                </div>
                <div class="lb-brand-card">
                    <div class="icon">🏥</div>
                    <h5>Clinics &amp; Wellness Centers</h5>
                    <p>Local SEO, appointment funnels, review automation and Google Business optimization for clinics, salons, spas and healthcare providers.</p>
                </div>
                <div class="lb-brand-card">
                    <div class="icon">🏪</div>
                    <h5>Showrooms &amp; Local Retail</h5>
                    <p>Map visibility, local product searches, WhatsApp enquiries, store visit campaigns and review systems for retail and showroom brands.</p>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="<?php echo gb_url('contact'); ?>?ref=lb-brands-discuss" class="lb-btn-solid">Discuss Your Project <i class="bi bi-arrow-right ms-2"></i></a>
            </div>
        </div>
    </section>

    <!-- ── CORE LOCAL STRATEGIES ── -->
    <section class="lb-strategy">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="lb-section-title">
                        <span class="title-tag">Our System</span>
                        <h2>Local Business Marketing Services That Drive Calls</h2>
                        <p>We deploy Google Map 3-Pack SEO, pay-per-call LSAs, citation builds, review automation, geo-fenced social ads, call tracking and local landing pages built to drive calls, enquiries and booked appointments.</p>
                    </div>
                </div>
            </div>
            
            <div class="lb-feature-grid">
                <div class="lb-feature-card">
                    <div class="icon-wrap"><i class="bi bi-map-fill"></i></div>
                    <h5>Google Map Pack Domination</h5>
                    <p>Get listed in the top three map results. We optimize your Google Business Profile, align local keywords, update services, add photos, create posts and build citation consistency to increase visibility inside your target service radius.</p>
                </div>
                <div class="lb-feature-card">
                    <div class="icon-wrap"><i class="bi bi-telephone-outbound-fill"></i></div>
                    <h5>Pay-Per-Call Local Service Ads</h5>
                    <p>Only pay when serious local customers contact your business. We help set up Google Local Service Ads, service-area targeting and call-focused campaigns so your budget goes toward high-intent enquiries instead of random clicks.</p>
                </div>
                <div class="lb-feature-card">
                    <div class="icon-wrap"><i class="bi bi-chat-left-text-fill"></i></div>
                    <h5>Local Review Automation</h5>
                    <p>Build trust faster. Our automated follow-up sequences request customer feedback after service completion, helping you generate positive Google reviews that improve trust, map ranking and local credibility.</p>
                </div>
                <div class="lb-feature-card">
                    <div class="icon-wrap"><i class="bi bi-bullseye"></i></div>
                    <h5>Geo-Fenced Social Ads</h5>
                    <p>Target customers inside precise local areas. We run offer campaigns on Facebook and Instagram for homeowners, local shoppers, business managers and service buyers inside your exact territory.</p>
                </div>
                <div class="lb-feature-card">
                    <div class="icon-wrap"><i class="bi bi-laptop"></i></div>
                    <h5>Local Business Website Development</h5>
                    <p>We create landing pages and website sections designed for phone calls, WhatsApp enquiries, quote requests and appointment bookings. This supports your local SEO and improves conversion from both organic and paid traffic.</p>
                </div>
                <div class="lb-feature-card">
                    <div class="icon-wrap"><i class="bi bi-funnel-fill"></i></div>
                    <h5>Local Lead Tracking &amp; CRM Setup</h5>
                    <p>We help track calls, forms, WhatsApp enquiries and appointment requests so you can understand which campaigns and locations are generating real business opportunities.</p>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="<?php echo gb_url('contact'); ?>?ref=lb-strategy" class="lb-btn-solid">Get Industry Strategy <i class="bi bi-arrow-right ms-2"></i></a>
            </div>
        </div>
    </section>

    <!-- ── GROWTH DELIVERABLES ── -->
    <section class="lb-deliverables-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="lb-section-title">
                        <span class="title-tag">What You Get</span>
                        <h2>End-to-End Local Business Growth Deliverables</h2>
                        <p>Every engagement is built around phone calls, qualified enquiries and booked jobs in your service area, not national vanity traffic. Here is what a typical growboostly local growth plan includes.</p>
                    </div>
                </div>
            </div>
            <div class="lb-deliverables-grid">
                <div class="lb-deliverable-item">
                    <span class="num">1</span>
                    <div>
                        <h5>Google Business &amp; Map Optimization</h5>
                        <p>Profile setup, categories, services, photos, posts, local keywords and citation consistency for better 3-Pack visibility.</p>
                    </div>
                </div>
                <div class="lb-deliverable-item">
                    <span class="num">2</span>
                    <div>
                        <h5>LSAs &amp; Local Paid Search</h5>
                        <p>Google Local Service Ads, geo-targeted search ads, call tracking and cost-per-booked-job reporting.</p>
                    </div>
                </div>
                <div class="lb-deliverable-item">
                    <span class="num">3</span>
                    <div>
                        <h5>Review &amp; Reputation Automation</h5>
                        <p>Post-job SMS/email review requests, private complaint routing and reputation monitoring dashboards.</p>
                    </div>
                </div>
                <div class="lb-deliverable-item">
                    <span class="num">4</span>
                    <div>
                        <h5>Dispatch CRM &amp; Seasonal Recall</h5>
                        <p>Integration support for tools like Jobber, Housecall Pro, ServiceTitan or custom CRM systems with automated follow-up campaigns.</p>
                    </div>
                </div>
                <div class="lb-deliverable-item">
                    <span class="num">5</span>
                    <div>
                        <h5>Local Landing Page Strategy</h5>
                        <p>Service-area pages, city pages and conversion-focused landing pages for better local search visibility and stronger enquiry flow.</p>
                    </div>
                </div>
                <div class="lb-deliverable-item">
                    <span class="num">6</span>
                    <div>
                        <h5>Call Tracking &amp; Lead Reporting</h5>
                        <p>Track phone calls, form submissions, WhatsApp leads and booked appointments to measure real campaign performance.</p>
                    </div>
                </div>
                <div class="lb-deliverable-item">
                    <span class="num">7</span>
                    <div>
                        <h5>Local SEO Content Support</h5>
                        <p>Service-focused content, local keywords, FAQs and location-based sections that help Google understand your business coverage.</p>
                    </div>
                </div>
                <div class="lb-deliverable-item">
                    <span class="num">8</span>
                    <div>
                        <h5>Conversion Optimization</h5>
                        <p>Improve CTAs, forms, mobile layout, page speed and trust signals so more local visitors become paying customers.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="<?php echo gb_url('contact'); ?>?ref=lb-deliverables-plan" class="lb-btn-solid">Get Free Growth Plan <i class="bi bi-arrow-right ms-2"></i></a>
            </div>
        </div>
    </section>

    <!-- ── WHY CHOOSE SECTION ── -->
    <section class="lb-choose-section">
        <div class="container">
            <div class="row g-5">
                <!-- Left Side: Copy and Sticky Header -->
                <div class="col-lg-5">
                    <div class="sticky-top" style="top: 100px; z-index: 1;">
                        <span class="title-tag">Why Choose Us</span>
                        <h2>Why Local Businesses Choose growboostly</h2>
                        <p>Local businesses need more than just ads. They need visibility, trust, speed, follow-up and a system that turns nearby searches into real enquiries.</p>
                        <p>Growboostly combines Local Business Marketing Services, local SEO, Google Maps optimization, paid ads, website improvements and lead tracking into one practical growth system. As a <a href="<?php echo gb_url('services/b2b-lead-generation'); ?>" style="color: var(--lb-primary); text-decoration: underline;">lead generation company in Lucknow</a>, we focus on phone calls, appointments and qualified enquiries instead of only impressions or clicks.</p>
                        <p>We help local businesses reduce wasted ad spend, improve Google Maps visibility, increase reviews, capture high-intent searches and convert website visitors into leads. Whether you need better map rankings, more direct calls or local landing pages, our process is built around measurable local growth.</p>
                    </div>
                </div>
                
                <!-- Right Side: Value Cards Grid -->
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-12">
                            <div class="lb-value-card single-line">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>Google Business Profile optimization</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="lb-value-card single-line">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>Local SEO and map ranking improvement</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="lb-value-card single-line">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>Lead generation for local businesses</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="lb-value-card single-line">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>Google Ads and Local Service Ads</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="lb-value-card single-line">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>Website and landing page optimization</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="lb-value-card single-line">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>Review automation and reputation building</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="lb-value-card single-line">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>Call tracking and CRM-ready lead reporting</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── FAQ SECTION ── -->
    <div class="lb-faq">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="lb-section-title">
                        <span class="title-tag">FAQ</span>
                        <h2>Local Business Marketing FAQ</h2>
                        <p>Common questions answered about local SEO, map visibility, Google LSAs, review automation and lead generation support.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="accordion" id="localBusinessFaq">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What is the difference between standard SEO and Local Google Map SEO?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#localBusinessFaq">
                                <div class="accordion-body">
                                    Standard SEO focuses on broader website rankings, while Local Map SEO targets searches with location intent, such as “plumber near me” or “best clinic in Lucknow.” Local Map SEO focuses on Google Business Profile optimization, map rankings, local citations, reviews, service areas and local landing pages.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How does pay-per-call billing work on Google Local Service Ads?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#localBusinessFaq">
                                <div class="accordion-body">
                                    Google Local Service Ads are designed to generate calls or direct enquiries from customers looking for nearby service providers. Instead of paying only for website clicks, businesses can focus on phone-based leads. The cost depends on your category, location, competition and service area.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Can you help us manage and automate review generation?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#localBusinessFaq">
                                <div class="accordion-body">
                                    Yes. We can help set up post-service review request flows through SMS, email or WhatsApp. These flows encourage happy customers to leave Google reviews while giving unhappy customers a private way to share feedback before posting publicly.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Do you integrate with local service scheduling systems like Housecall Pro or Jobber?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#localBusinessFaq">
                                <div class="accordion-body">
                                    Yes. Depending on your tools and workflow, we can support lead handoff, CRM setup, follow-up automation and scheduling system integration. This helps your team manage calls, enquiries, bookings and follow-ups more efficiently.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Do you support businesses with multiple locations or service territories?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#localBusinessFaq">
                                <div class="accordion-body">
                                    Yes. We support businesses with single-location, multi-location and service-area models. For multiple locations, we can create location-specific strategies, Google Business optimization, local landing pages, tracking systems and territory-based ad campaigns.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    How soon will we see more phone calls and bookings after launch?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#localBusinessFaq">
                                <div class="accordion-body">
                                    Paid campaigns can begin generating calls faster once tracking, targeting and ad setup are active. Local SEO and Google Map rankings usually take more time because they depend on profile optimization, reviews, citations, competition and local authority. Most businesses start seeing clearer movement within 60 to 120 days.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Do you provide lead generation for local businesses?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#localBusinessFaq">
                                <div class="accordion-body">
                                    Yes. growboostly provides Lead Generation for Local Businesses through local SEO, Google Maps optimization, paid search, Local Service Ads, landing pages, WhatsApp leads, call tracking and review automation.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    Can you improve my Google Business Profile ranking?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#localBusinessFaq">
                                <div class="accordion-body">
                                    Yes. We improve Google Business Profile visibility by optimizing categories, services, descriptions, photos, posts, reviews, citations and location relevance. Ranking also depends on competition, distance, reviews and consistency across your online presence.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    Do local businesses need a website if they already have Google Maps?
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#localBusinessFaq">
                                <div class="accordion-body">
                                    Yes. Google Maps helps customers find you, but your website builds trust and captures leads. A fast, mobile-friendly website with service pages, forms, WhatsApp buttons and proof can improve both local SEO and conversion rates.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    What type of local businesses can you help?
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#localBusinessFaq">
                                <div class="accordion-body">
                                    We help home service companies, contractors, clinics, restaurants, showrooms, legal professionals, auto garages, cleaning services, retail stores and multi-location service brands that need more local visibility, direct calls and booked enquiries.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ── LEAD GENERATION FLYWHEEL ── -->
    <section class="lb-flywheel-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="lb-flywheel-wrap">
                        <div class="lb-flywheel-hub">
                            <h4>LOCAL<br>ACQUISITION</h4>
                            <span>Flywheel</span>
                        </div>
                        <div class="lb-orbit">
                            <!-- Node 1 -->
                            <div class="lb-orbit-node">
                                <div class="on-circle"><i class="bi bi-geo-alt-fill"></i></div>
                                <div class="on-label">Map Rank</div>
                                <div class="on-sub">Google 3-Pack Rank</div>
                            </div>
                            <!-- Node 2 -->
                            <div class="lb-orbit-node">
                                <div class="on-circle"><i class="bi bi-telephone-fill"></i></div>
                                <div class="on-label">Call</div>
                                <div class="on-sub">Direct Phone Lead</div>
                            </div>
                            <!-- Node 3 -->
                            <div class="lb-orbit-node">
                                <div class="on-circle"><i class="bi bi-calendar-check-fill"></i></div>
                                <div class="on-label">Dispatch</div>
                                <div class="on-sub">CRM Schedule Handoff</div>
                            </div>
                            <!-- Node 4 -->
                            <div class="lb-orbit-node">
                                <div class="on-circle"><i class="bi bi-hammer"></i></div>
                                <div class="on-label">Service</div>
                                <div class="on-sub">Job Completed</div>
                            </div>
                            <!-- Node 5 -->
                            <div class="lb-orbit-node">
                                <div class="on-circle"><i class="bi bi-star-fill"></i></div>
                                <div class="on-label">Review</div>
                                <div class="on-sub">Google Map Feedback</div>
                            </div>
                            <!-- Node 6 -->
                            <div class="lb-orbit-node">
                                <div class="on-circle"><i class="bi bi-repeat"></i></div>
                                <div class="on-label">Recall</div>
                                <div class="on-sub">Seasonal Follow-up</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="ps-lg-4">
                        <span class="lb-flywheel-eyebrow mb-3">Compounding Local Business Inquiries</span>
                        <h2>The Local Domination Flywheel</h2>
                        <p>Instead of starting from scratch each month chasing single lead portals, we install a systematic local lead network. By combining Google Map optimization, automated reviews, local SEO pages, call tracking and seasonal recalls, your business can generate compounding local bookings.</p>
                        <p>The flywheel starts with map visibility and high-intent local searches. Customers call or submit enquiries. Your team completes the service, requests reviews and stores the customer in a follow-up system. Over time, more reviews improve trust, better local content improves visibility and seasonal recall campaigns bring previous customers back.</p>
                        <p>This automated flow lowers customer acquisition costs and keeps your dispatch team busy week after week.</p>
                        
                        <a href="<?php echo gb_url('contact'); ?>?ref=lb-lead-gen" class="lb-btn-solid mt-3">Start Lead Generation <i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── LOCAL EXPERT BOOKING ── -->
    <section class="lb-expert-section">
        <div class="container">
            <div class="lb-expert-card">
                <div class="row align-items-center g-4">
                    <div class="col-lg-8">
                        <h2 style="font-weight: 850; color: var(--lb-navy); margin-bottom: 14px;">Consult a Local Business Marketing Specialist</h2>
                        <p style="font-size: 16.5px; color: var(--lb-text-gray); margin: 0; line-height: 1.6;">Expanding your service areas, opening new branch locations or looking to scale your phone inquiry bookings? Connect directly with a local SEO and growth expert to audit your Google Business profile, website, call tracking and map visibility rankings.</p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a href="<?php echo gb_url('contact'); ?>?ref=lb-talk-expert" class="lb-btn-solid">Talk To Growth Expert <i class="bi bi-chat-square-text-fill ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── OTHER INDUSTRIES ── -->
    <section class="lb-industries-section">
        <div class="container">
            <div class="row g-5 align-items-start">
                <div class="col-lg-5">
                    <span class="lb-tag" style="background:rgba(255,255,255,0.1);color:#fff;border-color:rgba(255,255,255,0.2);">Explore More</span>
                    <h2>Marketing for Other Industries</h2>
                    <p style="color:rgba(255,255,255,0.72);line-height:1.7;">growboostly also builds growth systems for healthcare, real estate, education, eCommerce, SaaS, BPO and finance brands.</p>
                    <a href="<?php echo gb_url('contact'); ?>?ref=lb-other-industry" class="lb-btn-solid mt-3">Get Industry Strategy <i class="bi bi-arrow-right ms-2"></i></a>
                </div>
                <div class="col-lg-7">
                    <ul class="lb-industries-list">
                        <li><a href="<?php echo gb_url('industries/healthcare-clinics'); ?>"><span class="ind-left"><span class="ind-icon">🏥</span>Healthcare &amp; Clinics</span><i class="bi bi-arrow-right"></i></a></li>
                        <li><a href="<?php echo gb_url('industries/real-estate'); ?>"><span class="ind-left"><span class="ind-icon">🏠</span>Real Estate &amp; Property</span><i class="bi bi-arrow-right"></i></a></li>
                        <li><a href="<?php echo gb_url('industries/education-coaching'); ?>"><span class="ind-left"><span class="ind-icon">🎓</span>Education &amp; Coaching</span><i class="bi bi-arrow-right"></i></a></li>
                        <li><a href="<?php echo gb_url('industries/ecommerce-d2c'); ?>"><span class="ind-left"><span class="ind-icon">🛒</span>eCommerce &amp; D2C Brands</span><i class="bi bi-arrow-right"></i></a></li>
                        <li><a href="<?php echo gb_url('industries/saas-it-technology'); ?>"><span class="ind-left"><span class="ind-icon">💻</span>SaaS &amp; IT Companies</span><i class="bi bi-arrow-right"></i></a></li>
                        <li><a href="<?php echo gb_url('industries/bpo-service-companies'); ?>"><span class="ind-left"><span class="ind-icon">📞</span>BPO &amp; Service Companies</span><i class="bi bi-arrow-right"></i></a></li>
                        <li><a href="<?php echo gb_url('industries/finance-insurance'); ?>"><span class="ind-left"><span class="ind-icon">🏦</span>Finance &amp; Insurance</span><i class="bi bi-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ── FINAL CONVERSION CTA BANNER ── -->
    <div class="lb-final-cta">
        <div class="container">
            <h2>Dominate Your Local Territory Today</h2>
            <p>Don't lose your local neighborhood customers to regional competitors. Partner with a dedicated local business marketing team that understands Google Maps, local SEO, pay-per-call ads, review automation, lead tracking and conversion-focused website systems.</p>
            <span class="cta-phone">
                📞 Call / WhatsApp: <a href="tel:+919919020887">+91-9919020887</a>
            </span>
            <div>
                <a href="<?php echo gb_url('contact'); ?>?ref=lb-final-consultation" class="lb-cta-btn">Book Free Consultation</a>
                <a href="<?php echo gb_url('contact'); ?>?ref=lb-final-growth-plan" class="lb-cta-btn outline">Get Free Growth Plan</a>
            </div>
            <div class="mt-3">
                <a href="<?php echo gb_url('contact'); ?>?ref=lb-final-project" class="lb-cta-btn outline" style="font-size:15px;padding:12px 28px;">Discuss Your Project</a>
                <a href="<?php echo gb_url('contact'); ?>?ref=lb-final-expert" class="lb-cta-btn outline" style="font-size:15px;padding:12px 28px;">Talk To Growth Expert</a>
            </div>
            <div class="highlight-note">
                ⭐ Average Client Direct Phone Call Inquiries Increase by 160% Within the First 4 Months of Setup
            </div>
        </div>
    </div>
    <br>

    <?php include '../footer.php'; ?>

</body>
</html>
