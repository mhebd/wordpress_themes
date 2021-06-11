  <!-- get header -->
  <?php get_header(); ?>
  

  <section class="contaner-fluid content-wrapper" id="main-wrapper">
    <div class="container">
    <div class="row">
      <div class="col-md-8 mb-4">
        <main class="posts-wrap panel">
          <div class="panel-heading">
            <h3 class="text-center">
              Archive Resulte For:- 
            '<?php 
              if( is_category() ) {
                single_cat_title();
              }else if( is_author() ) {
                the_post();
                echo get_the_author();
                rewind_posts();
              } else if( is_tag() ) {
                single_tag_title();
              } else if( is_day() ) {
                echo get_the_date();
              } else if( is_month() ) {
                echo get_the_date('F y');
              } else if( is_year() ) {
                echo get_the_date('Y');
              } else {
                echo 'Anonymous Archive!!';
              }
            ?>'

            </h3>
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
