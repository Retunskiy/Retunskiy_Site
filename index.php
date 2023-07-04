<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сайт Портфолио</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
<?php $path = $_SERVER['DOCUMENT_ROOT']; ?>
<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>/style.css">
</head>
<body>
    <div class="header">
        <h1 class="header-title">Галоян Давид</h1>
        <p class="header-subtitle">Студент БГУ им. Петровского</p>
        <div class="header-arrow">
            <img src="./img/header/down.svg" alt="ArrowDown">
        </div>
    </div>

    <div class="portfolio">
        <div class="container">
            <h2 class="portfolio-header">Портфолио</h2>

            <!-- portfolio-cards-wrapper--> 
            <div class="portfolio-cards-wrapper">

            <!-- card 1 -->
            <div class="card">
                <img class="card-img" src="./img/portfolio/dogsandcats_malmal.jpg" alt="Первый Сайт">
                <h3 class="card-title">Магазин с питомцами</h3>
                <p>Верстка многостраничного сайта.</p>
            </div>
            <!-- card 2 -->
            <div class="card">
                <img class="card-img" src="./img/portfolio/magazin_malmal.jpg" alt="Второй Сайт">
                <h3 class="card-title">Магазин украшений</h3>
                <p>Верстка многостраничного сайта.</p>
            </div>
            <!-- card 3 -->
            <div class="card">
                <img class="card-img" src="./img/portfolio/remont_malmal.jpg" alt="Третий Сайт">
                <h3 class="card-title">Ремонт квартиры</h3>
                <p>Верстка многостраничного сайта.</p>
            </div>
            <!-- card 4 -->
            <div class="card">
                <img class="card-img" src="./img/portfolio/targetolog_malmal.jpg" alt="Четвертый Сайт">
                <h3 class="card-title">Личный сайт</h3>
                <p>Верстка многостраничного сайта.</p>
            </div>
        </div>
        <!-- // portfolio-cards-wrapper -->
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="footer-row">
                <div class="footer-copyright footer-col">
                    <div class="footer-copyright-name">© Галоян Давид</div>
                    <p>HTML и разработка сайтов</p>
                </div>
                <div class="footer-icons footer-col">
                    <p>Мои профили в социальных сетях:</p>
                    <div class="footer-icons-row">
                        <a href="#"></a>
                        <img src="./img/icons/instagram.svg" alt="Instagram">
                        <a href="#"></a>
                        <img src="./img/icons/vk.svg" alt="VK">
                        <a href="#"></a>
                        <img src="./img/icons/telegram.svg" alt="Telegram">
                    </div>
                </div>

                <div class="footer-contacts footer-col">
                    <a href="https://vk.com/dgaloian" class="footer-button">
                        Связаться ВКонтакте
                    </a>
                    <p>Напишите мне, чтобы заказать или узнать стоимость вашего проекта.</p>

                </div>
            </div>
        </div>
    </div>
</body>
</html>