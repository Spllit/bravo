<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- FAVICON -->
    <link rel="icon" type="image/png" sizes="512x512" href="img\favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/style.css">

    <title>Bravo</title>
</head>

<body>
    <div class="header-contacts">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="col-6">
                    <div class="d-flex justify-content-between">
                        <div class="header-contacts__adress">
                            <img src="<?php bloginfo('template_directory')?>\img\header-contacts\header-contacts__adress.svg" alt="pointer" class="header-contacts__img"> г. Москва, ул. Радужная 54
                        </div>
                        <div class="header-contacts__timeOfWork">
                            <img src="<?php bloginfo('template_directory')?>/img\header-contacts\header-contacts__timeOfWork.svg" alt="watch" class="header-contacts__img"> Пн-пт: с 9:00 до 18:00, сб-вс: выходной
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="d-flex justify-content-between">
                        <a href="#contact_form_pop" class="fancybox-inline">заказать звонок</a>
                        <div style="display:none" class="fancybox-hidden">
                            <div id="contact_form_pop">
                                <?php echo do_shortcode('[contact-form-7 id="5" title="Контактная форма 1"]'); ?>
                            </div>
                        </div>
                        <!--<?php dynamic_sidebar('text_us'); ?>-->
                        <div class="header-contacts__mail">
                            <img src="<?php bloginfo('template_directory')?>/img\header-contacts\header-contacts__letter.svg" alt="letter" class="header-contacts__img">
                            <a href="mailto:info@gmail.com" class="header-contacts__link">info@gmail.com</a>
                        </div>
                        <div class="header-contacts__phoneNumber">
                            <img src="<?php bloginfo('template_directory')?>/img\header-contacts\header__contacts__phone.svg" alt="phone" class="header-contacts__img">
                            <a href="tel:+7 000 000 00 00 " class="header-contacts__link">+7 000 000 00 00 </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="nav ">
        <div class="container align-self-center ">
            <div class="row d-flex flex-wrap">
                <div class="col-6 col-md-6 col-lg-2 nav__logo">
                    <a href="http://f0441193.xsph.ru/" class="nav__logo">
                        <span>Браво</span>
                    </a>
                </div>
                <ul class="nav__list d-flex justify-content-around align-self-center col-12 col-md-12 col-lg-8 col-xl-8 flex-wrap">
                    <li><a href="http://f0441193.xsph.ru/?page_id=42" class="nav__item">О компании</a></li>
                    <li><a href="http://f0441193.xsph.ru/?page_id=44" class="nav__item">Выкуп</a></li>
                    <li><a href="http://f0441193.xsph.ru/?page_id=46" class="nav__item">Грейдинг</a></li>
                    <li><a href="http://f0441193.xsph.ru/?page_id=48" class="nav__item">Реставрация</a></li>
                    <li><a href="http://f0441193.xsph.ru/?page_id=50" class="nav__item">Оплата</a></li>
                    <li><a href="http://f0441193.xsph.ru/?page_id=52" class="nav__item">Гарантии</a></li>
                    <li><a href="http://f0441193.xsph.ru/?page_id=54" class="nav__item">Доставка</a></li>
                    <li><a href="http://f0441193.xsph.ru/?page_id=56" class="nav__item">Контакты</a></li>
                </ul>
                <div class="nav__profile col-6 col-md-4 col-lg-2 align-self-center justify-content-around  ml-auto d-flex">
                    <div>
                        <a href="http://f0441193.xsph.ru/?page_id=85" class="nav__profile-item">
                            <img src="<?php bloginfo('template_directory')?>/img\nav\liked.svg" alt="liked">
                        </a>
                    </div>
                    <div>
                        <a href="http://f0441193.xsph.ru/?page_id=87" class="nav__profile-item">
                            <img src="<?php bloginfo('template_directory')?>/img\nav\basket.svg" alt="basket">
                        </a>
                    </div>
                    <div>
                        <a href="http://f0441193.xsph.ru/?page_id=89" class="nav__profile-item">
                            <img src="<?php bloginfo('template_directory')?>/img\nav\Profile.svg" alt="profile">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="finder">
        <div class="container">
                <?php dynamic_sidebar('widget_finder'); ?>
        </div>
    </div>