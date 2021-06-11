<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <title><?php //bloginfo('name'); wp_title(' | ', true, 'left'); ?></title> -->

  <style>
    :root {
      --theme-color: <?php echo get_theme_mod('theme-color', '#f7bf08'); ?>;
      --nav-color: <?php echo get_theme_mod('theme-bg', '#141414'); ?> ;
    }

    .home-hero-wrap{
      background-image: linear-gradient( black,rgba(72, 57, 208, 0.562)), url(<?php echo get_theme_mod('banner_bg_img', get_bloginfo('template_directory').'/img/2.jpg'); ?>);
    }
    .home-important-quote-wrap{
      background: ;
      background-image: linear-gradient( rgba(72, 57, 208, 0.762),rgba(72, 57, 208, 0.762)), url(<?php echo get_theme_mod('quote_bg_img', get_bloginfo('template_directory').'/img/4.jpg'); ?>);
    }
    .home-newslater-wrap{
      background: ;
      background-image: linear-gradient( rgba(72, 57, 208, 0.762),rgba(72, 57, 208, 0.762)), url(<?php echo get_theme_mod('newslater_bg_img', get_bloginfo('template_directory').'/img/4.jpg'); ?>);
    }
  </style>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


  <header class="header container-fluid" id="header top">
    <nav class="navbar navbar-expand-lg" id="top-nav">
      <section class="container">

        <button class="navbar-toggler" data-toggle="collapse" data-target="#top-menu">
          <span class="sr-only">Navbar toggler icon</span>
          <i class="fas fa-bars"></i>
        </button>

        <section class="navbar-brand">
          <a href="<?php echo home_url(); ?>" class="brand-name h2">
            <?php
              if(has_custom_logo()) {
                the_custom_logo();
              } else {
                ?> <h2><?php bloginfo('name'); ?></h2> <?php
              }
            ?>
          </a>
        </section>


        <section class="navbar-collapse collapse order-2 order-lg-1" id="top-menu">
          <div class="nav-menu ml-auto">
            <?php
              wp_nav_menu(
                array(
                  'menu_class'      => 'navbar-nav',
                  'depth'           => 4,
                  'fallback_cb'         => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'              => new WP_Bootstrap_Navwalker(),
                  'theme_location'  => 'primary-menu',
                )
              );
            ?>
          </div>
        </section>

        <div class="ml-3 search-box order-1 order-lg-2">
          <button class="search-btn">
            <i class="fas fa-search"></i>
          </button>
          <div class="search-form">
            <form action="<?php echo esc_url(home_url('/')); ?>" method="get"  id="searchform" class="form searchform" >
              <div class="input-group">
              <input type="text" name="s" id="s" class="search">
              <button type="submit" id="searchsubmit" class="input-group-prepend">
                <i class="fas fa-arrow-right"></i>
              </button>
              </div>
          </form>
          </div>
        </div>
      </section>
    </nav>
  </header>
