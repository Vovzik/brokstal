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


add_action('init', 'register_post_types');
function register_post_types(){
    register_taxonomy('catalog', array('productions'), array(
        'label'                 => 'Категории продукций',
        'labels'                => array(
            'name'              => 'Категории продукций',
            'singular_name'     => 'Категории продукций',
            'search_items'      => 'Искать продукцию',
            'all_items'         => 'Все продукции',
            'parent_item'       => 'Родит. продукция',
            'parent_item_colon' => 'Родит. продукция:',
            'edit_item'         => 'Редактировать продукцию',
            'update_item'       => 'Обновить продукцию',
            'add_new_item'      => 'Добавить продукцию',
            'new_item_name'     => 'Заголовок',
            'menu_name'         => 'Категории продукций',
        ),
        'description'           => 'Категории для продукций',
        'public'                => true,
        'show_in_nav_menus'     => true,
        'show_ui'               => true,
        'show_tagcloud'         => false,
        'hierarchical'          => true,
        'rewrite'               => array( 'hierarchical' => true ),
        'show_admin_column'     => true,
    ) );
// Объекты
    register_post_type('productions', array(
        'label'  => 'Продукция',
        'labels' => array(
            'name'               => 'Продукция',
            'singular_name'      => 'Продукция',
            'add_new'            => 'Добавить',
            'add_new_item'       => 'Введите заголовок',
            'edit_item'          => 'Редактирование продукции',
            'new_item'           => 'Новый продукт',
            'view_item'          => 'Посмотреть продукт',
            'search_items'       => 'Искать продукт',
            'not_found'          => 'продукция не найдено',
            'not_found_in_trash' => 'В корзине продукция не найдено',
            'parent_item_colon'  => '',
            'menu_name'          => 'продукция',
        ),
        'description'         => 'продукция',
        'public'              => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 23,
        'menu_icon'           => 'dashicons-plus-alt',
        'capability_type'   => 'post',
        'map_meta_cap'      => true,
        'hierarchical'        => false,
        'supports'            => array('title','thumbnail'),
        'taxonomies'          => array('catalog'),
        'has_archive'         => true,
        'rewrite'               => array(),
        'query_var'           => true,
    ) );
}


