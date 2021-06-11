<?php get_header(); ?>

    <section class="featured-wrap mt-5">
      <div class="row">
        <?php
          $featured = new WP_Query([
            'post_type'       => 'post',
            'posts_per_page'  => 1,
          ]);

          if($featured->have_posts()) :
            while($featured->have_posts()) :
              $featured->the_post();
        ?>
        <div class="col-md-6 mb-5">
          <div class="post-thumb">
            <a href="<?php the_permalink(); ?>">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
            </a>
          </div>
        </div>
        <div class="col-md-6 mb-5">
          <a href="<?php the_permalink(); ?>">
            <h2 class="post-title"><?php the_title(); ?></h2>
          </a>

          <div class="post-meta">
            <span><em>By: <?php echo get_the_author_posts_link(); ?></em></span>,
            <span><em>On: <?php the_date(); ?></em></span>,
            <span><em>In: <?php the_category(', '); ?></em></span>
          </div>

          <div class="post-content excerpt">
            <?php the_excerpt(); ?>
          </div>
          
            <a href="<?php the_permalink(); ?>" class="btn read-more-btn ">Continue &raquo;</a>
          
        </div>
        <?php
            endwhile;
            wp_reset_postdata();
          else :
            echo '<p class="lead">There is no featured post found</p>';
          endif;
        ?>

      </div>
    </section>
    <!-- Featured wrapper end -->



    <section class="blogs">
      <div class="row">
        <div class="col-md-8 mb-4">
          <div class="posts-wrap">
          <?php
                $featured_two = new WP_Query([
                  'post_type'       => 'post',
                  'offset'          => 1,
                  'posts_per_page'  => 1,
                ]);

                if($featured_two->have_posts()) :
                  while($featured_two->have_posts()) :
                    $featured_two->the_post(); 

                    get_template_part('temp-part/content');

                  endwhile;
                else :
                  echo '<p class="lead">Sorry. No post found!!</p>';
                endif;


              ?>
              <hr>
              <!-- single featured end -->
              <div class="row recent-post">
                
                <?php
                $recent = new WP_Query([
                  'post_type'   => 'post',
                  'offset'      => 2,
                ]);

                if($recent->have_posts()) :
                  while($recent->have_posts()) :
                    $recent->the_post(); ?>
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