<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <style>
    :root{
      --theme-color-one: <?php echo get_theme_mod('theme-color-one', '#20b2aa') ?>;
      --theme-color-two: <?php echo get_theme_mod('theme-color-two', '#262424') ?>;
      --theme-color-three: <?php echo get_theme_mod('theme-color-three', '#f5f5f5') ?>;
    }
  </style>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="container-fluid header-wrap" id="header">
    <nav class="navbar navbar-expand-md navbar-dark" id="navbar">

      <button class="navbar-toggler" data-toggle="collapse" data-target="#top-menu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-2" id="top-menu">

        <?php 
          //top nav menu show
          wp_nav_menu([
            'theme_location'  => 'primary',
            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'menu_class'      => 'navbar-nav',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
          ]);
        ?>

      </div>

      <div class="saearch-wrap order-1 order-md-2">
        <?php get_search_form(); ?>
      </div>
    </nav>

    <section class="brand-logo-wrap">
      <?php 
        if( has_custom_logo() ) {
          the_custom_logo();
        } else {
          ?>
          <a href="<?php echo home_url(); ?>" class="">
            <h2 class="text-center text-uppercase text-white"><?php bloginfo('name') ?></h2>
          </a>
          <?php
        }
      ?>
    </section>
  </header>


