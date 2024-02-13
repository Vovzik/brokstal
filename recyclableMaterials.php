<?php /* Template Name: вторсырье */ ?>

<?php get_header(); ?>


<main class="main">
    <section class="category">
        <div class="category__content section-content">
            <div class="container">
                <?php include 'includes/breadcrumbs.php'  ?>
                <?php include 'includes/banner.php'  ?>
                <div class="content">
                    <?php get_sidebar() ?>
                    <div class="content__column">
                        <h2 class="title">
                            <?php the_field('zagolovok') ?>
                        </h2>
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
                        <?php include 'includes/sidebar.php'?>
                        <?php include 'includes/form.php'?>
                        <?php include 'includes/sendPhoto.php'?>
                        <?php include 'includes/callback.php'?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'includes/FAQ.php'?>
    <?php get_footer(); ?>

