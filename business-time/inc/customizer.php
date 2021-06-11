<?php 

  function businesstime_basic_customize($wp_customize) {
    $wp_customize->add_section('general', [
      'title'  => __('General Customize', 'businesstime'),
      'description'  => 'This is general customizetion for this site.',
      'priority'  => 130,
    ]);

    $wp_customize->add_setting('theme-main-color', [
      'default'   => '#14e414',
      'type'      => 'theme_mod',
    ]);

    $wp_customize->add_control(new WP_Customize_Color_Control(
      $wp_customize, 'theme-main-color', [
        'label'   => __('Theme main color', 'businesstime'),
        'section' => 'general',
        'setting' => 'theme-main-color',
      ]
    ));


    $wp_customize->add_setting('theme-second-color', [
      'default'   => '#343a40',
      'type'      => 'theme_mod',
    ]);

    $wp_customize->add_control(new WP_Customize_Color_Control(
      $wp_customize, 'theme-second-color', [
        'label'   => __('Theme second color', 'businesstime'),
        'section' => 'general',
        'setting' => 'theme-second-color',
      ]
    ));

    $wp_customize->add_setting('main-post-heading', [
      'default'   => 'Recent Post',
      'type'      => 'theme_mod',
    ]);

    $wp_customize->add_control('main-post-heading', [
      'label'     => __('Main Post Heading', 'businesstime'),
      'section'   => 'general',
      'priority'  => 20,
    ]);

    $wp_customize->add_setting('copyright', [
      'default'   => '2020 All Rights Reserved',
      'type'      => 'theme_mod',
    ]);

    $wp_customize->add_control('copyright', [
      'label'     => __('Footer Copyright Text', 'businesstime'),
      'section'   => 'general',
      'type'      => 'textarea',
      'priority'  => 20,
    ]);
  }
  add_action('customize_register', 'businesstime_basic_customize');





?>