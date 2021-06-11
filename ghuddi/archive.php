<?php get_header(); ?>




    <!-- breadcrumb section
    ================================================ -->
    <section class="breadcrumb">
      <?php get_breadcrumb(); ?> 
      <p class=""> 
        <?php 
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
          if( is_category() ) {
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
      </p>
    </section>








    <!-- main post section
    ===================================================== -->
    <main class="container-fluid main-sec-wrap pt-5">
      <div class="row">
        <div class="col-md-8 mb-4">
          <section class="recent-post-wrap row">
            <?php 
              $count = 0;
              if( have_posts() ) :
                while( have_posts() ) :
                $count++;
                  the_post();
              
                  if( $count == 1 || $count == 4 || $count == 7 || $count == 10 || $count == 13 || $count == 16 || $count == 19 ) { 
                    ?>
                    <div class="col-12 mb-5">
                      <article class=" rf-wrap post-wrap">
                        <a href="<?php the_permalink(); ?>">
                          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                        </a>
                        <div class="rfc-wrap post-content-wrap ns-post">
                        <p class="post-cat-name">
                          <?php the_category(' '); ?>
                        </p>
                          <a href="<?php the_permalink(); ?>">
                            <h3 class="title"><?php the_title(); ?></h3>
                          </a>
                          <div class="post-meta">
                            <span class="pr-2"><em><?php the_author_posts_link(); ?></em></span><span>  |   
                            <span class="pl-2"><?php the_date(); ?></span>
                          </div>
                        </div>
                      </article>
                    </div>
                    <?php
                  } else {
                    ?> 
                    <div class="col-md-6 mb-5">
                      <article class=" recent-wrap post-wrap">
                        <a href="<?php the_permalink(); ?>">
                          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                        </a>
                        <div class="fecent-content-wrap post-content-wrap ns-post">
                        <p class="post-cat-name">
                          <?php the_category(' '); ?>
                        </p>
                          <a href="<?php the_permalink(); ?>">
                            <h3 class="title"><?php the_title(); ?></h3>
                          </a>
                          <div class="post-meta">
                            <span class="pr-2"><em><?php the_author_posts_link(); ?></em></span><span>  |   
                            <span class="pl-2"><?php the_date(); ?></span>
                          </div>
                        </div>
                      </article>
                    </div>
                    <?php
                  }
            
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