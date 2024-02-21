<aside class="content__aside">
    <ul class="sidebar-menu">
        <?php
        // проверяем есть ли в повторителе данные
        if (have_rows('straniczy')):
            // перебираем данные

            while (have_rows('straniczy')) : the_row(); ?>
                <li>
                    <a  href="<?php the_sub_field('ssylka') ?>" <?php the_sub_field('aktivnyj_punkt') ?>>
                        <?php the_sub_field('nazvanie') ?>
                    </a>
                </li>
            <?php endwhile;

        else :

            // вложенных полей не найдено

        endif;

        ?>
    </ul>
    <?php if (
    is_page('Вакансии')
    || is_page('Новости')
    || is_page('Доставка и монтаж')
    || is_page('Дилерам')
    || is_page('Заказать продукцию')
    || is_page('Конфиденциальность')
    || is_page('О компании')
    ):
        ?>

    <?php else: ?>
      <a class="price-download <?php the_field('ikonka_na_knopke')?> <?php the_field('popap_knopka')?>" <?php the_field('popap_knopka2')?> href="<?php the_field('ssylka_na_knopke')?>">
         <?php the_field('tekst_na_knopke')?>
       </a>
    <?php endif;?>
    <div class="callback">
        <h2 class="callback__title">
            Остались вопросы или не нашли нужную информацию?
        </h2>
        <p class="callback__text">
            Позвоните по телефону:
        </p>
        <a class="callback__phone" href="tel:<?php the_field('telefon',35)?>">
            <?php the_field('telefon',35)?>
        </a>
        <p class="callback__text">
            Наши социальные сети:
        </p>
        <div class="callback__socials">
            <a class="callback__social" href="<?php the_field('ssylka_vk',26)?>">
                <img class="callback__icon" src="<?php bloginfo('template_url'); ?>/assets/icons/vk.svg" alt="alt">
            </a>
            <a class="callback__social" href="<?php the_field('ssylka_votsap',26)?>">
                <img class="callback__icon" src="<?php bloginfo('template_url'); ?>/assets/icons/whatsap.svg" alt="alt">
            </a>
            <a class="callback__social" href="<?php the_field('ssylka_telegram',26)?>">
                <img class="callback__icon" src="<?php bloginfo('template_url'); ?>/assets/icons/telegram.svg" alt="alt">
            </a>
        </div>
        <p class="callback__text">
            или напишите на электронную почту:
        </p>
        <a class="callback__mail" href="mailto:<?php the_field('elektronnaya_pochta',35)?>">
            <?php the_field('elektronnaya_pochta',35)?>
        </a>
    </div>
</aside>

