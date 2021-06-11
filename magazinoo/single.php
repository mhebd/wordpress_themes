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
          <div class="col-lg-8 mb-5">
            <div class=" card mb-1">
              <div class="card-body">
                <?php get_breadcrumb(); ?>
              </div>
            </div>
            <div class="rp-wrap">
              <?php 
                if( have_posts() ) :
                  while( have_posts() ) :
                    
                    //Post view set update
                    gt_set_post_view();   

                    the_post(); 
              
                    get_template_part('tem-part/content', 'recent');

                  endwhile;
                else :
                  echo '<p class="lead">There is no post found</p>';
                endif;
              ?>
            </div>

            <!-- Post author info
              %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
            <section class="card mt-5">
              <div class="card-body">
                <div class="row author-info-box">
                  <div class="col-sm-4 mb-3">
                    <div class="author-img d-flex justify-content-center align-items-center h-100">
                      <?php echo get_avatar([
                        '', 200, '', '', [
                          'class'     => 'img-fluid author-img',
                        ],
                      ]); ?>
                    </div>
                  </div>
                  <div class=" col-sm-8">
                    <h4 class="author-name font-weight-bold"><?php the_author_meta('display_name') ?></h4>
                    <div class="athor-desc">
                      <?php nl2br(the_author_meta('description')); ?>
                    </div>
                  </div>
                </div>
              </div>
            </section>




            <!-- Related post
              %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
              <section id="populer" class="d-none d-sm-block mt-5 card related-post">
                <div class="card-body">
                  <h4 class="text-secondary py-3">You May Like</h4>
                  <div class="d-flex justify-content-center populer">
                    <?php 
                      $count = 0;
                      $related = new WP_Query(
                          array(
                        'category__in'   => wp_get_post_categories( $post->ID ),
                        'posts_per_page' => 2,
                        'post__not_in'   => array( $post->ID )
                          )
                      );
                      if( $related->have_posts() ) : 
                          while( $related->have_posts() ) : 
                          $count++;
                        $related->the_post(); 
		                ?>
                      <div class="item<?php echo $count; ?> item mb-5">
                        <?php  get_template_part('tem-part/content', 'catpost'); ?>
                      </div>
                      <?php
                        endwhile;
                      else :
                        echo '<p class="lead">There is no post for featured!!</p>';
                      endif;
                    ?>
                  </div>
                </div>
              </section>





            <!-- post comments
              %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
            <section class="card mt-5">
              <div class="card-body">
                <?php comments_template(); ?>
              </div>
            </section>



          </div>
          <div class="col-lg-4 mb-5">
            <?php 
              get_sidebar();
            ?>
          </div>
        </div>
      </div>
    </section>









    










    <!-- 
    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->










    <!-- 
    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->










    <!-- 
    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->

  </main>

 







<?php get_footer(); ?>