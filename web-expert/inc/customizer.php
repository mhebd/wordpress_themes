<?php

  function basic_customize($wp_customize) {
    $wp_customize->add_section('basic-customize', [
      'title'         => __('Basic Customize', 'wpexpert'),
      'description'   => 'Basic customizetion',
      'priority'      => 130,
    ]);

    //left sidebar heading
    $wp_customize->add_setting('left-sidebar-heading', [
      'default'           => 'Categoris',
      'type'              => 'theme_mod',
    ]);
    $wp_customize->add_control('left-sidebar-heading', [
      'label'           => __('Left sidebar heading', 'wpexpert'),
      'section'         => 'basic-customize',
      'priority'        => 20,
    ]);

    //latest post heading
    $wp_customize->add_setting('latest-post-heading', [
      'default'           => 'Latest Post',
      'type'              => 'theme_mod',
    ]);
    $wp_customize->add_control('latest-post-heading', [
      'label'           => __('Latest post heading', 'wpexpert'),
      'section'         => 'basic-customize',
      'priority'        => 20,
    ]);

    //right sidebar heading
    $wp_customize->add_setting('right-sidebar-heading', [
      'default'           => 'MORE',
      'type'              => 'theme_mod',
    ]);
    $wp_customize->add_control('right-sidebar-heading', [
      'label'           => __('Right sidebar heading', 'wpexpert'),
      'section'         => 'basic-customize',
      'priority'        => 20,
    ]);

    //footer copywrite text
    $wp_customize->add_setting('foote-copywrite', [
      'default'           => '2020- All right Reserved',
      'type'              => 'theme_mod',
    ]);
    $wp_customize->add_control('foote-copywrite', [
      'label'           => __('Footer copywrite', 'wpexpert'),
      'section'         => 'basic-customize',
      'type'            => 'textarea',
      'priority'        => 20,
    ]);


    // Basic theme color customizetion
    //__________________________________________________________

    //Theme color one
    $wp_customize->add_setting('theme-color-one', [
      'default'         => '##343a40',
      'type'            => 'theme_mod'
    ]);
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'theme-color-one', [
      'label'         => __('Theme Color One', 'wpexpert'),
      'section'       => 'basic-customize',
      'setting'       => 'theme-color-one'
    ]));

    //Theme color two
    $wp_customize->add_setting('theme-color-two', [
      'default'         => '#262424',
      'type'            => 'theme_mod'
    ]);
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'theme-color-two', [
      'label'         => __('Theme Color two', 'wpexpert'),
      'section'       => 'basic-customize',
      'setting'       => 'theme-color-two'
    ]));

    //Theme color three
    $wp_customize->add_setting('theme-color-three', [
      'default'         => '#f5f5f5',
      'type'            => 'theme_mod'
    ]);
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'theme-color-three', [
      'label'         => __('Theme Color three', 'wpexpert'),
      'section'       => 'basic-customize',
      'setting'       => 'theme-color-three'
    ]));
  }
  add_action( 'customize_register', 'basic_customize' );