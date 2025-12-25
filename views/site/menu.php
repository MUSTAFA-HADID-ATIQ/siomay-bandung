<?php
/* @var $this yii\web\View */
// INI KUNCINYA: Harus ada baris ini agar error "Url not found" hilang
use yii\helpers\Url;

$this->title = 'Menu - Bang Legend';
?>
    <style>
        /* --- RESET & BASE --- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            color: #ffffff;
            /* GANTI URL DI BAWAH DENGAN GAMBAR BACKGROUND UTAMA ANDA */
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.85)), 
                       url('<?= Url::to('@web/images/SSF.jpg') ?>');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
            overflow-x: hidden;
        }
/* NAVBAR */
.navbar { position: fixed; top: 0; left: 0; right: 0; background: transparent; backdrop-filter: none; z-index: 10000; padding: 18px 8%; display: flex; justify-content: space-between; align-items: center; box-shadow: none; border-bottom: none; animation: slideDown 0.5s cubic-bezier(0.4, 0, 0.2, 1); }
@keyframes slideDown { from { transform: translateY(-100%); } to { transform: translateY(0); } }
.navbar-logo { font-family: 'Playfair Display', serif; font-size: 1.6rem; font-weight: 900; color: var(--primary); text-decoration: none; letter-spacing: 2px; text-shadow: 0 0 15px rgba(255, 215, 0, 0.3); }
.navbar-menu { display: flex; gap: 45px; }
.navbar-menu a { color: #E0E0E0; text-decoration: none; font-weight: 500; transition: var(--transition); letter-spacing: 0.5px; font-size: 0.9rem; text-transform: uppercase; }
.navbar-menu a:hover { color: var(--primary); padding-bottom: 5px; border-bottom: 2px solid var(--primary); text-shadow: 0 0 10px rgba(255, 215, 0, 0.3); }

        .menu-section {
            padding: 80px 20px;
            max-width: 1300px;
            margin: 0 auto;
            position: relative;
        }

        /* --- DEKORASI MELAYANG --- */
        .decor {
            position: absolute;
            font-size: 3rem;
            filter: blur(1px);
            animation: float 6s ease-in-out infinite;
            z-index: -1;
            opacity: 0.6;
        }

        /* --- HEADER --- */
        .header-container {
            text-align: center;
            margin-bottom: 70px;
        }

        .menu-title {
            font-size: clamp(2rem, 6vw, 3.5rem);
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 5px;
            font-family: 'Impact', sans-serif;
            color: #fff;
            text-shadow: 2px 4px 10px rgba(0,0,0,0.5);
        }

        .title-underline {
            width: 150px;
            height: 5px;
            background: linear-gradient(90deg, transparent, #ff5e00, transparent);
            margin: 15px auto;
        }

        /* --- GRID LAYOUT --- */
        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 50px;
            padding: 20px;
        }

        /* --- CARD MENU (GLASSMORPHISM) --- */
        .menu-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding-bottom: 30px;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
        }

        .menu-card:hover {
            transform: translateY(-15px);
            background: rgba(255, 255, 255, 0.1);
            border-color: #ff5e00;
        }

        /* Efek Gambar Sobek Presisi */
        .image-wrapper {
            position: relative;
            margin: -25px auto 25px auto;
            width: 85%;
            background-color: #ff5e00;
            padding: 8px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            clip-path: polygon(
                5% 2%, 25% 0%, 50% 3%, 75% 0%, 95% 2%, 
                100% 20%, 98% 50%, 100% 80%, 95% 98%, 
                75% 95%, 50% 100%, 25% 95%, 5% 98%, 
                0% 80%, 2% 50%, 0% 20%
            );
        }

        .image-wrapper img {
            width: 100%;
            display: block;
            object-fit: cover;
            aspect-ratio: 1/1;
            clip-path: inherit;
        }

        /* Badge Harga */
        .price-tag {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #ff5e00;
            padding: 5px 15px;
            border-radius: 5px;
            font-weight: bold;
            font-size: 1.1rem;
            transform: rotate(5deg);
            box-shadow: 2px 2px 10px rgba(0,0,0,0.3);
        }

        /* --- TEXT CONTENT --- */
        .info-container {
            padding: 0 25px;
            text-align: center;
        }

        .menu-name {
            font-size: 1.6rem;
            color: #ff5e00;
            margin-bottom: 12px;
            text-transform: uppercase;
            font-weight: 800;
            letter-spacing: 1px;
        }

        .menu-desc {
            font-size: 0.95rem;
            color: #e0e0e0;
            line-height: 1.6;
            margin-bottom: 20px;
            min-height: 60px;
        }

        /* --- STOCK & BUTTON --- */
        .stock-box {
            background: rgba(0,0,0,0.3);
            display: inline-block;
            padding: 5px 15px;
            border-radius: 10px;
            font-size: 0.8rem;
            margin-bottom: 25px;
            border-left: 3px solid #ff5e00;
        }

        .btn-buy {
            display: block;
            width: 80%;
            margin: 0 auto;
            background: linear-gradient(135deg, #ff5e00, #ff8c00);
            color: white;
            border: none;
            padding: 15px;
            border-radius: 12px;
            font-weight: bold;
            text-transform: uppercase;
            cursor: pointer;
            transition: 0.3s;
            box-shadow: 0 5px 15px rgba(255, 94, 0, 0.4);
        }

        .btn-buy:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 25px rgba(255, 94, 0, 0.6);
        }

        .btn-buy:active {
            transform: scale(0.95);
        }

        /* Responsif */
        @media (max-width: 480px) {
            .menu-grid { grid-template-columns: 1fr; }
            .menu-card { margin-top: 30px; }
        }
    </style>
