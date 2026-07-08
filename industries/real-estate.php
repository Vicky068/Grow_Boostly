<!doctype html>
<html lang="en">

<head>
<?php include __DIR__ . '/../includes/google-tag.php'; ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Get Real Estate Marketing Services from growboostly. Generate qualified buyer leads with real estate lead generation, landing pages, CRM, SEO and ads.">
    <meta name="keywords" content="real estate lead generation, real estate marketing agency, buyer leads for agents, seller listings marketing, property advertising, local SEO for real estate">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph -->
    <meta property="og:title" content="Real Estate Marketing Services &amp; Lead Generation | growboostly">
    <meta property="og:description" content="Get Real Estate Marketing Services from growboostly. Generate qualified buyer leads with real estate lead generation, landing pages, CRM, SEO and ads.">
    <meta property="og:url" content="https://www.growboostly.com/industries/real-estate">
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
    <title>Real Estate Marketing Services &amp; Lead Generation | growboostly</title>
    <link rel="icon" href="../assets/img/fav-icon.svg" type="image/gif" sizes="20x20">

    <style>
        /* ── REAL ESTATE THEME VARIABLES ── */
        :root {
            --re-primary: #d97706;      /* Premium Luxury Gold/Amber */
            --re-dark: #b45309;         /* Rich Bronze Gold */
            --re-light: #fef3c7;        /* Warm Soft Gold glow */
            --re-accent: #0f172a;       /* Deep Luxury Charcoal */
            --re-border: #fde68a;       /* Soft Gold Border */
            --re-navy: #0b1329;         /* Dark Space Blue */
            --re-text-gray: #475569;
        }

        /* ── HERO SECTION ── */
        .re-modern-hero {
            background: radial-gradient(circle at 10% 20%, rgba(217,119,6,0.06) 0%, rgba(255,255,255,0) 50%), #ffffff;
            padding: 110px 0 90px;
            overflow: hidden;
            position: relative;
            border-bottom: 1px solid var(--re-border);
        }
        .re-modern-hero .hero-content-wrap {
            position: relative;
            z-index: 2;
        }
        .re-modern-hero .breadcrumb-list {
            justify-content: flex-start;
            margin-bottom: 25px;
            padding: 0;
            display: flex;
            align-items: center;
            gap: 8px;
            list-style: none;
        }
        .re-modern-hero .breadcrumb-list li, .re-modern-hero .breadcrumb-list li a {
            font-size: 14px;
            font-weight: 500;
            color: var(--re-text-gray);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .re-modern-hero .breadcrumb-list li a:hover {
            color: var(--re-primary);
        }
        .re-modern-hero .re-tag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(217,119,6,0.08);
            color: var(--re-dark);
            padding: 6px 18px;
            border-radius: 30px;
            font-weight: 700;
            font-size: 13px;
            margin-bottom: 24px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border: 1px solid rgba(217,119,6,0.15);
        }
        .re-modern-hero h1 {
            font-size: clamp(36px, 4.8vw, 36px);
            font-weight: 850;
            color: var(--re-accent);
            line-height: 1.15;
            margin-bottom: 24px;
            letter-spacing: -1.2px;
        }
        .re-modern-hero h3 {
            font-size: 22px;
            font-weight: 600;
            color: var(--re-primary);
            margin-bottom: 24px;
            line-height: 1.4;
        }
        .re-modern-hero p {
            font-size: 17.5px;
            color: var(--re-text-gray);
            line-height: 1.65;
            margin-bottom: 36px;
        }
        .re-modern-hero .hero-actions {
            display: flex;
            gap: 16px;
            align-items: center;
            flex-wrap: wrap;
            margin-bottom: 48px;
        }
        .re-modern-hero .btn-primary {
            background: linear-gradient(135deg, var(--re-primary) 0%, var(--re-dark) 100%);
            color: #fff !important;
            padding: 16px 36px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 16px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(217,119,6,0.2);
            border: none;
        }
        .re-modern-hero .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 25px rgba(217,119,6,0.3);
            color: #fff !important;
        }
        .re-modern-hero .btn-secondary {
            background: #fff;
            color: var(--re-accent);
            padding: 15px 32px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 16px;
            text-decoration: none;
            border: 2px solid var(--re-border);
            transition: all 0.3s ease;
        }
        .re-modern-hero .btn-secondary:hover {
            border-color: var(--re-primary);
            color: var(--re-primary);
        }
        .re-modern-hero .hero-stats {
            display: flex;
            gap: 40px;
            border-top: 1px solid #e2e8f0;
            padding-top: 32px;
        }
        .re-modern-hero .stat-block strong {
            display: block;
            font-size: 28px;
            font-weight: 800;
            color: var(--re-accent);
            line-height: 1.2;
        }
        .re-modern-hero .stat-block span {
            font-size: 13px;
            color: var(--re-text-gray);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 600;
        }

        /* Hero Image & Floating Cards */
        .re-modern-hero .hero-visual-wrapper {
            position: relative;
            width: 100%;
            height: 100%;
            min-height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .re-modern-hero .main-img {
            border-radius: 20px;
            box-shadow: 0 30px 60px rgba(15,23,42,0.12);
            max-width: 100%;
            height: auto;
            position: relative;
            z-index: 2;
            border: 1px solid var(--re-border);
        }
        .re-modern-hero .floating-card {
            position: absolute;
            background: #fff;
            padding: 20px 24px;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(15,23,42,0.06);
            border: 1px solid var(--re-border);
            z-index: 3;
            display: flex;
            align-items: center;
            gap: 16px;
            animation: re-float 6s ease-in-out infinite;
        }
        .re-modern-hero .floating-card .icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: rgba(217,119,6,0.1);
            color: var(--re-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }
        .re-modern-hero .floating-card strong {
            display: block;
            font-size: 22px;
            font-weight: 800;
            color: var(--re-accent);
            line-height: 1.2;
        }
        .re-modern-hero .floating-card span {
            display: block;
            font-size: 13px;
            color: var(--re-text-gray);
            font-weight: 500;
        }
        .re-modern-hero .re-fc-1 {
            top: 10%;
            left: -5%;
            animation-delay: 0s;
        }
        .re-modern-hero .re-fc-2 {
            bottom: 15%;
            right: -5%;
            animation-delay: 2.5s;
        }
        @keyframes re-float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        @media (max-width: 991px) {
            .re-modern-hero .hero-visual-wrapper {
                margin-bottom: 60px;
                min-height: 400px;
            }
            .re-modern-hero .re-fc-1 { left: 5%; }
            .re-modern-hero .re-fc-2 { right: 5%; }
            .re-modern-hero .hero-stats { gap: 24px; flex-wrap: wrap; }
        }

        /* ── STATS BAR ── */
        .re-stats-bar {
            background: linear-gradient(135deg, var(--re-navy) 0%, #1e293b 100%);
            padding: 50px 0;
            margin-bottom: 80px;
        }
        .re-stats-bar .stat-item {
            text-align: center;
            padding: 20px 15px;
            border-right: 1px solid rgba(255,255,255,0.12);
        }
        .re-stats-bar .stat-item:last-child { border-right: none; }
        .re-stats-bar .stat-number {
            font-size: 44px;
            font-weight: 850;
            color: #fff;
            line-height: 1;
            margin-bottom: 8px;
        }
        .re-stats-bar .stat-number span { color: var(--re-primary); }
        .re-stats-bar .stat-label {
            font-size: 14px;
            color: rgba(255,255,255,0.7);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 500;
        }
        @media (max-width: 767px) {
            .re-stats-bar .stat-item { border-right: none; border-bottom: 1px solid rgba(255,255,255,0.1); }
            .re-stats-bar .stat-item:last-child { border-bottom: none; }
        }

        /* ── SECTION TITLE HELPER ── */
        .re-section-title {
            margin-bottom: 48px;
            text-align: center;
        }
        .re-section-title h2 { font-size: 34px; font-weight: 800; color: var(--re-accent); }
        .re-section-title p {
            font-size: 16px;
            color: var(--re-text-gray);
            max-width: 720px;
            margin: 14px auto 0;
            text-align: center;
            line-height: 1.75;
        }
        .re-section-title .title-tag, .re-choose-section .title-tag {
            display: inline-block;
            background: var(--re-light);
            color: var(--re-dark);
            font-size: 13px;
            font-weight: 700;
            padding: 5px 16px;
            border-radius: 20px;
            margin-bottom: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* ── WHAT IS / EDITORIAL GRID ── */
        .re-what-section { padding: 90px 0; background: #fff; overflow: hidden; }
        .re-what-inner { display: grid; grid-template-columns: 1.1fr 0.9fr; gap: 60px; align-items: center; }
        @media (max-width: 1199px) { .re-what-inner { grid-template-columns: 1fr; } }
        .re-what-left .eyebrow { display: inline-block; background: var(--re-light); color: var(--re-dark); font-size: 12px; font-weight: 800; padding: 6px 16px; border-radius: 30px; text-transform: uppercase; letter-spacing: .8px; margin-bottom: 20px; }
        .re-what-left h2 { font-size: clamp(30px, 3.8vw, 44px); font-weight: 850; color: var(--re-accent); line-height: 1.15; margin-bottom: 24px; letter-spacing: -0.8px; }
        .re-what-left p { font-size: 16.5px; color: var(--re-text-gray); line-height: 1.75; margin-bottom: 28px; }
        .re-what-left .re-highlight { color: var(--re-primary); font-weight: 700; }
        
        .re-btn-solid {
            background: linear-gradient(135deg, var(--re-primary) 0%, var(--re-dark) 100%);
            color: #fff !important;
            padding: 16px 36px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 16px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(217,119,6,0.15);
            border: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .re-btn-solid:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 25px rgba(217,119,6,0.25);
            color: #fff !important;
        }

        .re-struggle-box { 
            background: #fffbf0; 
            border: 1.5px solid var(--re-border); 
            border-radius: 16px; 
            padding: 32px; 
            margin-top: 30px; 
            box-shadow: 0 8px 30px rgba(217,119,6, 0.02);
        }
        .re-struggle-box h4 { color: var(--re-dark); font-weight: 800; font-size: 20px; margin-bottom: 12px; }
        .re-struggle-box p { font-size: 15px; margin-bottom: 0; color: #78350f; }
        .re-struggle-list { list-style: none; padding: 0; margin: 24px 0 0; }
        .re-struggle-list li { display: flex; align-items: flex-start; gap: 12px; font-size: 15.5px; font-weight: 700; color: var(--re-accent); margin-bottom: 16px; }
        .re-struggle-list li i { color: var(--re-primary); flex-shrink: 0; font-size: 18px; }

        /* ── STRATEGY SECTION ── */
        .re-strategy {
            padding: 90px 0;
            background: #fafafa;
            border-top: 1px solid #f1f5f9;
        }
        .re-feature-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            margin-top: 35px;
        }
        @media (max-width: 767px) { .re-feature-grid { grid-template-columns: 1fr; } }
        
        .re-feature-card {
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
        .re-feature-card:hover {
            border-color: var(--re-primary);
            box-shadow: 0 12px 36px rgba(217,119,6,0.08);
            transform: translateY(-4px);
        }
        .re-feature-card .icon-wrap {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: var(--re-light);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: var(--re-dark);
        }
        .re-feature-card h5 {
            font-size: 17.5px;
            font-weight: 800;
            color: var(--re-accent);
            margin: 0;
        }
        .re-feature-card p {
            font-size: 14.5px;
            color: var(--re-text-gray);
            margin: 0;
            line-height: 1.6;
        }

        /* ── ORBIT FLYWHEEL SECTION ── */
        .re-flywheel-section {
            padding: 95px 0;
            background: #fff;
        }
        .re-flywheel-section .re-flywheel-eyebrow {
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
            background: linear-gradient(135deg, var(--re-primary) 0%, var(--re-accent) 100%);
            box-shadow: 0 8px 24px rgba(15, 23, 42, 0.14);
            margin-bottom: 16px;
        }
        .re-flywheel-section h2 {
            font-size: clamp(28px, 3.2vw, 40px);
            font-weight: 850;
            color: var(--re-navy);
            letter-spacing: -0.8px;
            margin-bottom: 18px;
            line-height: 1.2;
        }
        .re-flywheel-section h2 .re-highlight-compounding {
            background: linear-gradient(135deg, var(--re-primary) 0%, var(--re-accent) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .re-flywheel-wrap { position: relative; max-width: 600px; margin: 0 auto; }
        .re-flywheel-hub { 
            width: 170px; 
            height: 170px; 
            border-radius: 50%; 
            background: var(--re-accent); 
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
            box-shadow: 0 0 0 16px rgba(217,119,6,.08), 0 0 0 32px rgba(217,119,6,.04); 
        }
        .re-flywheel-hub h4 { font-size: 15.5px; font-weight: 900; color: #fff; margin: 0; line-height: 1.3; }
        .re-flywheel-hub span { font-size: 11px; color: var(--re-primary); font-weight: 700; text-transform: uppercase; letter-spacing: .6px; }
        
        .re-orbit { position: relative; width: 540px; height: 540px; margin: 0 auto; }
        @media (max-width: 767px) { .re-orbit { width: 340px; height: 340px; } }
        .re-orbit::before { content: ''; position: absolute; inset: 0; border-radius: 50%; border: 2px dashed rgba(217,119,6,.25); }
        .re-orbit-node { position: absolute; width: 125px; text-align: center; transform: translate(-50%, -50%); }
        @media (max-width: 767px) { .re-orbit-node { width: 85px; } }
        .re-orbit-node .on-circle { 
            width: 62px; 
            height: 62px; 
            border-radius: 50%; 
            background: #fff; 
            border: 2px solid var(--re-border); 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            font-size: 22px; 
            margin: 0 auto 8px; 
            box-shadow: 0 4px 16px rgba(0,0,0,.06); 
            transition: all .3s; 
        }
        @media (max-width: 767px) { .re-orbit-node .on-circle { width: 44px; height: 44px; font-size: 16px; } }
        .re-orbit-node:hover .on-circle { background: var(--re-primary); border-color: var(--re-primary); box-shadow: 0 0 0 8px rgba(217,119,6,.15); color: #fff; }
        .re-orbit-node:hover .on-circle i { color: #fff; }
        .re-orbit-node .on-label { font-size: 11.5px; font-weight: 800; color: var(--re-accent); text-transform: uppercase; letter-spacing: .6px; line-height: 1.3; }
        .re-orbit-node .on-sub { font-size: 10px; color: var(--re-text-gray); margin-top: 3px; }
        
        /* Node Positions */
        .re-orbit-node:nth-child(1) { top: 0%;   left: 50%; }
        .re-orbit-node:nth-child(2) { top: 25%;  left: 93.3%; }
        .re-orbit-node:nth-child(3) { top: 75%;  left: 93.3%; }
        .re-orbit-node:nth-child(4) { top: 100%; left: 50%; }
        .re-orbit-node:nth-child(5) { top: 75%;  left: 6.7%; }
        .re-orbit-node:nth-child(6) { top: 25%;  left: 6.7%; }

        @media (max-width: 767px) {
            .re-flywheel-section, .re-flywheel-wrap, .re-orbit { display: none !important; }
        }

        /* ── EXPERT BOOKING ── */
        .re-expert-section {
            padding: 90px 0;
            background: #fafafa;
            border-top: 1px solid #f1f5f9;
            border-bottom: 1px solid #f1f5f9;
        }
        .re-expert-card {
            background: #fff;
            border-radius: 20px;
            padding: 45px;
            box-shadow: 0 20px 50px rgba(15,23,42,0.05);
            border: 1px solid var(--re-border);
        }

        /* ── FAQ ── */
        .re-faq {
            padding: 90px 0;
        }
        .re-faq .accordion-item {
            border: 1px solid var(--re-border);
            border-radius: 12px !important;
            margin-bottom: 16px;
            overflow: hidden;
        }
        .re-faq .accordion-button {
            font-size: 16.5px;
            font-weight: 700;
            color: var(--re-accent);
            background: #fff;
            padding: 22px 24px;
        }
        .re-faq .accordion-button:not(.collapsed) {
            color: var(--re-dark);
            background: var(--re-light);
            box-shadow: none;
        }
        .re-faq .accordion-body {
            font-size: 15px;
            color: var(--re-text-gray);
            padding: 18px 24px 22px;
            background: #fffdf9;
            line-height: 1.65;
        }

        /* ── FINAL CTA ── */
        .re-final-cta {
            padding: 95px 0;
            background: linear-gradient(135deg, var(--re-primary) 0%, var(--re-dark) 100%);
            text-align: center;
            color: #fff;
            position: relative;
            overflow: hidden;
        }
        .re-final-cta::before {
            content: '';
            position: absolute;
            top: -20%;
            left: -10%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(255,255,255,0.08) 0%, transparent 60%);
            pointer-events: none;
        }
        .re-final-cta h2 {
            font-size: 38px;
            font-weight: 850;
            color: #fff;
            margin-bottom: 18px;
            letter-spacing: -0.8px;
        }
        .re-final-cta p {
            font-size: 18px;
            color: rgba(255,255,255,0.9);
            margin-bottom: 36px;
            max-width: 720px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.7;
        }
        .re-final-cta .cta-phone {
            font-size: 22px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 30px;
            display: block;
        }
        .re-final-cta .cta-phone a { color: #fff; text-decoration: none; }
        .re-final-cta .cta-phone a:hover { text-decoration: underline; }
        
        .re-cta-btn {
            display: inline-block;
            background: #fff;
            color: var(--re-dark);
            font-size: 16px;
            font-weight: 700;
            padding: 16px 38px;
            border-radius: 40px;
            text-decoration: none;
            margin: 6px 8px;
            transition: all 0.3s;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .re-cta-btn:hover {
            background: var(--re-accent);
            color: #fff;
            transform: translateY(-2px);
        }
        .re-cta-btn.outline {
            background: transparent;
            color: #fff;
            border: 2px solid rgba(255,255,255,0.7);
            box-shadow: none;
        }
        .re-cta-btn.outline:hover {
            background: #fff;
            color: var(--re-dark);
        }
        .re-final-cta .highlight-note {
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

        .re-brands-section {
            padding: 90px 0;
            background: var(--re-light);
            border-top: 1px solid var(--re-border);
            border-bottom: 1px solid var(--re-border);
        }
        .re-brands-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            margin-top: 40px;
        }
        @media (max-width: 991px) { .re-brands-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 575px) { .re-brands-grid { grid-template-columns: 1fr; } }
        .re-brand-card {
            background: #fff;
            border: 1px solid var(--re-border);
            border-radius: 16px;
            padding: 28px 24px;
            transition: all 0.3s ease;
        }
        .re-brand-card:hover {
            border-color: var(--re-primary);
            box-shadow: 0 12px 30px rgba(180,83,9,0.12);
            transform: translateY(-4px);
        }
        .re-brand-card .icon { font-size: 28px; margin-bottom: 14px; }
        .re-brand-card h5 { font-size: 17px; font-weight: 800; color: var(--re-accent); margin-bottom: 10px; }
        .re-brand-card p { font-size: 14px; color: var(--re-text-gray); margin: 0; line-height: 1.6; }

        .re-deliverables-section { padding: 90px 0; background: #fff; }
        .re-deliverables-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 28px;
            margin-top: 40px;
        }
        @media (max-width: 767px) { .re-deliverables-grid { grid-template-columns: 1fr; } }
        .re-deliverable-item {
            display: flex;
            gap: 18px;
            padding: 24px;
            border-radius: 14px;
            border: 1px solid #e2e8f0;
            background: var(--re-light);
        }
        .re-deliverable-item .num {
            flex-shrink: 0;
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--re-primary), var(--re-dark));
            color: #fff;
            font-weight: 800;
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .re-deliverable-item h5 { font-size: 16px; font-weight: 800; color: var(--re-accent); margin-bottom: 8px; }
        .re-deliverable-item p { font-size: 14px; color: var(--re-text-gray); margin: 0; line-height: 1.65; }

        .re-industries-section {
            padding: 85px 0;
            background: var(--re-accent);
            color: #fff;
        }
        .re-industries-section h2 { color: #fff; font-weight: 850; margin-bottom: 12px; }
        .re-industries-list {
            list-style: none;
            padding: 0;
            margin: 0;
            border-top: 1px solid rgba(255,255,255,0.12);
        }
        .re-industries-list li a {
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
        .re-industries-list li a:hover { color: var(--re-primary); padding-left: 10px; }
        .re-industries-list .ind-left { display: flex; align-items: center; gap: 14px; }
        .re-industries-list .ind-icon { font-size: 22px; }

        /* ── WHY CHOOSE SECTION ── */
        .re-choose-section {
            padding: 95px 0;
            background: #fafafa;
            border-top: 1px solid var(--re-border);
            border-bottom: 1px solid var(--re-border);
        }
        .re-choose-section h2 { font-size: 34px; font-weight: 800; color: var(--re-accent); margin-bottom: 24px; }
        .re-choose-section p { font-size: 16px; color: var(--re-text-gray); line-height: 1.75; }
        
        .re-value-card {
            background: #fff;
            border: 1px solid var(--re-border);
            border-radius: 16px;
            padding: 24px;
            display: flex;
            gap: 20px;
            align-items: flex-start;
            transition: all 0.3s ease;
            height: 100%;
        }
        .re-value-card:hover {
            border-color: var(--re-primary);
            box-shadow: 0 12px 30px rgba(217,119,6,0.08);
            transform: translateY(-3px);
        }
        .re-value-card .icon-box {
            width: 44px;
            height: 44px;
            border-radius: 10px;
            background: rgba(217,119,6,0.1);
            color: var(--re-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            flex-shrink: 0;
        }
        .re-value-card h5 {
            font-size: 16px;
            font-weight: 800;
            color: var(--re-accent);
            margin-bottom: 6px;
            line-height: 1.4;
        }
        .re-value-card p {
            font-size: 13.5px;
            color: var(--re-text-gray);
            margin: 0;
            line-height: 1.55;
        }
        .re-value-card.single-line {
            align-items: center;
        }
        .re-value-card.single-line h5 {
            margin-bottom: 0;
        }
    </style>
</head>

<body class="tt-magic-cursor digital-agency">

    <?php include '../header.php'; ?>

    <!-- ── REAL ESTATE HERO SECTION ── -->
    <div class="re-modern-hero mb-0">
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
                            <li>Real Estate</li>
                        </div>
                        <span class="re-tag mb-3">Real Estate Marketing Services for High-Intent Buyer &amp; Seller Leads</span>
                        <h1>Premium Property Marketing, Real Estate Lead Generation &amp; Sales Conversion</h1>
                        <h3>Accelerate Listings, Sales &amp; Conversions.</h3>
                        <p>At growboostly, we are providing Real Estate Marketing Services for property developers, brokers, premium real estate agencies, builders, rental businesses and property consultants that want qualified buyer enquiries, seller mandates and faster sales pipelines. We build multi-channel marketing engines using geo-targeted lead funnels, real estate website development, virtual tour advertising, local SEO, Google Ads, Meta campaigns and CRM-based nurturing.</p>
                        <p>Our goal is to help your sales team connect with property seekers who have real intent, defined budgets and location-specific requirements. Instead of sending low-quality portal leads, we create verified property pipelines that support better calls, site visits, tour bookings and deal closures.</p>
                        <div class="hero-actions">
                            <a href="<?php echo gb_url('contact'); ?>?ref=re-consultation" class="btn-primary">Book Free Consultation</a>
                            <a href="<?php echo gb_url('contact'); ?>?ref=re-growth-plan" class="btn-secondary">Get Free Growth Plan</a>
                        </div>
                        <div class="hero-stats">
                            <div class="stat-block">
                                <strong>5.2x</strong>
                                <span>Average ROI</span>
                            </div>
                            <div class="stat-block">
                                <strong>$480M+</strong>
                                <span>Sales Value Generated</span>
                            </div>
                            <div class="stat-block">
                                <strong>94%</strong>
                                <span>Lead Accuracy</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right Column: Visual Image -->
                <div class="col-lg-6">
                    <div class="hero-visual-wrapper">
                        <div class="floating-card re-fc-1">
                            <div class="icon"><i class="bi bi-house-heart-fill"></i></div>
                            <div>
                                <strong>84%</strong>
                                <span>Listing View Rate</span>
                            </div>
                        </div>
                        <img src="../assets/img/services/real-estate-hero.png" alt="Real Estate Marketing Services for builders, brokers and property developers by growboostly" class="main-img">
                        <div class="floating-card re-fc-2">
                            <div class="icon"><i class="bi bi-graph-up-arrow"></i></div>
                            <div>
                                <strong>3.5x</strong>
                                <span>Pipeline Velocity</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ── STATS BAR ── -->
    <div class="re-stats-bar">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number"><span>5.2</span>X+</div>
                        <div class="stat-label">Average Campaign ROI</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number"><span>40</span>%</div>
                        <div class="stat-label">Faster Close Times</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number"><span>12</span>k+</div>
                        <div class="stat-label">Qualified Buyer Profiles</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number"><span>$480</span>M+</div>
                        <div class="stat-label">Client Property Value Sold</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ── THE STRUGGLE / WHY IT MATTERS ── -->
    <section class="re-what-section">
        <div class="container">
            <div class="re-what-inner">
                <div class="re-what-left">
                    <span class="eyebrow">The Bottleneck</span>
                    <h2>Is Your Property Pipeline Dry or Filled With Unqualified Clicks?</h2>
                    <p>Too many real estate agencies burn their margins on low-intent listing portals, poor lead forms and spammy social ads. Agents spend hours chasing fake phone numbers, incomplete enquiries or window shoppers who are years away from buying.</p>
                    <p>Many property brands also struggle because their marketing system is not connected. Campaigns generate leads, but there is no budget qualification, no CRM routing, no WhatsApp nurturing, no landing page structure and no follow-up automation. This creates a weak sales pipeline even when ad spend is high.</p>
                    <p>At growboostly, we design <span class="re-highlight">targeted acquisition funnels</span> that verify buyer intent, qualify budgets and automate nurturing. As an <a href="<?php echo gb_url('services/web-developers'); ?>" style="color: var(--re-primary); text-decoration: underline;">IT Company in Lucknow</a>, we combine marketing, automation, CRM support and <a href="<?php echo gb_url('services/business-website-development'); ?>" style="color: var(--re-primary); text-decoration: underline;">real estate website development</a> to deliver ready-to-talk prospects looking for properties in your specific price tier, location and inventory category.</p>
                    
                    <a href="<?php echo gb_url('contact'); ?>?ref=re-project-discussion" class="re-btn-solid">Discuss Your Project <i class="bi bi-arrow-right ms-2"></i></a>
                </div>
                
                <div>
                    <div class="re-struggle-box">
                        <h4>Struggling with these marketing challenges?</h4>
                        <p>Our Real Estate Marketing Services resolve the industry's biggest friction points:</p>
                        <ul class="re-struggle-list">
                            <li><i class="bi bi-exclamation-circle-fill"></i> Unqualified leads wasting agent time</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> Low visibility in premium neighborhood searches</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> Inconsistent buyer and listing pipelines</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> High cost-per-lead on property portals</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> No proper CRM routing for agents and sales teams</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> Weak landing pages that do not build buyer confidence</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> No remarketing for virtual tour viewers and warm prospects</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> No seller mandate funnel for resale and brokerage growth</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> Poor local SEO presence for project and location-based searches</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> No structured lead nurturing through WhatsApp, SMS or email</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── WHO WE HELP (REAL ESTATE & PROPERTY) ── -->
    <section class="re-brands-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="re-section-title">
                        <span class="title-tag">Who We Help</span>
                        <h2>Real Estate &amp; Property Brands We Scale</h2>
                        <p>Whether you are launching a tower, scaling a brokerage or winning seller mandates, we build buyer and seller pipelines matched to your price band, geography, inventory type and sales team capacity.</p>
                    </div>
                </div>
            </div>
            <div class="re-brands-grid">
                <div class="re-brand-card">
                    <div class="icon">🏗️</div>
                    <h5>Property Developers</h5>
                    <p>Pre-launch registration funnels, launch-week ad bursts, project microsites, local SEO and digital booking queues for residential and mixed-use projects.</p>
                </div>
                <div class="re-brand-card">
                    <div class="icon">🏠</div>
                    <h5>Residential Brokerages</h5>
                    <p>Qualified buyer leads, listing visibility, agent-level CRM routing and location-based campaigns for single-market and regional teams.</p>
                </div>
                <div class="re-brand-card">
                    <div class="icon">✨</div>
                    <h5>Luxury &amp; Premium Agencies</h5>
                    <p>HNW targeting, virtual tour retargeting, premium landing pages and high-ticket property campaigns for luxury apartments, villas and ultra-premium inventory.</p>
                </div>
                <div class="re-brand-card">
                    <div class="icon">🏢</div>
                    <h5>Commercial Real Estate</h5>
                    <p>Office, retail, industrial and warehouse lead generation with decision-maker qualification and long-cycle nurture sequences.</p>
                </div>
                <div class="re-brand-card">
                    <div class="icon">🔑</div>
                    <h5>Rental &amp; Property Management</h5>
                    <p>Tenant acquisition ads, local SEO, property enquiry funnels and fast-response systems for landlords and managed portfolios.</p>
                </div>
                <div class="re-brand-card">
                    <div class="icon">📈</div>
                    <h5>Investment &amp; Advisory Firms</h5>
                    <p>Investor webinars, ROI calculators, property investment funnels and pipeline campaigns for REIT-style, off-plan and high-yield property products.</p>
                </div>
                <div class="re-brand-card">
                    <div class="icon">🏘️</div>
                    <h5>Real Estate Consultants</h5>
                    <p>Lead generation systems, WhatsApp follow-ups, website landing pages and CRM workflows for consultants managing multiple projects and locations.</p>
                </div>
                <div class="re-brand-card">
                    <div class="icon">🌆</div>
                    <h5>Township &amp; Plotting Projects</h5>
                    <p>Location-based campaigns, development-stage creatives, site visit funnels and buyer qualification for plots, townships and land investment projects.</p>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="<?php echo gb_url('contact'); ?>?ref=re-brands-discuss" class="re-btn-solid">Discuss Your Project <i class="bi bi-arrow-right ms-2"></i></a>
            </div>
        </div>
    </section>

    <!-- ── CORE REAL ESTATE STRATEGIES ── -->
    <section class="re-strategy">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="re-section-title">
                        <span class="title-tag">Our System</span>
                        <h2>Real Estate Marketing Services Built for Property Sales</h2>
                        <p>We deploy pre-launch microsites, budget-qualified funnels, hyper-local SEO, virtual tour retargeting, real estate website development and Meta/Google campaigns built to fill CRMs with serious buyers and sellers.</p>
                    </div>
                </div>
            </div>
            
            <div class="re-feature-grid">
                <div class="re-feature-card">
                    <div class="icon-wrap"><i class="bi bi-building-fill"></i></div>
                    <h5>Project Launch Campaigns</h5>
                    <p>Generate high-velocity pre-launch registrations. We design high-converting microsites, produce target buyer ads, create location-based campaigns and organize digital booking queues that build launch momentum.</p>
                </div>
                <div class="re-feature-card">
                    <div class="icon-wrap"><i class="bi bi-funnel-fill"></i></div>
                    <h5>Budget-Qualified Funnels</h5>
                    <p>Acquire qualified leads instead of random enquiries. Our custom intake pathways qualify potential buyers by budget, timeline, location preference, property type and down-payment capability before they reach your CRM.</p>
                </div>
                <div class="re-feature-card">
                    <div class="icon-wrap"><i class="bi bi-search-heart-fill"></i></div>
                    <h5>Hyper-Local SEO &amp; Maps</h5>
                    <p>Become the dominant agency or project brand in your area. We optimize listing terms, neighborhood guides, project pages, Google Business visibility and localized maps to capture buyers searching for nearby properties.</p>
                </div>
                <div class="re-feature-card">
                    <div class="icon-wrap"><i class="bi bi-camera-video-fill"></i></div>
                    <h5>Virtual Tour Retargeting</h5>
                    <p>Keep your listings top-of-mind. We set up behavioral retargeting sequences that serve immersive virtual tour clips, floor plans, amenities and project benefits to prospects who showed high intent on your pages.</p>
                </div>
                <div class="re-feature-card">
                    <div class="icon-wrap"><i class="bi bi-laptop"></i></div>
                    <h5>Real Estate Website Development</h5>
                    <p>As a Real Estate Website Development Company, we create project landing pages, builder websites, property listing pages, virtual tour sections, enquiry forms and mobile-friendly sales pages designed to convert traffic into qualified enquiries.</p>
                </div>
                <div class="re-feature-card">
                    <div class="icon-wrap"><i class="bi bi-chat-left-dots-fill"></i></div>
                    <h5>CRM &amp; WhatsApp Lead Nurturing</h5>
                    <p>We connect lead forms, WhatsApp, CRM systems and follow-up workflows so agents can respond faster, track conversations and nurture warm prospects until they are ready for site visits or bookings.</p>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="<?php echo gb_url('contact'); ?>?ref=re-strategy" class="re-btn-solid">Get Industry Strategy <i class="bi bi-arrow-right ms-2"></i></a>
            </div>
        </div>
    </section>

    <!-- ── GROWTH DELIVERABLES ── -->
    <section class="re-deliverables-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="re-section-title">
                        <span class="title-tag">What You Get</span>
                        <h2>End-to-End Real Estate Growth Deliverables</h2>
                        <p>Every engagement is built around qualified tours and closed deals, not portal spam. Here is what a typical growboostly property marketing growth plan includes.</p>
                    </div>
                </div>
            </div>
            <div class="re-deliverables-grid">
                <div class="re-deliverable-item">
                    <span class="num">1</span>
                    <div>
                        <h5>Buyer &amp; Seller Funnel Architecture</h5>
                        <p>Multi-step qualification, SMS verification and separate paths for purchase intent, rental enquiries, investor interest and listing mandate capture.</p>
                    </div>
                </div>
                <div class="re-deliverable-item">
                    <span class="num">2</span>
                    <div>
                        <h5>Launch &amp; Listing Campaigns</h5>
                        <p>Pre-sale registration ads, project microsites and always-on listing promotion with creative testing by unit type, location and price range.</p>
                    </div>
                </div>
                <div class="re-deliverable-item">
                    <span class="num">3</span>
                    <div>
                        <h5>Local SEO &amp; Maps Dominance</h5>
                        <p>Neighborhood guides, map-pack optimization, project location pages and “property near me” visibility for your agency or builder brand.</p>
                    </div>
                </div>
                <div class="re-deliverable-item">
                    <span class="num">4</span>
                    <div>
                        <h5>CRM Integration &amp; Nurture Automation</h5>
                        <p>Instant lead routing to agents, WhatsApp/SMS follow-up and retargeting for virtual tour viewers, site visitors and warm prospects.</p>
                    </div>
                </div>
                <div class="re-deliverable-item">
                    <span class="num">5</span>
                    <div>
                        <h5>Real Estate Landing Page Development</h5>
                        <p>Conversion-focused pages for individual projects, locations, property categories, luxury inventory, rental listings and investment offers.</p>
                    </div>
                </div>
                <div class="re-deliverable-item">
                    <span class="num">6</span>
                    <div>
                        <h5>Virtual Tour &amp; Creative Retargeting</h5>
                        <p>Retarget users who viewed floor plans, gallery pages, price sections, location pages or virtual tours with personalized ad sequences.</p>
                    </div>
                </div>
                <div class="re-deliverable-item">
                    <span class="num">7</span>
                    <div>
                        <h5>Seller Mandate Acquisition Campaigns</h5>
                        <p>Lead funnels for homeowners, landlords and property owners who want to sell, rent or list their property with your agency.</p>
                    </div>
                </div>
                <div class="re-deliverable-item">
                    <span class="num">8</span>
                    <div>
                        <h5>Performance Reporting &amp; Sales Dashboard</h5>
                        <p>Track lead quality, source-wise enquiries, cost per qualified lead, site visit rate, booking rate and sales team follow-up performance.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="<?php echo gb_url('contact'); ?>?ref=re-deliverables-plan" class="re-btn-solid">Get Free Growth Plan <i class="bi bi-arrow-right ms-2"></i></a>
            </div>
        </div>
    </section>

    <!-- ── WHY CHOOSE SECTION ── -->
    <section class="re-choose-section">
        <div class="container">
            <div class="row g-5">
                <!-- Left Side: Copy and Sticky Header -->
                <div class="col-lg-5">
                    <div class="sticky-top" style="top: 100px; z-index: 1;">
                        <span class="title-tag">Why Choose Us</span>
                        <h2>Why Real Estate Brands Choose Growboostly</h2>
                        <p>Real estate marketing needs more than traffic. It needs qualified enquiries, trust-building pages, fast follow-up, CRM systems and local visibility for project-specific and location-based searches.</p>
                        <p>Growboostly combines Real Estate Marketing Services, Real Estate Lead Generation, website development, paid media, CRM automation and local SEO into one performance-driven system. Instead of only running ads, we build the complete buyer journey from awareness to enquiry, qualification, site visit and sales team handoff.</p>
                        <p>Real estate brands choose us because we understand high-ticket sales cycles, neighborhood-based intent, buyer qualification and agent follow-up. Whether you are launching a new project, promoting premium inventory or scaling a brokerage, our strategy is built to reduce wasted leads and improve sales velocity.</p>
                    </div>
                </div>
                
                <!-- Right Side: Value Cards Grid -->
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-12">
                            <div class="re-value-card single-line">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>Real estate lead funnel planning</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="re-value-card single-line">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>Property landing page and website development</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="re-value-card single-line">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>Google Ads and Meta Ads for real estate</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="re-value-card single-line">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>Local SEO and map visibility</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="re-value-card single-line">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>WhatsApp/SMS lead nurturing</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="re-value-card single-line">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>CRM integration and lead routing</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="re-value-card single-line">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>Virtual tour retargeting</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="re-value-card single-line">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>Seller mandate campaigns</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="re-value-card single-line">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>Performance tracking for lead quality and close rate</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── FAQ SECTION ── -->
    <div class="re-faq">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="re-section-title">
                        <span class="title-tag">FAQ</span>
                        <h2>Real Estate Marketing FAQ</h2>
                        <p>Common questions answered about property marketing, listing funnel systems, lead qualification, CRM integrations and real estate lead generation.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="accordion" id="realEstateFaq">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How do you filter out low-intent or unqualified leads?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#realEstateFaq">
                                <div class="accordion-body">
                                    We use multi-step qualification funnels instead of single-click lead forms. Prospects can be asked to specify purchase timeline, property size, budget range, location preference and phone number verification. This helps reduce spam leads and allows your agents to focus on serious buyers with higher conversion potential.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Do you work directly with CRM platforms like Salesforce, HubSpot or Follow Up Boss?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#realEstateFaq">
                                <div class="accordion-body">
                                    Yes. We can help connect real estate lead forms with CRM platforms like Salesforce, HubSpot, Follow Up Boss or other lead management systems. We can also support WhatsApp/SMS follow-up workflows, agent routing and lead source tracking depending on your current setup and requirements.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How do you target high-net-worth investors or luxury property buyers?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#realEstateFaq">
                                <div class="accordion-body">
                                    For luxury and premium property campaigns, we focus on audience quality, location targeting, interest signals, high-end creative assets, virtual tour retargeting and landing pages that build trust. Campaigns can be segmented by price range, property type, investment intent and premium location interest.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Can you help us get more property seller listing mandates?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#realEstateFaq">
                                <div class="accordion-body">
                                    Yes. We can create seller mandate funnels for homeowners, landlords and property owners who want to sell or rent. These campaigns can include valuation-focused landing pages, local SEO, Google Ads, Meta Ads, WhatsApp follow-up and CRM routing for your listing acquisition team.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Do you run separate campaigns for sales, rentals and commercial inventory?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#realEstateFaq">
                                <div class="accordion-body">
                                    Yes. Sales, rentals and commercial real estate require different messaging, targeting and qualification flows. We create separate campaigns for residential buyers, tenants, investors, commercial decision-makers and property owners so each audience receives a relevant funnel.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    How soon do qualified buyer leads start after campaign launch?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#realEstateFaq">
                                <div class="accordion-body">
                                    Paid campaigns can start generating leads soon after launch, but lead quality improves after tracking, creative testing, audience refinement and qualification filters are optimized. For SEO and local visibility, results usually take longer because rankings depend on content, website authority, maps optimization and competition.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Do you provide Real Estate Lead Generation for builders and brokers?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#realEstateFaq">
                                <div class="accordion-body">
                                    Yes. growboostly provides Real Estate Lead Generation for builders, developers, brokers, real estate agencies and property consultants. Our approach includes paid ads, landing pages, CRM integration, WhatsApp follow-up, local SEO and retargeting campaigns.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    Can you build landing pages or websites for real estate projects?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#realEstateFaq">
                                <div class="accordion-body">
                                    Yes. As a Real Estate Website Development Company, we build project landing pages, property listing pages, builder websites, location pages, floor plan sections, virtual tour pages and enquiry-focused forms designed to generate qualified buyer and seller leads.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    What makes real estate marketing different from general digital marketing?
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#realEstateFaq">
                                <div class="accordion-body">
                                    Real estate has longer buying cycles, higher ticket sizes, location-based intent and more qualification requirements. A good real estate marketing system must filter budget, timeline, location preference, property type and buyer intent before leads reach the sales team.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    Can you help with local SEO for property searches?
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#realEstateFaq">
                                <div class="accordion-body">
                                    Yes. We can help with local SEO for builders, brokers and agencies by creating location pages, neighborhood guides, Google Business optimization, local content, map visibility improvements and project-specific search targeting.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ── LEAD GENERATION FLYWHEEL ── -->
    <section class="re-flywheel-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="re-flywheel-wrap">
                        <div class="re-flywheel-hub">
                            <h4>PROPERTY<br>ACQUISITION</h4>
                            <span>Flywheel</span>
                        </div>
                        <div class="re-orbit">
                            <!-- Node 1 -->
                            <div class="re-orbit-node">
                                <div class="on-circle"><i class="bi bi-binoculars-fill"></i></div>
                                <div class="on-label">Attract</div>
                                <div class="on-sub">Luxury Social &amp; SEO</div>
                            </div>
                            <!-- Node 2 -->
                            <div class="re-orbit-node">
                                <div class="on-circle"><i class="bi bi-sliders"></i></div>
                                <div class="on-label">Qualify</div>
                                <div class="on-sub">Budget &amp; Timeline</div>
                            </div>
                            <!-- Node 3 -->
                            <div class="re-orbit-node">
                                <div class="on-circle"><i class="bi bi-calendar3"></i></div>
                                <div class="on-label">Tour Booking</div>
                                <div class="on-sub">Instant Booking</div>
                            </div>
                            <!-- Node 4 -->
                            <div class="re-orbit-node">
                                <div class="on-circle"><i class="bi bi-chat-left-dots-fill"></i></div>
                                <div class="on-label">Nurture</div>
                                <div class="on-sub">WhatsApp &amp; SMS</div>
                            </div>
                            <!-- Node 5 -->
                            <div class="re-orbit-node">
                                <div class="on-circle"><i class="bi bi-key-fill"></i></div>
                                <div class="on-label">Close</div>
                                <div class="on-sub">CRM Handoff</div>
                            </div>
                            <!-- Node 6 -->
                            <div class="re-orbit-node">
                                <div class="on-circle"><i class="bi bi-people-fill"></i></div>
                                <div class="on-label">Referral</div>
                                <div class="on-sub">Investor Networks</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="ps-lg-4">
                        <span class="re-flywheel-eyebrow mb-3">Self-Sustaining Pipeline</span>
                        <h2>The <span class="re-highlight-compounding">Compounding</span> Brokerage Flywheel</h2>
                        <p>Instead of starting from zero listings and listing views each month, we implement a compounding lead network. By combining local organic visibility, automated nurturing, real estate website development, investor email segments and CRM-based follow-up, we turn single enquiries into long-term listing referrals and buyer relationships.</p>
                        <p>The flywheel starts with targeted campaigns and local search visibility. Qualified buyers enter the funnel, verify their requirements and book calls or tours. Warm prospects are nurtured through WhatsApp, SMS, email and retargeting. After site visits and closures, referrals, reviews and investor lists continue feeding the pipeline.</p>
                        <p>This systematic pipeline accelerates sales velocity, helping property developments and broker listings sell more predictably.</p>
                        
                        <a href="<?php echo gb_url('contact'); ?>?ref=re-lead-gen" class="re-btn-solid mt-3">Start Lead Generation <i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── REAL ESTATE EXPERT BOOKING ── -->
    <section class="re-expert-section">
        <div class="container">
            <div class="re-expert-card">
                <div class="row align-items-center g-4">
                    <div class="col-lg-8">
                        <h2 style="font-weight: 850; color: var(--re-accent); margin-bottom: 14px;">Consult a Property Marketing Expert</h2>
                        <p style="font-size: 16.5px; color: var(--re-text-gray); margin-bottom: 16px; line-height: 1.6;">Launching a new residential tower, luxury development, plotting project or scaling a regional brokerage? Connect directly with a real estate growth architect to map out your pre-sale, listing acquisition or buyer lead campaign.</p>
                        <p style="font-size: 15.5px; color: var(--re-text-gray); margin-bottom: 0; line-height: 1.6;">We review your property type, location, target buyer, budget range, current marketing channels, website quality and CRM process before suggesting the right growth strategy.</p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a href="<?php echo gb_url('contact'); ?>?ref=re-talk-expert" class="re-btn-solid">Talk To Growth Expert <i class="bi bi-chat-square-text-fill ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── OTHER INDUSTRIES ── -->
    <section class="re-industries-section">
        <div class="container">
            <div class="row g-5 align-items-start">
                <div class="col-lg-5">
                    <span class="re-tag" style="background:rgba(255,255,255,0.1);color:#fff;border-color:rgba(255,255,255,0.2);">Explore More</span>
                    <h2>Marketing for Other Industries</h2>
                    <p style="color:rgba(255,255,255,0.72);line-height:1.7;">growboostly also builds growth systems for healthcare, education, eCommerce, SaaS, BPO, finance and local service businesses.</p>
                    <a href="<?php echo gb_url('contact'); ?>?ref=re-other-industry" class="re-btn-solid mt-3">Get Industry Strategy <i class="bi bi-arrow-right ms-2"></i></a>
                </div>
                <div class="col-lg-7">
                    <ul class="re-industries-list">
                        <li><a href="<?php echo gb_url('industries/healthcare-clinics'); ?>"><span class="ind-left"><span class="ind-icon">🏥</span>Healthcare &amp; Clinics</span><i class="bi bi-arrow-right"></i></a></li>
                        <li><a href="<?php echo gb_url('industries/education-coaching'); ?>"><span class="ind-left"><span class="ind-icon">🎓</span>Education &amp; Coaching</span><i class="bi bi-arrow-right"></i></a></li>
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
    <div class="re-final-cta">
        <div class="container">
            <h2>Accelerate Your Property Sales Velocity Today</h2>
            <p>Don't let valuable buyer leads slip to competitors. Connect with our dedicated property marketing team to configure your multi-channel acquisition pipeline, build stronger landing pages and fill your CRM with qualified buyers.</p>
            <span class="cta-phone">
                📞 Call / WhatsApp: <a href="tel:+919919020887">+91-9919020887</a>
            </span>
            <div>
                <a href="<?php echo gb_url('contact'); ?>?ref=re-final-consultation" class="re-cta-btn">Book Free Consultation</a>
                <a href="<?php echo gb_url('contact'); ?>?ref=re-final-growth-plan" class="re-cta-btn outline">Get Free Growth Plan</a>
            </div>
            <div class="mt-3">
                <a href="<?php echo gb_url('contact'); ?>?ref=re-final-project" class="re-cta-btn outline" style="font-size:15px;padding:12px 28px;">Discuss Your Project</a>
                <a href="<?php echo gb_url('contact'); ?>?ref=re-final-expert" class="re-cta-btn outline" style="font-size:15px;padding:12px 28px;">Talk To Growth Expert</a>
            </div>
            <div class="highlight-note">
                ⭐ Average Agency ROI of 340% within the First 5 Months of Setup
            </div>
        </div>
    </div>
    <br>

    <?php include '../footer.php'; ?>

</body>
</html>
