<?php 

  function lambda_theme_setup() {

    //theme supports
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-background', [
      'default-color'     => '#fff',
    ]);


    //register sidebar widget
    register_sidebar([
      'label'         => __('Left Sidebar Widget', 'lambda'),
      'id'            => 'left-sidebar',
      'description'   => 'Set your left sidebar widgets',
      'before_widget' => '<article class="single-widget pb-5">',
      'after_widget'  => '</article>',
      'before_title'  => '<h3 class="sb-widget-heading mb-4">',
      'after_title'   => '</h3>',
    ]);


    //register footer left widget
    register_sidebar([
      'title'         => __('Footer Left Widget', 'lambda'),
      'id'            => 'footer-left',
      'description'   => 'Set your footer left sidebar widgets',
      'before_widget' => '<article class="single-widget py-4">',
      'after_widget'  => '</article>',
      'before_title'  => '<h3 class="f-widget-heading mb-4">',
      'after_title'   => '</h3>',
    ]);

    
    //register footer right widget
    register_sidebar([
      'title'         => __('Footer Right Widget', 'lambda'),
      'id'            => 'footer-right',
      'description'   => 'Set your footer right sidebar widgets',
      'before_widget' => '<div class="col-md-6 mb-4"><article class="single-widget py-4">',
      'after_widget'  => '</article></div>',
      'before_title'  => '<h3 class="f-widget-heading mb-4">',
      'after_title'   => '</h3>',
    ]);

    
    //register footer SOCIAL widget
    register_sidebar([
      'title'         => __('Footer Social Widget', 'lambda'),
      'id'            => 'footer-social',
      'description'   => 'Set your footer social sidebar widgets',
      'before_widget' => '',
      'after_widget'  => '',
      'before_title'  => '',
      'after_title'   => '',
    ]);

  }
  add_action('after_setup_theme', 'lambda_theme_setup');


  function lambda_nav_menus() {
    register_nav_menus([
      'primary'       => __('Top Menu', 'lambda'),
      'secondary'     => __('Others Menu', 'lambda'),
    ]);
  }
  add_action('init', 'lambda_nav_menus');








?>