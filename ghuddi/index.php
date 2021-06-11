<?php get_header(); ?>




    <!-- Featured post
    ================================================ -->
    <section class="featured-post-wrap py-5">
      <div class="container-fluid">
        <?php 
          $cat_name = get_theme_mod('featured', 'Technology');
          $featured = new WP_Query([
            'post_type'       => 'post',
            'posts_per_page'  => 1,
            'category_name'   => $cat_name,
          ]);

          if( $featured->have_posts() ) :
            while( $featured->have_posts() ) :
              $featured->the_post();
        ?>
        
        <article class=" featured-wrap post-wrap">
          <a href="<?php the_permalink(); ?>">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
          </a>
          <div class="featured-content-wrap post-content-wrap ns-post">
          <p class="post-cat-name">
            <?php the_category(' '); ?>
          </p>
            <a href="<?php the_permalink(); ?>">
              <h3 class="title"><?php the_title(); ?></h3>
            </a>
            <div class="post-meta">
              <span class="pr-2"><em><?php the_author_posts_link(); ?></em></span><span>  |   
              <span class="pl-2"><?php the_date(); ?></span>
            </div>
          </div>
        </article>

        <?php 
            endwhile;
            wp_reset_postdata();
          else : 
            echo 'Set your featured post from theme customizer.';
          endif;
        ?>
      </div>
    </section>








    <!-- main post section
    ===================================================== -->
    <main class="container-fluid main-sec-wrap pt-5">
      <div class="row">
        <div class="col-md-8 mb-4">
          <section class="recent-post-wrap row">
            <?php 
              $count = 0;
              if( have_posts() ) :
                while( have_posts() ) :
                $count++;
                  the_post();
              
                  if( $count == 1 || $count == 4 || $count == 7 || $count == 10 || $count == 13 || $count == 16 || $count == 19 ) { 
                    ?>
                    <div class="col-12 mb-5">
                      <article class=" rf-wrap post-wrap">
                        <a href="<?php the_permalink(); ?>">
                          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                        </a>
                        <div class="rfc-wrap post-content-wrap ns-post">
                        <p class="post-cat-name">
                          <?php the_category(' '); ?>
                        </p>
                          <a href="<?php the_permalink(); ?>">
                            <h3 class="title"><?php the_title(); ?></h3>
                          </a>
                          <div class="post-meta">
                            <span class="pr-2"><em><?php the_author_posts_link(); ?></em></span><span>  |   
                            <span class="pl-2"><?php the_date(); ?></span>
                          </div>
                        </div>
                      </article>
                    </div>
                    <?php
                  } else {
                    ?> 
                    <div class="col-md-6 mb-5">
                      <article class=" recent-wrap post-wrap">
                        <a href="<?php the_permalink(); ?>">
                          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                        </a>
                        <div class="fecent-content-wrap post-content-wrap ns-post">
                        <p class="post-cat-name">
                          <?php the_category(' '); ?>
                        </p>
                          <a href="<?php the_permalink(); ?>">
                            <h3 class="title"><?php the_title(); ?></h3>
                          </a>
                          <div class="post-meta">
                            <span class="pr-2"><em><?php the_author_posts_link(); ?></em></span><span>  |   
                            <span class="pl-2"><?php the_date(); ?></span>
                          </div>
                        </div>
                      </article>
                    </div>
                    <?php
                  }
            
                endwhile;
              else :
                echo 'There is no post foune for show!!';
              endif;
            ?>

          </section>
            <div class="pagination-wrap my-5">
              <div class="row">
                <div class="col-6 mb-4 d-flex justify-content-start prev">
                  
                  <?php previous_posts_link() ?>
                  
                </div>
                <div class="col-6 mb-4 d-flex justify-content-end next">
                  
                  <?php next_posts_link() ?>
                  
                </div>
              </div>
            </div>
        </div>

        <div class="col-md-4">
          <section class="sidebar-wrap">
            <?php get_sidebar(); ?>
          </section>
        </div>
      </div>
    </main>



<?php get_footer(); ?>