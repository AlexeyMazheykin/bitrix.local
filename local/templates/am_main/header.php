<?php
if (!defined ( 'B_PROLOG_INCLUDED' ) || B_PROLOG_INCLUDED !== true)
    die();

use Bitrix\Main\Page\Asset;


$assets = Asset::getInstance ();
/*function vardump ($var) {
    echo "<pre>";
    var_dump ($var);
    echo "</pre>";
}*/

?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?$APPLICATION->ShowTitle ();?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= SITE_TEMPLATE_PATH . '/favicon.ico' ?>" type="image/x-icon" rel="icon"/>

    <?php

    $APPLICATION->ShowHead ();
    $assets->addString ( "<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>" );
    $assets->addCss ( SITE_TEMPLATE_PATH . "/css/bootstrap.min.css" );
    $assets->addCss ( SITE_TEMPLATE_PATH . "/css/owl.carousel.css" );
    $assets->addCss ( SITE_TEMPLATE_PATH . "/css/animate-text.css" );
    $assets->addCss ( SITE_TEMPLATE_PATH . "/css/magnific-popup.css" );
    $assets->addCss ( SITE_TEMPLATE_PATH . "/css/et-line.css" );
    $assets->addCss ( SITE_TEMPLATE_PATH . "/css/pe-icon-7-stroke.css" );
    $assets->addCss ( SITE_TEMPLATE_PATH . "/css/shortcode/shortcodes.css" );
    $assets->addCss ( SITE_TEMPLATE_PATH . "/css/meanmenu.min.css" );
    $assets->addCss ( SITE_TEMPLATE_PATH . "/css/font-awesome.min.css" );
    $assets->addCss ( SITE_TEMPLATE_PATH . "/style.css" );
    $assets->addCss ( SITE_TEMPLATE_PATH . "/css/responsive.css" );
    $assets->addJs ( SITE_TEMPLATE_PATH . "/js/vendor/modernizr-2.8.3.min.js" );
    $assets->addJs ( SITE_TEMPLATE_PATH . "/js/vendor/jquery-1.12.0.min.js" );
    $assets->addJs ( SITE_TEMPLATE_PATH . "/js/bootstrap.min.js" );
    $assets->addJs ( SITE_TEMPLATE_PATH . "/js/owl.carousel.min.js" );
    $assets->addJs ( SITE_TEMPLATE_PATH . "/js/jquery.counterup.min.js" );
    $assets->addJs ( SITE_TEMPLATE_PATH . "/js/waypoints.min.js" );
    $assets->addJs ( SITE_TEMPLATE_PATH . "/js/jquery.magnific-popup.min.js" );
    $assets->addJs ( SITE_TEMPLATE_PATH . "/js/jquery.mixitup.min.js" );
    $assets->addJs ( SITE_TEMPLATE_PATH . "/js/jquery.meanmenu.js" );
    $assets->addJs ( SITE_TEMPLATE_PATH . "/js/jquery.nav.js" );
    $assets->addJs ( SITE_TEMPLATE_PATH . "/js/jquery.parallax-1.1.3.js" );
    $assets->addJs ( SITE_TEMPLATE_PATH . "/js/animate-text.js" );
    $assets->addJs ( SITE_TEMPLATE_PATH . "/js/plugins.js" );
    $assets->addJs ( SITE_TEMPLATE_PATH . "/js/main.js" );


    ?>
</head>

<div id="panel">
    <? $APPLICATION->ShowPanel (); ?>
</div>
<body>

<!--[if lt IE 8]>
<p class="browserupgrade">Вы используете <strong>устаревший</strong> браузер. Пожалуйста
    <a href="http://browsehappy.com/">обновите его</a>
</p>
<![endif]-->

<!-- Линия с контактами -->
<div class="header-top-area bg-color ptb-10 hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="welcome">
                    <span><i class="fa fa-envelope"></i> admin@domain.com</span>
                    <span><i class="fa fa-phone"></i> +012 345 6789</span>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="social-icon-header text-right">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Шапка сайта (меню) -->
<header id="sticky-header" class="header-area header-wrapper white-bg">
    <!-- Меню (для десктопа) -->
    <div class="header-middle-area full-width">
        <div class="container">
            <div class="full-width-mega-dropdown">
                <div class="row">
                    <!-- Логотип -->
                    <div class="col-md-2 col-sm-3 col-xs-8">
                        <div class="logo ptb-22">
                            <a href="index.html">
                                <img src="<?= SITE_TEMPLATE_PATH . '/img/logo/logo.png' ?>" alt="main logo">
                            </a>
                        </div>
                    </div>

                    <!-- Меню (основное) -->
                    <div class="col-md-10 col-sm-9 col-xs-4 text-right dark-menu">
                        <div class="header-main-menu hidden-xs">
                            <nav id="primary-menu">
                                <ul class="main-menu text-right">
                                    <li>
                                        <a href="index.html">Главная</a>
                                    </li>
                                    <li>
                                        <a href="about_us.html">О нас</a>
                                    </li>
                                    <li>
                                        <a href="services.html"> Услуги
                                            <span class="indicator"><i class="fa fa-angle-down"></i></span></a>
                                        <ul class="dropdown">
                                            <li>
                                                <a href="services_landing.html">Лендинг</a>
                                            </li>
                                            <li>
                                                <a href="services_online_shop.html">Интернет-магазин</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="portfolio.html"> Портфолио</a>
                                    </li>
                                    <li>
                                        <a href="blog.html">Блог</a>
                                    </li>
                                    <li>
                                        <a href="contacts.html">Контакты</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <!-- Поиск -->
                        <div class="header-right">
                            <div class="header-search">
                                <div class="search-wrapper">
                                    <a href="javascript:void(0);" class="search-open">
                                        <i class="pe-7s-search"></i>
                                    </a>
                                    <div class="search-inside animated bounceInUp">
                                        <i class="icon-close search-close fa fa-times"></i>
                                        <div class="search-overlay"></div>
                                        <div class="position-center-center">
                                            <div class="search">
                                                <form>
                                                    <input type="search" placeholder="Поиск по сайту">
                                                    <button type="submit"><i class="fa fa-search"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Меню (для мобилки) -->
    <div class="mobile-menu-area visible-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li>
                                    <a href="index.html">Главная</a>
                                </li>
                                <li>
                                    <a href="about_us.html">О нас</a>
                                </li>
                                <li>
                                    <a href="services.html">Услуги</a>
                                    <ul>
                                        <li>
                                            <a href="services_landing.html">Лендинг</a>
                                        </li>
                                        <li>
                                            <a href="services_online_shop.html">Интернет-магазин</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="portfolio.html">Портфолио</a></li>

                                <li>
                                    <a href="blog.html">Блог</a>
                                </li>
                                <li>
                                    <a href="contacts.html">Контакты</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Хлебные крошки (навигация) -->
<div class="breadcrumb-area brand-bg ptb-100">
    <div class="container width-100">
        <div class="row z-index">
            <div class="col-md-7 col-sm-6">
                <div class="breadcrumb-title">
                    <h2 class="white-text"><?=$APPLICATION->ShowTitle (false);?></h2>
                </div>
            </div>
            <div class="col-md-5 col-sm-6">
                <div class="breadcrumb-menu">
                    <ol class="breadcrumb text-right">
                        <li>
                            <a href="index.html">Главная</a>
                        </li>
                        <li>
                            <a href="#">О нас</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>