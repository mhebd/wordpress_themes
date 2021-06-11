<?php 

  //added enqueue script
  include_once('inc/enqueue.php');

  //added theme setup
  include_once('inc/theme-setup.php');

  //theme intial adding
  include_once('inc/initial.php');

  //Bootstra nav walker
  include_once( 'inc/bootstrap-navwalker.php');

  //pagination script loaded
  include_once('tem-part/pagination.php');

  //Customizer script loaded
  include_once('inc/customizer.php');



  //excerpt filter
  function custom_excerpt() {
    return 16;
  }

  add_filter( 'excerpt_length', 'custom_excerpt');

  function new_excerpt_more( $more ) {
    return '...';
  }
  add_filter('excerpt_more', 'new_excerpt_more');




  //comment fields rearenge
      
  function move_comment_field( $fields ) {
      $comment_field = $fields['comment'];
      unset( $fields['comment'] );
      $fields['comment'] = $comment_field;
      return $fields;
  }
  add_filter( 'comment_form_fields', 'move_comment_field' );



  
