<?php

  function cc_theme_support() {

    //Show title
    add_theme_support( 'title-tag' );

    //add post thumbnail
    add_theme_support( 'post-thumbnails' );

    //add custom logo
    add_theme_support( 'custom-logo' );

    //sidebar registration

  }

  add_action( 'after_setup_theme', 'cc_theme_support' );


  //sidebar registration
  function cc_sidebar_registration() {

    //left sidebar registration
    register_sidebar(
      [
        'name'            => __( 'Left Sidebar Widget', 'cleancut'),
        'id'              => 'left-sidebar',
        'description'     => 'Clean cut left sidebar',
        'before_widget'   => '<article class="sidebar-singel-widget panel"><div class="panel-body">',
        'after_widget'    => '</div></article>',
        'before_title'    => '<div class="panel-heading"><h3>',
        'after_title'     => '</h3></div>',
      ]
    );


    //footer right side widget registration
    register_sidebar(
      [
        'name'            => __( 'Footer Left Widget', 'cleancut'),
        'id'              => 'footerwid1',
        'description'     => 'Clean cut left sidebar',
        'before_widget'   => '<div class="col-md-6 mb-4 sidebar-singel-widget footer-widget">',
        'after_widget'    => '</div>',
        'before_title'    => '<h3 class="wid-heading">',
        'after_title'     => '</h3>',
      ]
    );

    //footer left side widget registration
    register_sidebar(
      [
        'name'            => __( 'Footer Right Widget', 'cleancut'),
        'id'              => 'footerwid2',
        'description'     => 'Clean cut right sidebar',
        'before_widget'   => '<div class="col-md-6 mb-4 mb-md-0 sidebar-singel-widget footer-widget">',
        'after_widget'    => '</div>',
        'before_title'    => '<h3 class="wid-heading">',
        'after_title'     => '</h3>',
      ]
    );



  }

  add_action( 'after_setup_theme', 'cc_sidebar_registration' );

?>