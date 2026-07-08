<?php
require_once __DIR__ . '/includes/url_helper.php';
?>
<style>
/* PROFESSIONAL MARKETING MEGA MENU CSS */
.header-area .main-menu > ul > li .marketing-mega-menu,
.header-area .main-menu > ul > li .development-mega-menu {
    position: absolute;
    top: 100%;
    left: 50%;
    transform: translateX(-50%) translateY(15px);
    width: 1050px;
    background: #ffffff;
    border-radius: 16px;
    box-shadow: 0 20px 60px rgba(0,0,0,0.08), 0 0 0 1px rgba(0,0,0,0.04);
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.5s ease, transform 0.5s cubic-bezier(0.16, 1, 0.3, 1), visibility 0.5s;
    z-index: 999;
    overflow: visible;
    display: block; 
    pointer-events: none;
}
.marketing-mega-menu::before, .development-mega-menu::before, .leadgen-dropdown-grid::before {
    content: '';
    position: absolute;
    top: -30px;
    left: 0;
    width: 100%;
    height: 30px;
    background: transparent;
    z-index: -1;
}
.header-area .main-menu > ul > li:hover .marketing-mega-menu,
.header-area .main-menu > ul > li:hover .development-mega-menu {
    opacity: 1;
    visibility: visible;
    transform: translateX(-50%) translateY(0);
    transition: opacity 0.5s ease, transform 0.5s cubic-bezier(0.16, 1, 0.3, 1), visibility 0s;
    pointer-events: auto;
}

