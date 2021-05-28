<section class="contacts" id="contacts" <?php if (is_404()) echo 'style="display: none"';?>>
    <div class="contacts__color">
       <?php echo do_shortcode( '[cf7form cf7key="english"]' );?>
        <!-- popup -->
        <div class="popup">
          <div class="popup__container">
            <button class="popup__close"></button>
            <h3 class="popup__title"><?php pll_e('Thanks for you message'); ?></h3>
            <p class="popup__message"><?php pll_e('We try to contact with you as fast as we can'); ?></p>
          </div>
        </div>
    </div>
    <div class="contacts__empty">
      <div class="contacts__color-container">
        <div class="contacts__item-color"></div>
      </div>
      <div class="contacts__content">
        <h2 class="contacts__title"><?php echo carbon_get_theme_option( 'contacts-title'. carbon_lang_prefix()); ?></h2>
        <p class="contacts__description"><?php echo carbon_get_theme_option( 'contacts-subtitle-1'. carbon_lang_prefix()); ?></p>
        <a class="contacts__link" href="tel:+1<?php echo preg_replace('![^0-9]+!', '', carbon_get_theme_option( 'contacts-phone'))?>"><?php echo carbon_get_theme_option( 'contacts-phone'); ?></a>
        <p class="contacts__caption"><?php echo carbon_get_theme_option( 'contacts-subtitle-2'. carbon_lang_prefix()); ?></p>
      </div>
    </div>
  <!-- </div> -->
    </section>

	</main>
	<footer class="footer">
    <div class="footer__container container">
      <div class="footer__left-side">
        <h2 class="footer__title"><?php echo carbon_get_theme_option( 'footer-title' . carbon_lang_prefix()); ?></h2>
        <p class="footer__description"><?php echo carbon_get_theme_option( 'footer-subtitle-1' . carbon_lang_prefix()); ?></p>
        <p class="footer__description"><?php echo carbon_get_theme_option( 'footer-subtitle-2' . carbon_lang_prefix()); ?></p>
      </div>
      <div class="footer__right-side">
        <p class="footer__text"><?php echo carbon_get_theme_option( 'footer-right-text-1' . carbon_lang_prefix()); ?></p>
        <p class="footer__text"><?php echo carbon_get_theme_option( 'footer-right-text-2' . carbon_lang_prefix()); ?></p>
        <a class="footer__phone" href="tel:+1<?php echo preg_replace('![^0-9]+!', '', carbon_get_theme_option( 'contacts-phone'))?>"><?php echo carbon_get_theme_option( 'contacts-phone'); ?></a>
        <a class="footer__email" href="mailto:<?php echo carbon_get_theme_option( 'contacts-email'); ?>"><?php echo carbon_get_theme_option( 'contacts-email'); ?></a>
      </div>
    </div>
  </footer>
    <?php wp_footer();?>
</body>
</html>
