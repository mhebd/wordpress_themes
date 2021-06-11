<?php 


  //Shimla enqueue script loading
  include_once('inc/scripts.php');

  //Shimla theme supports script laoding
  include_once('inc/theme-setup.php');

  //Shimla theme nav walker
  include_once('inc/bt-walker.php');

  //Shimla breadcrumb script
  include_once('inc/breadcrumb.php');

  //Shimla theme customizer
  include_once('inc/customizer.php');

  //Shimla pagination script
  include_once('inc/pagination.php');



  //excerpt filter script 
  function excerpt_length_filter() {
    return 15;
  }
  add_action('excerpt_length', 'excerpt_length_filter');
  function excerpt_more_filter() {
    return '...';
  }
  add_action('excerpt_more', 'excerpt_more_filter');




?>