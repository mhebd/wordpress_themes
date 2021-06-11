
<?php 

  //Magazinoo theme supports
  function magazinoo_theme_supports() {

    add_theme_support('title-tag');

    add_theme_support('custom-logo', [
      'width'       => 300,
      'height'      => 90,
    ]);

    add_theme_support('custom-background', [
      'default-color'         => '#ffffff',
    ]);

    add_theme_support('post-thumbnails');
    set_post_thumbnail_size( 1500, 800 );

    add_theme_support('custom-header', [
      'width'         => 1920,
      'height'        => 400,
    ]);


  }
  add_action( 'after_setup_theme', 'magazinoo_theme_supports' );





  //Theme widgets scripts
  function magazinoo_widgets() {

    //Top bar social menu widget 
    register_sidebar([
      'name'                => __( 'Top bar social menu', 'magazinoo' ),
      'id'                  => 'top-social',
      'description'         => 'Set your top bar social menu',
      'before_widget'       => '<div>',
      'after_widget'       => '</div>',
    ]);



    //Header ad widget 
    register_sidebar([
      'name'                => __( 'Header AD', 'magazinoo' ),
      'id'                  => 'header-ad',
      'description'         => 'Set Your header advertisement',
      'before_widget'       => '<div>',
      'after_widget'        => '</div>',
    ]);



    //Widget ad widget 
    register_sidebar([
      'name'                => __( 'widget AD', 'magazinoo' ),
      'id'                  => 'widget-ad',
      'description'         => 'Set Your widget advertisement',
      'before_widget'       => '<div>',
      'after_widget'        => '</div>',
    ]);



    //Left main sidebar widget
    register_sidebar([
      'name'                => __( 'Left main sidebar widgets', 'magazinoo' ),
      'id'                  => 'left-sidebar',
      'description'         => 'Set Your main sidebar widgets',
      'before_widget'       => '<div class="ls-widget card mb-5 pb-5 pt-4 widget"><div class="card-body">',
      'after_widget'        => '</div></div>',
      'before_title'        => '<h3 class="lsw-title mb-5">',
      'after_title'        => '</h3>',
    ]);



    //Footer widget
    register_sidebar([
      'name'                => __( 'Footer widgets', 'magazinoo' ),
      'id'                  => 'footer-widget',
      'description'         => 'Set Your Footer widgets',
      'before_widget'       => '<div class="col-lg-3 col-sm-6 mb-5"><div class="f-widget widget">',
      'after_widget'        => '</div></div>',
      'before_title'        => '<h3 class="fw-title mb-4">',
      'after_title'        => '</h3>',
    ]);

  }
  add_action( 'after_setup_theme', 'magazinoo_widgets' );






  
  //Theme menu register scripts
  function magazinoo_menus() {

    register_nav_menus([
      'top'         => __('Magazinoo Top Main Menu', 'magazinoo'),
      'widgets'     => __('Magazinoo Widgets Menu', 'magazinoo'),
      'footer'      => __('Magazinoo Footer Menu', 'magazinoo'),
    ]);

  }
  add_action( 'after_setup_theme', 'magazinoo_menus' );


?>