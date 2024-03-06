<?php
global $post;

$myposts = get_posts([
    'numberposts' => -1,
]);

?>


<?php if (is_page('О компании')
    || is_page('Новости')
    || is_single()
    || is_page('Доставка и монтаж')
    || is_page('Дилерам')
    || is_page('Заказать продукцию')
    || is_page('Конфиденциальность')
    || is_page('Вакансии')
    || is_page('Корзина'))  : ?>

<?php else: ?>
    <section class="news">
        <div class="news__content">
            <div class="container">
                <h2 class="news__title">
                    Новости
                </h2>
                <div class="news__inner">
                    <div class="news__left">
                        <?php if ($myposts) : ?>
                            <?php $time = 0; ?>
                            <?php foreach ($myposts as $post) : ?>
                                <?php setup_postdata($post); ?>
                                <?php switch ($time) {
                                    case '0'; ?>
                                        <?php get_template_part('template-parts/element-left')?>
                                        <?php break ?>
                                    <?php case '1'; ?>
                                        <?php get_template_part('template-parts/element-left')?>
                                        <?php break ?>
                                    <?php }?>
                                <?php $time++;?>
                            <?php endforeach ?>
                        <?php else: ?>
                            Записей нет;
                        <?php endif; ?>

                        <?php wp_reset_postdata(); ?>
                    </div>
                    <div class="news__right">
                        <?php if ($myposts) : ?>
                            <?php $time = 0; ?>
                            <?php foreach ($myposts as $post) : ?>
                                <?php setup_postdata($post); ?>
                                <?php switch ($time) {
                                    case '2'; ?>
                                        <?php get_template_part('template-parts/element-right')?>
                                        <?php break ?>
                                    <?php case '3'; ?>
                                        <?php get_template_part('template-parts/element-right')?>
                                        <?php break ?>
                                    <?php case '4'; ?>
                                        <?php get_template_part('template-parts/element-right')?>
                                        <?php break ?>
                                    <?php case '5'; ?>
                                        <?php get_template_part('template-parts/element-right')?>
                                        <?php break ?>
                                    <?php }?>
                                <?php $time++;?>
                            <?php endforeach ?>
                        <?php else: ?>
                            Записей нет;
                        <?php endif; ?>

                        <?php wp_reset_postdata(); ?>
                    </div>
                </div>
                <div class="news__slider">
                    <div class="swiper-wrapper">
                        <?php if ($myposts) : ?>
                            <?php foreach ($myposts as $post) : ?>
                                <?php setup_postdata($post); ?>
                                <?php get_template_part('template-parts/post-slider-mobail')?>
                            <?php endforeach ?>
                        <?php else: ?>
                            Записей нет;
                        <?php endif; ?>

                        <?php wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

