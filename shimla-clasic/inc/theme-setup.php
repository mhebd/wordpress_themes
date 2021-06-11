<?php 

  //Shimla Theme supports
  function shimla_theme_supports() {

    add_theme_support('custom-header', [
      'width'         => 1920,
      'height'        => 250,
    ]);

    add_theme_support('custom-logo', [
      'width'         => 300,
      'height'        => 90,
    ]);

    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(1200, 700, true);
    
    add_theme_support('custom-background', [
      'default-color'       => '#00ff00',
    ]);

  }
  add_action('after_setup_theme', 'shimla_theme_supports');



  //Shimla theme menus
  function shimla_theme_menus() {

    register_nav_menus([
      'primary'       => __('Top Nav Menu', 'shimla'),
      'secondary'     => __('Widget Menu', 'shimla'),
    ]);

  }
  add_action( 'init', 'shimla_theme_menus' );



  //Shimla theme widgets 
  function shimla_widgets_register() {

    //Shimla sidebar widgets
    register_sidebar([
      'name'          => __('Sidebar Widgets', 'shimla'),
      'id'            => 'left-widgets',
      'description'   => 'Set your site left sidebars',
      'before_widget' => '<article class="card lss-widget widget mb-5"><div class="card-body">',
      'after_widget'  => '</div></article>',
      'before_title'  => '<h3 class="lss-heading">',
      'after_title'   => '</h3>',
    ]);


    //Shimla Footer widgets
    register_sidebar([
      'name'          => __('Footer Widgets', 'shimla'),
      'id'            => 'footer-widgets',
      'description'   => 'Set your site footer Widgets',
      'before_widget' => '<div class="col-md-4 mb-4"><article class="fs-widget widget my-5"><div class="card-body">',
      'after_widget'  => '</div></article></div>',
      'before_title'  => '<h3 class="fsw-heading">',
      'after_title'   => '</h3>',
    ]);


    //Shimla social widgets
    register_sidebar([
      'name'          => __('Footer Social Widgets', 'shimla'),
      'id'            => 'social',
      'description'   => 'Set your site footer social Widgets',
    ]);

  }
  add_action( 'after_setup_theme', 'shimla_widgets_register' );


?>