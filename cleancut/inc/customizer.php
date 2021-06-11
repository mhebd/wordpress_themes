<?php

  function cc_social_menu_customizer( $wp_customize ) {
    /*clean cut social menu customizetion*/
    $wp_customize->add_section('social-menu',[
      'title'         => __( 'Clean Cut Social Menu', 'cleancut' ),
      'description'   => 'Clean Cut Social Menu Customizetion',
      'priority'      => 130,
    ]);

    //facebook link setup
    $wp_customize->add_setting('facebook-link', [
      'default'       => 'https://facebook.com',
      'type'          => 'theme_mod',
    ]);
    $wp_customize->add_control('facebook-link', [
      'label'         => __('Type your facebook link', 'cleancut'),
      'section'       => 'social-menu',
      'priority'      => 20,
    ]);

    //twitter link setup
    $wp_customize->add_setting('twitter-link', [
      'default'       => 'https://twitter.com',
      'type'          => 'theme_mod',
    ]);
    $wp_customize->add_control('twitter-link', [
      'label'         => __('Type your twitter link', 'cleancut'),
      'section'       => 'social-menu',
      'priority'      => 20,
    ]);

    //instagram link setup
    $wp_customize->add_setting('instagram-link', [
      'default'       => 'https://instagram.com',
      'type'          => 'theme_mod',
    ]);
    $wp_customize->add_control('instagram-link', [
      'label'         => __('Type your instagram link', 'cleancut'),
      'section'       => 'social-menu',
      'priority'      => 20,
    ]);

    //linked in link setup
    $wp_customize->add_setting('linkedin-link', [
      'default'       => 'https://linkedin.com',
      'type'          => 'theme_mod',
    ]);
    $wp_customize->add_control('linkedin-link', [
      'label'         => __('Type your linkedin link', 'cleancut'),
      'section'       => 'social-menu',
      'priority'      => 20,
    ]);

    //youtube link setup
    $wp_customize->add_setting('youtube-link', [
      'default'       => 'https://youtube.com',
      'type'          => 'theme_mod',
    ]);
    $wp_customize->add_control('youtube-link', [
      'label'         => __('Type your youtube link', 'cleancut'),
      'section'       => 'social-menu',
      'priority'      => 20,
    ]);
  }
  add_action('customize_register', 'cc_social_menu_customizer');




  

  function cc_home_basic_customizer($wp_customize) {
    //Clean cu tbasic customizetion
    $wp_customize->add_section('cc-basic', [
      'title'         => __( 'Basic Customizetion', 'cleancut'),
      'description'   => 'Clean cut home page basic customizetion',
      'priority'      => 130,
    ]);

    //main post heading
    $wp_customize->add_setting('main-post-heading', [
      'default'       => 'Latest Post',
      'type'          => 'theme_mod',
    ]);
    $wp_customize->add_control('main-post-heading', [
      'label'         => __('Main Post Heading', 'cleancut'),
      'section'       => 'cc-basic',
      'priority'      => 20,
    ]);

    //theme main color
    $wp_customize->add_setting('theme-main-color', [
      'default'       => '#20b2aa',
      'type'          => 'theme_mod',
    ]);
    $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'theme-main-color', [
      'label'       => __('Theme Main Color', 'cleancut'),
      'section'     => 'cc-basic',
      'setting'     => 'theme-main-color'
    ]));

    //theme second color
    $wp_customize->add_setting('theme-second-color', [
      'default'       => '#f5f5f5',
      'type'          => 'theme_mod',
    ]);
    $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'theme-second-color', [
      'label'       => __('Theme Second Color', 'cleancut'),
      'section'     => 'cc-basic',
      'setting'     => 'theme-second-color'
    ]));
  }
  add_action( 'customize_register', 'cc_home_basic_customizer' );


?>