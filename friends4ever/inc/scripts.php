<?php 

  //friends4ever stylesheets
  function friends4ever_stylesheets() {

    wp_enqueue_style('bootstrap-css', get_theme_file_uri('/css/bootstrap.min.css'), [], '4.5.0');
    wp_enqueue_style('buddypress-css', get_theme_file_uri('/css/buddypress.css'), [], time() );
    wp_enqueue_style('main-style', get_stylesheet_uri(), [], time());
    
  }
  add_action('wp_enqueue_scripts', 'friends4ever_stylesheets');



  //friends4ever scripts file
  function friends4ever_scripts() {

    wp_enqueue_script('jquery');
    wp_enqueue_script('popper-js', get_theme_file_uri('/js/popper.js'), ['jquery'], '4.5.0', true);
    wp_enqueue_script('bootstrap-js', get_theme_file_uri('/js/bootstrap.min.js'), ['jquery'], '4.5.0', true);
    wp_enqueue_script('app-js', get_theme_file_uri('/js/app.js'), ['jquery'], time(), true);

  }
  add_action('wp_enqueue_scripts', 'friends4ever_scripts');




?>