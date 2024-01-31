<?php /* Template Name: Балки*/ ?>

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
                        <div class="wp-redactor">
                            <h3>
                                Виды строительных конструкций, которые мы изготавливаем:
                            </h3>
                            <ul>
                                <li>
                                    Каркасные элементы строительства (балки, колонны, стойки и т.п.)
                                </li>
                                <li>
                                    Арматурные пояса;
                                </li>
                                <li>
                                    Строительные фермы, прогоны, связи;
                                </li>
                                <li>
                                    Закладные детали и фундаментные анкерные болты;
                                </li>
                                <li>
                                    Технологические металлоконструкции (эстакады, опорные элементы, металлические лестницы, элементы ограждений, лестничные марши)
                                </li>
                            </ul>
                            <p>
                                Стоимость изготовления строительных металлоконструкций будет зависеть от объема и сложности конструкций.
                            </p>
                        </div>
                        <section class="manufacturingStages">
                            <h2 class="manufacturingStages__title title24 ">
                                Этапы изготовления металлоконструкции:
                            </h2>
                            <div class="manufacturingStages__items">
                                <div class="manufacturingStages__item">
                                    <img class="manufacturingStages__icon" src="<?php bloginfo('template_url'); ?>/assets/img/manufacturingStages/1.svg" alt="alt">
                                    <p class="manufacturingStages__text">
                                        Составление чертежей по эскизамрассмотрение проекта заказчика;
                                    </p>
                                </div>
                                <div class="manufacturingStages__item">
                                    <img class="manufacturingStages__icon" src="<?php bloginfo('template_url'); ?>/assets/img/manufacturingStages/2.svg" alt="alt">
                                    <p class="manufacturingStages__text">
                                        Предварительный расчет стоимости заказа;
                                    </p>
                                </div>
                                <div class="manufacturingStages__item">
                                    <img class="manufacturingStages__icon" src="<?php bloginfo('template_url'); ?>/assets/img/manufacturingStages/3.svg" alt="alt">
                                    <p class="manufacturingStages__text">
                                        Изготовление на современном оборудовании по резке, рубке, гибке и т.пр;
                                    </p>
                                </div>
                                <div class="manufacturingStages__item">
                                    <img class="manufacturingStages__icon" src="<?php bloginfo('template_url'); ?>/assets/img/manufacturingStages/4.svg" alt="alt">
                                    <p class="manufacturingStages__text">
                                        Точное соблюдение сроков выполнения заказа;
                                    </p>
                                </div>
                                <div class="manufacturingStages__item">
                                    <img class="manufacturingStages__icon" src="<?php bloginfo('template_url'); ?>/assets/img/manufacturingStages/5.svg" alt="alt">
                                    <p class="manufacturingStages__text">
                                        Доставка
                                    </p>
                                </div>
                                <div class="manufacturingStages__item">
                                    <img class="manufacturingStages__icon" src="<?php bloginfo('template_url'); ?>/assets/img/manufacturingStages/6.svg" alt="alt">
                                    <p class="manufacturingStages__text">
                                        Монтаж
                                    </p>
                                </div>
                            </div>
                        </section>
                        <?php include 'includes/form-file.php'; ?>
                        <?php include 'includes/callback.php'; ?>
                        <?php include 'includes/sidebar.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>