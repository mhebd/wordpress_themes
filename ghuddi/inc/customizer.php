<?php

  //Theme basic customizetion
  function ghuddi_customizer( $wp_customize ) {
    //Add Section
    $wp_customize->add_section('basic', [
      'title'           => __('Theme Basic Customizer', 'ghuddi'),
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
      'label'         => __('Theme Main Color', 'ghuddi'),
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
      'label'         => __('Theme Background Color', 'ghuddi'),
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
      'label'         => __('Theme Footer Copyright Text', 'ghuddi'),
      'section'       => 'basic',
      'priority'      => 20,
    ] );


    //theme featured1 setting
    $wp_customize->add_setting('featured', [
      'default'         => 'Wordpress',
      'type'            => 'theme_mod',
    ]);
    //theme featured1 control
    $wp_customize->add_control( 'featured', [
      'label'         => __('Theme Featured One Category Name', 'ghuddi'),
      'section'       => 'basic',
      'priority'      => 20,
    ] );



  }
  add_action('customize_register', 'ghuddi_customizer');
  
  



?>