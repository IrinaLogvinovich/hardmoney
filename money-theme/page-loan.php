<?php
    /*
        Template Name: Loan
    */
?>
<?php get_header();?>
    <section class="promo promo--loan">
      <div class="promo__left-side">
        <div class="promo__text-block">
          <h1 class="promo__title"><?php echo carbon_get_theme_option( 'loan-title' . carbon_lang_prefix()); ?></h1>
          <div class="promo__start">
            <a href="#contacts" class="promo__contacts-link">
              <svg width="21" height="14" viewBox="0 0 21 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="svg-fill" d="M1 5.99981C0.447715 5.99981 -2.38419e-07 6.44753 0 6.99982C1.78814e-07 7.5521 0.447716 7.99981 1 7.99981L1 5.99981ZM19 6.99981L19.7025 7.71151L20.4236 6.99979L19.7025 6.28808L19 6.99981ZM13.6234 0.288272C13.2304 -0.0996833 12.5972 -0.0955317 12.2093 0.297545C11.8213 0.690621 11.8255 1.32377 12.2185 1.71173L13.6234 0.288272ZM12.2185 12.2883C11.8255 12.6763 11.8213 13.3094 12.2093 13.7025C12.5973 14.0955 13.2304 14.0997 13.6235 13.7117L12.2185 12.2883ZM1 7.99981L19 7.99981L19 5.99981L1 5.99981L1 7.99981ZM12.2185 1.71173L18.2975 7.71154L19.7025 6.28808L13.6234 0.288272L12.2185 1.71173ZM18.2975 6.2881L12.2185 12.2883L13.6235 13.7117L19.7025 7.71151L18.2975 6.2881Z"></path>
              </svg>
              <div class="promo__contacts-color"></div>
            </a>
            <span><?php pll_e('get started'); ?></span>
          </div>
        </div>
      </div>
      <div class="promo__decor">
        <div class="promo__decor-container">
          <div class="promo__decor-color"></div>
        </div>
       <ul class="promo__list">
         <?php $promo_list = carbon_get_theme_option('promo-list');
            foreach($promo_list as $key=>$card) :?>
            <li class="promo__item">
              <img src="<?php echo wp_get_attachment_image_url( $card['promo-list-image'], 'full')?>" alt="icon">
              <h3><?php echo $card['promo-list-title'. carbon_lang_prefix()];?></h3>
            </li>
          <? endforeach;?>
       </ul>

      </div>
    </section>
    <section class="types">
      <div class="types__container container swiper-container">
        <ul class="swiper-wrapper types__list">
          <?php $types_list = carbon_get_theme_option('types');
            foreach($types_list as $key=>$card) :?>
            <li class="swiper-slide types__item">
              <h3><?php echo $card['types-title'. carbon_lang_prefix()];?></h3>
              <?php echo $card['types-content'. carbon_lang_prefix()];?>
            </li>
          <? endforeach;?>
        </ul>
        <div class="swiper-pagination types__bullets"></div>
      </div>
    </section>
    <section class="form">
      <div class="form__decor-container">
        <div class="form__decor-color"></div>
      </div>
      <div class="form__container">
        <h2 class="form__title"><?php echo carbon_get_theme_option( 'form-title' . carbon_lang_prefix()); ?></h2>
        <p class="form__description"><?php echo carbon_get_theme_option( 'form-subtitle' . carbon_lang_prefix()); ?></p>
        <a class="form__link" href="<?=get_template_directory_uri().'/assets/business-loan-application.pdf';?>" download><?php pll_e('download'); ?></a>
      </div>
    </section>
    <section class="get-started">
      <div class="get-started__container">
        <div class="get-started__content">
        <?php echo wpautop( carbon_get_theme_option('started-content'.carbon_lang_prefix()));?>
        </div>
      </div>
    </section>
<?php get_footer();?>
