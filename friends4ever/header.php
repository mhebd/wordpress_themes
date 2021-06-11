<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    :root{
      --theme-color: <?php echo get_theme_mod('theme-main-color', '#4c3dd4') ?>;
      --bg-color: <?php echo get_theme_mod('theme-bg-color', '#5052b5') ?>;
    }
  </style>


  <?php wp_head(); ?>
</head>
<body>
  
  <div class="container-xl mx-auto bg-light">


    <!-- Friends4ever header section
    =============================================== -->
    <header id="site-header">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="navbar-brand">
          <?php 
            if( has_custom_logo() ){
              the_custom_logo();
            } else {
              ?> 
                <a href="<?php echo home_url(); ?>" class="site-title text-light">
                  <h3><?php bloginfo('name'); ?></h3>
                </a>
              <?php
            }
          ?>
        </div>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#main-menu">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="main-menu">
          <div class="ml-auto">
            <?php
              wp_nav_menu([
                'theme_location'      => 'primary',
                'menu_class'          => 'navbar-nav',
                'depth'               => 4,
                'fallback_cb'         => 'WP_Bootstrap_Navwalker::fallback',
                'walker'              => new WP_Bootstrap_Navwalker(),
              ]);
            ?>
          </div>
        </div>
      </nav>
    </header>
