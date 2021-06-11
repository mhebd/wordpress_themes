
<?php

    function theme_scripts() {
        wp_enqueue_style( 'main-stylesheet', get_stylesheet_uri() );
        wp_enqueue_style( 'bootstrap', get_theme_file_uri( '/css/bootstrap.min.css' ), array(), '4.0' );
        wp_enqueue_style( 'animate', get_theme_file_uri( '/css/animate.min.css' ), array(), '1.0' );
        wp_enqueue_script( 'jquery', get_theme_file_uri( '/js/jquery.min.js' ), array(), '3.2.1', true );
        wp_enqueue_script( 'bootstrap-js', get_theme_file_uri( '/js/bootstrap.min.js' ), array( 'jquery' ), '4.2.1', true );
        wp_enqueue_script( 'wow-js', get_theme_file_uri( '/js/wow.min.js' ), array( 'jquery' ), '2.1', true );
        wp_enqueue_script( 'font-waesome', get_theme_file_uri( '/js/all.js' ), array( 'jquery' ), '2.1', true );
        wp_enqueue_script( 'main-script', get_theme_file_uri( '/js/main.js' ), array( 'jquery' ), '2.1', true );
    }
    add_action( 'wp_enqueue_scripts', 'theme_scripts' );



    function theme_supports() {
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'menus' );
        register_sidebar(
          array (
            'name'          => 'Left sidebar',
            'id'            => 'leftside',
            'description'   => 'This is left sidebar',
            'before_widget' => '<div class="sidebar-single-widget bg-light my-3 wow animated fadeIn">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="sidebar-widget-title text-center">',
            'after_title'   => '</h2>'
          )
        );
        register_sidebar(
          array (
            'name'          => 'Footer sidebar',
            'id'            => 'footerside',
            'description'   => 'This is footer sidebar',
            'before_widget' => '<div class="col-md-4 mb-4">
            <div class="single-footer-widget wow animated fadeIn">',
            'after_widget'  => '</div></div>',
            'before_title'  => '<h3 class="footer-widget-title text-center">',
            'after_title'   => '</h3>'
          )
        );
    }
        add_action('init', 'theme_supports');


    function register_my_menus() {
        register_nav_menus(
          array(
            'header-menu' => __( 'Header Menu' ),
            'footer-menu' => __( 'Footer Menu' )
          )
        );
      }
      add_action( 'init', 'register_my_menus' );