<?php

  function theme_stylesheet() {
    wp_enqueue_style('bootstrap-css', get_theme_file_uri('/css/bootstrap.min.css'), [], '4.3.1');
    wp_enqueue_style('main-css', get_stylesheet_uri(), [], time() );
  }
  add_action( 'wp_enqueue_scripts', 'theme_stylesheet' );

  function theme_script() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', get_theme_file_uri('/js/bootstrap.min.js'), ['jquery'], '4.3.1', true);
    wp_enqueue_script('icon', get_theme_file_uri('/js/icon.js'), [], '5.9.1', true);
    wp_enqueue_script('custom-js', get_theme_file_uri('/js/app.js'), ['jquery'], '1.0.1', true);
  }
  add_action( 'wp_enqueue_scripts', 'theme_script');