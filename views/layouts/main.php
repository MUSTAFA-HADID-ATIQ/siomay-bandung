<?php
use yii\helpers\Html;
use yii\helpers\Url;
use app\assets\AppAsset;

AppAsset::register($this);

$this->beginPage();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Siomay & Batagor Bandung</title>
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            overflow-x: hidden;
        }

        .navbar {
            background: transparent;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: none;
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            z-index: 40;
            transform: translateZ(0);
            transition: all 0.3s ease;
        }

        .navbar::before {
            display: none;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            margin-left: 30px;
            font-weight: 600;
            position: relative;
            transition: all 0.3s ease;
            transform: translateZ(0);
        }

        .navbar a:hover {
            color: #ffd700;
            transform: translateY(-2px) scale(1.05);
            text-shadow: 0 0 10px rgba(255,215,0,0.5);
        }

        .navbar a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: #ffd700;
            transition: width 0.3s ease;
        }

        .navbar a:hover::after {
            width: 100%;
        }

        .brand {
                display: flex;
                align-items: center;
                gap: 14px;
            }

            .brand-logo {
                display: block;
                height: 48px;
                width: auto;
                object-fit: contain;
                border-radius: 6px;
                box-shadow: 0 6px 18px rgba(0,0,0,0.25);
                transition: transform 0.25s ease;
            }

            .brand-text {
                font-size: 22px;
                font-weight: 800;
                color: #fff;
                text-shadow: 1px 1px 3px rgba(0,0,0,0.35);
            }

            .brand-logo:hover { transform: scale(1.03); }

            @media (min-width: 768px) {
                .brand-logo { height: 64px; }
                .brand-text { font-size: 28px; }
            }

        @keyframes glow {
            from { text-shadow: 2px 2px 4px rgba(0,0,0,0.3); }
            to { text-shadow: 2px 2px 4px rgba(0,0,0,0.3), 0 0 20px rgba(255,255,255,0.5); }
        }

        .main-wrapper {
            min-height: 80vh;
            position: relative;
            z-index: 1;
        }

        .footer {
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
            color: #ecf0f1;
            text-align: center;
            padding: 30px;
            box-shadow: 0 -10px 30px rgba(0,0,0,0.3);
            position: relative;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #ffd700, #ff6b6b, #4ecdc4, #45b7d1);
            background-size: 400% 400%;
            animation: gradientShift 4s ease infinite;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Floating animation for navbar */
        .navbar {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-5px); }
        }

        /* 3D effect on hover for brand */
        .brand:hover {
            transform: perspective(1000px) rotateX(10deg) rotateY(10deg);
            transition: transform 0.3s ease;
        }
    </style>
</head>
<body>

<?php $this->beginBody(); ?>

<div class="navbar">
    <div class="brand">
        <?php if (file_exists(Yii::getAlias('@webroot/images/logo.png'))): ?>
            <?= Html::a(Html::img('@web/images/logo.png', ['class' => 'brand-logo', 'alt' => 'Siomay Bandung']), ['site/index']) ?>
        <?php else: ?>
            <?= Html::a('<span class="brand-text">Siomay Bandung</span>', ['site/index']) ?>
        <?php endif; ?>
    </div>
    <div>
        <a href="<?= Url::to(['site/index']) ?>">Home</a>
        <a href="<?= Url::to(['site/menu']) ?>">Menu</a>
        <a href="<?= Url::to(['site/tentang']) ?>">Tentang</a>
        <a href="<?= Url::to(['site/kontak']) ?>">Kontak</a>

        <?php if (Yii::$app->user->isGuest): ?>
            <!-- BELUM LOGIN -->
            <a href="<?= Url::to(['site/login']) ?>">Login</a>
        <?php else: ?>
            <!-- SUDAH LOGIN -->
            <a href="<?= Url::to(['site/logout']) ?>" data-method="post">Logout</a>
        <?php endif; ?>
    </div>
</div>

<div class="main-wrapper">
    <?= $content ?>
</div>

<div class="footer">
    © <?= date('Y') ?> Siomay & Batagor Bandung
</div>

<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>
