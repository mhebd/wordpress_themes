<?php get_header(); ?>




  <section class="container-fluid main-section" id="main">
    <div class="row cf-padding">
      <div class="col-md-10 col-lg-8 mx-auto mb-4 pt-4">
        <section class="posts-wrapper">

        <?php 
          if(have_posts()) :
            while(have_posts()): 
              the_post();
              ?>
              <div class="">
            <div class="row">
              
              <div class="col-12">
                <div class="row">
                  <div class="col-12 mb-5">
                    <a href="<?php the_permalink(); ?>" class="heading">
                      <h2><?php the_title(); ?></h2>
                    </a>
                    <p class="post-meta">
                       
                      <strong>Last Update On: </strong><span><?php the_date(); ?> <?php the_time(); ?></span> 
                      
                    </p>
                    <hr>
                  </div>
                  <div class="col-12">
                    <div class="content"><?php
                      the_content();
                      ?> </div>
                    
                  </div>
                  
                </div>
              </div>
            </div>
          </div>

          <?php

            endwhile;
            else :
              echo('<p class="lead">There is nothing found!</p>');
            endif;
        ?>
          
        </section>
        
      </div>

     
    </div>
  </section>

<?php get_footer(); ?>