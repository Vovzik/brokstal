<?php /* Template Name: Гибка трубы*/ ?>

<?php get_header(); ?>


<main class="main">
    <section class="category">
        <div class="category__content section-content">
            <div class="container">
                <?php include 'includes/breadcrumbs.php'?>
                <?php include 'includes/banner.php'?>
                <div class="content">
                    <?php get_sidebar(); ?>
                    <div class="content__column">
                       <h2 class="title24">
                           <?php the_field('zagolovok') ?>
                       </h2>
                        <table class="table">
                        <tr class="table__tr">
                            <?php
                            // проверяем есть ли в повторителе данные
                            if (have_rows('shapka')):
                                // перебираем данные
                                while (have_rows('shapka')) : the_row(); ?>
                                    <th class="table__th" <?php the_sub_field('obedinenie_yachejki') ?> style="text-align: center">
                                        <?php the_sub_field('nazvanie') ?>
                                    </th>
                                <?php endwhile;
                            else :

                                // вложенных полей не найдено
                            endif;
                            ?>
                        </tr>
                        <?php

                        // проверяем есть ли в повторителе данные
                        if (have_rows('stroka')):

                            // перебираем данные
                            while (have_rows('stroka')) : the_row(); ?>
                                <tr class="table__tr">
                                    <?php

                                    // проверяем есть ли в повторителе данные
                                    if (have_rows('kolonka')):

                                        // перебираем данные
                                        while (have_rows('kolonka')) : the_row(); ?>
                                            <td class="table__td"  <?php the_sub_field('obedinenie_kolonki'); ?> >
                                                <?php the_sub_field('soderzhanie'); ?>
                                            </td>
                                        <?php endwhile;

                                    else :

                                        // вложенных полей не найдено

                                    endif;

                                    ?>
                                </tr>
                            <?php endwhile;

                        else :

                            // вложенных полей не найдено

                        endif;

                        ?>
                        </table>
                        <video class="video" controls>
                            <source src="<?php the_field('ssylka_na_video') ?>" type="video/mp4">
                        </video>
                        <div class="wp-redactor">
                            <?php echo get_field('tekstovoe_pole')[0]['tekst']; ?>
                        </div>
                        <div class="photo">
                            <div class="photo__items">
                                <?php

                                // проверяем есть ли в повторителе данные
                                if (have_rows('fotografii')):

                                    // перебираем данные
                                    while (have_rows('fotografii')) : the_row(); ?>
                                        <div class="photo__item">
                                            <img class="photo__item-img" src="<?php the_sub_field('fotografiya') ?> "
                                                 alt="alt">
                                        </div>

                                    <?php endwhile;

                                else :

                                    // вложенных полей не найдено

                                endif;

                                ?>

                            </div>
                        </div>
                        <div class="wp-redactor">
                            <?php echo get_field('tekstovoe_pole')[1]['tekst']; ?>
                        </div>
                        <?php include 'includes/form-file.php'; ?>
                        <?php include 'includes/callback.php'; ?>
                        <?php include 'includes/sidebar.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>


