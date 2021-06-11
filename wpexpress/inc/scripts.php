<?php

  function theme_scripts() {
    
    wp_enqueue_style('bootstrap-css',get_theme_file_uri('/css/bootstrap.min.css'),array(),'4.3.1');
    wp_enqueue_style('theme-stylesheet', get_stylesheet_uri(), array(), time() );

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js',get_theme_file_uri('/js/bootstrap.min.js'),array('jquery'),'4.3.1',true);
    wp_enqueue_script('icon',get_theme_file_uri('/js/icon.js'),array(),'5.9.0',true);
    wp_enqueue_script('appjs',get_theme_file_uri('/js/app.js'),array('jquery'), time() ,true);
  }
  add_action('wp_enqueue_scripts', 'theme_scripts');