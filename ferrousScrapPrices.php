<?php /* Template Name: Цены на лом черных металлов*/ ?>

<?php get_header(); ?>

    <main class="main">
    <section class="category">
        <div class="category__content section-content">
            <div class="container">
                <?php include 'includes/breadcrumbs.php'?>
                <?php include 'includes/banner.php' ?>
                <div class="content">
                    <?php get_sidebar(); ?>
                    <div class="content__column">
                        <div class="wp-redactor">
                            <?php echo get_field('tekstovoe_pole')[0]['tekst']; ?>
                        </div>
                        <table class="table">
                            <tr class="table__tr">
                                <?php

                                // проверяем есть ли в повторителе данные
                                if (have_rows('shapka')):

                                    // перебираем данные
                                    while (have_rows('shapka')) : the_row(); ?>
                                        <th class="table__th">
                                            <?php the_sub_field('kolonka') ?>
                                        </th>
                                    <?php endwhile;

                                else :

                                    // вложенных полей не найдено

                                endif;

                                ?>
                            </tr>
                            <?php
                            // проверяем есть ли в повторителе данные
                            if (have_rows('tablicza')):
                                // перебираем данные
                                while (have_rows('tablicza')) : the_row(); ?>
                                    <tr class="table__tr">
                                        <?php
                                        // проверяем есть ли в повторителе данные
                                        if (have_rows('stroka')):
                                            // перебираем данные
                                            while (have_rows('stroka')) : the_row(); ?>
                                                <td class="table__td">
                                                    <?php the_sub_field('tekst_kolonki') ?>
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
                        <div class="wp-redactor">
                            <?php echo get_field('tekstovoe_pole')[1]['tekst']; ?>
                        </div>
                        <table class="table">
                            <tr class="table__tr">
                            <?php

                            // проверяем есть ли в повторителе данные
                            if (have_rows('shapka2')):

                                // перебираем данные
                                while (have_rows('shapka2')) : the_row(); ?>
                                    <th class="table__th">
                                        <?php the_sub_field('nazvanie2') ?>
                                    </th>
                                <?php endwhile;

                            else :

                                // вложенных полей не найдено

                            endif;

                            ?>
                            </tr>

                            <?php
                            // проверяем есть ли в повторителе данные
                            if (have_rows('stroka2')):
                                // перебираем данные
                                while (have_rows('stroka2')) : the_row(); ?>
                                    <tr class="table__tr">
                                        <?php
                                        // проверяем есть ли в повторителе данные
                                        if (have_rows('kolonka2')):
                                            // перебираем данные
                                            while (have_rows('kolonka2')) : the_row(); ?>
                                                <td class="table__td">
                                                    <?php the_sub_field('soderzhanie2') ?>
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
                        <div class="wp-redactor">
                            <?php echo get_field('tekstovoe_pole')[2]['tekst']; ?>
                        </div>
                        <?php include 'includes/form.php'; ?>
                        <div class="wp-redactor">
                            <?php echo get_field('tekstovoe_pole')[3]['tekst']; ?>
                        </div>
                        <section class="typesMetals">
                            <div class="typesMetals__items">
                                <?php
                                // проверяем есть ли в повторителе данные
                                if (have_rows('elementy')):
                                    // перебираем данные
                                    while (have_rows('elementy')) : the_row(); ?>
                                        <div class="typesMetals__item">
                                            <h2 class="typesMetals__title">
                                                <?php the_sub_field('zagolovok') ?>
                                            </h2>
                                            <p class="typesMetals__text">
                                                <?php the_sub_field('opisanie') ?>
                                            </p>
                                        </div>

                                    <?php endwhile;
                                else :

                                    // вложенных полей не найдено

                                endif;
                                ?>
                            </div>
                        </section>
                        <div class="wp-redactor">
                            <?php echo get_field('tekstovoe_pole')[4]['tekst']; ?>
                        </div>
                        <?php include 'includes/sidebar.php'; ?>
                        <?php include 'includes/callback.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>







