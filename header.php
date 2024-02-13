<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>brokstal</title>
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
                            'theme_location' => 'top',
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
                        <ul class="menu__list">
                            <li class="menu__item menu-item-has-children">
                                <a href="" class="menu__link">
                                    МЕТАЛЛОПРОКАТ
                                </a>
                                <nav class="submenu">
                                    <ul class="submenu__list">
                                        <li class="submenu__item menu-item-has-children">
                                            <a class="submenu__link" href="#">
                                                Металлопрокат
                                            </a>
                                            <ul class="submenu level-more">
                                                <li class="submenu__item menu-item-has-children">
                                                    <a class="submenu__link" href="#">
                                                        Сортовой прокат
                                                    </a>
                                                    <ul class="submenu level-more">
                                                        <li class="submenu__item">
                                                            <a class="submenu__link" href="#">
                                                                Круг
                                                            </a>
                                                        </li>
                                                        <li class="submenu__item">
                                                            <a class="submenu__link" href="#">
                                                                Арматура
                                                            </a>
                                                        </li>
                                                        <li class="submenu__item">
                                                            <a class="submenu__link" href="#">
                                                                Катанка
                                                            </a>
                                                        </li>
                                                        <li class="submenu__item">
                                                            <a class="submenu__link" href="#">
                                                                Вязальная проволока
                                                            </a>
                                                        </li>
                                                        <li class="submenu__item">
                                                            <a class="submenu__link" href="#">
                                                                Полоса
                                                            </a>
                                                        </li>
                                                        <li class="submenu__item">
                                                            <a class="submenu__link" href="#">
                                                                Шестигранник
                                                            </a>
                                                        </li>
                                                        <li class="submenu__item">
                                                            <a class="submenu__link" href="#">
                                                                Квадрат
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="submenu__item">
                                                    <a class="submenu__link" href="#">
                                                        Фасонный прокат
                                                    </a>
                                                </li>
                                                <li class="submenu__item">
                                                    <a class="submenu__link" href="#">
                                                        Конструкционная сталь
                                                    </a>
                                                </li>
                                                <li class="submenu__item">
                                                    <a class="submenu__link" href="#">
                                                        Листовой прокат
                                                    </a>
                                                </li>
                                                <li class="submenu__item">
                                                    <a class="submenu__link" href="#">
                                                        Трубы
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Метизы
                                            </a>
                                        </li>
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Фитинги для труб
                                            </a>
                                        </li>
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Изделия из других металлов
                                            </a>
                                        </li>
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Абразивный инструмент
                                            </a>
                                        </li>
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Профнастил
                                            </a>
                                        </li>
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Металл б/у
                                            </a>
                                        </li>
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Поликарбонат
                                            </a>
                                        </li>
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Пленки ПВХ
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </li>
                            <li class="menu__item menu-item-has-children">
                                <a href="" class="menu__link">
                                    МЕТАЛЛООБРАБОТКА
                                </a>
                                <nav class="submenu">
                                    <ul class="submenu__list">
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Лазерная резка
                                            </a>
                                        </li>
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Плазменная резка
                                            </a>
                                        </li>
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Гибка листа
                                            </a>
                                        </li>
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Резка газом
                                            </a>
                                        </li>
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Гибка трубы
                                            </a>
                                        </li>
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Размотка бухтового проката
                                            </a>
                                        </li>
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Резка кругом
                                            </a>
                                        </li>
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Рубка листового проката
                                            </a>
                                        </li>
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Резка металла в размер
                                            </a>
                                        </li>
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Порошковая покраска
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </li>
                            <li class="menu__item menu-item-has-children">
                                <a href="" class="menu__link">
                                    МЕТАЛЛОКОНСТРУКЦИИ
                                </a>
                                <nav class="submenu">
                                    <ul class="submenu__list">
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Металлоконструкции быстровозводимых зданий
                                            </a>
                                        </li>
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Строительные металлоконструкции
                                            </a>
                                        </li>
                                        <li class="submenu__item menu-item-has-children">
                                            <a class="submenu__link" href="#">
                                                Малые архитектурные формы
                                            </a>
                                            <ul class="submenu level-more">
                                                <li class="submenu__item">
                                                    <a class="submenu__link" href="#">
                                                        Скамейки и лавки
                                                    </a>
                                                </li>
                                                <li class="submenu__item">
                                                    <a class="submenu__link" href="#">
                                                        Ограждения
                                                    </a>
                                                </li>
                                                <li class="submenu__item">
                                                    <a class="submenu__link" href="#">
                                                        Урны уличные
                                                    </a>
                                                </li>
                                                <li class="submenu__item">
                                                    <a class="submenu__link" href="#">
                                                        Велопарковка
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Контейнеры мусорные для ТБО
                                            </a>
                                        </li>
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Рекламные конструкции
                                            </a>
                                        </li>
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Павильоны общественного транспорта
                                            </a>
                                        </li>
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Нестандартные металлоконструкции
                                            </a>
                                        </li>
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Детские игровые комплексы
                                            </a>
                                        </li>
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Игровое оборудование
                                            </a>
                                        </li>
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Спортивные комплексы
                                            </a>
                                        </li>
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Военно-спортивная полоса препятствий
                                            </a>
                                        </li>
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Фото выполненных объектов
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </li>
                            <li class="menu__item menu-item-has-children">
                                <a href="" class="menu__link">
                                    ПРИЕМ МЕТАЛЛОЛОМА
                                </a>
                                <nav class="submenu">
                                    <ul class="submenu__list">
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Цены на металлолом
                                            </a>
                                        </li>
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Лом черных металлов
                                            </a>
                                        </li>
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Лом цветных металлов
                                            </a>
                                        </li>
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Пункты приема металла
                                            </a>
                                        </li>
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Вывоз металлолома
                                            </a>
                                        </li>
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Демонтаж конструкций
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </li>
                            <li class="menu__item menu-item-has-children">
                                <a href="" class="menu__link">
                                    Вторсырье
                                </a>
                                <nav class="submenu">
                                    <ul class="submenu__list">
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Макулатура
                                            </a>
                                        </li>
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Пленка
                                            </a>
                                        </li>
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Пластик
                                            </a>
                                        </li>
                                        <li class="submenu__item">
                                            <a class="submenu__link" href="#">
                                                Прочее
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </li>
                        </ul>
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
                                     src="<?php bloginfo('template_url'); ?>/assets/img/header/logo-phone.svg"
                                     alt="Logo">
                            </a>
                            <div class="header__search-phone">
                                <button class="header__search-btn header-search-btn-js" type="submit"></button>
                                <input class="header__search-input header-search-input-js" type="text"
                                       placeholder="Поиск по Броксталь">
                            </div>
                            <ul class="menu-left">
                                <li class="menu-left__item menu-item-has-children">
                                    <a class="menu-left__link" href="#">
                                        О компании
                                    </a>
                                    <ul class="submenu-left open">
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Доставка и монтаж
                                            </a>
                                        </li>
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Дилерам
                                            </a>
                                        </li>
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Заказать продукцию
                                            </a>
                                        </li>
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Конфиденциальность
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-left__item">
                                    <a class="menu-left__link" href="#">
                                        Новости
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a class="menu-left__link" href="#">
                                        Вакансии
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a class="menu-left__link" href="#">
                                        Контакты
                                    </a>
                                </li>
                            </ul>
                            <div class="header__aside">
                                <div class="header__socials">
                                    <a class="header__social" href="#">
                                        <img class="header__social-icon"
                                             src="<?php bloginfo('template_url'); ?>/assets/img/header/telegram.svg"
                                             alt="Telegram">
                                    </a>
                                    <a class="header__social" href="#">
                                        <img class="header__social-icon"
                                             src="<?php bloginfo('template_url'); ?>/assets/img/header/vk.svg"
                                             alt="Telegram">
                                    </a>
                                    <a class="header__social" href="#">
                                        <img class="header__social-icon"
                                             src="<?php bloginfo('template_url'); ?>/assets/img/header/whatsapp.svg"
                                             alt="Telegram">
                                    </a>
                                </div>
                                <a class="header__button" href="#">
                                    Консультация
                                </a>
                            </div>
                            <ul class="menu-left menu-right">
                                <li class="menu-left__item menu-item-has-children">
                                    <a class="menu-left__link" href="#">
                                        Металлопрокат
                                    </a>
                                    <ul class="submenu-left open">
                                        <li class="submenu-left__item  menu-item-has-children">
                                            <a class="submenu-left__link" href="#">
                                                Трубы
                                            </a>
                                            <ul class="submenu-left level-more open">
                                                <li class="submenu-left__item">
                                                    <a class="submenu-left__link" href="#">
                                                        Профильная труба
                                                    </a>
                                                </li>
                                                <li class="submenu-left__item">
                                                    <a class="submenu-left__link" href="#">
                                                        Труба ВГП
                                                    </a>
                                                </li>
                                                <li class="submenu-left__item">
                                                    <a class="submenu-left__link" href="#">
                                                        Труба электросварная прямошовная
                                                    </a>
                                                </li>
                                                <li class="submenu-left__item">
                                                    <a class="submenu-left__link" href="#">
                                                        Бесшовная труба
                                                    </a>
                                                </li>
                                                <li class="submenu-left__item">
                                                    <a class="submenu-left__link" href="#">
                                                        Труба электросварная низколегированная
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="submenu-left__item  menu-item-has-children">
                                            <a class="submenu-left__link" href="#">
                                                Сортовой прокат
                                            </a>
                                            <ul class="submenu-left level-more open">
                                                <li class="submenu-left__item">
                                                    <a class="submenu-left__link" href="#">
                                                        Арматура
                                                    </a>
                                                </li>
                                                <li class="submenu-left__item">
                                                    <a class="submenu-left__link" href="#">
                                                        Круг
                                                    </a>
                                                </li>
                                                <li class="submenu-left__item">
                                                    <a class="submenu-left__link" href="#">
                                                        Катанка
                                                    </a>
                                                </li>
                                                <li class="submenu-left__item">
                                                    <a class="submenu-left__link" href="#">
                                                        Вязальная проволока, проволока ВР-1
                                                    </a>
                                                </li>
                                                <li class="submenu-left__item">
                                                    <a class="submenu-left__link" href="#">
                                                        Полоса
                                                    </a>
                                                </li>
                                                <li class="submenu-left__item">
                                                    <a class="submenu-left__link" href="#">
                                                        Квадрат
                                                    </a>
                                                </li>
                                                <li class="submenu-left__item">
                                                    <a class="submenu-left__link" href="#">
                                                        Шестигранник
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="submenu-left__item  menu-item-has-children">
                                            <a class="submenu-left__link" href="#">
                                                Фасонный прокат
                                            </a>
                                            <ul class="submenu-left level-more open">
                                                <li class="submenu-left__item">
                                                    <a class="submenu-left__link" href="#">
                                                        Уголок
                                                    </a>
                                                </li>
                                                <li class="submenu-left__item">
                                                    <a class="submenu-left__link" href="#">
                                                        Балка
                                                    </a>
                                                </li>
                                                <li class="submenu-left__item">
                                                    <a class="submenu-left__link" href="#">
                                                        Швеллер
                                                    </a>
                                                </li>
                                                <li class="submenu-left__item">
                                                    <a class="submenu-left__link" href="#">
                                                        Швеллер гнутый
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="submenu-left__item  menu-item-has-children">
                                            <a class="submenu-left__link" href="#">
                                                Листовой прокат
                                            </a>
                                            <ul class="submenu-left level-more open">
                                                <li class="submenu-left__item">
                                                    <a class="submenu-left__link" href="#">
                                                        Лист горячекатаный
                                                    </a>
                                                </li>
                                                <li class="submenu-left__item">
                                                    <a class="submenu-left__link" href="#">
                                                        Лист холоднокатаный
                                                    </a>
                                                </li>
                                                <li class="submenu-left__item">
                                                    <a class="submenu-left__link" href="#">
                                                        Лист оцинкованный
                                                    </a>
                                                </li>
                                                <li class="submenu-left__item">
                                                    <a class="submenu-left__link" href="#">
                                                        Лист нержавеющий
                                                    </a>
                                                </li>
                                                <li class="submenu-left__item">
                                                    <a class="submenu-left__link" href="#">
                                                        Лист конструкционная сталь
                                                    </a>
                                                </li>
                                                <li class="submenu-left__item">
                                                    <a class="submenu-left__link" href="#">
                                                        Лист просечно-вытяжной
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="submenu-left__item  menu-item-has-children">
                                            <a class="submenu-left__link" href="#">
                                                Сетка
                                            </a>
                                            <ul class="submenu-left level-more open">
                                                <li class="submenu-left__item">
                                                    <a class="submenu-left__link" href="#">
                                                        Сетка-рабица
                                                    </a>
                                                </li>
                                                <li class="submenu-left__item">
                                                    <a class="submenu-left__link" href="#">
                                                        Кладочная сетка
                                                    </a>
                                                </li>
                                                <li class="submenu-left__item">
                                                    <a class="submenu-left__link" href="#">
                                                        Арматурная сетка
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Конструкционная сталь
                                            </a>
                                        </li>
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Металл б/у
                                            </a>
                                        </li>
                                        <li class="submenu-left__item  menu-item-has-children">
                                            <a class="submenu-left__link" href="#">
                                                Прочее
                                            </a>
                                            <ul class="submenu-left level-more open">
                                                <li class="submenu-left__item">
                                                    <a class="submenu-left__link" href="#">
                                                        Отводы
                                                    </a>
                                                </li>
                                                <li class="submenu-left__item">
                                                    <a class="submenu-left__link" href="#">
                                                        Метизы
                                                    </a>
                                                </li>
                                                <li class="submenu-left__item">
                                                    <a class="submenu-left__link" href="#">
                                                        Изделия из других материалов
                                                    </a>
                                                </li>
                                                <li class="submenu-left__item">
                                                    <a class="submenu-left__link" href="#">
                                                        Профнастил
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="menu-left menu-right column2">
                                <li class="menu-left__item menu-item-has-children">
                                    <a class="menu-left__link" href="#">
                                        Металлообработка
                                    </a>
                                    <ul class="submenu-left open">
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Лазерная резка
                                            </a>
                                        </li>
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Плазменная резка
                                            </a>
                                        </li>
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Гибка листа
                                            </a>
                                        </li>
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Гибка арматуры
                                            </a>
                                        </li>
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Гибка трубы
                                            </a>
                                        </li>
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Размотка арматуры
                                            </a>
                                        </li>
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Зачистка трубы
                                            </a>
                                        </li>
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Рубка листового проката
                                            </a>
                                        </li>
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Резка металла в размер
                                            </a>
                                        </li>
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Порошковая покраска
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="menu-left__item menu-item-has-children">
                                    <a class="menu-left__link" href="#">
                                        Прием металлолома
                                    </a>
                                    <ul class="submenu-left open">
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Цены на лом черных металлов
                                            </a>
                                        </li>
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Лом цветных металлов
                                            </a>
                                        </li>
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Пункты приема
                                            </a>
                                        </li>
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Демонтаж
                                            </a>
                                        </li>
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Вызов металлолома
                                            </a>
                                        </li>
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Организация сбора на предприятиях
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-left__item menu-item-has-children">
                                    <a class="menu-left__link" href="#">
                                        Вторсырьё
                                    </a>
                                    <ul class="submenu-left open">
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Организация сбора на предприятиях
                                            </a>
                                        </li>
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Экологическая документация
                                            </a>
                                        </li>
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Макулатура
                                            </a>
                                        </li>
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Картон
                                            </a>
                                        </li>
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Пластик
                                            </a>
                                        </li>
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Пленка
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-left__item menu-item-has-children">
                                    <a class="menu-left__link" href="#">
                                        Металлоконструкции
                                    </a>
                                    <ul class="submenu-left open">
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Строительные металлоконструкции
                                            </a>
                                        </li>
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Каркасы модульных зданий
                                            </a>
                                        </li>
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Балки
                                            </a>
                                        </li>
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Связи
                                            </a>
                                        </li>
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Фермы
                                            </a>
                                        </li>
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Прогоны
                                            </a>
                                        </li>
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Закладные
                                            </a>
                                        </li>
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Фахферк
                                            </a>
                                        </li>
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Надколонники
                                            </a>
                                        </li>
                                        <li class="submenu-left__item">
                                            <a class="submenu-left__link" href="#">
                                                Перголы
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="header__content-tablet">
                    <div class="header__addresses header__addresses-tablet">
                        <div class="header__address">
                            <div class="header__text">
                                <img class="header__text-icon"
                                     src="<?php bloginfo('template_url'); ?>/assets/img/header/map-white.svg" alt="alt">
                                г. Йошкар-Ола, ул. Строителей, 101Б
                            </div>
                            <a class="header__phone" href="tel:88362326265">
                                8 (8362) 32-62-65
                            </a>
                            <a class="header__address-btn" href="#">
                                Позвонить
                            </a>
                        </div>
                        <div class="header__address">
                            <div class="header__text">
                                <img class="header__text-icon"
                                     src="<?php bloginfo('template_url'); ?>/assets/img/header/map-white.svg" alt="alt">
                                п.Медведево,
                                ул. Чехова, 14
                            </div>
                            <a class="header__phone" href="tel:88362321515">
                                8 (8362) 32-15-15
                            </a>
                            <a class="header__address-btn" href="#">
                                Позвонить
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


