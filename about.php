<?php /* Template Name: О компании*/ ?>

<?php get_header(); ?>


    <main class="main">
    <section class="category">
        <div class="category__content section-content">
            <div class="container">
                <?php  include 'includes/breadcrumbs.php'?>
                <?php  include 'includes/banner.php'?>
                <div class="content">
                    <?php get_sidebar() ?>
                    <div class="content__column">
                        <video class="video" controls="">
                            <source src="<?php the_field('ssylka_na_video') ?>" type="video/mp4">
                        </video>
                        <div class="wp-redactor">
                            <?php the_field('tekst_do_plashek') ?>
                        </div>
                        <div class="pictures">
                            <div class="pictures__items">

                                <?php

                                // проверяем есть ли в повторителе данные
                                if (have_rows('plashki_o_kompanii')):

                                    // перебираем данные
                                    while (have_rows('plashki_o_kompanii')) : the_row(); ?>
                                        <div class="pictures__item">
                                            <img class="pictures__img"
                                                 src="<?php the_sub_field('plashka_o_kompanii') ?>" alt="alt">
                                        </div>
                                    <?php endwhile;

                                else :

                                    // вложенных полей не найдено

                                endif;

                                ?>
                            </div>
                        </div>
                        <div class="wp-redactor">
                            <?php the_field('tekst_posle_plashek') ?>
                        </div>
                        <?php  include 'includes/sidebar.php'?>
                        <?php  include 'includes/callback.php'?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>