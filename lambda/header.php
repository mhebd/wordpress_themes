<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); wp_title('&raquo;', true, 'left') ?></title>


  <style>
  
    :root{
    --theme-color: <?php echo get_theme_mod('theme-color', '#1ead0b'); ?>;
    --theme-bg: <?php echo get_theme_mod('theme-bg-color', '#9e1818'); ?>;
    }

    .site-heading {
    background: url(<?php echo get_theme_mod('banner', get_template_directory_uri().'/img/banner.jpg') ?>) no-repeat center center;
}
  </style>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <section class="container site-wrapper bg-light">

    <header class="banner-wrap">

      <section class="site-heading text-center">
        <div class="site-brand">
          <a href="" class="h1 title text-center mx-auto text-uppercase"><?php bloginfo('name'); ?></a>
          <p class="text-center desc mx-auto text-uppercase text-italic">
            <?php bloginfo('description'); ?>
          </p>
        </div>
      </section>
      <!-- site heading end -->
    </header>

    <header  class="sticky-top navbar-wrap">

      <nav class="navbar navbar-expand-md navbar-dark ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#top-menu">
          <span class="sr-only">navbar toggler icon</span>
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- navbar toggler end -->

        <div id="top-menu" class="navbar-collapse collapse order-2 order-md-1">
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
        <!-- top menu end -->

        <div class="search-box order-1 order-md-2">
          <?php echo get_search_form(); ?>
        </div>
        <!-- navbar search box end -->
      </nav>
      <!-- navbar end -->
    </header>
    <!-- header end -->

