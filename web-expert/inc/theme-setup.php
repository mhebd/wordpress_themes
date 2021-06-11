<?php

  //Theme supports including
  function theme_supports() {
    //Theme support including
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
  }
  add_action( 'after_setup_theme', 'theme_supports' );






  /*%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%*/







  //theme widget including 
  function theme_widgets() {
    
    //Register left sidebar widget 
    register_sidebar([
      'name'              => __( 'Left Sidebar Widget', 'wpexpert' ),
      'id'                => 'left-sidebar-wid',
      'description'       => 'Edit your theme left sidebar here.',
      'before_widget'     => '<div class="ls-single-widget mb-4">',
      'after_widget'      => '</div>',
      'before_title'      => '<h3 class="lsw-heading">',
      'after_tilte'       => '</h3>',
    ]);


    // ===========================================================================


    //Register right sidebar for recent post
    register_sidebar([
      'name'              => __( 'Right Sidebar Populer Post Widget', 'wpexpert' ),
      'id'                => 'right-sidebar-pp-wid',
      'description'       => 'Edit your theme Populer Post Widget here.',
      'before_widget'     => '<div class="ls-single-widget mb-4">',
      'after_widget'      => '</div>',
      'before_title'      => '<h3 class="lsw-heading">',
      'after_tilte'       => '</h3>',
    ]);

    //Register right sidebar for populer post
    register_sidebar([
      'name'              => __( 'Right Sidebar Archive Widget', 'wpexpert' ),
      'id'                => 'right-sidebar-a-wid',
      'description'       => 'Edit your theme Archive Widget here.',
      'before_widget'     => '<div class="ls-single-widget mb-4">',
      'after_widget'      => '</div>',
      'before_title'      => '<h3 class="lsw-heading">',
      'after_tilte'       => '</h3>',
    ]);

    //Register right sidebar for recent comments
    register_sidebar([
      'name'              => __( 'Right Sidebar Recent Comment Widget', 'wpexpert' ),
      'id'                => 'right-sidebar-rc-wid',
      'description'       => 'Edit your theme Recent Comment Widget here.',
      'before_widget'     => '<div class="ls-single-widget mb-4">',
      'after_widget'      => '</div>',
      'before_title'      => '<h3 class="lsw-heading">',
      'after_tilte'       => '</h3>',
    ]);

    //Register right sidebar for custom text
    register_sidebar([
      'name'              => __( 'Right Sidebar Custom Text Widget', 'wpexpert' ),
      'id'                => 'right-sidebar-ct-wid',
      'description'       => 'Edit your theme Custom Text Widget here.',
      'before_widget'     => '<div class="ls-single-widget mb-4">',
      'after_widget'      => '</div>',
      'before_title'      => '<h3 class="lsw-heading">',
      'after_tilte'       => '</h3>',
    ]);


    // =================================================================================

    //Register footer widget
    register_sidebar([
      'name'              => __( 'Footer Widget', 'wpexpert' ),
      'id'                => 'footer-wid',
      'description'       => 'Edit your theme footer widget here.',

      'before_widget'     => '<div class="col-lg-3 col-md-6 mb-3">
                              <div class="footer-single-widget">',

      'after_widget'      => '</div></div>',
      'before_title'      => '<h3 class="fw-heading">',
      'after_tilte'       => '</h3>',
    ]);
  }
  add_action( 'after_setup_theme', 'theme_widgets' );






  /*%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%*/






  //Theme initial including
  function theme_initial() {
    //Register nav menu
    register_nav_menus([
      'primary'        => __('Top Nav Menu', 'wpexpert' ),
      'widget-menu'    => __( 'Widget Menu', 'wpexpert' ),
    ]);
  }
  add_action( 'init', 'theme_initial' );