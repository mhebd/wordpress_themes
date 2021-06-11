<?php

  function cc_enqueue_scripts() {

    wp_enqueue_style( 'bootstrap', get_theme_file_uri('/css/bootstrap.min.css'), [], '4.3.1' );
    wp_enqueue_style( 'cc-style', get_stylesheet_uri(), [], time() );

    wp_enqueue_script('jquery');
    wp_enqueue_script( 'bootstrap-js', get_theme_file_uri('/js/bootstrap.min.js'), ['jquery'], '4.3.1', true);
    wp_enqueue_script( 'foontwaesome', get_theme_file_uri('/js/icon.js'), [], '5.9.0', true);
    wp_enqueue_script( 'main-js', get_theme_file_uri('/js/app.js'), ['jquery'], time(), true);

  }

  add_action( 'wp_enqueue_scripts', 'cc_enqueue_scripts' );

?>