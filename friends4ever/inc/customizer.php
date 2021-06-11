<?php 

  //Frindes4ever customizer
  function friends4ever_customizer_register( $wp_customize ){

    //friends4ever panel adding
    $wp_customize->add_panel('friends4ever-panel', [
      'title'       => __('Frineds Forever', 'friends4ever'),
      'description' => 'This is friends forever customize panel',
      'priority'    => 20,
      'capability'  => 'edit_theme_options',
    ]);


    //friends4ever section
    $wp_customize->add_section('basic', [
      'title'       => __('General Setting', 'friends4ever'),
      'description' => 'Change your general setting from here',
      'priority'    => 130,
      'panel'       => 'friends4ever-panel',
    ]);


    //friends4ever theme main color setting
    $wp_customize->add_setting('theme-main-color', [
      'default'     => '#4c3dd4',
      'type'        => 'theme_mod',
    ]);
    //friends4ever theme main color control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme-main-color', [
      'label'       => __('Theme Main Color', 'friends4ever'),
      'section'     => 'basic',
      'setting'     => 'theme-main-color',
    ]) );


    //friends4ever theme background color setting
    $wp_customize->add_setting('theme-bg-color', [
      'default'     => '#5052b5',
      'type'        => 'theme_mod',
    ]);
    //friends4ever theme background color control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme-bg-color', [
      'label'       => __('Theme Background Color', 'friends4ever'),
      'section'     => 'basic',
      'setting'     => 'theme-bg-color',
    ]) );





  }
  add_action('customize_register', 'friends4ever_customizer_register');





?>