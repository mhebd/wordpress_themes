<?php

  //ecqueue script loading
  include_once('inc/scripts.php');

  //theme setup loading
  include_once('inc/theme-setup.php');

  //pagination script loading
  include_once('inc/pagination.php');

  //Bootstrap walker script loading
  include_once('inc/bootstrap-walker.php');

  //Breadcrumb script loading
  include_once('inc/breadcrumb.php');

  //Theme customizer script loading
  include_once('inc/customizer.php');
  






  //filterring excerpt
  function businesstime_excerpt_length() {
    return 25;
  }
  add_filter('excerpt_length', 'businesstime_excerpt_length');

  function businesstime_excerpt_more() {
    return '...';
  }
  add_filter('excerpt_more', 'businesstime_excerpt_more');













?>