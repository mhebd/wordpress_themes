<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); wp_title('|', true, 'left'); ?></title>

    <!-- All Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,300;0,400;1,700&display=swap"
        rel="stylesheet">






    <!-- html5shiv link -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/ html5shiv.js"></script>
    <![endif]-->


  <style>

    :root{
      --theme-bg: <?php if(get_theme_mod('theme-bg')){
        echo get_theme_mod('theme-bg', '#000');
      } ?>;
      --theme-color: <?php if(get_theme_mod('theme-bg')){
        echo get_theme_mod('theme-color', '#0df737');
      } ?>;
    }

	  .hero-info .hire-btn, #contact .sub-btn, #services .hire-btn{
		background: linear-gradient(to bottom,<?php echo get_theme_mod('theme-btn-color1', '#0df737') ; ?> , <?php echo get_theme_mod('theme-btn-color2', ' #076404') ; ?> );
		}
	  
    .hero-bg-cover{
      background-image:linear-gradient( black,rgba(72, 57, 208, 0.562)), url(<?php if(get_theme_mod('hero-bg')){
        echo get_theme_mod('hero-bg', get_bloginfo('template_directory').'/../img/hero-bg.jpg');
      } ?>);
    }
    .hero-bg-cover::before{
    background-image: url(<?php if(get_theme_mod('hero-avatar')){
        echo get_theme_mod('hero-avatar', get_bloginfo('template_directory').'/../img/me-1.png');
      } ?>);
    }

    #about {
      background-image:linear-gradient(rgba(0, 0, 0, 0.534),rgba(0, 0, 0, 0.514)), url(<?php if(get_theme_mod('about-bg')){
        echo get_theme_mod('about-bg', get_bloginfo('template_directory').'/../img/about-bg.jpg');
      } ?>);
    }

    #services{
      background-image:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.562)), url(<?php echo get_theme_mod('ss-bg-image', get_bloginfo('template_directory').'/../img/services-bg.jpg') ?>);
    }

    #portfolio{
      background-image:linear-gradient(rgba(0, 0, 0, 0.503),rgba(0, 0, 0, 0.404)), url(<?php echo get_theme_mod('ps-bg-image', get_bloginfo('template_directory').'/../img/portfolio-bg.jpg)') ?>);
    }

    #review{
      background-image:linear-gradient(rgba(0, 0, 0, 0.303),rgba(0, 0, 0, 0.404)), url(<?php echo get_theme_mod('rs-bg-image', get_bloginfo('template_directory').'/../img/slider-bg.png)') ?>);
    }

    #contact{
      background-image:linear-gradient(rgba(0, 0, 0, 0.503),rgba(0, 0, 0, 0.404)), url(<?php echo get_theme_mod('cs-bg-image', get_bloginfo('template_directory').'/../img/contact-bg.jpg)') ?>);
    }



  </style>




    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target="#top-nav" data-offset="80">

    <!-- Header Section -->
    <header id="header">
        <nav id="top-nav">
            <div class="container-fluid">

                <!-- Top Navbar -->
                <div class="navbar  navbar-expand-lg  fixed-top">
                    <div class="container">



                        <button class="navbar-toggler wow fadeOut" type="button" data-toggle="collapse" data-target="#navbarNav"
                                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fas fa-bars"></i>
                        </button>
                        
                        <div class="navbar-brand">
                          <?php if(has_custom_logo()){
                            the_custom_logo();
                          } else{ ?>
                            <a href="<?php echo home_url(); ?>" class="">
                                  <h2 class="brand-name wow slideInLeft"><?php bloginfo('name'); ?></h2>
                              </a> <?php 
                          } ?>
                            
                        </div>

                        

                        <div class="collapse navbar-collapse order-lg-1 order-2" id="navbarNav">
                            <ul class="navbar-nav ml-auto  wow slideInRight">
                                <li class="nav-item"><a href="#hero" class="nav-link">Home</a></li>
                                <li class="nav-item"><a href="#about" class="nav-link">about me</a></li>
                                <li class="nav-item"><a href="#services" class="nav-link">services</a></li>
                                <li class="nav-item"><a href="#portfolio" class="nav-link">portfolio</a></li>
                                <li class="nav-item"><a href="#review" class="nav-link">review</a></li>
                                <li class="nav-item"><a href="#contact" class="nav-link">contact Me</a></li>
                            </ul>
                        </div>

                        <div class="extra-menu order-lg-2 order-1">
                        <?php 
                            //top nav menu show
                            wp_nav_menu([
                              'theme_location'  => 'primary-menu',
                              'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                              'menu_class'      => 'navbar-nav',
                              'fallback_cb'     => '',
                              'walker'          => new WP_Bootstrap_Navwalker(),
                            ]);
                          ?>
                        </div>

                    </div>
                </div>
                <!-- Top Navbar End -->

            </div>
        </nav>
    </header>
    <!-- Header Section End -->

