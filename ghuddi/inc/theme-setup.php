<?php 


  //Ghuddi theme supports
  function ghuddi_theme_supports() {

    add_theme_support('custom-logo', [
      'width'      => 220,
      'height'     => 70,  
    ]);
    add_theme_support('custom-background', [
      'default-color'     => '#fff',
    ]);
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(1200, 600);
    add_theme_support('html5', [
      'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
    ]);
    add_theme_support('automatic-feed-links');

  }
  add_action('after_setup_theme', 'ghuddi_theme_supports');



  // Ghuddi menu register script
  function ghuddi_menus() {
    register_nav_menus([
      'primary'       => __('Navbar Top Menu', 'ghuddi'),
      'secondary'     => __('Footer Menu', 'ghuddi'),
    ]);
  }
  add_action('after_setup_theme', 'ghuddi_menus');





  //Ghuddi widgets
  function ghuddi_widgets() {
    //Sidebar widget registration
    register_sidebar([
      'name'            => __('Sidebar Widgets', 'ghuddi'),
      'id'              => 'sidebar-widget',
      'description'     => 'Set your sidebar widget',
      'before_widget'   => '<article class="sb-widget widget py-3 my-3">',
      'after_widget'    => '</article>',
      'before_title'    => '<h3 class="sbw-heading w-heading ">',
      'after_title'     => '</h3>',
    ]);

    //footer widget registration
    register_sidebar([
      'name'            => __('Footer Widgets', 'ghuddi'),
      'id'              => 'footer-widget',
      'description'     => 'Set your footer widget',
      'before_widget'   => '<div class="col-md-6 col-lg-3">
      <article class="fs-widget widget">',
      'after_widget'    => '</article></div>',
      'before_title'    => '<h3 class="fsw-heading w-heading">',
      'after_title'     => '</h3>',
    ]);

    //footer sicial widget registration
    register_sidebar([
      'name'            => __('Footer social Widgets', 'ghuddi'),
      'id'              => 'f-social',
      'description'     => 'Set your footer  sicial widget',
      'before_widget'   => '',
      'after_widget'    => '',
      'before_title'    => '',
      'after_title'     => '',
    ]);
  }
  add_action('after_setup_theme', 'ghuddi_widgets');




?>