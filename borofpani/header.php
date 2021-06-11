<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); wp_title('&raquo;', true, 'left') ?></title>

  <style>
        
    :root {
      --theme-color: <?php echo get_theme_mod('theme-color', '#ffaa0b'); ?>;
      --theme-bg: <?php echo get_theme_mod('theme-bg-color', '#9e0000'); ?>;
    }


  </style>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <header id="header" class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-xl">

        <button class="navbar-toggler" data-target="#main-menu" data-toggle="collapse">
          <span class="sr-only">navbar toggler icon</span>
          <i class="fas fa-bars text-light"></i>
        </button>

        <div class="navbar-brand">
          <?php 
            if( has_custom_logo() ) {
            the_custom_logo();
            } else { ?>
              <a href="<?php echo home_url(); ?>" class="h4 text-uppercase"><?php bloginfo('name'); ?></a> <?php
            }
          ?>
        </div>

        <div class="navbar-collapse collapse order-2 order-lg-1" id="main-menu">
          <ul class="navbar-nav ml-auto">
          <?php
              wp_nav_menu([
                'theme_location'        => 'top_menu',
                'depth'           => 2,
                'menu_class'      => 'navbar-nav mx-auto',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
              ])
            ?>  
          </ul>
        </div>

        <div class="search-box order-1 order-lg-2 pl-3">
          <div class="search-icon">
            <a href="#search-modal" data-toggle="modal">
              <i class="fas fa-search text-light"></i>
            </a>
          </div>
          
        </div>

      </div>
    </nav>
  </header>


  <!-- Modal -->
  <div class="modal fade search-modal" id="search-modal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <?php echo get_search_form(); ?>
        </div>
      </div>
    </div>
  </div>

