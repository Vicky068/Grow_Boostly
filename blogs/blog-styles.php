<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');

.gb-blog-page {
    --gb-ink: #0f172a;
    --gb-text: #334155;
    --gb-muted: #64748b;
    --gb-line: #e2e8f0;
    --gb-soft: #f8fafc;
    --gb-blue: #2563eb;
    --gb-green: #16c784;
    --gb-violet: #7c3aed;
    --gb-grad: linear-gradient(135deg, #16c784 0%, #2563eb 55%, #7c3aed 100%);
    --gb-hero-bg: linear-gradient(135deg, #f0fdf4 0%, #eff6ff 50%, #f5f3ff 100%);
    --gb-shadow: 0 18px 45px rgba(15, 23, 42, 0.08);
    font-family: 'Inter', sans-serif;
    color: var(--gb-text);
    background: #fff;
}

.gb-blog-page .gb-blog-hero {
    padding: 150px 20px 90px;
    background: var(--gb-hero-bg);
    text-align: center;
    position: relative;
    overflow: hidden;
}

.gb-blog-page .gb-blog-hero:before {
    content: "";
    position: absolute;
    inset: 0;
    background-image: linear-gradient(rgba(15, 23, 42, 0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(15, 23, 42, 0.03) 1px, transparent 1px);
    background-size: 44px 44px;
    mask-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), transparent 90%);
    pointer-events: none;
}

.gb-blog-page .gb-blog-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 7px 16px;
    border-radius: 999px;
    background: rgba(37, 99, 235, 0.08);
    border: 1px solid rgba(37, 99, 235, 0.12);
    color: var(--gb-blue);
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 0.8px;
    text-transform: uppercase;
    margin-bottom: 20px;
}

.gb-blog-page .gb-blog-hero h1 {
    font-size: clamp(36px, 5vw, 58px);
    font-weight: 800;
    line-height: 1.1;
    letter-spacing: -1.5px;
    color: var(--gb-ink);
    margin: 0 0 18px;
    max-width: 900px;
    margin-left: auto;
    margin-right: auto;
}

.gb-blog-page .gb-blog-hero h1 span {
    background: var(--gb-grad);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.gb-blog-page .gb-blog-hero p {
    max-width: 720px;
    margin: 0 auto 24px;
    font-size: 17px;
    line-height: 1.7;
    color: var(--gb-muted);
}

.gb-blog-page .gb-blog-breadcrumb {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 8px;
    list-style: none;
    padding: 0;
    margin: 0;
    font-size: 14px;
    font-weight: 600;
}

.gb-blog-page .gb-blog-breadcrumb a {
    color: var(--gb-muted);
    text-decoration: none;
    transition: color 0.2s;
}

.gb-blog-page .gb-blog-breadcrumb a:hover {
    color: var(--gb-blue);
}

.gb-blog-page .gb-blog-breadcrumb li:not(:last-child):after {
    content: "/";
    margin-left: 8px;
    color: #cbd5e1;
}

.gb-blog-page .gb-blog-breadcrumb li:last-child {
    color: var(--gb-ink);
}

.gb-blog-page .gb-blog-section {
    padding: 70px 0 90px;
}

.gb-blog-page .gb-blog-section-head {
    text-align: center;
    max-width: 760px;
    margin: 0 auto 48px;
}

.gb-blog-page .gb-blog-section-head h2 {
    font-size: clamp(28px, 3vw, 38px);
    font-weight: 800;
    color: var(--gb-ink);
    letter-spacing: -0.8px;
    margin: 0 0 12px;
}

.gb-blog-page .gb-blog-section-head p {
    margin: 0;
    color: var(--gb-muted);
    font-size: 16px;
    line-height: 1.7;
}

.gb-blog-page .gb-blog-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 28px;
}

.gb-blog-page .gb-blog-card {
    background: #fff;
    border: 1px solid var(--gb-line);
    border-radius: 24px;
    overflow: hidden;
    box-shadow: 0 12px 32px rgba(15, 23, 42, 0.05);
    transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.gb-blog-page .gb-blog-card:hover {
    transform: translateY(-6px);
    box-shadow: var(--gb-shadow);
    border-color: rgba(37, 99, 235, 0.18);
}

.gb-blog-page .gb-blog-card-image {
    display: block;
    position: relative;
    overflow: hidden;
    aspect-ratio: 16 / 10;
}

.gb-blog-page .gb-blog-card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.35s ease;
}

