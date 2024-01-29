<?php get_header(); ?>


<main class="main">
    <section class="product">
        <div class="section-content">
           <div class="container">
               <ul class="breadcrumbs">
                   <li><a href="#">Главная</a></li>
                   <li>Каталог</li>
               </ul>
               <a class="product__back button-back" href="#">
                   Вернуться назад
               </a>
               <div class="product__inner">
                   <div class="product__box">
                       <img class="product__img" src="<?php bloginfo('template_url'); ?>/assets/img/product/1.png" alt="alt">
                   </div>
                   <div class="product__info">
                       <div class="product__inner-bottom">
                           <h1 class="product__title title-h1">
                               Круг г/к 16 Ст20
                           </h1>
                           <div class="product__text product__text_red">
                               В наличии
                           </div>
                       </div>
                       <h2 class="product__subtitle">
                           Характеристики:
                       </h2>
                       <ul class="product__list">
                           <li class="product__list-item">
                               <div class="product__list-name">
                                   Длина:
                               </div>
                               <div class="product__list-name">
                                   6 м
                               </div>
                           </li>
                           <li class="product__list-item">
                               <div class="product__list-name">
                                   Вес:
                               </div>
                               <div class="product__list-name">
                                   1.5 кг
                               </div>
                           </li>
                           <li class="product__list-item">
                               <div class="product__list-name">
                                   Цена за ед:
                               </div>
                               <div class="product__list-price">
                                   765 ₽
                               </div>
                           </li>
                           <li class="product__list-item">
                               <div class="product__list-name">
                                   Цена за метр:
                               </div>
                               <div class="product__list-price">
                                   127.5 ₽
                               </div>
                           </li>
                       </ul>
                       <div class="product__buttons">
                           <a class="product__btn product__btn_blue button" href="#">
                               Сделать заказ
                           </a>
                           <a class="product__btn button" href="#">
                               Заказать по размерам
                           </a>
                       </div>
                   </div>
               </div>
           </div>
        </div>
    </section>
    <section class="services">
        <div class="services__content">
            <div class="container">
                <h2 class="services__title">
                    Похожие товары
                </h2>
                <div class="services__items">
                    <a class="services__item" href="#">
                        <img class="services__img" src="<?php bloginfo('template_url'); ?>/assets/img/services/1.jpg" alt="alt">
                    </a>
                    <a class="services__item" href="#">
                        <img class="services__img" src="<?php bloginfo('template_url'); ?>/assets/img/services/1.jpg" alt="alt">
                    </a>
                    <a class="services__item" href="#">
                        <img class="services__img" src="<?php bloginfo('template_url'); ?>/assets/img/services/1.jpg" alt="alt">
                    </a>
                    <a class="services__item" href="#">
                        <img class="services__img" src="<?php bloginfo('template_url'); ?>/assets/img/services/1.jpg" alt="alt">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>
