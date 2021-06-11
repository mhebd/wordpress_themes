<?php 

  //friends4ever theme scripts file
  include_once('inc/scripts.php');

  //friends4ever theme setup files
  include_once('inc/theme-setup.php');

  //friends4ever bootstrap nav walker
  include_once('inc/bt-nav-walker.php');

  //Friends4ever customizer loading
  include_once('inc/customizer.php');

  //TGM plugins packages
  require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
  require_once get_template_directory() . '/inc/requird.php';






  //Excerpt filter
  function excerpt_more_filter(){
    return '...';
  }
  add_filter('excerpt_more', 'excerpt_more_filter');

  function excerpt_length_filter(){
    return 20;
  }
  add_filter('excerpt_length', 'excerpt_length_filter');















