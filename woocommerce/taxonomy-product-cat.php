<?php get_header();

$queried_object = get_queried_object();
$current_cat_id = $queried_object->term_id;
$current_cat_name = $queried_object->name;
$parent_cat_id = $queried_object->parent;
$parent_cat_name = get_the_category_by_ID($parent_cat_id);


$term = get_terms($queried_object);

function check_if_category_has_child()
{

    $term = get_queried_object();

    $children = get_terms($term->taxonomy, array(
        'parent' => $term->term_id,
        'hide_empty' => false
    ));

    return $children;
}


if (check_if_category_has_child()) { ?>

    <section class="category">
        <div class="category__content section-content">
            <div class="container">
                <div class="breadcrumbs">
                <span>
                    <span>
                        <a href="http://brokstal.dakalipa.beget.tech/">Главная страница</a>
                    </span> »
                    <span>
                        <a href="http://brokstal.dakalipa.beget.tech/catalog/">Каталог</a>
                    </span> »
                    <span>
                        <a href="http://brokstal.dakalipa.beget.tech/catalog/metalloprokat/">Металлопрокат</a>
                    </span> »
                    <span class="breadcrumb_last" aria-current="page"><?php echo $current_cat_name; ?></span>
                </span>
                </div>


                <div class="category__box"
                     style='background-image: url("<?php echo get_field('fon_kategorii', $queried_object); ?>")'>
                    <div class="category__info">
                        <h1 class="category__title">
                            <?php single_cat_title() ?>
                        </h1>

                        <p>
                            <?php the_field('opisanie_kategorii', $queried_object) ?>
                        </p>
                    </div>
                    <a class="category__btn" href="<?php the_field('ssylka_na_knopke', $queried_object) ?>">
                        <?php the_field('tekst_na_knopke', $queried_object) ?>
                    </a>
                </div>

                <div class="content">

                    <aside class="content__aside">
                        <ul class="sidebar-menu">
                            <?php
                            $args = array(
                                'taxonomy' => 'product_cat',
                                'parent' => '103',
                                'orderby' => 'name',
                                'show_count' => 0,
                                'pad_counts' => 0,
                                'hierarchical' => 0,
                                'hide_empty' => 0
                            );
                            $all_categories = get_categories($args); ?>
                            <?php foreach ($all_categories as $cat) {
                                $args2 = array(
                                    'taxonomy' => 'product_cat',
                                    'parent' => $cat->term_id,
                                    'orderby' => 'name',
                                    'show_count' => 0,
                                    'pad_counts' => 0,
                                    'hierarchical' => 0,
                                    'hide_empty' => 0
                                );
                                $all_categories2 = get_categories($args2);
                                if ($all_categories2) { ?>
                                    <li class="menu-item-has-children">
                                        <a href="<?php echo get_term_link($cat->slug, 'product_cat'); ?>">
                                            <?php echo $cat->name; ?>
                                        </a>
                                        <ul class="sub-menu">
                                            <?php foreach ($all_categories2 as $cat2) { ?>
                                                <li>
                                                    <a href="<?php echo get_term_link($cat2->slug, 'product_cat'); ?>">
                                                        <?php echo $cat2->name; ?>
                                                    </a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                <?php } else { ?>
                                    <li>
                                        <a href="<?php echo get_term_link($cat->slug, 'product_cat'); ?>">
                                            <?php echo $cat->name; ?>
                                        </a>
                                    </li>
                                <?php }
                            } ?>
                        </ul>
                    </aside>
                    <div class="content__column">
                        <?php the_field('tekstovyj_redaktor', $queried_object) ?>
                        <div class="category__items">

                            <?php $category = get_queried_object();

                            $args = array(
                                'child_of' => $category->term_id,
                                'taxonomy' => 'product_cat',
                                'hide_empty' => false,
                            );
                            $product_categories = get_terms($args);

                            foreach ($product_categories as $product_category) {
                                $thumbnail_id = get_term_meta($product_category->term_id, 'thumbnail_id', true);

                                // get the image URL
                                $image = wp_get_attachment_url($thumbnail_id);
                                ?>
                                <a href="<?php echo get_term_link($product_category); ?>" class="category__item">
                                    <img class="category__img" src="<?php echo $image; ?>"
                                         alt="">
                                    <h3 class="category__subtitle"><?php echo $product_category->name; ?> </h3>

                                </a>
                            <?php } ?>


                        </div>
                    </div>
                </div>
                <?php the_field('tekstovyj_redaktor', $queried_object) ?>
            </div>
        </div>
    </section>


    <?php
} else {
    ?>
    <section class="products">
        <div class="products__content section-content">
            <div class="container">
                <div class="breadcrumbs">
                <span>
                    <span>
                        <a href="/">Главная страница</a>
                    </span> »
                    <span>
                        <a href="/catalog/">Каталог</a>
                    </span> »
                    <span>
                        <a href="/catalog/metalloprokat/">Металлопрокат</a>
                    </span> »
                     <span>
                        <a href="<?php echo $parent_cat_name; ?>"><?php echo $parent_cat_name; ?></a>
                    </span> »
                    <span class="breadcrumb_last" aria-current="page"><?php echo $current_cat_name; ?></span>
                </span>
                </div>
                <div class="products__inner">
                    <div class="products__column">
                        <a class="products__back" href="javascript:history.back()">
                            Вернуться назад
                        </a>
                        <h1 class="products__title">
                            <?php single_cat_title() ?>
                        </h1>
                    </div>
                    <a class="category category__btn products__btn" href="#">
                        Скачать прайс на металлопрокат
                    </a>
                </div>
                <table class="products__table">
                    <tr class="products__tr">
                        <th class="products__th">
                            Наименование товара
                        </th>
                        <th class="products__th">
                            Длина, м
                        </th>
                        <th class="products__th">
                            Цена за 1 шт. р.
                        </th>
                        <th class="products__th">
                            Цена за ед.(лист, метр,шт.), р.
                        </th>
                        <th class="products__th">
                            Цена за кг, р.
                        </th>
                        <th class="products__th">
                            Единицы
                        </th>
                        <th class="products__th">
                            Количество
                        </th>
                        <th class="products__th">
                            Наличие на складе
                        </th>
                        <th class="products__th">
                            Наличие по адресу
                        </th>
                        <th class="products__th">
                            В корзину
                        </th>
                    </tr>
                    <?php
                    $args = array(
                        'post_type' => 'product',
                        'taxonomy' => 'product_cat',
                        'term' => $current_cat_name,
                        'posts_per_page' => -1,
                        'orderby' => 'price'
                    );
                    $featured_query = new WP_Query($args);
                    if ($featured_query->have_posts()) :
                        while ($featured_query->have_posts()) :
                            $featured_query->the_post();
                            $product = get_product($featured_query->post->ID);
                            ?>
                            <tr class="products__tr">
                                <td class="products__td">
                                    <a class="products__link-detail" href="<?php echo get_permalink($product->ID) ?>">
                                        <?php echo $product->name; ?>
                                    </a>
                                </td>
                                <td class="products__td">
                                    <?php echo $product->dlina; ?>
                                </td>
                                <td class="products__td">
                                    <?php echo $product->price; ?>
                                </td>
                                <td class="products__td">
                                    <?php echo $product->price_ed; ?>
                                </td>
                                <td class="products__td">
                                    <?php echo $product->price_kg; ?>
                                </td>
                                <td class="products__td">
                                    <div class="select">
                                        <div class="select__trigger select__trigger-js">
                                            <span>Метры</span>
                                            <div class="select__arrow">
                                                <svg width="14" height="9" viewBox="0 0 14 9" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 1L7 7L13 1" stroke="#003B81" stroke-width="2"
                                                          stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="select__drop select__drop-js">
                                            <ul class="select__list">
                                                <li>
                                                    <input id="select_0" type="radio" name="select"/>
                                                    <label for="select_0">Штуки</label>
                                                </li>
                                                <li>
                                                    <input id="select_1" type="radio" name="select"/>
                                                    <label for="select_1">Кг</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                                <td class="products__td">
                                    <div class="products__value-inner">
                                        <button class="products__minus js__products-minus" type="button">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/products/minus.svg"
                                                 alt="alt">
                                        </button>
                                        <input type="hidden" name="field" class="products__value js__products-value"
                                               value="1"/>

                                        <?php woocommerce_quantity_input(array(
                                            'min_value' => apply_filters('woocommerce_quantity_input_min', 1, $product),
                                            'max_value' => apply_filters('woocommerce_quantity_input_max', $product->backorders_allowed() ? '' : $product->get_stock_quantity(), $product)
                                        )); ?>

                                        <button class="products__plus js__products-plus" type="button">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/products/plus.svg"
                                                 alt="alt">
                                        </button>
                                    </div>
                                </td>
                                <td class="products__td">
                                    <div class="products__td-box">
                                        <img class="products__td-existence"
                                             src="<?php bloginfo('template_url'); ?>/assets/img/products/line.svg"
                                             alt="alt">
                                    </div>
                                    <div class="products__td-box">
                                        <img class="products__td-existence"
                                             src="<?php bloginfo('template_url'); ?>/assets/img/products/line2.svg"
                                             alt="alt">
                                    </div>
                                </td>
                                <td class="products__td">
                                    <div class="products__address products__address_no">
                                        г. Йошкар-Ола
                                    </div>
                                    <div class="products__address">
                                        п. Медведево
                                    </div>
                                </td>
                                <td class="products__td">
                                    <form class="cart" method="post" enctype='multipart/form-data'>
                                        <?php do_action('woocommerce_before_add_to_cart_button'); ?>
                                        <?php if (!$product->is_sold_individually())
                                        ?>
                                        <input type="hidden" name="add-to-cart"
                                               value="<?php echo esc_attr($product->id); ?>"/>
                                        <button type="submit"
                                                class="products__td-basket single_add_to_cart_button button alt"><?php echo $product->single_add_to_cart_text(); ?></button>

                                        <?php do_action('woocommerce_after_add_to_cart_button'); ?>
                                    </form>
                                    <?php do_action('woocommerce_after_add_to_cart_form'); ?>

                                </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                </table>

                <div class="products__phone">
                    <?php
                    $args1 = array(
                        'post_type' => 'product',
                        'taxonomy' => 'product_cat',
                        'term' => $current_cat_name,
                        'posts_per_page' => -1,
                        'orderby' => 'price'
                    );
                    $featured_query1 = new WP_Query($args1);
                    ?>

                    <div class="select-phone">
                        <div class="select-phone__trigger select__trigger-js">
                            <span>Выбрать круг</span>
                            <div class="select-phone__arrow">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 14L0.20577 0.5L15.7942 0.500002L8 14Z" fill="#003B81"/>
                                </svg>
                            </div>
                        </div>
                        <div class="select-phone__drop select__drop-js">
                            <ul class="select-phone__list select__scroll">
                                <?php if ($featured_query1->have_posts()) :
                                    while ($featured_query1->have_posts()) :
                                        $featured_query1->the_post();
                                        $product1 = get_product($featured_query1->post->ID);
                                        ?>
                                        <li class="select-phone__item">
                                            <input id="select_3" type="radio" name="select"/>
                                            <label for="select_3"> <?php echo $product1->name; ?></label>
                                        </li>
                                    <?php endwhile; endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="products__items">
                        <?php if ($featured_query1->have_posts()) :
                            while ($featured_query1->have_posts()) :
                                $featured_query1->the_post();
                                $product1 = get_product($featured_query1->post->ID);
                                ?>
                                <div class="products__item">
                                    <h2 class="products__subtitle">
                                        <?php echo $product1->name; ?>
                                    </h2>
                                    <ul class="products__list">
                                        <li>
                                            <?php echo $product->dlina; ?>
                                        </li>
                                        <li>
                                            <?php echo $product->price; ?> р. за 1 шт.
                                        </li>
                                        <li>
                                            <?php echo $product->price_ed; ?> р. за ед.
                                        </li>
                                        <li>
                                            <?php echo $product->price_kg; ?> р. за кг.
                                        </li>
                                    </ul>
                                    <div class="select products__item-margin">
                                        <div class="select__trigger select__trigger-js">
                                            <span>Метры</span>
                                            <div class="select__arrow">
                                                <svg width="14" height="9" viewBox="0 0 14 9" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 1L7 7L13 1" stroke="#003B81" stroke-width="2"
                                                          stroke-linecap="round"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="select__drop select__drop-js">
                                            <ul class="select__list">
                                                <li>
                                                    <input id="select_10" type="radio" name="select"/>
                                                    <label for="select_10">Штуки</label>
                                                </li>
                                                <li>
                                                    <input id="select_11" type="radio" name="select"/>
                                                    <label for="select_11">Кг</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="products__value-inner products__item-margin2">
                                        <button class="products__minus js__products-minus" type="button">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/products/minus.svg"
                                                 alt="alt">
                                        </button>
                                        <input type="number" name="field" class="products__value js__products-value"
                                               value="1"/>
                                        <button class="products__plus js__products-plus" type="button">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/products/plus.svg"
                                                 alt="alt">
                                        </button>
                                    </div>
                                    <div class="products__item-inner">
                                        <div class="products__item-box">
                                            <img class="products__td-existence"
                                                 src="<?php bloginfo('template_url'); ?>/assets/img/products/line.svg"
                                                 alt="alt">
                                        </div>
                                        <div class="products__address">
                                            г. Йошкар-Ола
                                        </div>
                                    </div>
                                    <div class="products__item-inner">
                                        <div class="products__item-box">
                                            <img class="products__td-existence"
                                                 src="<?php bloginfo('template_url'); ?>/assets/img/products/line2.svg"
                                                 alt="alt">
                                        </div>
                                        <div class="products__address">
                                            п. Медведево
                                        </div>
                                    </div>
                                    <form class="cart" method="post" enctype='multipart/form-data'>
                                        <?php do_action('woocommerce_before_add_to_cart_button'); ?>
                                        <?php if (!$product->is_sold_individually())
                                        ?>
                                        <input type="hidden" name="add-to-cart"
                                               value="<?php echo esc_attr($product->id); ?>"/>
                                        <button type="submit"
                                                class="products__td-basket products__item-margin3 single_add_to_cart_button button alt"><?php echo $product->single_add_to_cart_text(); ?></button>

                                        <?php do_action('woocommerce_after_add_to_cart_button'); ?>
                                    </form>
                                    <?php do_action('woocommerce_after_add_to_cart_form'); ?>
                                    <!--
                                     <a class="products__td-basket products__item-margin3" href="#">
                                         В корзину
                                     </a>-->
                                </div>
                            <?php endwhile; endif; ?>
                    </div>
                    <a class="products__link" href="#">
                        Показать больше
                    </a>

                </div>
                <?php the_field('tekstovyj_redaktor', $queried_object) ?>
            </div>

        </div>

    </section>
    <?php
    $queried_object1 = get_queried_object();
    $taxonomy = $queried_object1->taxonomy;
    $term_id = $queried_object1->term_id;
    $terms1 = get_field('services', $taxonomy . '_' . $term_id);
    if ($terms1): ?>
        <section class="services">
            <div class="services__content">
                <div class="container">
                    <h2 class="services__title">
                        Наши услуги
                    </h2>
                    <div class="services__items">

                        <?php foreach ($terms1 as $post): ?>
                            <?php setup_postdata($post); ?>

                            <a class="services__item" href="<?php echo get_permalink(); ?>">
                                <h2 class="services__item__title">
                                    <?php echo the_title(); ?>
                                </h2>
                                <img class="services__img" src="<?php echo the_field('kartinka_bannera'); ?>"
                                     alt="alt">
                            </a>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>

                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

<?php } ?>
<?php get_footer() ?>