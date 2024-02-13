<div data-popup="#application" class="application js__popup-open">
    <div class="application__body">
        <div class="application__content js__popup-content">
               <span class="application__close js__popup-close">
                  <img class="application__logo"
                       src="<?php bloginfo('template_url'); ?>/assets/img/application/close.svg" alt="alt">
               </span>
            <h3 class="application__title">
                Оставить заявку
            </h3>
            <div class="application__box">
                <?php echo do_shortcode( '[contact-form-7 id="365901e" title="Оставить заявку"]' ); ?>
            </div>
        </div>
    </div>
</div>