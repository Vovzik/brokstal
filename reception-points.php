<?php /* Template Name: Пункты приема металлолома*/ ?>

<?php get_header(); ?>

<main class="main">
    <section class="category">
        <div class="category__content section-content">
            <div class="container">
                <?php include "includes/breadcrumbs.php"; ?>
                <?php include "includes/banner.php"; ?>
                <div class="content">
                    <?php get_sidebar() ?>
                    <div class="content__column">
                        <div class="map map-js" data-coords="<?php the_field('koordinata') ?>"
                             data-coords2="<?php the_field('koordinata_2') ?>"></div>
                        <div class="wp-redactor">
                            <?php echo get_field('tekstovoe_pole')[0]['tekst']; ?>
                        </div>
                        <div class="addresses">
                            <div class="addresses__items">
                                <?php $repeater = get_field('elementy'); ?>
                                <?php if ($repeater) : ?>
                                    <?php foreach ($repeater as $repeater) : ?>
                                              <div class="addresses__item">
                                        <p class="addresses__text">
                                            <?php echo $repeater['adres'] ?>
                                        </p>
                                        <a class="addresses__phone" href=" <?php echo $repeater['telefon_ssylka'] ?>">
                                            <?php echo $repeater['telefon'] ?>
                                        </a>
                                    </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                            <div class="addresses__items">
                                <?php $repeater = get_field('grafiki'); ?>
                                <?php if ($repeater) : ?>
                                    <?php foreach ($repeater as $repeater) : ?>
                                                <div class="addresses__item">
                                                    <div class="addresses__text addresses__text--style">
                                                        <?= $repeater['tekst'] ?>
                                                    </div>
                                                    <div class="addresses__descr">
                                                        <?= $repeater['tekst2'] ?>
                                                    </div>
                                                </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="wp-redactor">
                            <?php echo get_field('tekstovoe_pole')[1]['tekst']; ?>
                        </div>
                        <div class="addresses">
                            <div class="addresses__items">
                                <?php $repeater = get_field('punkty_priema'); ?>
                                <?php if ($repeater) : ?>
                                    <?php foreach ($repeater as $repeater) : ?>
                                        <div class="addresses__item">
                                            <p class="addresses__text">
                                                <?php echo $repeater['adres'] ?>
                                            </p>
                                            <a class="addresses__phone" href=" <?php echo $repeater['telefon_ssylka'] ?>">
                                                <?php echo $repeater['telefon'] ?>
                                            </a>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                            <div class="addresses__items">
                                <?php $repeater = get_field('grafiki2'); ?>
                                <?php if ($repeater) : ?>
                                    <?php foreach ($repeater as $repeater) : ?>
                                        <div class="addresses__item">
                                            <div class="addresses__text addresses__text--style">
                                                <?= $repeater['tip_loma'] ?>
                                            </div>
                                            <div class="addresses__descr">
                                                <?= $repeater['tekst'] ?>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="wp-redactor">
                            <?php echo get_field('tekstovoe_pole')[2]['tekst']; ?>
                        </div>
                        <div class="addresses">
                            <div class="addresses__items">
                                <?php $repeater = get_field('punkty_priema2'); ?>
                                <?php if ($repeater) : ?>
                                    <?php foreach ($repeater as $repeater) : ?>
                                        <div class="addresses__item">
                                            <p class="addresses__text">
                                                <?php echo $repeater['adres'] ?>
                                            </p>
                                            <a class="addresses__phone" href=" <?php echo $repeater['telefon_ssylka'] ?>">
                                                <?php echo $repeater['telefon'] ?>
                                            </a>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                            <div class="addresses__items">
                                <?php $repeater = get_field('grafiki3'); ?>
                                <?php if ($repeater) : ?>
                                    <?php foreach ($repeater as $repeater) : ?>
                                        <div class="addresses__item">
                                            <div class="addresses__text addresses__text--style">
                                                <?= $repeater['tip_loma'] ?>
                                            </div>
                                            <div class="addresses__descr">
                                                <?= $repeater['tekst'] ?>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="wp-redactor">
                            <?php echo get_field('tekstovoe_pole')[3]['tekst']; ?>
                        </div>
                        <?php include "includes/form.php"; ?>
                        <?php include "includes/sidebar.php"; ?>
                        <?php include "includes/callback.php"; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>


