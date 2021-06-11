  <!-- get header -->
  <?php get_header(); ?>
  

  <section class="contaner-fluid content-wrapper" id="main-wrapper">
    <div class="container">
    <div class="row">
      <div class="col-md-8 mb-4">
        <main class="posts-wrap panel">
          <div class="panel-heading">
            <h3 class="text-center">Search Result For:- "<?php the_search_query(); ?>"</h3>
          </div>
          <div class="panel-body ">
            <?php
              if( have_posts() ) :
                while( have_posts() ) :
                  the_post();
            
                  get_template_part('tem-part/content');
            
                endwhile;
              else :
                echo '<p class="lead">There is nothing found!!</p>';
              endif;
            ?>
          </div>

          <div class="pagination-wrap">
            <?php wpbeginner_numeric_posts_nav() ?>
          </div>
        </main>
      </div>

      <div class="col-md-4 mb-4">
        
        <?php 
          if(is_active_sidebar('left-sidebar')) {
            dynamic_sidebar('left-sidebar');
          }
        ?>
          
      </div>
    </div>
    </div>
  
  </section>


  <!-- get footer -->
  <?php get_footer(); ?>