</head>
<body>

<section class="menu-section">
    
    <div class="decor" style="top: 10%; left: 5%;">🌶️</div>
    <div class="decor" style="top: 50%; right: 5%; animation-delay: 2s;">🌿</div>
    <div class="decor" style="bottom: 10%; left: 10%; animation-delay: 4s;">🥬</div>

    <div class="header-container">
        <h2 class="menu-title">ALL MENUS IN OUR RESTAURANT</h2>
        <div class="title-underline"></div>
    </div>

    <div class="menu-grid">
        
        <div class="menu-card">
            <div class="image-wrapper">
           <img src="<?= Url::to('@web/images/menu1.jpg') ?>" alt="Siomay Legend">
        </div>
            <div class="info-container">
                <span class="price-tag">Rp 25k</span>
                <h3 class="menu-name">Siomay Ori</h3>
                <p class="menu-desc">Ikan tenggiri asli dengan campuran bumbu rahasia yang dikukus sempurna.</p>
                <div class="stock-box">STOK TERSEDIA: 42 Porsi</div>
                <button class="btn-buy">Tambah Ke Keranjang</button>
            </div>
        </div>

        <div class="menu-card">
            <div class="image-wrapper">
                   <img src="<?= Url::to('@web/images/menu2.png') ?>" alt="batagor">
            </div>
            <div class="info-container">
                <span class="price-tag">Rp 28k</span>
                <h3 class="menu-name">Batagor Mix</h3>
                <p class="menu-desc">Kombinasi tahu dan bakso goreng renyah dengan siraman saus kacang pedas manis.</p>
                <div class="stock-box" style="border-left-color: #f1c40f;">STOK MENIPIS: 8 Porsi</div>
                <button class="btn-buy">Tambah Ke Keranjang</button>
            </div>
        </div>

        <div class="menu-card">
            <div class="image-wrapper">
                   <img src="<?= Url::to('@web/images/SSB.jpg') ?>" alt="Bakso Tahu">
            </div>
            <div class="info-container">
                <span class="price-tag">Rp 30k</span>
                <h3 class="menu-name">Bakso Tahu</h3>
                <p class="menu-desc">Tahu sutra lembut dengan isian daging sapi/ikan yang kenyal dan kaya rasa.</p>
                <div class="stock-box">STOK TERSEDIA: 15 Porsi</div>
                <button class="btn-buy">Tambah Ke Keranjang</button>
            </div>
        </div>

    </div>
</section>

</body>
</html>