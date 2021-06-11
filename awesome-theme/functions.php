<?php 


  //Theme script loading
  include_once('inc/script.php');

  //theme setup setup
  include_once('inc/theme-setup.php');

  //Breadcrumb script
  include_once('inc/breadcrumb.php');

  //Bootstrap nav walker
  include_once('inc/bootstrap-walker.php');

  //pagination script loading
  include_once('inc/pagination.php');

  //Customizer script loading
  include_once('inc/customizer.php');









  //excerpt filter
  function excerpt_length() {
    return 15;
  }
  add_filter('excerpt_length', 'excerpt_length');

  function excerpt_more() {
    return '...';
  }
  add_filter('excerpt_more', 'excerpt_more');





?>