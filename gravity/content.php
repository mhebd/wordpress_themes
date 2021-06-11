<div class="col-md-8 mb-4 pt-4 pws">
        <section class="posts-wrapper">
  
  <?php 
    if(is_search()) :
     ?> <div class="mb-4">
     <h3 class="search-title text-uppercase text-secondary" style="">
<?php echo $wp_query->found_posts; ?> <?php _e( 'Search Results Found For', 'locale' ); ?>: "<?php the_search_query(); ?>"
</h3>
     </div> <?php
     else :
  endif;
  
  ?>

<?php 
   if(is_archive()) : ?>
  <div class="mb-4">
    <?php 
      the_archive_title( '<h3 class="page-title text-uppercase text-secondary" style=";">Archive Result For- ', '</h3>' );
    ?>
  </div>
   <?php
   
   else :
   endif;

  ?>



        <?php 
          if(have_posts()) :
            while(have_posts()): 
              the_post(); 
              ?>
              <?php get_template_part('loop',get_post_format()); ?>

          <?php

            endwhile;
            else :
              echo('<p class="lead">There is nothing found!</p>');
            endif;
        ?>
          
        </section>
        <div class="pagination-wrap">
        <?php wpbeginner_numeric_posts_nav(); ?>
          
        </div>
      </div>