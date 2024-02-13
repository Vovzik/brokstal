<ul class="sidebar-menu element480-show">
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
