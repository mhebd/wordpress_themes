<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
    <meta charset=" <?php bloginfo('charset'); ?> ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php bloginfo('name'); ?> | <?php bloginfo('description'); ?> </title>



    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

    <div class="go-top"><a href="#top" id="go-top" class="btn btn-success"><i class="fas fa-angle-up"></i></a></div>

    <div class="container-wrapper">

        <div id="top"></div>
        <nav class="sticky-top">
            <div class="container-fluid top-nav" id="top-navigation">
                <div class="navbar navbar-expand-lg">
                    <div class="container">
                        <button class="navbar-toggler" data-toggle="collapse" data-target="#top-menu">
                            <i class="fas fa-bars"></i>
                        </button> <!-- toggler end -->

                        <div class="navbar-brand">
                            <a href="<?php echo home_url(); ?>">
                                <h2 class="brandding-name"><?php bloginfo('name') ?></h2>
                            </a>
                            <p class="description"><?php bloginfo('description') ?></p>
                        </div> <!-- navbar brand end -->

                        <div class="collapse navbar-collapse" id="top-menu">
                            <?php 
                              wp_nav_menu(
                                array (
                                  'theme_location'  => 'header-menu',
                                  'menu'            => '',
                                  'container'       => 'ul',
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

                            <div class="search-box ml-auto">
                                
                                <form role="search" method="get" id="searchform" class="searchform" action="http://localhost/learningwp/">
				<div>
        <div class="input-group">
          <input type="text" class="form-control" value="" name="s" id="s" placeholder="Search Anithing">
          <div class="input-group-append">
					<button class="btn btn-success" type="submit" id="searchsubmit">
                                                <i class="fas fa-search"></i>
                                            </button>
				</div>
				</div>
				</div>
			</form>
                            </div> <!-- search box end -->
                        </div> <!-- top menu end -->
                    </div>
                </div> <!-- navbar end-->
            </div>
        </nav> <!-- nav end-->

