<?php get_header(); ?>


  <?php
    if( have_posts() ) :
      while( have_posts() ) :
        the_post();
      
  ?>
  <section class="hero-post-wrap" 
  style=" 
  background-image: linear-gradient(rgba(0, 0, 0, 0.719),rgba(0, 0, 0, 0.418)) ,url(<?php echo get_theme_mod('theme-banner', get_template_directory_uri().'/img/1.jpg' ); ?>);
  height: 60vh;
  min-height: 500px; 
  ">
    <div class="container-xl">
    <div class="hero-post-info">
      
      <div class="breadcrumb-wrap">
        <?php get_breadcrumb(); ?>
      </div>

    </div>
    </div>
  </section>
  <?php 
      endwhile;
      wp_reset_postdata();
    else :
      ?>
        <section class="hero-post-wrap" style=" background-image: linear-gradient(rgba(0, 0, 0, 0.719),rgba(0, 0, 0, 0.418)) ,url(<?php echo get_theme_mod('theme-banner', get_template_directory_uri().'/img/1.jpg' ) ?>); ">
          <div class="container-xl">
          <div class="hero-post-info">
            <p class="lead"><?php echo _e('There Is No Post Found!!', 'borofpani'); ?></p>
          </div>
          </div>
        </section>
      <?php
    endif;
  ?>



 



  <section class="main-blogs-area pt-2 pb-5">
    <div class="container-xl">
      <div class="row">

        <div class="col-lg-8 col-md-10 mx-auto">
          <main class="recent-posts-wrap">
            <div class="row">
              <?php
                if( have_posts() ) :
                  while( have_posts() ) :
                    the_post(); 
              
                    get_template_part('tem-part/content');
                    

                  endwhile;
                else : 
                  echo _e('There is no post found!!', 'borofpani'); 
                endif;
              ?>
            </div>
          </main>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>