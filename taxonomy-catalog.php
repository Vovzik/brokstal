<?php get_header(); ?>

<?= get_queried_object()->parent ?>

<main class="main">
    <?php
    if (get_queried_object()->parent == 0) {
        get_template_part('templates/category');
    } else if (get_queried_object()->parent == 16) {
        get_template_part('templates/subcategory');
    }
    ?>
    <?php get_footer(); ?>
