<!doctype html>
<html lang="en">

<head>
<?php include __DIR__ . '/../includes/google-tag.php'; ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Get Finance &amp; Insurance Marketing Services from growboostly. Generate qualified financial and insurance leads with SEO, paid ads, funnels, CRM and automation.">
    <meta name="keywords" content="Finance &amp; Insurance Marketing Services, Financial Lead Generation, Insurance Lead Generation, SEO, paid ads, funnels, CRM, automation, growboostly">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph -->
    <meta property="og:title" content="Finance &amp; Insurance Marketing Services | growboostly">
    <meta property="og:description" content="Get Finance &amp; Insurance Marketing Services from growboostly. Generate qualified financial and insurance leads with SEO, paid ads, funnels, CRM and automation.">
    <meta property="og:url" content="https://www.growboostly.com/industries/finance-insurance">
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
    <title>Finance &amp; Insurance Marketing Services | growboostly</title>
    <link rel="icon" href="../assets/img/fav-icon.svg" type="image/gif" sizes="20x20">

    <style>
        /* ── FINANCE & INSURANCE THEME VARIABLES ── */
        :root {
            --fi-primary: #10b981;      /* Trust Emerald Green */
            --fi-dark: #047857;         /* Deep Wealth Green */
            --fi-light: #ecfdf5;        /* Soft Clean Mint Background */
            --fi-accent: #f59e0b;       /* Golden Amber (Wealth/Security) */
            --fi-border: #a7f3d0;       /* Soft Emerald Border */
            --fi-navy: #0f172a;         /* Deep Charcoal Slate */
            --fi-text-gray: #475569;
        }

        /* ── HERO SECTION ── */
        .fi-modern-hero {
            background: radial-gradient(circle at 10% 20%, rgba(16,185,129,0.06) 0%, rgba(255,255,255,0) 50%), #ffffff;
            padding: 110px 0 90px;
            overflow: hidden;
            position: relative;
            border-bottom: 1px solid var(--fi-border);
        }
        .fi-modern-hero .hero-content-wrap {
            position: relative;
            z-index: 2;
        }
        .fi-modern-hero .breadcrumb-list {
            justify-content: flex-start;
            margin-bottom: 25px;
            padding: 0;
            display: flex;
            align-items: center;
            gap: 8px;
            list-style: none;
        }
        .fi-modern-hero .breadcrumb-list li, .fi-modern-hero .breadcrumb-list li a {
            font-size: 14px;
            font-weight: 500;
            color: var(--fi-text-gray);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .fi-modern-hero .breadcrumb-list li a:hover {
            color: var(--fi-primary);
        }
        .fi-modern-hero .fi-tag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(16,185,129,0.08);
            color: var(--fi-dark);
            padding: 6px 18px;
            border-radius: 30px;
            font-weight: 700;
            font-size: 13px;
            margin-bottom: 24px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border: 1px solid rgba(16,185,129,0.15);
        }
        .fi-modern-hero h1 {
            font-size: clamp(36px, 4.8vw, 36px);
            font-weight: 850;
            color: var(--fi-navy);
            line-height: 1.15;
            margin-bottom: 24px;
            letter-spacing: -1.2px;
        }
        .fi-modern-hero h3 {
            font-size: 22px;
            font-weight: 600;
            color: var(--fi-primary);
            margin-bottom: 24px;
            line-height: 1.4;
        }
        .fi-modern-hero p {
            font-size: 17.5px;
            color: var(--fi-text-gray);
            line-height: 1.65;
            margin-bottom: 36px;
        }
        .fi-modern-hero .hero-actions {
            display: flex;
            gap: 16px;
            align-items: center;
            flex-wrap: wrap;
            margin-bottom: 48px;
        }
        .fi-modern-hero .btn-primary {
            background: linear-gradient(135deg, var(--fi-primary) 0%, var(--fi-dark) 100%);
            color: #fff !important;
            padding: 16px 36px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 16px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(16,185,129,0.2);
            border: none;
        }
        .fi-modern-hero .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 25px rgba(16,185,129,0.3);
            color: #fff !important;
        }
        .fi-modern-hero .btn-secondary {
            background: #fff;
            color: var(--fi-navy);
            padding: 15px 32px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 16px;
            text-decoration: none;
            border: 2px solid var(--fi-border);
            transition: all 0.3s ease;
        }
        .fi-modern-hero .btn-secondary:hover {
            border-color: var(--fi-primary);
            color: var(--fi-primary);
        }
        .fi-modern-hero .hero-stats {
            display: flex;
            gap: 40px;
            border-top: 1px solid #e2e8f0;
            padding-top: 32px;
        }
        .fi-modern-hero .stat-block strong {
            display: block;
            font-size: 28px;
            font-weight: 800;
            color: var(--fi-navy);
            line-height: 1.2;
        }
        .fi-modern-hero .stat-block span {
            font-size: 13px;
            color: var(--fi-text-gray);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 600;
        }

        /* Hero Image & Floating Cards */
        .fi-modern-hero .hero-visual-wrapper {
            position: relative;
            width: 100%;
            height: 100%;
            min-height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .fi-modern-hero .main-img {
            border-radius: 20px;
            box-shadow: 0 30px 60px rgba(15,23,42,0.12);
            max-width: 100%;
            height: auto;
            position: relative;
            z-index: 2;
            border: 1px solid var(--fi-border);
        }
        .fi-modern-hero .floating-card {
            position: absolute;
            background: #fff;
            padding: 20px 24px;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(15,23,42,0.06);
            border: 1px solid var(--fi-border);
            z-index: 3;
            display: flex;
            align-items: center;
            gap: 16px;
            animation: fi-float 6s ease-in-out infinite;
        }
        .fi-modern-hero .floating-card .icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: rgba(16,185,129,0.1);
            color: var(--fi-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }
        .fi-modern-hero .floating-card strong {
            display: block;
            font-size: 22px;
            font-weight: 800;
            color: var(--fi-navy);
            line-height: 1.2;
        }
        .fi-modern-hero .floating-card span {
            display: block;
            font-size: 13px;
            color: var(--fi-text-gray);
            font-weight: 500;
        }
        .fi-modern-hero .fi-fc-1 {
            top: 10%;
            left: -5%;
            animation-delay: 0s;
        }
        .fi-modern-hero .fi-fc-2 {
            bottom: 15%;
            right: -5%;
            animation-delay: 2.5s;
        }
        @keyframes fi-float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        @media (max-width: 991px) {
            .fi-modern-hero .hero-visual-wrapper {
                margin-bottom: 60px;
                min-height: 400px;
            }
            .fi-modern-hero .fi-fc-1 { left: 5%; }
            .fi-modern-hero .fi-fc-2 { right: 5%; }
            .fi-modern-hero .hero-stats { gap: 24px; flex-wrap: wrap; }
        }

        /* ── STATS BAR ── */
        .fi-stats-bar {
            background: linear-gradient(135deg, var(--fi-navy) 0%, #1e293b 100%);
            padding: 50px 0;
            margin-bottom: 80px;
        }
        .fi-stats-bar .stat-item {
            text-align: center;
            padding: 20px 15px;
            border-right: 1px solid rgba(255,255,255,0.12);
        }
        .fi-stats-bar .stat-item:last-child { border-right: none; }
        .fi-stats-bar .stat-number {
            font-size: 44px;
            font-weight: 850;
            color: #fff;
            line-height: 1;
            margin-bottom: 8px;
        }
        .fi-stats-bar .stat-number span { color: var(--fi-primary); }
        .fi-stats-bar .stat-label {
            font-size: 14px;
            color: rgba(255,255,255,0.7);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 500;
        }
        @media (max-width: 767px) {
            .fi-stats-bar .stat-item { border-right: none; border-bottom: 1px solid rgba(255,255,255,0.1); }
            .fi-stats-bar .stat-item:last-child { border-bottom: none; }
        }

        /* ── SECTION TITLE HELPER ── */
        .fi-section-title {
            margin-bottom: 48px;
            text-align: center;
        }
        .fi-section-title h2 { font-size: 34px; font-weight: 800; color: var(--fi-navy); }
        .fi-section-title p {
            font-size: 16px;
            color: var(--fi-text-gray);
            max-width: 720px;
            margin: 14px auto 0;
            text-align: center;
            line-height: 1.75;
        }
        .fi-section-title .title-tag {
            display: inline-block;
            background: var(--fi-light);
            color: var(--fi-dark);
            font-size: 13px;
            font-weight: 700;
            padding: 5px 16px;
            border-radius: 20px;
            margin-bottom: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* ── WHAT IS / EDITORIAL GRID ── */
        .fi-what-section { padding: 90px 0; background: #fff; overflow: hidden; }
        .fi-what-inner { display: grid; grid-template-columns: 1.1fr 0.9fr; gap: 60px; align-items: center; }
        @media (max-width: 1199px) { .fi-what-inner { grid-template-columns: 1fr; } }
        .fi-what-left .eyebrow { display: inline-block; background: var(--fi-light); color: var(--fi-primary); font-size: 12px; font-weight: 800; padding: 6px 16px; border-radius: 30px; text-transform: uppercase; letter-spacing: .8px; margin-bottom: 20px; }
        .fi-what-left h2 { font-size: clamp(30px, 3.8vw, 44px); font-weight: 850; color: var(--fi-navy); line-height: 1.15; margin-bottom: 24px; letter-spacing: -0.8px; }
        .fi-what-left p { font-size: 16.5px; color: var(--fi-text-gray); line-height: 1.75; margin-bottom: 28px; }
        .fi-what-left .fi-highlight { color: var(--fi-primary); font-weight: 700; }
        
        .fi-btn-solid {
            background: linear-gradient(135deg, var(--fi-primary) 0%, var(--fi-dark) 100%);
            color: #fff !important;
            padding: 16px 36px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 16px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(16,185,129,0.15);
            border: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .fi-btn-solid:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 25px rgba(16,185,129,0.25);
            color: #fff !important;
        }

        .fi-struggle-box { 
            background: #f0fdf5; 
            border: 1.5px solid var(--fi-border); 
            border-radius: 16px; 
            padding: 32px; 
            margin-top: 30px; 
            box-shadow: 0 8px 30px rgba(16,185,129, 0.02);
        }
        .fi-struggle-box h4 { color: var(--fi-dark); font-weight: 800; font-size: 20px; margin-bottom: 12px; }
        .fi-struggle-box p { font-size: 15px; margin-bottom: 0; color: var(--fi-dark); }
        .fi-struggle-list { list-style: none; padding: 0; margin: 24px 0 0; }
        .fi-struggle-list li { display: flex; align-items: flex-start; gap: 12px; font-size: 15.5px; font-weight: 700; color: var(--fi-navy); margin-bottom: 16px; }
        .fi-struggle-list li i { color: var(--fi-primary); flex-shrink: 0; font-size: 18px; }

        /* ── STRATEGY SECTION ── */
        .fi-strategy {
            padding: 90px 0;
            background: #fafafa;
            border-top: 1px solid #f1f5f9;
        }
        .fi-feature-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
            margin-top: 35px;
        }
        @media (max-width: 991px) { .fi-feature-grid { grid-template-columns: 1fr; } }
        
        .fi-feature-card {
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
        .fi-feature-card:hover {
            border-color: var(--fi-primary);
            box-shadow: 0 12px 36px rgba(16,185,129,0.08);
            transform: translateY(-4px);
        }
        .fi-feature-card .icon-wrap {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: var(--fi-light);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: var(--fi-primary);
        }
        .fi-feature-card h5 {
            font-size: 17.5px;
            font-weight: 800;
            color: var(--fi-navy);
            margin: 0;
        }
        .fi-feature-card p {
            font-size: 14.5px;
            color: var(--fi-text-gray);
            margin: 0;
            line-height: 1.6;
        }

        /* ── ORBIT FLYWHEEL SECTION ── */
        .fi-flywheel-section {
            padding: 95px 0;
            background: #fff;
        }
        .fi-flywheel-section .fi-flywheel-eyebrow {
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
            background: linear-gradient(135deg, var(--fi-primary) 0%, var(--fi-accent) 100%);
            box-shadow: 0 8px 24px rgba(15, 23, 42, 0.14);
            margin-bottom: 16px;
        }
        .fi-flywheel-section h2 {
            font-size: clamp(28px, 3.2vw, 40px);
            font-weight: 850;
            color: var(--fi-navy);
            letter-spacing: -0.8px;
            margin-bottom: 18px;
            line-height: 1.2;
        }
        .fi-flywheel-section h2 .fi-highlight-compounding {
            background: linear-gradient(135deg, var(--fi-primary) 0%, var(--fi-accent) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .fi-flywheel-wrap { position: relative; max-width: 600px; margin: 0 auto; }
        .fi-flywheel-hub { 
            width: 170px; 
            height: 170px; 
            border-radius: 50%; 
            background: var(--fi-navy); 
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
            box-shadow: 0 0 0 16px rgba(16,185,129,.08), 0 0 0 32px rgba(16,185,129,.04); 
        }
        .fi-flywheel-hub h4 { font-size: 15.5px; font-weight: 900; color: #fff; margin: 0; line-height: 1.3; }
        .fi-flywheel-hub span { font-size: 11px; color: var(--fi-accent); font-weight: 700; text-transform: uppercase; letter-spacing: .6px; }
        
        .fi-orbit { position: relative; width: 540px; height: 540px; margin: 0 auto; }
        @media (max-width: 767px) { .fi-orbit { width: 340px; height: 340px; } }
        .fi-orbit::before { content: ''; position: absolute; inset: 0; border-radius: 50%; border: 2px dashed rgba(16,185,129,.25); }
        .fi-orbit-node { position: absolute; width: 125px; text-align: center; transform: translate(-50%, -50%); }
        @media (max-width: 767px) { .fi-orbit-node { width: 85px; } }
        .fi-orbit-node .on-circle { 
            width: 62px; 
            height: 62px; 
            border-radius: 50%; 
            background: #fff; 
            border: 2px solid var(--fi-border); 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            font-size: 22px; 
            margin: 0 auto 8px; 
            box-shadow: 0 4px 16px rgba(0,0,0,.06); 
            transition: all .3s; 
        }
        @media (max-width: 767px) { .fi-orbit-node .on-circle { width: 44px; height: 44px; font-size: 16px; } }
        .fi-orbit-node:hover .on-circle { background: var(--fi-primary); border-color: var(--fi-primary); box-shadow: 0 0 0 8px rgba(16,185,129,.15); color: #fff; }
        .fi-orbit-node:hover .on-circle i { color: #fff; }
        .fi-orbit-node .on-label { font-size: 11.5px; font-weight: 800; color: var(--fi-navy); text-transform: uppercase; letter-spacing: .6px; line-height: 1.3; }
        .fi-orbit-node .on-sub { font-size: 10px; color: var(--fi-text-gray); margin-top: 3px; }
        
        /* Node Positions */
        .fi-orbit-node:nth-child(1) { top: 0%;   left: 50%; }
        .fi-orbit-node:nth-child(2) { top: 25%;  left: 93.3%; }
        .fi-orbit-node:nth-child(3) { top: 75%;  left: 93.3%; }
        .fi-orbit-node:nth-child(4) { top: 100%; left: 50%; }
        .fi-orbit-node:nth-child(5) { top: 75%;  left: 6.7%; }
        .fi-orbit-node:nth-child(6) { top: 25%;  left: 6.7%; }

        /* ── EXPERT BOOKING ── */
        .fi-expert-section {
            padding: 90px 0;
            background: #fafafa;
            border-top: 1px solid #f1f5f9;
            border-bottom: 1px solid #f1f5f9;
        }
        .fi-expert-card {
            background: #fff;
            border-radius: 20px;
            padding: 45px;
            box-shadow: 0 20px 50px rgba(15,23,42,0.05);
            border: 1px solid var(--fi-border);
        }

        /* ── FAQ ── */
        .fi-faq {
            padding: 90px 0;
        }
        .fi-faq .accordion-item {
            border: 1px solid var(--fi-border);
            border-radius: 12px !important;
            margin-bottom: 16px;
            overflow: hidden;
        }
        .fi-faq .accordion-button {
            font-size: 16.5px;
            font-weight: 700;
            color: var(--fi-navy);
            background: #fff;
            padding: 22px 24px;
        }
        .fi-faq .accordion-button:not(.collapsed) {
            color: var(--fi-dark);
            background: var(--fi-light);
            box-shadow: none;
        }
        .fi-faq .accordion-body {
            font-size: 15px;
            color: var(--fi-text-gray);
            padding: 18px 24px 22px;
            background: #fafdfc;
            line-height: 1.65;
        }

        /* ── FINAL CTA ── */
        .fi-final-cta {
            padding: 95px 0;
            background: linear-gradient(135deg, var(--fi-primary) 0%, var(--fi-dark) 100%);
            text-align: center;
            color: #fff;
            position: relative;
            overflow: hidden;
        }
        .fi-final-cta::before {
            content: '';
            position: absolute;
            top: -20%;
            left: -10%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(255,255,255,0.08) 0%, transparent 60%);
            pointer-events: none;
        }
        .fi-final-cta h2 {
            font-size: 38px;
            font-weight: 850;
            color: #fff;
            margin-bottom: 18px;
            letter-spacing: -0.8px;
        }
        .fi-final-cta p {
            font-size: 18px;
            color: rgba(255,255,255,0.9);
            margin-bottom: 36px;
            max-width: 720px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.7;
        }
        .fi-final-cta .cta-phone {
            font-size: 22px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 30px;
            display: block;
        }
        .fi-final-cta .cta-phone a { color: #fff; text-decoration: none; }
        .fi-final-cta .cta-phone a:hover { text-decoration: underline; }
        
        .fi-cta-btn {
            display: inline-block;
            background: #fff;
            color: var(--fi-dark);
            font-size: 16px;
            font-weight: 700;
            padding: 16px 38px;
            border-radius: 40px;
            text-decoration: none;
            margin: 6px 8px;
            transition: all 0.3s;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .fi-cta-btn:hover {
            background: var(--fi-navy);
            color: #fff;
            transform: translateY(-2px);
        }
        .fi-cta-btn.outline {
            background: transparent;
            color: #fff;
            border: 2px solid rgba(255,255,255,0.7);
            box-shadow: none;
        }
        .fi-cta-btn.outline:hover {
            background: #fff;
            color: var(--fi-dark);
        }
        .fi-final-cta .highlight-note {
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

        .fi-brands-section {
            padding: 90px 0;
            background: var(--fi-light);
            border-top: 1px solid var(--fi-border);
            border-bottom: 1px solid var(--fi-border);
        }
        .fi-brands-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            margin-top: 40px;
        }
        @media (max-width: 991px) { .fi-brands-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 575px) { .fi-brands-grid { grid-template-columns: 1fr; } }
        .fi-brand-card {
            background: #fff;
            border: 1px solid var(--fi-border);
            border-radius: 16px;
            padding: 28px 24px;
            transition: all 0.3s ease;
        }
        .fi-brand-card:hover {
            border-color: var(--fi-primary);
            box-shadow: 0 12px 30px rgba(16,185,129,0.12);
            transform: translateY(-4px);
        }
        .fi-brand-card .icon { font-size: 28px; margin-bottom: 14px; }
        .fi-brand-card h5 { font-size: 17px; font-weight: 800; color: var(--fi-navy); margin-bottom: 10px; }
        .fi-brand-card p { font-size: 14px; color: var(--fi-text-gray); margin: 0; line-height: 1.6; }

        .fi-deliverables-section { padding: 90px 0; background: #fff; }
        .fi-deliverables-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 28px;
            margin-top: 40px;
        }
        @media (max-width: 767px) { .fi-deliverables-grid { grid-template-columns: 1fr; } }
        .fi-deliverable-item {
            display: flex;
            gap: 18px;
            padding: 24px;
            border-radius: 14px;
            border: 1px solid #e2e8f0;
            background: #f0fdf9;
        }
        .fi-deliverable-item .num {
            flex-shrink: 0;
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--fi-primary), var(--fi-dark));
            color: #fff;
            font-weight: 800;
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .fi-deliverable-item h5 { font-size: 16px; font-weight: 800; color: var(--fi-navy); margin-bottom: 8px; }
        .fi-deliverable-item p { font-size: 14px; color: var(--fi-text-gray); margin: 0; line-height: 1.65; }

        .fi-industries-section {
            padding: 85px 0;
            background: var(--fi-navy);
            color: #fff;
        }
        .fi-industries-section h2 { color: #fff; font-weight: 850; margin-bottom: 12px; }
        .fi-industries-list {
            list-style: none;
            padding: 0;
            margin: 0;
            border-top: 1px solid rgba(255,255,255,0.12);
        }
        .fi-industries-list li a {
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
        .fi-industries-list li a:hover { color: var(--fi-primary); padding-left: 10px; }
        .fi-industries-list .ind-left { display: flex; align-items: center; gap: 14px; }
        .fi-industries-list .ind-icon { font-size: 22px; }

        /* ── WHY CHOOSE SECTION ── */
        .fi-choose-section {
            padding: 95px 0;
            background: #fafafa;
            border-top: 1px solid var(--fi-border);
            border-bottom: 1px solid var(--fi-border);
        }
        .fi-choose-section h2 { font-size: 34px; font-weight: 800; color: var(--fi-navy); margin-bottom: 24px; }
        .fi-choose-section p { font-size: 16px; color: var(--fi-text-gray); line-height: 1.75; }
        .fi-choose-section .title-tag {
            display: inline-block;
            background: var(--fi-light);
            color: var(--fi-dark);
            font-size: 13px;
            font-weight: 700;
            padding: 5px 16px;
            border-radius: 20px;
            margin-bottom: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .fi-value-card {
            background: #fff;
            border: 1px solid var(--fi-border);
            border-radius: 16px;
            padding: 24px;
            display: flex;
            gap: 20px;
            align-items: flex-start;
            transition: all 0.3s ease;
            height: 100%;
        }
        .fi-value-card:hover {
            border-color: var(--fi-primary);
            box-shadow: 0 12px 30px rgba(16,185,129,0.08);
            transform: translateY(-3px);
        }
        .fi-value-card .icon-box {
            width: 44px;
            height: 44px;
            border-radius: 10px;
            background: rgba(16,185,129,0.1);
            color: var(--fi-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            flex-shrink: 0;
        }
        .fi-value-card h5 {
            font-size: 16px;
            font-weight: 800;
            color: var(--fi-navy);
            margin-bottom: 0;
            line-height: 1.4;
        }
        .fi-value-card.single-line {
            align-items: center;
        }
        /* Hide Flywheel on small screens to improve mobile layout */
        @media (max-width: 767px) {
            .fi-flywheel-section, .fi-flywheel-wrap, .fi-orbit { display: none !important; }
        }
    </style>
</head>

<body class="tt-magic-cursor digital-agency">

    <?php include '../header.php'; ?>

    <!-- ── FINANCE & INSURANCE HERO SECTION ── -->
    <div class="fi-modern-hero mb-0">
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
                            <li>Finance &amp; Insurance</li>
                        </div>
                        <span class="fi-tag mb-3">Finance &amp; Insurance Marketing Services for Qualified Client Growth</span>
                        <h1>High-Trust Financial Lead Generation &amp; Insurance Lead Generation</h1>
                        <h3>Scale Your Lenders &amp; Advisor Pipelines.</h3>
                        <p>At growboostly, we are providing Finance &amp; Insurance Marketing Services for wealth managers, insurance brokerages, mortgage companies, NBFC brands, fintech platforms, financial advisory firms and insurance agencies that want qualified prospects, better appointment bookings and stronger client acquisition systems. We build B2B and consumer acquisition systems using secure conversion-focused funnels, targeted search ads, local visibility programs, CRM-ready lead forms and automated follow-up sequences.</p>
                        <p>Our approach helps financial brands attract motivated prospects, reduce dependency on shared databases and build trust-based client pipelines that support long-term growth.</p>
                        <div class="hero-actions">
                            <a href="<?php echo gb_url('contact'); ?>?ref=finance-consultation" class="btn-primary">Book Free Consultation</a>
                            <a href="<?php echo gb_url('contact'); ?>?ref=finance-growth-plan" class="btn-secondary">Get Free Growth Plan</a>
                        </div>
                        <div class="hero-stats">
                            <div class="stat-block">
                                <strong>5.4x</strong>
                                <span>Average ROI</span>
                            </div>
                            <div class="stat-block">
                                <strong>100%</strong>
                                <span>Compliant Systems</span>
                            </div>
                            <div class="stat-block">
                                <strong>+240%</strong>
                                <span>Inquiry Growth</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right Column: Visual Image -->
                <div class="col-lg-6">
                    <div class="hero-visual-wrapper">
                        <div class="floating-card fi-fc-1">
                            <div class="icon"><i class="bi bi-shield-fill-check"></i></div>
                            <div>
                                <strong>98%</strong>
                                <span>Lead Accuracy</span>
                            </div>
                        </div>
                        <img src="../assets/img/services/finance-insurance-hero.png" alt="Finance and Insurance Advisory Growth Dashboard - Finance and Insurance Marketing Services with Financial Lead Generation and Insurance Lead Generation by growboostly" class="main-img">
                        <div class="floating-card fi-fc-2">
                            <div class="icon"><i class="bi bi-cash-coin"></i></div>
                            <div>
                                <strong>+3.2x</strong>
                                <span>LTV Velocity</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ── STATS BAR ── -->
    <div class="fi-stats-bar">
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
                        <div class="stat-number"><span>30</span>%</div>
                        <div class="stat-label">Reduction in CPA</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number"><span>240</span>%</div>
                        <div class="stat-label">Advisor Pipeline Growth</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <div class="stat-number"><span>100</span>%</div>
                        <div class="stat-label">Regulatory Compliant Funnels</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ── THE STRUGGLE / WHY IT MATTERS ── -->
    <section class="fi-what-section">
        <div class="container">
            <div class="fi-what-inner">
                <div class="fi-what-left">
                    <span class="eyebrow">The Challenge</span>
                    <h2>Are Wasted Ad Clicks and Cold Lists Stalling Your Practice?</h2>
                    <p>Too many finance and insurance agencies burn valuable capital buying stale, shared database leads or running unoptimized social ads. Low trust scores, complicated form pages and slow sales follow-up lead to high rejection rates, weak appointment show-ups and empty advisor calendars.</p>
                    <p>Finance and insurance customers need trust before they share details or book a consultation. If your website is unclear, landing pages look generic, forms feel unsafe or follow-up is delayed, even interested prospects may drop off. This is why financial brands need a structured client acquisition system instead of random campaigns.</p>
                    <p>At growboostly, we design high-trust client networks. By combining secure multi-step questionnaires, local search visibility, finance landing pages, insurance quote funnels and automated reminder sequences, we help advisors connect with motivated clients who are actively looking for solutions.</p>
                    
                    <a href="<?php echo gb_url('contact'); ?>?ref=finance-project-discussion" class="fi-btn-solid">Discuss Your Project <i class="bi bi-arrow-right ms-2"></i></a>
                </div>
                
                <div>
                    <div class="fi-struggle-box">
                        <h4>Struggling with these financial marketing limits?</h4>
                        <p>We resolve the core customer acquisition issues that hold back advisor networks:</p>
                        <ul class="fi-struggle-list">
                            <li><i class="bi bi-exclamation-circle-fill"></i> Unqualified leads that waste advisor phone hours</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> Low trust in local searches against national brands</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> Compliance boundaries holding back online marketing</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> Shared leads selling to multiple local competitors</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> Poor landing pages with low enquiry conversion</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> No clear system for Financial Lead Generation</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> Weak follow-up for policy renewals and loan enquiries</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> Low appointment show-up rates after form submissions</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> No CRM visibility from ad click to client consultation</li>
                            <li><i class="bi bi-exclamation-circle-fill"></i> Difficulty scaling Insurance Lead Generation without shared databases</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── WHO WE HELP (FINANCE & INSURANCE) ── -->
    <section class="fi-brands-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="fi-section-title">
                        <span class="title-tag">Who We Help</span>
                        <h2>Finance &amp; Insurance Firms We Grow</h2>
                        <p>Whether you run a local advisory desk, national brokerage or digital lending brand, we build compliant acquisition systems matched to your ticket size, sales cycle, advisor capacity and customer trust journey.</p>
                    </div>
                </div>
            </div>
            <div class="fi-brands-grid">
                <div class="fi-brand-card">
                    <div class="icon">🏦</div>
                    <h5>Wealth &amp; Investment Advisors</h5>
                    <p>HNW targeting, seminar funnels, portfolio review campaigns and CRM-ready lead routing for RIAs, wealth teams and investment consultants.</p>
                </div>
                <div class="fi-brand-card">
                    <div class="icon">🛡️</div>
                    <h5>Insurance Agencies</h5>
                    <p>Life, health, motor and general insurance quote funnels with pre-qualification questions, policy-type segmentation and renewal follow-up systems.</p>
                </div>
                <div class="fi-brand-card">
                    <div class="icon">🏠</div>
                    <h5>Mortgage &amp; Lending</h5>
                    <p>Rate-comparison landing pages, refinance recall flows, home loan campaigns and Google search campaigns for mortgage specialists and lending teams.</p>
                </div>
                <div class="fi-brand-card">
                    <div class="icon">📊</div>
                    <h5>Tax &amp; Accounting Firms</h5>
                    <p>Seasonal demand capture, local SEO, consultation booking and reminder systems for CA practices, tax consultants and accounting firms.</p>
                </div>
                <div class="fi-brand-card">
                    <div class="icon">💳</div>
                    <h5>Fintech &amp; NBFC Brands</h5>
                    <p>Performance ads, app-install campaigns, multi-step application funnels and fraud-aware tracking for fintech and NBFC customer acquisition.</p>
                </div>
                <div class="fi-brand-card">
                    <div class="icon">🤝</div>
                    <h5>B2B Financial Services</h5>
                    <p>LinkedIn-led outbound support, whitepaper funnels, demo-request pipelines and decision-maker campaigns for B2B finance products.</p>
                </div>
                <div class="fi-brand-card">
                    <div class="icon">🏢</div>
                    <h5>Loan Consultants &amp; DSAs</h5>
                    <p>Personal loan, business loan, home loan and LAP enquiry funnels with document checklist messaging and eligibility-based qualification.</p>
                </div>
                <div class="fi-brand-card">
                    <div class="icon">📈</div>
                    <h5>Insurance Brokers &amp; Advisors</h5>
                    <p>Lead funnels for policy comparison, renewal reminders, claim support enquiries and customer education campaigns.</p>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="<?php echo gb_url('contact'); ?>?ref=finance-brands-discuss" class="fi-btn-solid">Discuss Your Project <i class="bi bi-arrow-right ms-2"></i></a>
            </div>
        </div>
    </section>

    <!-- ── CORE FINANCE STRATEGIES ── -->
    <section class="fi-strategy">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="fi-section-title">
                        <span class="title-tag">Our Services</span>
                        <h2>Finance &amp; Insurance Marketing Services Built for Trust</h2>
                        <p>We deploy specialized Google and Meta campaigns, secure multi-step application funnels, local advisor SEO, insurance quote funnels and automated client recall sequences built for regulated financial marketing.</p>
                    </div>
                </div>
            </div>
            
            <div class="fi-feature-grid">
                <div class="fi-feature-card">
                    <div class="icon-wrap"><i class="bi bi-patch-check-fill"></i></div>
                    <h5>Qualified Application Funnels</h5>
                    <p>Filter out low-intent enquiries. We build multi-step questionnaires that qualify prospects by credit tier, asset size, policy requirement, income range, funding timeline or consultation goal before they book a call.</p>
                </div>
                <div class="fi-feature-card">
                    <div class="icon-wrap"><i class="bi bi-shield-fill-check"></i></div>
                    <h5>Regulatory-Aware Funnel Planning</h5>
                    <p>Safeguard user trust. We design intake pathways with clear disclaimers, structured form fields, secure enquiry flow and responsible tracking so your campaigns feel professional and reliable.</p>
                </div>
                <div class="fi-feature-card">
                    <div class="icon-wrap"><i class="bi bi-search-heart-fill"></i></div>
                    <h5>Hyper-Local Advisor SEO</h5>
                    <p>Become the dominant office in your area. We optimize advisor maps, location-specific pages, local keywords and Google Business visibility to capture finance and insurance search traffic in your service territory.</p>
                </div>
                <div class="fi-feature-card">
                    <div class="icon-wrap"><i class="bi bi-envelope-check-fill"></i></div>
                    <h5>Automated Client Recalls</h5>
                    <p>Maximize lifetime client value. We configure automated follow-up sequences for mortgage refinancing updates, insurance renewals, portfolio reviews, tax filing reminders and annual consultation flows.</p>
                </div>
                <div class="fi-feature-card">
                    <div class="icon-wrap"><i class="bi bi-graph-up-arrow"></i></div>
                    <h5>Financial Lead Generation Campaigns</h5>
                    <p>We create Google Ads, Meta campaigns, landing pages and retargeting flows for loan enquiries, wealth consultations, insurance quotes, tax appointments and fintech applications.</p>
                </div>
                <div class="fi-feature-card">
                    <div class="icon-wrap"><i class="bi bi-file-earmark-check-fill"></i></div>
                    <h5>Insurance Lead Generation Funnels</h5>
                    <p>We build policy-specific funnels for health insurance, life insurance, motor insurance, general insurance, business insurance and renewal campaigns with pre-qualified enquiry capture.</p>
                </div>
                <div class="fi-feature-card">
                    <div class="icon-wrap"><i class="bi bi-window-sidebar"></i></div>
                    <h5>Finance Website &amp; Landing Page Development</h5>
                    <p>We build trust-focused landing pages, advisor websites, loan pages, insurance quote pages and financial consultation pages that explain your offer clearly and convert visitors into enquiries.</p>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="<?php echo gb_url('contact'); ?>?ref=finance-strategy" class="fi-btn-solid">Get Industry Strategy <i class="bi bi-arrow-right ms-2"></i></a>
            </div>
        </div>
    </section>

    <!-- ── GROWTH DELIVERABLES ── -->
    <section class="fi-deliverables-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="fi-section-title">
                        <span class="title-tag">What You Get</span>
                        <h2>End-to-End Finance Growth Deliverables</h2>
                        <p>Every engagement is built around qualified consultations and pipeline velocity, not vanity clicks. Here is what a typical growboostly finance and insurance growth plan includes.</p>
                    </div>
                </div>
            </div>
            <div class="fi-deliverables-grid">
                <div class="fi-deliverable-item">
                    <span class="num">1</span>
                    <div>
                        <h5>Compliance &amp; Funnel Audit</h5>
                        <p>Review of disclaimers, form fields, data handling, tracking setup and conversion path before campaigns go live.</p>
                    </div>
                </div>
                <div class="fi-deliverable-item">
                    <span class="num">2</span>
                    <div>
                        <h5>Qualified Lead Capture System</h5>
                        <p>Multi-step questionnaires, calendar booking and CRM routing so advisors only speak with pre-qualified prospects.</p>
                    </div>
                </div>
                <div class="fi-deliverable-item">
                    <span class="num">3</span>
                    <div>
                        <h5>Paid Search &amp; Local Visibility</h5>
                        <p>Google Ads, local search campaigns, map-pack SEO and location-focused landing pages to capture high-intent finance keywords in your territory.</p>
                    </div>
                </div>
                <div class="fi-deliverable-item">
                    <span class="num">4</span>
                    <div>
                        <h5>Follow-Up &amp; Recall Automation</h5>
                        <p>Email, WhatsApp and SMS nurture for no-shows, insurance renewals, refinance windows and annual portfolio review reminders.</p>
                    </div>
                </div>
                <div class="fi-deliverable-item">
                    <span class="num">5</span>
                    <div>
                        <h5>Insurance Quote Funnel Setup</h5>
                        <p>Policy-type segmentation, need-based questions, renewal timelines and quote request forms for better insurance enquiry quality.</p>
                    </div>
                </div>
                <div class="fi-deliverable-item">
                    <span class="num">6</span>
                    <div>
                        <h5>Finance Landing Page Development</h5>
                        <p>Trust-focused landing pages for wealth management, loans, tax services, NBFC offers, fintech products and advisory consultations.</p>
                    </div>
                </div>
                <div class="fi-deliverable-item">
                    <span class="num">7</span>
                    <div>
                        <h5>CRM &amp; Advisor Routing</h5>
                        <p>Lead source tracking, advisor assignment, follow-up status and consultation reporting inside your preferred CRM or spreadsheet workflow.</p>
                    </div>
                </div>
                <div class="fi-deliverable-item">
                    <span class="num">8</span>
                    <div>
                        <h5>Retargeting &amp; Trust Building</h5>
                        <p>Remarketing campaigns for website visitors, calculator users, quote page viewers and warm prospects who need more proof before booking.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="<?php echo gb_url('contact'); ?>?ref=finance-deliverables-plan" class="fi-btn-solid">Get Free Growth Plan <i class="bi bi-arrow-right ms-2"></i></a>
            </div>
        </div>
    </section>

    <!-- ── WHY CHOOSE SECTION ── -->
    <section class="fi-choose-section">
        <div class="container">
            <div class="row g-5">
                <!-- Left Side: Copy and Sticky Header -->
                <div class="col-lg-5">
                    <div class="sticky-top" style="top: 100px; z-index: 1;">
                        <span class="title-tag">Why Choose Us</span>
                        <h2>Why Finance &amp; Insurance Brands Choose growboostly</h2>
                        <p>Finance and insurance marketing requires trust, clarity and careful communication. Customers compare multiple providers before submitting details, so your landing pages, ads, reviews, forms and follow-up process must feel professional.</p>
                        <p>Growboostly combines <a href="<?php echo gb_url('services/b2b-lead-generation'); ?>">Finance &amp; Insurance Marketing Services</a>, <a href="<?php echo gb_url('services/b2b-lead-generation'); ?>">Financial Lead Generation</a>, <a href="<?php echo gb_url('services/b2b-lead-generation'); ?>">Insurance Lead Generation</a>, <a href="<?php echo gb_url('services/seo'); ?>">local SEO</a>, <a href="<?php echo gb_url('services/google-ads'); ?>">paid ads</a>, <a href="<?php echo gb_url('services/crm-integration'); ?>">CRM automation</a> and <a href="<?php echo gb_url('services/landing-page-development'); ?>">landing page development</a> into one growth system. Instead of only generating raw leads, we focus on qualified enquiries, appointment bookings and client acquisition.</p>
                        <p>Our process is designed for businesses that want better lead quality, lower rejection rates, clearer tracking and stronger follow-up. Whether you are a wealth advisor, insurance broker, lending business, NBFC, tax consultant or fintech company, we help create a marketing system that supports long-term client growth.</p>
                    </div>
                </div>
                
                <!-- Right Side: Value Cards Grid -->
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-12">
                            <div class="fi-value-card single-line">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>Financial Lead Generation campaigns</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="fi-value-card single-line">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>Insurance Lead Generation funnels</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="fi-value-card single-line">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>Loan and mortgage enquiry pages</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="fi-value-card single-line">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>Advisor consultation booking systems</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="fi-value-card single-line">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>Google Ads and Meta Ads for finance brands</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="fi-value-card single-line">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>Local SEO for finance and insurance companies</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="fi-value-card single-line">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>CRM-ready enquiry routing</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="fi-value-card single-line">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>Renewal and recall automation</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="fi-value-card single-line">
                                <div class="icon-box"><i class="bi bi-check2-circle"></i></div>
                                <div>
                                    <h5>Landing pages designed for trust and conversion</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── FAQ SECTION ── -->
    <div class="fi-faq">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="fi-section-title">
                        <span class="title-tag">FAQ</span>
                        <h2>Finance &amp; Insurance Marketing FAQ</h2>
                        <p>Common questions answered about lead generation, regulatory-aware marketing, advisor booking funnels and CRM integrations.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="accordion" id="financeFaq">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How do you target high-net-worth wealth management clients?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#financeFaq">
                                <div class="accordion-body">
                                    We target high-net-worth prospects using location signals, income-related audience indicators, professional interests, business ownership signals and educational content such as tax planning guides, portfolio review offers and investment consultation pages. The funnel is designed to attract people who are more likely to need wealth advisory support.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Do you work with compliance teams during copy and design reviews?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#financeFaq">
                                <div class="accordion-body">
                                    Yes. We can work with your internal compliance, legal or approval team before campaigns go live. This includes reviewing disclaimers, claim language, form fields, landing page copy and tracking setup so your finance or insurance marketing feels responsible and aligned with your internal policies.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What is the average show-up rate on advisor consultation bookings?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#financeFaq">
                                <div class="accordion-body">
                                    Show-up rate depends on lead quality, offer clarity, reminder flow and advisor follow-up speed. We improve show-ups by using qualified forms, confirmation messages, WhatsApp/SMS reminders, calendar invites and pre-call qualification. This helps reduce wasted sales team time and keeps serious decision-makers engaged before the consultation.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Do you integrate with financial advisory CRM tools?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#financeFaq">
                                <div class="accordion-body">
                                    Yes. We can support CRM integration with platforms like HubSpot, Salesforce, Zoho or other lead management systems. The goal is to route enquiries to the right advisor, track lead source, follow-up status, consultation outcomes and pipeline value.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Can you generate exclusive leads instead of shared databases?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#financeFaq">
                                <div class="accordion-body">
                                    Yes. Our campaigns are built to generate direct, exclusive enquiries for your business instead of reselling shared database leads. This helps improve trust, reduces competition for the same prospect and gives your advisor team a better chance of conversion.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    How soon can we expect qualified finance enquiries after launch?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#financeFaq">
                                <div class="accordion-body">
                                    Paid campaigns can begin generating enquiries after launch, but qualified lead quality improves after testing keywords, audiences, landing pages and form questions. Local SEO and organic visibility take longer because rankings depend on competition, authority, content and review signals.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Do you provide Insurance Lead Generation for agencies and brokers?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#financeFaq">
                                <div class="accordion-body">
                                    Yes. growboostly provides Insurance Lead Generation for life insurance, health insurance, motor insurance, business insurance and general insurance advisors. We create policy-specific funnels, quote forms, landing pages, retargeting and renewal follow-up systems.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    What is included in Financial Lead Generation?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#financeFaq">
                                <div class="accordion-body">
                                    Financial Lead Generation can include Google Ads, Meta Ads, landing pages, eligibility forms, consultation booking flows, CRM routing, local SEO, retargeting and automated follow-up. The exact setup depends on your service type, target audience and compliance requirements.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    Can you help with finance and insurance website development?
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#financeFaq">
                                <div class="accordion-body">
                                    Yes. We can help create advisor websites, loan landing pages, insurance quote pages, fintech product pages and consultation booking funnels. The focus is on trust, clear information, fast loading and lead conversion.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    What information do you need before starting campaigns?
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#financeFaq">
                                <div class="accordion-body">
                                    We need your service type, target customer, location, compliance requirements, average client value, current website or landing page, CRM setup, budget and lead quality expectations. This helps us plan a suitable finance or insurance lead generation strategy.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ── LEAD GENERATION FLYWHEEL ── -->
    <section class="fi-flywheel-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="fi-flywheel-wrap">
                        <div class="fi-flywheel-hub">
                            <h4>FINANCIAL<br>ACQUISITION</h4>
                            <span>Flywheel</span>
                        </div>
                        <div class="fi-orbit">
                            <!-- Node 1 -->
                            <div class="fi-orbit-node">
                                <div class="on-circle"><i class="bi bi-search"></i></div>
                                <div class="on-label">Attract</div>
                                <div class="on-sub">Google Search &amp; Ads</div>
                            </div>
                            <!-- Node 2 -->
                            <div class="fi-orbit-node">
                                <div class="on-circle"><i class="bi bi-sliders"></i></div>
                                <div class="on-label">Qualify</div>
                                <div class="on-sub">Compliant Quiz Gate</div>
                            </div>
                            <!-- Node 3 -->
                            <div class="fi-orbit-node">
                                <div class="on-circle"><i class="bi bi-calendar3"></i></div>
                                <div class="on-label">Schedule</div>
                                <div class="on-sub">Booking Intake</div>
                            </div>
                            <!-- Node 4 -->
                            <div class="fi-orbit-node">
                                <div class="on-circle"><i class="bi bi-envelope-check-fill"></i></div>
                                <div class="on-label">Educate</div>
                                <div class="on-sub">SMS &amp; Email Proof</div>
                            </div>
                            <!-- Node 5 -->
                            <div class="fi-orbit-node">
                                <div class="on-circle"><i class="bi bi-file-earmark-check-fill"></i></div>
                                <div class="on-label">Close</div>
                                <div class="on-sub">Advisor Handoff</div>
                            </div>
                            <!-- Node 6 -->
                            <div class="fi-orbit-node">
                                <div class="on-circle"><i class="bi bi-arrow-repeat"></i></div>
                                <div class="on-label">Renew</div>
                                <div class="on-sub">Annual Review Flows<br>Self-Sustaining Growth</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="ps-lg-4">
                        <span class="fi-flywheel-eyebrow mb-3">Self-Sustaining Growth</span>
                        <h2>The Financial Scaling Flywheel</h2>
                        <p>Instead of relying on single ad campaigns that dry up when budgets change, we deploy a compounding financial acquisition flywheel. By combining local organic search authority, secure lead funnels, automated review loops, CRM tracking and client recall segments, your office builds self-funding B2C and B2B pipelines.</p>
                        <p>The flywheel starts with high-intent traffic from Google Search, local SEO, referrals and paid ads. Prospects enter through a qualified finance or insurance funnel, book a consultation and receive automated reminders. After conversion, renewal flows, review requests and annual check-ins create more repeat business and referrals.</p>
                        <p>This systematic structure keeps customer acquisition costs lower and helps your advisor calendars grow predictably.</p>
                        
                        <a href="<?php echo gb_url('contact'); ?>?ref=finance-lead-gen" class="fi-btn-solid mt-3">Start Lead Generation <i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── FINANCE EXPERT BOOKING ── -->
    <section class="fi-expert-section">
        <div class="container">
            <div class="fi-expert-card">
                <div class="row align-items-center g-4">
                    <div class="col-lg-8">
                        <h2 style="font-weight: 850; color: var(--fi-navy); margin-bottom: 14px;">Consult a Financial Marketing Specialist</h2>
                        <p style="font-size: 16.5px; color: var(--fi-text-gray); margin: 0; line-height: 1.6;">Expanding your mortgage brokerage, wealth team, insurance agency or fintech product? Connect directly with a financial marketing expert to audit your search rankings, ad attribution, landing page security, lead quality and follow-up setup.</p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a href="<?php echo gb_url('contact'); ?>?ref=finance-talk-expert" class="fi-btn-solid">Talk To Growth Expert <i class="bi bi-chat-square-text-fill ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── OTHER INDUSTRIES ── -->
    <section class="fi-industries-section">
        <div class="container">
            <div class="row g-5 align-items-start">
                <div class="col-lg-5">
                    <span class="fi-tag" style="background:rgba(255,255,255,0.1);color:#fff;border-color:rgba(255,255,255,0.2);">Explore More</span>
                    <h2>Marketing for Other Industries</h2>
                    <p style="color:rgba(255,255,255,0.72);line-height:1.7;">growboostly also builds growth systems for healthcare, real estate, education, eCommerce, SaaS, BPO and local service businesses.</p>
                    <a href="<?php echo gb_url('contact'); ?>?ref=finance-other-industry" class="fi-btn-solid mt-3">Get Industry Strategy <i class="bi bi-arrow-right ms-2"></i></a>
                </div>
                <div class="col-lg-7">
                    <ul class="fi-industries-list">
                        <li><a href="<?php echo gb_url('industries/healthcare-clinics'); ?>"><span class="ind-left"><span class="ind-icon">🏥</span>Healthcare &amp; Clinics</span><i class="bi bi-arrow-right"></i></a></li>
                        <li><a href="<?php echo gb_url('industries/real-estate'); ?>"><span class="ind-left"><span class="ind-icon">🏠</span>Real Estate &amp; Property</span><i class="bi bi-arrow-right"></i></a></li>
                        <li><a href="<?php echo gb_url('industries/education-coaching'); ?>"><span class="ind-left"><span class="ind-icon">🎓</span>Education &amp; Coaching</span><i class="bi bi-arrow-right"></i></a></li>
                        <li><a href="<?php echo gb_url('industries/ecommerce-d2c'); ?>"><span class="ind-left"><span class="ind-icon">🛒</span>eCommerce &amp; D2C Brands</span><i class="bi bi-arrow-right"></i></a></li>
                        <li><a href="<?php echo gb_url('industries/local-businesses'); ?>"><span class="ind-left"><span class="ind-icon">🏪</span>Local Businesses</span><i class="bi bi-arrow-right"></i></a></li>
                        <li><a href="<?php echo gb_url('industries/saas-it-technology'); ?>"><span class="ind-left"><span class="ind-icon">💻</span>SaaS &amp; IT Companies</span><i class="bi bi-arrow-right"></i></a></li>
                        <li><a href="<?php echo gb_url('industries/bpo-service-companies'); ?>"><span class="ind-left"><span class="ind-icon">📞</span>BPO &amp; Service Companies</span><i class="bi bi-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ── FINAL CONVERSION CTA BANNER ── -->
    <div class="fi-final-cta">
        <div class="container">
            <h2>Scale Your Financial Advisor Pipelines Today</h2>
            <p>Don't let cold databases hold back your firm's growth. Partner with a dedicated marketing team that understands finance funnels, insurance enquiries, trust-based messaging, client acquisition systems and local ranking architecture.</p>
            <span class="cta-phone">
                📞 Call / WhatsApp: <a href="tel:+919919020887">+91-9919020887</a>
            </span>
            <div>
                <a href="<?php echo gb_url('contact'); ?>?ref=finance-final-consultation" class="fi-cta-btn">Book Free Consultation</a>
                <a href="<?php echo gb_url('contact'); ?>?ref=finance-final-growth-plan" class="fi-cta-btn outline">Get Free Growth Plan</a>
            </div>
            <div class="mt-3">
                <a href="<?php echo gb_url('contact'); ?>?ref=finance-final-project" class="fi-cta-btn outline" style="font-size:15px;padding:12px 28px;">Discuss Your Project</a>
                <a href="<?php echo gb_url('contact'); ?>?ref=finance-final-expert" class="fi-cta-btn outline" style="font-size:15px;padding:12px 28px;">Talk To Growth Expert</a>
            </div>
            <div class="highlight-note">
                ⭐ Average Advisor Office Client Volume Increases by 150% Within the First 6 Months of Setup
            </div>
        </div>
    </div>
    <br>

    <?php include '../footer.php'; ?>

</body>
</html>