/* SMOOTHING FOR OTHER DROPDOWNS */
.leadgen-dropdown-grid {
    transition: opacity 0.5s ease, transform 0.5s cubic-bezier(0.16, 1, 0.3, 1), visibility 0.5s !important;
    transform: translateX(-50%) translateY(15px) !important;
    overflow: visible !important;
}
.header-area .main-menu > ul > li:hover .leadgen-dropdown-grid {
    opacity: 1 !important;
    visibility: visible !important;
    transform: translateX(-50%) translateY(0) !important;
    transition: opacity 0.5s ease, transform 0.5s cubic-bezier(0.16, 1, 0.3, 1), visibility 0s !important;
    pointer-events: auto !important;
}
.marketing-mega-menu .mmm-container,
.development-mega-menu .mmm-container {
    display: flex;
    width: 100%;
}
.marketing-mega-menu .mmm-left,
.development-mega-menu .mmm-left {
    flex: 0 0 68%;
    padding: 40px;
}
.marketing-mega-menu .mmm-header,
.development-mega-menu .mmm-header {
    margin-bottom: 30px;
}
.marketing-mega-menu .mmm-tag,
.development-mega-menu .mmm-tag {
    display: inline-block;
    background: rgba(67,56,202,0.1);
    color: #4338ca;
    font-size: 11px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 4px 10px;
    border-radius: 20px;
    margin-bottom: 12px;
}
.marketing-mega-menu .mmm-header h4,
.development-mega-menu .mmm-header h4 {
    font-size: 22px;
    font-weight: 800;
    color: #1c1917;
    margin: 0;
}
.marketing-mega-menu .mmm-grid,
.development-mega-menu .mmm-grid {
    display: flex;
    gap: 40px;
}
.marketing-mega-menu .mmm-col,
.development-mega-menu .mmm-col {
    flex: 1;
}
.marketing-mega-menu .mmm-col h5,
.development-mega-menu .mmm-col h5 {
    font-size: 14px;
    font-weight: 700;
    color: #444;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 8px;
    border-bottom: 1px solid #f1f1f1;
    padding-bottom: 10px;
}
.marketing-mega-menu .mmm-col h5 i,
.development-mega-menu .mmm-col h5 i {
    color: #4338ca;
    font-size: 16px;
}
.marketing-mega-menu .mmm-col ul,
.development-mega-menu .mmm-col ul {
    list-style: none;
    padding: 0;
    margin: 0;
}
.marketing-mega-menu .mmm-col ul li,
.development-mega-menu .mmm-col ul li {
    margin-bottom: 12px !important;
}
.marketing-mega-menu .mmm-col ul li:last-child,
.development-mega-menu .mmm-col ul li:last-child {
    margin-bottom: 0 !important;
}
.marketing-mega-menu .mmm-col ul li a,
.development-mega-menu .mmm-col ul li a {
    display: block;
    font-size: 14.5px;
    font-weight: 500;
    color: #57534e;
    text-decoration: none;
    transition: all 0.2s;
    line-height: 1.4;
}
.marketing-mega-menu .mmm-col ul li a:hover,
.development-mega-menu .mmm-col ul li a:hover {
    color: #4338ca;
    transform: translateX(5px);
}
.marketing-mega-menu .mmm-right,
.development-mega-menu .mmm-right {
    flex: 0 0 32%;
    background: linear-gradient(135deg, #1e1b4b 0%, #312e81 100%);
    padding: 40px 30px;
    position: relative;
    overflow: hidden;
    display: flex;
    align-items: center;
}
.marketing-mega-menu .mmm-promo,
.development-mega-menu .mmm-promo {
    position: relative;
    z-index: 2;
    text-align: center;
}
.marketing-mega-menu .promo-icon,
.development-mega-menu .promo-icon {
    font-size: 36px;
    margin-bottom: 20px;
    display: inline-block;
    background: rgba(255,255,255,0.1);
    padding: 15px;
    border-radius: 50%;
    backdrop-filter: blur(5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}
.marketing-mega-menu .mmm-promo h3,
.development-mega-menu .mmm-promo h3 {
    font-size: 22px;
    font-weight: 800;
    color: #fff;
    margin-bottom: 15px;
    line-height: 1.3;
}
.marketing-mega-menu .mmm-promo p,
.development-mega-menu .mmm-promo p {
    font-size: 14px;
    color: rgba(255,255,255,0.7);
    line-height: 1.6;
    margin-bottom: 25px;
}
.marketing-mega-menu .mmm-btn,
.development-mega-menu .mmm-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    background: #fff;
    color: #312e81;
    font-weight: 700;
    font-size: 14px;
    padding: 12px 24px;
    border-radius: 8px;
    text-decoration: none;
    transition: all 0.3s;
    width: 100%;
}
.marketing-mega-menu .mmm-btn:hover,
.development-mega-menu .mmm-btn:hover {
    background: rgba(255,255,255,0.9);
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}
.marketing-mega-menu .mmm-right::after,
.development-mega-menu .mmm-right::after {
    content: '';
    position: absolute;
    width: 200px;
    height: 200px;
    background: radial-gradient(circle, rgba(99,102,241,0.2) 0%, rgba(255,255,255,0) 70%);
    top: -50px;
    right: -50px;
    border-radius: 50%;
    z-index: 1;
}
/* Responsive fixes */
@media (max-width: 991px) {
    .header-area .main-menu > ul > li:hover .marketing-mega-menu,
    .header-area .main-menu > ul > li:hover .development-mega-menu {
        opacity: 1 !important;
        visibility: visible !important;
        transform: none !important;
        pointer-events: none !important;
        display: none !important;
    }
    .header-area .main-menu > ul > li .marketing-mega-menu,
    .header-area .main-menu > ul > li .development-mega-menu {
        position: relative;
        top: 0;
        left: 0;
        transform: none;
        width: 100%;
        box-shadow: none;
        border-radius: 0;
        pointer-events: auto;
        background: transparent;
        padding-left: 14px;
    }
    .header-area .main-menu > ul > li > ul.sub-menu,
    .header-area .main-menu > ul > li > .marketing-mega-menu,
    .header-area .main-menu > ul > li > .development-mega-menu {
        display: block !important;
        max-height: 0;
        overflow: hidden;
        opacity: 0;
        visibility: hidden;
        padding-top: 0 !important;
        padding-bottom: 0 !important;
        transition: max-height 0.35s ease, opacity 0.25s ease, visibility 0.25s;
    }
    .header-area .main-menu > ul > li.submenu-open > ul.sub-menu,
    .header-area .main-menu > ul > li.submenu-open > .marketing-mega-menu,
    .header-area .main-menu > ul > li.submenu-open > .development-mega-menu {
        max-height: 2000px;
        opacity: 1;
        visibility: visible;
        overflow-y: auto;
        padding-bottom: 8px !important;
    }
    .marketing-mega-menu .mmm-container,
    .development-mega-menu .mmm-container {
        flex-direction: column;
        width: 100%;
    }
    .marketing-mega-menu .mmm-left,
    .development-mega-menu .mmm-left {
        flex: none;
        width: 100%;
        padding: 4px 0 0;
    }
    .marketing-mega-menu .mmm-header,
    .development-mega-menu .mmm-header,
    .marketing-mega-menu .mmm-right,
    .development-mega-menu .mmm-right {
        display: none !important;
    }
    .marketing-mega-menu .mmm-grid,
    .development-mega-menu .mmm-grid {
        flex-direction: column;
        gap: 0;
    }
    .marketing-mega-menu .mmm-col,
    .development-mega-menu .mmm-col {
        width: 100%;
    }
    .marketing-mega-menu .mmm-col h5,
    .development-mega-menu .mmm-col h5 {
        display: none !important;
    }
    .marketing-mega-menu .mmm-col ul li,
    .development-mega-menu .mmm-col ul li {
        margin-bottom: 0 !important;
    }
    .marketing-mega-menu .mmm-col ul li a,
    .development-mega-menu .mmm-col ul li a {
        font-size: 12px;
        padding: 6px 0;
        font-weight: 500;
        line-height: 1.35;
        color: #57534e;
    }
    .marketing-mega-menu .mmm-right::after,
    .development-mega-menu .mmm-right::after {
        display: none;
    }
    .marketing-mega-menu .mmm-col ul li a:hover,
    .development-mega-menu .mmm-col ul li a:hover {
        transform: none;
    }
}
</style>
<!-- header Section Start-->
    <header class="header-area style-4">
        <div class="container-fluid d-flex flex-nowrap align-items-center justify-content-between">
            <div class="company-logo">
                <a href="<?php echo gb_url('index'); ?>" class="logo-dark"><img alt="GrowBoostly Logo" class="img-fluid" src="<?php echo gb_asset('img/grow-boostly.png'); ?>"></a>
                <a href="<?php echo gb_url('index'); ?>" class="logo-light"><img alt="GrowBoostly Logo" class="img-fluid" src="<?php echo gb_asset('img/grow-boostly.png'); ?>"></a>
            </div>
            <div class="menu-wrap">
                <div class="main-menu">
                    <div class="mobile-logo-area gb-mobile-drawer-head d-lg-none d-flex align-items-center justify-content-between">
                        <a href="<?php echo gb_url('index'); ?>" class="gb-drawer-brand">
                            <img alt="GrowBoostly Logo" class="gb-drawer-logo" src="<?php echo gb_asset('img/grow-boostly.png'); ?>">
                            <span class="gb-drawer-label">Navigation</span>
                        </a>
                        <button type="button" class="menu-close-btn" aria-label="Close menu">
                            <i class="bi bi-x-lg"></i>
                        </button>
                    </div>
                    <ul class="menu-list">
                        <li><a href="<?php echo gb_url('about'); ?>">About</a></li>
                        <li class="menu-item-has-children">
                            <a href="javascript:void(0)" class="drop-down">Lead Generation</a>
                            <i class="bi bi-chevron-down dropdown-icon"></i>
                            <ul class="sub-menu">
                                <li><a href="<?php echo gb_url('services/b2b-lead-generation'); ?>">B2B Lead Generation</a></li>
                                <li><a href="<?php echo gb_url('services/b2c-lead-generation'); ?>">B2C Lead Generation</a></li>
                                <li><a href="<?php echo gb_url('services/ai-based-lead-targeting'); ?>">AI-Based Lead Targeting</a></li>
                                <li><a href="<?php echo gb_url('services/landing-page-creation'); ?>">Landing Page Creation</a></li>
                                <li><a href="<?php echo gb_url('services/sales-funnel-development'); ?>">Sales Funnel Development</a></li>
                                <li><a href="<?php echo gb_url('services/lead-nurturing'); ?>">Lead Nurturing</a></li>
                                <li><a href="<?php echo gb_url('services/crm-integration'); ?>">CRM Integration</a></li>
                            </ul>
                        </li>
           
    <li class="menu-item-has-children position-inherit">
                            <a href="javascript:void(0)" class="drop-down">Marketing
                            </a>
                            <i class="bi bi-chevron-down dropdown-icon"></i>
                            <div class="marketing-mega-menu">
                                <div class="mmm-container">
                                    <div class="mmm-left">
                                        <div class="mmm-header">
                                            <h4>Challenge We Tackle</h4>
                                        </div>
                                        <div class="mmm-grid">
                                            <!-- Column 1 -->
                                            <div class="mmm-col">
                                                <h5><i class="bi bi-graph-up-arrow"></i> Performance Marketing</h5>
                                                <ul>
                                                    <li><a href="<?php echo gb_url('services/google-ads'); ?>">Google Ads (PPC)</a></li>
                                                    <li><a href="<?php echo gb_url('services/facebook-instagram-ads'); ?>">Facebook & Instagram Ads</a></li>
                                                    <li><a href="<?php echo gb_url('services/linkedin-ads'); ?>">LinkedIn Ads (B2B)</a></li>
                                                    <li><a href="<?php echo gb_url('services/search-engine-marketing'); ?>">Search Engine Marketing</a></li>
                                                    <li><a href="<?php echo gb_url('services/retargeting-remarketing'); ?>">Retargeting / Remarketing</a></li>
                                                    <li><a href="<?php echo gb_url('services/conversion-rate-optimisation'); ?>">Conversion Rate Optimization</a></li>
                                                    <li><a href="<?php echo gb_url('services/ab-testing'); ?>">A/B Testing & Optimization</a></li>
                                                </ul>
                                            </div>
                                            <!-- Column 2 -->
                                            <div class="mmm-col">
                                                <h5><i class="bi bi-globe2"></i> Digital Marketing</h5>
                                                <ul>
                                                    <li><a href="<?php echo gb_url('services/seo'); ?>">Search Engine Optimization</a></li>
                                                    <li><a href="<?php echo gb_url('services/ai-powered-seo'); ?>">AI-Powered SEO</a></li>
                                                    <li><a href="<?php echo gb_url('services/social-media-marketing'); ?>">Social Media Marketing</a></li>
                                                    <li><a href="<?php echo gb_url('services/app-store-optimisation'); ?>">App Store Optimization</a></li>
                                                    <li><a href="<?php echo gb_url('services/content-marketing'); ?>">Content Marketing</a></li>
                                                    <li><a href="<?php echo gb_url('services/email-marketing-automation'); ?>">Email Automation</a></li>
                                                    <li><a href="<?php echo gb_url('services/online-reputation-management'); ?>">Online Reputation (ORM)</a></li>
                                                    <li><a href="<?php echo gb_url('services/youtube-marketing'); ?>">YouTube Marketing</a></li>
                                                </ul>
                                            </div>
                                            <!-- Column 3 -->
                                            <div class="mmm-col">
                                                <h5><i class="bi bi-people"></i> <a href="<?php echo gb_url('services/influencer-marketing'); ?>" style="color: inherit; text-decoration: none;">Influencer Marketing</a></h5>
                                                <ul>
                                                    <li><a href="<?php echo gb_url('services/influencer-marketing'); ?>">Influencer Research & Strategy</a></li>
                                                    <li><a href="<?php echo gb_url('services/campaign-management'); ?>">Campaign Management</a></li>
                                                    <li><a href="<?php echo gb_url('services/instagram-influencer-marketing'); ?>">Instagram Influencer Marketing</a></li>
                                                    <li><a href="<?php echo gb_url('services/youtube-influencer-marketing'); ?>">YouTube Influencer Marketing</a></li>
                                                    <li><a href="<?php echo gb_url('services/creator-collaborations'); ?>">Creator Collaborations</a></li>
                                                    <li><a href="<?php echo gb_url('services/performance-tracking'); ?>">Performance Tracking</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mmm-right">
                                        <div class="mmm-promo">
                                            <div class="promo-icon">🚀</div>
                                            <h3>We help businesses grow with smarter campaigns, better leads, and stronger conversion systems.</h3>
                                            <a href="<?php echo gb_url('contact'); ?>" class="mmm-btn">Let's Talk <i class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
    <li class="menu-item-has-children position-inherit">
                            <a href="javascript:void(0)" class="drop-down">Development</a>
                            <i class="bi bi-chevron-down dropdown-icon"></i>
                            <div class="development-mega-menu">
                                <div class="mmm-container">
                                    <div class="mmm-left">
                                        <div class="mmm-header">
                                            <h4>Design & Engineering</h4>
                                        </div>
                                        <div class="mmm-grid">
                                            <!-- Column 1 -->
                                            <div class="mmm-col">
                                                <h5><i class="bi bi-pc-display"></i> Web Development</h5>
                                                <ul>
                                                    <li><a href="<?php echo gb_url('services/business-website-development'); ?>">Business Website</a></li>
                                                    <li><a href="<?php echo gb_url('services/ecommerce-development'); ?>">eCommerce Solutions</a></li>
                                                    <li><a href="<?php echo gb_url('services/landing-page-development'); ?>">Landing Page Dev</a></li>
                                                    <li><a href="<?php echo gb_url('services/website-redesign'); ?>">Website Redesign</a></li>
                                                    <li><a href="<?php echo gb_url('services/maintenance-support'); ?>">Maintenance & Support</a></li>
                                                </ul>
                                            </div>
                                            <!-- Column 2 -->
                                            <div class="mmm-col">
                                                <h5><i class="bi bi-phone"></i> App Development</h5>
                                                <ul>
                                                    <li><a href="<?php echo gb_url('services/android-app-development'); ?>">Android App Development</a></li>
                                                    <li><a href="<?php echo gb_url('services/ios-app-development'); ?>">iOS App Development</a></li>
                                                    <li><a href="<?php echo gb_url('services/cross-platform-apps'); ?>">Cross-Platform Apps</a></li>
                                                    <li><a href="<?php echo gb_url('services/ui-ux-design'); ?>">UI/UX Design</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mmm-right">
                                        <div class="mmm-promo">
                                            <div class="promo-icon">💻</div>
                                            <h3>We build high-performance websites and mobile apps tailored to your business goals.</h3>
                                            <a href="<?php echo gb_url('contact'); ?>" class="mmm-btn">Start Your Project <i class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="javascript:void(0)" class="drop-down">Branding</a>
                            <i class="bi bi-chevron-down dropdown-icon"></i>
                            <ul class="sub-menu">
                            <li><a href="<?php echo gb_url('services/logo-design'); ?>">Logo Design</a></li>
                            <li><a href="<?php echo gb_url('services/brand-identity-design'); ?>">Brand Identity Design</a></li>
                            <li><a href="<?php echo gb_url('services/brand-strategy'); ?>">Brand Strategy</a></li>
                            <li><a href="<?php echo gb_url('services/brand-positioning'); ?>">Brand Positioning</a></li>
                            <li><a href="<?php echo gb_url('services/social-media-creatives'); ?>">Social Media Creatives</a></li>
                            <li><a href="<?php echo gb_url('services/packaging-design'); ?>">Packaging Design</a></li>
                            <li><a href="<?php echo gb_url('services/rebranding'); ?>">Rebranding</a></li>
                        </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="javascript:void(0)" class="drop-down">Hire Developers</a>
                            <i class="bi bi-chevron-down dropdown-icon"></i>
                            <ul class="sub-menu">
                                <li><a href="<?php echo gb_url('services/full-stack-developers'); ?>">Full-Stack Developers</a></li>
                                <li><a href="<?php echo gb_url('services/backend-developers'); ?>">Backend Developers</a></li>
                                <li><a href="<?php echo gb_url('services/android-developers'); ?>">Android Developers</a></li>
                                <li><a href="<?php echo gb_url('services/nodejs-developers'); ?>">Node.js Developers</a></li>
                                <li><a href="<?php echo gb_url('services/php-laravel-developers'); ?>">PHP / Laravel Developers</a></li>
                                <li><a href="<?php echo gb_url('services/web-developers'); ?>">Web Developers</a></li>
                                <li><a href="<?php echo gb_url('services/fintech-software-developers'); ?>">Fintech Software Developers</a></li>
                                <li><a href="<?php echo gb_url('services/dedicated-developer'); ?>">Dedicated Developers</a></li>
                                <li><a href="<?php echo gb_url('services/swift-developer'); ?>">Swift Developers</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo gb_url('packages'); ?>">Packages</a></li>
                    </ul>
                    <div class="btn-and-contact-area d-lg-none d-block">
                        <a href="<?php echo gb_url('contact'); ?>" class="primary-btn4">
                            
                            <span class="content">Contact Us</span>
                            
                        </a>
                    </div>
                </div>
                <div class="nav-right">
                    <a href="<?php echo gb_url('contact'); ?>" class="primary-btn4 d-lg-flex d-none">
                        
                        <span class="content">Contact Us</span>
                        
                    </a>
                    <div class="sidebar-button mobile-menu-btn">
                        <svg width="20" height="18" viewBox="0 0 20 18" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.29445 2.8421H10.5237C11.2389 2.8421 11.8182 2.2062 11.8182 1.42105C11.8182 0.635903 11.2389 0 10.5237 0H1.29445C0.579249 0 0 0.635903 0 1.42105C0 2.2062 0.579249 2.8421 1.29445 2.8421Z"></path>
                            <path d="M1.23002 10.421H18.77C19.4496 10.421 20 9.78506 20 8.99991C20 8.21476 19.4496 7.57886 18.77 7.57886H1.23002C0.550421 7.57886 0 8.21476 0 8.99991C0 9.78506 0.550421 10.421 1.23002 10.421Z"></path>
                            <path d="M18.8052 15.1579H10.2858C9.62563 15.1579 9.09094 15.7938 9.09094 16.5789C9.09094 17.3641 9.62563 18 10.2858 18H18.8052C19.4653 18 20 17.3641 20 16.5789C20 15.7938 19.4653 15.1579 18.8052 15.1579Z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header Section End-->
