
<?php


  //borofpani theme support
  function borofpani_theme_support() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', [
      'width'       => 250,
      'height'      => 40,
    ]);
    add_theme_support('custom-background');

    set_post_thumbnail_size( 1920, 600, array( 'center', 'center')  );

  }
  add_action('after_setup_theme', 'borofpani_theme_support');


  //borofpani widget setup
  function borofpani_widget_setup() {

    //left sidebar widget register
    register_sidebar([
      'name'         => __('Left sidebar widget', 'borofpani'),
      'id'            => 'left-widget',
      'description'   => 'Setup your left sidebar widget',
      'before_widget' => '<div class="sidebar-single-widget mb-4 mt-3">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="sidebar-widget-title">',
      'after_title'   => '</h3>',
    ]);

    //left sidebar widget register
    register_sidebar([
      'name'         => __('Footer  widget', 'borofpani'),
      'id'            => 'footer-widget',
      'description'   => 'Setup your foooter widget',
      'before_widget' => '<div class="footer-single-widget col-md-4 mb-4">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="footer-widget-title">',
      'after_title'   => '</h3>',
    ]);

  }
  add_action('after_setup_theme', 'borofpani_widget_setup');



  //theme menus
  function borofpani_menus() {
    //theme nav menu register
    register_nav_menus([
      'top_menu'          => __('Main Menu', 'borofpani'),
      'widget_menu'       => __('Widget Menu', 'borofpani'),
      'footer_menu'       => __('Footer Menu', 'borofpani'),
    ]);
  }
  add_action('init', 'borofpani_menus')




?>