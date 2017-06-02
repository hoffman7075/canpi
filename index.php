<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <!-- Mobile Stuff -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-tap-highlight" content="no">

    <!-- Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Canpi.ru - Печать и изготовление холстов и модульных картин на подрамнике">
    <link rel="icon" sizes="192x192" href="img/favicon.ico">

    <!-- Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Canpi.ru - Печать и изготовление холстов и модульных картин на подрамнике">
    <link rel="apple-touch-icon" href="img/favicon.ico">

    <!-- Windows 8 -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">


    <meta name="theme-color" content="#000000">

    <link rel="shortcut icon" href="img/favicon.ico">

    <meta name="google-site-verification" content="lYzV4Xw6E4MtgF4o7s-NfNels3M98ImZJ-1Mhl8dR2E">
    <meta name="yandex-verification" content="5f1066357b784a4c">

    <meta name="keywords" content="Печать на холсте, модульные картины, холсты на заказ, изготовление холстов на подрамнике, холсты, печать холстов. холсты на заказ" />
    <meta name="description" content="Canpi.ru - Печать и изготовление холстов и модульных картин на подрамнике на заказ в Челябинске" />
    <meta name="generator" content="prospekt-print" />
    <title>Canpi.ru - Печать и изготовление холстов и модульных картин на подрамнике</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/colorbox.css">
</head>

