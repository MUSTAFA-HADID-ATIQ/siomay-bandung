<?php use yii\helpers\Url; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Bang Legend</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #FFD700;
            --dark: #0a0a0a;
            --dark-card: #1a1a1a;
            --text-light: #E0E0E0;
            --text-muted: #A0A0A0;
        }

        body { 
            font-family: 'Inter', sans-serif; 
            background: var(--dark); 
            color: var(--text-light); 
            line-height: 1.8;
            margin: 0;
        }

        .about-hero {
            height: 60vh;
            background: linear-gradient(rgba(10,10,10,0.7), rgba(10,10,10,0.9)), 
                        url('<?= Url::to("@web/images/SSA.jpg") ?>');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            border-bottom: 2px solid var(--primary);
        }
/* NAVBAR */
.navbar { position: fixed; top: 0; left: 0; right: 0; background: transparent; backdrop-filter: none; z-index: 10000; padding: 18px 8%; display: flex; justify-content: space-between; align-items: center; box-shadow: none; border-bottom: none; animation: slideDown 0.5s cubic-bezier(0.4, 0, 0.2, 1); }
@keyframes slideDown { from { transform: translateY(-100%); } to { transform: translateY(0); } }
.navbar-logo { font-family: 'Playfair Display', serif; font-size: 1.6rem; font-weight: 900; color: var(--primary); text-decoration: none; letter-spacing: 2px; text-shadow: 0 0 15px rgba(255, 215, 0, 0.3); }
.navbar-menu { display: flex; gap: 45px; }
.navbar-menu a { color: #E0E0E0; text-decoration: none; font-weight: 500; transition: var(--transition); letter-spacing: 0.5px; font-size: 0.9rem; text-transform: uppercase; }
.navbar-menu a:hover { color: var(--primary); padding-bottom: 5px; border-bottom: 2px solid var(--primary); text-shadow: 0 0 10px rgba(255, 215, 0, 0.3); }

        .about-hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(3rem, 8vw, 5rem);
            color: var(--primary);
            text-shadow: 0 0 20px rgba(255, 215, 0, 0.3);
        }

        .content-section {
            max-width: 900px;
            margin: -100px auto 100px;
            background: var(--dark-card);
            padding: 60px;
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.5);
            border: 1px solid rgba(255, 215, 0, 0.1);
            position: relative;
            z-index: 10;
        }

        .content-section h2 {
            font-family: 'Playfair Display', serif;
            color: var(--primary);
            margin-bottom: 30px;
            font-size: 2.5rem;
        }

        .highlight {
            color: var(--primary);
            font-weight: 700;
        }

        .mission-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-top: 50px;
        }

        .mission-item {
            padding: 20px;
            border-left: 3px solid var(--primary);
            background: rgba(255, 215, 0, 0.05);
        }

        @media (max-width: 768px) {
            .content-section { margin: -50px 20px 50px; padding: 30px; }
            .mission-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <section class="about-hero">
        <h1>Legacy of Legend</h1>
    </section>

    <div class="content-section">
        <h2>Sejarah Kami</h2>
        <p>Berawal dari tahun <span class="highlight">1999</span> di sudut kota Bandung, <span class="highlight">Bang Legend</span> lahir dari kecintaan akan kuliner tradisional Indonesia. Kami memulai perjalanan dengan resep rahasia keluarga yang menjaga keaslian rasa ikan tenggiri premium dan bumbu kacang yang autentik.</p>
        
        <p>Selama lebih dari dua dekade, kami konsisten mempertahankan standar kualitas tertinggi, menjadikan setiap porsi siomay bukan sekadar makanan, melainkan sebuah warisan rasa yang terus dicintai lintas generasi.</p>

        <div class="mission-grid">
            <div class="mission-item">
                <h3>Visi</h3>
                <p>Menjadi ikon kuliner Nusantara yang menghadirkan kualitas premium tanpa menghilangkan nilai tradisi.</p>
            </div>
            <div class="mission-item">
                <h3>Misi</h3>
                <p>Menjaga bahan baku tetap segar, pelayanan yang hangat, dan inovasi rasa yang tetap menghargai akar budaya.</p>
            </div>
        </div>
    </div>

</body>
</html>