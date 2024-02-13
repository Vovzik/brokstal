<?php /* Template Name: Каталог
 Template Post Type: post, page, product */ ?>

<?php get_header(); ?>


<main class="main">
    <section class="catalog">
        <div class="catalog__content section-content">
            <div class="container">
                <?php include 'includes/breadcrumbs.php' ?>
                <h1 class="catalog__title title-h1">
                    <?php the_field('zagolovok') ?>
                </h1>
                <div class="catalog__items">
                    <?php
                    // проверяем есть ли в повторителе данные
                    if (have_rows('plashki_kategorii')):
                        // перебираем данные
                        while (have_rows('plashki_kategorii')) : the_row(); ?>
                            <a class="catalog__item" href="<?php the_sub_field('ssylka_na_plashke_kategorii') ?>">
                                <img class="catalog__img" src="<?php the_sub_field('fon_plashki_kategorii') ?>" alt="Картинка">
                                <h2 class="catalog__subtitle">
                                    <?php the_sub_field('nazvanie_plashki_kategorii') ?>
                                </h2>
                                <span class="catalog__btn button">
                                  Подробнее
                                </span>
                            </a>
                        <?php endwhile;
                    else :
                        // вложенных полей не найдено
                    endif;
                    ?>
                </div>
                <div class="wp-redactor">
                    <?php the_field('kontent') ?>
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
                        <img class="services__img" src="<?php bloginfo('template_url'); ?>/assets/img/services/1.jpg"
                             alt="alt">
                    </a>
                    <a class="services__item" href="#">
                        <img class="services__img" src="<?php bloginfo('template_url'); ?>/assets/img/services/1.jpg"
                             alt="alt">
                    </a>
                    <a class="services__item" href="#">
                        <img class="services__img" src="<?php bloginfo('template_url'); ?>/assets/img/services/1.jpg"
                             alt="alt">
                    </a>
                    <a class="services__item" href="#">
                        <img class="services__img" src="<?php bloginfo('template_url'); ?>/assets/img/services/1.jpg"
                             alt="alt">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>