<body>
<!-- Insert your HTML here -->

    <div class="modal-form modal">
        <img src="img/close-modal.png" alt="close" class="close-modal">
        <form action="http://ts-chel.ru/canpi/mail.php" method="post" enctype="multipart/form-data">
           <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
            <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
            <p>Печать на натуральном<br>холсте <span>от 490 рублей</span></p>
            <input type="text" placeholder="Имя" name="name">
            <input class="form-telephone" type="text"  name="telephone" placeholder="+7(   )      -      -" required>
            <textarea name="comment" placeholder="Дополнительная информация, размер полотна и т.д."></textarea>
            <label for="inputFile">
                <img src="img/skrepka.png" alt="">
                <span>Прикрепить изображение</span>
                <input type="file" name="inputFile" class="inputFile" id="inputFile">
            </label>
            <input type="submit" class="yellow-button" value="Заказать">
        </form>
        <div class="after-send">
            <p>Спасибо за обращение!</p>
            <p>Мы свяжемся с вами в<br>ближайшее время.</p>
            <button class="yellow-button">Ok</button>
        </div>
    </div>

    <div class="modal-payment modal">
        <img src="img/close-modal.png" alt="close" class="close-modal">
        <div class="modal-payment__wrapper">
            <h2>Способы оплаты</h2>
            <h3>Оплата наличными или банковской картой в офисе <br>
                типографии или курьеру в случае доставки</h3>
            <p>Произвести оплату за услуги типографии можно наличными деньгами или банковской картой через терминал с
                выдачей квитанции строгой отчётности (КСО).</p>

            <div class="modal-payment__columns">
                <div class="modal-payment__columns__column">
                    <h3>Удаленная оплата</h3>
                    <p>— c банковских карт Visa, MasterCard и Maestro</p>
                    <p>— наличными (через терминалы и салоны связи)</p>
                    <p>— электронными деньгами (Яндекс.Деньги, Qiwi и WebMoney)</p>
                    <p>— о счёта мобильного</p>
                    <p>— через интернет-банк (Сбербанк Онлайн, Альфа-Клик, <br>
                        интернет-банк Промсвязьбанка, MasterPass)</p>
                    <p>— с помощью займа (сервисы КупиВкредит и Куппи.ру)</p>
                </div>
                <div class="modal-payment__columns__column">
                    <iframe class="iframe lazy" src="https://money.yandex.ru/fastpay/form/64f521a8b99449c5aa38c761f9b2ea18" data-src="" width="500" height="341" style="border: 1px solid #e8e8e8;"></iframe>
                </div>
            </div>

            <h3>Безналичная оплата для юридических лиц</h3>
            <p>После оформления заказа мы сформируем и пришлем вам счет. Как только поступит оплата на счет типографии, вы сможете
                забрать полиграфическую продукцию. Все необходимые для бухгалтерии документы (оригинал счёта на оплату, накладная)
                выдаются вместе с заказом. При получении заказа Вам необходимо иметь доверенность, либо печать организации и паспорт.
            </p>

            <h3>Перевод денежных средств на карту Сбербанка</h3>
            <p>Данный способ оплаты возможен только для физических лиц.</p>
        </div>
    </div>

    <div id="overlay"></div>

    <header class="header">
        <div class="wrapper header__wrapper">
            <div class="header__logo">
                <a href="#">
                    <img src="img/logo-canpi.png" alt="canpi">
                </a>
            </div>
            <div id="nav-icon4">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav class="header__nav" role="navigation">
                <ul>
                    <li><a href="#uslugi">Услуги</a></li>
                    <li><a href="#how-we-work">Как мы работаем</a></li>
                    <li><a href="#price">Цены/материалы</a></li>
                    <li class="header__nav__dropdown">
                        <a href="#constructor">Конструктор</a>
                        <div class="header__nav__dropdown__content">
                            <a href="#constructor" onclick="$('.constructor__tabs__tab.first').click();">
                                Печать на холстах
                            </a>
                            <a href="#constructor" onclick="$('.constructor__tabs__tab.second').click();">
                                Модульные картины
                            </a>
                        </div>
                    </li>
                    <li><a href="#about">О нас</a></li>
                    <li><a href="#testimonials">Отзывы</a></li>
                    <li><a href="#map">Контакты</a></li>
                </ul>
            </nav>
            <div class="header__telephone">
                <a href="tel:+73512420250" class="header__telephone__tel">+7 (351) 242-02-50</a>
                <button class="header__telephone__button">
                    Заказать звонок
                </button>
            </div>
        </div>
    </header>

    <section class="slider">
        <div class="wrapper">
            <div class="owl-carousel main-slider">
                <div>
                    <div class="main-slider__left slide-1">
                        <img src="img/slide-1-image.png" alt="">
                    </div>
                </div>
                <div>
                    <div class="main-slider__left">
                        <a href="#module-kartiny">
                            <img src="img/slide-2-image.png" alt="">
                        </a>
                    </div>
                </div>
                <div>
                    <div class="main-slider__left">
                        <a href="#price">
                            <img src="img/slide-3-image.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="modal-form">
                <form action="/mail.php" enctype="multipart/form-data">
                    <p>Печать на натуральном<br>холсте <span>от 490 рублей</span></p>
                    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
                    <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
                    <input type="text" placeholder="Имя" name="name">
                    <input class="form-telephone" type="text" name="telephone" placeholder="+7(   )      -      -" required>
                    <label for="inputFile">
                        <img src="img/skrepka.png" alt="">
                        <span>Прикрепить изображение</span>
                        <input type="file" name="inputFile" class="inputFile" id="inputFile">
                    </label>
                    <input type="submit" class="yellow-button" value="Заказать">
                </form>
                <div class="after-send">
                    <p>Спасибо за обращение!</p>
                    <p>Мы свяжемся с вами в<br>ближайшее время.</p>
                    <button class="yellow-button">Ok</button>
                </div>
            </div>
        </div>
        <div class="scroll-down">
            <div class="scroll-down__point"></div>
        </div>
    </section>

    <section class="video">
        <div class="wrapper video__wrapper">
            <h2>Безупречная печать</h2>
            <div class="video__wrapper__items">
                <div class="video__wrapper__item">
                    <div class="video__wrapper__item__image">
                        <img src="img/icon-print-1.png" alt="">
                    </div>
                    <div class="video__wrapper__item__text">
                        <p>
                            Производится на<br>профессиональном<br>оборудовании
                        </p>
                    </div>
                </div>
                <div class="video__wrapper__item">
                    <div class="video__wrapper__item__image">
                        <img src="img/icon-print-2.png" alt="">
                    </div>
                    <div class="video__wrapper__item__text">
                        <p>
                            Используем только<br>качественные материалы
                        </p>
                    </div>
                </div>
                <div class="video__wrapper__item">
                    <div class="video__wrapper__item__image">
                        <img src="img/icon-print-3.png" alt="">
                    </div>
                    <div class="video__wrapper__item__text">
                        <p>
                            Наши краски абсолютно<br>безвредны и не имеют<br>запаха
                        </p>
                    </div>
                </div>
                <div class="video__wrapper__item">
                    <div class="video__wrapper__item__image">
                        <img src="img/icon-print-4.png" alt="">
                    </div>
                    <div class="video__wrapper__item__text">
                        <p>
                            Высокая устойчивость<br>изображения к выцветанию,<br>царапинам, влаге
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <video class="video__bg" playsinline="" autoplay="" muted="" loop="">
            <source src="video/print_holst.webm" type="video/webm">
            <source src="video/print_holst.mp4" type="video/mp4">
        </video>
    </section>

    <section class="uslugi" id="uslugi">
        <div class="wrapper uslugi__wrapper">
            <h2>Наши услуги</h2>
            <div class="uslugi__wrapper__blocks">
                <div class="uslugi__wrapper__block">
                    <div class="uslugi__wrapper__block__wrapper">
                        <div class="uslugi__wrapper__block__wrapper__image">
                            <img src="img/uslugi-photo-1.png" alt="">
                        </div>
                        <div class="uslugi__wrapper__block__wrapper__title">
                            <h3>Фотографии на<br>холсте</h3>
                        </div>
                        <div class="uslugi__wrapper__block__wrapper__buttons">
                            <a class="yellow-button openmodal" href="javascript:void(0)">Заказать</a>
                            <button class="uslugi__wrapper__block__wrapper__gallery foto-na-holste">Примеры работ</button>
                        </div>
                    </div>
                </div>
                <div class="uslugi__wrapper__block">
                    <div class="uslugi__wrapper__block__wrapper">
                        <div class="uslugi__wrapper__block__wrapper__image">
                            <img src="img/uslugi-photo-2.png" alt="">
                        </div>
                        <div class="uslugi__wrapper__block__wrapper__title">
                            <h3>Портреты на<br>холсте</h3>
                        </div>
                        <div class="uslugi__wrapper__block__wrapper__buttons">
                            <a class="yellow-button openmodal" href="javascript:void(0)">Заказать</a>
                            <button class="uslugi__wrapper__block__wrapper__gallery portret-na-holste">Примеры работ</button>
                        </div>
                    </div>
                </div>
                <div class="uslugi__wrapper__block">
                    <div class="uslugi__wrapper__block__wrapper">
                        <div class="uslugi__wrapper__block__wrapper__image">
                            <img src="img/uslugi-photo-3.png" alt="">
                        </div>
                        <div class="uslugi__wrapper__block__wrapper__title">
                            <h3>Холст в<br>подарок</h3>
                        </div>
                        <div class="uslugi__wrapper__block__wrapper__buttons">
                            <a class="yellow-button openmodal" href="javascript:void(0)">Заказать</a>
                            <button class="uslugi__wrapper__block__wrapper__gallery holst-v-podarok">Примеры работ</button>
                        </div>
                    </div>
                </div>
                <div class="uslugi__wrapper__block">
                    <div class="uslugi__wrapper__block__wrapper">
                        <div class="uslugi__wrapper__block__wrapper__image">
                            <img src="img/uslugi-photo-4.png" alt="">
                        </div>
                        <div class="uslugi__wrapper__block__wrapper__title">
                            <h3>Модульные<br>картины</h3>
                        </div>
                        <div class="uslugi__wrapper__block__wrapper__buttons">
                            <a class="yellow-button openmodal" href="javascript:void(0)">Заказать</a>
                            <button class="uslugi__wrapper__block__wrapper__gallery modul-kartiny">Примеры работ</button>
                        </div>
                    </div>
                </div>
                <div class="uslugi__wrapper__block">
                    <div class="uslugi__wrapper__block__wrapper">
                        <div class="uslugi__wrapper__block__wrapper__image">
                            <img src="img/uslugi-photo-5.png" alt="">
                        </div>
                        <div class="uslugi__wrapper__block__wrapper__title">
                            <h3>Холсты для<br>семьи</h3>
                        </div>
                        <div class="uslugi__wrapper__block__wrapper__buttons">
                            <a class="yellow-button openmodal" href="javascript:void(0)">Заказать</a>
                            <button class="uslugi__wrapper__block__wrapper__gallery holst-dlya-semyi">Примеры работ</button>
                        </div>
                    </div>
                </div>
                <div class="uslugi__wrapper__block">
                    <div class="uslugi__wrapper__block__wrapper">
                        <div class="uslugi__wrapper__block__wrapper__image">
                            <img src="img/uslugi-photo-6.png" alt="">
                        </div>
                        <div class="uslugi__wrapper__block__wrapper__title">
                            <h3>Холсты<br>интерьера</h3>
                        </div>
                        <div class="uslugi__wrapper__block__wrapper__buttons">
                            <a class="yellow-button openmodal" href="javascript:void(0)">Заказать</a>
                            <button class="uslugi__wrapper__block__wrapper__gallery holst-interier">Примеры работ</button>
                        </div>
                    </div>
                </div>
                <div class="uslugi__wrapper__block">
                    <div class="uslugi__wrapper__block__wrapper">
                        <div class="uslugi__wrapper__block__wrapper__image">
                            <img src="img/uslugi-photo-7.png" alt="">
                        </div>
                        <div class="uslugi__wrapper__block__wrapper__title">
                            <h3>Фотоколлаж на<br>холсте</h3>
                        </div>
                        <div class="uslugi__wrapper__block__wrapper__buttons">
                            <a class="yellow-button openmodal" href="javascript:void(0)">Заказать</a>
                            <button class="uslugi__wrapper__block__wrapper__gallery fotokollaj-na-holste">Примеры работ</button>
                        </div>
                    </div>
                </div>
                <div class="uslugi__wrapper__block">
                    <div class="uslugi__wrapper__block__wrapper">
                        <div class="uslugi__wrapper__block__wrapper__image">
                            <img src="img/uslugi-photo-8.png" alt="">
                        </div>
                        <div class="uslugi__wrapper__block__wrapper__title">
                            <h3>Фотомонтаж на<br>холсте</h3>
                        </div>
                        <div class="uslugi__wrapper__block__wrapper__buttons">
                            <a class="yellow-button openmodal" href="javascript:void(0)">Заказать</a>
                            <button class="uslugi__wrapper__block__wrapper__gallery fotomontaj-na-holste">Примеры работ</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="how-we-work" id="how-we-work">
        <div class="wrapper how-we-work__wrapper">
            <h2>Как мы работаем</h2>
            <div class="how-we-work__wrapper__steps">
                <div class="how-we-work__wrapper__step">
                    <div class="how-we-work__wrapper__step__image">
                        <img src="img/how-we-work-1.png" alt="">
                    </div>
                    <div class="how-we-work__wrapper__step__text">
                        <p>
                            Обсуждаем ваш<br>
                            заказ и подбираем<br>
                            материалы
                        </p>
                    </div>
                </div>
                <div class="how-we-work__wrapper__step">
                    <div class="how-we-work__wrapper__step__image">
                        <img src="img/how-we-work-2.png" alt="">
                    </div>
                    <div class="how-we-work__wrapper__step__text">
                        <p>
                            Изготавливаем<br>
                            изделие до<br>
                            двух дней
                        </p>
                    </div>
                </div>
                <div class="how-we-work__wrapper__step">
                    <div class="how-we-work__wrapper__step__image">
                        <img src="img/how-we-work-3.png" alt="">
                    </div>
                    <div class="how-we-work__wrapper__step__text">
                        <p>
                            Бесплатно доставляем<br>
                            ваш заказ в черте<br>
                            г. Челябинска
                        </p>
                    </div>
                </div>
                <div class="how-we-work__wrapper__step">
                    <div class="how-we-work__wrapper__step__image">
                        <img src="img/how-we-work-4.png" alt="">
                    </div>
                    <div class="how-we-work__wrapper__step__text">
                        <p>
                            Оплачиваете<br>
                            одним из доступных<br>
                            <a href="javascript:void(0)">способов</a>
                        </p>
                    </div>
                </div>
                <div class="how-we-work__wrapper__step">
                    <div class="how-we-work__wrapper__step__image">
                        <img src="img/how-we-work-5.png" alt="">
                    </div>
                    <div class="how-we-work__wrapper__step__text">
                        <p>
                            Гарантируем качество.<br>
                            Вернем 100% если<br>
                            не понравится
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="prices" id="price">
        <div class="wrapper prices__wrapper">
            <div class="prices__wrapper__blocks">
                <div class="prices__wrapper__block">
                    <div class="prices__wrapper__block__title">
                        <span>
                            Стандартные размеры <br>холстов:
                        </span>
                    </div>
                    <div class="prices__wrapper__block__content">
                        <div class="prices__wrapper__block__content__sizes">
                            <div class="prices__wrapper__block__content__sizes__size">
                                <span>20х30</span>
                                <span>690 рублей</span>
                            </div>
                            <div class="prices__wrapper__block__content__sizes__size">
                                <span>30х30</span>
                                <span>790 рублей</span>
                            </div>
                            <div class="prices__wrapper__block__content__sizes__size">
                                <span>30х40</span>
                                <span>890 рублей</span>
                            </div>
                            <div class="prices__wrapper__block__content__sizes__size">
                                <span>40х40</span>
                                <span>1150 рублей</span>
                            </div>
                            <div class="prices__wrapper__block__content__sizes__size">
                                <span>40х50</span>
                                <span>1250 рублей</span>
                            </div>
                            <div class="prices__wrapper__block__content__sizes__size">
                                <span>50х50</span>
                                <span>1500 рублей</span>
                            </div>
                            <div class="prices__wrapper__block__content__sizes__size">
                                <span>40х60</span>
                                <span>1350 рублей</span>
                            </div>
                            <div class="prices__wrapper__block__content__sizes__size">
                                <span>60х60</span>
                                <span>1800 рублей</span>
                            </div>
                            <div class="prices__wrapper__block__content__sizes__size">
                                <span>50х60</span>
                                <span>1500 рублей</span>
                            </div>
                            <div class="prices__wrapper__block__content__sizes__size">
                                <span>50х70</span>
                                <span>1800 рублей</span>
                            </div>
                            <div class="prices__wrapper__block__content__sizes__size">
                                <span>60х80</span>
                                <span>2100 рублей</span>
                            </div>
                            <div class="prices__wrapper__block__content__sizes__size">
                                <span>70х100</span>
                                <span>2700 рублей</span>
                            </div>
                            <div class="prices__wrapper__block__content__sizes__size">
                                <span>80х120</span>
                                <span>3200 рублей</span>
                            </div>
                        </div>
                    </div>
                    <div class="button">
                        <button class="yellow-button openmodal">Заказать</button>
                    </div>
                </div>
                <div class="prices__wrapper__block">
                    <div class="prices__wrapper__block__title">
                        <span>
                            Индивидуальные<br>размеры печати холстов:
                        </span>
                    </div>
                    <div class="prices__wrapper__block__content">
                        <img src="img/canvas-sizes.png" alt="размеры холстов" class="prices__wrapper__block__content__canvas">
                        <p>Наша компания напечатает и
                            изготовит холст по вашим
                            размерам. </p>
                        <p>Для справки: ширина холста может
                            достигать 1600 мм, а длина
                            до 30 метров. Заказать холст с
                            индивидуальными размерами.</p>
                    </div>
                    <div class="button">
                        <button class="yellow-button openmodal">Рассчитать стоимость</button>
                    </div>
                </div>
                <div class="prices__wrapper__block">
                    <div class="prices__wrapper__block__title">
                        <span>
                            Материалы, <br>
                            используемые для <br>
                            печати холстов:
                        </span>
                    </div>
                    <div class="prices__wrapper__block__content">
                        <img src="img/materials.png" alt="материалы" class="prices__wrapper__block__content__materials">
                        <p>Для печати мы используем лучшие
                            расходные материалы, поставляемые
                            компанией WEMATEC.</p>
                        <p>На ваш выбор мы напечатаем на
                            глянцевом или матовом холсте.</p>
                    </div>
                    <div class="button">
                        <button class="yellow-button obrazcy-matrialov">Посмотреть образцы</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="images-constructor">
        <div class="wrapper images-constructor__wrapper">
            <h2>
                Примеры картин напечатанные в нашей компании
            </h2>
            <span>Печать на холстах</span>
            <div class="images-constructor__wrapper__images">
                <?php
                    $directory = "img/primery-kartin/na-holstah/";
                        
                    $images = glob($directory."*.*");
                    foreach($images as $image) { ?>
                        <a class="images-constructor__wrapper__image group1" href="<?php echo $image; ?>">
                            <img src="<?php echo $image; ?>" alt="">
                            <span class="overlay">
                                <img src="img/zoom.png" alt="">
                            </span>
                        </a>
                        <?php
                    }
                ?>
            </div>
            <span>Модульные картины</span>
            <div class="images-constructor__wrapper__images">
                <?php
                    $directory = "img/primery-kartin/modul-kartiny/";
                        
                    $images = glob($directory."*.*");
                    foreach($images as $image) { ?>
                        <a class="images-constructor__wrapper__image group2" href="<?php echo $image; ?>">
                            <img src="<?php echo $image; ?>" alt="">
                            <span class="overlay">
                                <img src="img/zoom.png" alt="">
                            </span>
                        </a>
                        <?php
                    }
                ?>
            </div>
        </div>
    </section>
    
    <section class="module-kartiny" id="module-kartiny">
        <div class="wrapper">
            <h2>Модульные картины</h2>
            <div class="module-kartiny__text">
                <p>Прекрасный выбор для тех, кто хочет добавить уникальности в интерьер своими руками. Именно при помощи данного элемента декора, вы сможете без особых финансовых затрат и усилий придать индивидуальность любому помещению, будь то спальня, гостиная или прихожая. Главной особенностью этого вида картин является то, что по своей сути это несколько элементов, комбирующихся в одно целое произведение.</p>
            </div>
            <div class="button">
                <button class="yellow-button openmodal">Заказать</button>
            </div>
        </div>
    </section>

    <section class="constructor" id="constructor">
        <div class="wrapper">
            <h2>Конструктор</h2>
            <a href="#" class="constructor__videoinstruction">Видеоинструкция</a>
        </div>
        <div class="constructor__tabs">
            <div class="constructor__tabs__tab first" onclick="openConstructor(event, 'printholst')" id="defaultOpenConstructor">
                <span>Печать на холстах</span>
            </div>
            <div class="constructor__tabs__tab second" onclick="openConstructor(event, 'moduleholst')">
                <span>Модульные картины</span>
            </div>
        </div>
        <div class="constructor__wrapper">
            <div class="wrapper">
                <div id="printholst" class="constructor__wrapper__content">
                    <iframe class="lazy" data-src="" src="https://cosuv.ru/app/173#base=12;model=6;color=0;btn-color=0;btn-base=0;btn-model=1;" style="width:100%;height:600px;" frameborder="0" allowfullscreen></iframe>
                </div>
                <div id="moduleholst" class="constructor__wrapper__content">
                    <iframe class="lazy" data-src="" src="https://cosuv.ru/app/173#base=13;model=6;color=0;btn-color=0;btn-base=0;btn-model=1;" style="width:100%;height:600px;" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="images-constructor">
        <div class="wrapper images-constructor__wrapper">
            <h2>
                Ваши картины созданные с помощью конструктора
            </h2>
            <span>Печать на холстах</span>
            <div class="images-constructor__wrapper__images">
                <?php
                    $directory = "img/primery-kartin/na-holstah-constructor/";
                        
                    $images = glob($directory."*.*");
                    foreach($images as $image) { ?>
                        <a class="images-constructor__wrapper__image group3" href="<?php echo $image; ?>">
                            <img src="<?php echo $image; ?>" alt="">
                            <span class="overlay">
                                <img src="img/zoom.png" alt="">
                            </span>
                        </a>
                        <?php
                    }
                ?>
            </div>
            <span>Модульные картины</span>
            <div class="images-constructor__wrapper__images">
                <?php
                    $directory = "img/primery-kartin/modul-kartiny-constructor/";
                        
                    $images = glob($directory."*.*");
                    foreach($images as $image) { ?>
                        <a class="images-constructor__wrapper__image group4" href="<?php echo $image; ?>">
                            <img src="<?php echo $image; ?>" alt="">
                            <span class="overlay">
                                <img src="img/zoom.png" alt="">
                            </span>
                        </a>
                        <?php
                    }
                ?>
            </div>
        </div>
    </section>

    <section class="about-us" id="about">
        <div class="wrapper about-us__wrapper">
            <h2>О нас</h2>
            <div class="about-us__wrapper__blocks">
                <div class="about-us__wrapper__block">
