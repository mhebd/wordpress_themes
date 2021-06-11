<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  bloginfo('name'); ?></title>


  <style>
    :root{
      --theme-color: <?php echo get_theme_mod('theme-main-color', '#14e414') ?>;
      --theme-bg: <?php echo get_theme_mod('theme-bg-color', '#ff0000') ?>;
    }
  </style>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>


  <header id="header" class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark theme-bg">
      <div class="container-fluid">

        <button class="navbar-toggler" data-toggle="collapse" data-target="#main-menu">
          <span class="navbar-toggler-icon"></span>
          <span class="sr-only">navbar toggler icon</span>
        </button>
        <!-- novbar toggler button end -->

        <div class="navbar-brand">
          <?php if( has_custom_logo() ){
            the_custom_logo();
          } else { ?>
            <a href="<?php echo home_url(); ?>" class="h4"><?php bloginfo('name'); ?></a> <?php
          } ?>
        </div>
        <!-- navbar brand end -->

        <div class="collapse navbar-collapse order-2 order-md-1" id="main-menu">
          <?php 
            wp_nav_menu([
              'theme_location'      => 'primary',
              'depth'       => 2,
              'menu_class'      => 'navbar-nav mx-auto',
              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
              'walker'        => new WP_Bootstrap_Navwalker(),
            ]);
          ?>
        </div>
        <!-- navbar menu section end -->

        <div class="search-box order-md-2 order-1">
          <?php  get_search_form(); ?>
        </div>
        <!-- Search box section end -->

      </div>
    </nav>
    <!-- Nav section end -->
  </header>
  <!-- Header section end -->

