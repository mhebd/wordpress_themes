<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>

    :root {
      --theme-color: <?php echo get_theme_mod('theme-main-color', '#20b2aa') ?>;
      --tc: <?php echo get_theme_mod('theme-second-color', '#f5f5f5') ?>;
    }

  </style>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


  <header class="container-fluid cc-header-wrap" id="cc-header">

    <section class="header-logo-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center text-md-left  mb-md-0">
            <div class="logo">
              
                <?php
                
                  if(has_custom_logo()) {
                    the_custom_logo();
                  } else { ?>
                    <a href="<?php echo home_url(); ?>" class="h2">
                    <?php bloginfo( 'name', ); ?> </a>
                    <?php
                  }
                
                ?>
              
            </div>
          </div>

          <div class="col-md-6">
            <div class="header-social-wrap">
              <ul class="nav justify-content-md-end justify-content-center">
                <?php if(get_theme_mod('facebook-link')) { ?>
                <li class="nav-item">
                  <a href="<?php echo get_theme_mod('facebook-link', 'https://facebook.com') ?>" target="_blank"  class="nav-link facebook">
                    <i class="fab fa-facebook"></i>
                    <span>Facebook</span>
                  </a>
                </li>
                <?php } 
                 if(get_theme_mod('twitter-link')) { ?>
                <li class="nav-item">
                  <a href="<?php echo get_theme_mod('twitter-link', 'https://twitter.com') ?>" target="_blank" class="nav-link twitter">
                    <i class="fab fa-twitter"></i>
                    <span>Twitter</span>
                  </a>
                </li>
                <?php } 
                 if(get_theme_mod('instagram-link')) { ?>
                <li class="nav-item">
                  <a href="<?php echo get_theme_mod('instagram-link', 'https://instagram.com') ?>"  target="_blank" class="nav-link instagram">
                    <i class="fab fa-instagram"></i>
                    <span>Instagram</span>
                  </a>
                </li>
                <?php } 
                 if(get_theme_mod('linkedin-link')) { ?>
                <li class="nav-item">
                  <a href="<?php echo get_theme_mod('linkedin-link', 'https://linkedin.com') ?>"  target="_blank" class="nav-link linkedin">
                    <i class="fab fa-linkedin-in"></i>
                    <span>LinkedIn</span>
                  </a>
                </li>
                <?php } 
                 if(get_theme_mod('youtube-link')) { ?>
                <li class="nav-item">
                  <a href="<?php echo get_theme_mod('youtube-link', 'https://youtube.com') ?>"  target="_blank" class="nav-link youtube">
                    <i class="fab fa-youtube"></i>
                    <span>Youtube</span>
                  </a>
                </li>
                <?php } 
                  ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <nav class="navbar navbar-expand-md navbar-light sticky-top">
      <div class="container">
        

        <button class="navbar-toggler" data-toggle="collapse" data-target="#top-menu">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse order-1 top-nav" id="top-menu">
          <?php
          
            wp_nav_menu(
              [
                'theme_location'  => 'top-nav',
                'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                'menu_class'      => 'navbar-nav ml-auto',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
              ]
            );
          
          ?>
        </div>

        <div class="search-form order-md-2 ">
          <?php get_search_form(); ?>        
        </div>
      </div>
    </nav>

  </header>