<!--                    <span>Seo текст</span>-->
                    <p>
                        Обыкновенное изображение, напечатанное на холсте станет стильным дизайнерским предметом! Ваши любимые фотографии на холсте заиграют по-новому, создадут особенную, неповторимую атмосферу помещения, подчеркнут вашу индивидуальность и чувство стиля. Также фотопечать на холсте - это отличный подарок, который подойдет для оформления жилых помещений, офисов или кафе в классическом или современном стиле.
                    </p>
                    <p>
                        Холсты всегда представляли собой востребованный и актуальный атрибут искусства, необходимый для нанесения тем или иным способом изображения на него. В прошлые века художники могли использовать только лишь краски, но с приходом новых, инновационных технологий, сегодня, нанести фото, рисунок или принт можно легко с помощью удобной и недорогой услуги предоставляемой сервисом Canpi.
                    </p>
                </div>
                <div class="about-us__wrapper__block__check">
                    <span>10 лет на рынке</span>
                    <span>20 специалистов ежедневно<br>
                    занимаются печатью
                    </span>
                    <span>Создавайте свои <br>
картины в конструкторе</span>
                    <span>Индивидуальные размеры<br>
подрамников на заказ</span>
                </div>
            </div>
        </div>
    </section>

    <section class="effects">
        <div class="wrapper effects__wrapper">
            <h2>Эффекты для ваших фотографий от наших дизайнеров</h2>
            <div class="effects__wrapper__tabs-block">
                <div class="effects__wrapper__tabs-block__tabs">
                    <div class="effects__wrapper__tabs-block__tabs__tab" onclick="openEffect(event, 'montaj')" id="defaultOpenEffect">
                        <span>Реалистичный фотомонтаж</span>
                    </div>
                    <div class="effects__wrapper__tabs-block__tabs__tab" onclick="openEffect(event, 'litco')">
                        <span>Эффекты с лицом</span>
                    </div>
                    <div class="effects__wrapper__tabs-block__tabs__tab" onclick="openEffect(event, 'stilizacia')">
                        <span>Эффекты стилизации</span>
                    </div>
                    <div class="effects__wrapper__tabs-block__tabs__tab" onclick="openEffect(event, 'premium')">
                        <span>Рисунки премиум класса</span>
                    </div>
                    <div class="effects__wrapper__tabs-block__tabs__tab" onclick="openEffect(event, 'journal')">
                        <span>Ты на обложке журнала</span>
                    </div>
                    <div class="effects__wrapper__tabs-block__tabs__tab" onclick="openEffect(event, 'fotomontaj')">
                        <span>Фотомонтаж "Звезда и я"</span>
                    </div>
                    <div class="effects__wrapper__tabs-block__tabs__tab" onclick="openEffect(event, 'speceffect')">
                        <span>Спецэффекты с фоном</span>
                    </div>
                    <div class="effects__wrapper__tabs-block__tabs__tab" onclick="openEffect(event, 'super-fotoramki')">
                        <span>Удивительные фоторамки</span>
                    </div>
                    <div class="effects__wrapper__tabs-block__tabs__tab" onclick="openEffect(event, 'simple-fotoramki')">
                        <span>Простые фоторамки</span>
                    </div>
                    <div class="effects__wrapper__tabs-block__tabs__tab" onclick="openEffect(event, 'zodiac')">
                        <span>Знаки Зодиака</span>
                    </div>
                </div>
                <div id="montaj" class="effects__wrapper__tabs-block__tab-content">
                    <div href="img/effects-image-1.png" class="effects__wrapper__tabs-block__tab-content__image i1">
                    </div>
                    <div href="img/effects-image-2.png" class="effects__wrapper__tabs-block__tab-content__image i2">
                    </div>
                    <div href="img/effects-image-3.png" class="effects__wrapper__tabs-block__tab-content__image i3">
                    </div>
                    <div href="img/effects-image-4.png" class="effects__wrapper__tabs-block__tab-content__image i4">
                    </div>
                    <div href="img/effects-image-5.png" class="effects__wrapper__tabs-block__tab-content__image i5">
                    </div>
                    <div href="img/effects-image-6.png" class="effects__wrapper__tabs-block__tab-content__image i6">
                    </div>
                    <div href="img/effects-image-7.png" class="effects__wrapper__tabs-block__tab-content__image i7">
                    </div>
                    <div href="img/effects-image-8.png" class="effects__wrapper__tabs-block__tab-content__image i8">
                    </div>
                    <div href="img/effects-image-9.png" class="effects__wrapper__tabs-block__tab-content__image i9">
                    </div>
                    <div href="img/effects-image-10.png" class="effects__wrapper__tabs-block__tab-content__image i10">
                    </div>
                    <div href="img/effects-image-11.png" class="effects__wrapper__tabs-block__tab-content__image i11">
                    </div>
                    <div class="effects__wrapper__tabs-block__tab-content__button">
                        <img src="img/effects-arrow.png" alt="">
                        <p class="openmodal">Запросить<br>
                            услуги<br>
                            дизайнера</p>
                    </div>
                </div>
                <div id="litco" class="effects__wrapper__tabs-block__tab-content">
                    <div href="img/effects-image-1.png" class="effects__wrapper__tabs-block__tab-content__image i1">
                    </div>
                    <div href="img/effects-image-2.png" class="effects__wrapper__tabs-block__tab-content__image i2">
                    </div>
                    <div href="img/effects-image-3.png" class="effects__wrapper__tabs-block__tab-content__image i3">
                    </div>
                    <div href="img/effects-image-4.png" class="effects__wrapper__tabs-block__tab-content__image i4">
                    </div>
                    <div href="img/effects-image-5.png" class="effects__wrapper__tabs-block__tab-content__image i5">
                    </div>
                    <div href="img/effects-image-6.png" class="effects__wrapper__tabs-block__tab-content__image i6">
                    </div>
                    <div href="img/effects-image-7.png" class="effects__wrapper__tabs-block__tab-content__image i7">
                    </div>
                    <div href="img/effects-image-8.png" class="effects__wrapper__tabs-block__tab-content__image i8">
                    </div>
                    <div href="img/effects-image-9.png" class="effects__wrapper__tabs-block__tab-content__image i9">
                    </div>
                    <div href="img/effects-image-10.png" class="effects__wrapper__tabs-block__tab-content__image i10">
                    </div>
                    <div href="img/effects-image-11.png" class="effects__wrapper__tabs-block__tab-content__image i11">
                    </div>
                    <div class="effects__wrapper__tabs-block__tab-content__button">
                        <img src="img/effects-arrow.png" alt="">
                        <p class="openmodal">Запросить<br>
                            услуги<br>
                            дизайнера</p>
                    </div>
                </div>
                <div id="stilizacia" class="effects__wrapper__tabs-block__tab-content">
                    <div href="img/effects-image-1.png" class="effects__wrapper__tabs-block__tab-content__image i1">
                    </div>
                    <div href="img/effects-image-2.png" class="effects__wrapper__tabs-block__tab-content__image i2">
                    </div>
                    <div href="img/effects-image-3.png" class="effects__wrapper__tabs-block__tab-content__image i3">
                    </div>
                    <div href="img/effects-image-4.png" class="effects__wrapper__tabs-block__tab-content__image i4">
                    </div>
                    <div href="img/effects-image-5.png" class="effects__wrapper__tabs-block__tab-content__image i5">
                    </div>
                    <div href="img/effects-image-6.png" class="effects__wrapper__tabs-block__tab-content__image i6">
                    </div>
                    <div href="img/effects-image-7.png" class="effects__wrapper__tabs-block__tab-content__image i7">
                    </div>
                    <div href="img/effects-image-8.png" class="effects__wrapper__tabs-block__tab-content__image i8">
                    </div>
                    <div href="img/effects-image-9.png" class="effects__wrapper__tabs-block__tab-content__image i9">
                    </div>
                    <div href="img/effects-image-10.png" class="effects__wrapper__tabs-block__tab-content__image i10">
                    </div>
                    <div href="img/effects-image-11.png" class="effects__wrapper__tabs-block__tab-content__image i11">
                    </div>
                    <div class="effects__wrapper__tabs-block__tab-content__button">
                        <img src="img/effects-arrow.png" alt="">
                        <p class="openmodal">Запросить<br>
                            услуги<br>
                            дизайнера</p>
                    </div>
                </div>
                <div id="premium" class="effects__wrapper__tabs-block__tab-content">
                    <div href="img/effects-image-1.png" class="effects__wrapper__tabs-block__tab-content__image i1">
                    </div>
                    <div href="img/effects-image-2.png" class="effects__wrapper__tabs-block__tab-content__image i2">
                    </div>
                    <div href="img/effects-image-3.png" class="effects__wrapper__tabs-block__tab-content__image i3">
                    </div>
                    <div href="img/effects-image-4.png" class="effects__wrapper__tabs-block__tab-content__image i4">
                    </div>
                    <div href="img/effects-image-5.png" class="effects__wrapper__tabs-block__tab-content__image i5">
                    </div>
                    <div href="img/effects-image-6.png" class="effects__wrapper__tabs-block__tab-content__image i6">
                    </div>
                    <div href="img/effects-image-7.png" class="effects__wrapper__tabs-block__tab-content__image i7">
                    </div>
                    <div href="img/effects-image-8.png" class="effects__wrapper__tabs-block__tab-content__image i8">
                    </div>
                    <div href="img/effects-image-9.png" class="effects__wrapper__tabs-block__tab-content__image i9">
                    </div>
                    <div href="img/effects-image-10.png" class="effects__wrapper__tabs-block__tab-content__image i10">
                    </div>
                    <div href="img/effects-image-11.png" class="effects__wrapper__tabs-block__tab-content__image i11">
                    </div>
                    <div class="effects__wrapper__tabs-block__tab-content__button">
                        <img src="img/effects-arrow.png" alt="">
                        <p class="openmodal">Запросить<br>
                            услуги<br>
                            дизайнера</p>
                    </div>
                </div>
                <div id="journal" class="effects__wrapper__tabs-block__tab-content">
                    <div href="img/effects-image-1.png" class="effects__wrapper__tabs-block__tab-content__image i1">
                    </div>
                    <div href="img/effects-image-2.png" class="effects__wrapper__tabs-block__tab-content__image i2">
                    </div>
                    <div href="img/effects-image-3.png" class="effects__wrapper__tabs-block__tab-content__image i3">
                    </div>
                    <div href="img/effects-image-4.png" class="effects__wrapper__tabs-block__tab-content__image i4">
                    </div>
                    <div href="img/effects-image-5.png" class="effects__wrapper__tabs-block__tab-content__image i5">
                    </div>
                    <div href="img/effects-image-6.png" class="effects__wrapper__tabs-block__tab-content__image i6">
                    </div>
                    <div href="img/effects-image-7.png" class="effects__wrapper__tabs-block__tab-content__image i7">
                    </div>
                    <div href="img/effects-image-8.png" class="effects__wrapper__tabs-block__tab-content__image i8">
                    </div>
                    <div href="img/effects-image-9.png" class="effects__wrapper__tabs-block__tab-content__image i9">
                    </div>
                    <div href="img/effects-image-10.png" class="effects__wrapper__tabs-block__tab-content__image i10">
                    </div>
                    <div href="img/effects-image-11.png" class="effects__wrapper__tabs-block__tab-content__image i11">
                    </div>
                    <div class="effects__wrapper__tabs-block__tab-content__button">
                        <img src="img/effects-arrow.png" alt="">
                        <p class="openmodal">Запросить<br>
                            услуги<br>
                            дизайнера</p>
                    </div>
                </div>
                <div id="fotomontaj" class="effects__wrapper__tabs-block__tab-content">
                    <div href="img/effects-image-1.png" class="effects__wrapper__tabs-block__tab-content__image i1">
                    </div>
                    <div href="img/effects-image-2.png" class="effects__wrapper__tabs-block__tab-content__image i2">
                    </div>
                    <div href="img/effects-image-3.png" class="effects__wrapper__tabs-block__tab-content__image i3">
                    </div>
                    <div href="img/effects-image-4.png" class="effects__wrapper__tabs-block__tab-content__image i4">
                    </div>
                    <div href="img/effects-image-5.png" class="effects__wrapper__tabs-block__tab-content__image i5">
                    </div>
                    <div href="img/effects-image-6.png" class="effects__wrapper__tabs-block__tab-content__image i6">
                    </div>
                    <div href="img/effects-image-7.png" class="effects__wrapper__tabs-block__tab-content__image i7">
                    </div>
                    <div href="img/effects-image-8.png" class="effects__wrapper__tabs-block__tab-content__image i8">
                    </div>
                    <div href="img/effects-image-9.png" class="effects__wrapper__tabs-block__tab-content__image i9">
                    </div>
                    <div href="img/effects-image-10.png" class="effects__wrapper__tabs-block__tab-content__image i10">
                    </div>
                    <div href="img/effects-image-11.png" class="effects__wrapper__tabs-block__tab-content__image i11">
                    </div>
                    <div class="effects__wrapper__tabs-block__tab-content__button">
                        <img src="img/effects-arrow.png" alt="">
                        <p class="openmodal">Запросить<br>
                            услуги<br>
                            дизайнера</p>
                    </div>
                </div>
                <div id="speceffect" class="effects__wrapper__tabs-block__tab-content">
                    <div href="img/effects-image-1.png" class="effects__wrapper__tabs-block__tab-content__image i1">
                    </div>
                    <div href="img/effects-image-2.png" class="effects__wrapper__tabs-block__tab-content__image i2">
                    </div>
                    <div href="img/effects-image-3.png" class="effects__wrapper__tabs-block__tab-content__image i3">
                    </div>
                    <div href="img/effects-image-4.png" class="effects__wrapper__tabs-block__tab-content__image i4">
                    </div>
                    <div href="img/effects-image-5.png" class="effects__wrapper__tabs-block__tab-content__image i5">
                    </div>
                    <div href="img/effects-image-6.png" class="effects__wrapper__tabs-block__tab-content__image i6">
                    </div>
                    <div href="img/effects-image-7.png" class="effects__wrapper__tabs-block__tab-content__image i7">
                    </div>
                    <div href="img/effects-image-8.png" class="effects__wrapper__tabs-block__tab-content__image i8">
                    </div>
                    <div href="img/effects-image-9.png" class="effects__wrapper__tabs-block__tab-content__image i9">
                    </div>
                    <div href="img/effects-image-10.png" class="effects__wrapper__tabs-block__tab-content__image i10">
                    </div>
                    <div href="img/effects-image-11.png" class="effects__wrapper__tabs-block__tab-content__image i11">
                    </div>
                    <div class="effects__wrapper__tabs-block__tab-content__button">
                        <img src="img/effects-arrow.png" alt="">
                        <p class="openmodal">Запросить<br>
                            услуги<br>
                            дизайнера</p>
                    </div>
                </div>
                <div id="super-fotoramki" class="effects__wrapper__tabs-block__tab-content">
                    <div href="img/effects-image-1.png" class="effects__wrapper__tabs-block__tab-content__image i1">
                    </div>
                    <div href="img/effects-image-2.png" class="effects__wrapper__tabs-block__tab-content__image i2">
                    </div>
                    <div href="img/effects-image-3.png" class="effects__wrapper__tabs-block__tab-content__image i3">
                    </div>
                    <div href="img/effects-image-4.png" class="effects__wrapper__tabs-block__tab-content__image i4">
                    </div>
                    <div href="img/effects-image-5.png" class="effects__wrapper__tabs-block__tab-content__image i5">
                    </div>
                    <div href="img/effects-image-6.png" class="effects__wrapper__tabs-block__tab-content__image i6">
                    </div>
                    <div href="img/effects-image-7.png" class="effects__wrapper__tabs-block__tab-content__image i7">
                    </div>
                    <div href="img/effects-image-8.png" class="effects__wrapper__tabs-block__tab-content__image i8">
                    </div>
                    <div href="img/effects-image-9.png" class="effects__wrapper__tabs-block__tab-content__image i9">
                    </div>
                    <div href="img/effects-image-10.png" class="effects__wrapper__tabs-block__tab-content__image i10">
                    </div>
                    <div href="img/effects-image-11.png" class="effects__wrapper__tabs-block__tab-content__image i11">
                    </div>
                    <div class="effects__wrapper__tabs-block__tab-content__button">
                        <img src="img/effects-arrow.png" alt="">
                        <p class="openmodal">Запросить<br>
                            услуги<br>
                            дизайнера</p>
                    </div>
                </div>
                <div id="simple-fotoramki" class="effects__wrapper__tabs-block__tab-content">
                    <div href="img/effects-image-1.png" class="effects__wrapper__tabs-block__tab-content__image i1">
                    </div>
                    <div href="img/effects-image-2.png" class="effects__wrapper__tabs-block__tab-content__image i2">
                    </div>
                    <div href="img/effects-image-3.png" class="effects__wrapper__tabs-block__tab-content__image i3">
                    </div>
                    <div href="img/effects-image-4.png" class="effects__wrapper__tabs-block__tab-content__image i4">
                    </div>
                    <div href="img/effects-image-5.png" class="effects__wrapper__tabs-block__tab-content__image i5">
                    </div>
                    <div href="img/effects-image-6.png" class="effects__wrapper__tabs-block__tab-content__image i6">
                    </div>
                    <div href="img/effects-image-7.png" class="effects__wrapper__tabs-block__tab-content__image i7">
                    </div>
                    <div href="img/effects-image-8.png" class="effects__wrapper__tabs-block__tab-content__image i8">
                    </div>
                    <div href="img/effects-image-9.png" class="effects__wrapper__tabs-block__tab-content__image i9">
                    </div>
                    <div href="img/effects-image-10.png" class="effects__wrapper__tabs-block__tab-content__image i10">
                    </div>
                    <div href="img/effects-image-11.png" class="effects__wrapper__tabs-block__tab-content__image i11">
                    </div>
                    <div class="effects__wrapper__tabs-block__tab-content__button">
                        <img src="img/effects-arrow.png" alt="">
                        <p class="openmodal">Запросить<br>
                            услуги<br>
                            дизайнера</p>
                    </div>
                </div>
                <div id="zodiac" class="effects__wrapper__tabs-block__tab-content">
                    <div href="img/effects-image-1.png" class="effects__wrapper__tabs-block__tab-content__image i1">
                    </div>
                    <div href="img/effects-image-2.png" class="effects__wrapper__tabs-block__tab-content__image i2">
                    </div>
                    <div href="img/effects-image-3.png" class="effects__wrapper__tabs-block__tab-content__image i3">
                    </div>
                    <div href="img/effects-image-4.png" class="effects__wrapper__tabs-block__tab-content__image i4">
                    </div>
                    <div href="img/effects-image-5.png" class="effects__wrapper__tabs-block__tab-content__image i5">
                    </div>
                    <div href="img/effects-image-6.png" class="effects__wrapper__tabs-block__tab-content__image i6">
                    </div>
                    <div href="img/effects-image-7.png" class="effects__wrapper__tabs-block__tab-content__image i7">
                    </div>
                    <div href="img/effects-image-8.png" class="effects__wrapper__tabs-block__tab-content__image i8">
                    </div>
                    <div href="img/effects-image-9.png" class="effects__wrapper__tabs-block__tab-content__image i9">
                    </div>
                    <div href="img/effects-image-10.png" class="effects__wrapper__tabs-block__tab-content__image i10">
                    </div>
                    <div href="img/effects-image-11.png" class="effects__wrapper__tabs-block__tab-content__image i11">
                    </div>
                    <div class="effects__wrapper__tabs-block__tab-content__button">
                        <img src="img/effects-arrow.png" alt="">
                        <p class="openmodal">Запросить<br>
                            услуги<br>
                            дизайнера</p>
                    </div>
                </div>
            </div>
            <div class="yellow-line"></div>
        </div>
    </section>

    <section class="links">
        <div class="wrapper links__wrapper">
            <h2>Воспользуйтесь фотобанком для выбора прекрасных качественных фотографий и иллюстраций. <br>При заказе печати на холсте мы предоставим понравившуюся картинку совершенно бесплатно!</h2>
            <div class="links__wrapper__blocks">
               <div class="links__wrapper__blocks__block">
                    <a href="https://ru.depositphotos.com/" target="_blank"><img src="img/Depositphotos_logo-s.png" alt="depositphotos"></a>
                </div>
                <div class="links__wrapper__blocks__block">
                    <a href="https://www.shutterstock.com/ru/" target="_blank"><img src="img/Shutterstock_logo-s.png" alt="shutterstock"></a>
                </div>
                <div class="links__wrapper__blocks__block">
                    <a href="https://ru.fotolia.com/" target="_blank"><img src="img/fotoli_logo-s.png" alt="fotolia"></a>
                </div>
                <div class="links__wrapper__blocks__block">
                    <a href="http://www.istockphoto.com/ru" target="_blank"><img src="img/IStock_logo-s.png" alt="istockphoto"></a>
                </div>
            </div>
        </div>
    </section>

    <section class="feedback" id="feedback">
        <div class="wrapper feedback__wrapper">
            <div class="feedback__wrapper__left">
                <img src="img/feedback-photo.png" alt="">
            </div>
            <div class="feedback__wrapper__right">
                <div class="modal-form">
                    <form action="" enctype="multipart/form-data">
                        <p>Печать на натуральном<br>холсте <span>от 490 рублей</span></p>
                        <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
                        <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
                        <input type="text" placeholder="Имя" name="name">
                        <input class="form-telephone" name="telephone" type="text" placeholder="+7(   )      -      -" required>
                        <label for="inputFile">
                            <img src="img/skrepka.png" alt="">
                            <span>Прикрепить изображение</span>
                            <input type="file" name="inputFile" class="inputFile" id="inputFile">
                        </label>
                        <input type="submit" class="yellow-button" value="Заказать">
                    </form>
                    <div class="after-send">
                        <p>Спасибо за обращение!</p>
                        <p>Мы свяжемся с вами в<br>ближайшее время.</p>
                        <button class="yellow-button">Ok</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials" id="testimonials">
        <div class="wrapper testimonials__wrapper">
            <h2>Отзывы</h2>
            <p>Оставьте ваш отзыв и получите скидку 15%</p>
            <a href="http://search.google.com/local/writereview?placeid=ChIJB2F7g7aSxUMRLm39d8dsvus" target="_blank" class="yellow-button">Оставить отзыв</a>
            <div class="owl-carousel testimonials__wrapper__testimonials">
                <div>
                    <span class="title">
                        Анастасия Дмитриева
                    </span>
                    <p>Спасибо большое за качество, оперативность, внимательность!!! Менеджеры прекрасно работают по предварительному заказу, что-то советовали, что-то объясняли , были вежливы и неравнодушны...как результат в срок и отличного качества картина в подарок другу, а теперь и ещё одна - другу друга !!! Вот так !!! Спасибо Вашей команде!!!</p>
                </div>
                <div>
                    <span class="title">
                        Наталья Загорская
                    </span>
                    <p>Огромное спасибо! Нам все очень понравилось. Мы делала сюрприз друзьям и фотографии у нас были только в контакте. Нам посоветовали как лучше сделать, помогли выбрать фотографии и размер холста. Получился отличный подарок</p>
                </div>
                <div>
                    <span class="title">
                        Екатерина Митрофанова
                    </span>
                    <p>Заказывала у Вас фотоколлаж на холсте-получилось ооочень красиво,все краски насыщенные,не искаженные.Нам ооочень понравилась Ваша работа!!!Успехов Вашей компании и мнооого заказов!!!Спасибо!!!
                        Теперь буду участвовать в конкурсах))), такой красоты хочется и хочется! Будем еще Вам заказывать!!!</p>
                </div>
            </div>
        </div>
    </section>

    <section class="map" id="map">
        <a class="dg-widget-link" href="http://2gis.ru/chelyabinsk/firm/70000001006973665/center/61.38803958892823,55.1616734418764/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Челябинска</a><div class="dg-widget-link"><a href="http://2gis.ru/chelyabinsk/firm/70000001006973665/photos/70000001006973665/center/61.38803958892823,55.1616734418764/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos">Фотографии компании</a></div><div class="dg-widget-link"><a href="http://2gis.ru/chelyabinsk/center/61.388032,55.161007/zoom/16/routeTab/rsType/bus/to/61.388032,55.161007╎Проспект, типография?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Проспект, типография</a></div><script charset="utf-8" src="http://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":"100%","height":590,"pos":{"lat":55.1616734418764,"lon":61.38803958892823,"zoom":16},"opt":{"city":"chelyabinsk"},"org":[{"id":"70000001006973665"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
    </section>

    <footer class="footer">
        <div class="wrapper">
            <div class="footer__logo">
                <img src="img/canpi-logo-footer.png" alt="">
            </div>
            <div class="footer__content">
                <div class="footer__content__left">
                    <div class="footer__content__block">
                        <span>Адрес:</span>
                        <p>г.Челябинск, Свердловский проспект 64</p>
                    </div>
                    <div class="footer__content__block">
                        <span>Режим работы:</span>
                        <p>пн-пт 10:00-19:00</p>
                    </div>
                </div>
                <div class="footer__content__right">
                    <div class="footer__content__block">
                        <span>E-mail:</span>
                        <a href="mailto:mail@prospekt-print.ru">mail@prospekt-print.ru</a>
                    </div>
                    <div class="footer__content__block">
                        <span>Тел:</span>
                        <a href="tel:+7 (351) 242-02-50">+7 (351) 242-02-50</a>
                    </div>
                </div>
            </div>
            <div class="footer__socials">
                <a href="https://vk.com/kruzhki74" target="_blank" class="vk"></a>
                <a href="https://www.instagram.com/kruzhki74/" target="_blank" class="inst"></a>
                <a href="https://www.youtube.com/playlist?list=PLfOHG-Q9dEWZLWRv19DWQEY-zebL3Eo5C" target="_blank" class="ok"></a>
                <br>
                <a href="http://start-go.pro" target="_blank" class="start-go">Сайт создан <img src="img/Start-GO.png" alt="start-go"></a>
            </div>
        </div>
    </footer>
    <div style="display:none;" class="hided-colorbox">
       <?php
            $directories = array(
                "foto-na-holste" => "img/foto-na-holste/",
                "fotomontaj-na-holste" => "img/fotokollaj-na-holste/",
                "fotokollaj-na-holste" => "img/fotomontaj-na-holste/",
                "holst-interier" => "img/holst-interier/",
                "holst-dlya-semyi" => "img/holst-dlya-semyi/",
                "modul-kartiny" => "img/modul-kartiny/",
                "holst-v-podarok" => "img/holst-v-podarok/",
                "portret-na-holste" => "img/portret-na-holste/",
                "obrazcy-matrialov" => "img/obrazcy-matrialov/",
            );

            foreach($directories as $key => $directory){
                $images = glob($directory."*.*");
                foreach($images as $image) {
                    echo '<a href="'.$image.'" rel="'.$key.'" class="'.$key.'"> </a>';
                }
            }
        ?>
    </div>
