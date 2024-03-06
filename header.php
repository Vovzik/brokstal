<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/jquery-form-styler@2.0.2/dist/jquery.formstyler.min.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
<div class="wrapper ">
    <header class="header">
        <div class="header__content header-content-js">
            <div class="container">
                <div class="header__inner-top">
                    <a class="header__logo" href="<?= is_page('Главная') ? '#' : '/' ?>">
                        <picture>
                            <source srcset="<?php the_field('logo_belyj_na_telefone', 26) ?>" type="image/jpeg" media="(max-width:480px)">
                            <img class="header__logo-icon" src="<?php the_field('logo', 26) ?>" alt="Logo">
                        </picture>
                    </a>
                    <nav class="header__nav">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'top_menu_header',
                            'container' => '',
                            'menu_class' => 'header__list',
                            'depth'           => 0,
                        ) );
                        ?>
                    </nav>
                    <div class="header__addresses">
                        <div class="header__address">
                            <div class="header__text">
                                <img class="header__text-icon" src="<?php bloginfo('template_url'); ?>/assets/img/header/map.svg" alt="alt">
                                <?php the_field('adress', 26) ?>
                            </div>
                            <a class="header__phone" href="<?php the_field('telefon_ssylka', 26) ?>">
                                <?php the_field('telefon', 26) ?>
                            </a>
                        </div>
                        <div class="header__address">
                            <div class="header__text">
                                <img class="header__text-icon"
                                     src="<?php bloginfo('template_url'); ?>/assets/img/header/map.svg" alt="alt">
                                <?php the_field('adress2', 26) ?>
                            </div>
                            <a class="header__phone" href=" <?php the_field('telefon_ssylka2', 26) ?>">
                                <?php the_field('telefon2', 26) ?>
                            </a>
                        </div>
                    </div>
                    <div class="header__basket">
                        <div class="header__basket-number">
                            1
                        </div>
                    </div>
                    <div class='header__burger js__header-burgerclick'>
                        <div class='header__burger-item js__header-burger header__burger--top'></div>
                        <div class='header__burger-item js__header-burger header__burger--middle'></div>
                        <div class='header__burger-item js__header-burger header__burger--bottom'></div>
                    </div>
                </div>
                <div class="header__inner-bottom">
                    <div class="header__btn js__header-burgerclick">
                        Меню
                    </div>
                    <nav class="menu">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'bottom_menu_header',
                            'container' => false,
                            'menu_class' => 'menu__list',
                            'walker' => new brockStal_Header_menu(),
                        ) );
                        ?>
                    </nav>
                    <button class="header__search-btn header-search-btn-js" type="submit"></button>
                    <input class="header__search-input header-search-input-js" type="text"
                           placeholder="Поиск по Броксталь">
                </div>
                <div class="header__content-menu header-nav-open-js">
                    <div class="header__close js__header-burgerclick">

                    </div>
                    <div class="container">
                        <div class="header__content-inner">
                            <a class="header__logo header__logo-phone" href="#">
                                <img class="header__logo-icon"
                                     src="<?php echo get_theme_mod('brokstal_phone') ?>"
                                     alt="Logo">
                            </a>
                            <div class="header__search-phone">
                                <button class="header__search-btn header-search-btn-js" type="submit"></button>
                                <input class="header__search-input header-search-input-js" type="text"
                                       placeholder="Поиск по Броксталь">
                            </div>
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'left_menu_header',
                                'container' => false,
                                'menu_class' => 'menu-left',
                                'walker' => new brockStal_Header_menu_left(),
                            ) );
                            ?>
                            <div class="header__aside">
                                <div class="header__socials">
                                    <a class="header__social" target="_blank" href="<?php echo get_theme_mod('brokstal_telegram_link') ?>">
                                        <img class="header__social-icon"
                                             src="<?php echo get_theme_mod('brokstal_telegram') ?>"
                                             alt="Telegram">
                                    </a>
                                    <a class="header__social" target="_blank" href="<?php echo get_theme_mod('brokstal_vk_link') ?>">
                                        <img class="header__social-icon"
                                             src="<?php echo get_theme_mod('brokstal_vk') ?>"
                                             alt="vk">
                                    </a>
                                    <a class="header__social" target="_blank" href="<?php echo get_theme_mod('brokstal_whatsapp_link') ?>">
                                        <img class="header__social-icon"
                                             src="<?php echo get_theme_mod('brokstal_whatsapp') ?>"
                                             alt="whatsapp">
                                    </a>
                                </div>
                                <a class="header__button" href="#">
                                    Консультация
                                </a>
                            </div>
                            <?php wp_nav_menu( array(
                                'theme_location' => 'left_menu_header2',
                                'container' => false,
                                'menu_class' => 'menu-left menu-right',
                                'walker' => new brockStal_Header_menu_left(),
                            ) );?>
                            <?php wp_nav_menu( array(
                                'theme_location' => 'left_menu_header3',
                                'container' => false,
                                'menu_class' => 'menu-left menu-right column2',
                                'walker' => new brockStal_Header_menu_left(),
                            ) );?>
                        </div>
                    </div>
                </div>
                <div class="header__content-tablet">
                    <div class="header__addresses header__addresses-tablet">
                        <div class="header__address">
                            <div class="header__text">
                                <img class="header__text-icon" src="<?php bloginfo('template_url'); ?>/assets/img/header/map-white.svg" alt="alt">
                                <?php the_field('adress', 26) ?>
                            </div>
                            <a class="header__phone" href="<?php the_field('telefon_ssylka', 26) ?>">
                                <?php the_field('telefon', 26) ?>
                            </a>
                            <a class="header__address-btn" href="<?php the_field('telefon_ssylka', 26) ?>">
                                Позвонить
                            </a>
                        </div>
                        <div class="header__address">
                            <div class="header__text">
                                <img class="header__text-icon"
                                     src="<?php bloginfo('template_url'); ?>/assets/img/header/map-white.svg" alt="alt">
                                <?php the_field('adress2', 26) ?>
                            </div>
                            <a class="header__phone" href="<?php the_field('telefon_ssylka2', 26) ?>">
                                <?php the_field('telefon2', 26) ?>
                            </a>
                            <a class="header__address-btn" href="<?php the_field('telefon_ssylka2', 26) ?>">
                                Позвонить
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


