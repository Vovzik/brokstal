<?php /* Template Name: Заказать продукцию */ ?>

<?php get_header(); ?>


<main class="main">
    <section class="category">
        <div class="category__content section-content">
            <div class="container">
                <?php include 'includes/breadcrumbs.php' ?>
                <?php include 'includes/banner.php' ?>
                <div class="content">
                    <?php get_sidebar(); ?>
                    <div class="content__column">
                        <h2 class="title24">
                            <?php the_field('zagolovok') ?>
                        </h2>
                        <ul class="causes">
                            <?php
                            // проверяем есть ли в повторителе данные
                            if (have_rows('spisok')):
                                // перебираем данные
                                while (have_rows('spisok')) : the_row(); ?>
                                    <li class="causes__list-item">
                                        <img class="causes__icon" src="<?php the_sub_field('kartinka') ?>" alt="alt">
                                        <h3 class="causes__title">
                                            <?php the_sub_field('pod_zagolovok') ?>
                                        </h3>
                                        <p class="causes__text">
                                            <?php the_sub_field('opisanie') ?>
                                        </p>
                                    </li>
                                <?php endwhile;
                            else :
                                // вложенных полей не найдено
                            endif;
                            ?>
                        </ul>
                        <?php include 'includes/callback.php'; ?>
                        <?php include 'includes/sidebar.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>