</main>
<footer class="footer">
    <div class="footer__content">
        <div class="container">
            <div class="footer__inner-top">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'bottom_menu',
                    'container' => '',
                    'menu_class' => 'footer__menu',
                    'depth'           => 0,
                ) );
                ?>
                <a class="footer__up" href="#">

                </a>
            </div>
            <div class="footer__inner-bottom" ->
                <div class="footer__left">
                    <a class="footer__logo" href="#">
                        <img class="footer__img" src="<?php bloginfo('template_url'); ?>/assets/img/footer/logo.svg"
                             alt="Logo">
                    </a>
                    <div class="footer__law">
                        Copyrights © 2023. Все права защищены
                    </div>
                </div>
                <div class="footer__center">
                    <?php
                    // проверяем есть ли в повторителе данные
                    if (have_rows('bazy', 26)):
                        // перебираем данные
                        while (have_rows('bazy', 26)) : the_row(); ?>
                            <div class="footer__column">
                                <h2 class="footer__title">
                                    <?php the_sub_field('nazvanie_bazy') ?>
                                </h2>
                                <div class="footer__address">
                                    <span class="footer__address-text">Адрес:</span> <?php the_sub_field('adres_bazy') ?>
                                </div>
                                <a class="footer__phone" href="tel:<?php the_sub_field('telefon') ?>">
                                    <?php the_sub_field('telefon') ?>
                                </a>
                                <a class="footer__mail" href="mailto:<?php the_sub_field('elektronnaya_pochta') ?>">
                                    <?php the_sub_field('elektronnaya_pochta') ?>
                                </a>
                                <h3 class="footer__subtitle">
                                    Продажа металлопроката и МСЦ:
                                </h3>
                                <?php
                                // проверяем есть ли в повторителе данные
                                if (have_rows('otdely')):
                                    // перебираем данные
                                    while (have_rows('otdely')) : the_row(); ?>
                                        <div class="footer__chart">
                                            <?php the_sub_field('dop_informacziya') ?>
                                        </div>
                                    <?php endwhile;
                                else :
                                    // вложенных полей не найдено
                                endif;
                                ?>
                                <h3 class="footer__subtitle">
                                    Прием лома металлов:
                                </h3>
                                <div class="footer__items">
                                    <?php
                                    // проверяем есть ли в повторителе данные
                                    if (have_rows('otdely')):
                                        // перебираем данные
                                        while (have_rows('otdely')) : the_row(); ?>
                                            <div class="footer__item">
                                                <h3 class="footer__subtitle">
                                                    Черный лом
                                                </h3>
                                                <div class="footer__chart">
                                                    <?php the_sub_field('rezhim_raboty_otdela') ?>
                                                </div>
                                            </div>
                                        <?php endwhile;
                                    else :
                                        // вложенных полей не найдено
                                    endif;
                                    ?>
                                </div>
                            </div>
                        <?php endwhile;
                    else :
                        // вложенных полей не найдено
                    endif;
                    ?>
                </div>
                <div class="footer__right">
                    <a class="footer__link js__popup-link" data-modal="#popup-callback" href="#">
                        Заказать звонок
                    </a>
                    <?php the_field('tekst_obratnoj_svyazi', 26) ?>
                    <div class="footer__cards">
                        <?php
                        // проверяем есть ли в повторителе данные
                        if (have_rows('sposoby_oplaty', 26)):
                            // перебираем данные
                            while (have_rows('sposoby_oplaty', 26)) : the_row(); ?>
                                <div class="footer__card">
                                    <img class="footer__card-img"
                                         src="<?php the_sub_field('kartinka_sposoba_oplaty') ?>" alt="alt">
                                </div>
                            <?php endwhile;
                        else :
                            // вложенных полей не найдено
                        endif;
                        ?>
                    </div>
                    <div class="footer__socials">
                        <a class="footer__social" target="_blank" href="<?php the_field('ssylka_vk', 26) ?>">
                            <img class="footer__social-icon"
                                 src="<?php bloginfo('template_url'); ?>/assets/img/footer/vk.svg" alt="alt">
                        </a>
                        <a class="footer__social" target="_blank" href="<?php the_field('ssylka_telegram', 26) ?>">
                            <img class="footer__social-icon"
                                 src="<?php bloginfo('template_url'); ?>/assets/img/footer/telegram.svg" alt="alt">
                        </a>
                        <a class="footer__social" target="_blank" href="<?php the_field('ssylka_votsap', 26) ?>">
                            <img class="footer__social-icon"
                                 src="<?php bloginfo('template_url'); ?>/assets/img/footer/whatshap.svg" alt="alt">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<img class="socials js__popup-link" data-modal="#popup"
     src="<?php bloginfo('template_url'); ?>/assets/img/icons/socials.svg" alt="alt">

