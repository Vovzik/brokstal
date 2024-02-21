<a class="button-back detailed-news__back" href="/novosti">
    Вернуться назад
</a>
<div class="detailed-news__inner">
    <aside class="detailed-news__sidebar">
        <h3 class="detailed-news__title">
            Читайте также
        </h3>
          <?php
          $id = $post->ID;
          $my_posts = get_posts( array(
              'numberposts' => -1,
              'exclude'     => array($id),
              'post_type'   => 'post',
          ) );
          ?>

        <ul class="detailed-news__list scroll-js">
           <?php foreach($my_posts as $post) : ?>
            <?php setup_postdata( $post );?>
               <li class="detailed-news__list-item">
                   <a class="detailed-news__list-link" href="<?php the_permalink() ?>">
                       <h2 class="detailed-news__subtitle">
                           <?php the_title();?>
                       </h2>
                       <div class="detailed-news__data-time">
                           <?php the_modified_date();?>, <?php the_time();?>
                       </div>
                   </a>
               </li>
            <?php endforeach;?>
           <?php wp_reset_postdata();?>
        </ul>
    </aside>
    <div class="detailed-news__content">
        <h1 class="title24">
            <?php the_title() ?>
        </h1>
        <div class="detailed-news__box-img">
            <img class="detailed-news__img" src="<?php the_post_thumbnail_url(); ?>" alt="alt">
        </div>
        <div class="wp-redactor">
            <?= the_field('kontent') ?>
        </div>
    </div>
</div>
