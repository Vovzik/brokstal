<section class="sendPhoto">
    <img class="sendPhoto__decor" src="<?php the_field('kartinka') ?>" alt="alt">
    <h2 class="sendPhoto__title">
        <?php the_field('zagolovok_formy') ?>
    </h2>
    <p class="sendPhoto__text">
        <?php the_field('opisanie') ?>
    </p>
    <a class="sendPhoto__btn button" href="<?php the_field('ssylka_na_knopke') ?>">
        Рассчитать
    </a>
</section>