<div data-popup="#popup" class="popup js__popup-open">
    <div class="popup__body">
        <div class="popup__content js__popup-content">
            <div class="popup__column">
                <a class="popup__btn" target="_blank" href="<?php the_field('ssylka_votsap', 26) ?>">
                    Написать в WhatsApp
                </a>
                <div class="popup__box">
                    <div class="popup__box-img">
                        <img class="popup__images" src="<?php bloginfo('template_url'); ?>/assets/img/popup/1.svg"
                             alt="alt">
                    </div>
                    <div class="popup__text">
                        Сканируйте QR-код
                        для перехода в WhatsApp
                    </div>
                </div>
            </div>
            <div class="popup__column">
                <a class="popup__btn popup__btn_green" target="_blank" href="<?php the_field('ssylka_telegram', 26) ?>">
                    Написать в Telegram
                </a>
                <div class="popup__box">
                    <div class="popup__box-img">
                        <img class="popup__images" src="<?php bloginfo('template_url'); ?>/assets/img/popup/1.svg"
                             alt="alt">
                    </div>
                    <div class="popup__text">
                        Сканируйте QR-код
                        для перехода в Telegram
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div data-popup="#popup-callback" class="popup-callback js__popup-open">
    <div class="popup-callback__body">
        <div class="popup-callback__content js__popup-content">
               <span class="popup-callback__close js__popup-close">
                  <img class="popup-callback__logo"
                       src="<?php bloginfo('template_url'); ?>/assets/img/popup-callback/close.svg" alt="alt">
               </span>
            <img class="popup-callback__logo"
                 src="<?php bloginfo('template_url'); ?>/assets/img/popup-callback/logo.svg" alt="logo">
            <div class="popup-callback__form">
                <?php echo do_shortcode('[contact-form-7 id="326e3ae" title="Заказать звонок"]'); ?>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/application-form.php' ?>
<?php include 'includes/request_price_form.php' ?>

<div class="popup-form-send">
    Сообщение успешно отправлено
</div>

