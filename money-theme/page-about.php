<?php
    /*
        Template Name: About
    */
?>
<?php get_header();?>
    <section class="promo">
      <div class="promo__left-side">
        <div class="promo__text-block">
          <div class="promo__about">
            <svg class="promo__back-image" width="421" height="275" viewBox="0 0 421 275" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path class = "svg-fill" fill-rule="evenodd" clip-rule="evenodd" d="M128.499 0.5L124.377 18.8216C124.127 19.9324 124.068 21.0777 124.204 22.2081L125.499 33L126.999 42L128.499 47L124.999 52.5L123.338 55.4907C122.783 56.4895 122.403 57.576 122.215 58.7031L121.635 62.1836C121.545 62.727 121.499 63.2768 121.499 63.8276V69.5983C121.499 70.1982 121.553 70.7969 121.66 71.3872L122.244 74.5945C122.413 75.5268 122.714 76.4302 123.138 77.2778L125.499 82L128.183 88.2635C128.394 88.7537 128.564 89.2599 128.693 89.7773L129.999 95L130.819 99.0997C130.939 99.6986 131.113 100.285 131.34 100.852L132.999 105L134.499 111L135.499 114.5L136.363 119.684C136.454 120.227 136.499 120.777 136.499 121.328V122.478C136.499 123.484 136.691 124.48 137.064 125.413L137.102 125.507C137.365 126.165 137.724 126.781 138.167 127.335C139.037 128.422 140.201 129.234 141.522 129.674L142.499 130L145.305 130.701C146.098 130.9 146.913 131 147.73 131H149.499V154L147.499 157L143.999 163L132.999 183L127.499 192.5L124.499 193L120.999 195L116.499 197.5L111.499 201L106.999 205.5L86.9991 217L59.9991 234.5L44.4991 246L33.4991 255.5L22.4991 265L14.9991 275C-9.66755 212.5 -21.5009 70.1 128.499 0.5ZM321.999 16.5L322.999 26L323.499 36.5L323.05 43.2397C323.016 43.7458 322.944 44.2487 322.834 44.7438L322.55 46.0231C322.189 47.6486 322.239 49.3386 322.696 50.9397L322.999 52L323.999 57.5L324.499 63.5V69V72.5L324.159 75.2221C324.053 76.0705 323.839 76.9018 323.521 77.6957L322.999 79L320.86 82.8505C320.62 83.2829 320.412 83.7325 320.239 84.1957L319.457 86.2801C319.153 87.09 318.956 87.9358 318.87 88.7963L318.499 92.5L317.999 97.5L317.581 102.524C317.527 103.173 317.409 103.815 317.23 104.441L316.884 105.653C316.629 106.547 316.499 107.471 316.499 108.401V109.5V111.789C316.499 112.263 316.533 112.735 316.6 113.204L316.638 113.469C316.875 115.13 316.691 116.823 316.102 118.394L315.499 120L314.94 121.677C314.65 122.547 314.162 123.338 313.514 123.986C313.172 124.327 312.79 124.626 312.376 124.874L311.187 125.588C310.729 125.862 310.251 126.1 309.755 126.298L307.999 127L306.499 134L305.499 139.5C302.333 148.167 294.599 167.3 288.999 174.5L287.999 181.5L286.999 190.5L297.499 202.5L352.999 221C367.166 224.833 398.999 236.5 412.999 252.5C444.999 124.1 365.666 41.6667 321.999 16.5Z" />
            </svg>
            <img class="promo__about-image" src="<?=get_template_directory_uri().'/assets/img/about-promo.png';?>" alt="photo" width = "424" height = "482">
          </div>
          <p class="promo__subtitle promo__subtitle--about"><?php echo carbon_get_theme_option( 'about-subtitle' . carbon_lang_prefix()); ?></p>
        </div>
      </div>
      <div class="promo__decor">
        <div class="promo__decor-container">
          <div class="promo__decor-color"></div>
        </div>
        <p class="promo__about-content"><?php echo carbon_get_theme_option( 'about-promo-text' . carbon_lang_prefix()); ?></p>
      </div>
    </section>
    <section class="experience">
      <div class="experience__container container">
        <h2 class="experience__title"><?php echo carbon_get_theme_option( 'exp-title' . carbon_lang_prefix()); ?></h2>
        <div class="experience__content">
        <svg  class="experience__image" width="552" height="219" viewBox="0 0 552 219" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0)">
            <g filter="url(#filter0_iiiiiii)">
            <path class="svg-fill-start" d="M442.5 219.5V258H0V220C22 220 45.8333 182.333 55 163.5C69 138.5 88 109 109 109C128.5 109 141 124.5 153 141.5C165 158.5 177 184.5 200 184.5C221.5 184.5 235.667 153.5 241.5 138C253 114.5 282.5 0.5 319.5 0.5C359.5 0.5 379 121 404 180C418.174 213.451 435 220.5 442.5 219.5Z"/>
            </g>
            <g filter="url(#filter1_iiiiiii)">
            <path class="svg-fill-second" d="M89 239.5V220C139 220 163.5 147.5 176.5 110.5C189.5 73.5 202.5 32.3167 227 31.5001C246 30.8667 264.5 72.5 276 105C288.766 141.077 312.5 192 338 192C356.4 192 365 181.5 374.5 173C402.5 143 415.5 130 431.5 130C441.5 130 452.5 135 482.5 173C512.5 211 537.5 219.5 551.5 219.5V239.5H89Z"/>
            </g>
            </g>
            <defs>
            <filter id="filter0_iiiiiii" x="-32.76" y="-15.88" width="486.18" height="284.8" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
            <feOffset dx="-43.68" dy="-16.38"/>
            <feGaussianBlur stdDeviation="16.38"/>
            <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
            <feColorMatrix type="matrix" values="0 0 0 0 0.894118 0 0 0 0 0.894118 0 0 0 0 0.894118 0 0 0 0.4 0"/>
            <feBlend mode="multiply" in2="shape" result="effect1_innerShadow"/>
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
            <feOffset dx="-43.68" dy="-16.38"/>
            <feGaussianBlur stdDeviation="16.38"/>
            <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
            <feColorMatrix type="matrix" values="0 0 0 0 0.545098 0 0 0 0 0.545098 0 0 0 0 0.545098 0 0 0 0.4 0"/>
            <feBlend mode="color-burn" in2="effect1_innerShadow" result="effect2_innerShadow"/>
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
            <feOffset dx="-10.92" dy="-10.92"/>
            <feGaussianBlur stdDeviation="23.205"/>
            <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
            <feColorMatrix type="matrix" values="0 0 0 0 0.894118 0 0 0 0 0.894118 0 0 0 0 0.894118 0 0 0 0.2 0"/>
            <feBlend mode="multiply" in2="effect2_innerShadow" result="effect3_innerShadow"/>
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
            <feMorphology radius="1.092" operator="erode" in="SourceAlpha" result="effect4_innerShadow"/>
            <feOffset dx="-5.46" dy="-5.46"/>
            <feGaussianBlur stdDeviation="8.19"/>
            <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
            <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.6 0"/>
            <feBlend mode="overlay" in2="effect3_innerShadow" result="effect4_innerShadow"/>
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
            <feMorphology radius="5.46" operator="erode" in="SourceAlpha" result="effect5_innerShadow"/>
            <feOffset dx="10.92" dy="10.92"/>
            <feGaussianBlur stdDeviation="13.65"/>
            <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
            <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.4 0"/>
            <feBlend mode="overlay" in2="effect4_innerShadow" result="effect5_innerShadow"/>
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
            <feOffset dx="-0.546" dy="-0.546"/>
            <feGaussianBlur stdDeviation="2.73"/>
            <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
            <feColorMatrix type="matrix" values="0 0 0 0 0.894118 0 0 0 0 0.894118 0 0 0 0 0.894118 0 0 0 0.3 0"/>
            <feBlend mode="multiply" in2="effect5_innerShadow" result="effect6_innerShadow"/>
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
            <feOffset dx="-0.546" dy="-0.546"/>
            <feGaussianBlur stdDeviation="2.73"/>
            <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
            <feColorMatrix type="matrix" values="0 0 0 0 0.545098 0 0 0 0 0.545098 0 0 0 0 0.545098 0 0 0 0.7 0"/>
            <feBlend mode="color-burn" in2="effect6_innerShadow" result="effect7_innerShadow"/>
            </filter>
            <filter id="filter1_iiiiiii" x="56.24" y="15.1129" width="506.18" height="235.307" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
            <feOffset dx="-43.68" dy="-16.38"/>
            <feGaussianBlur stdDeviation="16.38"/>
            <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
            <feColorMatrix type="matrix" values="0 0 0 0 0.894118 0 0 0 0 0.894118 0 0 0 0 0.894118 0 0 0 0.4 0"/>
            <feBlend mode="multiply" in2="shape" result="effect1_innerShadow"/>
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
            <feOffset dx="-43.68" dy="-16.38"/>
            <feGaussianBlur stdDeviation="16.38"/>
            <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
            <feColorMatrix type="matrix" values="0 0 0 0 0.545098 0 0 0 0 0.545098 0 0 0 0 0.545098 0 0 0 0.4 0"/>
            <feBlend mode="color-burn" in2="effect1_innerShadow" result="effect2_innerShadow"/>
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
            <feOffset dx="-10.92" dy="-10.92"/>
            <feGaussianBlur stdDeviation="23.205"/>
            <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
            <feColorMatrix type="matrix" values="0 0 0 0 0.894118 0 0 0 0 0.894118 0 0 0 0 0.894118 0 0 0 0.2 0"/>
            <feBlend mode="multiply" in2="effect2_innerShadow" result="effect3_innerShadow"/>
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
            <feMorphology radius="1.092" operator="erode" in="SourceAlpha" result="effect4_innerShadow"/>
            <feOffset dx="-5.46" dy="-5.46"/>
            <feGaussianBlur stdDeviation="8.19"/>
            <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
            <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.6 0"/>
            <feBlend mode="overlay" in2="effect3_innerShadow" result="effect4_innerShadow"/>
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
            <feMorphology radius="5.46" operator="erode" in="SourceAlpha" result="effect5_innerShadow"/>
            <feOffset dx="10.92" dy="10.92"/>
            <feGaussianBlur stdDeviation="13.65"/>
            <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
            <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.4 0"/>
            <feBlend mode="overlay" in2="effect4_innerShadow" result="effect5_innerShadow"/>
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
            <feOffset dx="-0.546" dy="-0.546"/>
            <feGaussianBlur stdDeviation="2.73"/>
            <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
            <feColorMatrix type="matrix" values="0 0 0 0 0.894118 0 0 0 0 0.894118 0 0 0 0 0.894118 0 0 0 0.3 0"/>
            <feBlend mode="multiply" in2="effect5_innerShadow" result="effect6_innerShadow"/>
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
            <feOffset dx="-0.546" dy="-0.546"/>
            <feGaussianBlur stdDeviation="2.73"/>
            <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
            <feColorMatrix type="matrix" values="0 0 0 0 0.545098 0 0 0 0 0.545098 0 0 0 0 0.545098 0 0 0 0.7 0"/>
            <feBlend mode="color-burn" in2="effect6_innerShadow" result="effect7_innerShadow"/>
            </filter>
            <clipPath id="clip0">
            <rect width="552" height="219" fill="white"/>
            </clipPath>
            </defs>
            </svg>
          <p><?php echo carbon_get_theme_option( 'exp-text' . carbon_lang_prefix()); ?></p>
        </div>
      </div>
    </section>
    <section class="choose">
      <div class="choose__container container">
        <h2 class="choose__title"><?php echo carbon_get_theme_option( 'chooses-title' . carbon_lang_prefix()); ?></h2>
        <ol class="choose__list">
          <?php $chooses_cards = carbon_get_theme_option('chooses');
            foreach($chooses_cards as $key=>$card) :?>
            <li class="choose__item">
              <h3><?php echo $card['chooses-title'. carbon_lang_prefix()];?></h3>
              <div class="choose__content">
              <?php echo $card['chooses-description'. carbon_lang_prefix()];?>
              </div>
            </li>
          <? endforeach;?>
       </ol>
      </div>
    </section>
<?php get_footer();?>
