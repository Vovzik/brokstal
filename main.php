<?php

/*Template Name: Главная */
get_header(); ?>
    <main class="main">
    <section class="home">
        <div class="home__content">
            <div class="container">
                <div class="home__slider">
                    <div class="swiper-wrapper">

                        <?php

                        // проверяем есть ли в повторителе данные
                        if (have_rows('slajdy')):

                            // перебираем данные
                            while (have_rows('slajdy')) : the_row(); ?>
                                <div class="home__slide swiper-slide"
                                     style="background-image: url('<?php the_sub_field('fon') ?>')">
                                    <div class="home__info">
                                        <h1 class="home__title">
                                            <?php the_sub_field('nazvanie') ?>
                                        </h1>
                                        <p class="home__text">
                                            <?php the_sub_field('opisanie') ?>
                                        </p>
                                        <a class="home__btn" href="<?php the_sub_field('ssylka_na_knopke') ?>">
                                            <?php the_sub_field('nazvanie_knopki') ?>
                                        </a>
                                    </div>
                                    <div class="home__items">

                                        <?php

                                        // проверяем есть ли в повторителе данные
                                        if (have_rows('uslugi')):

                                            // перебираем данные
                                            while (have_rows('uslugi')) : the_row(); ?>
                                                <a class="home__item" href="<?php the_sub_field('ssylka') ?>">
                                                    <?php the_sub_field('nazvanie_uslugi') ?>
                                                </a>
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
                    <div class="home-pagination swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="advantage">
        <div class="advantage__content">
            <div class="container">
                <div class="advantage__items">

                    <?php

                    // проверяем есть ли в повторителе данные
                    if (have_rows('preimushhestva')):

                        // перебираем данные
                        while (have_rows('preimushhestva')) : the_row(); ?>
                            <div class="advantage__item">
                                <img class="advantage__icon" src="<?php the_sub_field('kartinka') ?>"
                                     alt="alt">
                                <p class="advantage__text">
                                    <?php the_sub_field('preimushhestvo') ?>
                                </p>
                            </div>

                        <?php endwhile;

                    else :

                        // вложенных полей не найдено

                    endif;

                    ?>
                </div>
            </div>
        </div>
    </section>
    <section class="rolled-metal">
        <div class="rolled-metal__content">
            <div class="container">
                <div class="rolled-metal__inner">
                    <div class="rolled-metal__info">
                        <h2 class="rolled-metal__title">
                            Металлопрокат
                        </h2>
                        <p>
                            Компания “Броксталь” реализует широкий ассортимент металлопроката включая различные виды
                            сортового, листового, фасонного и трубного проката
                        </p>
                        <a class="rolled-metal__btn" href="/catalog">
                            В каталог
                        </a>
                    </div>
                    <div class="rolled-metal__items">
                        <a class="rolled-metal__item" href="#">
                            <svg class="rolled-metal__icon">
                                <use xlink:href="<?php bloginfo('template_url'); ?>/assets/icons/sprite.svg#pipe"></use>
                            </svg>
                            <h3 class="rolled-metal__subtitle">
                                Профильные трубы
                            </h3>
                        </a>
                        <a class="rolled-metal__item" href="#">
                            <svg class="rolled-metal__icon">
                                <use xlink:href="<?php bloginfo('template_url'); ?>/assets/icons/sprite.svg#fittings"></use>
                            </svg>
                            <h3 class="rolled-metal__subtitle">
                                Арматура
                            </h3>
                        </a>
                        <!--<a class="rolled-metal__item" href="#">
                            <svg class="rolled-metal__icon" width="125" height="48" viewBox="0 0 125 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.5 21.7987V18.8404L75.6814 0.515917L124.5 13.3001V15.8322L53.7401 42.4641L1.5 21.7987Z" stroke="#003B81"/>
                                <path d="M53.5 47L124.5 20" stroke="white" stroke-width="0.5" stroke-dasharray="2 2"/>
                                <path d="M0.994416 26.5383C0.867508 26.5927 0.80872 26.7396 0.863109 26.8665L1.74943 28.9346C1.80382 29.0615 1.95079 29.1203 2.07769 29.0659C2.2046 29.0115 2.26339 28.8646 2.209 28.7377L1.42116 26.8994L3.25945 26.1115C3.38636 26.0571 3.44515 25.9102 3.39076 25.7833C3.33637 25.6564 3.1894 25.5976 3.06249 25.652L0.994416 26.5383ZM51.1914 46.9979C51.3183 46.9435 51.3771 46.7965 51.3227 46.6696L50.4364 44.6015C50.382 44.4746 50.235 44.4158 50.1081 44.4702C49.9812 44.5246 49.9224 44.6716 49.9768 44.7985L50.7646 46.6368L48.9263 47.4246C48.7994 47.479 48.7406 47.626 48.795 47.7529C48.8494 47.8798 48.9964 47.9386 49.1233 47.8842L51.1914 46.9979ZM1.00005 27.0002L51 47.0002L51.1857 46.5359L1.18574 26.5359L1.00005 27.0002Z" fill="#003B81"/>
                            </svg>
                            <h3 class="rolled-metal__subtitle">
                                Листовой прокат
                            </h3>
                        </a>
                        -->
                        <a class="rolled-metal__item" href="#">
                            <svg class="rolled-metal__icon">
                                <use xlink:href="<?php bloginfo('template_url'); ?>/assets/icons/sprite.svg#channel"></use>
                            </svg>
                            <h3 class="rolled-metal__subtitle">
                                Швеллер
                            </h3>
                        </a>
                        <a class="rolled-metal__item" href="#">
                            <img class="rolled-metal__icon" src="#" alt="alt">
                            <h3 class="rolled-metal__subtitle">
                                Смотреть все
                            </h3>
                        </a>
                    </div>
                    <a class="rolled-metal__btn rolled-metal__btn-phone" href="#">
                        В каталог
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="rolled-metal">
        <div class="rolled-metal__content">
            <div class="container">
                <div class="rolled-metal__inner">
                    <div class="rolled-metal__info">
                        <h2 class="rolled-metal__title rolled-metal__title2">
                            Металлообработка
                        </h2>
                        <p>
                            Основными направлениями деятельности организации являются продажа и обработка металла
                        </p>
                        <div class="rolled-metal__buttons">
                            <a class="rolled-metal__button btn" href="#">
                                Все услуги
                            </a>
                            <a class="rolled-metal__button btn  btn-transparent" href="/metalloobrabotka">
                                Подробнее
                            </a>
                        </div>
                    </div>
                    <div class="rolled-metal__right">
                        <div class="rolled-metal__slider">
                            <div class="swiper-wrapper">
                                <a class="rolled-metal__slide swiper-slide" href="/lazernaya-rezka">
                                    <h3 class="rolled-metal__subtitle2">
                                        Лазерная резка ЧПУ
                                    </h3>
                                    <img class="rolled-metal__img"
                                         src="<?php bloginfo('template_url'); ?>/assets/img/rolled-metal/slide.jpg"
                                         alt="alt">
                                </a>
                                <a class="rolled-metal__slide swiper-slide" href="/plazmennaya-rezka">
                                    <h3 class="rolled-metal__subtitle2">
                                        Плазменная резка ЧПУ
                                    </h3>
                                    <img class="rolled-metal__img"
                                         src="<?php bloginfo('template_url'); ?>/assets/img/rolled-metal/slide2.jpg"
                                         alt="alt">
                                </a>
                                <a class="rolled-metal__slide swiper-slide" href="/gibka-lista">
                                    <h3 class="rolled-metal__subtitle2">
                                        Гибка листа (ЧПУ)
                                    </h3>
                                    <img class="rolled-metal__img"
                                         src="<?php bloginfo('template_url'); ?>/assets/img/rolled-metal/slide3.jpg"
                                         alt="alt">
                                </a>
                                <a class="rolled-metal__slide swiper-slide" href="/gibka-truby">
                                    <h3 class="rolled-metal__subtitle2">
                                        Гибка трубы
                                    </h3>
                                    <img class="rolled-metal__img"
                                         src="<?php bloginfo('template_url'); ?>/assets/img/rolled-metal/slide4.jpg"
                                         alt="alt">
                                </a>
                            </div>
                            <div class="rolled-metal__prev rolled-metal-prev"></div>
                            <div class="rolled-metal__next rolled-metal-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="rolled-metal">
        <div class="rolled-metal__content">
            <div class="container">
                <div class="rolled-metal__inner">
                    <div class="rolled-metal__info rolled-metal__info2">
                        <h2 class="rolled-metal__title rolled-metal__title2">
                            Металлоконструкции
                        </h2>
                        <p>
                            Компания «Броксталь» изготавливает элементы
                            для быстровозводимых зданий. Мы изготавливаем
                            фермы, балки перекрытия и даже целые цеха под ключ, а так же можем изготовить изделия по
                            вашим чертежам
                        </p>
                        <a class="rolled-metal__button btn" href="#">
                            Проконсультироваться
                        </a>
                    </div>
                    <div class="rolled-metal__box">
                        <img class="rolled-metal__box-images"
                             src="<?php bloginfo('template_url'); ?>/assets/img/rolled-metal/6.jpg" alt="alt">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="rolled-metal">
        <div class="rolled-metal__content">
            <div class="container">
                <div class="rolled-metal__inner">
                    <div class="rolled-metal__info">
                        <h2 class="rolled-metal__title rolled-metal__title2">
                            Прием металлолома
                        </h2>
                        <p>
                            Компания “Броксталь” занимается приемом лома цветных и черных металлов по выгодным ценам у
                            предприятий и населения
                        </p>
                        <div class="rolled-metal__buttons">
                            <a class="rolled-metal__button btn" href="#">
                                Цены на металлолом
                            </a>
                            <a class="rolled-metal__button btn  btn-transparent" href="/priem-metalloloma">
                                Подробнее
                            </a>
                        </div>
                    </div>
                    <div class="rolled-metal__inner-box">
                        <div class="rolled-metal__box-img">
                            <img class="rolled-metal__images2"
                                 src="<?php bloginfo('template_directory'); ?>/assets/img/rolled-metal/7.jpg" alt="alt">
                        </div>
                        <a class="rolled-metal__price" href="#">
                            <svg class="rolled-metal__price-icon" width="33" height="39" viewBox="0 0 33 39" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M25.7007 0.00707354C25.7295 0.013504 25.7551 0.0186486 25.7762 0.0405122C28.0763 2.40478 30.3762 4.76925 32.6759 7.13395C32.7879 7.24905 33.0087 7.40788 32.9997 7.58151C32.9963 7.64967 32.9946 7.68525 32.9946 7.68825C32.9946 18.0379 32.9946 28.3896 32.9946 38.7435C32.9946 38.7518 32.9912 38.7599 32.9852 38.7658C32.9792 38.7717 32.9711 38.775 32.9626 38.775H0.0415989C0.013866 38.775 0 38.7613 0 38.7338V0.0160761C0 0.00535871 0.00554719 2.19034e-10 0.0166403 2.19034e-10H25.6386C25.6594 -8.32385e-07 25.6803 0.00237204 25.7007 0.00707354ZM30.4865 8.76021C30.4865 8.56987 30.4775 8.46698 30.3233 8.30879C28.4558 6.39037 26.5879 4.47238 24.7196 2.55482C24.7052 2.53998 24.688 2.52818 24.669 2.52011C24.65 2.51205 24.6295 2.50789 24.6088 2.50788H2.51388C2.5098 2.50788 2.5059 2.5095 2.50302 2.5124C2.50014 2.51529 2.49852 2.51922 2.49852 2.52331V36.2343C2.49852 36.2429 2.50182 36.251 2.5077 36.2571C2.51358 36.2631 2.52156 36.2665 2.52988 36.2665L30.4814 36.2658C30.486 36.2658 30.4904 36.264 30.4936 36.2607C30.4968 36.2575 30.4987 36.2531 30.4987 36.2485C30.4974 27.0868 30.4933 17.924 30.4865 8.76021Z"
                                      fill="white"/>
                                <path d="M11.7157 15.8374L11.7176 8.18514C11.7176 8.17019 11.713 8.15558 11.7046 8.14319C11.6961 8.13081 11.6842 8.12123 11.6702 8.11569L10.7441 7.75366C10.7361 7.75064 10.7293 7.74479 10.7251 7.73713C10.7209 7.72948 10.7195 7.72053 10.7211 7.71186L10.9758 6.36532C10.9775 6.35675 10.9829 6.35246 10.9918 6.35246C13.1742 6.35075 15.3563 6.35096 17.5383 6.3531C19.9939 6.35568 22.1321 7.08682 22.4111 9.83777C22.5135 10.8525 22.4745 11.9463 22.0963 12.8922C21.3974 14.6407 19.4659 15.085 17.7776 15.0992C16.7353 15.1077 15.6925 15.1097 14.6494 15.105C14.6225 15.105 14.609 15.1185 14.609 15.1455L14.6078 15.8348C14.6078 15.8442 14.6115 15.8532 14.6181 15.8598C14.6247 15.8665 14.6336 15.8702 14.643 15.8702L19.0998 15.8715C19.1246 15.8715 19.137 15.8837 19.137 15.9081L19.1382 18.0205C19.1382 18.029 19.1349 18.0372 19.1289 18.0433C19.1229 18.0493 19.1147 18.0527 19.1062 18.0527L14.6417 18.0533C14.6199 18.0533 14.609 18.064 14.609 18.0855V19.6326C14.609 19.6777 14.5866 19.7002 14.5418 19.7002L11.7598 19.7034C11.7539 19.7034 11.7481 19.7022 11.7427 19.6999C11.7372 19.6976 11.7323 19.6942 11.7281 19.69C11.724 19.6858 11.7207 19.6807 11.7184 19.6752C11.7162 19.6697 11.715 19.6637 11.715 19.6577L11.7201 18.0797C11.7201 18.0727 11.7173 18.066 11.7123 18.061C11.7072 18.0561 11.7004 18.0533 11.6933 18.0533H10.6264C10.6177 18.0533 10.6094 18.0499 10.6033 18.0437C10.5972 18.0376 10.5938 18.0292 10.5938 18.0205L10.5944 15.9171C10.5944 15.9052 10.5992 15.8937 10.6077 15.8853C10.6162 15.8768 10.6278 15.8721 10.6398 15.8721L11.6792 15.874C11.7035 15.874 11.7157 15.8618 11.7157 15.8374ZM18.5488 8.8359C18.1345 8.69829 17.6961 8.6312 17.2336 8.63463C16.3637 8.64149 15.4959 8.64449 14.6302 8.64363C14.6242 8.64363 14.6185 8.646 14.6143 8.65022C14.6101 8.65445 14.6078 8.66017 14.6078 8.66614L14.609 12.7636C14.609 12.7863 14.6201 12.7977 14.6423 12.7977C15.517 12.8037 16.3916 12.8031 17.2663 12.7958C18.4349 12.7861 19.4192 12.5456 19.5882 11.2042C19.704 10.2866 19.5651 9.17286 18.5488 8.8359Z"
                                      fill="white"/>
                                <path d="M25.9163 22.8406H7.08271C7.06292 22.8406 7.04688 22.8567 7.04688 22.8766V25.3137C7.04688 25.3336 7.06292 25.3497 7.08271 25.3497H25.9163C25.9361 25.3497 25.9521 25.3336 25.9521 25.3137V22.8766C25.9521 22.8567 25.9361 22.8406 25.9163 22.8406Z"
                                      fill="white"/>
                                <path d="M25.9125 26.5718H7.08655C7.06464 26.5718 7.04688 26.5896 7.04688 26.6116V29.0398C7.04688 29.0618 7.06464 29.0797 7.08655 29.0797H25.9125C25.9344 29.0797 25.9521 29.0618 25.9521 29.0398V26.6116C25.9521 26.5896 25.9344 26.5718 25.9125 26.5718Z"
                                      fill="white"/>
                                <path d="M25.9196 30.3179H7.07317C7.05656 30.3179 7.04309 30.3314 7.04309 30.3481V32.7955C7.04309 32.8122 7.05656 32.8257 7.07317 32.8257H25.9196C25.9362 32.8257 25.9496 32.8122 25.9496 32.7955V30.3481C25.9496 30.3314 25.9362 30.3179 25.9196 30.3179Z"
                                      fill="white"/>
                            </svg>
                            <h3 class="rolled-metal__price-subtitle">
                                Посмотреть прайс на лом
                            </h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="rolled-metal">
        <div class="rolled-metal__content">
            <div class="container">
                <div class="rolled-metal__inner">
                    <div class="rolled-metal__info rolled-metal__info3">
                        <h2 class="rolled-metal__title rolled-metal__title3">
                            Вторсырьё
                        </h2>
                        <p>
                            Узнай стоимость вторсырья и посчитай сколько денег ты выбрасываешь
                        </p>
                        <div class="rolled-metal__buttons">
                            <a class="rolled-metal__btn rolled-metal__btn2" href="#">
                                Рассчитать стоимость
                            </a>
                            <a class="rolled-metal__button btn  btn-transparent" href="/vtorsyre">
                                Подробнее
                            </a>
                        </div>
                    </div>
                    <div class="rolled-metal__box-wastes">
                        <h3 class="rolled-metal__wastes-title">
                            Мы принимаем более 20 видов отходов
                        </h3>
                        <div class="rolled-metal__wastes">
                            <a class="rolled-metal__waste" href="/makulatura">
                                <img class="rolled-metal__waste-img"
                                     src="<?php bloginfo('template_url'); ?>/assets/img/rolled-metal/waste.jpg"
                                     alt="alt">
                                <h4 class="rolled-metal__wastes-subtitle">
                                    Макулатура
                                </h4>
                            </a>
                            <a class="rolled-metal__waste" href="/plenki">
                                <img class="rolled-metal__waste-img"
                                     src="<?php bloginfo('template_url'); ?>/assets/img/rolled-metal/waste2.jpg"
                                     alt="alt">
                                <h4 class="rolled-metal__wastes-subtitle">
                                    Пленка
                                </h4>
                            </a>
                            <a class="rolled-metal__waste" href="/plastik">
                                <img class="rolled-metal__waste-img"
                                     src="<?php bloginfo('template_url'); ?>/assets/img/rolled-metal/waste3.jpg"
                                     alt="alt">
                                <h4 class="rolled-metal__wastes-subtitle">
                                    Пластик
                                </h4>
                            </a>
                            <a class="rolled-metal__waste" href="/prochee">
                                <img class="rolled-metal__waste-img" src="#" alt="alt">
                                <h4 class="rolled-metal__wastes-subtitle">
                                    Прочее
                                </h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>