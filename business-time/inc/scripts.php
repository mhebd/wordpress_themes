<?php

  function businesstime_style(){
    wp_enqueue_style('bootstrap', get_theme_file_uri('/css/bootstrap.min.css'), [], '4.5.1');
    wp_enqueue_style('main-style', get_stylesheet_uri(), [], time());
  }
  add_action('wp_enqueue_scripts', 'businesstime_style');


  function businesstime_script(){
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', get_theme_file_uri('/js/bootstrap.min.js'), ['jquery'], '4.5.1', true);
    wp_enqueue_script('fontawesome-js', get_theme_file_uri('/js/fontawesome.min.js'), ['jquery'], '4.5.1', true);
  }
  add_action('wp_enqueue_scripts', 'businesstime_script')


?>