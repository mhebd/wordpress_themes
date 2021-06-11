<?php


  //Themes Hut enqueue functions

  function magazinoo_stylesheets() {
    
    wp_enqueue_style('bootstrap-css', get_theme_file_uri('/css/bootstrap.min.css'), [], '4.5.0' );
    wp_enqueue_style('main-stylesheet', get_stylesheet_uri(), [], time() );

  }
  add_action('wp_enqueue_scripts', 'magazinoo_stylesheets');



  function magazinoo_scripts() {

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_theme_file_uri('/js/bootstrap.min.js'), ['jquery'], '4.5.0', true );
    wp_enqueue_script('fontawesome', get_theme_file_uri('/js/fontawesome.min.js'), [], '5.9.1', true );
    wp_enqueue_script('app', get_theme_file_uri('/js/main.js'), ['jquery'], time(), true );

  }
  add_action('wp_enqueue_scripts', 'magazinoo_scripts');









?>