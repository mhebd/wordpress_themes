<?php

  //Theme basic customizetion
  function borofpani_customizer( $wp_customize ) {
    //Add Section
    $wp_customize->add_section('basic', [
      'title'           => __('Theme Basic Customizer', 'borofpani'),
      'description'     => 'You can now customize your theme basic functionality from here.',
      'priotrity'       => 130,
    ]);

    
    //theme color setting
    $wp_customize->add_setting('theme-color', [
      'default'         => '#ffaa0b',
      'type'            => 'theme_mod',
    ]);
    //theme color control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme-color', [
      'label'         => __('Theme Main Color', 'borofpani'),
      'section'       => 'basic',
      'setting'       => 'theme-color',
    ]) );

    
    //theme bg color setting
    $wp_customize->add_setting('theme-bg-color', [
      'default'         => '#9e0000',
      'type'            => 'theme_mod',
    ]);
    //theme bg color control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme-bg-color', [
      'label'         => __('Theme Background Color', 'borofpani'),
      'section'       => 'basic',
      'setting'       => 'theme-bg-color',
    ]) );

    
    //theme banner setting
    $wp_customize->add_setting('theme-banner', [
      'default'         => get_template_directory_uri().'/img/1.jpg',
      'type'            => 'theme_mod',
    ]);
    //theme banner control
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme-banner', [
      'label'         => __('Theme Banner', 'borofpani'),
      'section'       => 'basic',
      'setting'       => 'theme-banner',
    ]) );



    //theme copyright setting
    $wp_customize->add_setting('copyright', [
      'default'         => 'All Rights Reserved 2020',
      'type'            => 'theme_mod',
    ]);
    //theme copyright control
    $wp_customize->add_control( 'copyright', [
      'label'         => __('Theme Footer Copyright Text', 'borofpani'),
      'section'       => 'basic',
      'priority'      => 20,
    ] );


    //theme featured1 setting
    $wp_customize->add_setting('featured1', [
      'default'         => 'Wordpress',
      'type'            => 'theme_mod',
    ]);
    //theme featured1 control
    $wp_customize->add_control( 'featured1', [
      'label'         => __('Theme Featured One Category Name', 'borofpani'),
      'section'       => 'basic',
      'priority'      => 20,
    ] );


    //theme featured2 setting
    $wp_customize->add_setting('featured2', [
      'default'         => 'Technology',
      'type'            => 'theme_mod',
    ]);
    //theme featured2 control
    $wp_customize->add_control( 'featured2', [
      'label'         => __('Theme Featured Two Category Name', 'borofpani'),
      'section'       => 'basic',
      'priority'      => 20,
    ] );



  }
  add_action('customize_register', 'borofpani_customizer');
  
  



?>