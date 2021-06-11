<?php get_header(); ?>


  <div class="left-section">

    <section class="featureds-post-wrapper  mt-5 ">
      <div class="container-fluid">
        <div class="row no-gutters">
          <div class="col-md-8 mb-4 pr-md-2 ">
          <?php
              $fslider = new WP_Query(
                array(
                  'post_type' => 'post',
                  'posts_per_page' => 5,
                  'category_name'  => get_theme_mod('slider-cat-name', 'Wordpress'),
                )
              );
            ?>
            <div class="featured-slider-wrap">
              <div class="owl-carousel owl-theme">
             
                <?php
                  if($fslider->have_posts()) :
                    while($fslider->have_posts()) :
                      $fslider->the_post();
                ?>

                  <div class="item">
                    <div class="fs-post-thumb">
                      <a href="<?php the_permalink(); ?>">
                      <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                      </a>
                    </div>
                    <div class="fs-post-content">
                      <div class="fs-post-cat mb-2">
                        <span class="p-1"><?php the_category(' '); ?></span>
                      </div>
                      <a href="<?php the_permalink(); ?>" class="fs-title"><?php the_title(); ?></a>
                    </div>
                  </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                  else :
                    echo '<div class="container-fluid">Please set your slider from theme customizer</div>';
                  endif;
                ?>


              </div>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <?php
              $featured = new WP_Query(
                array(
                  'post_type'       => 'post',
                  'posts_per_page'  => 2,
                  'category_name'   => get_theme_mod('featured-cat-name', 'Product'),
                )
              );
            ?>
            <div class="featured-post-wrap">
            <?php
              if($featured->have_posts()) :
                while($featured->have_posts()) :
                  $featured->the_post();
            ?>
              <article class="featured-single-wrap mb-2 d-none d-md-block">
                <div class="f-post-thumb">
                  <a href="<?php the_permalink(); ?>">
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                  </a>
                </div>
                <div class="f-post-content">
                  <div class="f-post-cat mb-1">
                    <span class="p-1"><?php the_category(' '); ?></span>
                  </div>
                  <a href="<?php the_permalink(); ?>" class="f-title"><?php the_title(); ?></a>
                </div>
              </article>
            <?php
                endwhile;
                wp_reset_postdata();
              else :
                echo '<div class="contianer-fluid">please set your featured post from theme customizer</div>';
              endif;
            ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <main id="main-post-wrap">

      <div class="hp-post-sec-header post-sec-header container-fluid mb-5 ">
        <div class="mt-4 mb-4">
          <div class="heading"><span class="p-2"><?php esc_attr_e('Recent Posts', 'awesome') ?></span></div>
        </div>
      </div>
      <!-- section header end -->
      

      <div class="container-fluid">
        <div class="posts-wrap">
          <div class="row">
            <?php
              if(have_posts()) :
                while(have_posts()) :
                  the_post();
                  
                  get_template_part('tem-part/content');

                endwhile;
              else :
                echo '<div class="alert alert-warning">There is no post found</div>';
              endif;
            ?>

          </div>
        </div>
      </div>
      <!-- All posts wrap end -->

      <div class="pagination-wrap my-5">
        <?php numeric_posts_nav(); ?>
      </div>
      <!-- post pagination end -->
    </main>
    <!-- Main post section end -->


<?php get_footer(); ?>