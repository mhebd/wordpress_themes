<?php

  function cc_intializer() {
    register_nav_menus(
      [
        'top-nav'     => __( 'Top Menu', 'cleancut'),
        'widget-nav'  => __( 'Widget Menu', 'cleancut'),
        'footer-nav'  => __( 'Footer Menu', 'cleancut'),
      ]
      );
  }

  add_action( 'init', 'cc_intializer' );

?>