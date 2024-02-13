<div class="category__box" style='background-image: url("<?php the_field('kartinka_bannera')?>")'>
    <div class="category__info <?=
               is_page('вакансии')
            || is_page('Новости')
            || is_page('Доставка и монтаж')
            || is_page('Дилерам')
            || is_page('Заказать продукцию')
            || is_page('Конфиденциальность') ? the_field('smena_czveta_teksta') : '' ?>"> <!-- category__info--black черный цвет на не которых страниц -->
        <h1 class="category__title">
            <?php the_field('tekst_na_bannere')?>
        </h1>
        <p>
            <?php the_field('opisanie_bannera')?>
        </p>
    </div>

    <?php if (
            is_page('вакансии')
            || is_page('Новости')
            || is_page('Доставка и монтаж')
            || is_page('Дилерам')
            || is_page('Заказать продукцию')
            || is_page('Конфиденциальность')
            || is_page('О компании')
            ):
        ?>

    <?php else: ?>
        <a class="category__btn  <?php the_field('ikonka_knopki') ?> <?php the_field('knopka_popap'); ?>" <?php the_field('knopka_popap2') ?> href="#"> <!-- category__btn--iconHide скрыть иконку там где её нет -->
            <?php the_field('tekst_na_knopke_prajs')?>
        </a>
    <?php endif;?>
</div>
