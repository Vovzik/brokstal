<?php

add_action('wp_enqueue_scripts', 'my_wp_head_css'); // хук автоматом сработает во время wp_head
function my_wp_head_css()
{
    wp_enqueue_style('my_head_style', get_stylesheet_directory_uri() . '/assets/scss/main.css', array(), null);
}


add_action('wp_enqueue_scripts', 'my_wp_head_js'); // хук автоматом сработает во время wp_head
function my_wp_head_js()
{
    wp_enqueue_script('query', get_stylesheet_directory_uri() . '/assets/js/libs/jquery.min.js', array(), null, true);
    wp_enqueue_script('swiper', get_stylesheet_directory_uri() . '/assets/js/libs/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('mask-phone', get_stylesheet_directory_uri() . '/assets/js/libs/mask.js', array(), null, true);
    wp_enqueue_script('scroll', get_stylesheet_directory_uri() . '/assets/js/libs/jquery.mCustomScrollbar.concat.min.js', array(), null, true);
    wp_enqueue_script('main', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), null, true);
}


//Добавление меню в админку
register_nav_menus(array(
    'top' => 'Основное меню',    //Название месторасположения меню в шаблоне
));


//Удаляем лишние теги в contact form 7
add_filter('wpcf7_autop_or_not', '__return_false');


//Добавление постов по кнопке показать еще
add_action('wp_head', 'myplugin_ajaxurl');
add_action('wp_ajax_loadmore', 'true_loadmore');
add_action('wp_ajax_nopriv_loadmore', 'true_loadmore');

function myplugin_ajaxurl() {

    echo '<script type="text/javascript">
           var ajaxurl = "' . admin_url('admin-ajax.php') . '";
         </script>';
}
function true_loadmore() {
    $paged = !empty($_POST['paged']) ? $_POST['paged'] : 1;
    $paged++;
    $args = array('posts_per_page' => 3, 'paged' => $paged);
    query_posts($args);

    while (have_posts()) : the_post(); ?>
       <?php get_template_part('template-parts/element')?>
    <?php
    endwhile;
    die;
}


add_action( 'after_setup_theme', function () {
    add_theme_support( 'woocommerce' );
} );









