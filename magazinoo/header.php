<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
  
  :root {
  --theme-color: <?php echo get_theme_mod('theme-color', '#ff0000'); ?>;
  --theme-bg: <?php echo get_theme_mod('theme-bg', '#10ad71'); ?>;
  --heading: <?php echo get_theme_mod('theme-sec-heading', '#ff0000'); ?>;
  }
  
  </style>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  
  <!-- site header part
  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
  <header id="header" class="">
    <!-- site top bar
    ============================== -->
    <?php 
      if( get_theme_mod('topbar') ) {
        ?> 
          <section class="site-topbar-wrap">
            <div class="container-xl mx-auto">
              <div class="row">
                <div class="col-md-8 d-flex justify-content-md-start justify-content-center">
                  <div class="site-info">
                    
                    <?php
                      if( get_theme_mod('email') ){
                        ?>
                          <span class="mr-3 email">
                            <i class="far fa-envelope-open"></i> <a href="mailto:<?php echo get_theme_mod('email', 'example@email.com'); ?>"><?php echo get_theme_mod('email', 'example@email.com'); ?></a>
                          </span>|
                        <?php
                      }
                      if( get_theme_mod('phone') ){
                        ?>
                          <span class="ml-3 phone">
                            <i class="fas fa-phone"></i> <?php echo get_theme_mod('phone', '+880 1XXX XX XX XX') ?> 
                          </span>
                        <?php
                      }
                    ?>
                  </div>
                </div>

                <div class="col-md-4 d-flex justify-content-md-end justify-content-center">
                  <?php 
                    if( is_active_sidebar('top-social') ) {
                      dynamic_sidebar('top-social');
                    }
                  ?>
                </div>
              </div>
            </div>
          </section>
        <?php
      }
    ?>
      

    <!-- site branding wrap
    ================================== -->
    <section class="site-branding-wrap" style="background: url('<?php header_image(); ?>');">
      <div class="container-xl mx-auto">
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 d-flex justify-content-md-start justify-content-center">
            <div class="site-branding">
              <?php 
                if( has_custom_logo() ) {
                  the_custom_logo();
                } else {
                  ?>
                  <h1 class="title"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                  <span class="small desc"><em><?php bloginfo('description'); ?></em></span>
                  <?php
                }
              ?>
            </div>
          </div>

          <div class="col-md-6 col-lg-8 d-flex justify-content-md-end justify-content-center">
            <div class="header-ad">
              <?php 
                if( is_active_sidebar('header-ad') ) {
                  dynamic_sidebar('header-ad');
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </header>
  







    
  <!-- Site main navbar
  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
  <nav id="nav" class="navbar navbar-expand-md navbar-light">
    <div class="container-xl mx-auto">
      <button class="navbar-toggler" data-toggle="collapse" data-target="#main-menu">
        <sapn class="sr-only">navbar toggler icon</sapn>
        <i class="fas fa-bars"></i>
      </button>

      <div class="collapse navbar-collapse order-2 order-md-1" id="main-menu">
          <?php
            wp_nav_menu([
              'theme_location'      => 'top',
              'menu_class'          => 'navbar-nav',
              'depth'               => 4,
              'fallback_cb'         => 'WP_Bootstrap_Navwalker::fallback',
              'walker'              => new WP_Bootstrap_Navwalker(),
            ]);
          ?>
      </div>

      <div class="search-box-wrap order-1 order-md-2">
        <a href="#search-modal" data-toggle="modal" class="btn btn-light"><i class="fas fa-search"></i></a>
      </div>
    </div>
  </nav>

  <!-- Search Modal
  =============================== -->
  <section class="modal fade search-modal" id="search-modal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <?php echo get_search_form(); ?>
        </div>
      </div>
    </div>
  </section>

