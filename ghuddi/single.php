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
        
        <article class=" featured-wrap post-wrap">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
          <div class="featured-content-wrap post-content-wrap ns-post">
          <p class="post-cat-name">
            <?php the_category(' '); ?>
          </p>
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
                echo '';
              endif;
            ?>

          </section>

          <hr><hr>
          
          <section class="post-author-wrap py-5">
            <div class="row">
              <div class="col-sm-3 mb-4">
                <?php echo get_avatar([
                  '', 64, '', '', ''
                ]) ?>
              </div>
              <div class="col-sm-9">
                <div class="author-name pb-3">
                  <p class="lead">About <?php echo get_the_author_posts_link(); ?></p>
                </div>
                <div class="author-meta">
                  <?php echo nl2br(get_the_author_meta('description')); ?>
                </div>
              </div>
            </div>
          </section>

          <hr><hr>

          <section class="related-post-wrap pb-5">
            <h4 class="py-3">You Might Also Like</h4>
            <div class="row">
              <?php 
                $related = new WP_Query(
                    array(
                  'category__in'   => wp_get_post_categories( $post->ID ),
                  'posts_per_page' => 3,
                  'post__not_in'   => array( $post->ID )
                    )
                );
                if( $related->have_posts() ) : 
                  while( $related->have_posts() ) :
                    $related->the_post(); 
              ?>
                <div class="col-md-4 mb-4">
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
                  endwhile;
                  wp_reset_postdata();
                else :
                  echo 'There is no related post found!!';
                endif;
              ?>
            </div>
          </section>

          <hr><hr>

          <section class="post-comment-wrap">
            <?php comments_template(); ?>
          </section>
        </div>

        <div class="col-md-4">
          <section class="sidebar-wrap">
            <?php get_sidebar(); ?>
          </section>
        </div>
      </div>
    </main>



<?php get_footer(); ?>