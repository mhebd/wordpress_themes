<?php

  function lambda_scripts() {
    wp_enqueue_style('bootstrap-css', get_theme_file_uri('/css/bootstrap.min.css'), [], '4.5.0');
    wp_enqueue_style('main-css', get_stylesheet_uri(), [], '1.0.0');

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', get_theme_file_uri('/js/bootstrap.min.js'), [], '4.5.0', true);
    wp_enqueue_script('fontawesome-js', get_theme_file_uri('/js/fontawesome.min.js'), [], '5.9.1', true);
  }
  add_action('wp_enqueue_scripts', 'lambda_scripts');


?>