<?php /* Template Name: Новости*/ ?>



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
                        <div class="content__column3 items-elements-js">
                            <?php query_posts('posts_per_page=3');
                            while (have_posts()) : the_post(); ?>
                                <?php get_template_part('template-parts/element')?>
                            <?php endwhile; ?>
                        </div>
                        <?php
                        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                        $max_pages = $wp_query->max_num_pages;
                        if ($paged < $max_pages) {
                            echo '<a id="loadmore" class="content__btn btn" href="#" data-max-pages="' . $max_pages . '" data-paged="' . $paged . '">Загрузить ещё</a>';
                        }
                          wp_reset_query();
                        ?>

                        <?php include 'includes/sidebar.php' ?>
                        <?php include 'includes/callback.php' ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>

