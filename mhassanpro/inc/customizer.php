<?php 

  /**
   * ===================================================
   * Hero section customizetion.
   * ====================================================
   */
  function mhassan_hero_customizer($wp_customize){
    //section
    $wp_customize->add_section('hero-customizetion', [
      'title'       => __('Hero Section Customize', 'mhassan'),
      'description' => 'Theme hero section customizetion and settings.',
      'priority'    => 130,
    ]);

    //welcome note setting
    $wp_customize->add_setting('welcome-note', [
      'default'       => 'Hi, this is me',
      'type'          => 'theme_mod',
    ]);

    //welcome note control
    $wp_customize->add_control('welcome-note', [
      'label'       => __('Welcome Note', 'mhassan'),
      'section'     => 'hero-customizetion',
      'priority'    => 20,
    ]);

    //Name setting
    $wp_customize->add_setting('name', [
      'default'       => 'Mehedi Hassan',
      'type'          => 'theme_mod',
    ]);

    //name control
    $wp_customize->add_control('name', [
      'label'       => __('Name', 'mhassan'),
      'section'     => 'hero-customizetion',
      'priority'    => 20,
    ]);

    //extra-info setting
    $wp_customize->add_setting('extra-info', [
      'default'       => 'Full stack Developer',
      'type'          => 'theme_mod',
    ]);

    //extra-info control
    $wp_customize->add_control('extra-info', [
      'label'       => __('Extra Info', 'mhassan'),
      'section'     => 'hero-customizetion',
      'priority'    => 20,
    ]);

    //typed text setting
    $wp_customize->add_setting('typed-text', [
      'default'       => " 'Good At: Html5 & css3',
                          'Good At: twitter bootstrap',
                          'Good At: Jquery',
                          'Good At: javascript',
                          'I Will do: parsonal website design',
                          'I will do: blog design',
                          'I will do: landing page design' ",
      'type'          => 'theme_mod',
    ]);

    //typed text control
    $wp_customize->add_control('typed-text', [
      'label'       => __('Typed Text', 'mhassan'),
      'section'     => 'hero-customizetion',
      'type'        => 'textarea',
      'priority'    => 20,
    ]);

    //btn text setting
    $wp_customize->add_setting('btn-text', [
      'default'       => 'Hire Me',
      'type'          => 'theme_mod',
    ]);

    //btn text control
    $wp_customize->add_control('btn-text', [
      'label'       => __('Button Text', 'mhassan'),
      'section'     => 'hero-customizetion',
      'priority'    => 20,
    ]);

    //btn link setting
    $wp_customize->add_setting('btn-link', [
      'default'       => 'https://www.fiverr.com/users/m_hassan_coder/seller_dashboard',
      'type'          => 'theme_mod',
    ]);

    //btn link control
    $wp_customize->add_control('btn-link', [
      'label'       => __('Button Link', 'mhassan'),
      'section'     => 'hero-customizetion',
      'priority'    => 20,
    ]);

    // Hero background image setting
    $wp_customize->add_setting('hero-bg', [
      'default'     => get_bloginfo('template_directory').'/img/hero-bg.jpg',
      'type'        => 'theme_mod',
    ]);

    //Hero background image control
    $wp_customize->add_control(new WP_Customize_Image_control(
      $wp_customize, 'hero-bg', [
        'label'     => __('Hero Section Background Image', 'mhassan'),
        'section'   => 'hero-customizetion',
        'setting'   => 'hero-bg',
      ]
      ));

    // Hero top Avatar image setting
    $wp_customize->add_setting('hero-top-avatar', [
      'default'     => get_bloginfo('template_directory').'/img/me-2.png',
      'type'        => 'theme_mod',
    ]);

    //Hero top Avatar image control
    $wp_customize->add_control(new WP_Customize_Image_control(
      $wp_customize, 'hero-top-avatar', [
        'label'     => __('Hero Section Top Avatar Image[Use top avatar or side avatar]', 'mhassan'),
        'section'   => 'hero-customizetion',
        'setting'   => 'hero-top-avatar',
      ]
      ));
	  
	  // Hero side Avatar image setting
    $wp_customize->add_setting('hero-avatar', [
      'default'     => get_bloginfo('template_directory').'/img/me-1.png',
      'type'        => 'theme_mod',
    ]);

    //Hero side Avatar image control
    $wp_customize->add_control(new WP_Customize_Image_control(
      $wp_customize, 'hero-avatar', [
        'label'     => __('Hero Section Avatar Image[Use top avatar or side avatar]', 'mhassan'),
        'section'   => 'hero-customizetion',
        'setting'   => 'hero-avatar',
      ]
      ));

    
  }
  add_action('customize_register', 'mhassan_hero_customizer');






    /**
   * ===================================================
   * About section customizetion.
   * ====================================================
   */
  function mhassan_about_customizer($wp_customize){
    //Section name and details
    $wp_customize->add_section('about-customizer', [
      'title'       => __('About Section Customize', 'mhassan'),
      'description' => 'This is about section customizer to customize your details.',
      'priority'    => 130,
    ]);

    //small title setting
    $wp_customize->add_setting('small-title', [
      'default'         => 'About me',
      'type'            => 'theme_mod',
    ]);  
    //small title control
    $wp_customize->add_control('small-title', [
      'label'     => __('Section heading one', 'mhassan'),
      'section'   => 'about-customizer',
      'priority'  => 20,
    ]);

    //big title setting
    $wp_customize->add_setting('big-title', [
      'default'         => 'Personal Details',
      'type'            => 'theme_mod',
    ]);  
    //big title control
    $wp_customize->add_control('big-title', [
      'label'     => __('Section heading two', 'mhassan'),
      'section'   => 'about-customizer',
      'priority'  => 20,
    ]);

    //big title setting
    $wp_customize->add_setting('big-title', [
      'default'         => 'Personal Details',
      'type'            => 'theme_mod',
    ]);  
    //big title control
    $wp_customize->add_control('big-title', [
      'label'     => __('Section heading two', 'mhassan'),
      'section'   => 'about-customizer',
      'priority'  => 20,
    ]);

    //details setting
    $wp_customize->add_setting('details', [
      'default'         => 'Hi, I am Md. Mehedi Hassan. I am a professional Front-end Developer. I can Design any kind of SEO friendly website by HTML5, CSS3 & jQuery. I can create a responsive design with Bootstrap4 which is useful for supporting your site in any device.',
      'type'            => 'theme_mod',
    ]);  
    //details control
    $wp_customize->add_control('details', [
      'label'     => __('About Details', 'mhassan'),
      'section'   => 'about-customizer',
      'type'      => 'textarea',
      'priority'  => 20,
    ]);

    //details-table setting
    $wp_customize->add_setting('details-table', [
      'default'         => '<table class="table others-info">
                              <tr>
                                  <th>Age</th>
                                  <td>22</td>
                              </tr>
                              <tr>
                                  <th>Nationality</th>
                                  <td>Bangladeshi</td>
                              </tr>
                              <tr>
                                  <th>Phone</th>
                                  <td>+880 1759-757260</td>
                              </tr>
                              <tr>
                                  <th>Email</th>
                                  <td>mehedihassanpro@gmail.com</td>
                              </tr>
                            </table>',
      'type'            => 'theme_mod',
    ]);  
    //details-table control
    $wp_customize->add_control('details-table', [
      'label'     => __('About Details Table', 'mhassan'),
      'section'   => 'about-customizer',
      'type'      => 'textarea',
      'priority'  => 20,
    ]);

    
    //facebook icon link setting
    $wp_customize->add_setting('facebook', [
      'default'         => 'https://www.facebook.com',
      'type'            => 'theme_mod',
    ]);  
    //facebook icon link control
    $wp_customize->add_control('facebook', [
      'label'     => __('Facebook link', 'mhassan'),
      'section'   => 'about-customizer',
      'type'      => 'url',
      'priority'  => 20,
    ]);
    
    //twitter icon link setting
    $wp_customize->add_setting('twitter', [
      'default'         => 'https://www.twitter.com',
      'type'            => 'theme_mod',
    ]);  
    //twitter icon link control
    $wp_customize->add_control('twitter', [
      'label'     => __('Ttwitter link', 'mhassan'),
      'section'   => 'about-customizer',
      'type'      => 'url',
      'priority'  => 20,
    ]);
    
    //linkedin icon link setting
    $wp_customize->add_setting('linkedin', [
      'default'         => 'https://www.linkedin.com',
      'type'            => 'theme_mod',
    ]);  
    //linkedin icon link control
    $wp_customize->add_control('linkedin', [
      'label'     => __('Linkedin link', 'mhassan'),
      'section'   => 'about-customizer',
      'type'      => 'url',
      'priority'  => 20,
    ]);
    
    //instagram icon link setting
    $wp_customize->add_setting('instagram', [
      'default'         => 'https://www.instagram.com',
      'type'            => 'theme_mod',
    ]);  
    //instagram icon link control
    $wp_customize->add_control('instagram', [
      'label'     => __('Instagram link', 'mhassan'),
      'section'   => 'about-customizer',
      'type'      => 'url',
      'priority'  => 20,
    ]);
    
    //skype icon link setting
    $wp_customize->add_setting('skype', [
      'default'         => 'https://www.skype.com',
      'type'            => 'theme_mod',
    ]);  
    //skype icon link control
    $wp_customize->add_control('skype', [
      'label'     => __('Skype link', 'mhassan'),
      'section'   => 'about-customizer',
      'type'      => 'url',
      'priority'  => 20,
    ]);
    
    //github icon link setting
    $wp_customize->add_setting('github', [
      'default'         => 'https://www.github.com',
      'type'            => 'theme_mod',
    ]);  
    //github icon link control
    $wp_customize->add_control('github', [
      'label'     => __('Github link', 'mhassan'),
      'section'   => 'about-customizer',
      'type'      => 'url',
      'priority'  => 20,
    ]);
    
    //pinterest icon link setting
    $wp_customize->add_setting('pinterest', [
      'default'         => 'https://www.pinterest.com',
      'type'            => 'theme_mod',
    ]);  
    //pinterest icon link control
    $wp_customize->add_control('pinterest', [
      'label'     => __('Pinterest link', 'mhassan'),
      'section'   => 'about-customizer',
      'type'      => 'url',
      'priority'  => 20,
    ]);
    
    //dirbbble icon link setting
    $wp_customize->add_setting('dirbbble', [
      'default'         => 'https://www.dirbbble.com',
      'type'            => 'theme_mod',
    ]);  
    //dirbbble icon link control
    $wp_customize->add_control('dirbbble', [
      'label'     => __('Dirbbble link', 'mhassan'),
      'section'   => 'about-customizer',
      'type'      => 'url',
      'priority'  => 20,
    ]);
    
    //medium icon link setting
    $wp_customize->add_setting('medium', [
      'default'         => 'https://www.medium.com',
      'type'            => 'theme_mod',
    ]);  
    //medium icon link control
    $wp_customize->add_control('medium', [
      'label'     => __('Medium link', 'mhassan'),
      'section'   => 'about-customizer',
      'type'      => 'url',
      'priority'  => 20,
    ]);


    //About profile image setting
    $wp_customize->add_setting('about-profile-img', [
      'default'         => get_bloginfo('template_directory').'/img/me-2.png',
      'type'            => 'theme_mod',
    ]);  
    //About profile image control
    $wp_customize->add_control(new WP_Customize_Image_Control(
      $wp_customize, 'about-profile-img', [
        'label'     => __('Profile Avatar', 'mhassan'),
        'section'   => 'about-customizer',
        'setting'   => 'about-profile-img',
      ]
    ));
    // About background image setting
    $wp_customize->add_setting('about-bg', [
      'default'     => get_bloginfo('template_directory').'/img/about-bg.jpg',
      'type'        => 'theme_mod',
    ]);

    //About background image control
    $wp_customize->add_control(new WP_Customize_Image_control(
      $wp_customize, 'about-bg', [
        'label'     => __('About Section Background Image', 'mhassan'),
        'section'   => 'about-customizer',
        'setting'   => 'about-bg',
      ]
      ));




  }
  add_action('customize_register', 'mhassan_about_customizer');








   /**
   * ===================================================
   * Services section customizetion.
   * ====================================================
   */
  function mhassan_services_customizer($wp_customize){
    //Section name
    $wp_customize->add_section('services', [
      'title'       => __('Services Section Customizer', 'mhassan'),
      'description' => 'Now you can customize your services section',
      'priority'    => 130,
    ]);

    //section heading setting
    $wp_customize->add_setting('ss-heading', [
      'default'     => 'My Offered Services',
      'type'        => 'theme_mod',
    ]);
    //section heading control
    $wp_customize->add_control('ss-heading', [
      'label'     => __('Section Heading', 'mhassan'),
      'section'   => 'services',
      'priority'  => 20,
    ]);

    //section title-desc setting
    $wp_customize->add_setting('ss-title-desc', [
      'default'     => 'Some Of My Special Services For You!',
      'type'        => 'theme_mod',
    ]);
    //section title-desc control
    $wp_customize->add_control('ss-title-desc', [
      'label'     => __('Section Title Description', 'mhassan'),
      'section'   => 'services',
      'priority'  => 20,
    ]);

    //section bg-image setting
    $wp_customize->add_setting('ss-bg-image', [
      'default'     => get_bloginfo('template_directory').'/img/services-bg.jpg',
      'type'        => 'theme_mod',
    ]);
    //section bg-image control
    $wp_customize->add_control(new WP_Customize_Image_Control(
      $wp_customize, 'ss-bg-image', [
      'label'     => __('Section Background Image', 'mhassan'),
      'section'   => 'services',
      'setting'  => 'ss-bg-image',
    ]));
  }
  add_action('customize_register', 'mhassan_services_customizer');











  
   /**
   * ===================================================
   * Portfolio section customizetion.
   * ====================================================
   */
  function mhassan_portfolio_customizer($wp_customize){
    //Section name
    $wp_customize->add_section('portfolio', [
      'title'       => __('Portfolio Section Customizer', 'mhassan'),
      'description' => 'Now you can customize your portfolio section',
      'priority'    => 130,
    ]);

    //section heading setting
    $wp_customize->add_setting('ps-heading', [
      'default'     => 'Some Of My Work',
      'type'        => 'theme_mod',
    ]);
    //section heading control
    $wp_customize->add_control('ps-heading', [
      'label'     => __('Section Heading', 'mhassan'),
      'section'   => 'portfolio',
      'priority'  => 20,
    ]);

    //section title-desc setting
    $wp_customize->add_setting('ps-title-desc', [
      'default'     => 'Take A Look At Some Of My Beautiful Projects!',
      'type'        => 'theme_mod',
    ]);
    //section title-desc control
    $wp_customize->add_control('ps-title-desc', [
      'label'     => __('Section Title Description', 'mhassan'),
      'section'   => 'portfolio',
      'priority'  => 20,
    ]);

    //section bg-image setting
    $wp_customize->add_setting('ps-bg-image', [
      'default'     => get_bloginfo('template_directory').'/img/portfolio-bg.jpg',
      'type'        => 'theme_mod',
    ]);
    //section bg-image control
    $wp_customize->add_control(new WP_Customize_Image_Control(
      $wp_customize, 'ps-bg-image', [
      'label'     => __('Section Background Image', 'mhassan'),
      'section'   => 'portfolio',
      'setting'  => 'ps-bg-image',
    ]));
  }
  add_action('customize_register', 'mhassan_portfolio_customizer');









  /**
   * ===================================================
   * Review section customizetion.
   * ====================================================
   */
   function mhassan_review_customizer($wp_customize){
    //Section name
    $wp_customize->add_section('review', [
      'title'       => __('Review Slider Section Customizer', 'mhassan'),
      'description' => 'Now you can customize your review section',
      'priority'    => 130,
    ]);

    //section heading setting
    $wp_customize->add_setting('rs-heading', [
      'default'     => 'What people say',
      'type'        => 'theme_mod',
    ]);
    //section heading control
    $wp_customize->add_control('rs-heading', [
      'label'     => __('Section Heading', 'mhassan'),
      'section'   => 'review',
      'priority'  => 20,
    ]);

    //section title-desc setting
    $wp_customize->add_setting('rs-title-desc', [
      'default'     => 'My client review',
      'type'        => 'theme_mod',
    ]);
    //section title-desc control
    $wp_customize->add_control('rs-title-desc', [
      'label'     => __('Section Title Description', 'mhassan'),
      'section'   => 'review',
      'priority'  => 20,
    ]);

    //section bg-image setting
    $wp_customize->add_setting('rs-bg-image', [
      'default'     => get_bloginfo('template_directory').'/img/slider-bg.png',
      'type'        => 'theme_mod',
    ]);
    //section bg-image control
    $wp_customize->add_control(new WP_Customize_Image_Control(
      $wp_customize, 'rs-bg-image', [
      'label'     => __('Section Background Image', 'mhassan'),
      'section'   => 'review',
      'setting'  => 'rs-bg-image',
    ]));
  }
  add_action('customize_register', 'mhassan_review_customizer');











  
  /**
   * ===================================================
   * Contact section customizetion.
   * ====================================================
   */
  function mhassan_contact_customizer($wp_customize){
    //Section name
    $wp_customize->add_section('contact', [
      'title'       => __('Contact Section Customizer', 'mhassan'),
      'description' => 'Now you can customize your contact section',
      'priority'    => 130,
    ]);

    //section heading setting
    $wp_customize->add_setting('cs-heading', [
      'default'     => 'Contact Me',
      'type'        => 'theme_mod',
    ]);
    //section heading control
    $wp_customize->add_control('cs-heading', [
      'label'     => __('Section Heading', 'mhassan'),
      'section'   => 'contact',
      'priority'  => 20,
    ]);

    //section title-desc setting
    $wp_customize->add_setting('cs-title-desc', [
      'default'     => 'Feel free to contact me',
      'type'        => 'theme_mod',
    ]);
    //section title-desc control
    $wp_customize->add_control('cs-title-desc', [
      'label'     => __('Section Title Description', 'mhassan'),
      'section'   => 'contact',
      'priority'  => 20,
    ]);
	  
	//contact email setting
    $wp_customize->add_setting('contact-email', [
      'default'     => 'contact@email.com',
      'type'        => 'theme_mod',
    ]);
    //contact email control
    $wp_customize->add_control('contact-email', [
      'label'     => __('Contact Email', 'mhassan'),
      'section'   => 'contact',
      'priority'  => 20,
    ]);
	  
	//contact email success message setting
    $wp_customize->add_setting('success-message', [
      'default'     => 'Message Sent',
      'type'        => 'theme_mod',
    ]);
    //contact email success message control
    $wp_customize->add_control('success-message', [
      'label'     => __('Contact Email Success Message', 'mhassan'),
      'section'   => 'contact',
	  'type'	  => 'textarea',
      'priority'  => 20,
    ]);

    //section bg-image setting
    $wp_customize->add_setting('cs-bg-image', [
      'default'     => get_bloginfo('template_directory').'/img/contact-bg.jpg',
      'type'        => 'theme_mod',
    ]);
    //section bg-image control
    $wp_customize->add_control(new WP_Customize_Image_Control(
      $wp_customize, 'cs-bg-image', [
      'label'     => __('Section Background Image', 'mhassan'),
      'section'   => 'contact',
      'setting'  => 'cs-bg-image',
    ]));
  }
  add_action('customize_register', 'mhassan_contact_customizer');










  
  /**
   * ===================================================
   * footer section customizetion.
   * ====================================================
   */
  function mhassan_footer_customizer($wp_customize){
    //Section name
    $wp_customize->add_section('footer', [
      'title'       => __('Footer Section Customizer', 'mhassan'),
      'description' => 'Now you can customize your footer section',
      'priority'    => 130,
    ]);

    //section heading setting
    $wp_customize->add_setting('fs-heading', [
      'default'     => 'Do you have any project? <span>Let\'s Talk</span>',
      'type'        => 'theme_mod',
    ]);
    //section heading control
    $wp_customize->add_control('fs-heading', [
      'label'     => __('Section Heading', 'mhassan'),
      'section'   => 'footer',
      'type'      => 'textarea',
      'priority'  => 20,
    ]);

    //section title-desc setting
    $wp_customize->add_setting('fs-title-desc', [
      'default'     => 'want to create a beautiful website for you or your business.
      <br>Then, why are you waiting? let\'s discuss and Design something great!',
      'type'        => 'theme_mod',
    ]);
    //section title-desc control
    $wp_customize->add_control('fs-title-desc', [
      'label'     => __('Section Title Description', 'mhassan'),
      'section'   => 'footer',
      'type'      => 'textarea',
      'priority'  => 20,
    ]);

    //footer skype icon link setting
    $wp_customize->add_setting('f-skype', [
      'default'         => 'https://www.skype.com',
      'type'            => 'theme_mod',
    ]);  
    //footer skype icon link control
    $wp_customize->add_control('f-skype', [
      'label'     => __('Footer skype link', 'mhassan'),
      'section'   => 'footer',
      'type'      => 'url',
      'priority'  => 20,
    ]);

    //footer linkedin icon link setting
    $wp_customize->add_setting('f-linkedin', [
      'default'         => 'https://www.linkedin.com',
      'type'            => 'theme_mod',
    ]);  
    //footer linkedin icon link control
    $wp_customize->add_control('f-linkedin', [
      'label'     => __('Footer linkedin link', 'mhassan'),
      'section'   => 'footer',
      'type'      => 'url',
      'priority'  => 20,
    ]);

    //footer massenger icon link setting
    $wp_customize->add_setting('f-massenger', [
      'default'         => 'https://www.massenger.com',
      'type'            => 'theme_mod',
    ]);  
    //footer massenger icon link control
    $wp_customize->add_control('f-massenger', [
      'label'     => __('Footer massenger link', 'mhassan'),
      'section'   => 'footer',
      'type'      => 'url',
      'priority'  => 20,
    ]);

    //footer telegram icon link setting
    $wp_customize->add_setting('f-telegram', [
      'default'         => 'https://www.telegram.com',
      'type'            => 'theme_mod',
    ]);  
    //footer telegram icon link control
    $wp_customize->add_control('f-telegram', [
      'label'     => __('Footer telegram link', 'mhassan'),
      'section'   => 'footer',
      'type'      => 'url',
      'priority'  => 20,
    ]);

  }
  add_action('customize_register', 'mhassan_footer_customizer');













    /**
   * ===================================================
   * Theme basic customizetion.
   * ====================================================
   */
  function mhassan_basic_customizer($wp_customize){
    //Section name
    $wp_customize->add_section('basic', [
      'title'       => __('General Customizer', 'mhassan'),
      'description' => 'Now you can customize your general things',
      'priority'    => 130,
    ]);

    //section title-desc setting
    $wp_customize->add_setting('copywrite', [
      'default'     => 'All Rights Reserved',
      'type'        => 'theme_mod',
    ]);
    //section title-desc control
    $wp_customize->add_control('copywrite', [
      'label'     => __('Footer copywrite', 'mhassan'),
      'section'   => 'basic',
      'priority'  => 20,
    ]);

    //Theme bg color setting
    $wp_customize->add_setting('theme-bg', [
      'default'     => '#000',
      'type'        => 'theme_mod',
    ]);
    //Theme bg color control
    $wp_customize->add_control(new WP_Customize_Color_Control(
      $wp_customize, 'theme-bg', [
      'label'     => __('Theme Background Color', 'mhassan'),
      'section'   => 'basic',
      'setting'  => 'theme-bg',
    ]));

    //Theme color setting
    $wp_customize->add_setting('theme-color', [
      'default'     => '#0df737',
      'type'        => 'theme_mod',
    ]);
    //Theme color control
    $wp_customize->add_control(new WP_Customize_Color_Control(
      $wp_customize, 'theme-color', [
      'label'     => __('Theme Color', 'mhassan'),
      'section'   => 'basic',
      'setting'  => 'theme-color',
    ]));
	  
	  
    //Theme button color one setting
    $wp_customize->add_setting('theme-btn-color1', [
      'default'     => '#0df737',
      'type'        => 'theme_mod',
    ]);
    //Theme button color one control
    $wp_customize->add_control(new WP_Customize_Color_Control(
      $wp_customize, 'theme-btn-color1', [
      'label'     => __('Theme Button Color One', 'mhassan'),
      'section'   => 'basic',
      'setting'  => 'theme-btn-color1',
    ]));
	  	  
	  
    //Theme button color two setting
    $wp_customize->add_setting('theme-btn-color2', [
      'default'     => '#0df737',
      'type'        => 'theme_mod',
    ]);
    //Theme button color two control
    $wp_customize->add_control(new WP_Customize_Color_Control(
      $wp_customize, 'theme-btn-color2', [
      'label'     => __('Theme Button Color Two', 'mhassan'),
      'section'   => 'basic',
      'setting'  => 'theme-btn-color2',
    ]));
	  
	  
	  
  }
  add_action('customize_register', 'mhassan_basic_customizer');












  /**
   * ===================================================
   * Portfolio menu customizetion.
   * ====================================================
   */
  function mhassan_portfolio_menu_customizer($wp_customize){
    //Section name
    $wp_customize->add_section('portfolio-menu', [
      'title'       => __('Portfolio Menu Customizer', 'mhassan'),
      'description' => 'Now you can customize your "Portfolio Menu". It is IMPORTANT use the same name that use your portfolio category. Also use no space.',
      'priority'    => 130,
    ]);

    //Item 1 setting
    $wp_customize->add_setting('item-1', [
      'default'     => 'item-one',
      'type'        => 'theme_mod',
    ]);
    //Item 1 control
    $wp_customize->add_control('item-1', [
      'label'     => __('Item One', 'mhassan'),
      'section'   => 'portfolio-menu',
      'priority'  => 20,
    ]);

    //Item 2 setting
    $wp_customize->add_setting('item-2', [
      'default'     => 'item-two',
      'type'        => 'theme_mod',
    ]);
    //Item 2 control
    $wp_customize->add_control('item-2', [
      'label'     => __('Item One', 'mhassan'),
      'section'   => 'portfolio-menu',
      'priority'  => 20,
    ]);

    //Item 3 setting
    $wp_customize->add_setting('item-3', [
      'default'     => 'item-three',
      'type'        => 'theme_mod',
    ]);
    //Item 3 control
    $wp_customize->add_control('item-3', [
      'label'     => __('Item One', 'mhassan'),
      'section'   => 'portfolio-menu',
      'priority'  => 20,
    ]);

    //Item 4 setting
    $wp_customize->add_setting('item-4', [
      'default'     => 'item-four',
      'type'        => 'theme_mod',
    ]);
    //Item 4 control
    $wp_customize->add_control('item-4', [
      'label'     => __('Item One', 'mhassan'),
      'section'   => 'portfolio-menu',
      'priority'  => 20,
    ]);

    //Item 5 setting
    $wp_customize->add_setting('item-5', [
      'default'     => 'item-five',
      'type'        => 'theme_mod',
    ]);
    //Item 5 control
    $wp_customize->add_control('item-5', [
      'label'     => __('Item One', 'mhassan'),
      'section'   => 'portfolio-menu',
      'priority'  => 20,
    ]);

    //Item 6 setting
    $wp_customize->add_setting('item-6', [
      'default'     => 'item-six',
      'type'        => 'theme_mod',
    ]);
    //Item 6 control
    $wp_customize->add_control('item-6', [
      'label'     => __('Item One', 'mhassan'),
      'section'   => 'portfolio-menu',
      'priority'  => 20,
    ]);

    //Item 7 setting
    $wp_customize->add_setting('item-7', [
      'default'     => 'item-seven',
      'type'        => 'theme_mod',
    ]);
    //Item 7 control
    $wp_customize->add_control('item-7', [
      'label'     => __('Item One', 'mhassan'),
      'section'   => 'portfolio-menu',
      'priority'  => 20,
    ]);

    //Item 8 setting
    $wp_customize->add_setting('item-8', [
      'default'     => 'item-eight',
      'type'        => 'theme_mod',
    ]);
    //Item 8 control
    $wp_customize->add_control('item-8', [
      'label'     => __('Item One', 'mhassan'),
      'section'   => 'portfolio-menu',
      'priority'  => 20,
    ]);

    //Item 9 setting
    $wp_customize->add_setting('item-9', [
      'default'     => 'item-nine',
      'type'        => 'theme_mod',
    ]);
    //Item 9 control
    $wp_customize->add_control('item-9', [
      'label'     => __('Item One', 'mhassan'),
      'section'   => 'portfolio-menu',
      'priority'  => 20,
    ]);

    //Item 10 setting
    $wp_customize->add_setting('item-10', [
      'default'     => 'item-ten',
      'type'        => 'theme_mod',
    ]);
    //Item 10 control
    $wp_customize->add_control('item-10', [
      'label'     => __('Item One', 'mhassan'),
      'section'   => 'portfolio-menu',
      'priority'  => 20,
    ]);


  }
  add_action('customize_register', 'mhassan_portfolio_menu_customizer');








?>