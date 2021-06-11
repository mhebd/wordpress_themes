<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); wp_title('|', true, 'left') ?></title>


  <style>
    :root{
      --theme-color: <?php echo get_theme_mod('theme-main-color', '#14e414'); ?>;
      --theme-bg: <?php echo get_theme_mod('theme-second-color', '#343a40'); ?>;
    }
  </style>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <div id="top"></div>
  
  <header id="header" class="fixed">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
      <div class="container">

        <button class="navbar-toggler" data-toggle="collapse" data-target="#main-menu">
          <span class="sr-only">navbar toggler icon</span>
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-brand">
          <?php if(has_custom_logo()) {
            the_custom_logo();
          } else { ?>
          <a href="<?php echo home_url(); ?>" class="h5 text-light text-uppercase">
            <?php bloginfo('name') ;?>
          </a> <?php } ?>
        </div>

        <div class="collapse navbar-collapse order-lg-1 order-2" id="main-menu">
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

        <div class="search-box order-1 order-lg-2">
          <?php get_search_form(); ?>
        </div>

      </div>
    </nav>
  </header>

