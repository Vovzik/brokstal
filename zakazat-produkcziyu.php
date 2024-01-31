<?php /* Template Name: Заказать продукцию */ ?>

<?php get_header(); ?>


<main class="main">
    <section class="category">
        <div class="category__content section-content">
            <div class="container">
                <?php include 'includes/breadcrumbs.php' ?>
                <?php include 'includes/banner.php' ?>
                <div class="content">
                    <?php get_sidebar(); ?>
                    <div class="content__column">
                        <h2 class="title24">
                            5 причин: Почему лучше оформлять заказ онлайн?
                        </h2>
                        <ul class="causes">
                            <li class="causes__list-item">
                                <img class="causes__icon" src="<?php bloginfo('template_url'); ?>/assets/img/causes/1.svg" alt="alt">
                                <h3 class="causes__title">
                                   1. Точные весы
                                </h3>
                                <p class="causes__text">
                                    Оформленный заказ через каталог на сайте broksteel.ru гарантирует Вам, что цена на продукцию не изменится, пока Вы доедете до офиса нашей компании.
                                </p>
                            </li>
                            <li class="causes__list-item">
                                <img class="causes__icon" src="<?php bloginfo('template_url'); ?>/assets/img/causes/2.svg" alt="alt">
                                <h3 class="causes__title">
                                    2. Для оплаты заказа необязательно ехать в офис
                                </h3>
                                <p class="causes__text">
                                    Вы сможете оплатить свой заказ онлайн, сэкономив свое время и деньги. Так же мы вам перезвоним, уточним все детали заказа, сообщим стоимость заказа с учетом скидок.
                                </p>
                            </li>
                            <li class="causes__list-item">
                                <img class="causes__icon" src="<?php bloginfo('template_url'); ?>/assets/img/causes/3.svg" alt="alt">
                                <h3 class="causes__title">
                                    3. Вы можете оформить доставку
                                </h3>
                                <p class="causes__text">
                                    Прямо из офиса или дома или же самостоятельно забрать готовый заказ в офисе нашей компании, сэкономив время.
                                </p>
                            </li>
                            <li class="causes__list-item">
                                <img class="causes__icon" src="<?php bloginfo('template_url'); ?>/assets/img/causes/4.svg" alt="alt">
                                <h3 class="causes__title">
                                    4. Вы любите сидеть долго в офисе? – Мы думаем, что нет!
                                </h3>
                                <p class="causes__text">
                                    Если приехать к нам в офис в сезон продаж, то можно столкнуться с множеством клиентов, желающих получить от менеджера большой объем информации, типа: «Как выглядит?», «Какие характеристики?», по огромному количеству продукции, которую они могли бы оптимально быстро и удобно получить на сайте, тем самым сэкономить свое время на заказ необходимых товаров.
                                </p>
                            </li>
                            <li class="causes__list-item">
                                <img class="causes__icon" src="<?php bloginfo('template_url'); ?>/assets/img/causes/5.svg" alt="alt">
                                <h3 class="causes__title">
                                    5. Перегруженные менеджеры отдела продаж и многоканальные телефонные линии
                                </h3>
                                <p class="causes__text">
                                    Это следствие огромного количества звонков в сезон продаж. Иногда становится довольно сложно дозвониться с первого раза. Мы постоянно стараемся сделать сайт broksteel.ru максимально простым и понятным каждому посетителю, партнеру и клиенту – как показывает практика с оформлением онлайн-заказа не возникает никаких проблем.
                                </p>
                            </li>
                        </ul>
                        <?php include 'includes/callback.php'; ?>
                        <?php include 'includes/sidebar.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>


