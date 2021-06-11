<?php get_header(); ?>


  <div class="left-section">
    <main id="main-post-wrap">

      <div class="post-sec-header breadcrumb mb-4 ">
        <header class="mt-4 mb-3">
          <h4 class=""> <?php _e('Search Result For:', 'awesome'); ?> 
            "<?php echo get_search_query(); ?>"
          </h4>
        </header>
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