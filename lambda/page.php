<?php get_header(); ?>




    <section class="blogs my-5" >
      <div class="row">
        <div class="col-md-10 col-lg-9 mx-auto mb-4">
          <div class="posts-wrap">
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
        </div>

      </div>
    </section>
    <!-- blog post wrapper end -->

    <section class="breadcrumb" style="background: transparent;">
      <?php get_breadcrumb(); ?>
    </section>

<?php get_footer(); ?>