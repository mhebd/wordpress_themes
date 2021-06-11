<?php get_header(); ?>
<section class="search-heading-wrap bg-dark py-5 mb-5">
    <div class="container">
      <h3 class="text-light text-uppercase">
        search Result For: <span class="text-success"> "<?php 
          the_search_query();
        ?>" </span>
      </h3>
    </div>
  </section>


  <section id="main-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <main id="main-post">
            
        
              <div class="posts-wrap">

              <?php
                $recent = new WP_Query([
                  
                ]);

                if(have_posts()) :
                  while(have_posts()) :
                    the_post(); ?>

                  <?php get_template_part('tem-part/content'); ?>
                <?php
                  endwhile;
                else :
                  echo '<p class="lead">Sorry. No post found!!</p>';
                endif;

              ?>

                
                
                
              </div>
          </main>

          <div class="pagination-wrap my-5 py-4">
            <?php wpbeginner_numeric_posts_nav() ?>
          </div>
        </div>

        <?php get_sidebar(); ?>
      </div>
    </div>
  </section>


<?php get_footer(); ?>