<?php

add_action('wp_enqueue_scripts', 'my_wp_head_css' ); // хук автоматом сработает во время wp_head
function my_wp_head_css() {
    wp_enqueue_style( 'my_head_style', get_stylesheet_directory_uri() .'/assets/scss/main.css', array(), null );
}


add_action('wp_enqueue_scripts', 'my_wp_head_js' ); // хук автоматом сработает во время wp_head
function my_wp_head_js() {
    wp_enqueue_script( 'query', get_stylesheet_directory_uri() .'/assets/js/libs/jquery-3.5.1.min.js', array(), null, true );
    wp_enqueue_script( 'swiper', get_stylesheet_directory_uri() .'/assets/js/libs/swiper-bundle.min.js', array(), null, true );
    wp_enqueue_script( 'mask-phone', get_stylesheet_directory_uri() .'/assets/js/libs/mask.js', array(), null, true );
    wp_enqueue_script( 'main', get_stylesheet_directory_uri() .'/assets/js/main.js', array(), null, true );
}


//Добавление меню в админку
register_nav_menus(array(
    'top'    => 'Основное меню',    //Название месторасположения меню в шаблоне
));


//Удаляем лишние теги в contact form 7
add_filter('wpcf7_autop_or_not', '__return_false');