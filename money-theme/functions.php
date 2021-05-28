<?php
    //регистрация стилей и скриптов
    add_action('wp_enqueue_scripts', 'kt_theme_media');

    function kt_theme_media(){
        wp_enqueue_style('main', get_template_directory_uri().'/assets/css/style.min.css');
        wp_enqueue_script( 'vendor', get_template_directory_uri().'/assets/js/vendor.js', [], null, true);
        wp_enqueue_script( 'modules', get_template_directory_uri().'/assets/js/main.js', [], null, true);
    }

    //регистрация зон меню
    add_action('after_setup_theme', 'kt_theme_after_setup');

    function kt_theme_after_setup () {
        register_nav_menu( 'main-header-menu', 'Основное меню в шапке');
        add_theme_support('title-tag');
    }

    //убираем все некрасивости меню
    add_filter('nav_menu_item_id', 'kt_theme_nav_item_id', 10, 4);

    function kt_theme_nav_item_id ($menu_id, $item, $args, $depth) {
        if ($args->theme_location === 'main-header-menu') {
            $id = '';
        } else {
            $id = $menu_id;
        }
        return $id;
    }

    add_filter('nav_menu_css_class', 'kt_theme_nav_css_classes',10, 4);

    function kt_theme_nav_css_classes ($classes, $item, $args, $depth) {
        if ($args->theme_location === 'main-header-menu') {
            $class_list = $classes;
            $classes = ['header__menu-item'];

            if(in_array('current-menu-item', $class_list)) {
                $classes[] = 'header__menu-item--active';
            }
        }

        return $classes;
    }

    use Carbon_Fields\Container;
    use Carbon_Fields\Field;

    function carbon_lang_prefix() {
      $prefix = '';
      if ( ! defined( 'ICL_LANGUAGE_CODE' ) ) {
        return $prefix;
      }
      $prefix = '_' . ICL_LANGUAGE_CODE;
      return $prefix;
    }

    add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );

    function crb_attach_theme_options() {
        Container::make('theme_options', 'Theme Options')
        ->add_tab('Main Page', array(
            //блок Promo
            Field::make('text', 'mainpage-title'.carbon_lang_prefix(), 'Title'),
            Field::make('text', 'mainpage-subtitle'.carbon_lang_prefix(), 'Subtitle'),
            Field::make('text', 'mainpage-promo-text'.carbon_lang_prefix(), 'Text in color block'),

            //блок Options
            Field::make( 'complex', 'options', 'Options' )
                ->add_fields( array(
                    Field::make( 'text', 'options-title'.carbon_lang_prefix(), 'Title' ),
                    Field::make( 'text', 'options-description'.carbon_lang_prefix(), 'Description')
                )
            )
            ->set_layout('tabbed-horizontal')
            ->set_max(8),

            //Блок Solutions
            Field::make('text', 'solutions-title'.carbon_lang_prefix(), 'Solutions Title'),
            Field::make( 'complex', 'solutions', 'Solutions' )
                ->add_fields( array(
                    Field::make( 'text', 'solutions-title'.carbon_lang_prefix(), 'Title' ),
                    Field::make( 'text', 'solutions-description'.carbon_lang_prefix(), 'Description')
                )
            )
            ->set_layout('tabbed-horizontal')
            ->set_max(5)
        ))
        ->add_tab('About', array(
          Field::make('text', 'about-subtitle'.carbon_lang_prefix(), 'Subtitle'),
          Field::make('text', 'about-promo-text'.carbon_lang_prefix(), 'Text in color block'),
          //Experience
          Field::make('text', 'exp-title'.carbon_lang_prefix(), 'Experience title'),
          Field::make('text', 'exp-text'.carbon_lang_prefix(), 'Experience text'),
          //Choose
          Field::make('text', 'chooses-title'.carbon_lang_prefix(), 'Chooses title'),
          Field::make( 'complex', 'chooses', 'Chooses' )
                ->add_fields( array(
                    Field::make( 'text', 'chooses-title'.carbon_lang_prefix(), 'Title' ),
                    Field::make( 'text', 'chooses-description'.carbon_lang_prefix(), 'Description')
                )
            )
            ->set_layout('tabbed-horizontal')
            ->set_max(3),
        ))
        ->add_tab('Loan', array(
          Field::make('text', 'loan-title'.carbon_lang_prefix(), 'Title'),
          Field::make( 'complex', 'promo-list', 'Promo list' )
                ->add_fields( array(
                    Field::make( 'text', 'promo-list-title'.carbon_lang_prefix(), 'Title' ),
                    Field::make( 'image', 'promo-list-image', 'Icon (174 x 174)')
                )
            )
            ->set_layout('tabbed-horizontal')
            ->set_max(6),
          //SLider
          Field::make( 'complex', 'types', 'Types' )
                ->add_fields( array(
                    Field::make( 'text', 'types-title'.carbon_lang_prefix(), 'Title' ),
                    Field::make( 'rich_text', 'types-content'.carbon_lang_prefix(), 'Content')
                )
            )
            ->set_layout('tabbed-horizontal')
            ->set_max(3),
          //Download form
          Field::make('text', 'form-title'.carbon_lang_prefix(), 'Form title'),
          Field::make('text', 'form-subtitle'.carbon_lang_prefix(), 'Form subtitle'),
          //Get Started
          Field::make( 'rich_text', 'started-content'.carbon_lang_prefix(), 'Lets started content')
        ))
        ->add_tab('Footer', array(
          Field::make('text', 'footer-title'.carbon_lang_prefix(), 'Title'),
          Field::make('text', 'footer-subtitle-1'.carbon_lang_prefix(), 'Footer subtitle-1'),
          Field::make('text', 'footer-subtitle-2'.carbon_lang_prefix(), 'Footer subtitle-2'),
          Field::make( 'text', 'footer-right-text-1'.carbon_lang_prefix(), 'Footer right text-1'),
          Field::make( 'text', 'footer-right-text-2'.carbon_lang_prefix(), 'Footer right text-2')
        ))
        ->add_tab('Contacts', array(
          Field::make('text', 'contacts-title'.carbon_lang_prefix(), 'Title'),
          Field::make('text', 'contacts-subtitle-1'.carbon_lang_prefix(), 'Contacts subtitle-1'),
          Field::make('text', 'contacts-subtitle-2'.carbon_lang_prefix(), 'Contacts subtitle-2'),
          Field::make( 'text', 'contacts-phone', 'Phone'),
          Field::make( 'text', 'contacts-email', 'Email')
        ));
    }

    pll_register_string('contacts-us', 'contact us');
    pll_register_string('get-started', 'get started');
    pll_register_string('download', 'download');
    pll_register_string('popup-title', 'Thanks for you message');
    pll_register_string('popup-message', 'We try to contact with you as fast as we can');


  //   add_filter('wpcf7_form_elements', function($content) {
  //     $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

  //     return $content;
  // });
?>
