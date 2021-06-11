<!-- Header part including -->
<?php get_header();
  // Template Name: Home Template
?>


  <section class="home-hero-wrap container-fluid" id="hh-wrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-8">
          <div class="get-latest-theme-wrap">
            <h2><?php echo get_theme_mod('banner_heading', 'Banner Heading') ?></h2>
            <p><?php echo get_theme_mod('banner_text', 'Banner Text') ?></p>
            <a href="<?php echo get_theme_mod('banner_btn1_link', '#') ?>" class="btn  premium mb-3"><?php echo get_theme_mod('banner_btn1_text', 'Banner btn Text') ?></a>
            <a href="<?php echo get_theme_mod('banner_btn2_link', '#') ?>" class="btn  free mb-3"><?php echo get_theme_mod('banner_btn2_text', 'Banner btn Text') ?></a>
          </div>
        </div>
      </div>
    </div>
  </section>




  <?php
        
        $resources = new WP_Query(
          array(
            'post_type' => 'resources',
          )
        );

        if($resources->have_posts()) : ?> 

  <section class="container-fluid home-useful-resources-wrap" id="hur-wrap">
    <div class="container">
      <div class="section-heading text-center">
        <h2><?php echo get_theme_mod('resources_heading', 'Get Our Useful Resources'); ?></h2>
      </div>
      <div class="row"> 

            <?php

            while($resources->have_posts()) :
              $resources->the_post(); 

              $resources_link = get_post_meta($post->ID,'resources_link',true);
        
        ?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="single-resources text-center">
                <h6 class="title"><?php the_title(); ?></h6>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid mx-auto">
                <div class="desc">
                  <?php  the_excerpt(); ?>
                </div>
                <a href="<?php echo $resources_link; ?>" class=""><i class="fas fa-arrow-right"></i></a>
              </div>
            </div>

        <?php  endwhile;
           
        ?>
      </div>
    </div>
  </section>

  <?php
  endif;
  ?>







  <?php if(is_active_sidebar('quote_widget')) : ?>
  <section class="container-fluid home-important-quote-wrap" id="hiq-wrap">
    <div class="container">
      <div class="row">
        
      <?php dynamic_sidebar('quote_widget') ?>
         
        
      </div>
    </div>
  </section>
<?php 
else :
endif; ?>





  <?php 
            $home_post = new WP_Query(
              array(
                'post_type'     => 'post',
                'posts_per_page' => '6',
              )
            );

            if($home_post->have_posts()) : ?>


  <section class="container-fluid home-post-wrap" id="hp-wrap">
    <div class="container">
      <div class="section-heading text-center">
        <h2><?php echo get_theme_mod('latest_post_heading', 'Our latest post'); ?></h2>
      </div>
      <div class="home-posts">
        <div class="row"> 
              <?php
              while($home_post->have_posts()) :
                $home_post->the_post();
                ?>

                <div class="col-lg-4 col-md-6 mb-5">
                  <div class="single-post-wrap">
                    <?php
                      if(has_post_thumbnail()) {
                        ?>
                          <a href="<?php the_permalink(); ?>">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid thumbnail mb-4">
                          </a>
                        <?php
                      } 
                    ?>
                    <div class="post-content">
                      <div class="post-cat">
                        <?php the_category(', '); ?>
                      </div>
                    <div class="post-heading">
                      <a href="<?php the_permalink(); ?>" class="">
                        <?php the_title(); ?>
                      </a>
                    </div>
                   
                    <div class="post-text">
                      <?php the_excerpt(); ?>
                    </div>
                    </div>
                  </div>
                </div>



              <?php
              endwhile;
          ?>
        </div>
      </div>
    </div>
  </section>
  <?php 
   else :
    
  endif;
  ?>




  <?php if(is_active_sidebar('newslater_widget')) { ?>
  <section class="container-fluid home-newslater-wrap" id="hn-wrap">
    <div class="container">
      <div class="row">
        
            <?php
              dynamic_sidebar('newslater_widget');
            ?>

      </div>
    </div>
  </section>
  <?php } ?>




  <?php

    $themes = new WP_Query(
      array(
        'post_type' => 'themes',
        'posts_per_page' => 6,
      )
    );

    if($themes->have_posts()) : ?>

    <section class="section container-fluid home-latest-theme-wrap" id="hlt-wrap">
    <div class="container">
        <div class="section-heading text-center">
          <h2><?php echo get_theme_mod('theme_post_heading', 'Our latest Theme'); ?></h2>
        </div>
        <div class="home-themes theme-post-wrap">
          <div class="row">
          
          <?php
  while($themes->have_posts()) :
    $themes->the_post(); 
    
      $category = get_post_meta($post->ID,'category',true);
      $buy_link = get_post_meta($post->ID,'buy_link',true);
      $demo_link = get_post_meta($post->ID,'demo_link',true);
    
    ?>

      <div class="col-lg-4 col-md-6 mb-5 not-singl fpp-theme"> 
        <div class="single-post-wrap">
          <?php
            if(has_post_thumbnail()) {
              ?>
                <div class="theme-post-thumb mb-4">
                  <a href="<?php the_permalink(); ?>">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid thumbnail">
                  </a>

                  <div class="theme-link clearfix">
                    <a href="<?php echo $buy_link; ?>" class="btn buy-btn">Buy Now</a>
                    <a href="<?php echo $demo_link; ?>" class="btn demo-btn float-right">Demo</a>
                  </div>
                </div>
              <?php
            } 
          ?>
          <div class="post-content">
             <div class="post-cat">
                <span class="text-danger"><?php echo $category; ?></span>
              </div> 
          <div class="post-heading">
            <a href="<?php the_permalink(); ?>" class="">
              <?php the_title(); ?>
            </a>
          </div>
          <div class="theme-content">
            <?php the_excerpt(); ?>
          </div>
          </div>
        </div>
      </div>  


    <?php
  endwhile;

?>
  
          </div>
        </div>
      </div>
    </section>

  <?php
  else :
  endif;
  ?>



<!-- Footer part including -->
<?php get_footer(); ?>