.gb-blog-page .gb-blog-card:hover .gb-blog-card-image img {
    transform: scale(1.04);
}

.gb-blog-page .gb-blog-card-tag {
    position: absolute;
    left: 16px;
    top: 16px;
    padding: 7px 12px;
    border-radius: 999px;
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 0.4px;
    text-transform: uppercase;
    background: rgba(255, 255, 255, 0.92);
    color: var(--gb-blue);
    border: 1px solid rgba(37, 99, 235, 0.12);
}

.gb-blog-page .gb-blog-card-body {
    padding: 24px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}

.gb-blog-page .gb-blog-meta {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 12.5px;
    font-weight: 600;
    color: var(--gb-muted);
    margin-bottom: 12px;
}

.gb-blog-page .gb-blog-meta span {
    display: flex;
    align-items: center;
    gap: 4px;
}

.gb-blog-page .gb-blog-card-body h3 {
    margin: 0 0 12px;
    font-size: 20px;
    line-height: 1.35;
    font-weight: 800;
    color: var(--gb-ink);
}

.gb-blog-page .gb-blog-card-body h3 a {
    color: inherit;
    text-decoration: none;
}

.gb-blog-page .gb-blog-card-body h3 a:hover {
    color: var(--gb-blue);
}

.gb-blog-page .gb-blog-card-body p {
    margin: 0 0 20px;
    color: var(--gb-muted);
    font-size: 14.5px;
    line-height: 1.6;
}

.gb-blog-page .gb-blog-card-footer {
    margin-top: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-top: 16px;
    border-top: 1px solid var(--gb-line);
}

.gb-blog-page .gb-blog-author {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 13.5px;
    font-weight: 600;
    color: var(--gb-ink);
}

.gb-blog-page .gb-blog-author i {
    font-size: 18px;
    color: var(--gb-blue);
}

.gb-blog-page .gb-blog-card-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: var(--gb-blue);
    font-weight: 800;
    font-size: 14px;
    text-decoration: none;
    transition: gap 0.2s;
}

.gb-blog-page .gb-blog-card-link:hover {
    gap: 12px;
}

.gb-blog-page .gb-blog-cta {
    padding: 90px 20px;
    background:
        radial-gradient(circle at 14% 10%, rgba(225, 48, 108, 0.18), transparent 30%),
        radial-gradient(circle at 88% 8%, rgba(124, 58, 237, 0.2), transparent 30%),
        linear-gradient(135deg, #07111f, #0d1b2f);
    color: #fff;
    text-align: center;
}

.gb-blog-page .gb-blog-cta h2 {
    font-size: clamp(32px, 4vw, 48px);
    font-weight: 800;
    letter-spacing: -1px;
    margin: 0 0 16px;
    color: #fff;
}

.gb-blog-page .gb-blog-cta p {
    max-width: 680px;
    margin: 0 auto 28px;
    color: rgba(255, 255, 255, 0.74);
    font-size: 17px;
    line-height: 1.7;
}

.gb-blog-page .gb-blog-cta-btns {
    display: flex;
    flex-wrap: wrap;
    gap: 14px;
    justify-content: center;
}

.gb-blog-page .gb-blog-btn-main,
.gb-blog-page .gb-blog-btn-outline {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 15px 24px;
    border-radius: 999px;
    font-weight: 800;
    font-size: 15px;
    text-decoration: none;
    transition: 0.25s;
}

.gb-blog-page .gb-blog-btn-main {
    background: var(--gb-grad);
    color: #fff;
    box-shadow: 0 18px 34px rgba(37, 99, 235, 0.24);
}

.gb-blog-page .gb-blog-btn-main:hover {
    transform: translateY(-3px);
    color: #fff;
}

.gb-blog-page .gb-blog-btn-outline {
    background: rgba(255, 255, 255, 0.08);
    color: #fff;
    border: 1px solid rgba(255, 255, 255, 0.22);
}

.gb-blog-page .gb-blog-btn-outline:hover {
    background: #fff;
    color: var(--gb-ink);
}

@media (max-width: 991px) {
    .gb-blog-page .gb-blog-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
}

@media (max-width: 767px) {
    .gb-blog-page .gb-blog-hero {
        padding-top: 120px;
    }
    .gb-blog-page .gb-blog-grid,
    .gb-blog-page .gb-blog-cta-btns {
        grid-template-columns: 1fr;
    }
}
</style>
