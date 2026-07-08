<!doctype html>
<html lang="en">

<head>
<?php include __DIR__ . '/../includes/google-tag.php'; ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Get Ecommerce Development Services and D2C Ecommerce Solutions from growboostly. Scale Shopify stores with ads, CRO, retention flows and ecommerce website development.">
    <meta name="keywords" content="Ecommerce Development Services, D2C Ecommerce Solutions, Shopify store optimization, Facebook ads for ecommerce, e-commerce scale, retention marketing retail, growboostly D2C">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph -->
    <meta property="og:title" content="Ecommerce Development Services for D2C Brands | growboostly">
    <meta property="og:description" content="Get Ecommerce Development Services and D2C Ecommerce Solutions from growboostly. Scale Shopify stores with ads, CRO, retention flows and ecommerce website development.">
    <meta property="og:url" content="https://www.growboostly.com/industries/ecommerce-d2c">
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
    <title>Ecommerce Development Services for D2C Brands | growboostly</title>
    <link rel="icon" href="../assets/img/fav-icon.svg" type="image/gif" sizes="20x20">

    <style>
        /* ── E-COMMERCE THEME VARIABLES ── */
        :root {
            --ec-primary: #8b5cf6;      /* Vibrant Tech Purple */
            --ec-dark: #6d28d9;         /* Deep Royal Purple */
            --ec-light: #f5f3ff;        /* Soft Purple Background */
            --ec-accent: #10b981;       /* Emerald Green (Growth/Money) */
            --ec-border: #ddd6fe;       /* Soft Purple Border */
            --ec-navy: #0f172a;         /* Deep Charcoal Slate */
            --ec-text-gray: #475569;
        }

        /* ── HERO SECTION ── */
        .ec-modern-hero {
            background: radial-gradient(circle at 10% 20%, rgba(139,92,246,0.06) 0%, rgba(255,255,255,0) 50%), #ffffff;
            padding: 110px 0 90px;
            overflow: hidden;
            position: relative;
            border-bottom: 1px solid var(--ec-border);
        }
        .ec-modern-hero .hero-content-wrap {
            position: relative;
            z-index: 2;
        }
        .ec-modern-hero .breadcrumb-list {
            justify-content: flex-start;
            margin-bottom: 25px;
            padding: 0;
            display: flex;
            align-items: center;
            gap: 8px;
            list-style: none;
        }
        .ec-modern-hero .breadcrumb-list li, .ec-modern-hero .breadcrumb-list li a {
            font-size: 14px;
            font-weight: 500;
            color: var(--ec-text-gray);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .ec-modern-hero .breadcrumb-list li a:hover {
            color: var(--ec-primary);
        }
        .ec-modern-hero .ec-tag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(139,92,246,0.08);
            color: var(--ec-dark);
            padding: 6px 18px;
            border-radius: 30px;
            font-weight: 700;
            font-size: 13px;
            margin-bottom: 24px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border: 1px solid rgba(139,92,246,0.15);
        }
        .ec-modern-hero h1 {
            font-size: clamp(36px, 4.8vw, 36px);
            font-weight: 850;
            color: var(--ec-navy);
            line-height: 1.15;
            margin-bottom: 24px;
            letter-spacing: -1.2px;
        }
        .ec-modern-hero h3 {
            font-size: 22px;
            font-weight: 600;
            color: var(--ec-primary);
            margin-bottom: 24px;
            line-height: 1.4;
        }
        .ec-modern-hero p {
            font-size: 17.5px;
            color: var(--ec-text-gray);
            line-height: 1.65;
            margin-bottom: 36px;
        }
        .ec-modern-hero .hero-actions {
            display: flex;
            gap: 16px;
            align-items: center;
            flex-wrap: wrap;
            margin-bottom: 48px;
        }
        .ec-modern-hero .btn-primary {
            background: linear-gradient(135deg, var(--ec-primary) 0%, var(--ec-dark) 100%);
            color: #fff !important;
            padding: 16px 36px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 16px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(139,92,246,0.2);
            border: none;
        }
        .ec-modern-hero .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 25px rgba(139,92,246,0.3);
            color: #fff !important;
        }
        .ec-modern-hero .btn-secondary {
            background: #fff;
            color: var(--ec-navy);
            padding: 15px 32px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 16px;
            text-decoration: none;
            border: 2px solid var(--ec-border);
            transition: all 0.3s ease;
        }
        .ec-modern-hero .btn-secondary:hover {
            border-color: var(--ec-primary);
            color: var(--ec-primary);
        }
        .ec-modern-hero .hero-stats {
            display: flex;
            gap: 40px;
            border-top: 1px solid #e2e8f0;
            padding-top: 32px;
        }
        .ec-modern-hero .stat-block strong {
            display: block;
            font-size: 28px;
            font-weight: 800;
            color: var(--ec-navy);
            line-height: 1.2;
        }
        .ec-modern-hero .stat-block span {
            font-size: 13px;
            color: var(--ec-text-gray);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 600;
        }

        /* Hero Image & Floating Cards */
        .ec-modern-hero .hero-visual-wrapper {
            position: relative;
            width: 100%;
            height: 100%;
            min-height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .ec-modern-hero .main-img {
            border-radius: 20px;
            box-shadow: 0 30px 60px rgba(15,23,42,0.12);
            max-width: 100%;
            height: auto;
            position: relative;
            z-index: 2;
            border: 1px solid var(--ec-border);
        }
        .ec-modern-hero .floating-card {
            position: absolute;
            background: #fff;
            padding: 20px 24px;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(15,23,42,0.06);
            border: 1px solid var(--ec-border);
            z-index: 3;
            display: flex;
            align-items: center;
            gap: 16px;
            animation: ec-float 6s ease-in-out infinite;
        }
        .ec-modern-hero .floating-card .icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: rgba(139,92,246,0.1);
            color: var(--ec-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }
        .ec-modern-hero .floating-card strong {
            display: block;
            font-size: 22px;
            font-weight: 800;
            color: var(--ec-navy);
            line-height: 1.2;
        }
        .ec-modern-hero .floating-card span {
            display: block;
            font-size: 13px;
            color: var(--ec-text-gray);
            font-weight: 500;
        }
        .ec-modern-hero .ec-fc-1 {
            top: 10%;
            left: -5%;
            animation-delay: 0s;
        }
        .ec-modern-hero .ec-fc-2 {
            bottom: 15%;
            right: -5%;
            animation-delay: 2.5s;
        }
        @keyframes ec-float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        @media (max-width: 991px) {
            .ec-modern-hero .hero-visual-wrapper {
                margin-bottom: 60px;
                min-height: 400px;
            }
            .ec-modern-hero .ec-fc-1 { left: 5%; }
            .ec-modern-hero .ec-fc-2 { right: 5%; }
            .ec-modern-hero .hero-stats { gap: 24px; flex-wrap: wrap; }
        }

        /* ── STATS BAR ── */
        .ec-stats-bar {
            background: linear-gradient(135deg, var(--ec-navy) 0%, #1e293b 100%);
            padding: 50px 0;
            margin-bottom: 80px;
        }
        .ec-stats-bar .stat-item {
            text-align: center;
            padding: 20px 15px;
            border-right: 1px solid rgba(255,255,255,0.12);
        }
        .ec-stats-bar .stat-item:last-child { border-right: none; }
        .ec-stats-bar .stat-number {
            font-size: 44px;
            font-weight: 850;
            color: #fff;
            line-height: 1;
            margin-bottom: 8px;
        }
        .ec-stats-bar .stat-number span { color: var(--ec-accent); }
        .ec-stats-bar .stat-label {
            font-size: 14px;
            color: rgba(255,255,255,0.7);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 500;
        }
        @media (max-width: 767px) {
            .ec-stats-bar .stat-item { border-right: none; border-bottom: 1px solid rgba(255,255,255,0.1); }
            .ec-stats-bar .stat-item:last-child { border-bottom: none; }
        }

        /* ── SECTION TITLE HELPER ── */
        .ec-section-title {
            margin-bottom: 48px;
            text-align: center;
        }
        .ec-section-title h2 { font-size: 34px; font-weight: 800; color: var(--ec-navy); }
        .ec-section-title p {
            font-size: 16px;
            color: var(--ec-text-gray);
            max-width: 720px;
            margin: 14px auto 0;
            text-align: center;
            line-height: 1.75;
        }
        .ec-section-title .title-tag, .ec-choose-section .title-tag {
            display: inline-block;
            background: var(--ec-light);
            color: var(--ec-dark);
            font-size: 13px;
            font-weight: 700;
            padding: 5px 16px;
            border-radius: 20px;
            margin-bottom: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* ── WHAT IS / EDITORIAL GRID ── */
        .ec-what-section { padding: 90px 0; background: #fff; overflow: hidden; }
        .ec-what-inner { display: grid; grid-template-columns: 1.1fr 0.9fr; gap: 60px; align-items: center; }
        @media (max-width: 1199px) { .ec-what-inner { grid-template-columns: 1fr; } }
        .ec-what-left .eyebrow { display: inline-block; background: var(--ec-light); color: var(--ec-primary); font-size: 12px; font-weight: 800; padding: 6px 16px; border-radius: 30px; text-transform: uppercase; letter-spacing: .8px; margin-bottom: 20px; }
        .ec-what-left h2 { font-size: clamp(30px, 3.8vw, 44px); font-weight: 850; color: var(--ec-navy); line-height: 1.15; margin-bottom: 24px; letter-spacing: -0.8px; }
        .ec-what-left p { font-size: 16.5px; color: var(--ec-text-gray); line-height: 1.75; margin-bottom: 28px; }
        .ec-what-left .ec-highlight { color: var(--ec-primary); font-weight: 700; }
        
        .ec-btn-solid {
            background: linear-gradient(135deg, var(--ec-primary) 0%, var(--ec-dark) 100%);
            color: #fff !important;
            padding: 16px 36px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 16px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(139,92,246,0.15);
            border: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .ec-btn-solid:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 25px rgba(139,92,246,0.25);
            color: #fff !important;
        }

        .ec-struggle-box { 
            background: #faf7ff; 
            border: 1.5px solid var(--ec-border); 
            border-radius: 16px; 
            padding: 32px; 
            margin-top: 30px; 
            box-shadow: 0 8px 30px rgba(139,92,246, 0.02);
        }
        .ec-struggle-box h4 { color: var(--ec-dark); font-weight: 800; font-size: 20px; margin-bottom: 12px; }
        .ec-struggle-box p { font-size: 15px; margin-bottom: 0; color: var(--ec-dark); }
        .ec-struggle-list { list-style: none; padding: 0; margin: 24px 0 0; }
        .ec-struggle-list li { display: flex; align-items: flex-start; gap: 12px; font-size: 15.5px; font-weight: 700; color: var(--ec-navy); margin-bottom: 16px; }
        .ec-struggle-list li i { color: var(--ec-primary); flex-shrink: 0; font-size: 18px; }

        /* ── STRATEGY SECTION ── */
        .ec-strategy {
            padding: 90px 0;
            background: #fafafa;
            border-top: 1px solid #f1f5f9;
        }
        .ec-feature-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            margin-top: 35px;
        }
        @media (max-width: 767px) { .ec-feature-grid { grid-template-columns: 1fr; } }
        
        .ec-feature-card {
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
        .ec-feature-card:hover {
            border-color: var(--ec-primary);
            box-shadow: 0 12px 36px rgba(139,92,246,0.08);
            transform: translateY(-4px);
        }
        .ec-feature-card .icon-wrap {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: var(--ec-light);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: var(--ec-primary);
        }
        .ec-feature-card h5 {
            font-size: 17.5px;
            font-weight: 800;
            color: var(--ec-navy);
            margin: 0;
        }
        .ec-feature-card p {
            font-size: 14.5px;
            color: var(--ec-text-gray);
            margin: 0;
            line-height: 1.6;
        }

        /* ── ORBIT FLYWHEEL SECTION ── */
        .ec-flywheel-section {
            padding: 95px 0;
            background: #fff;
        }
        .ec-flywheel-section .ec-flywheel-eyebrow {
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
            background: linear-gradient(135deg, var(--ec-primary) 0%, var(--ec-accent) 100%);
            box-shadow: 0 8px 24px rgba(15, 23, 42, 0.14);
            margin-bottom: 16px;
        }
        .ec-flywheel-section h2 {
            font-size: clamp(28px, 3.2vw, 40px);
            font-weight: 850;
            color: var(--ec-navy);
            letter-spacing: -0.8px;
            margin-bottom: 18px;
            line-height: 1.2;
        }
        .ec-flywheel-section h2 .ec-highlight-compounding {
            background: linear-gradient(135deg, var(--ec-primary) 0%, var(--ec-accent) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .ec-flywheel-wrap { position: relative; max-width: 600px; margin: 0 auto; }
        .ec-flywheel-hub { 
            width: 170px; 
            height: 170px; 
            border-radius: 50%; 
            background: var(--ec-navy); 
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
            box-shadow: 0 0 0 16px rgba(139,92,246,.08), 0 0 0 32px rgba(139,92,246,.04); 
        }
        .ec-flywheel-hub h4 { font-size: 15.5px; font-weight: 900; color: #fff; margin: 0; line-height: 1.3; }
        .ec-flywheel-hub span { font-size: 11px; color: var(--ec-primary); font-weight: 700; text-transform: uppercase; letter-spacing: .6px; }
        
        .ec-orbit { position: relative; width: 540px; height: 540px; margin: 0 auto; }
        @media (max-width: 767px) { .ec-orbit { width: 340px; height: 340px; } }
        .ec-orbit::before { content: ''; position: absolute; inset: 0; border-radius: 50%; border: 2px dashed rgba(139,92,246,.25); }
        .ec-orbit-node { position: absolute; width: 125px; text-align: center; transform: translate(-50%, -50%); }
        @media (max-width: 767px) { .ec-orbit-node { width: 85px; } }
        .ec-orbit-node .on-circle { 
            width: 62px; 
            height: 62px; 
            border-radius: 50%; 
            background: #fff; 
            border: 2px solid var(--ec-border); 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            font-size: 22px; 
            margin: 0 auto 8px; 
            box-shadow: 0 4px 16px rgba(0,0,0,.06); 
            transition: all .3s; 
        }
        @media (max-width: 767px) { .ec-orbit-node .on-circle { width: 44px; height: 44px; font-size: 16px; } }
        .ec-orbit-node:hover .on-circle { background: var(--ec-primary); border-color: var(--ec-primary); box-shadow: 0 0 0 8px rgba(139,92,246,.15); color: #fff; }
        .ec-orbit-node:hover .on-circle i { color: #fff; }
        .ec-orbit-node .on-label { font-size: 11.5px; font-weight: 800; color: var(--ec-navy); text-transform: uppercase; letter-spacing: .6px; line-height: 1.3; }
        .ec-orbit-node .on-sub { font-size: 10px; color: var(--ec-text-gray); margin-top: 3px; }
        
        /* Node Positions */
        .ec-orbit-node:nth-child(1) { top: 0%;   left: 50%; }
        .ec-orbit-node:nth-child(2) { top: 25%;  left: 93.3%; }
        .ec-orbit-node:nth-child(3) { top: 75%;  left: 93.3%; }
        .ec-orbit-node:nth-child(4) { top: 100%; left: 50%; }
        .ec-orbit-node:nth-child(5) { top: 75%;  left: 6.7%; }
        .ec-orbit-node:nth-child(6) { top: 25%;  left: 6.7%; }

        @media (max-width: 767px) {
            .ec-flywheel-section, .ec-flywheel-wrap, .ec-orbit { display: none !important; }
        }

        /* ── EXPERT BOOKING ── */
        .ec-expert-section {
            padding: 90px 0;
            background: #fafafa;
            border-top: 1px solid #f1f5f9;
            border-bottom: 1px solid #f1f5f9;
        }
        .ec-expert-card {
            background: #fff;
            border-radius: 20px;
            padding: 45px;
            box-shadow: 0 20px 50px rgba(15,23,42,0.05);
            border: 1px solid var(--ec-border);
        }

        /* ── FAQ ── */
        .ec-faq {
            padding: 90px 0;
        }
        .ec-faq .accordion-item {
            border: 1px solid var(--ec-border);
            border-radius: 12px !important;
            margin-bottom: 16px;
            overflow: hidden;
        }
        .ec-faq .accordion-button {
            font-size: 16.5px;
            font-weight: 700;
            color: var(--ec-navy);
            background: #fff;
            padding: 22px 24px;
        }
        .ec-faq .accordion-button:not(.collapsed) {
            color: var(--ec-dark);
            background: var(--ec-light);
            box-shadow: none;
        }
        .ec-faq .accordion-body {
            font-size: 15px;
            color: var(--ec-text-gray);
            padding: 18px 24px 22px;
            background: #fafaff;
            line-height: 1.65;
        }

        /* ── FINAL CTA ── */
        .ec-final-cta {
            padding: 95px 0;
            background: linear-gradient(135deg, var(--ec-primary) 0%, var(--ec-dark) 100%);
            text-align: center;
            color: #fff;
            position: relative;
            overflow: hidden;
        }
        .ec-final-cta::before {
            content: '';
            position: absolute;
            top: -20%;
            left: -10%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(255,255,255,0.08) 0%, transparent 60%);
            pointer-events: none;
        }
        .ec-final-cta h2 {
            font-size: 38px;
            font-weight: 850;
            color: #fff;
            margin-bottom: 18px;
            letter-spacing: -0.8px;
        }
        .ec-final-cta p {
            font-size: 18px;
            color: rgba(255,255,255,0.9);
            margin-bottom: 36px;
            max-width: 720px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.7;
        }
        .ec-final-cta .cta-phone {
            font-size: 22px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 30px;
            display: block;
        }
        .ec-final-cta .cta-phone a { color: #fff; text-decoration: none; }
        .ec-final-cta .cta-phone a:hover { text-decoration: underline; }
        
        .ec-cta-btn {
            display: inline-block;
            background: #fff;
            color: var(--ec-dark);
            font-size: 16px;
            font-weight: 700;
            padding: 16px 38px;
            border-radius: 40px;
            text-decoration: none;
            margin: 6px 8px;
            transition: all 0.3s;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .ec-cta-btn:hover {
            background: var(--ec-navy);
            color: #fff;
            transform: translateY(-2px);
        }
        .ec-cta-btn.outline {
            background: transparent;
            color: #fff;
            border: 2px solid rgba(255,255,255,0.7);
            box-shadow: none;
        }
        .ec-cta-btn.outline:hover {
            background: #fff;
            color: var(--ec-dark);
        }
        .ec-final-cta .highlight-note {
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

        /* ── D2C BRANDS & DELIVERABLES ── */
        .ec-brands-section {
            padding: 90px 0;
            background: var(--ec-light);
            border-top: 1px solid var(--ec-border);
            border-bottom: 1px solid var(--ec-border);
        }
        .ec-brands-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            margin-top: 40px;
        }
        @media (max-width: 991px) { .ec-brands-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 575px) { .ec-brands-grid { grid-template-columns: 1fr; } }
        .ec-brand-card {
            background: #fff;
            border: 1px solid var(--ec-border);
            border-radius: 16px;
            padding: 28px 24px;
            transition: all 0.3s ease;
        }
        .ec-brand-card:hover {
            border-color: var(--ec-primary);
            box-shadow: 0 12px 30px rgba(139,92,246,0.12);
            transform: translateY(-4px);
        }
        .ec-brand-card .icon { font-size: 28px; margin-bottom: 14px; }
        .ec-brand-card h5 { font-size: 17px; font-weight: 800; color: var(--ec-navy); margin-bottom: 10px; }
        .ec-brand-card p { font-size: 14px; color: var(--ec-text-gray); margin: 0; line-height: 1.6; }

        .ec-deliverables-section {
            padding: 90px 0;
            background: #fff;
        }
        .ec-deliverables-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 28px;
            margin-top: 40px;
        }
        @media (max-width: 767px) { .ec-deliverables-grid { grid-template-columns: 1fr; } }
        .ec-deliverable-item {
            display: flex;
            gap: 18px;
            padding: 24px;
            border-radius: 14px;
            border: 1px solid #f1f5f9;
            background: #fafaff;
        }
        .ec-deliverable-item .num {
            flex-shrink: 0;
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--ec-primary), var(--ec-dark));
            color: #fff;
            font-weight: 800;
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .ec-deliverable-item h5 { font-size: 16px; font-weight: 800; color: var(--ec-navy); margin-bottom: 8px; }
        .ec-deliverable-item p { font-size: 14px; color: var(--ec-text-gray); margin: 0; line-height: 1.65; }

        .ec-industries-section {
            padding: 85px 0;
            background: var(--ec-navy);
            color: #fff;
        }
        .ec-industries-section h2 { color: #fff; font-weight: 850; margin-bottom: 12px; }
        .ec-industries-section > .container > p { color: rgba(255,255,255,0.72); max-width: 640px; margin-bottom: 36px; }
        .ec-industries-list {
            list-style: none;
            padding: 0;
            margin: 0;
            border-top: 1px solid rgba(255,255,255,0.12);
        }
        .ec-industries-list li a {
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
        .ec-industries-list li a:hover { color: var(--ec-accent); padding-left: 10px; }
        .ec-industries-list .ind-left { display: flex; align-items: center; gap: 14px; }
        .ec-industries-list .ind-icon { font-size: 22px; }

        /* ── WHY CHOOSE SECTION ── */
        .ec-choose-section {
            padding: 95px 0;
            background: #fafafa;
            border-top: 1px solid var(--ec-border);
            border-bottom: 1px solid var(--ec-border);
        }
        .ec-choose-section h2 { font-size: 34px; font-weight: 800; color: var(--ec-navy); margin-bottom: 24px; }
        .ec-choose-section p { font-size: 16px; color: var(--ec-text-gray); line-height: 1.75; }
        
        .ec-value-card {
            background: #fff;
            border: 1px solid var(--ec-border);
            border-radius: 16px;
            padding: 24px;
            display: flex;
            gap: 20px;
            align-items: flex-start;
            transition: all 0.3s ease;
            height: 100%;
        }
        .ec-value-card:hover {
            border-color: var(--ec-primary);
            box-shadow: 0 12px 30px rgba(139, 92, 246, 0.08);
            transform: translateY(-3px);
        }
        .ec-value-card .icon-box {
            width: 44px;
            height: 44px;
            border-radius: 10px;
            background: rgba(16, 185, 129, 0.1);
            color: var(--ec-accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            flex-shrink: 0;
        }
        .ec-value-card h5 {
            font-size: 16px;
            font-weight: 800;
            color: var(--ec-navy);
            margin-bottom: 6px;
            line-height: 1.4;
        }
        .ec-value-card p {
            font-size: 13.5px;
            color: var(--ec-text-gray);
            margin: 0;
            line-height: 1.55;
        }

        /* ── TECH STACK SECTION ── */
        .ec-tech-section {
            padding: 90px 0;
            background: #fff;
        }
        .ec-tech-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            margin-top: 40px;
        }
        @media (max-width: 991px) { .ec-tech-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 575px) { .ec-tech-grid { grid-template-columns: 1fr; } }
        .ec-tech-card {
            background: #fff;
            border: 1px solid var(--ec-border);
            border-radius: 16px;
            padding: 24px;
            transition: all 0.3s ease;
            height: 100%;
        }
        .ec-tech-card:hover {
            border-color: var(--ec-primary);
            box-shadow: 0 12px 30px rgba(139,92,246,0.1);
            transform: translateY(-3px);
        }
        .ec-tech-card h5 { font-size: 16px; font-weight: 800; color: var(--ec-navy); margin-bottom: 8px; }
        .ec-tech-card p { font-size: 13.5px; color: var(--ec-text-gray); margin: 0; line-height: 1.6; }
    </style>
</head>

<body class="tt-magic-cursor digital-agency">

    <?php include '../header.php'; ?>

    <!-- ── E-COMMERCE & D2C HERO SECTION ── -->
    <div class="ec-modern-hero mb-0">
        <div class="container">
            <div class="row align-items-center g-5">
                <!-- Left Column: Text Content -->
                <div class="col-lg-6">
                    <div class="hero-content-wrap">
                        <div class="breadcrumb-list">
                            <li><a href="/">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i></li>
                            <li><a href="../industries">Industries</a></li>
                            <li><i class="bi bi-chevron-right"></i></li>
                            <li>E-commerce &amp; D2C</li>
                        </div>
                        <span class="ec-tag mb-3">Ecommerce Development Services for D2C Brand Scale</span>
                        <h1>High-ROAS Paid Ads, Ecommerce Website Development &amp; Customer Retention</h1>
                        <h3>Scale Your Shop's Monthly Recurring Revenue.</h3>
                        <p class="mb-3">At growboostly, we are providing Ecommerce Development Services and D2C Ecommerce Solutions for Shopify stores, D2C retail brands, online marketplaces and fast-growing ecommerce businesses. We build profit-focused growth systems using conversion-optimized ad funnels, ecommerce website development, automated cart recovery sequences, CRM retention setups and analytics dashboards to maximize Customer Lifetime Value (LTV).</p>
                        <p>Our team connects marketing, technology and automation so your store does not depend only on ads. From improving product pages and checkout speed to building retention flows and paid media systems, we help ecommerce brands increase revenue, reduce wasted ad spend and grow with better profit control.</p>
                        <div class="hero-actions">
                            <a href="/contact?ref=ec-consultation" class="btn-primary">Book Free Consultation</a>
                            <a href="/contact?ref=ec-growth-plan" class="btn-secondary">Get Free Growth Plan</a>
                        </div>
                        <div class="hero-stats">
                            <div class="stat-block">
                                <strong>4.2x+</strong>
                                <span>Average ROAS</span>
                            </div>
                            <div class="stat-block">
                                <strong>+320%</strong>
                                <span>Revenue Growth</span>
                            </div>
                            <div class="stat-block">
                                <strong>24%</strong>
                                <span>Lower Acquisition Cost</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right Column: Visual Image -->
                <div class="col-lg-6">
                    <div class="hero-visual-wrapper">
                        <div class="floating-card ec-fc-1">
                            <div class="icon"><i class="bi bi-cart-check-fill"></i></div>
                            <div>
                                <strong>+280%</strong>
                                <span>Orders Scale</span>
                            </div>
                        </div>
                        <img src="../assets/img/services/ecommerce-d2c-hero.png" alt="Ecommerce Development Services and D2C Ecommerce Solutions for online stores by growboostly" class="main-img">
                        <div class="floating-card ec-fc-2">
                            <div class="icon"><i class="bi bi-cash-stack"></i></div>
                            <div>
                                <strong>4.5x</strong>
                                <span>Blended ROAS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ── STATS BAR ── -->
    <div class="ec-stats-bar">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number"><span>4.2</span>X+</div>
                        <div class="stat-label">Average Campaign ROAS</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number"><span>35</span>%</div>
                        <div class="stat-label">Increase in Returning Customer Rate</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number"><span>24</span>%</div>
                        <div class="stat-label">Decrease in CPA</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number"><span>80</span>%</div>
                        <div class="stat-label">Cart Recovery Rate Increase</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ── THE STRUGGLE / WHY IT MATTERS ── -->
    <section class="ec-what-section">
        <div class="container">
            <div class="ec-what-inner">
                <div class="ec-what-left">
                    <span class="eyebrow">The Challenge</span>
                    <h2>Are Wasted Ad Clicks and Rising Costs Burning Your Margins?</h2>
                    <p>Too many retail brands burn through their capital testing unoptimized ads on cold audiences. Poor website speeds, weak product pages, friction-filled checkout steps and absent email automation lead to abandoned carts, low conversion rates and high Customer Acquisition Costs (CAC).</p>
                    <p>Many D2C brands also face another problem: traffic is coming, but the ecommerce system is not ready to convert or retain customers. If your store has slow mobile pages, unclear offers, poor tracking, no remarketing, no post-purchase flow and no repeat-order strategy, even good ads can become expensive.</p>
                    <p>As an <a href="<?php echo gb_url('services/web-developers'); ?>" style="color: var(--ec-primary); text-decoration: underline;">it company in lucknow</a>, growboostly designs conversion-optimized commerce pipelines for online brands that need profitable growth. From full-funnel media buying to <a href="<?php echo gb_url('services/maintenance-support'); ?>" style="color: var(--ec-primary); text-decoration: underline;">Shopify speed optimization</a>, <a href="<?php echo gb_url('services/ecommerce-development'); ?>" style="color: var(--ec-primary); text-decoration: underline;">ecommerce website development</a> and post-purchase email sequences, we build self-funding retail growth systems that support both acquisition and retention.</p>
                    
                    <a href="/contact?ref=ec-project-discussion" class="ec-btn-solid">Discuss Your Project <i class="bi bi-arrow-right ms-2"></i></a>
                </div>
                
                <div>
                    <div class="ec-struggle-box">
                        <h4>Struggling with these e-commerce scaling issues?</h4>
                        <p>We solve the key growth bottlenecks that hold back online stores:</p>
                        <ul class="ec-struggle-list">
                            <li><i class="bi bi-exclamation-circle-fill"></i> Rising ad costs eating up product margins</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> High cart abandonment with zero recovery setup</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> Wasting traffic on slow, unoptimized landing pages</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> Single-purchase buyers with zero retention strategy</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> Poor mobile shopping experience reducing conversions</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> Weak product pages with low trust and unclear offers</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> No proper tracking between CAC, ROAS, LTV and repeat orders</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> No structured email/SMS flow for repeat purchases</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> No clear dashboard to understand real profit and marketing efficiency</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── WHO WE SCALE (D2C BRANDS) ── -->
    <section class="ec-brands-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="ec-section-title">
                        <span class="title-tag">Who We Help</span>
                        <h2>E-commerce &amp; D2C Brands We Scale</h2>
                        <p>Whether you sell on Shopify, marketplaces or your own store, our D2C Ecommerce Solutions are built around your product margin, AOV, repeat-purchase cycle and customer acquisition model.</p>
                    </div>
                </div>
            </div>
            <div class="ec-brands-grid">
                <div class="ec-brand-card">
                    <div class="icon">🛍️</div>
                    <h5>Shopify &amp; D2C Stores</h5>
                    <p>Custom themes, CRO, Meta/Google ads, ecommerce website development and Klaviyo flows for direct-to-consumer brands scaling past ₹10L/month.</p>
                </div>
                <div class="ec-brand-card">
                    <div class="icon">👗</div>
                    <h5>Fashion &amp; Lifestyle</h5>
                    <p>UGC-led social ads, influencer whitelisting, size-guide landing pages, product bundle offers and return-rate-aware campaign structure.</p>
                </div>
                <div class="ec-brand-card">
                    <div class="icon">💄</div>
                    <h5>Beauty &amp; Wellness</h5>
                    <p>Before/after creatives, subscription offers, replenishment emails, product education funnels and high-LTV customer segmentation.</p>
                </div>
                <div class="ec-brand-card">
                    <div class="icon">🍽️</div>
                    <h5>Food &amp; Consumables</h5>
                    <p>Repeat-order funnels, bundle offers, local delivery messaging, trial pack campaigns and performance creatives for recurring purchase behavior.</p>
                </div>
                <div class="ec-brand-card">
                    <div class="icon">📦</div>
                    <h5>Amazon &amp; Marketplace Sellers</h5>
                    <p>Off-Amazon traffic to owned stores, brand search defense, remarketing to marketplace buyers and customer retention systems for long-term growth.</p>
                </div>
                <div class="ec-brand-card">
                    <div class="icon">🚀</div>
                    <h5>Launch &amp; Seasonal Brands</h5>
                    <p>Pre-launch waitlists, drop campaigns, festival sale war-rooms, inventory-aware ad pacing and conversion-focused landing pages.</p>
                </div>
                <div class="ec-brand-card">
                    <div class="icon">🏠</div>
                    <h5>Home, Furniture &amp; Lifestyle Brands</h5>
                    <p>High-ticket product pages, trust-building creatives, collection page optimization and lead capture systems for assisted buying journeys.</p>
                </div>
                <div class="ec-brand-card">
                    <div class="icon">🐾</div>
                    <h5>Pet Care &amp; Niche D2C Brands</h5>
                    <p>Repeat-order campaigns, subscription flows, educational content funnels and retention journeys for loyal customer communities.</p>
                </div>
                <div class="ec-brand-card">
                    <div class="icon">🎁</div>
                    <h5>Gifting &amp; Festival Stores</h5>
                    <p>Seasonal campaign planning, bundle offers, landing page creation, urgency-based retargeting and WhatsApp/email follow-up systems.</p>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="/contact?ref=ec-brands-discuss" class="ec-btn-solid">Discuss Your Project <i class="bi bi-arrow-right ms-2"></i></a>
            </div>
        </div>
    </section>

    <!-- ── CORE COMMERCE STRATEGIES ── -->
    <section class="ec-strategy">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="ec-section-title">
                        <span class="title-tag">Our Services</span>
                        <h2>Ecommerce Development Services &amp; D2C Brand Scale Solutions</h2>
                        <p>We deploy advanced search ads, social targeting, speed tuning, ecommerce website development and email sequences designed specifically for Shopify stores, D2C brands and online marketplaces.</p>
                    </div>
                </div>
            </div>
            
            <div class="ec-feature-grid">
                <div class="ec-feature-card">
                    <div class="icon-wrap"><i class="bi bi-graph-up-arrow"></i></div>
                    <h5>High-ROAS Social Ads</h5>
                    <p>Scale your ad spend profitably. We create high-converting Meta, TikTok and Pinterest ad campaigns using creator content, audience testing, offer testing and budget-scaling setups to capture active shoppers.</p>
                </div>
                <div class="ec-feature-card">
                    <div class="icon-wrap"><i class="bi bi-lightning-charge-fill"></i></div>
                    <h5>Shopify Speed &amp; CRO</h5>
                    <p>Stop losing sales to slow loading speeds. We optimize landing page load times, restructure product pages, improve cart checkout funnels and set up A/B testing to increase your store's conversion rate.</p>
                </div>
                <div class="ec-feature-card">
                    <div class="icon-wrap"><i class="bi bi-envelope-open-heart-fill"></i></div>
                    <h5>Retention &amp; Klaviyo Flows</h5>
                    <p>Maximize your customer LTV. We build automated email and SMS sequences, including welcome series, cart abandonment recovery, browse abandon flows, cross-sells, replenishment reminders and win-backs that drive recurring revenue.</p>
                </div>
                <div class="ec-feature-card">
                    <div class="icon-wrap"><i class="bi bi-bag-heart-fill"></i></div>
                    <h5>Google Performance Max</h5>
                    <p>Show up where buyers search. We optimize Google Shopping, Performance Max and YouTube ad assets to ensure your products appear in high-intent commercial searches.</p>
                </div>
                <div class="ec-feature-card">
                    <div class="icon-wrap"><i class="bi bi-code-slash"></i></div>
                    <h5>Ecommerce Website Development</h5>
                    <p>Build conversion-focused product pages, landing pages, collection pages, checkout flows and mobile shopping experiences that make buying easier for customers and scaling easier for your team.</p>
                </div>
                <div class="ec-feature-card">
                    <div class="icon-wrap"><i class="bi bi-bar-chart-line-fill"></i></div>
                    <h5>Ecommerce Tracking &amp; Analytics</h5>
                    <p>We set up tracking systems to monitor revenue, ROAS, MER, CAC, LTV, repeat customer rate, cart recovery and campaign-level performance so your team can make better decisions.</p>
                </div>
                <div class="ec-feature-card">
                    <div class="icon-wrap"><i class="bi bi-shop"></i></div>
                    <h5>Marketplace &amp; Store Growth Support</h5>
                    <p>We help ecommerce brands connect marketplace growth with owned-store growth through remarketing, offer pages, CRM data, retention campaigns and customer journey optimization.</p>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="/contact?ref=ec-strategy" class="ec-btn-solid">Get Industry Strategy <i class="bi bi-arrow-right ms-2"></i></a>
            </div>
        </div>
    </section>

    <!-- ── GROWTH DELIVERABLES ── -->
    <section class="ec-deliverables-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="ec-section-title">
                        <span class="title-tag">What You Get</span>
                        <h2>End-to-End D2C Growth Deliverables</h2>
                        <p>Every engagement is built around measurable commerce outcomes, not vanity metrics. Here is what a typical growboostly e-commerce growth plan includes.</p>
                    </div>
                </div>
            </div>
            <div class="ec-deliverables-grid">
                <div class="ec-deliverable-item">
                    <span class="num">1</span>
                    <div>
                        <h5>Store &amp; Funnel Audit</h5>
                        <p>Speed, mobile UX, checkout friction, tracking gaps, offer-page structure and product page trust elements reviewed before ad spend scales.</p>
                    </div>
                </div>
                <div class="ec-deliverable-item">
                    <span class="num">2</span>
                    <div>
                        <h5>Paid Media &amp; Creative System</h5>
                        <p>Meta, Google Shopping and retargeting campaigns with structured testing for hooks, angles, audiences, creatives and product-level ROAS.</p>
                    </div>
                </div>
                <div class="ec-deliverable-item">
                    <span class="num">3</span>
                    <div>
                        <h5>Email / SMS Retention Flows</h5>
                        <p>Welcome, browse abandon, cart recovery, post-purchase cross-sell, review request, replenishment and win-back sequences tied to LTV goals.</p>
                    </div>
                </div>
                <div class="ec-deliverable-item">
                    <span class="num">4</span>
                    <div>
                        <h5>Reporting &amp; MER Dashboards</h5>
                        <p>Blended ROAS, CAC vs LTV, MER and cohort-style views so founders see true profit, not platform-inflated numbers.</p>
                    </div>
                </div>
                <div class="ec-deliverable-item">
                    <span class="num">5</span>
                    <div>
                        <h5>Ecommerce Store Optimization</h5>
                        <p>Product pages, collection pages, mobile checkout, trust badges, offer sections and CTA placements improved to support better conversion rates.</p>
                    </div>
                </div>
                <div class="ec-deliverable-item">
                    <span class="num">6</span>
                    <div>
                        <h5>Customer Journey &amp; Checkout Optimization</h5>
                        <p>We reduce friction from landing page to product page, cart, checkout and post-purchase journey so more visitors become paying customers.</p>
                    </div>
                </div>
                <div class="ec-deliverable-item">
                    <span class="num">7</span>
                    <div>
                        <h5>Analytics &amp; Conversion Tracking Setup</h5>
                        <p>GA4, pixels, events, conversion tracking and funnel tracking are reviewed to reduce data gaps and improve marketing decisions.</p>
                    </div>
                </div>
                <div class="ec-deliverable-item">
                    <span class="num">8</span>
                    <div>
                        <h5>Growth Strategy &amp; Scaling Roadmap</h5>
                        <p>You get a practical roadmap for creative testing, budget scaling, retention automation, CRO improvements and long-term ecommerce growth.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="/contact?ref=ec-deliverables-plan" class="ec-btn-solid">Get Free Growth Plan <i class="bi bi-arrow-right ms-2"></i></a>
            </div>
        </div>
    </section>

    <!-- ── WHY CHOOSE SECTION ── -->
    <section class="ec-choose-section">
        <div class="container">
            <div class="row g-5">
                <!-- Left Side: Copy and Sticky Header -->
                <div class="col-lg-5">
                    <div class="sticky-top" style="top: 100px; z-index: 1;">
                        <span class="title-tag">Why Choose Us</span>
                        <h2 style="font-size: clamp(28px, 3.2vw, 42px); font-weight: 850; color: var(--ec-navy); line-height: 1.2; letter-spacing: -0.8px; margin-bottom: 24px;">Why Ecommerce &amp; D2C Brands Choose growboostly</h2>
                        <p style="font-size: 16px; color: var(--ec-text-gray); line-height: 1.75; margin-bottom: 18px;">Unlike agencies that focus only on advertising or only on website development, growboostly combines Ecommerce Development Services, paid acquisition, CRO, retention automation and analytics into one growth framework designed for long-term profitability.</p>
                        <p style="font-size: 16px; color: var(--ec-text-gray); line-height: 1.75; margin-bottom: 18px;">We understand that ecommerce scaling is not just about increasing ad budget. Your store needs a fast website, clear product presentation, strong checkout flow, proper tracking, high-performing creatives and repeat-purchase systems. That is why our strategy connects ecommerce website development with marketing execution and customer retention.</p>
                        <p style="font-size: 16px; color: var(--ec-text-gray); line-height: 1.75; margin-bottom: 0;">Brands choose us because we focus on business outcomes like better ROAS, lower CAC, higher AOV, better retention and repeat purchases. As an <a href="<?php echo gb_url('services/web-developers'); ?>" style="color: var(--ec-primary); text-decoration: underline;">it company in lucknow</a>, we bring both technical execution and growth strategy together for ecommerce and D2C businesses.</p>
                    </div>
                </div>
                
                <!-- Right Side: Value Cards Grid -->
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-12">
                            <div class="ec-value-card">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>Conversion-focused ecommerce website development</h5>
                                    <p>We build speed-optimized, sales-ready layouts designed to turn traffic into paying buyers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="ec-value-card">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>Shopify, WooCommerce and custom store support</h5>
                                    <p>Full support for SaaS storefronts, open-source architectures, and customized headless setups.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="ec-value-card">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>Paid media campaigns built around profit and ROAS</h5>
                                    <p>Acquisition funnels tuned for sustainable margins and real business profitability, not just vanity metrics.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="ec-value-card">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>Email/SMS retention flows for repeat purchases</h5>
                                    <p>Lifecycle automations that trigger cross-sells, win-backs, and cart recovery to drive recurring revenue.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="ec-value-card">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>Analytics dashboards for CAC, LTV, MER and revenue tracking</h5>
                                    <p>Unified live dashboards comparing total revenue against media spend for absolute transparency.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="ec-value-card">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>CRO improvements for product pages, cart and checkout</h5>
                                    <p>Continuous A/B testing and checkout audits to reduce friction and improve purchase velocity.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="ec-value-card">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>Growth systems designed for long-term D2C brand scale</h5>
                                    <p>A connected strategy aligning ad buying, web speed, customer feedback, and post-purchase loops.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── TECH STACK SECTION ── -->
    <section class="ec-tech-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="ec-section-title">
                        <span class="title-tag">Technology Stack</span>
                        <h2>Ecommerce Technology &amp; Growth Stack</h2>
                        <p>Our D2C Ecommerce Solutions combine ecommerce website development, CRM integration, marketing automation, analytics and paid advertising into one connected ecosystem.</p>
                        <p class="mt-2 text-muted" style="font-size: 15px;">We work with Shopify, WooCommerce, Magento, BigCommerce and custom ecommerce setups. For retention and automation, we support tools like Klaviyo, Omnisend, ActiveCampaign, WhatsApp automation and CRM systems. For tracking and reporting, we work with GA4, Google Tag Manager, Meta Pixel, Google Ads conversion tracking and dashboard reporting.</p>
                    </div>
                </div>
            </div>
            
            <div class="ec-tech-grid">
                <div class="ec-tech-card">
                    <h5>Shopify &amp; WooCommerce store optimization</h5>
                    <p>We optimize theme liquid files, database queries, image sizes and plugins to ensure fast speeds and clean shopping experiences.</p>
                </div>
                <div class="ec-tech-card">
                    <h5>Custom ecommerce website development</h5>
                    <p>We build tailored checkout paths, headless structures and high-performance storefronts designed to scale.</p>
                </div>
                <div class="ec-tech-card">
                    <h5>GA4 and Google Tag Manager setup</h5>
                    <p>We configure tags, triggers and custom variables to track ecommerce purchases and client journeys accurately.</p>
                </div>
                <div class="ec-tech-card">
                    <h5>Meta Ads and Google Ads tracking</h5>
                    <p>We integrate server-side Conversions API (CAPI) and Google enhanced conversions to resolve tracking loss issues.</p>
                </div>
                <div class="ec-tech-card">
                    <h5>Klaviyo, Omnisend and email automation</h5>
                    <p>We setup list segmentation, lifecycle automations and promotional email campaigns for repeat sales.</p>
                </div>
                <div class="ec-tech-card">
                    <h5>WhatsApp, SMS and CRM integrations</h5>
                    <p>We connect store platforms with automation hubs to recover checkouts and engage buyers via SMS/WhatsApp.</p>
                </div>
                <div class="ec-tech-card">
                    <h5>Payment gateway and checkout flow support</h5>
                    <p>We streamline checkout form fields and integrate leading credit card, Apple Pay, and local payment methods.</p>
                </div>
                <div class="ec-tech-card">
                    <h5>Landing page and product page CRO</h5>
                    <p>We design product bundle landing pages, reviews blocks and sticky CTA layouts to drive conversion.</p>
                </div>
                <div class="ec-tech-card">
                    <h5>Reporting dashboards for ROAS, CAC, LTV and MER</h5>
                    <p>We combine all sources into unified live dashboards so founders track marketing efficiency and real profit margins.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ── FAQ SECTION ── -->
    <div class="ec-faq">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="ec-section-title">
                        <span class="title-tag">FAQ</span>
                        <h2>E-commerce Marketing FAQ</h2>
                        <p>Common questions answered about our paid advertising, conversion rate optimization, and Klaviyo email flows.</p>
                    </div>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="accordion" id="ecommerceFaq">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What platforms do you support for e-commerce marketing and optimization?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#ecommerceFaq">
                                <div class="accordion-body">
                                    We provide marketing, landing page creation, <a href="<?php echo gb_url('services/ecommerce-development'); ?>" style="color: var(--ec-primary); text-decoration: underline;">ecommerce website development</a> and speed optimization for major platforms, including Shopify, WooCommerce, Magento, BigCommerce and custom headless commerce setups. We also integrate email and retention flows with tools like Klaviyo, Omnisend and ActiveCampaign. Our goal is to improve the complete buying journey from traffic to checkout and repeat purchase.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How do you structure retargeting for abandoned cart shoppers?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#ecommerceFaq">
                                <div class="accordion-body">
                                    We structure retargeting based on shopper behavior. This includes cart abandoners, product viewers, checkout drop-offs, past buyers and repeat-purchase segments. We combine Meta ads, Google remarketing, email reminders and SMS flows so customers receive relevant follow-ups without feeling over-targeted. The strategy depends on product price, buying cycle, margin and customer intent.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What is the average timeline to see a return on ad spend?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#ecommerceFaq">
                                <div class="accordion-body">
                                    Most ecommerce brands start seeing clearer performance signals within the first 30 to 45 days after campaign setup, tracking correction and creative testing. Stronger ROAS usually depends on product demand, offer strength, website speed, checkout flow, ad budget and retention setup. For stores with existing traffic and data, improvements can often be identified faster.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How do you track blended ROAS and MER?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#ecommerceFaq">
                                <div class="accordion-body">
                                    We track blended ROAS and MER by comparing total revenue against total marketing spend across platforms. Instead of depending only on Meta or Google-reported numbers, we review store revenue, ad spend, CAC, AOV, repeat purchases, LTV and platform-level performance together. This gives founders a clearer view of real business profitability.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Do you work with low ad budgets or only large brands?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#ecommerceFaq">
                                <div class="accordion-body">
                                    Yes, we work with both growing and established brands. For smaller budgets, we focus on offer testing, landing page improvement, tracking setup and high-intent campaigns. For larger brands, we focus on scaling, creative testing, retention flows, CRO and profit-focused reporting. The strategy is always planned according to your margin, product category and growth stage.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Can you fix a store that is already running ads but losing money?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#ecommerceFaq">
                                <div class="accordion-body">
                                    Yes. We first audit your ad structure, landing pages, checkout flow, website speed, product offers, tracking setup and retention systems. Then we identify whether the issue is traffic quality, weak creatives, poor conversion rate, low AOV, missing retargeting or weak customer retention. After that, we create a step-by-step recovery and growth plan.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Do you provide ecommerce website development services?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#ecommerceFaq">
                                <div class="accordion-body">
                                    Yes. growboostly provides <a href="<?php echo gb_url('services/ecommerce-development'); ?>" style="color: var(--ec-primary); text-decoration: underline;">Ecommerce Development Services</a> for Shopify, WooCommerce and custom ecommerce stores. We help improve product pages, collection pages, landing pages, checkout flow, mobile UX, speed, tracking and conversion-focused design. Our ecommerce website development approach is built around sales, not just visual design.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    Can you help migrate from WooCommerce to Shopify?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#ecommerceFaq">
                                <div class="accordion-body">
                                    Yes. We can help plan WooCommerce to Shopify migration depending on your products, categories, customer data, order history, design requirements and SEO needs. The migration process may include store structure planning, theme setup, product upload, redirects, tracking setup and checkout testing. Final scope depends on the size and complexity of your current store.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    How do you improve ecommerce conversion rates?
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#ecommerceFaq">
                                <div class="accordion-body">
                                    We improve conversion rates by auditing product pages, page speed, mobile UX, offer clarity, CTA placement, checkout friction, trust elements, reviews, product images and tracking data. Then we create CRO improvements such as better landing pages, clearer product benefits, stronger social proof, faster checkout and better cart recovery flows.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    What metrics should D2C brands track?
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#ecommerceFaq">
                                <div class="accordion-body">
                                    D2C brands should track ROAS, blended ROAS, MER, CAC, LTV, AOV, conversion rate, cart abandonment rate, returning customer rate, repeat purchase rate, email revenue, SMS revenue and product-level profitability. These metrics help you understand whether your store is growing profitably or only increasing top-line revenue.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEleven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                    Can you integrate CRM and marketing automation tools?
                                </button>
                            </h2>
                            <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#ecommerceFaq">
                                <div class="accordion-body">
                                    Yes. We can connect ecommerce stores with CRM systems, email tools, SMS tools, WhatsApp automation, analytics platforms and reporting dashboards. These integrations help your team manage leads, customers, repeat purchases, abandoned carts and post-purchase communication from a more organized system.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwelve">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                    Do your D2C Ecommerce Solutions include paid ads and retention?
                                </button>
                            </h2>
                            <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#ecommerceFaq">
                                <div class="accordion-body">
                                    Yes. Our D2C Ecommerce Solutions combine paid ads, <a href="<?php echo gb_url('services/ecommerce-development'); ?>" style="color: var(--ec-primary); text-decoration: underline;">ecommerce website development</a>, CRO, tracking, email/SMS retention and reporting. This helps brands scale acquisition while also improving repeat purchases and customer lifetime value. The goal is to build a growth system, not just run isolated campaigns.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ── LEAD GENERATION FLYWHEEL ── -->
    <section class="ec-flywheel-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="ec-flywheel-wrap">
                        <div class="ec-flywheel-hub">
                            <h4>COMMERCE<br>SCALING</h4>
                            <span>Flywheel</span>
                        </div>
                        <div class="ec-orbit">
                            <!-- Node 1 -->
                            <div class="ec-orbit-node">
                                <div class="on-circle"><i class="bi bi-eye-fill"></i></div>
                                <div class="on-label">Attract</div>
                                <div class="on-sub">Meta &amp; Google Ads</div>
                            </div>
                            <!-- Node 2 -->
                            <div class="ec-orbit-node">
                                <div class="on-circle"><i class="bi bi-bag-check-fill"></i></div>
                                <div class="on-label">Checkout</div>
                                <div class="on-sub">CRO Optimized Path</div>
                            </div>
                            <!-- Node 3 -->
                            <div class="ec-orbit-node">
                                <div class="on-circle"><i class="bi bi-send-fill"></i></div>
                                <div class="on-label">Fulfill</div>
                                <div class="on-sub">Post-Purchase Flow</div>
                            </div>
                            <!-- Node 4 -->
                            <div class="ec-orbit-node">
                                <div class="on-circle"><i class="bi bi-envelope-check-fill"></i></div>
                                <div class="on-label">Retain</div>
                                <div class="on-sub">Abandoned &amp; Cross Flow</div>
                            </div>
                            <!-- Node 5 -->
                            <div class="ec-orbit-node">
                                <div class="on-circle"><i class="bi bi-star-fill"></i></div>
                                <div class="on-label">Review</div>
                                <div class="on-sub">UGC &amp; Social Proof</div>
                            </div>
                            <!-- Node 6 -->
                            <div class="ec-orbit-node">
                                <div class="on-circle"><i class="bi bi-arrow-repeat"></i></div>
                                <div class="on-label">Scale LTV</div>
                                <div class="on-sub">VIP &amp; Loyalty Rewards</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="ps-lg-4">
                        <span class="ec-flywheel-eyebrow mb-3">Compounding Retail Sales</span>
                        <h2>The Retail Scaling Flywheel</h2>
                        <p>Instead of relying only on unstable ad algorithms that fluctuate week after week, we deploy a compounding retail flywheel. By improving website speed, <a href="<?php echo gb_url('services/ecommerce-development'); ?>" style="color: var(--ec-primary); text-decoration: underline;">ecommerce website development</a>, positive customer reviews, UGC, checkout flow and automated retention pathways, your store creates a self-funding customer acquisition loop.</p>
                        <p>The flywheel starts with qualified traffic from Meta and Google Ads. Better landing pages and CRO improve checkout rates. Post-purchase flows encourage reviews, repeat purchases and cross-sells. Stronger retention increases LTV, which gives your brand more room to scale ads profitably.</p>
                        <p>This systematic structure keeps acquisition costs lower and helps your store's sales, repeat purchases and revenue grow more predictably.</p>
                        
                        <a href="/contact?ref=ec-lead-gen" class="ec-btn-solid mt-3">Start Lead Generation <i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── E-COMMERCE EXPERT BOOKING ── -->
    <section class="ec-expert-section">
        <div class="container">
            <div class="ec-expert-card">
                <div class="row align-items-center g-4">
                    <div class="col-lg-8">
                        <h2 style="font-weight: 850; color: var(--ec-navy); margin-bottom: 14px;">Consult an E-commerce Scaling Specialist</h2>
                        <p style="font-size: 16.5px; color: var(--ec-text-gray); margin-bottom: 12px; line-height: 1.6;">Preparing for a major product launch, seasonal campaign or looking to scale your store's MRR? Connect directly with an e-commerce growth expert to analyze your store's speed, CRO, paid ad funnels, retention flows and customer journey.</p>
                        <p style="font-size: 16.5px; color: var(--ec-text-gray); margin: 0; line-height: 1.6;">We review your current store performance, paid ads, conversion flow, tracking, retention setup and growth opportunities so you can understand what needs to be fixed before scaling further.</p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a href="/contact?ref=ec-talk-expert" class="ec-btn-solid">Talk To Growth Expert <i class="bi bi-chat-square-text-fill ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── OTHER INDUSTRIES ── -->
    <section class="ec-industries-section">
        <div class="container">
            <div class="row g-5 align-items-start">
                <div class="col-lg-5">
                    <span class="ec-tag" style="background:rgba(255,255,255,0.1);color:#fff;border-color:rgba(255,255,255,0.2);">Explore More</span>
                    <h2>Marketing for Other Industries</h2>
                    <p>Growboostly also builds lead and growth systems for clinics, real estate, coaching, SaaS, BPO, finance, and local service businesses.</p>
                    <a href="/contact?ref=ec-other-industry" class="ec-btn-solid mt-3">Get Industry Strategy <i class="bi bi-arrow-right ms-2"></i></a>
                </div>
                <div class="col-lg-7">
                    <ul class="ec-industries-list">
                        <li><a href="healthcare-clinics"><span class="ind-left"><span class="ind-icon">🏥</span>Healthcare &amp; Clinics</span><i class="bi bi-arrow-right"></i></a></li>
                        <li><a href="real-estate"><span class="ind-left"><span class="ind-icon">🏠</span>Real Estate &amp; Property</span><i class="bi bi-arrow-right"></i></a></li>
                        <li><a href="education-coaching"><span class="ind-left"><span class="ind-icon">🎓</span>Education &amp; Coaching</span><i class="bi bi-arrow-right"></i></a></li>
                        <li><a href="local-businesses"><span class="ind-left"><span class="ind-icon">🏪</span>Local Businesses</span><i class="bi bi-arrow-right"></i></a></li>
                        <li><a href="saas-it-technology"><span class="ind-left"><span class="ind-icon">💻</span>SaaS &amp; IT Companies</span><i class="bi bi-arrow-right"></i></a></li>
                        <li><a href="bpo-service-companies"><span class="ind-left"><span class="ind-icon">📞</span>BPO &amp; Service Companies</span><i class="bi bi-arrow-right"></i></a></li>
                        <li><a href="finance-insurance"><span class="ind-left"><span class="ind-icon">🏦</span>Finance &amp; Insurance</span><i class="bi bi-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ── FINAL CONVERSION CTA BANNER ── -->
    <div class="ec-final-cta">
        <div class="container">
            <h2>Scale Your Store's Sales &amp; Margin Today</h2>
            <p>Don't let high acquisition costs hold back your retail brand. Partner with a dedicated marketing and technology team that understands digital media buying, ecommerce website development, site speed, CRO, customer retention systems and profit-focused ecommerce growth.</p>
            <span class="cta-phone">
                📞 Call / WhatsApp: <a href="tel:+919919020887">+91-9919020887</a>
            </span>
            <div>
                <a href="/contact?ref=ec-final-consultation" class="ec-cta-btn">Book Free Consultation</a>
                <a href="/contact?ref=ec-final-growth-plan" class="ec-cta-btn outline">Get Free Growth Plan</a>
            </div>
            <div class="mt-3">
                <a href="/contact?ref=ec-final-project" class="ec-cta-btn outline" style="font-size:15px;padding:12px 28px;">Discuss Your Project</a>
                <a href="/contact?ref=ec-final-expert" class="ec-cta-btn outline" style="font-size:15px;padding:12px 28px;">Talk To Growth Expert</a>
            </div>
            <div class="highlight-note">
                ⭐ 85% of Our Retail Clients Double Their Revenue Within the First 6 Months of Strategy Launch
            </div>
        </div>
    </div>
    <br>

    <?php include '../footer.php'; ?>

</body>
</html>
