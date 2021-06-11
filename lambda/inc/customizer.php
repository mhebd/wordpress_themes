<?php 

  function lambda_customizer($wp_customize) {
    
    //section created
    $wp_customize->add_section('basic', [
      'title'         => __('Theme Basic Customize', 'lambda'),
      'description'   => 'Change your theme basic like color, bannar etc.',
      'priority'      => 130,
    ]);


    //bannar change setting 
    $wp_customize->add_setting('banner', [
      'default'       => get_template_directory_uri().'/img/banner.jpg',
      'type'          => 'theme_mod',
    ]);

    //banner change control 
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner', [
      'label'       => __('Banner Image', 'lambda'),
      'section'     => 'basic',
      'setting'     => 'banner',
    ]));    


    //bannar change setting 
    $wp_customize->add_setting('theme-color', [
      'default'       => '#1ead0b',
      'type'          => 'theme_mod',
    ]);

    //banner change control 
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'theme-color', [
      'label'       => __('Theme Color', 'lambda'),
      'section'     => 'basic',
      'setting'     => 'theme-color',
    ]));    


    //bannar change setting 
    $wp_customize->add_setting('theme-bg-color', [
      'default'       => '#9e1818',
      'type'          => 'theme_mod',
    ]);

    //banner change control 
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'theme-bg-color', [
      'label'       => __('Theme Background Color', 'lambda'),
      'section'     => 'basic',
      'setting'     => 'theme-bg-color',
    ]));  
    
    
    //copyright text setting
    $wp_customize->add_setting('copyright', [
      'default'         => 'All Rights Reserved 2020',
      'type'            => 'theme_mod',
    ]);  

    //cpyright text control
    $wp_customize->add_control('copyright', [
      'label'       => __('Copyright Text', 'lambda'),
      'section'     => 'basic',
      'priority'    => 20,
    ]);







  }
  add_action('customize_register', 'lambda_customizer');



?>