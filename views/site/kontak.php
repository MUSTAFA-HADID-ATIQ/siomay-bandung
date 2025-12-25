<?php use yii\helpers\Url; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami - Bang Legend</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #FFD700;
            --dark: #0a0a0a;
            --dark-card: #1a1a1a;
            --text-light: #E0E0E0;
        }
/* NAVBAR */
.navbar { position: fixed; top: 0; left: 0; right: 0; background: transparent; backdrop-filter: none; z-index: 10000; padding: 18px 8%; display: flex; justify-content: space-between; align-items: center; box-shadow: none; border-bottom: none; animation: slideDown 0.5s cubic-bezier(0.4, 0, 0.2, 1); }
@keyframes slideDown { from { transform: translateY(-100%); } to { transform: translateY(0); } }
.navbar-logo { font-family: 'Playfair Display', serif; font-size: 1.6rem; font-weight: 900; color: var(--primary); text-decoration: none; letter-spacing: 2px; text-shadow: 0 0 15px rgba(255, 215, 0, 0.3); }
.navbar-menu { display: flex; gap: 45px; }
.navbar-menu a { color: #E0E0E0; text-decoration: none; font-weight: 500; transition: var(--transition); letter-spacing: 0.5px; font-size: 0.9rem; text-transform: uppercase; }
.navbar-menu a:hover { color: var(--primary); padding-bottom: 5px; border-bottom: 2px solid var(--primary); text-shadow: 0 0 10px rgba(255, 215, 0, 0.3); }

        body { 
            font-family: 'Inter', sans-serif; 
            background: var(--dark); 
            color: var(--text-light); 
            margin: 0;
        }

        .contact-container {
            max-width: 1200px;
            margin: 100px auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
        }

        .contact-info h2 {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .info-box {
            margin-bottom: 40px;
        }

        .info-item {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 25px;
            font-size: 1.1rem;
        }

        .info-item i {
            width: 50px;
            height: 50px;
            background: var(--primary);
            color: var(--dark);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
        }

        .map-wrapper {
            border-radius: 20px;
            overflow: hidden;
            border: 2px solid var(--primary);
            height: 450px;
        }

        .wa-btn {
            display: inline-block;
            background: #25D366;
            color: white;
            padding: 15px 35px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            margin-top: 20px;
            transition: 0.3s;
        }

        .wa-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(37, 211, 102, 0.3);
        }

        @media (max-width: 968px) {
            .contact-container { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <div class="contact-container">
        <div class="contact-info">
            <h2>Hubungi Kami</h2>
            <p style="margin-bottom: 40px;">Ada pertanyaan atau ingin memesan dalam jumlah besar? Tim kami siap melayani Anda dengan sepenuh hati.</p>
            
            <div class="info-box">
                <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Jl. Merdeka No. 123, Bandung, Jawa Barat</span>
                </div>
                <div class="info-item">
                    <i class="fas fa-phone"></i>
                    <span>+62 812-3456-7890</span>
                </div>
                <div class="info-item">
                    <i class="fas fa-envelope"></i>
                    <span>info@banglegend.com</span>
                </div>
            </div>

            <a href="https://wa.me/6281234567890" class="wa-btn">
                <i class="fab fa-whatsapp"></i> Chat WhatsApp Sekarang
            </a>
        </div>

        <div class="map-wrapper">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.56347862248!2d107.5731164!3d-6.9034443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a944448d8ec49!2sBandung%2C%20Kota%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" 
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
        </div>
    </div>

</body>
</html>