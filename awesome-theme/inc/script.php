<?php


  function awesome_stylesheet(){
    wp_enqueue_style('bootstrap-css', get_theme_file_uri('/css/bootstrap.min.css'), [], '4.5.0');
    wp_enqueue_style('owl-carousel', get_theme_file_uri('/css/owl.carousel.css'), [], '2.3.4');
    wp_enqueue_style('owl-theme', get_theme_file_uri('/css/owl.theme.default.css'), [], '2.3.4');
    wp_enqueue_style('main-css', get_stylesheet_uri(), [], time());
  }
  add_action('wp_enqueue_scripts', 'awesome_stylesheet');

  
  function awesome_scripts(){
    wp_enqueue_script('jQuery', get_theme_file_uri('/js/jquery-3.5.1.js'), [], '3.5.1', true);
    wp_enqueue_script('bootstrap-js', get_theme_file_uri('/js/bootstrap.min.js'), ['jQuery'], '4.5.0', true);
    wp_enqueue_script('fontawesome', get_theme_file_uri('/js/fontawesome.min.js'), [], '5.9.3', true);
    wp_enqueue_script('owl-js', get_theme_file_uri('/js/owl.carousel.js'), ['jQuery'], '2.3.4', true);
    wp_enqueue_script('main-js', get_theme_file_uri('/js/main.js'), ['jQuery'], time(), true);
  }
  add_action('wp_enqueue_scripts', 'awesome_scripts');


?>