<?php use yii\helpers\Url; ?>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
:root {
    --primary: #FFD700;
    --deep: #B86B5A;
    --light: #FFF8DC;
    --accent: #FF6B6B;
    --dark: #0a0a0a;
    --dark-card: #1a1a1a;
    --text-light: #E0E0E0;
    --text-muted: #A0A0A0;
    --bg: #0a0a0a;
    --shadow-soft: 0 8px 32px rgba(255, 215, 0, 0.1);
    --shadow-hover: 0 15px 50px rgba(255, 215, 0, 0.2);
    --transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

* { box-sizing: border-box; margin: 0; padding: 0; }
html { scroll-behavior: smooth; }
body { font-family: 'Inter', sans-serif; background: var(--bg); color: var(--text-light); overflow-x: hidden; line-height: 1.6; }

::-webkit-scrollbar { width: 10px; }
::-webkit-scrollbar-track { background: var(--dark); }
::-webkit-scrollbar-thumb { background: linear-gradient(180deg, var(--primary), var(--deep)); border-radius: 10px; }

.reveal { opacity: 0; transform: translateY(60px); transition: opacity 0.8s ease, transform 0.8s ease; }
.reveal.active { opacity: 1; transform: translateY(0); }
.delay-1 { transition-delay: 0.15s; }
.delay-2 { transition-delay: 0.3s; }
.delay-3 { transition-delay: 0.45s; }

/* HERO */
.hero { height: 100vh; min-height: 650px; position: relative; overflow: hidden; display: flex; align-items: center; justify-content: center; text-align: center; background: radial-gradient(ellipse at center, rgba(255, 215, 0, 0.1) 0%, var(--dark) 100%); }
.hero-slider { position: absolute; inset: 0; z-index: 0; }
.slide { position: absolute; inset: 0; background-size: cover; background-position: center; opacity: 0; transition: opacity 2s ease-in-out; }
.slide { position: absolute; inset: 0; background-size: cover; background-position: center; opacity: 0; transition: opacity 2s ease-in-out; filter: contrast(1.2) saturate(1.15); }
.slide.active { opacity: 1; animation: zoomOut 10s ease-out forwards; }
@keyframes zoomOut { 0% { transform: scale(1.1); } 100% { transform: scale(1); } }

.hero-overlay { position: absolute; inset: 0; background: linear-gradient(180deg, rgba(10, 10, 10, 0.25), rgba(10, 10, 10, 0.35)); backdrop-filter: none; }
.hero-content { position: relative; z-index: 10; max-width: 900px; padding: 0 20px; }

.hero-subtitle { font-size: clamp(0.9rem, 2vw, 1.1rem); letter-spacing: 8px; font-weight: 600; text-transform: uppercase; color: var(--primary); margin-bottom: 20px; text-shadow: 0 0 20px rgba(255, 215, 0, 0.3); }
.hero-title { font-family: 'Playfair Display', serif; font-size: clamp(3.5rem, 12vw, 9rem); font-weight: 900; line-height: 0.9; margin-bottom: 40px; color: var(--primary); text-shadow: 0 0 30px rgba(255, 215, 0, 0.4); animation: titleGlow 3s ease-in-out infinite alternate; }
@keyframes titleGlow { 0% { text-shadow: 0 0 30px rgba(255, 215, 0, 0.3); } 100% { text-shadow: 0 0 50px rgba(255, 215, 0, 0.6); } }

.hero-cta { display: inline-block; padding: 18px 50px; color: var(--dark); background: linear-gradient(135deg, var(--primary), #FFC700); border-radius: 50px; font-weight: 700; font-size: 1rem; letter-spacing: 2px; text-transform: uppercase; box-shadow: 0 10px 40px rgba(255, 215, 0, 0.3); transition: var(--transition); text-decoration: none; position: relative; z-index: 1; }
.hero-cta:hover { transform: translateY(-5px) scale(1.05); box-shadow: 0 20px 60px rgba(255, 215, 0, 0.5); }

/* push CTA lower so it doesn't overlap banner text */
.hero-cta { margin-top: 60px; }

.scroll-indicator { position: absolute; bottom: 40px; left: 50%; transform: translateX(-50%); color: var(--primary); animation: bounce 2s infinite; z-index: 10; font-size: 2rem; opacity: 0.8; text-shadow: 0 0 15px rgba(255, 215, 0, 0.4); }
@keyframes bounce { 0%, 20%, 50%, 80%, 100% { transform: translateY(0); } 40% { transform: translateY(-15px); } 60% { transform: translateY(-7px); } }

/* FEATURES */
.features-bar { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); background: linear-gradient(135deg, rgba(26, 26, 26, 0.8), rgba(10, 10, 10, 0.95)); backdrop-filter: blur(10px); box-shadow: 0 2px 10px rgba(255, 215, 0, 0.1); z-index: 100; border-top: 1px solid rgba(255, 215, 0, 0.1); border-bottom: 1px solid rgba(255, 215, 0, 0.1); }


/* SECTION */
.container { width: min(90%, 1400px); margin: 0 auto; padding: 0 20px; }
.section-title { text-align: center; padding: 70px 0 50px; }
.section-title h2 { font-family: 'Playfair Display', serif; font-size: clamp(2.5rem, 6vw, 4rem); font-weight: 900; margin-bottom: 20px; position: relative; display: inline-block; color: var(--primary); text-shadow: 0 0 20px rgba(255, 215, 0, 0.2); }
.section-title h2::after { content: ''; position: absolute; bottom: -15px; left: 50%; transform: translateX(-50%); width: 80px; height: 5px; background: linear-gradient(90deg, var(--primary), var(--deep), var(--primary)); border-radius: 10px; box-shadow: 0 0 15px rgba(255, 215, 0, 0.3); }
.section-subtitle { color: var(--text-muted); font-size: 1.1rem; margin-top: 30px; max-width: 700px; margin: 30px auto 0; }

/* MENU CARDS */
.best-menu-banner {
    position: relative;
    width: min(90%, 1200px);
    margin: 60px auto; /* sebelumnya 80px */
}

.best-menu-banner img {
    width: 100%;
    display: block;
    border-radius: 20px;
}

/* BUTTON NEMPEL & RAPI */
.order-float-btn {
    position: absolute;
    bottom: 30px; /* sebelumnya -120px */
    left: 60px;
    background: #ff9800;
    color: #111;
    padding: 14px 34px;
    border-radius: 30px;
    font-weight: bold;
    text-decoration: none;
    box-shadow: 0 15px 35px rgba(0,0,0,.4);
    transition: .3s;
}


.order-float-btn:hover {
    transform: translateY(-6px) scale(1.05);
    box-shadow: 0 30px 80px rgba(0,0,0,.7);
}


/* TESTIMONIALS */
.testimonials { background: linear-gradient(135deg, rgba(10, 10, 10, 0.8), rgba(26, 26, 26, 0.6)); padding: 120px 0; margin-top: 100px; border-top: 1px solid rgba(255, 215, 0, 0.1); border-bottom: 1px solid rgba(255, 215, 0, 0.1); }
.testi-track { display: flex; overflow-x: auto; gap: 40px; padding: 30px 20px; scroll-snap-type: x mandatory; scrollbar-width: none; }
.testi-track::-webkit-scrollbar { display: none; }
.testi-item { min-width: 400px; background: rgba(26, 26, 26, 0.7); padding: 40px; border-radius: 20px; scroll-snap-align: center; box-shadow: 0 8px 30px rgba(255, 215, 0, 0.08); transition: var(--transition); border: 1px solid rgba(255, 215, 0, 0.1); backdrop-filter: blur(10px); }
.testi-item::before { content: '★★★★★'; display: block; color: var(--primary); font-size: 1.2rem; margin-bottom: 20px; letter-spacing: 3px; }
.testi-item:hover { transform: translateY(-10px); box-shadow: 0 25px 70px rgba(255, 215, 0, 0.15); border-color: rgba(255, 215, 0, 0.2); }
.testi-item p { font-style: italic; color: var(--text-muted); font-size: 1.05rem; line-height: 1.8; margin-bottom: 30px; }

.testi-user { display: flex; align-items: center; gap: 20px; }
.avatar { width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary), #FFC700); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; color: var(--dark); font-size: 1.5rem; flex-shrink: 0; }
.testi-user strong { display: block; color: var(--text-light); font-size: 1.1rem; margin-bottom: 5px; }



/* FOOTER */
.fab-wa { position: fixed; bottom: 40px; right: 40px; width: 70px; height: 70px; background: linear-gradient(135deg, #25D366, #128C7E); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 2.2rem; text-decoration: none; box-shadow: 0 10px 40px rgba(37, 211, 102, 0.4); z-index: 9999; transition: var(--transition); animation: pulse 2s infinite; }
.fab-wa:hover { transform: scale(1.15) rotate(15deg); box-shadow: 0 15px 50px rgba(37, 211, 102, 0.6); }
@keyframes pulse { 0%, 100% { box-shadow: 0 10px 40px rgba(37, 211, 102, 0.4); } 50% { box-shadow: 0 10px 60px rgba(37, 211, 102, 0.7); } }

footer { background: var(--dark-card); color: #E0E0E0; padding: 100px 8% 40px; position: relative; border-top: 1px solid rgba(255, 215, 0, 0.1); }
footer::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 5px; background: linear-gradient(90deg, var(--primary), var(--deep), var(--primary)); box-shadow: 0 0 20px rgba(255, 215, 0, 0.3); }

.footer-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 60px; margin-bottom: 60px; }
.footer-col h4 { color: var(--primary); margin-bottom: 30px; text-transform: uppercase; letter-spacing: 3px; font-size: 0.9rem; font-weight: 700; text-shadow: 0 0 10px rgba(255, 215, 0, 0.2); }
.footer-col p, .footer-col a { color: #B0B0B0; text-decoration: none; line-height: 2.2; font-size: 0.95rem; transition: var(--transition); display: block; }
.footer-col a:hover { color: var(--primary); padding-left: 10px; text-shadow: 0 0 10px rgba(255, 215, 0, 0.3); }
.footer-col i { margin-right: 10px; color: var(--primary); }

.social-links { display: flex; gap: 20px; margin-top: 25px; }
.social-links a { width: 45px; height: 45px; border-radius: 50%; background: rgba(255, 215, 0, 0.08); display: flex; align-items: center; justify-content: center; font-size: 1.3rem; transition: var(--transition); text-decoration: none; color: inherit; border: 1px solid rgba(255, 215, 0, 0.1); }
.social-links a:hover { background: var(--primary); color: var(--dark); transform: translateY(-5px) rotate(360deg); }

.footer-bottom { border-top: 1px solid rgba(255, 215, 0, 0.1); margin-top: 60px; padding-top: 30px; text-align: center; font-size: 0.9rem; color: #888; }

/* NAVBAR */
.navbar { position: fixed; top: 0; left: 0; right: 0; background: transparent; backdrop-filter: none; z-index: 10000; padding: 18px 8%; display: flex; justify-content: space-between; align-items: center; box-shadow: none; border-bottom: none; animation: slideDown 0.5s cubic-bezier(0.4, 0, 0.2, 1); }
@keyframes slideDown { from { transform: translateY(-100%); } to { transform: translateY(0); } }
.navbar-logo { font-family: 'Playfair Display', serif; font-size: 1.6rem; font-weight: 900; color: var(--primary); text-decoration: none; letter-spacing: 2px; text-shadow: 0 0 15px rgba(255, 215, 0, 0.3); }
.navbar-menu { display: flex; gap: 45px; }
.navbar-menu a { color: #E0E0E0; text-decoration: none; font-weight: 500; transition: var(--transition); letter-spacing: 0.5px; font-size: 0.9rem; text-transform: uppercase; }
.navbar-menu a:hover { color: var(--primary); padding-bottom: 5px; border-bottom: 2px solid var(--primary); text-shadow: 0 0 10px rgba(255, 215, 0, 0.3); }

/* STATISTICS */
.stats-section { background: linear-gradient(135deg, rgba(10, 10, 10, 0.9), rgba(26, 26, 26, 0.7)); padding: 100px 8%; border-top: 1px solid rgba(255, 215, 0, 0.1); border-bottom: 1px solid rgba(255, 215, 0, 0.1); }
.stats-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 50px; max-width: 1200px; margin: 0 auto; }
.stat-item { text-align: center; }
.stat-number { font-family: 'Playfair Display', serif; font-size: 3.5rem; font-weight: 900; color: var(--primary); margin-bottom: 15px; animation: countUp 2s ease-out; letter-spacing: -2px; text-shadow: 0 0 20px rgba(255, 215, 0, 0.3); }
.stat-label { color: #D0D0D0; font-size: 0.95rem; text-transform: uppercase; letter-spacing: 3px; font-weight: 700; }

@keyframes countUp { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }

/* HOW TO ORDER */
.order-steps { padding: 100px 0; background: var(--dark); }
.steps-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 40px; margin-top: 60px; }
.step-card { position: relative; padding: 45px 32px; background: rgba(26, 26, 26, 0.6); border-radius: 20px; text-align: center; transition: var(--transition); border: 1.5px solid rgba(255, 215, 0, 0.1); box-shadow: 0 5px 15px rgba(255, 215, 0, 0.05); backdrop-filter: blur(10px); }
.step-card:hover { transform: translateY(-15px); box-shadow: 0 20px 50px rgba(255, 215, 0, 0.15); border-color: rgba(255, 215, 0, 0.2); background: rgba(26, 26, 26, 0.8); }
.step-number { display: inline-flex; align-items: center; justify-content: center; width: 70px; height: 70px; background: linear-gradient(135deg, var(--primary), #FFC700); color: var(--dark); border-radius: 50%; font-size: 2.1rem; font-weight: 900; margin-bottom: 25px; box-shadow: 0 10px 35px rgba(255, 215, 0, 0.3); letter-spacing: -1px; }
.step-card h4 { font-size: 1.15rem; color: var(--text-light); margin-bottom: 16px; font-weight: 700; letter-spacing: 0.5px; }
.step-card p { color: var(--text-muted); font-size: 0.9rem; line-height: 1.7; }
.step-card::before { content: ''; position: absolute; bottom: -25px; left: 50%; transform: translateX(-50%); width: 3px; height: 40px; background: linear-gradient(180deg, rgba(255, 215, 0, 0.6), transparent); }
.step-card:last-child::before { display: none; }

/* TRUST BADGES */


/* PROMO BANNER */


/* BACK TO TOP */
#backToTop { display: none; position: fixed; bottom: 120px; right: 40px; width: 55px; height: 55px; background: linear-gradient(135deg, var(--primary), #FFC700); border: none; border-radius: 50%; cursor: pointer; font-size: 1.4rem; color: var(--dark); box-shadow: 0 10px 40px rgba(255, 215, 0, 0.4); z-index: 999; transition: var(--transition); font-weight: 700; }
#backToTop:hover { transform: scale(1.2) translateY(-8px); box-shadow: 0 20px 60px rgba(255, 215, 0, 0.6); }
#backToTop.show { display: flex; align-items: center; justify-content: center; }

/* RESPONSIVE */
@media (max-width: 1024px) {
    .navbar { padding: 16px 5%; }
    .navbar-menu { gap: 30px; }
    .container { width: min(95%, 1200px); }
}

@media (max-width: 968px) {
    .hero-title { font-size: clamp(2.5rem, 10vw, 5rem); }
    .section-title { padding: 80px 0 50px; }
    .section-title h2 { font-size: clamp(2rem, 5vw, 3.5rem); }
    .menu-grid { gap: 30px; }
    .testi-item { min-width: 300px; }
    .fab-wa { bottom: 25px; right: 25px; width: 60px; height: 60px; }
    .navbar-menu { gap: 20px; }
    .navbar-menu a { font-size: 0.8rem; gap: 15px; }
    .stat-number { font-size: 2.5rem; }
    .step-card { padding: 30px 20px; }
}

@media (max-width: 768px) {
    .navbar { padding: 14px 4%; }
    .navbar-menu { flex-direction: column; gap: 15px; position: absolute; top: 60px; right: 20px; background: rgba(61, 40, 23, 0.98); padding: 20px; border-radius: 15px; display: none; }
    .menu-grid { grid-template-columns: 1fr; gap: 25px; }
    .testi-item { min-width: 280px; padding: 30px; }
    .step-card { padding: 25px 15px; }
    .stats-grid { gap: 40px; }
    .stat-number { font-size: 2rem; }
    #backToTop { bottom: 30px; right: 20px; width: 50px; height: 50px; }
}

@media (max-width: 640px) {
    .navbar-logo { font-size: 1.3rem; }
    .hero { min-height: 500px; }
    .hero-subtitle { font-size: 0.75rem; letter-spacing: 4px; }
    .hero-title { font-size: clamp(2rem, 8vw, 3.5rem); }
    .hero-cta { padding: 14px 35px; font-size: 0.85rem; margin-top: 30px; }
    .scroll-indicator { font-size: 1.5rem; }
    .section-title { padding: 60px 0 40px; }
    .section-title h2 { font-size: clamp(1.5rem, 4vw, 2.5rem); }
    .menu-grid { grid-template-columns: 1fr; }
    .card-img-wrap { height: 250px; }
    .card-content { padding: 25px; }
    .footer-grid { grid-template-columns: 1fr; gap: 30px; }
    .stats-grid { grid-template-columns: 1fr 1fr; gap: 30px; }
}
</style>
<!-- HERO SECTION -->
 
<!-- HERO SECTION -->
<section class="hero">
    <div class="hero-slider">
        <div class="slide active" style="background-image:url('<?= Url::to('@web/images/BACKGROUND%20NAV.png') ?>')"></div>
    </div>
    <div class="hero-overlay"></div>
    <div class="hero-content">
       <a href="<?= Url::to(['site/menu']) ?>#daftar-menu" class="hero-cta reveal delay-2">Explore Menu</a>
    </div>
    <div class="scroll-indicator"><i class="fas fa-chevron-down"></i></div>
</section>

<!-- STATISTICS SECTION -->
<section class="stats-section reveal" style="background: linear-gradient(135deg, rgba(10, 10, 10, 0.85), rgba(10, 10, 10, 0.9)), url('<?= Url::to('@web/images/SSA.jpg') ?>'); background-size: cover; background-position: center; background-attachment: fixed;">
    <div class="stats-grid">
        <div class="stat-item">
            <div class="stat-number">25K+</div>
            <div class="stat-label">Pelanggan Puas</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">500K+</div>
            <div class="stat-label">Produk Terjual</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">4.9★</div>
            <div class="stat-label">Rating Google</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">25+</div>
            <div class="stat-label">Tahun Berpengalaman</div>
        </div>
    </div>
</section>

<!-- BEST SELLER SECTION -->
<section class="best-menu-banner reveal">
    <img src="<?= Url::to('@web/images/BEST MENU.png') ?>" alt="Best Menu">

    <a
        href="https://wa.me/6281234567890?text=Halo%20saya%20ingin%20pesan%20menu%20best%20seller"
        target="_blank"
        class="order-float-btn"
    >
        Order Now
    </a>
</section>

<!-- HOW TO ORDER -->
<section id="how-order" class="order-steps" style="background: linear-gradient(135deg, rgba(10, 10, 10, 0.85), rgba(10, 10, 10, 0.9)), url('<?= Url::to('@web/images/SSB.jpg') ?>'); background-size: cover; background-position: center; background-attachment: fixed;">
    <div class="container">
        <div class="section-title reveal">
            <h2>Cara Memesan</h2>
            <p class="section-subtitle">Proses pemesanan yang mudah dan cepat hanya dalam 4 langkah</p>
        </div>
        <div class="steps-grid">
            <div class="step-card reveal">
                <div class="step-number">1</div>
                <h4>Pilih Produk</h4>
                <p>Telusuri menu kami dan pilih produk favorit Anda dari Signature Collection.</p>
            </div>
            <div class="step-card reveal delay-1">
                <div class="step-number">2</div>
                <h4>Tentukan Jumlah</h4>
                <p>Tentukan berapa banyak yang ingin Anda pesan dan tambahkan ke keranjang.</p>
            </div>
            <div class="step-card reveal delay-2">
                <div class="step-number">3</div>
                <h4>Hubungi Kami</h4>
                <p>Hubungi melalui WhatsApp atau telepon untuk konfirmasi pesanan dan alamat pengiriman.</p>
            </div>
            <div class="step-card reveal delay-3">
                <div class="step-number">4</div>
                <h4>Nikmati</h4>
                <p>Produk dikirimkan dalam kondisi segar dan siap untuk Anda nikmati bersama keluarga.</p>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS SECTION -->
<section class="testimonials" id="testimonial" style="background: linear-gradient(135deg, rgba(10, 10, 10, 0.85), rgba(10, 10, 10, 0.9)), url('<?= Url::to('@web/images/SSS.jpg') ?>'); background-size: cover; background-position: center; background-attachment: fixed;">
    <div class="container">
        <h2 style="font-family: 'Cinzel', serif; font-size: clamp(2rem, 5vw, 3rem); text-align: center; margin-bottom: 70px;">Testimoni Pelanggan</h2>
        <div class="testi-track">
            <div class="testi-item">
                <p>"Siomay Bang Legend adalah yang terbaik! Rasa autentik Bandung yang saya cari."</p>
                <div class="testi-user">
                    <div class="avatar">BD</div>
                    <div><strong>Budi D.</strong><small>Jakarta</small></div>
                </div>
            </div>
            <div class="testi-item">
                <p>"Pengiriman cepat dan barang sampai dalam kondisi segar. Sangat puas dengan pelayanannya!"</p>
                <div class="testi-user">
                    <div class="avatar">SR</div>
                    <div><strong>Siti R.</strong><small>Bandung</small></div>
                </div>
            </div>
            <div class="testi-item">
                <p>"Resepnya tidak berubah dari dulu, rasanya tetap lezat. Recommended untuk semua!"</p>
                <div class="testi-user">
                    <div class="avatar">AH</div>
                    <div><strong>Ahmad H.</strong><small>Surabaya</small></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHATSAPP FAB -->
<a href="https://wa.me/6281234567890" target="_blank" class="fab-wa" title="Chat via WhatsApp"><i class="fab fa-whatsapp"></i></a>

<!-- BACK TO TOP BUTTON -->
<button id="backToTop" title="Back to Top"><i class="fas fa-arrow-up"></i></button>

<!-- FOOTER -->
<footer>
    <div class="container">
        <div class="footer-grid">
            <div class="footer-col">
                <h4>Bang Legend</h4>
                <p>Siomay Bandung Premium sejak 1999</p>
            </div>
            <div class="footer-col">
                <h4>Menu</h4>
                <a href="#menu"><i class="fas fa-angle-right"></i>Signature Collection</a>
                <a href="#menu"><i class="fas fa-angle-right"></i>Promo Spesial</a>
                <a href="#"><i class="fas fa-angle-right"></i>Paket Custom</a>
            </div>
            <div class="footer-col">
                <h4>Hubungi Kami</h4>
                <p><i class="fas fa-phone"></i>+62 812-3456-7890</p>
                <p><i class="fas fa-envelope"></i>info@banglegend.com</p>
                <p><i class="fas fa-map-marker-alt"></i>Jl. Merdeka No. 123, Bandung</p>
            </div>
            <div class="footer-col">
                <h4>Ikuti Kami</h4>
                <div class="social-links">
                    <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom"><p>&copy; 2024 Bang Legend - Siomay Bandung Terbaik. All Rights Reserved.</p></div>
</footer>

<script>
// Hero Slider
const slides = document.querySelectorAll('.slide');
let currentSlide = 0;
setInterval(() => {
    slides[currentSlide].classList.remove('active');
    currentSlide = (currentSlide + 1) % slides.length;
    slides[currentSlide].classList.add('active');
}, 5000);

// Reveal Animation
const reveals = document.querySelectorAll('.reveal');
function reveal() {
    reveals.forEach(el => {
        const top = el.getBoundingClientRect().top;
        if (top < window.innerHeight - 150) el.classList.add('active');
    });
}
window.addEventListener('scroll', reveal);
reveal();

// Back to Top
const backToTop = document.getElementById('backToTop');
window.addEventListener('scroll', () => {
    if (window.scrollY > 300) {
        backToTop.classList.add('show');
    } else {
        backToTop.classList.remove('show');
    }
});
backToTop.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

// Navbar Smooth Scroll & Active Link
document.querySelectorAll('.navbar-menu a').forEach(link => {
    link.addEventListener('click', function(e) {
        const href = this.getAttribute('href');
        if (href.startsWith('#')) {
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) target.scrollIntoView({ behavior: 'smooth' });
        }
    });
});

// Favorite Icon
document.querySelectorAll('.favorite-icon').forEach(icon => {
    icon.addEventListener('click', function(e) {
        e.preventDefault();
        const i = this.querySelector('i');
        i.classList.toggle('fas');
        i.classList.toggle('far');
    });
});

// Smooth Scroll
document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        target && target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
});

// Order Button
document.querySelectorAll('.order-btn').forEach(btn => {
    btn.addEventListener('click', () => alert('Produk ditambahkan ke keranjang! Silakan lanjutkan ke WhatsApp untuk checkout.'));
});
</script>
