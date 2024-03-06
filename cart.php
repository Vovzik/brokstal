<?php
/** Template Name: Корзина
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.9.0
 */
get_header();
defined('ABSPATH') || exit;
?>
    <main class="main">
      <section class="basket">
        <div class="section-content">
            <div class="container">
                <?php include 'includes/breadcrumbs.php' ?>
                <h1 class="basket__title">
                    <?php the_field('zagolovok') ?>
                </h1>
                <div class="basket__items">
                    <a class="basket__action basket__action--print" href="#">
                        Распечатать
                    </a>
                    <a class="basket__action basket__action--file" href="#">
                        Сохранить смету
                    </a>
                    <a class="basket__action basket__action--social" href="#">
                        Поделиться
                    </a>
                </div>
                <div class="basket__inner">
                    <input type="checkbox" id="checkbox"/>
                    <label for="checkbox">
                        Выбрать все
                    </label>
                    <span class="basket__delete-selected">
                        Удалить выбранные
                    </span>
                </div>
                <table class="basket__table">
                    <tr class="basket__tr">
                        <th class="basket__th">
                            Название товара
                        </th>
                        <th class="basket__th">
                            Длина, м
                        </th>
                        <th class="basket__th">
                            Цена, р.
                        </th>
                        <th class="basket__th">
                            Единица
                        </th>
                        <th class="basket__th">
                            Количество
                        </th>
                        <th class="basket__th">
                            Сумма
                        </th>
                        <th class="basket__th">
                            Удалить
                        </th>
                    </tr>
                    <tr class="basket__tr">
                        <td class="basket__td">
                            <a class="basket__td-link" href="#">
                                <input type="checkbox" id="checkbox2">
                                <label for="checkbox2">
                                    Стальной круг 8 мм автоматный углеродистый А30 ГОСТ 2590-2006
                                </label>
                            </a>
                        </td>
                        <td class="basket__td">
                            6
                        </td>
                        <td class="basket__td">
                            765
                        </td>
                        <td class="basket__td">
                            <select name="#" id="#">
                                <option value="">Штуки</option>
                                <option value="">Метры</option>
                                <option value="">Единицы</option>
                            </select>
                        </td>
                        <td class="basket__td">
                            плюс минус
                        </td>
                        <td class="basket__td">
                            00,00 ₽
                        </td>
                        <td class="basket__td">
                            <div class="basket__delete">

                            </div>
                        </td>
                    </tr>
                </table>
                <form class="woocommerce-cart-form" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">
                    <?php do_action('woocommerce_before_cart'); ?>
                    <?php do_action('woocommerce_before_cart_table'); ?>

                    <table class="basket__table">
                        <thead>
                        <tr class="basket__table">
                            <th class="basket__th">
                                Название товара
                            </th>
                            <th class="basket__th">
                                Длина, м
                            </th>
                            <th class="basket__th">
                                Цена, р.
                            </th>
                            <th class="basket__th">
                                Единица
                            </th>
                            <th class="basket__th">
                                Количество
                            </th>
                            <th class="basket__th">
                                Сумма
                            </th>
                            <th class="basket__th">
                                Удалить
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php do_action('woocommerce_before_cart_contents'); ?>

                        <?php
                        foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
                            $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
                            $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);
                            /**
                             * Filter the product name.
                             *
                             * @param string $product_name Name of the product in the cart.
                             * @param array $cart_item The product in the cart.
                             * @param string $cart_item_key Key for the product in the cart.
                             * @since 2.1.0
                             */
                            $product_name = apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key);

                            if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
                                $product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
                                ?>
                                <tr class="basket__tr woocommerce-cart-form__cart-item <?php echo esc_attr(apply_filters('woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key)); ?>">
                                    <td class="basket__td" data-title="<?php esc_attr_e('Product', 'woocommerce'); ?>">
                                        <?php
                                        if (!$product_permalink) {
                                            echo wp_kses_post($product_name . '&nbsp;');
                                        } else {
                                            /**
                                             * This filter is documented above.
                                             *
                                             * @since 2.1.0
                                             */
                                            echo wp_kses_post(apply_filters('woocommerce_cart_item_name', sprintf('<a class="basket__td-link" href="%s">%s</a>', esc_url($product_permalink), $_product->get_name()), $cart_item, $cart_item_key));
                                        }

                                        do_action('woocommerce_after_cart_item_name', $cart_item, $cart_item_key);

                                        // Meta data.
                                        echo wc_get_formatted_cart_item_data($cart_item); // PHPCS: XSS ok.

                                        // Backorder notification.
                                        if ($_product->backorders_require_notification() && $_product->is_on_backorder($cart_item['quantity'])) {
                                            echo wp_kses_post(apply_filters('woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__('Available on backorder', 'woocommerce') . '</p>', $product_id));
                                        }
                                        ?>
                                    </td>
                                    <td class="basket__td"></td>
                                    <td class="basket__td" data-title="<?php esc_attr_e('Subtotal', 'woocommerce'); ?>">
                                        <?php
                                        echo apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $cart_item['quantity']), $cart_item, $cart_item_key); // PHPCS: XSS ok.
                                        ?>
                                    </td>
                                    <td class="basket__td">

                                    </td>
                                    <td class="basket__td" data-title="<?php esc_attr_e('Quantity', 'woocommerce'); ?>">
                                        <?php
                                        if ($_product->is_sold_individually()) {
                                            $min_quantity = 1;
                                            $max_quantity = 1;
                                        } else {
                                            $min_quantity = 0;
                                            $max_quantity = $_product->get_max_purchase_quantity();
                                        }

                                        $product_quantity = woocommerce_quantity_input(
                                            array(
                                                'input_name' => "cart[{$cart_item_key}][qty]",
                                                'input_value' => $cart_item['quantity'],
                                                'max_value' => $max_quantity,
                                                'min_value' => $min_quantity,
                                                'product_name' => $product_name,
                                            ),
                                            $_product,
                                            false
                                        );

                                        echo apply_filters('woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item); // PHPCS: XSS ok.
                                        ?>
                                    </td>

                                    <td class="basket__td" data-title="<?php esc_attr_e('Price', 'woocommerce'); ?>">
                                        <?php
                                        echo apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key); // PHPCS: XSS ok.
                                        ?>
                                    </td>
                                    <td class="basket__td">
                                        <?php
                                        echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                            'woocommerce_cart_item_remove_link',
                                            sprintf(
                                                '<a class="basket__delete" href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s"></a>',
                                                esc_url(wc_get_cart_remove_url($cart_item_key)),
                                                /* translators: %s is the product name */
                                                esc_attr(sprintf(__('Remove %s from cart', 'woocommerce'), wp_strip_all_tags($product_name))),
                                                esc_attr($product_id),
                                                esc_attr($_product->get_sku())
                                            ),
                                            $cart_item_key
                                        );
                                        ?>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>

                        <?php do_action('woocommerce_cart_contents'); ?>

                        <tr>
                            <td colspan="6" class="actions">

                                <?php if (wc_coupons_enabled()) { ?>
                                    <div class="coupon">
                                        <label for="coupon_code" class="screen-reader-text"><?php esc_html_e('Coupon:', 'woocommerce'); ?></label>
                                        <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e('Coupon code', 'woocommerce'); ?>" />
                                        <button type="submit" class="button<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>" name="apply_coupon" value="<?php esc_attr_e('Apply coupon', 'woocommerce'); ?>"><?php esc_html_e('Apply coupon', 'woocommerce'); ?></button>
                                        <?php do_action('woocommerce_cart_coupon'); ?>
                                    </div>
                                <?php } ?>

                                <button type="submit" class="button<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>" name="update_cart" value="<?php esc_attr_e('Update cart', 'woocommerce'); ?>"><?php esc_html_e('Update cart', 'woocommerce'); ?></button>

                                <?php do_action('woocommerce_cart_actions'); ?>

                                <?php wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce'); ?>
                            </td>
                        </tr>

                        <?php do_action('woocommerce_after_cart_contents'); ?>
                        </tbody>
                    </table>
                    <?php do_action('woocommerce_after_cart_table'); ?>
                </form>



                <div class="basket__mobail">
                    <div class="basket__mobail-inner">
                        <h3 class="basket__name">
                            Название товара
                        </h3>
                        <p class="basket__text">
                            <a href="#">
                                <input type="checkbox" id="checkbox-phone">
                                <label for="checkbox-phone">
                                    Стальной круг 8 мм автоматный углеродистый А30 ГОСТ 2590-2006
                                </label>
                            </a>
                        </p>
                    </div>
                    <div class="basket__mobail-inner">
                        <h3 class="basket__name">
                            Длина, м
                        </h3>
                        <p class="basket__text">
                            6
                        </p>
                    </div>
                    <div class="basket__mobail-inner">
                        <h3 class="basket__name">
                            Цена, р.
                        </h3>
                        <p class="basket__text">
                            765
                        </p>
                    </div>
                    <div class="basket__mobail-inner">
                        <h3 class="basket__name">
                            Единица
                        </h3>
                        <p class="basket__text">
                            <select name="" id="">
                                <option value="">
                                    1
                                </option>
                                <option value="">
                                    2
                                </option>
                                <option value="">
                                    3
                                </option>
                            </select>
                        </p>
                    </div>
                    <div class="basket__mobail-inner">
                        <h3 class="basket__name">
                            Количество
                        </h3>
                        <p class="basket__text">
                            плюс минус
                        </p>
                    </div>
                    <div class="basket__mobail-inner">
                        <h3 class="basket__name">
                            Сумма
                        </h3>
                        <p class="basket__text">
                            00,00 ₽
                        </p>
                    </div>
                    <div class="basket__mobail-inner">
                        <h3 class="basket__name">
                            Удалить
                        </h3>
                        <div class="basket__delete">

                        </div>
                    </div>
                </div>
                <div class="basket__mobail">
                    <div class="basket__mobail-inner">
                        <h3 class="basket__name">
                            Название товара
                        </h3>
                        <p class="basket__text">
                            <a href="#">
                                <input type="checkbox" id="checkbox-phone">
                                <label for="checkbox-phone">
                                    Стальной круг 8 мм автоматный углеродистый А30 ГОСТ 2590-2006
                                </label>
                            </a>
                        </p>
                    </div>
                    <div class="basket__mobail-inner">
                        <h3 class="basket__name">
                            Длина, м
                        </h3>
                        <p class="basket__text">
                            6
                        </p>
                    </div>
                    <div class="basket__mobail-inner">
                        <h3 class="basket__name">
                            Цена, р.
                        </h3>
                        <p class="basket__text">
                            765
                        </p>
                    </div>
                    <div class="basket__mobail-inner">
                        <h3 class="basket__name">
                            Единица
                        </h3>
                        <p class="basket__text">
                            <select name="" id="">
                                <option value="">
                                    1
                                </option>
                                <option value="">
                                    2
                                </option>
                                <option value="">
                                    3
                                </option>
                            </select>
                        </p>
                    </div>
                    <div class="basket__mobail-inner">
                        <h3 class="basket__name">
                            Количество
                        </h3>
                        <p class="basket__text">
                            плюс минус
                        </p>
                    </div>
                    <div class="basket__mobail-inner">
                        <h3 class="basket__name">
                            Сумма
                        </h3>
                        <p class="basket__text">
                            00,00 ₽
                        </p>
                    </div>
                    <div class="basket__mobail-inner">
                        <h3 class="basket__name">
                            Удалить
                        </h3>
                        <div class="basket__delete">

                        </div>
                    </div>
                </div>
                <div class="basket__mobail">
                    <div class="basket__mobail-inner">
                        <h3 class="basket__name">
                            Название товара
                        </h3>
                        <p class="basket__text">
                            <a href="#">
                                <input type="checkbox" id="checkbox-phone">
                                <label for="checkbox-phone">
                                    Стальной круг 8 мм автоматный углеродистый А30 ГОСТ 2590-2006
                                </label>
                            </a>
                        </p>
                    </div>
                    <div class="basket__mobail-inner">
                        <h3 class="basket__name">
                            Длина, м
                        </h3>
                        <p class="basket__text">
                            6
                        </p>
                    </div>
                    <div class="basket__mobail-inner">
                        <h3 class="basket__name">
                            Цена, р.
                        </h3>
                        <p class="basket__text">
                            765
                        </p>
                    </div>
                    <div class="basket__mobail-inner">
                        <h3 class="basket__name">
                            Единица
                        </h3>
                        <p class="basket__text">
                            <select name="" id="">
                                <option value="">
                                    1
                                </option>
                                <option value="">
                                    2
                                </option>
                                <option value="">
                                    3
                                </option>
                            </select>
                        </p>
                    </div>
                    <div class="basket__mobail-inner">
                        <h3 class="basket__name">
                            Количество
                        </h3>
                        <p class="basket__text">
                            плюс минус
                        </p>
                    </div>
                    <div class="basket__mobail-inner">
                        <h3 class="basket__name">
                            Сумма
                        </h3>
                        <p class="basket__text">
                            00,00 ₽
                        </p>
                    </div>
                    <div class="basket__mobail-inner">
                        <h3 class="basket__name">
                            Удалить
                        </h3>
                        <div class="basket__delete">

                        </div>
                    </div>
                </div>
                <div class="basket__inner-after">
                    <a class="basket__btn btn js__popup-link" data-modal="#popup-price" href="#">
                        Оставить заказ
                    </a>
                    <div class="basket__column">
                        <?php
                        /**
                         * Cart collaterals hook.
                         *
                         * @hooked woocommerce_cross_sell_display
                         * @hooked woocommerce_cart_totals - 10
                         */
                        do_action('woocommerce_cart_collaterals');
                        ?>
                        Выбрано товаров: 1
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>