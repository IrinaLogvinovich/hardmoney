<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <title>Private Money</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
    <body class="page-body <?php if (is_page(25) || is_page(23)) echo 'page-body--contacts'?>">
        <?php if (!is_page(25) && !is_page(23)) :?>
        <canvas class="background"></canvas>
        <? endif;?>
        <header class="header">
          <div class="header__container container">
            <div class="header__mobile-icons">
              <button class="header__burger">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 12H23" stroke="#323232" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M1 18H23" stroke="#323232" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M1 6H23" stroke="#323232" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </button>
              <button class="header__close">
                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5.70711 20.5567L20.5563 5.70747" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M5.70696 5.70711L20.5562 20.5563" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </button>
            </div>
            <nav class="header__nav">
                <?php
                wp_nav_menu( [
                    'theme_location'  => 'main-header-menu',
                    'container'       => false,
                    'echo'            => true,
                    'items_wrap'      => '<ul class="header__menu">%3$s</ul>',
                ] );
                ?>
            </nav>
            <a href="tel:+1<?php echo preg_replace('![^0-9]+!', '', carbon_get_theme_option( 'contacts-phone'))?>" class="header__phone-link"><?php echo carbon_get_theme_option( 'contacts-phone'); ?></a>
            <ul class="header__lang"><?php pll_the_languages(array('show_flags'=>1,'show_names'=>0)); ?></ul>
          </div>
        </header>
	    <main>
