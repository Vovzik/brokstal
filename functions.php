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



function brokstal_dump( $data ) {
    echo "<pre>" . print_r( $data, 1 ) . "</pre>";
}

add_action('woocommerce_product_options_general_product_data', 'shop_add_custom_fields');
function shop_add_custom_fields() {
echo '<div class="options_group">';
  woocommerce_wp_text_input( array(
  'id'                => '_price_ed',
  'label'             => __( 'Цена за 1 ед. (₽)', 'woocommerce' ),
  'placeholder'       => '',
  'desc_tip'          => 'true',
  'custom_attributes' => array(),
  'description'       => __( '', 'woocommerce' ),
  ) );
  echo '</div>';
}

add_action('woocommerce_product_options_general_product_data', 'shop_add_custom_fields1');
function shop_add_custom_fields1() {
echo '<div class="options_group">';
  woocommerce_wp_text_input( array(
  'id'                => '_price_metr',
  'label'             => __( 'Цена за 1 метр. (₽)', 'woocommerce' ),
  'placeholder'       => '',
  'desc_tip'          => 'true',
  'custom_attributes' => array(),
  'description'       => __( '', 'woocommerce' ),
  ) );

  echo '</div>';
}

add_action( 'woocommerce_process_product_meta', 'save_price_ed', 10, 1 );
function save_price_ed( $post_id ){
$text_field = isset( $_POST['_price_ed'] ) ? sanitize_text_field( $_POST['_price_ed'] ) : '';
update_post_meta($post_id,'_price_ed', $text_field );
}

add_action( 'woocommerce_process_product_meta', 'save_price_metr', 10, 1 );
function save_price_metr( $post_id ){
$text_field = isset( $_POST['_price_metr'] ) ? sanitize_text_field( $_POST['_price_metr'] ) : '';
update_post_meta($post_id,'_price_metr', $text_field );
}

// Границы запасов
add_action('woocommerce_product_options_stock_status', 'shop_add_custom_fields_granica_middle');
function shop_add_custom_fields_granica_middle() {
echo '<div class="options_group">';
  woocommerce_wp_text_input( array(
  'id'                => '_granica_middle',
  'label'             => __( 'Граница средних запасов', 'woocommerce' ),
  'placeholder'       => 'Порог для всего магазина (2000)',
  'desc_tip'          => 'true',
  'custom_attributes' => array(),
  'description'       => __( '2000', 'woocommerce' ),
  'value'             => '2000',
  ) );
  echo '</div>';
}

add_action('woocommerce_product_options_stock_status', 'shop_add_custom_fields_granica_max');
function shop_add_custom_fields_granica_max() {
echo '<div class="options_group">';
  woocommerce_wp_text_input( array(
  'id'                => '_granica_max',
  'label'             => __( 'Граница больших запасов', 'woocommerce' ),
  'placeholder'       => 'Порог для всего магазина (1000000)',
  'desc_tip'          => 'true',
  'custom_attributes' => array(),
  'description'       => __( '1000000', 'woocommerce' ),
  'value'             => '1000000',
  ) );
  echo '</div>';
}

add_action( 'woocommerce_process_product_meta', 'save_granica_middle', 10, 1 );
function save_granica_middle( $post_id ){
$text_field = isset( $_POST['_granica_middle'] ) ? sanitize_text_field( $_POST['_granica_middle'] ) : '2000';
update_post_meta($post_id,'_granica_middle', $text_field );
}
add_action( 'woocommerce_process_product_meta', 'save_granica_max', 10, 1 );
function save_granica_max( $post_id ){
$text_field = isset( $_POST['_granica_max'] ) ? sanitize_text_field( $_POST['_granica_max'] ) : '1000000';
update_post_meta($post_id,'_granica_max', $text_field );
}


require_once get_template_directory() . '/includes/menu-top-class.php';
require_once get_template_directory() . '/includes/registration-type-menu.php';
include 'includes/customizer.php';
include 'includes/woocommerce-hooks.php';