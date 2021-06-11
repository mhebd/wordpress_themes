<?php

  //Review slider post type registration
  function mhassan_custom_slider(){
    register_post_type(
      'customslider',
      array(
        'labels' => array(
          'name' => 'Review Slider',
          'add_new_item' => 'Add New Slider',
        ),
        'public' => true,
        'supports' => array(
          'title', 'thumbnail','editor'
        )
      )
    );
  }
  add_action('init', 'mhassan_custom_slider');










  //Review slider post type registration
  function mhassan_custom_portfolio(){
    register_post_type(
      'portfolios',
      array(
        'labels' => array(
          'name' => 'Portfolio Post',
          'add_new_item' => 'Add New Portfolio',
        ),
        'public' => true,
        'supports' => array(
          'title', 'thumbnail','custom-fields'
        ),
        'taxonomies'  => array( 'category' ),
      )
    );
  }
  add_action('init', 'mhassan_custom_portfolio');








  //Review slider post type registration
  function mhassan_custom_services(){
    register_post_type(
      'services',
      array(
        'labels' => array(
          'name' => 'Service Post',
          'add_new_item' => 'Add New Services',
        ),
        'public' => true,
        'supports' => array(
          'title', 'editor','custom-fields'
        )
      )
    );
  }
  add_action('init', 'mhassan_custom_services');



?>