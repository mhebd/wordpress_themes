<?php get_header(); ?>





    <section class="blogs my-5" >
      <div class="row">
        <div class="col-md-10 col-lg-9 mx-auto mb-4">
          <div class="posts-wrap mb-5">
              <?php

                if(have_posts()) :
                  while(have_posts()) :
                    the_post(); 

                    get_template_part('temp-part/content');

                  endwhile;
                else :
                  echo '<p class="lead">Sorry. No post found!!</p>';
                endif;

              ?>
             
          </div>

          <section class="post-author mb-5">
            <div class="card">
              <div class="card-header">
                <p class="lead"><?php _e('Post Author', 'lambda'); ?></p>
              </div>
              <div class="card-body">
              <div class="row">
              <div class="col-3">
                <div class="">
                  <?php
                    echo get_avatar('', 100, 'wavatar', 'Author Img', [
                      'calss'     => 'img-fluid'
                    ])
                  ?>
                </div>
              </div>
              <div class="col-9">
                <div class="author-name mb-3">
                  <?php echo get_the_author_posts_link(); ?>
                </div>
                <p class="">
                  <?php echo nl2br(get_the_author_meta('description')); ?>
                </p>
              </div>
            </div>
              </div>
            </div>
          </section>


          <section class="related-post-wrap mb-5">
            <div class="related-posts">
              <div class="card">
                <div class="card-header">
                  <p class="lead"><?php _e('You might also like', 'lambda'); ?></p>
                </div>
                <div class="card-body"> 
                <div class="row">     
                  <?php 
                    $related = new WP_Query(
                        array(
                      'category__in'   => wp_get_post_categories( $post->ID ),
                      'posts_per_page' => 3,
                      'post__not_in'   => array( $post->ID )
                        )
                    );
                    if( $related->have_posts() ) { 
                        while( $related->have_posts() ) { 
                      $related->the_post(); ?>
                        
                          <div class="col-sm-4 mb-3">
                          <div class="post-thumb">
                      <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                      </a>
                      </div>
                      <div class="related-posts-link">        
                          <a rel="external" href="<?php the_permalink();?>"><?php the_title(); ?></a>        
                      </div>
                          </div>
                        
                      <?php 
                        }
                        wp_reset_postdata();
                    }    
                  ?>
                </div>
              </div>
              </div> 
            </div>
          </section>

          <section class="coments-wrap">
            <?php comments_template(); ?>
          </section>
        </div>

      </div>
    </section>
    <!-- blog post wrapper end -->

    <section class="breadcrumb" style="background: transparent;">
      <?php get_breadcrumb(); ?>
    </section>

<?php get_footer(); ?>