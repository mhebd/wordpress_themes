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