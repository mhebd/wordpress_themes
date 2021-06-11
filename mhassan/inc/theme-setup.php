<?php 

  function mhassan_theme_setup(){
    //Theme supports
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');


    //Register contact form widget
    register_sidebar(
      array(
        'name' => 'Contact Form Widget',
        'id' => 'contact-form',
        'description' => 'If you want another contact form. Setup Your Contact Form from here using plugin. ',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="text-center">',
        'after_title' => '</h4>',
      )
    );
	  
    //Register social button menu widget
    register_sidebar(
      array(
        'name' => 'Social button menu Widget',
        'id' => 'social-btn-menu',
        'description' => 'If you do not like cefault social button menu.Creat your won menu here using plugin. ',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="text-center">',
        'after_title' => '</h4>',
      )
    );

    
  }
  add_action('after_setup_theme', 'mhassan_theme_setup');


  // Menu register script
  function menus() {
    register_nav_menus(
      array(
        'primary-menu' => __('Extra Main Menu', 'mhassan')
      )
    );
  }
  add_action('init', 'menus');






?>