<?php 


  //magazinoo panel
  function magazinoo_panel( $wp_customize ) {
    //Add panel
    $wp_customize->add_panel('magazinoo-panel', [
      'title'           => __('Magazinoo', 'magazinoo'),
      'description'     => 'You can now customize your theme functionality from here.',
      'priotrity'       => 20,
      'capability'      => 'edit_theme_options',
    ]);
  }
  add_action('customize_register', 'magazinoo_panel');


  //Theme genarel customizer
  function magazinoo_basic( $wp_customize ) {

    

    //Add Section
    $wp_customize->add_section('basic', [
      'title'           => __('Magazinoo Basic Customizer', 'magazinoo'),
      'description'     => 'You can now customize your theme basic functionality from here.',
      'priotrity'       => 130,
      'panel'           => 'magazinoo-panel',
    ]);

    
    //Theme Main color setting
    $wp_customize->add_setting('theme-color', [
      'default'         => '#ff0000',
      'type'            => 'theme_mod',
    ]);

    //Theme main color control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme-color', [
      'label'         => __('Theme Main Color', 'magazinoo'),
      'section'    => 'basic',
      'setting'     => 'theme-color',
    ]));


    //Theme background color 
    $wp_customize->add_setting('theme-bg', [
      'default'       => '#10ad71',
      'type'          => 'theme_mod',
    ]);

    //Theme background color control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme-bg', [
      'label'       => __('Theme Background Color'), 
      'section'     => 'basic',
      'setting'     => 'theme-bg',
    ]));


    //Theme section Heading color settign
    $wp_customize->add_setting('theme-sec-heading', [
      'default'       => '#ff0000',
      'type'          => 'theme_mod',
    ]);

    //Theme section heading color control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme-sec-heading', [
      'label'       => __('Theme section heading Color', 'magazinoo'), 
      'section'     => 'basic',
      'setting'     => 'theme-sec-heading',
    ]));


    //Theme footer background image settign
    $wp_customize->add_setting('theme-footer-bg', [
      'default'       => get_theme_file_uri('/img/1.jpg'),
      'type'          => 'theme_mod',
    ]);

    //Theme section heading color control
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme-footer-bg', [
      'label'       => __('Theme footer background image Color', 'magazinoo'), 
      'section'     => 'basic',
      'setting'     => 'theme-footer-bg',
    ]));

    //Theme footer copyright text setting
    $wp_customize->add_setting('copyright', [
      'default'       => '2020- All Rights Reserved',
      'type'          => 'theme_mod',
    ]);

    //Theme footer copyright text control
    $wp_customize->add_control('copyright', [
      'label'       => __('Theme Copyright Text', 'magazinoo'),
      'section'     => 'basic',
      'priority'    => 20,
    ]);

  }
  add_action('customize_register', 'magazinoo_basic');










  //Theme categoy section customization
  function magazinoo_cat_sec_utility( $wp_customize ){

    //Add section
    $wp_customize->add_section('cat-utility', [
      'title'           => __('Home Page Category post Utility', 'magazinoo'),
      'description'     => 'Set Your home page category section utility',
      'priority'        => 130,
      'panel'           => 'magazinoo-panel',
    ]);

    //featured post setting
    $wp_customize->add_setting('featured', [
      'default'       => 'featured',
      'type'          => 'theme_mod',
    ]);
    //featured post control
    $wp_customize->add_control('featured', [
      'label'         => __('Input Your Featured Post Category Slug Name', 'magazinoo'),
      'section'       => 'cat-utility',
      'priority'      => 20,
    ]);

    //section one post setting
    $wp_customize->add_setting('section-1', [
      'default'       => 'lifestyle',
      'type'          => 'theme_mod',
    ]);
    //section one post control
    $wp_customize->add_control('section-1', [
      'label'         => __('Input Your Section One Post Category Slug Name', 'magazinoo'),
      'section'       => 'cat-utility',
      'priority'      => 20,
    ]);


    //section two post setting
    $wp_customize->add_setting('section-2', [
      'default'       => 'travel',
      'type'          => 'theme_mod',
    ]);
    //section two post control
    $wp_customize->add_control('section-2', [
      'label'         => __('Input Your Section Two Post Category Slug Name', 'magazinoo'),
      'section'       => 'cat-utility',
      'priority'      => 20,
    ]);

    //section three post setting
    $wp_customize->add_setting('section-3', [
      'default'       => 'business',
      'type'          => 'theme_mod',
    ]);
    //section three post control
    $wp_customize->add_control('section-3', [
      'label'         => __('Input Your Section Three Post Category Slug Name', 'magazinoo'),
      'section'       => 'cat-utility',
      'priority'      => 20,
    ]);

  }
  add_action('customize_register', 'magazinoo_cat_sec_utility');









  //Theme categoy section customization
  function magazinoo_homepage_heading( $wp_customize ){

    //Add section
    $wp_customize->add_section('home-heading', [
      'title'           => __('Home Page Misc Section', 'magazinoo'),
      'description'     => 'Set Your home page section heading',
      'priority'        => 130,
      'panel'           => 'magazinoo-panel',
    ]);

    //email setting
    $wp_customize->add_setting('topbar', [
      'default'       => '1',
      'type'          => 'theme_mod',
    ]);
    //email control
    $wp_customize->add_control('topbar', [
      'label'         => __('Keep Your Top Bar', 'magazinoo'),
      'section'       => 'home-heading',
      'type'          => 'checkbox',
      'std'           => 1,
    ]);


    //email setting
    $wp_customize->add_setting('email', [
      'default'       => 'example@email.com',
      'type'          => 'theme_mod',
    ]);
    //email control
    $wp_customize->add_control('email', [
      'label'         => __('Input Your Email', 'magazinoo'),
      'section'       => 'home-heading',
      'priority'      => 20,
    ]);

    //Phone number setting
    $wp_customize->add_setting('phone', [
      'default'       => '+8801XXXXXXXXX',
      'type'          => 'theme_mod',
    ]);
    //Phone number control
    $wp_customize->add_control('phone', [
      'label'         => __('Input Your Phone Number', 'magazinoo'),
      'section'       => 'home-heading',
      'priority'      => 20,
    ]);


    //recent post setting
    $wp_customize->add_setting('recent', [
      'default'       => 'Recent',
      'type'          => 'theme_mod',
    ]);
    //recent post control
    $wp_customize->add_control('recent', [
      'label'         => __('Input Your recent Post section Heading', 'magazinoo'),
      'section'       => 'home-heading',
      'priority'      => 20,
    ]);

    //section one heading setting
    $wp_customize->add_setting('section-1h', [
      'default'       => 'Lifestyle',
      'type'          => 'theme_mod',
    ]);
    //section one heading control
    $wp_customize->add_control('section-1h', [
      'label'         => __('Input Your Section One Heading', 'magazinoo'),
      'section'       => 'home-heading',
      'priority'      => 20,
    ]);


    //section two heading setting
    $wp_customize->add_setting('section-2h', [
      'default'       => 'Travel',
      'type'          => 'theme_mod',
    ]);
    //section two heading control
    $wp_customize->add_control('section-2h', [
      'label'         => __('Input Your Section Two Heading', 'magazinoo'),
      'section'       => 'home-heading',
      'priority'      => 20,
    ]);

    //section three heading setting
    $wp_customize->add_setting('section-3h', [
      'default'       => 'Business',
      'type'          => 'theme_mod',
    ]);
    //section three heading control
    $wp_customize->add_control('section-3h', [
      'label'         => __('Input Your Section Three Heading', 'magazinoo'),
      'section'       => 'home-heading',
      'priority'      => 20,
    ]);

  }
  add_action('customize_register', 'magazinoo_homepage_heading');









?>