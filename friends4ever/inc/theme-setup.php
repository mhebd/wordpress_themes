<?php 

  //friends4ever custom supports
  function friends4ever_supports(){

    add_theme_support('custom-logo', [
      'width'       => 300,
      'height'      => 80,
    ]);

    add_theme_support('custom-background', [
      'default-color'     => 'fffcae',
    ]);

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');
    set_post_thumbnail_size( 1200, 780 );

    add_theme_support('custom-header', [
      'width'         => 1920,
      'height'        => 250,
    ]);

    add_theme_support('automatic-feed-links');

    add_theme_support('html5', [
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'script',
      'style',
    ]);

  }
  add_action('after_setup_theme', 'friends4ever_supports');




  //friends4ever widgets registration
  function friends4ever_widgets(){

    //Home page activity widget
    register_sidebar([
      'name'            => __('Home Recent Activity Area', 'friends4ever'),
      'id'              => 'activity',
      'description'     => 'Set site home page activity widget here',
    ]);

    //Site sidebar widget register
    register_sidebar([
      'name'            => __('Sidebar Widgets', 'friends4ever'),
      'id'              => 'sidebar-widget',
      'description'     => 'Set your sidebar widgets from heare',
      'before_widget'   => '<div class="card mb-5"><div class="card-body py-4">',
      'after_widget'    => '</div></div>',
      'before_title'    => '<h4 class="sw-heading">',
      'after_title'     => '</h4>',
    ]);

  }
  add_action('after_setup_theme', 'friends4ever_widgets');







  //friends4ever menu register
  function friends4ever_nav_menus(){

    register_nav_menus([
      'primary'       => __('Top Main Menu', 'friends4ever'),
      'secondary'     => __('Footer Menu', 'friends4ever'),
      'widget_menu'   => __('Custom Widget Menu', 'friends4ever'),
    ]);

  }
  add_action('init', 'friends4ever_nav_menus');




?>