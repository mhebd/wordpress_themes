<?php get_header(); ?>


    <!-- Friends4ever main section
    =============================================== -->
    <main id="site-main">

      <section class="main-section-wrap mt-4 mb-5 container-fluid">
        <div class="row">
          <div class="col-md-8 mb-4">
            <div class="activity-wrap">
              <div class="activitys">
                <?php 
                  if( have_posts() ):
                    while( have_posts() ): 
                      the_post();
                      ?>
                        <!-- <h4 class="page-title"><?php the_title(); ?></h4>
                         -->
                        <div class="page-content">
                          <?php the_content(); ?>
                        </div>
                      <?php
                    endwhile;
                  else :
                    echo '<p class="lead">There is no post found</p>';
                  endif;
                ?>
              </div>
            </div>  
          </div>

          <div class="col-md-4">
            <div class="site-sidebar-wrap">
              <?php 
                if( is_active_sidebar('sidebar-widget') ){
                  dynamic_sidebar('sidebar-widget');
                }
              ?>
            </div>
          </div>
        </div>
      </section>

    </main>
  


<?php get_footer(); ?>