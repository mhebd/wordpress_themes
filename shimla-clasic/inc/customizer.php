<?php

  //Theme basic customizetion
  function shimla_customizer( $wp_customize ) {
    //Add Section
    $wp_customize->add_section('basic', [
      'title'           => __('Theme Basic Customizer', 'shimla'),
      'description'     => 'You can now customize your theme basic functionality from here.',
      'priotrity'       => 130,
    ]);

    
    //theme color setting
    $wp_customize->add_setting('theme-color', [
      'default'         => '#990404',
      'type'            => 'theme_mod',
    ]);
    //theme color control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme-color', [
      'label'         => __('Theme Main Color', 'shimla'),
      'section'       => 'basic',
      'setting'       => 'theme-color',
    ]) );

    
    //theme bg color setting
    $wp_customize->add_setting('theme-bg-color', [
      'default'         => '#ff7300',
      'type'            => 'theme_mod',
    ]);
    //theme bg color control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme-bg-color', [
      'label'         => __('Theme Background Color', 'shimla'),
      'section'       => 'basic',
      'setting'       => 'theme-bg-color',
    ]) );

    
    

    //theme copyright setting
    $wp_customize->add_setting('copyright', [
      'default'         => 'All Rights Reserved 2020',
      'type'            => 'theme_mod',
    ]);
    //theme copyright control
    $wp_customize->add_control( 'copyright', [
      'label'         => __('Theme Footer Copyright Text', 'shimla'),
      'section'       => 'basic',
      'priority'      => 20,
    ] );


  }
  add_action('customize_register', 'shimla_customizer');
  
  



?>