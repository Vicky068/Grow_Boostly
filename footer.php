<?php
if (!function_exists('gb_url')) {
    require_once __DIR__ . '/includes/url_helper.php';
}
?>
<!-- home1 Footer Section Start --> 
    <style>
        .gb-footer-new {
            --gb-footer-accent: #5333ed;
            --gb-footer-accent-rgb: 83, 51, 237;
            background: #f8fafc;
            color: #475569;
            font-family: var(--font-dmsans), sans-serif;
            padding: 80px 90px 20px 90px;
            border-top: 1px solid #e2e8f0;
            font-size: 14.5px;
            line-height: 1.6;
        }
        @media (max-width: 1799px) {
            .gb-footer-new {
                padding: 80px 60px 20px 60px;
            }
        }
        @media (max-width: 1699px) {
            .gb-footer-new {
                padding: 80px 40px 20px 40px;
            }
        }
        @media (min-width: 1400px) and (max-width: 1599px) {
            .gb-footer-new {
                padding: 80px 20px 20px 20px;
            }
        }
        @media (max-width: 1399px) {
            .gb-footer-new {
                padding: 80px 10px 20px 10px;
            }
        }
        @media (min-width: 992px) and (max-width: 1199px) {
            .gb-footer-new {
                padding: 80px 0px 20px 0px;
            }
        }
        @media (max-width: 991px) {
            .gb-footer-new {
                padding: 80px 20px 20px 20px;
            }
        }
        @media (max-width: 767px) {
            .gb-footer-new {
                padding: 80px 10px 20px 10px;
            }
        }
        @media (max-width: 576px) {
            .gb-footer-new {
                padding: 60px 0px 20px 0px;
            }
        }
        .gb-footer-new a {
            color: #475569;
            text-decoration: none;
            transition: all 0.2s ease;
        }
        .gb-footer-new a:hover {
            color: var(--gb-footer-accent);
        }
        .gb-footer-new h3 {
            font-family: var(--font-suse), sans-serif;
            font-size: 16px;
            font-weight: 800;
            color: #0f172a;
            margin: 0 0 24px 0;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            position: relative;
            padding-bottom: 8px;
        }
        .gb-footer-new h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 24px;
            height: 2.5px;
            background: var(--gb-footer-accent);
            border-radius: 99px;
        }
        .gb-footer-desc {
            color: #64748b;
            font-size: 14px;
            line-height: 1.65;
            margin-bottom: 24px;
            max-width: 320px;
        }
        
        /* Send Us Mail block */
        .gb-footer-mail-card {
            background: #ffffff;
            border: 1.5px solid #e2e8f0;
            border-radius: 16px;
            padding: 14px 18px;
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 24px;
            max-width: 320px;
            transition: all 0.3s ease;
        }
        .gb-footer-mail-card:hover {
            border-color: rgba(var(--gb-footer-accent-rgb), 0.4);
            box-shadow: 0 8px 24px rgba(var(--gb-footer-accent-rgb), 0.05);
        }
        .gb-footer-mail-icon {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: var(--gb-footer-accent);
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            flex-shrink: 0;
        }
        .gb-footer-mail-icon i {
            line-height: 1;
        }
        .gb-footer-mail-info {
            display: flex;
            flex-direction: column;
        }
        .gb-footer-mail-info span {
            font-size: 11px;
            text-transform: uppercase;
            font-weight: 700;
            color: #94a3b8;
            letter-spacing: 0.5px;
            line-height: 1.2;
            margin-bottom: 2px;
        }
        .gb-footer-mail-info a {
            font-size: 14.5px;
            font-weight: 800;
            color: #0f172a;
            line-height: 1.2;
        }
        .gb-footer-mail-info a:hover {
            color: var(--gb-footer-accent);
        }
        
        /* Social block */
        .gb-footer-social-wrap {
            margin-top: 20px;
        }
        .gb-footer-social-wrap h5 {
            font-family: var(--font-suse), sans-serif;
            font-size: 13px;
            font-weight: 800;
            color: #0f172a;
            margin: 0 0 12px 0;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .gb-footer-social-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 8px;
        }
        .gb-footer-social-list a {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: #ffffff;
            border: 1.5px solid #e2e8f0;
            color: #475569;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 15px;
            transition: all 0.25s ease;
        }
        .gb-footer-social-list a:hover {
            background: var(--gb-footer-accent);
            border-color: var(--gb-footer-accent);
            color: #ffffff;
            transform: translateY(-2px);
        }

        /* Widget List */
        .gb-footer-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .gb-footer-list li {
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .gb-footer-list li a {
            font-weight: 600;
            color: #475569;
            font-size: 14.5px;
        }
        .gb-footer-list li a:hover {
            color: var(--gb-footer-accent);
            padding-left: 2px;
        }
        .gb-footer-list li i {
            color: var(--gb-footer-accent);
            font-size: 16px;
            flex-shrink: 0;
        }

        /* Careers Hiring Badge */
        .gb-hiring-badge {
            background: var(--gb-footer-accent);
            color: #ffffff;
            font-size: 9px;
            font-weight: 800;
            text-transform: uppercase;
            padding: 3px 10px;
            border-radius: 99px;
            margin-left: 6px;
            letter-spacing: 0.5px;
            line-height: 1;
        }

        /* Newsletter Input */
        .gb-newsletter-form {
            display: flex;
            background: #ffffff;
            border: 1.5px solid #e2e8f0;
            border-radius: 99px;
            padding: 4px;
            max-width: 320px;
            margin-bottom: 16px;
            transition: all 0.3s ease;
        }
        .gb-newsletter-form:focus-within {
            border-color: var(--gb-footer-accent);
            box-shadow: 0 0 0 4px rgba(var(--gb-footer-accent-rgb), 0.1);
        }
        .gb-newsletter-input {
            border: 0;
            background: transparent;
            padding: 0 16px;
            outline: none;
            font-size: 13.5px;
            width: 100%;
            color: #0f172a;
        }
        .gb-newsletter-btn {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--gb-footer-accent);
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 0;
            cursor: pointer;
            transition: all 0.25s ease;
            flex-shrink: 0;
        }
        .gb-newsletter-btn:hover {
            background: #431cd6;
            transform: scale(1.05);
        }
        
        .gb-newsletter-notes {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .gb-newsletter-notes li {
            margin-bottom: 8px;
            font-size: 13px;
            color: #64748b;
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 500;
        }
        .gb-newsletter-notes li i {
            color: var(--gb-footer-accent);
            font-size: 16px;
        }

        /* Feature Bar */
        .gb-footer-features {
            border-top: 1.5px solid #e2e8f0;
            border-bottom: 1.5px solid #e2e8f0;
            padding: 40px 0;
            margin: 40px 0;
        }
        .gb-feature-item {
            display: flex;
            align-items: center;
            gap: 16px;
            transition: transform 0.2s ease;
        }
        .gb-feature-item:hover {
            transform: translateY(-2px);
        }
        .gb-feature-icon {
            width: 50px;
            height: 50px;
            border-radius: 14px;
            background: rgba(var(--gb-footer-accent-rgb), 0.1);
            color: var(--gb-footer-accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            flex-shrink: 0;
            transition: all 0.3s ease;
        }
        .gb-feature-item:hover .gb-feature-icon {
            background: var(--gb-footer-accent);
            color: #ffffff;
        }
        .gb-feature-info h4 {
            font-family: var(--font-suse), sans-serif;
            font-size: 15px;
            font-weight: 800;
            color: #0f172a;
            margin: 0 0 4px 0;
        }
        .gb-feature-info p {
            font-size: 12.5px;
            color: #64748b;
            margin: 0;
            line-height: 1.4;
        }

        /* Bottom Copyright Area */
        .gb-footer-bottom {
            padding: 10px 0 30px 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            font-size: 13.5px;
            color: #64748b;
        }
        .gb-footer-bottom-links {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 16px;
        }
        .gb-footer-bottom-links a {
            color: #64748b;
            font-weight: 500;
        }
        .gb-footer-bottom-links a:hover {
            color: var(--gb-footer-accent);
        }
        .gb-footer-bottom-divider {
            color: #cbd5e1;
        }
        .gb-footer-secure-badge {
            border: 1.5px solid #e2e8f0;
            padding: 6px 14px;
            border-radius: 10px;
            font-size: 13px;
            font-weight: 700;
            color: #475569;
            display: flex;
            align-items: center;
            gap: 6px;
            background: #ffffff;
        }
        .gb-footer-secure-badge i {
            color: var(--gb-footer-accent);
            font-size: 15px;
        }

        /* Use standard container padding, matching the header layout */
        .gb-footer-new .container-fluid {
            padding-left: var(--bs-gutter-x, 15px);
            padding-right: var(--bs-gutter-x, 15px);
        }

        @media (max-width: 991px) {
            .gb-footer-bottom {
                flex-direction: column;
                text-align: center;
                justify-content: center;
            }
            .gb-footer-bottom-links {
                justify-content: center;
            }
        }
        /* Floating quick-actions dock */
        .gb-floating-actions {
            position: fixed;
            right: 22px;
            bottom: 22px;
            z-index: 9999;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 10px;
            max-width: calc(100vw - 28px);
        }
        .gb-floating-actions button {
            font: inherit;
        }
        .gb-floating-launcher {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 14px 28px rgba(34, 197, 94, 0.28);
            text-decoration: none;
            border: 4px solid #f8fafc;
            flex-shrink: 0;
            cursor: pointer;
            appearance: none;
            -webkit-appearance: none;
        }
        .gb-floating-launcher i {
            font-size: 28px;
            line-height: 1;
            transition: transform 0.25s ease;
        }
        .gb-floating-launcher:hover {
            color: #ffffff;
            transform: translateY(-2px);
        }
        .gb-floating-list {
            display: flex;
            flex-direction: column;
            gap: 10px;
            align-items: flex-end;
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            transform: translateY(10px);
            pointer-events: none;
            transition: max-height 0.35s ease, opacity 0.25s ease, transform 0.25s ease;
        }
        .gb-floating-actions.is-open .gb-floating-list {
            max-height: 620px;
            opacity: 1;
            transform: translateY(0);
            pointer-events: auto;
        }
        .gb-floating-list a {
            min-width: 190px;
            background: #ffffff;
            color: #0f172a;
            border: 1px solid #e2e8f0;
            border-radius: 999px;
            padding: 10px 16px 10px 12px;
            display: inline-flex;
            align-items: center;
            gap: 12px;
            box-shadow: 0 10px 26px rgba(15, 23, 42, 0.10);
            text-decoration: none;
            font-weight: 700;
            font-size: 14px;
            transition: transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
        }
        .gb-floating-list a:hover {
            transform: translateY(-2px);
            box-shadow: 0 16px 34px rgba(15, 23, 42, 0.14);
            border-color: rgba(83, 51, 237, 0.25);
        }
        .gb-floating-list .gb-floating-icon {
            width: 26px;
            height: 26px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            color: #ffffff;
            font-size: 14px;
        }
        .gb-floating-list .is-whatsapp .gb-floating-icon { background: #25D366; }
        .gb-floating-list .is-call .gb-floating-icon { background: #111827; }
        .gb-floating-list .is-email .gb-floating-icon { background: #334155; }
        .gb-floating-list .is-consult .gb-floating-icon { background: #111827; }
        .gb-floating-list .is-facebook .gb-floating-icon { background: #1877F2; }
        .gb-floating-list .is-instagram .gb-floating-icon { background: linear-gradient(135deg, #f58529, #dd2a7b 50%, #8134af); }
        .gb-floating-list .is-linkedin .gb-floating-icon { background: #0A66C2; }
        .gb-floating-list .is-top .gb-floating-icon { background: #475569; }
        .gb-consult-modal {
            position: fixed;
            inset: 0;
            z-index: 10000;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .gb-consult-modal.is-open {
            display: flex;
        }
        .gb-consult-backdrop {
            position: absolute;
            inset: 0;
            background: rgba(15, 23, 42, 0.62);
        }
        .gb-consult-dialog {
            position: relative;
            width: min(100%, 460px);
            background: #ffffff;
            border-radius: 14px;
            box-shadow: 0 26px 70px rgba(15, 23, 42, 0.24);
            padding: 26px;
        }
        .gb-consult-head {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 18px;
        }
        .gb-consult-head h3 {
            margin: 0;
            color: #0f172a;
            font-size: 22px;
            font-weight: 800;
            text-transform: none;
            letter-spacing: 0;
            padding: 0;
        }
        .gb-consult-head h3::after {
            display: none;
        }
        .gb-consult-head p {
            margin: 6px 0 0;
            color: #64748b;
            font-size: 14px;
            line-height: 1.5;
        }
        .gb-consult-close {
            width: 36px;
            height: 36px;
            border: 0;
            border-radius: 50%;
            background: #f1f5f9;
            color: #0f172a;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            flex-shrink: 0;
        }
        .gb-consult-form {
            display: grid;
            gap: 12px;
        }
        .gb-consult-form input,
        .gb-consult-form textarea {
            width: 100%;
            border: 1.5px solid #e2e8f0;
            border-radius: 10px;
            padding: 12px 14px;
            color: #0f172a;
            font-size: 14px;
            outline: none;
        }
        .gb-consult-form input:focus,
        .gb-consult-form textarea:focus {
            border-color: #16a34a;
            box-shadow: 0 0 0 3px rgba(22, 163, 74, 0.12);
        }
        .gb-consult-form textarea {
            min-height: 112px;
            resize: vertical;
        }
        .gb-consult-submit {
            border: 0;
            border-radius: 999px;
            background: #111827;
            color: #ffffff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            min-height: 46px;
            padding: 12px 18px;
            font-weight: 800;
            cursor: pointer;
        }
        .gb-consult-submit:disabled {
            opacity: 0.72;
            cursor: wait;
        }
        .gb-consult-status {
            display: none;
            border-radius: 10px;
            padding: 10px 12px;
            font-size: 13px;
            font-weight: 700;
        }
        .gb-consult-status.is-success {
            display: block;
            background: #dcfce7;
            color: #166534;
        }
        .gb-consult-status.is-error {
            display: block;
            background: #fee2e2;
            color: #991b1b;
        }
        .gb-consult-hp {
            position: absolute;
            left: -9999px;
            width: 1px;
            height: 1px;
            opacity: 0;
        }
        @media (max-width: 576px) {
            .gb-floating-actions {
                right: 14px;
                bottom: 14px;
                gap: 8px;
            }
            .gb-floating-launcher {
                width: 58px;
                height: 58px;
            }
            .gb-floating-launcher i {
                font-size: 26px;
            }
            .gb-floating-list a {
                min-width: 172px;
                padding: 9px 14px 9px 11px;
                font-size: 13px;
            }
            .gb-consult-dialog {
                padding: 22px;
            }
        }
    </style>

    <footer class="gb-footer-new">
        <div class="container-fluid">
            <!-- Better CSS Grid structure for footer top -->
            <div style="display: grid; grid-template-columns: 1.2fr 0.8fr 1fr 1fr 1.2fr; gap: 40px;" class="d-none d-lg-grid">
                <!-- Column 1: Info -->
                <div>
                    <img src="<?php echo gb_asset('img/grow-boostly.png'); ?>" alt="GrowBoostly Logo" style="height: 40px; margin-bottom: 20px;">
                    <p class="gb-footer-desc">Data-driven performance marketing agency helping brands generate quality leads, increase conversions, and scale faster.</p>
                    
                    <div class="gb-footer-mail-card">
                        <div class="gb-footer-mail-icon">
                            <i class='bx bxs-envelope'></i>
                        </div>
                        <div class="gb-footer-mail-info">
                            <span>Send Us Mail</span>
                            <a href="mailto:growboostly@gmail.com">growboostly@gmail.com</a>
                        </div>
                    </div>

                    <div class="gb-footer-social-wrap">
                        <h5>Let's Connect</h5>
                        <ul class="gb-footer-social-list">
                            <li><a href="https://www.facebook.com/GrowBoostly/" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                            <li><a href="https://x.com/GrowBoostly" target="_blank"><i class="bi bi-twitter-x"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/growboostly/" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                            <li><a href="https://www.youtube.com/@Grow-Boostly" target="_blank"><i class='bx bxl-youtube'></i></a></li>
                            <li><a href="https://www.instagram.com/grow_boostly/" target="_blank"><i class='bx bxl-instagram-alt'></i></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Column 2: Company -->
                <div>
                    <h3>Useful Links</h3>
                    <ul class="gb-footer-list">
                        <li><a href="<?php echo gb_url('index'); ?>">Home</a></li>
                        <li><a href="<?php echo gb_url('about'); ?>">About Us</a></li>
                        <li><a href="<?php echo gb_url('career'); ?>">Careers <span class="gb-hiring-badge">Hiring</span></a></li>
                        <li><a href="<?php echo gb_url('faq'); ?>">FAQs</a></li>
                        <li><a href="<?php echo gb_url('privacy-policy'); ?>">Privacy Policy</a></li>
                        <li><a href="<?php echo gb_url('terms-and-conditions'); ?>">Terms &amp; Conditions</a></li>
                        <li><a href="<?php echo gb_url('blogs'); ?>">Blogs</a></li>
                        <li><a href="<?php echo gb_url('contact'); ?>">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Column 3: Services -->
                <div>
                    <h3>Services</h3>
                    <ul class="gb-footer-list">
                        <li><a href="<?php echo gb_url('services/b2b-lead-generation'); ?>">Lead Generation</a></li>
                        <li><a href="<?php echo gb_url('services/seo'); ?>">SEO Services</a></li>
                        <li><a href="<?php echo gb_url('services/google-ads'); ?>">Google Ads</a></li>
                        <li><a href="<?php echo gb_url('services/facebook-instagram-ads'); ?>">Meta Ads</a></li>
                        <li><a href="<?php echo gb_url('services/business-website-development'); ?>">Website Development</a></li>
                        <li><a href="<?php echo gb_url('services/crm-integration'); ?>">CRM Automation</a></li>
                        <li><a href="<?php echo gb_url('packages/automation-crm-packages'); ?>">WhatsApp Automation</a></li>
                        <li><a href="<?php echo gb_url('services/logo-design'); ?>">Logo &amp; Brand Design</a></li>
                    </ul>
                </div>

                <!-- Column 4: Industries -->
                <div>
                    <h3>Industries</h3>
                    <ul class="gb-footer-list">
                        <li><i class='bx bx-shopping-bag'></i> <a href="<?php echo gb_url('industries/ecommerce-d2c'); ?>">E-commerce</a></li>
                        <li><i class='bx bx-store-alt'></i> <a href="<?php echo gb_url('industries/local-businesses'); ?>">Local Businesses</a></li>
                        <li><i class='bx bx-building-house'></i> <a href="<?php echo gb_url('industries/real-estate'); ?>">Real Estate</a></li>
                        <li><i class='bx bx-heart'></i> <a href="<?php echo gb_url('industries/healthcare-clinics'); ?>">Healthcare</a></li>
                        <li><i class='bx bxs-graduation'></i> <a href="<?php echo gb_url('industries/education-coaching'); ?>">Education</a></li>
                        <li><i class='bx bx-cloud'></i> <a href="<?php echo gb_url('industries/saas-it-technology'); ?>">SaaS &amp; Tech</a></li>
                        <li><i class='bx bx-support'></i> <a href="<?php echo gb_url('industries/bpo-service-companies'); ?>">BPO &amp; Offshoring</a></li>
                        <li><i class='bx bx-dollar-circle'></i> <a href="<?php echo gb_url('industries/finance-insurance'); ?>">Finance &amp; Insurance</a></li>
                    </ul>
                </div>

                <!-- Column 5: Newsletter -->
                <div>
                    <h3>Newsletter</h3>
                    <p class="gb-footer-desc" style="margin-bottom: 16px;">Subscribe to our newsletter and get marketing insights &amp; updates.</p>
                    <form class="gb-newsletter-form" action="#" method="POST" onsubmit="event.preventDefault();">
                        <input type="email" class="gb-newsletter-input" placeholder="Enter your email" required>
                        <button type="submit" class="gb-newsletter-btn">
                            <i class='bx bxs-paper-plane'></i>
                        </button>
                    </form>
                    <ul class="gb-newsletter-notes">
                        <li><i class="bi bi-check-circle-fill"></i> No spam, just valuable updates.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Unsubscribe anytime.</li>
                    </ul>
                </div>
            </div>

            <!-- Responsive Grid for Tablets and Mobile -->
            <div class="row g-5 d-lg-none">
                <!-- Column 1 -->
                <div class="col-12">
                    <img src="<?php echo gb_asset('img/grow-boostly.png'); ?>" alt="GrowBoostly Logo" style="height: 40px; margin-bottom: 20px;">
                    <p class="gb-footer-desc">Data-driven performance marketing agency helping brands generate quality leads, increase conversions, and scale faster.</p>
                    
                    <div class="gb-footer-mail-card">
                        <div class="gb-footer-mail-icon">
                            <i class='bx bxs-envelope'></i>
                        </div>
                        <div class="gb-footer-mail-info">
                            <span>Send Us Mail</span>
                            <a href="mailto:growboostly@gmail.com">growboostly@gmail.com</a>
                        </div>
                    </div>

                    <div class="gb-footer-social-wrap">
                        <h5>Let's Connect</h5>
                        <ul class="gb-footer-social-list">
                            <li><a href="https://www.facebook.com/GrowBoostly/" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                            <li><a href="https://x.com/GrowBoostly" target="_blank"><i class="bi bi-twitter-x"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/growboostly/" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                            <li><a href="https://www.youtube.com/@Grow-Boostly" target="_blank"><i class='bx bxl-youtube'></i></a></li>
                            <li><a href="https://www.instagram.com/grow_boostly/" target="_blank"><i class='bx bxl-instagram-alt'></i></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Column 2, 3, 4 responsive row -->
                <div class="col-12">
                    <div class="row g-4">
                        <div class="col-6 col-sm-4">
                            <h3>Company</h3>
                            <ul class="gb-footer-list">
                                <li><a href="<?php echo gb_url('index'); ?>">Home</a></li>
                                <li><a href="<?php echo gb_url('about'); ?>">About Us</a></li>
                                <li><a href="<?php echo gb_url('career'); ?>">Careers <span class="gb-hiring-badge">Hiring</span></a></li>
                                <li><a href="<?php echo gb_url('blogs'); ?>">Blogs</a></li>
                                <li><a href="<?php echo gb_url('faq'); ?>">FAQs</a></li>
                                <li><a href="<?php echo gb_url('privacy-policy'); ?>">Privacy Policy</a></li>
                                <li><a href="<?php echo gb_url('terms-and-conditions'); ?>">Terms &amp; Conditions</a></li>
                                <li><a href="<?php echo gb_url('contact'); ?>">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-sm-4">
                            <h3>Services</h3>
                            <ul class="gb-footer-list">
                                <li><a href="<?php echo gb_url('services/b2b-lead-generation'); ?>">Lead Generation</a></li>
                                <li><a href="<?php echo gb_url('services/seo'); ?>">SEO Services</a></li>
                                <li><a href="<?php echo gb_url('services/google-ads'); ?>">Google Ads</a></li>
                                <li><a href="<?php echo gb_url('services/facebook-instagram-ads'); ?>">Meta Ads</a></li>
                                <li><a href="<?php echo gb_url('services/business-website-development'); ?>">Website Development</a></li>
                                <li><a href="<?php echo gb_url('services/crm-integration'); ?>">CRM Automation</a></li>
                                <li><a href="<?php echo gb_url('packages/automation-crm-packages'); ?>">WhatsApp Automation</a></li>
                                <li><a href="<?php echo gb_url('services/logo-design'); ?>">Logo &amp; Brand Design</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-4">
                            <h3>Industries</h3>
                            <ul class="gb-footer-list">
                                <li><i class='bx bx-shopping-bag'></i> <a href="<?php echo gb_url('industries/ecommerce-d2c'); ?>">E-commerce</a></li>
                                <li><i class='bx bx-store-alt'></i> <a href="<?php echo gb_url('industries/local-businesses'); ?>">Local Businesses</a></li>
                                <li><i class='bx bx-building-house'></i> <a href="<?php echo gb_url('industries/real-estate'); ?>">Real Estate</a></li>
                                <li><i class='bx bx-heart'></i> <a href="<?php echo gb_url('industries/healthcare-clinics'); ?>">Healthcare</a></li>
                                <li><i class='bx bxs-graduation'></i> <a href="<?php echo gb_url('industries/education-coaching'); ?>">Education</a></li>
                                <li><i class='bx bx-cloud'></i> <a href="<?php echo gb_url('industries/saas-it-technology'); ?>">SaaS &amp; Tech</a></li>
                                <li><i class='bx bx-support'></i> <a href="<?php echo gb_url('industries/bpo-service-companies'); ?>">BPO &amp; Offshoring</a></li>
                                <li><i class='bx bx-dollar-circle'></i> <a href="<?php echo gb_url('industries/finance-insurance'); ?>">Finance &amp; Insurance</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Column 5 -->
                <div class="col-12">
                    <h3>Newsletter</h3>
                    <p class="gb-footer-desc" style="margin-bottom: 16px;">Subscribe to our newsletter and get marketing insights &amp; updates.</p>
                    <form class="gb-newsletter-form" action="#" method="POST" onsubmit="event.preventDefault();">
                        <input type="email" class="gb-newsletter-input" placeholder="Enter your email" required>
                        <button type="submit" class="gb-newsletter-btn">
                            <i class='bx bxs-paper-plane'></i>
                        </button>
                    </form>
                    <ul class="gb-newsletter-notes">
                        <li><i class="bi bi-check-circle-fill"></i> No spam, just valuable updates.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Unsubscribe anytime.</li>
                    </ul>
                </div>
            </div>

            <!-- Features Bar Section -->
            <div class="gb-footer-features">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="gb-feature-item">
                            <div class="gb-feature-icon">
                                <i class='bx bx-target-lock'></i>
                            </div>
                            <div class="gb-feature-info">
                                <h4>ROI Focused</h4>
                                <p>We focus on strategies that deliver measurable results.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="gb-feature-item">
                            <div class="gb-feature-icon">
                                <i class='bx bx-bar-chart-alt-2'></i>
                            </div>
                            <div class="gb-feature-info">
                                <h4>Transparent Reporting</h4>
                                <p>Get clear insights and regular performance reports.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="gb-feature-item">
                            <div class="gb-feature-icon">
                                <i class='bx bx-support'></i>
                            </div>
                            <div class="gb-feature-info">
                                <h4>Dedicated Support</h4>
                                <p>Our team is always here to support your growth journey.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="gb-feature-item">
                            <div class="gb-feature-icon">
                                <i class='bx bx-trending-up'></i>
                            </div>
                            <div class="gb-feature-info">
                                <h4>Result-Driven Strategies</h4>
                                <p>Data-backed strategies that drive leads, sales &amp; growth.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Copyright Section -->
            <div class="gb-footer-bottom">
                <div>
                    &copy; 2026 GrowBoostly. All Rights Reserved.
                </div>
                <div class="gb-footer-secure-badge">
                    <i class="bi bi-shield-check"></i> Secure &amp; Trusted
                </div>
            </div>
        </div>
    </footer>
    <!-- home1 Footer Section End --> 


    <!-- Floating quick actions -->
    <div class="gb-floating-actions" aria-label="Quick contact actions">
        <button id="chat-button" class="gb-floating-launcher" type="button" aria-label="Open quick contact options" aria-expanded="false">
            <i class='bx bxs-conversation'></i>
        </button>
        <div class="gb-floating-list">
            <a class="is-whatsapp" href="https://wa.me/919919020887?text=Hi%2C%20I%20would%20like%20to%20know%20more%20about%20your%20services." target="_blank" rel="noopener noreferrer" aria-label="WhatsApp">
                <span class="gb-floating-icon"><i class='bx bxl-whatsapp'></i></span>
                <span>WhatsApp</span>
            </a>
            <a class="is-call" href="tel:+919919020887" aria-label="Call now">
                <span class="gb-floating-icon"><i class='bx bxs-phone-call'></i></span>
                <span>Call Now</span>
            </a>
            <a class="is-email" href="mailto:growboostly@gmail.com" aria-label="Email us">
                <span class="gb-floating-icon"><i class='bx bxs-envelope'></i></span>
                <span>Email</span>
            </a>
            <a class="is-consult" href="<?php echo gb_url('contact'); ?>" aria-label="Book a consultation" data-consult-open>
                <span class="gb-floating-icon"><i class='bx bxs-calendar-check'></i></span>
                <span>Book Consultation</span>
            </a>
            <a class="is-facebook" href="https://www.facebook.com/GrowBoostly/" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                <span class="gb-floating-icon"><i class='bx bxl-facebook'></i></span>
                <span>Facebook</span>
            </a>
            <a class="is-instagram" href="https://www.instagram.com/grow_boostly/" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                <span class="gb-floating-icon"><i class='bx bxl-instagram'></i></span>
                <span>Instagram</span>
            </a>
            <a class="is-linkedin" href="https://www.linkedin.com/company/growboostly/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                <span class="gb-floating-icon"><i class='bx bxl-linkedin'></i></span>
                <span>LinkedIn</span>
            </a>
            <a class="is-top" href="#top" onclick="window.scrollTo({ top: 0, behavior: 'smooth' }); return false;" aria-label="Back to top">
                <span class="gb-floating-icon"><i class='bx bx-up-arrow-alt'></i></span>
                <span>Back to Top</span>
            </a>
        </div>
    </div>

    <div class="gb-consult-modal" id="gb-consult-modal" aria-hidden="true">
        <div class="gb-consult-backdrop" data-consult-close></div>
        <div class="gb-consult-dialog" role="dialog" aria-modal="true" aria-labelledby="gb-consult-title">
            <div class="gb-consult-head">
                <div>
                    <h3 id="gb-consult-title">Book Consultation</h3>
                    <p>Share your details and our team will contact you shortly.</p>
                </div>
                <button class="gb-consult-close" type="button" aria-label="Close consultation form" data-consult-close>
                    <i class='bx bx-x'></i>
                </button>
            </div>
            <form class="gb-consult-form" id="gb-consult-form" action="<?php echo gb_url('consultation-submit'); ?>" method="post">
                <input type="text" name="name" placeholder="Full name" autocomplete="name" required>
                <input type="email" name="email" placeholder="Email address" autocomplete="email" required>
                <input type="tel" name="phone" placeholder="Phone number" autocomplete="tel" required>
                <textarea name="message" placeholder="Message" required></textarea>
                <input class="gb-consult-hp" type="text" name="website" tabindex="-1" autocomplete="off">
                <div class="gb-consult-status" id="gb-consult-status" role="status"></div>
                <button class="gb-consult-submit" type="submit">
                    <span>Send Request</span>
                    <i class='bx bxs-send'></i>
                </button>
            </form>
        </div>
    </div>

    <!--  Main jQuery  -->
    <script defer src="<?php echo gb_asset('js/jquery-3.7.1.min.js'); ?>"></script>
    <!-- Popper and Bootstrap JS -->
    <script defer src="<?php echo gb_asset('js/bootstrap.min.js'); ?>"></script>
    <script defer src="<?php echo gb_asset('js/popper.min.js'); ?>"></script>
    <!-- Swiper slider JS -->
    <script defer src="<?php echo gb_asset('js/swiper-bundle.min.js'); ?>"></script>
    <!-- Waypoints JS -->
    <script defer src="<?php echo gb_asset('js/waypoints.min.js'); ?>"></script>
    <!-- Counterup JS -->
    <script defer src="<?php echo gb_asset('js/jquery.counterup.min.js'); ?>"></script>
    <!-- Wow JS -->
    <script defer src="<?php echo gb_asset('js/wow.min.js'); ?>"></script>
    <!-- Marquee  JS -->
    <script defer src="<?php echo gb_asset('js/jquery.marquee.min.js'); ?>"></script>
    <!-- Gsap  JS -->
    <script defer src="<?php echo gb_asset('js/gsap.min.js'); ?>"></script>
    <script defer src="<?php echo gb_asset('js/ScrollTrigger.min.js'); ?>"></script>
    <script defer src="<?php echo gb_asset('js/jquery.fancybox.min.js'); ?>"></script>
    <!-- Custom JS -->
    <script defer src="<?php echo gb_asset('js/custom.js'); ?>"></script>
    <script>
        (function () {
            var actions = document.querySelector('.gb-floating-actions');
            var launcher = document.getElementById('chat-button');
            var consultModal = document.getElementById('gb-consult-modal');
            var consultForm = document.getElementById('gb-consult-form');
            var consultStatus = document.getElementById('gb-consult-status');
            var consultOpen = document.querySelector('[data-consult-open]');
            var closeButtons = document.querySelectorAll('[data-consult-close]');

            if (!actions || !launcher) {
                return;
            }

            function setOpen(isOpen) {
                actions.classList.toggle('is-open', isOpen);
                launcher.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            }

            function showStatus(type, message) {
                if (!consultStatus) {
                    return;
                }
                consultStatus.className = 'gb-consult-status is-' + type;
                consultStatus.textContent = message;
            }

            function clearStatus() {
                if (!consultStatus) {
                    return;
                }
                consultStatus.className = 'gb-consult-status';
                consultStatus.textContent = '';
            }

            function setModalOpen(isOpen) {
                if (!consultModal) {
                    return;
                }
                consultModal.classList.toggle('is-open', isOpen);
                consultModal.setAttribute('aria-hidden', isOpen ? 'false' : 'true');
                document.body.style.overflow = isOpen ? 'hidden' : '';
                if (isOpen && consultForm) {
                    clearStatus();
                    var firstInput = consultForm.querySelector('input[name="name"]');
                    if (firstInput) {
                        setTimeout(function () {
                            firstInput.focus();
                        }, 50);
                    }
                }
            }

            launcher.addEventListener('click', function (event) {
                event.preventDefault();
                setOpen(!actions.classList.contains('is-open'));
            });

            if (consultOpen) {
                consultOpen.addEventListener('click', function (event) {
                    event.preventDefault();
                    setOpen(false);
                    setModalOpen(true);
                });
            }

            closeButtons.forEach(function (button) {
                button.addEventListener('click', function () {
                    setModalOpen(false);
                });
            });

            if (consultForm) {
                consultForm.addEventListener('submit', function (event) {
                    event.preventDefault();
                    clearStatus();

                    var submitButton = consultForm.querySelector('.gb-consult-submit');
                    var submitText = submitButton ? submitButton.querySelector('span') : null;
                    var originalText = submitText ? submitText.textContent : '';

                    if (submitButton) {
                        submitButton.disabled = true;
                    }
                    if (submitText) {
                        submitText.textContent = 'Sending...';
                    }

                    fetch(consultForm.action, {
                        method: 'POST',
                        body: new FormData(consultForm),
                        headers: {
                            'Accept': 'application/json'
                        }
                    })
                        .then(function (response) {
                            return response.json().then(function (data) {
                                return { ok: response.ok && data.ok, data: data };
                            });
                        })
                        .then(function (result) {
                            showStatus(result.ok ? 'success' : 'error', result.data.message || 'Something went wrong. Please try again.');
                            if (result.ok) {
                                consultForm.reset();
                                setTimeout(function () {
                                    setModalOpen(false);
                                    clearStatus();
                                }, 1400);
                            }
                        })
                        .catch(function () {
                            showStatus('error', 'Sorry, your request could not be sent. Please try again.');
                        })
                        .finally(function () {
                            if (submitButton) {
                                submitButton.disabled = false;
                            }
                            if (submitText) {
                                submitText.textContent = originalText;
                            }
                        });
                });
            }

            document.addEventListener('click', function (event) {
                if (!actions.contains(event.target)) {
                    setOpen(false);
                }
            });

            document.addEventListener('keydown', function (event) {
                if (event.key === 'Escape') {
                    setOpen(false);
                    setModalOpen(false);
                }
            });
        })();
    </script>
