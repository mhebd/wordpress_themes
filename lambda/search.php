<?php get_header(); ?>


    <section class="text-center search-heading py-3">
      <h3><?php the_search_query(); ?></h3>
    </section>

    <section class="blogs mt-5">
      <div class="row">
        <div class="col-md-8 mb-4">
          <div class="posts-wrap">
          
              <div class="row">
                
                <?php
               
                if(have_posts()) :
                  while(have_posts()) :
                    the_post(); ?>
                    <div class="col-md-6 mb-4"> <?php

                    get_template_part('temp-part/content'); ?>
                    </div> <?php

                  endwhile;
                else :
                  echo '<p class="lead">Sorry. No post found!!</p>';
                endif;

              ?>
                
              </div>
            <!-- single post end -->
          </div>

          <section class="pagination-wrap">
            <?php posts_pagination_nav() ?>
          </section>
          <!-- pagination end -->
        </div>

        <div class="col-md-4 mb-4">
          <div class="sidebar-wrap"> 
            <?php 
              if(is_active_sidebar('left-sidebar')) {
                dynamic_sidebar('left-sidebar');
              } 
            ?>
          </div>
        </div>
        <!-- sidebar end -->
      </div>
    </section>
    <!-- blog post wrapper end -->

<?php get_footer(); ?>