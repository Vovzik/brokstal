<?php /* Template Name: Металлоконструкции*/ ?>

<?php get_header(); ?>


<main class="main">
    <section class="category">
        <div class="category__content section-content">
            <div class="container">
                <?php include "includes/breadcrumbs.php"; ?>
                <?php include "includes/banner.php"; ?>
                <div class="content">
                    <?php get_sidebar(); ?>
                    <div class="content__column">
                        <div class="grid-column">
                            <?php
                            // проверяем есть ли в повторителе данные
                            if (have_rows('plashki')):
                                // перебираем данные
                                while (have_rows('plashki')) : the_row(); ?>
                                    <a class="grid-column__item" href="<?php the_sub_field('ssylka_plashki') ?>">
                                        <h2 class="grid-column__title">
                                            <?php the_sub_field('nazvanie_plashki') ?>
                                        </h2>
                                        <img class="grid-column__img" src="<?php the_sub_field('kartinka_plashki') ?>" alt="alt">
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
                        <?php include 'includes/callback.php'?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>
