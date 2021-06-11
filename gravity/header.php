<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name') ?> | <?php wp_title(); ?></title>

  

  <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>

  <header class="container-fluid header " id="header top">
    <section class="header-up-wrap cf-padding">
      <div class="row">
        <div class="col-sm-6 text-center text-sm-left mb-3">
          <a href="<?php echo site_url(); ?>" class="brand-name">
          <h2 class="brand-name text-uppercase"><?php bloginfo('name'); ?></h2>
          </a>
          <p class="description text-capitalize"><?php bloginfo('description'); ?></p>
        </div>

        <div class="col-sm-6 mx-auto mb-3">
          <div class="social-icon-wrap">
            <ul class="nav justify-content-sm-end justify-content-center">
  <?php 
              /* get the slider array */
              $social_links = ot_get_option( 'social_link', array() );
  
              if ( ! empty( $social_links ) ) {
                foreach( $social_links as $social_link ) {
                  echo '<li class="nav-item">
                  <a href="'.$social_link['social_link_link'].'" class="nav-link">
                    <i class="fab fa-'.$social_link['social_link_name'].'"></i>
                  </a>
                </li>'
                  ;
                }
              }
  
  
  ?>


              
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="nav-section">

      <div class="row">
        <div class="col-3 col-sm-7 col-md-8 col-lg-9">
          <div class="navbar navbar-expand-lg navbar-dark" id="top-nav">
            <button class="navbar-toggler" data-toggle="collapse" data-target="#main-menu">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse" id="main-menu">


              <?php 
                wp_nav_menu(
                  array (
                    'theme_location'  => 'primary-menu',
                    'menu'            => '',
                    'container'       => 'div',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => 'navbar-nav mx-auto',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'item_spacing'    => 'preserve',
                    'depth'           => 0,
                    'walker'          => '',
                  )
                );
              ?>


              
            </div>
          </div>
        </div>

        <div class="col-9 col-sm-5 col-md-4 col-lg-3">
          <div class="ml-auto  cf-padding">
            
            <form role="search" method="get" id="searchform" class="searchform form" action="http://localhost/gravity/"  id="form">
				<div>
        <div class="input-group">
                <input type="text" name="s" id="s" class="form-control" placeholder="Search...">
                <div class="input-group-prepend"><button type="submit" class="btn btn-success submit-btn"  id="searchsubmit"><i
                      class="fas fa-search"></i></button>
                </div>
              </div>
				</div>
			</form>
          </div>
        </div>
      </div>

    </section>
  </header>
