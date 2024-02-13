<?php /* Template Name: Прием металлолома*/ ?>

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
                        <h2 class="title32">
                            <?php the_field('zagolovok') ?>
                        </h2>
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
                        <h2 class="title">
                            <?php echo get_field('tekstovoe_pole')[1]['tekst']; ?>
                        </h2>
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
                        <section class="worth">
                            <div class="worth__content">
                                <div class="worth__items2">
                                    <?php
                                    // проверяем есть ли в повторителе данные
                                    if (have_rows('preimushhestva')):
                                        // перебираем данные
                                        while (have_rows('preimushhestva')) : the_row(); ?>
                                            <div class="worth__item">
                                                <h2 class="worth__title">
                                                    <?php the_sub_field('nazvanie_preimushhestva') ?>
                                                </h2>
                                                <p class="worth__text">
                                                    <?php the_sub_field('opisanie_preimushhestva') ?>
                                                </p>
                                            </div>
                                        <?php endwhile;
                                    else :
                                        // вложенных полей не найдено
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </section>
                        <div class="wp-redactor">
                            <?php echo get_field('tekstovoe_pole')[2]['tekst']; ?>
                        </div>
                        <?php include "includes/form.php"; ?>
                        <?php include "includes/sidebar.php"; ?>
                        <?php include "includes/callback.php"; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include "includes/FAQ.php"; ?>
    <?php get_footer(); ?>
