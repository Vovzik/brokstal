<?php /* Template Name: Каталог
 Template Post Type: post, page, product */ ?>

<?php get_header(); ?>


<main class="main">
    <section class="catalog">
        <div class="catalog__content section-content">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="#">Главная</a></li>
                    <li>Каталог</li>
                </ul>
                <h1 class="catalog__title title-h1">
                    Каталог продукции
                </h1>
                <div class="catalog__items">
                    <a class="catalog__item" href="#">
                        <img class="catalog__img" src="<?php bloginfo('template_url'); ?>/assets/img/catalog/1.jpg" alt="Картинка">
                        <h2 class="catalog__subtitle">
                            Металлопрокат
                        </h2>
                        <span class="catalog__btn button">
                           Подробнее
                        </span>
                    </a>
                    <a class="catalog__item" href="#">
                        <img class="catalog__img" src="<?php bloginfo('template_url'); ?>/assets/img/catalog/2.jpg" alt="Картинка">
                        <h2 class="catalog__subtitle">
                            Металлоконструкции
                        </h2>
                        <span class="catalog__btn button">
                           Подробнее
                        </span>
                    </a>
                </div>
                <div class="wp-redactor">
                    <h3>
                        Продукция компании «Броксталь»
                    </h3>
                    <p>
                        Производим стильное оборудование для уличных детских площадок и дворов с учетом детей разного возраста: дошкольников, школьников, молодежи. В каталоге размещены актуальные цены и подробные требования безопасности предъявляемые к детским игровым площадкам, местоположение и приоритетное размещение элементов (придомовая территория, коттедж, школьный или детсадовский двор). Подскажем как выбрать детскую площадку, название оборудования, какие подобрать элементы и покажем как она будет выглядеть на 3D проекте при монтаже на территории!
                    </p>
                    <p>
                        Большие игровые комплексы можно купить для дворов многоквартирных домов, а небольшие «городки» с двумя-тремя качелями и горкой приобрести на дачный участок.
                    </p>
                    <h3>
                        Наши преимущества
                    </h3>
                    <ol>
                        <li>
                            Соответствие требованиям ГОСТ к площадкам, российским и международным нормам безопасности;
                        </li>
                        <li>
                            Изготовление из качественных материалов, в том числе импортных;
                        </li>
                        <li>
                            Разработка и создание конструкций уникального дизайна;
                        </li>
                        <li>
                            Большой ассортимент в интернет-магазине;
                        </li>
                        <li>
                            Доставка и монтаж под ключ;
                        </li>
                        <li>
                            Отличные предложения оптовым покупателям;
                        </li>
                        <li>
                            Продукция для детей разных возрастов, от самых юных до подростков;
                        </li>
                        <li>
                            Составим проект бесплатно, при заказе комплексной уличной площадки!
                        </li>
                    </ol>
                    <p>
                        Доставка и установка игровых комплексов по всей России, странам СНГ. Офисы в Москве и других крупных городах.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="services">
        <div class="services__content">
            <div class="container">
                <h2 class="services__title">
                    Популярные товары
                </h2>
                <div class="services__items">
                    <a class="services__item" href="#">
                        <img class="services__img" src="<?php bloginfo('template_url'); ?>/assets/img/services/1.jpg" alt="alt">
                    </a>
                    <a class="services__item" href="#">
                        <img class="services__img" src="<?php bloginfo('template_url'); ?>/assets/img/services/1.jpg" alt="alt">
                    </a>
                    <a class="services__item" href="#">
                        <img class="services__img" src="<?php bloginfo('template_url'); ?>/assets/img/services/1.jpg" alt="alt">
                    </a>
                    <a class="services__item" href="#">
                        <img class="services__img" src="<?php bloginfo('template_url'); ?>/assets/img/services/1.jpg" alt="alt">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>