<!-- Scripts -->
<script type="text/javascript" src="js/jquery-latest.min.js"></script>
<script src="js/jquery.maskedinput.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/colorbox-min.js"></script>
<script src="js/scripts.js"></script>
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
    (function(){ var widget_id = 'msSDZE8WUA';var d=document;var w=window;function l(){
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->
<div class="mango-callback" data-settings='{"type":"", "id": "MTAwMDQ5MzQ=","autoDial" : "0", "lang" : "ru-ru", "host":"widgets.mango-office.ru/", "errorMessage": "В данный момент наблюдаются технические проблемы и совершение звонка невозможно"}'>
</div>
<script>!function(t){function e(){i=document.querySelectorAll(".button-widget-open");for(var e=0;e<i.length;e++)"true"!=i[e].getAttribute("init")&&(options=JSON.parse(i[e].closest('.'+t).getAttribute("data-settings")),i[e].setAttribute("onclick","alert('"+options.errorMessage+"(0000)'); return false;"))}function o(t,e,o,n,i,r){var s=document.createElement(t);for(var a in e)s.setAttribute(a,e[a]);s.readyState?s.onreadystatechange=o:(s.onload=n,s.onerror=i),r(s)}function n(){for(var t=0;t<i.length;t++){var e=i[t];if("true"!=e.getAttribute("init")){options=JSON.parse(e.getAttribute("data-settings"));var o=new MangoWidget({host:window.location.protocol+'//'+options.host,id:options.id,elem:e,message:options.errorMessage});o.initWidget(),e.setAttribute("init","true"),i[t].setAttribute("onclick","")}}}host=window.location.protocol+"//widgets.mango-office.ru/";var i=document.getElementsByClassName(t);o("link",{rel:"stylesheet",type:"text/css",href:host+"css/widget-button.css"},function(){},function(){},e,function(t){document.documentElement.insertBefore(t,document.documentElement.firstChild)}),o("script",{type:"text/javascript",src:host+"widgets/mango-callback.js"},function(){("complete"==this.readyState||"loaded"==this.readyState)&&n()},n,e,function(t){document.documentElement.appendChild(t)})}("mango-callback");</script>
</body>
</html>