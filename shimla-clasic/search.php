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
                $count = 0;
                if( have_posts() ) :
                  while( have_posts() ) :
                    the_post();
                    $count++;
              ?>

              <?php 
                if( $count == 1 ) {
                  ?> 
                    <div class="col-12 mb-4">
                      <?php get_template_part('content'); ?>
                    </div>
                  <?php
                } else {
                  ?> 
                    <div class="col-lg-6 mb-4">
                    <?php get_template_part('content'); ?>
                    </div>
                  <?php
                }
              ?>
              

              <?php 
                  endwhile;
                else : 
                  echo '<p class="lead">There is no post found!!</p>';
                endif;
              ?>

            </div>
          </div>

          <section class="pagination-wrap pt-5">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-6 d-flex justify-content-start">
                  <?php previous_posts_link('&laquo; Newer') ?>
                  </div>
                  <div class="col-6 d-flex justify-content-end">
                    <?php next_posts_link('Older &raquo;') ?>
                  </div>
                </div>
              </div>
            </div>
          </section>
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