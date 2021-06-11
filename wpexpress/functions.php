<?php

  //wp enqueue scripts
  include_once('inc/scripts.php');

  //Theme Setup scripts
  include_once('inc/themesetup.php');

  //Breadcumbs script
  include_once('inc\breadcrumb.php');

  //Pagination script
  include_once('inc/pagination.php');

  //Customizer script
  include_once('inc/customizer.php');

  //Bootstrap nav walker
  include_once('inc/bt-walker.php');





  //excerpt control script
  function wpexpress_ex_len(){
    return 15;
  }
  add_filter('excerpt_length', 'wpexpress_ex_len');
  
  function wpexpress_ex_more() {
    return '...';
  }
  add_filter('excerpt_more', 'wpexpress_ex_more');


