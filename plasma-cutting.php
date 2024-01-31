<?php /* Template Name: Плазменная резка*/ ?>

<?php get_header(); ?>


<main class="main">
    <section class="category">
        <div class="category__content section-content">
            <div class="container">
                <?php include 'includes/breadcrumbs.php'?>
                <?php include 'includes/banner.php'?>
                <div class="content">
                    <?php get_sidebar(); ?>
                    <div class="content__column">
                        <?php include 'includes/sidebar.php'; ?>
                        <h2 class="title24">
                            Стоимость лазерной резки металла, руб.
                        </h2>
                        <table class="table-column3">
                            <tr class="table-column3__tr">
                                <th class="table-column3__th">
                                    Толщина металла, мм
                                </th>
                                <th class="table-column3__th">
                                    Стоимость (Ст 03), руб.
                                </th>
                                <th class="table-column3__th">
                                    Стоимость (нержавеющая сталь), руб.
                                </th>
                            </tr>
                            <tr class="table-column3__tr">
                                <td class="table-column3__td">
                                    1 мм
                                </td>
                                <td class="table-column3__td">
                                    10₽
                                </td>
                                <td class="table-column3__td">
                                    25₽
                                </td>
                            </tr>
                            <tr class="table-column3__tr">
                                <td class="table-column3__td">
                                    1,2 - 1,5 мм
                                </td>
                                <td class="table-column3__td">
                                    15₽
                                </td>
                                <td class="table-column3__td">
                                    35₽
                                </td>
                            </tr>
                            <tr class="table-column3__tr">
                                <td class="table-column3__td">
                                    2 мм
                                </td>
                                <td class="table-column3__td">
                                    25₽
                                </td>
                                <td class="table-column3__td">
                                    45₽
                                </td>
                            </tr>
                        </table>
                        <h2 class="title24">
                            Стоимость газоплазменной резки за 1 пог.м., руб.
                        </h2>
                        <table class="table">
                            <tr class="table__tr">
                                <th class="table__th">
                                    Наименование сырья
                                </th>
                                <th class="table__th">
                                    Цена за 1 кг (руб)
                                </th>
                            </tr>
                            <tr class="table__tr">
                                <td class="table__td">
                                    Медь
                                </td>
                                <td class="table__td">
                                    670
                                </td>
                            </tr>
                            <tr class="table__tr">
                                <td class="table__td">
                                    Медь луженая (засор от 1%)
                                </td>
                                <td class="table__td">
                                    620
                                </td>
                            </tr>
                            <tr class="table__tr">
                                <td class="table__td">
                                    Медь стружка (засор от 10 %)
                                </td>
                                <td class="table__td">
                                    570
                                </td>
                            </tr>
                            <tr class="table__tr">
                                <td class="table__td">
                                    Медь (калорифер, засор от 5%)
                                </td>
                                <td class="table__td">
                                    500
                                </td>
                            </tr>
                            <tr class="table__tr">
                                <td class="table__td">
                                    Проволока, засор 5%
                                </td>
                                <td class="table__td">
                                    15000
                                </td>
                            </tr>
                            <tr class="table__tr">
                                <td class="table__td">
                                    Стружка стальная, засор не менее 10%
                                </td>
                                <td class="table__td">
                                    5000
                                </td>
                            </tr>
                        </table>
                        <div class="wp-redactor">
                            <ul>
                                <li>
                                    Один врез = 10% от цены п/м.
                                </li>
                                <li>
                                    Указанные цены до 100 п/м.;
                                </li>
                                <li>
                                    Надбавка за сложность (уникальность) – 1,5; давальческое сырье - 1,2.
                                </li>
                            </ul>
                        </div>
                        <section class="discounts">
                            <h2 class="text18500">
                                Скидки:
                            </h2>
                            <div class="discounts__items">
                                <div class="discounts__item">
                                    <div class="discounts__text">
                                        Свыше 100 п/м
                                    </div>
                                    <h3 class="discounts__title">
                                        10%
                                    </h3>
                                </div>
                                <div class="discounts__item">
                                    <div class="discounts__text">
                                        Свыше 500 п/м
                                    </div>
                                    <h3 class="discounts__title">
                                        20%
                                    </h3>
                                </div>
                                <div class="discounts__item">
                                    <div class="discounts__text">
                                        Свыше 1000 п/м
                                    </div>
                                    <h3 class="discounts__title">
                                        30%
                                    </h3>
                                </div>
                            </div>
                        </section>
                        <video class="video"  controls>
                            <source src="https://seaman.com.ru/wp-content/uploads/2023/04/0425.mp4" type="video/mp4">
                        </video>
                        <div class="wp-redactor">
                            <p>
                                Плазменная резка металла - один из наиболее эффективных способов обработки листового проката. На нашем предприятии имеется высокотехнологичная плазменная установка, технические возможности которой позволяют обрабатывать листы размерами 1500*3000 мм толщиной от 2 мм до 100 мм. Также можно заказать фигурную резку круглой трубы диаметром от 15 мм до 425 мм.
                            </p>
                        </div>
                        <div class="photo">
                            <div class="photo__items">
                                <div class="photo__item">
                                    <img class="photo__item-img" src="<?php bloginfo('template_url'); ?>/assets/img/photo/1.jpg" alt="alt">
                                </div>
                                <div class="photo__item">
                                    <img class="photo__item-img" src="<?php bloginfo('template_url'); ?>/assets/img/photo/2.jpg" alt="alt">
                                </div>
                            </div>
                        </div>
                        <div class="wp-redactor">
                            <h3>
                                Преимущества плазменной резки:
                            </h3>
                            <ul>
                                <li>
                                    высокая точность получаемых изделий;
                                </li>
                                <li>
                                    не требуется дополнительная обработка краев;
                                </li>
                                <li>
                                    высокая скорость обработки металла;
                                </li>
                                <li>
                                    высокая точность раскроя и минимальность отходов;
                                </li>
                                <li>
                                    отсутствие температурных деформаций готовых изделий;
                                </li>
                                <li>
                                    резка контура любой сложности;
                                </li>
                                <li>
                                    минимум отходов.
                                </li>
                            </ul>
                            <p>
                                Также вы можете приобрести готовый металлопрокат, ознакомившись с примерами в каталоге:
                                <a href="#">Метизы</a>, <a href="#">Сварочные электроды</a>, <a href="#">Сетка рабица</a>,
                                <a href="#">Сетка кладочная</a>, <a href="#">Сварочная проволока</a>, <a href="#">Стальные балки</a>,
                                <a href="#">Оцинкованные гладкие листы</a>, <a href="#">Профнастил для забора и крыши</a>,
                                <a href="#">Пластиковые заглушки</a>, <a href="#">Отрезные круги</a>, <a href="#">Шлифовальные круги</a>, также имеется различный
                                <a href="#">БУ металл</a>.
                            </p>
                            <p>
                                Возможности плазменной резки многогранны: от изготовления простых деталей до художественных изделий любой сложности. Компьютерная программа задает высокую точность траектории движения и, соответственно, обеспечивает заданные размеры получаемой детали. Оптимальные параметры плазменной струи также определяются компьютером. Данный метод позволяет получать практически в готовом виде зубчатые колеса, фланцы, корпуса подшипников и другие ответственные детали. Возможно изготовление отдельных элементов, сочетающих в себе привычные всем линии с эксклюзивным дизайном переходов, вставок и других декоративных элементов. Балконы и лестницы, фонари и флюгера, беседки, скамьи и фонтанные украшения, мангалы и барбекю, мостики и заборы, калитки, ворота и двери – все будет отвечать только Вашему вкусу и Вашим потребностям.
                            </p>
                        </div>
                        <?php include 'includes/form-file.php'; ?>
                        <?php include 'includes/callback.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>


