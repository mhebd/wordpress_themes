<?php 

  function businesstime_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
  }
  add_action('after_setup_theme', 'businesstime_theme_support');



  //==================================


  function businesstime_widget(){
    //sidebar widgets
    register_sidebar(
      [
        'name'      => __('Sidebar Widgets', 'businesstime'),
        'id'        => 'sidebar-widget',
        'description' => 'This is sidebar widget. Set your sidebar widget here via drug and drop',
        'before_widget' => '<article class="single-widget-wrap my-4">',
        'after_widget' => '</article>',
        'before_title' => '<div class="widget-heading sidebar-widget-heading mb-4">
        <sapn class="bg-dark text-light py-1 px-2">',
        'after_title' => '</sapn>
        </div>',
      ]
    );



    //Footer widgets
    register_sidebar(
      [
        'name'      => __('Footer Widgets', 'businesstime'),
        'id'        => 'footer-widget',
        'description' => 'This is Footer widget. Set your footer widget here via drug and drop',
        'before_widget' => '<div class="col-md-4 my-4"><article class="single-widget-wrap footer-widget-wrap">',
        'after_widget' => '</article></div>',
        'before_title' => '<div class="widget-heading footer-widget-heading mb-4">
        <h5 class="text-light text-uppercase pb-2">',
        'after_title' => '</h5>
        </div>',
      ]
    );
  }
  add_action('after_setup_theme', 'businesstime_widget');



  // ====================================


  function businesstime_menus() {
    register_nav_menus(
      [
        'primary' => __('Top Menu', 'businesstime'),
        'secondary' => __('Footer Menu', 'businesstime'),
        'widget-menu' => __('Widget Menu', 'businesstime')
      ]
    );
  }
  add_action('init', 'businesstime_menus');


?>