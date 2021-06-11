<?php get_header(); ?>

  <!-- Main section start
  ================================================================ -->
  <main id="main" class="py-5 mt-5">
    <div class="container-xl mx-auto">
      <div class="row">
        <!-- Recent post
        ========================================== -->
        <div class="col-md-8 mb-4">
          <div class="site-posts-wrap">
          <article class="card">
              <div class="card-body">
                <p class="lead"> 
                  <?php 
                    echo get_breadcrumb();
                  ?> 
                </p>
              </div>
            </article>
            <div class="row">

              <?php
                if( have_posts() ) :
                  while( have_posts() ) :
                    the_post();
                    
                    ?>
                    <div class="col-12">
                      <?php  get_template_part('content'); ?>
                    </div>
                    <?php

                  endwhile;
                else : 
                  echo '<p class="lead">There is no post found!!</p>';
                endif;
              ?>

            </div>

            <section class="pagination-wrap pt-5">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-6 d-flex justify-content-start">
                    <?php previous_post_link('%link','&laquo; Previous Post') ?>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                      <?php next_post_link('%link ','Next Post &raquo;') ?>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <section class="card related-posts my-5">
              <div class="card-header">
                <h4 class="">You May Like This</h4>
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
                    if( $related->have_posts() ) : 
                        while( $related->have_posts() ) :
                      $related->the_post(); 
                  ?>
                  <div class="col-md-4">
                    <article class="sp-wrap mb-5">
                      <div class="">
                        <a href="<?php the_permalink(); ?>" class="">
                          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="card-img-top img-fluid mb-4">
                        </a>
                      
                        <h5 class="post-title">
                          <a href="<?php the_permalink(); ?>" class="">
                            <?php the_title(); ?>
                          </a>
                        </h5>
                    </article>
                  </div>
                  <?php 
                        endwhile;
                      else : 
                        echo 'No Related Post Found!!';
                      endif;
                  ?>
                </div>
              </div>
            </article>

            <section class="card comments-wrap">
              <div class="card-body">
                <?php comments_template(); ?>
              </div>
            </section>
          </div>
        </div> 

        
        <!-- Sidebar
        ========================================= -->
        <div class="col-md-4 mb-4">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </main>





<?php get_footer(); ?>