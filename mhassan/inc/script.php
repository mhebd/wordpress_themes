<?php

  function mhassan_stylesheets(){
    //stylesheets
    wp_enqueue_style('bootstrap-css', get_theme_file_uri('/css/bootstrap.min.css'), [], '4.3.1');
    wp_enqueue_style('owl-carousel', get_theme_file_uri('/css/owl.carousel.css'), [], '2.3.4');
    wp_enqueue_style('owl-theme-default', get_theme_file_uri('/css/owl.theme.default.css'), [], '2.3.4');
    wp_enqueue_style('animate-css', get_theme_file_uri('/css/animate.min.css'), [], '3.7.2');
    wp_enqueue_style( 'main-style', get_stylesheet_uri(), [], '1.0.5' );


    //javascripts
    //wp_enqueue_script('jquery');
    wp_enqueue_script('jQuery', get_theme_file_uri('/js/jquery-3.5.0.min.js'), [], '3.5.0', false);
    wp_enqueue_script('popper', get_theme_file_uri('/js/popper.min.js'), ['jQuery'], '4.3.1', true);
    wp_enqueue_script('bootstrap-js', get_theme_file_uri('/js/bootstrap.min.js'), ['jQuery'], '4.3.1', true);
    wp_enqueue_script('typed', get_theme_file_uri('/js/typed.js'), ['jQuery'], '2.0.9', true);
    wp_enqueue_script('fontawesome', get_theme_file_uri('/js/fontawesome.min.js'), [], '5.13.1', true);
    wp_enqueue_script('isotope', get_theme_file_uri('/js/isotope.pkgd.min.js'), ['jQuery'], time(), true);
    wp_enqueue_script('owl-js', get_theme_file_uri('/js/owl.carousel.js'), ['jQuery'], '2.3.4', true);
    wp_enqueue_script('wow', get_theme_file_uri('/js/wow.min.js'), ['jQuery'], '1.1.2', true);
    //App js file
    wp_enqueue_script('main-js', get_theme_file_uri('/js/app.js'), ['jQuery'], '1.0.0', true);
  }
  add_action('wp_enqueue_scripts', 'mhassan_stylesheets');







?>