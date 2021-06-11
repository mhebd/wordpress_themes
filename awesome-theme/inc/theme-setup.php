<?php

  //theme setup script
  function awesome_theme_setup(){

    //Theme supports
    add_theme_support('custom-logo', [
      'width'       => 250,
      'height'      => 40,
    ]);
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');


    //refgister sidebar  widget
    register_sidebar([
      'name'        => __('Sidebar Widget Area', 'awesome'),
      'id'          => 'left-sidebar',
      'description' => 'This is left side widget area.',
      'before_widget'   => '<div class="my-4">',
      'after_widget'    => '</div>',
      'before_title'    => '<div class="left-widget-heading"><h4 class="">',
      'after_title'     => '</h4></div>',
    ]);


    //refgister footer  widget
    register_sidebar([
      'name'        => __('Footer Widget Area', 'awesome'),
      'id'          => 'footer-sidebar',
      'description' => 'This is footer widget area.',
      'before_widget'   => '<div class="col-md-4 col-sm-6 mb-4">',
      'after_widget'    => '</div>',
      'before_title'    => '<div class="footer-widget-heading"><h4 class="">',
      'after_title'     => '</h4></div>',
    ]);


    //refgister footer  social menu widget
    register_sidebar([
      'name'        => __('Footer Social Menu Widget Area', 'awesome'),
      'id'          => 'footer-social-sidebar',
      'description' => 'This is footer social menu widget area.',
      'before_widget'   => '<div class="">',
      'after_widget'    => '</div>',
    ]);

  }
  add_action('after_setup_theme', 'awesome_theme_setup');




  //Theme menu script 
  function awesome_menus() {
    register_nav_menus([
      'primary'       => __('Top Main Menu', 'awesome'),
      'secondary'       => __('Another Extra Menu', 'awesome'),
    ]);
  }
  add_action('init', 'awesome_menus');






?>