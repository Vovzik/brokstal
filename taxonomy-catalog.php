<?php get_header(); ?>


<main class="main">
    <?php
    if (get_queried_object()->parent == 0) {
        get_template_part('templates/category');
    } else if (get_queried_object()->parent == 16) {
        get_template_part('templates/subcategory');
    } else if (get_queried_object()->parent == 17) {
        get_template_part('templates/products');
    }
    ?>
    <?php get_footer(); ?>
