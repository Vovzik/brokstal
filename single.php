<?php global $post; ?>


<?php get_header(); ?>


<main class="main">
    <section class="detailed-news">
        <div class="section-content">
            <div class="container">
                <?php include 'includes/breadcrumbs.php' ?>
                <?php while (have_posts()) : ?>
                    <?php the_post() ?>
                    <?php include 'template-parts/content-post.php' ?>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>

