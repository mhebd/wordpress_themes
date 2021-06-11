<?php 


  //Theme scripts including
  include_once('inc/theme-scripts.php');

  //Theme setup including
  include_once('inc/theme-setup.php');

  //Bootstrap nav walker including
  include_once('inc/bootstrap-navwalker.php');

  //Pagination script including
  include_once('inc/pagination.php');

  //Customize script including
  include_once('inc/customizer.php');



  //Excerpt length filter script
  function excerpt_lenth_filter() {
    return '16';
  }
  add_filter( 'excerpt_length', 'excerpt_lenth_filter' );

  //Excerpt more filter script
  function excerpt_more_filter() {
    return '...';
  }
  add_filter( 'excerpt_more', 'excerpt_more_filter' );