<section class="FAQ">
    <div class="FAQ__content">
        <div class="container">
            <div class="FAQ__inner">
                <div class="FAQ__info">
                    <h2 class="FAQ__title">
                        <?php echo get_field('nazvanie', 35) ?>
                    </h2>
                    <p>
                        <?php echo get_field('opisanie', 35) ?>
                    </p>
                    <?php

                    // Check rows exists.
                    if (have_rows('adresa', 35)):

                        // Loop through rows.
                        while (have_rows('adresa', 35)) : the_row(); ?>
                            <div class="FAQ__address">
                                <?php the_sub_field('adres') ?>
                            </div>
                            <a class="FAQ__phone" href="tel:<?php the_sub_field('telefon') ?>">
                                <?php the_sub_field('telefon') ?>
                            </a>
                        <?php endwhile;

// No value.
                    else :
                        // Do something...
                    endif; ?>
                </div>
                <div class="FAQ__accardion">
                    <?php

                    // Check rows exists.
                    if (have_rows('voprosy', 35)):

                        // Loop through rows.
                        while (have_rows('voprosy', 35)) : the_row(); ?>
                            <div class="FAQ__box">
                                <div class="FAQ__question">
                                    <div class="FAQ__btn">

                                    </div>
                                    <h3 class="FAQ__subtitle">
                                        <?php the_sub_field('vopros') ?>
                                    </h3>
                                </div>
                                <div class="FAQ__answer">
                                    <?php the_sub_field('otvet') ?>
                                </div>
                            </div>
                        <?php endwhile;

// No value.
                    else :
                        // Do something...
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>