<?php /* Template Name: Строительные металлоконструкции*/ ?>

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
                        <div class="wp-redactor">
                            <?php the_field('kontent') ?>
                        </div>
                        <section class="manufacturingStages">
                            <h2 class="manufacturingStages__title title24 ">
                                <?php the_field('zagolovok_etapov') ?>
                            </h2>
                            <div class="manufacturingStages__items">
                                <?php
                                // проверяем есть ли в повторителе данные
                                if (have_rows('etapy')):

                                    // перебираем данные
                                    while (have_rows('etapy')) : the_row(); ?>
                                        <div class="manufacturingStages__item">
                                            <img class="manufacturingStages__icon"
                                                 src="  <?php the_sub_field('ikonka_etapa') ?>" alt="alt">
                                            <p class="manufacturingStages__text">
                                                <?php the_sub_field('nazvanie_etapa') ?>
                                            </p>
                                        </div>
                                    <?php endwhile;

                                else :

                                    // вложенных полей не найдено

                                endif;

                                ?>
                            </div>
                        </section> 
                        <?php include 'includes/form-file.php'; ?>
                        <?php include 'includes/callback.php'; ?>
                        <?php include 'includes/sidebar.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>