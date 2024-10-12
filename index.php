<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roistat</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
</head>
<body>
    <header class="header">
        <div class="container header__container">
            <div class="header__main flex">
                <a href="#" class="header__logo">
                    <picture>
                    <img class="header__logoImg" class="hero__starImg" src="./img/logo.png"
                        srcset="
                        ./img/logo_2x.png 2x,
                        ./img/logo_3x.png 3x
                        "
                        alt="Изображение товара">
                    </picture>
                </a>
                <div class="header__btnBlock flex">
                    <button class="header__btn header__btn_offer">Наши предложения</button>
                    <button class="header__btn header__btn_price">Цены</button>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="hero">
            <div class="container hero__container">
                <h1 class="hero__title">
                    <span class="hero__titleBlack">
                        <span class="hero__ellipse hero__ellipse_one"></span>
                        черная
                        <span class="hero__ellipse hero__ellipse_two"></span>
                    </span>
                    <span class="hero__titleFriday">
                        пятница
                    </span>
                </h1>
                <span class="hero__star">
                    <picture>
                        <img class="hero__starImg" src="./img/main_star_1440.png"
                        srcset="
                        ./img/main_star_1440_2x.png 2x,
                        ./img/main_star_1440_3x.png 3x
                        "
                        alt="Изображение товара">
                    </picture>
                </span>
            </div>
        </section>
    </main>
</body>
</html>