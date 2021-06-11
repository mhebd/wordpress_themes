<?php 

  // Theme setup script
  function theme_setup() {

    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', [
      'width'     => 250,
      'height'    => 40,
    ]);
    add_theme_support('post-formats',array(
      'aside','gallery','link','audio','video'
    ));
    add_theme_support('custom-header', [
      'width'       => 1920,
      'height'      => 220,
    ]);
    add_theme_support('custom-background');
    add_theme_support('title-tag');






    register_post_type(
      'resources',
      array(
        'labels' => array(
          'name' => 'Resources',
          'add_new_item' => 'Add New Resource',
        ),
        'public' => true,
        'supports' => array(
          'title', 'thumbnail','editor','custom-fields'
        )
      )
    );

    register_post_type(
      'themes',
      array(
        'labels' => array(
          'name' => 'Theme Post',
          'add_new_item' => 'Add New Theme',
        ),
        'hierarchical' => true,
        'description' => 'Hi, this is my custom post type.',
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields',),
        'taxonomies' => array( 'category', 'post_tag', 'page-category' ),
        'public' => true,
        'capability_type' => 'post'
      )
    );

    register_sidebar(
      array(
        'name' => 'Footer Widget Area',
        'id' => 'footer_widget',
        'description' => 'Setup your footer widget here.',
        'before_widget' => '<div class="col-lg-3 col-md-6 mb-4">
        <div class="single-widget">',
        'after_widget' => '</div></div>',
        'before_title' => '<h2 class="widget-heading">',
        'after_title' => '</h2>',
      )
    );

    register_sidebar(
      array(
        'name' => 'Quote widget',
        'id' => 'quote_widget',
        'description' => 'Setup your quote widget here.',
        'before_widget' => '<div class="col-lg-4 col-md-6 col-sm-10 col-12 mx-auto">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-heading">',
        'after_title' => '</h2>',
      )
    );


    register_sidebar(
      array(
        'name' => 'News later form widget',
        'id' => 'newslater_widget',
        'description' => 'Setup your newslater form widget here.',
        'before_widget' => '<div class="col-lg-4 col-md-6 col-sm-8 mx-auto">
        <div class="news-later">',
        'after_widget' => '</div></div>',
        'before_title' => '<h2 class="widget-heading">',
        'after_title' => '</h2>',
      )
    );
    
  } 
  add_action('after_setup_theme','theme_setup');

  // Menu register script
  function menus() {
    register_nav_menus(
      array(
        'primary-menu' => __('Navbar Menu'),
        'secondary-menu' => __('Widget Menu'),
        'footer-menu' => __('Footer Menu')
      )
    );
  }
  add_action('init', 'menus');