<?php 

  function wpexpress_customize($wp_customize) {
    //Front page banner section
    $wp_customize->add_section('banner', array(
      'title' => 'Banner',
      'description' => 'Front page banner section',
      'priority' => 130,
    ));
    
    //Banner heading setting
    $wp_customize->add_setting('banner_heading', array(
      'default' => 'Banner Heading',
      'type' => 'theme_mod'
    ));

    //Banner heading control
    $wp_customize->add_control('banner_heading', array(
      'label' => 'Heading',
      'section' => 'banner',
      'priority' => 20,
    ));
    
    //Banner text setting
    $wp_customize->add_setting('banner_text', array(
      'default' => 'Banner Text',
      'type' => 'theme_mod'
    ));

    //Banner text control
    $wp_customize->add_control('banner_text', array(
      'label' => 'Text',
      'section' => 'banner',
      'priority' => 20,
    ));
    
    //Banner btn1 text setting
    $wp_customize->add_setting('banner_btn1_text', array(
      'default' => 'Banner Button one',
      'type' => 'theme_mod'
    ));

    //Banner btn1 text control
    $wp_customize->add_control('banner_btn1_text', array(
      'label' => 'Button one',
      'section' => 'banner',
      'priority' => 20,
    ));
    
    //Banner btn1 link  setting
    $wp_customize->add_setting('banner_btn1_link', array(
      'default' => 'Banner Button one link',
      'type' => 'theme_mod'
    ));

    //Banner btn1 link control
    $wp_customize->add_control('banner_btn1_link', array(
      'label' => 'Button one link',
      'section' => 'banner',
      'priority' => 20,
    ));
    
    //Banner btn2 text setting
    $wp_customize->add_setting('banner_btn2_text', array(
      'default' => 'Banner Button two',
      'type' => 'theme_mod'
    ));

    //Banner btn2 text control
    $wp_customize->add_control('banner_btn2_text', array(
      'label' => 'Button two',
      'section' => 'banner',
      'priority' => 20,
    ));
    
    //Banner btn2 link  setting
    $wp_customize->add_setting('banner_btn2_link', array(
      'default' => 'Banner Button two link',
      'type' => 'theme_mod'
    ));

    //Banner btn2 link control
    $wp_customize->add_control('banner_btn2_link', array(
      'label' => 'Button two link',
      'section' => 'banner',
      'priority' => 20,
    ));
    
    //Banner backgroun img setting
    $wp_customize->add_setting('banner_bg_img', array(
      'default' => get_bloginfo('template_directory').'/img/1.jpg',
      'type' => 'theme_mod'
    ));

    //Banner backgroun img control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'banner_bg_img',array(
      'label' => 'Banner image',
      'section' => 'banner',
      'setting' => 'banner_bg_img'
    )));



    //Front page utility section
    $wp_customize->add_section('utility', array(
      'title' => 'Front Page Utility',
      'description' => 'Front Page Utility section',
      'priority' => 130
    ));

    //Front page quote text setting
    $wp_customize->add_setting('resources_heading',array(
      'default' => 'Get Our Useful Resources',
      'type' => 'theme_mod'
    ));

    //Front page quote text control
    $wp_customize->add_control('resources_heading', array(
      'label' => 'Resources Heading',
      'section' => 'utility',
      'priority' => 20
    ));

    //Front page quote text setting
    $wp_customize->add_setting('latest_post_heading',array(
      'default' => 'Get Our Latest Post',
      'type' => 'theme_mod'
    ));

    //Front page quote text control
    $wp_customize->add_control('latest_post_heading', array(
      'label' => 'Latest Post Heading',
      'section' => 'utility',
      'priority' => 20
    ));

    //Front page quote text setting
    $wp_customize->add_setting('theme_post_heading',array(
      'default' => 'Get Our Latest Theme',
      'type' => 'theme_mod'
    ));

    //Front page quote text control
    $wp_customize->add_control('theme_post_heading', array(
      'label' => 'Latest Theme Heading',
      'section' => 'utility',
      'priority' => 20
    ));

    

    //Front page quote bg img setting
    $wp_customize->add_setting('quote_bg_img',array(
      'default' => get_bloginfo('template_directory').'/img/3.jpg',
      'type' => 'theme_mod'
    ));

    //Front page quote woner name control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'quote_bg_img', array(
      'label' => 'Quote Background',
      'section' => 'utility',
      'setting' => 'quote_bg_img'
    )));



    //Front page newslater bg img setting
    $wp_customize->add_setting('newslater_bg_img',array(
      'default' => get_bloginfo('template_directory').'/img/2.jpg',
      'type' => 'theme_mod'
    ));

    ////Front page newslater bg img control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'newslater_bg_img', array(
      'label' => 'Newsletter Background img',
      'section' => 'utility',
      'setting' => 'newslater_bg_img'
    )));



    //Front page Theme color one setting
    $wp_customize->add_setting('theme-color',array(
      'default' => '#f7bf08',
      'type' => 'theme_mod'
    ));

    ////Front page Theme color one control
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'theme-color', array(
      'label' => 'Theme Color',
      'section' => 'utility',
      'setting' => 'theme-color'
    )));


    //Front page Theme color Two setting
    $wp_customize->add_setting('theme-bg',array(
      'default' => '#141414',
      'type' => 'theme_mod'
    ));

    ////Front page Theme color Two control
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'theme-bg', array(
      'label' => 'Theme background Color',
      'section' => 'utility',
      'setting' => 'theme-bg'
    )));
    
  }
  add_action('customize_register', 'wpexpress_customize');