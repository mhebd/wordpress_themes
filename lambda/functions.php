<?php 

  //lambda script loading
  include_once('inc/scripts.php');

  //theme setup script
  include_once('inc/theme-setup.php');

  //bootstrap nav walker script 
  include_once('inc/bt-nav-walker.php');

  //pagination script
  include_once('inc/pagination.php');

  //breadcrumb script
  include_once('inc/breadcrumb.php');

  //customizer loading
  include_once('inc/customizer.php');


  // excerpt filter
  function new_excerpt_length() {
    return 20;
  }
  add_filter('excerpt_length', 'new_excerpt_length');

  function new_excerpt_more() {
    return '...';
  }
  add_filter('excerpt_more', 'new_excerpt_more');
  





?>