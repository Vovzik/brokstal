<?php /* Template Name: Лом цветных металлов*/ ?>

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
                            <?php echo get_field('tekstovoe_pole')[0]['tekst']; ?>
                        </div>
                        <table class="table-blue">
                            <?php
                            // проверяем есть ли в повторителе данные
                            if (have_rows('tablicza')):
                                // перебираем данные
                                while (have_rows('tablicza')) : the_row(); ?>
                                    <tr class="table-blue__tr">
                                        <?php
                                        // проверяем есть ли в повторителе данные
                                        if (have_rows('stroka')):
                                            // перебираем данные
                                            while (have_rows('stroka')) : the_row(); ?>
                                                <td class="table-blue__td">
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
                        <?php include 'includes/form.php'; ?>
                        <?php include 'includes/sidebar.php'; ?>
                        <?php include 'includes/callback.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'includes/FAQ.php'; ?>
    <?php get_footer(); ?>







