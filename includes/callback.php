<div class="callback element480-show">
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