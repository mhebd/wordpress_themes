<?php get_header(); ?>




    
    <!-- breadcrumb section
    ================================================ -->
    <section class="breadcrumb">
      <?php get_breadcrumb(); ?> 
      
    </section>



    <!-- Featured post
    ================================================ -->
    <section class="featured-post-wrap py-5">
      <div class="container-fluid">
        <?php 

          if( have_posts() ) :
            while( have_posts() ) :
              the_post();
        ?>
        
        <article class="">
          <div class="single-page-heading">
              <h3 class="title"><?php the_title(); ?></h3>
            <div class="post-meta">
              <span class="pr-2"><em><?php the_author_posts_link(); ?></em></span><span>  |   
              <span class="pl-2"><?php the_date(); ?></span>
            </div>
          </div>
        </article>

        <?php 
            endwhile;
            wp_reset_postdata();
          else : 
            echo 'Set your featured post from theme customizer.';
          endif;
        ?>
      </div>
    </section>








    <!-- main post section
    ===================================================== -->
    <main class="container-fluid main-sec-wrap pt-5">
      <div class="row">
        <div class="col-md-8 mb-4">
          <section class="recent-post-wrap row">
            <?php 
              if( have_posts() ) :
                while( have_posts() ) :
                  the_post(); ?>
                  
                    <div class="col-12 mb-5">
                      <article class="post-content">
                        <?php the_content(); ?>
                      </article>
                    </div>

                    <?php
                  
                endwhile;
              else :
                echo 'There is no post foune for show!!';
              endif;
            ?>

          </section>
            <div class="pagination-wrap my-5">
              <div class="row">
                <div class="col-6 mb-4 d-flex justify-content-start prev">
                  
                  <?php previous_posts_link() ?>
                  
                </div>
                <div class="col-6 mb-4 d-flex justify-content-end next">
                  
                  <?php next_posts_link() ?>
                  
                </div>
              </div>
            </div>
        </div>

        <div class="col-md-4">
          <section class="sidebar-wrap">
            <?php get_sidebar(); ?>
          </section>
        </div>
      </div>
    </main>



<?php get_footer(); ?>