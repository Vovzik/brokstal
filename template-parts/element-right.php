<article class="news-article">
    <a class="news-article__link-box" href="<?php the_permalink() ?>">
        <h3 class="news-article__subtitle">
            <?php the_title() ?>
        </h3>
        <div class="news-article__data">
            <?php the_modified_date() ?>, <?php the_time() ?>
        </div>
    </a>
</article>