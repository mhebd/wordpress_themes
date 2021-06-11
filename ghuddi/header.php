<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); wp_title('&laquo', true, 'left'); ?> </title>

  <style>
        
    :root {
      --theme-color: <?php echo get_theme_mod('theme-color', '#990404'); ?>;
      --theme-bg: <?php echo get_theme_mod('theme-bg-color', '#ff7300'); ?>; 
    }

  </style>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

  <div class="container-xl bg-light">


    <!-- ghuddi header
    ============================================ -->
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark">
        <button class="navbar-toggler" data-toggle="collapse" data-target="#main-menu">
          <span class="sr-only">navbar toggler icon</span>
          <i class="fas fa-bars"></i>
        </button>

        <div class="navbar-brand">
          <a href="<?php echo home_url(); ?>">
            <?php 
              if( has_custom_logo() ) {
                the_custom_logo();
              } else { ?>
                <h3 class="name text-light">Ghuddi</h3> <?php
              }
            ?>
          </a>
        </div>

        <div class="navbar-collapse collapse order-lg-1 order-2" id="main-menu">
          <div class="mx-auto">
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
        </div>

        <div class="search-box-icon order-lg-2 order-1">
          <a href="#search-modal" data-toggle="modal">
            <i class="fas fa-search text-light"></i>
          </a>
        </div>
      </nav>
    </header>
    <!-- search modal
    =============================================== -->
    <div id="search-modal" class="modal fade">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">
            <?php echo get_search_form(); ?>
          </div>
        </div>
      </div>
    </div>


