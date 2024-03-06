<article class="news-article news__slide swiper-slide">
    <a class="news-article__link-box" href="<?php the_permalink() ?>">
        <div class="news-article__box">
            <img class="news-article__img" src=" <?php the_post_thumbnail_url(); ?>"
                 alt="alt">
        </div>
        <h3 class="news-article__subtitle">
            <?php the_title() ?>
        </h3>
        <div class="news-article__data">
            <?php the_modified_date() ?>, <?php the_time() ?>
        </div>
        <div class="news-article__descr">
            <?php the_excerpt() ?>
        </div>
        <span class="news-article__link">
            Подробнее
        </span>
    </a>
</article>
