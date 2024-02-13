<?php /* Template Name: Пленки*/ ?>

<?php get_header(); ?>


<main class="main">
    <section class="category">
        <div class="category__content section-content">
            <div class="container">
                <?php include "includes/breadcrumbs.php"; ?>
                <?php include "includes/banner.php"; ?>
                <div class="content">
                    <?php get_sidebar() ?>
                    <div class="content__column">
                        <div class="wp-redactor">
                          <?php the_field('kontent') ?>
                        </div>
                        <?php include "includes/sidebar.php"; ?>
                        <?php include "includes/form.php"; ?>
                        <?php include "includes/sendPhoto.php"; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include "includes/FAQ.php"; ?>
    <?php get_footer(); ?>

