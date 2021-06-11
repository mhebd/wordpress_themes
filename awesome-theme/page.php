<?php get_header(); ?>


  <div class="left-section">
    <main id="main-post-wrap">

      <!-- section header end -->
      
      <div class="post-sec-header breadcrumb mb-4 ">
        <div class="mt-4 mb-1">
        <?php get_breadcrumb(); ?>
        </div>
      </div>
      <!-- breadcrumb section end -->

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8 mb-4">
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
          <!-- post section end -->

          <div class="col-md-4 mb-4">
            <div class="sidebar-wrap">
              <?php get_sidebar(); ?>
            </div>
          </div>
          <!-- sidebar section end -->
        </div>

        

      </div>
      <!-- All posts wrap end -->


    </main>
    <!-- Main post section end -->



<?php get_footer(); ?>