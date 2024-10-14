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
                        <span class="hero__sale"></span>
                    </span>
                </h1>
                <span class="hero__star">
                    <picture>
                        <img class="hero__starImg" src="./img/main_star_1440.png"
                        srcset="
                        ./img/main_star_1440_2x.png 2x,
                        ./img/main_star_1440_3x.png 3x
                        "
                        alt="Изображение">
                    </picture>
                </span>
                <div class="hero__btnBlock flex">
                    <p class="hero__descr">
                        Воспользуйтесь выгодными предложениями от Roistat в ноябре*
                    </p>
                    <button class="hero__btn flex">
                        Получить выгоду
                        <svg width="24" height="18" viewBox="0 0 24 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 8L22 8" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16 1L23 8L16 15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
                <div class="hero__lineBlock">
                    <div class="hero__line hero__line_top flex">
                        <span class="hero__lineStar hero__lineStar_top"></span>
                        <span class="hero__lineTxt hero__lineTxt_top"></span>
                        <span class="hero__lineStar hero__lineStar_top"></span>
                        <span class="hero__lineTxt hero__lineTxt_top"></span>
                        <span class="hero__lineStar hero__lineStar_top"></span>
                        <span class="hero__lineTxt hero__lineTxt_top"></span>
                    </div>
                    <div class="hero__line hero__line_bottom flex">
                        <span class="hero__lineStar hero__lineStar_bottom"></span>
                        <span class="hero__lineTxt hero__lineTxt_bottom"></span>
                        <span class="hero__lineStar hero__lineStar_bottom"></span>
                        <span class="hero__lineTxt hero__lineTxt_bottom"></span>
                        <span class="hero__lineStar hero__lineStar_bottom"></span>
                        <span class="hero__lineTxt hero__lineTxt_bottom"></span>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div class="popup flex">
        <div class="popup__main">
            <div class="popup__titleBlock flex">
                <h2 class="popup__title">Регистрация</h2>
                <button class="popup__close">
                    <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.0014 0L8 6L2 0L0 2L6 8L0 14L2 16L8 10L14.0014 16L16.0014 14L10.0014 8L16.0014 2L14.0014 0Z"/>
                    </svg>
                </button>
            </div>
            <form class="popup__form flex" action="
            form.php" method="post">
                <div class="popup__inputBlock flex">
                    <input class="popup__input" type="text" minlength="2" id="name" for="name" name="name" placeholder="Имя" autocomplete="off" required>
                    <input class="popup__input" type="text" minlength="2" id="company" for="company" name="company" placeholder="Сайт компании" autocomplete="off" required>
                    <input class="popup__input" type="tel" id="tel" name="tel" autocomplete="off" placeholder="Телефон" required>
                </div>
                <button class="popup__btn flex">Получить код</button>
                <label class="popup__checkBlock checkBlock flex">
                    <input class="checkBlock__check" type="checkbox" required>
                    <span class="checkBlock__checkVis flex" role="checkbox" aria-checked="true" aria-label="checkbox"></span>
                    <span class="checkBlock__descr">
                    Отправляя сведения через электронную форму, вы даете согласие на обработку персональных данных, в том числе сбор, хранение и передачу третьим лицам представленной вами информации на условиях <a class="checkBlock__policy" href="#">Политики обработки персональных данных.</a>
                    </span>
                </label>
            </form>
        </div>
    </div>
    <script src="https://unpkg.com/imask"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>