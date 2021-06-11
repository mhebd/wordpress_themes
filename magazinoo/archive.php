<?php get_header(); ?>

  <!-- Main content wrapper area
  *****************************************************************
  ***************************************************************** -->
  <main id="main" class="mt-5 pt-5">


    <!-- Recent post section
    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
    <section id="recent" class="">
      <div class="container-xl mx-auto">
        <div class="row">
          <div class="col-md-8 mb-5">
            <div class=" card mb-1">
              <div class="card-body">
                <?php
                  echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
                  
                  echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
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
                ?>
              </div>
            </div>
            <div class="rp-wrap">
              <?php 
                if( have_posts() ) :
                  while( have_posts() ) :
                    the_post();
              
                    get_template_part('tem-part/content', 'recent');

                  endwhile;
                else :
                  echo '<p class="lead">There is no post found</p>';
                endif;
              ?>
            </div>
            <section class="pagination-wrap mt-5">
              <?php posts_pagination_nav(); ?>
            </section>
          </div>
          <div class="col-md-4 mb-5">
            <?php 
              get_sidebar();
            ?>
          </div>
        </div>
      </div>
    </section>



  </main>

 







<?php get_footer(); ?>