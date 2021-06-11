<?php 



  //TGM Plugins activation
  require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
  require_once get_template_directory() . '/inc/required-plugins.php';

  //theme scripts
  include_once('inc/script.php');

  //theme setup
  include_once('inc/theme-setup.php');

  //breadcrumb script
  include_once('inc/breadcrumb.php');

  //pagination script 
  include_once('inc/pagination.php');

  //bootstrap nav walker
  include_once('inc/walker.php');

  //customizer
  include_once('inc/customizer.php');



  //theme text doamin
  load_theme_textdomain( 'borofpani', get_stylesheet_directory() . '/languages' );
  load_theme_textdomain( 'borofpani', get_template_directory() . '/languages' );



  //change excerpt function
  function borofpani_excerpt_length() {
    return 10;
  }
  add_filter('excerpt_length', 'borofpani_excerpt_length');

  function borofpani_excerpt_more() {
    return '...';
  }
  add_filter('excerpt_more', 'borofpani_excerpt_more');









?>