<ul class="footer-menu">
    <li class="footer-menu__item <?= is_page_template('main.php') ? 'active' : '' ?>">
        <a class="footer-menu__link" href="<?= is_page_template('main.php') ? '#' : '/' ?>">
            <svg class="footer-menu__icon" width="46" height="34" viewBox="0 0 46 34" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M10.25 29.0079V14.0079L23 2.41699L35.75 14.0079V29.0088C35.75 30.1134 34.8546 31.0079 33.75 31.0079H12.25C11.1454 31.0079 10.25 30.1125 10.25 29.0079Z"
                      stroke="#777777" stroke-width="2"/>
                <rect x="20.1666" y="26.5" width="8.5" height="5.66667" rx="1" transform="rotate(-90 20.1666 26.5)"
                      stroke="#777777" stroke-width="2"/>
            </svg>
            <div class="footer-menu__text">
                Главная
            </div>
        </a>
    </li>
    <li class="footer-menu__item">
        <a class="footer-menu__link js__header-burgerclick" href="#">
            <svg class="footer-menu__icon" width="46" height="34" viewBox="0 0 46 34" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <rect x="8" y="6" width="29" height="3" rx="1.5" fill="#777777"/>
                <rect x="8" y="15" width="29" height="3" rx="1.5" fill="#777777"/>
                <rect x="8" y="24" width="29" height="3" rx="1.5" fill="#777777"/>
            </svg>
            <div class="footer-menu__text">
                Меню
            </div>
        </a>
    </li>
    <li class="footer-menu__item <?= is_page_template('catalog.php') ? 'active' : '' ?>">
        <a class="footer-menu__link" href="/catalog/">
            <svg class="footer-menu__icon" width="46" height="34" viewBox="0 0 46 34" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <rect x="12" y="6" width="8" height="8" rx="3" stroke="#777777" stroke-width="3"
                      stroke-linejoin="round"/>
                <rect x="26" y="6" width="8" height="8" rx="3" stroke="#777777" stroke-width="3"
                      stroke-linejoin="round"/>
                <rect x="12" y="20" width="8" height="8" rx="3" stroke="#777777" stroke-width="3"
                      stroke-linejoin="round"/>
                <rect x="26" y="20" width="8" height="8" rx="3" stroke="#777777" stroke-width="3"
                      stroke-linejoin="round"/>
            </svg>
            <div class="footer-menu__text">
                Каталог
            </div>
        </a>
    </li>
    <li class="footer-menu__item">
        <a class="footer-menu__link" href="#">
            <svg class="footer-menu__icon" width="46" height="34" viewBox="0 0 46 34" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M19.0299 25.2351L19.4178 23.7861C19.0637 23.6913 18.687 23.7295 18.359 23.8934L19.0299 25.2351ZM13 28.25L11.5151 28.0379C11.4362 28.5902 11.6703 29.1406 12.1229 29.4669C12.5755 29.7931 13.1718 29.8411 13.6708 29.5916L13 28.25ZM13.8165 22.5342L15.3015 22.7464C15.3736 22.2413 15.1841 21.7342 14.7984 21.4003L13.8165 22.5342ZM23 27.25C30.4023 27.25 37 22.3963 37 15.75H34C34 20.1494 29.4048 24.25 23 24.25V27.25ZM18.6419 26.684C20.0165 27.0521 21.482 27.25 23 27.25V24.25C21.7424 24.25 20.5379 24.086 19.4178 23.7861L18.6419 26.684ZM13.6708 29.5916L19.7007 26.5767L18.359 23.8934L12.3292 26.9084L13.6708 29.5916ZM12.3316 22.3221L11.5151 28.0379L14.4849 28.4621L15.3015 22.7464L12.3316 22.3221ZM9 15.75C9 18.8761 10.506 21.6518 12.8346 23.6682L14.7984 21.4003C13.0097 19.8514 12 17.8606 12 15.75H9ZM23 4.25C15.5977 4.25 9 9.10368 9 15.75H12C12 11.3506 16.5952 7.25 23 7.25V4.25ZM37 15.75C37 9.10368 30.4023 4.25 23 4.25V7.25C29.4048 7.25 34 11.3506 34 15.75H37Z"
                      fill="#777777"/>
            </svg>
            <div class="footer-menu__text">
                Связаться
            </div>
        </a>
    </li>
    <li class="footer-menu__item">
    <a class="footer-menu__link" href="<?php echo WC()->cart->get_cart_url(); ?>">
                        <span class="footer-menu__number">
                            <?php echo  WC()->cart->get_cart_contents_count() ; ?>
                        </span>
 <svg class="footer-menu__icon" width="46" height="34" viewBox="0 0 46 34" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M11.7892 6.00183L12.8322 6.0011L13.8056 6C14.5206 6.0166 15.0025 6.32069 15.2513 6.91229C15.3609 7.20271 15.4349 7.49241 15.4732 7.78137L15.7396 9.38812C15.7417 9.40057 15.7496 9.40679 15.7632 9.40679L16.8026 9.40496L17.7708 9.40789L18.8253 9.40679L19.7939 9.40569H20.8185L21.8459 9.40643L22.7965 9.40569L23.7727 9.40643L24.8241 9.40533L25.7631 9.40606L26.8493 9.40533L27.7571 9.40569H28.83L29.7878 9.40679L30.8188 9.40569L31.7554 9.40643L32.8048 9.40826C33.1405 9.39459 33.4712 9.40984 33.797 9.45402C34.1329 9.49795 34.4182 9.614 34.6528 9.80216C34.8872 9.99033 35.0029 10.2407 34.9999 10.5534C34.9951 10.8389 34.9192 11.0696 34.8084 11.3492L33.006 16.0611L32.8584 16.4499C32.4933 17.226 32.0158 17.7678 31.0168 17.7927C30.3453 17.8092 29.6271 17.7909 28.9472 17.7964C28.2022 17.8026 27.4571 17.7891 26.7129 17.7978C26.2711 17.803 25.8295 17.8049 25.388 17.8037C24.2415 17.8008 23.0951 17.7987 21.9487 17.7975C20.5634 17.796 19.1754 17.7964 17.7848 17.7986L17.54 17.7964C17.5248 17.7964 17.5184 17.8032 17.5208 17.8169L17.8535 19.7132L17.8711 19.8768C17.8725 19.8895 17.8801 19.8959 17.8939 19.8959C22.0383 19.9043 26.1826 19.8959 30.3269 19.8955C30.6314 19.8955 30.8783 19.9006 31.0676 19.9109C31.2857 19.9399 31.4812 20.0094 31.6542 20.1192C31.8286 20.2627 31.9301 20.4323 31.9586 20.628C32.0007 20.9307 31.9671 21.2079 31.8578 21.4598L31.7342 21.6886C31.4807 21.961 31.1675 22.0093 30.7932 21.9987L25.9363 21.999H22.6481L21.8183 21.9987L20.7673 21.999L19.8151 21.9987L18.7198 21.999C18.2641 21.9988 17.8074 21.9982 17.3497 21.9972C16.4171 21.9954 15.9232 21.2826 15.6456 20.5739C15.5248 20.2471 15.4474 19.9923 15.4133 19.8095C15.3113 19.2629 15.1729 18.6867 15.0713 18.1789C14.8807 17.2271 14.6854 16.2765 14.4855 15.3271L14.2543 14.1809L14.0655 13.2595L13.3089 9.62937L13.1125 8.7061C13.1114 8.70098 13.1084 8.69638 13.104 8.69311C13.0996 8.68983 13.0942 8.68808 13.0886 8.68817L12.7782 8.69146L11.742 8.69183C11.1909 8.69146 10.7107 8.73795 10.3127 8.31476C10.196 8.19066 10.026 7.97174 10.0012 7.79638C10.0015 7.39588 10.0011 6.99563 10 6.59562C10 6.50898 10.0264 6.43833 10.0792 6.38366C10.2919 6.16376 10.5411 6.04003 10.8266 6.01245L11.7892 6.00183ZM16.4646 12.3519L17.1601 15.6544C17.1628 15.6666 17.1709 15.6727 17.1845 15.6727L17.8196 15.6738L18.7814 15.6749L21.7923 15.6815L22.7913 15.6826L23.7835 15.6848L24.7949 15.6841H25.7903L26.7881 15.6837L27.8211 15.6903L28.8036 15.6906L30.4649 15.6921C30.4748 15.6921 30.4844 15.6893 30.4925 15.6842C30.5007 15.679 30.5069 15.6717 30.5105 15.6632L31.5159 13.2236L32.2165 11.5187C32.2235 11.5014 32.2168 11.4927 32.1965 11.4927C30.7262 11.4901 29.2498 11.4854 27.7675 11.4788C27.7603 11.4852 27.7505 11.4865 27.7383 11.4829L26.7477 11.4744L23.7955 11.4697L22.7501 11.4642L19.7575 11.4576L18.6106 11.4569L17.758 11.4503L16.7822 11.4466L16.2963 11.4419C16.2827 11.4419 16.2771 11.448 16.2795 11.4602L16.4646 12.3519Z"
                      fill="#777777"/>
                <path d="M20.1649 23.6227L20.3964 23.8645C21.1804 24.8242 21.2039 26.0637 20.4479 27.0424L20.1084 27.3988C19.7216 27.715 19.3064 27.9064 18.8626 27.9729C17.6052 28.1614 16.4415 27.3472 16.0911 26.1309C15.8542 25.3095 16.0919 24.4488 16.6591 23.796L16.9635 23.514C17.9329 22.7987 19.2411 22.8254 20.1649 23.6227Z"
                      fill="#777777"/>
                <path d="M30.4825 23.1873C31.2398 23.5207 31.7269 24.1031 31.9437 24.9346C32.011 25.2629 32.018 25.5983 31.9646 25.9408C31.7573 26.8426 31.2394 27.47 30.4108 27.8229C28.4602 28.5941 26.471 26.7162 27.1281 24.7008C27.594 23.2704 29.1231 22.6604 30.4825 23.1873Z"
                      fill="#777777"/>
            </svg>
            <div class="footer-menu__text">
                Корзина
            </div>
                    </a>
    </li>
</ul>


<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/jquery-form-styler@2.0.2/dist/jquery.formstyler.min.js"></script>
</div>
</body>
</html>