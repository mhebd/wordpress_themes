<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); wp_title(' | ', true, 'left'); ?></title>

  <style>

    
    :root {
      --theme-color: <?php echo get_theme_mod( 'theme-color', '#ff0000' ); ?>;
      --theme-bg: <?php echo get_theme_mod('theme-bg-color', '#383838'); ?>;
    }

  </style>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  
  <!-- Shimla header part 
  =================================================================== -->
  <header id="header" class="bg-light">
    <div class="container-xl mx-auto">
      <div class="site-header-wrap">
        <?php if( has_custom_header() ) {
          ?> 
            <img src="<?php header_image(); ?>" alt="" class="img-fluid header-img">
          <?php
        } else {
          ?> 
            <div class="site-branding text-center py-5">
              <?php if( has_custom_logo() ) {
                the_custom_logo();
              } else {
                ?>
                  <a href="<?php echo home_url(); ?>" class="site-name h1 pt-4">
                    <?php bloginfo('name'); ?>
                  </a>
                  <p class="text-small site-desc text-cappitalize"><?php bloginfo('description'); ?></p>
                <?php
              } ?>
            </div>
          <?php
        } ?>
      </div>
    </div>  
  </header>





  <!-- Shimla navbar part
  =================================================================== -->
  <nav class="bg-light nav-wrap">
    <div class="container-xl mx-auto">
      <div class="navbar navbar-expand-md navbar-light">
        
        <button class="navbar-toggler" data-toggle="collapse" data-target="#top-menu">
          <span class="sr-only">navbar toggler icon</span>
          <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse order-md-1 order-2" id="top-menu">
          <?php
            wp_nav_menu([
              'theme_location'      => 'primary',
              'menu_class'          => 'navbar-nav',
              'depth'               => 2,
              'fallback_cb'         => 'WP_Bootstrap_Navwalker::fallback',
              'walker'              => new WP_Bootstrap_Navwalker(),
            ]);
          ?>
        </div>

        <div class="search-icon order-md-2 order-1">
          <a href="#search-modal" data-toggle="modal" class="">
            <i class="fas fa-search"></i>
          </a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Shimla search modal 
  ================================================================== -->
  <div class="modal search-modal fade" id="search-modal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <?php echo get_search_form(); ?>
        </div>
      </div>
    </div>
  </div>





