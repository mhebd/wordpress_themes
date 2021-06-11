<?php 

  function awesome_customizer($wp_customize) {
    //theme basic customize
    $wp_customize->add_section('theme-basic', [
      'title'       => __('Theme Basic Customizetion', 'aweosme'),
      'description' => 'Customize your theme basic setting',
      'priority'    => 130,
    ]);
    
    //slider category text setting 
    $wp_customize->add_setting('slider-cat-name', [
      'default'       => 'Wordpress',
      'type'          => 'theme_mod'
    ]);

    //slider category text control
    $wp_customize->add_control('slider-cat-name', [
      'label'         => __('Use the category name that you show in slider', 'awesome'),
      'section'       => 'theme-basic',
      'setting'       => 'slider-cat-name',
    ]);

    //featured category text setting 
    $wp_customize->add_setting('featured-cat-name', [
      'default'       => 'Product',
      'type'          => 'theme_mod'
    ]);

    //featured category text control
    $wp_customize->add_control('featured-cat-name', [
      'label'         => __('Use the category name that you show in featured', 'awesome'),
      'section'       => 'theme-basic',
      'setting'       => 'featured-cat-name',
    ]);

    //copyright text setting 
    $wp_customize->add_setting('copyright', [
      'default'       => 'All Rights Reserved',
      'type'          => 'theme_mod'
    ]);

    //copyright text control
    $wp_customize->add_control('copyright', [
      'label'         => __('Your copyright text', 'awesome'),
      'section'       => 'theme-basic',
      'setting'       => 'copyright',
    ]);




    $wp_customize->add_setting('theme-main-color', [
      'default'   => '#14e414',
      'type'      => 'theme_mod',
    ]);

    $wp_customize->add_control(new WP_Customize_Color_Control(
      $wp_customize, 'theme-main-color', [
        'label'   => __('Theme main color', 'awesome'),
        'section' => 'theme-basic',
        'setting' => 'theme-main-color',
      ]
    ));


    $wp_customize->add_setting('theme-bg-color', [
      'default'   => '#ff0000',
      'type'      => 'theme_mod',
    ]);

    $wp_customize->add_control(new WP_Customize_Color_Control(
      $wp_customize, 'theme-bg-color', [
        'label'   => __('Theme background color', 'awesome'),
        'section' => 'theme-basic',
        'setting' => 'theme-bg-color',
      ]
    ));


  }
  add_action('customize_register', 'awesome_customizer')




?>