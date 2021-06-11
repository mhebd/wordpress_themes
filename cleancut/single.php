  <!-- get header -->
  <?php get_header(); ?>
  

  <section class="contaner-fluid content-wrapper" id="main-wrapper">
    <div class="container">
    <div class="row">
      <div class="col-md-8 mb-4">




        <!-- Display main post -->
        <main class="posts-wrap">
          <div class="single">
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
        </main>



        <!-- display author info -->
        <?php 
          if(is_single()) { ?>
            <section class="author-info card mb-5">
              <div class="card-header">
                <p class="lead text-center">
                  <?php _e('Post Author', 'cleancut') ?>
                </p>
              </div>
              <div class="card-body">
                <div class="float-left">
                  <?php echo get_avatar('', 80, '', '', [
                    'class' => 'img-thumbnail author-img rounded rounded-circle mr-3'
                  ]); ?>
                </div>
                <div class="float-left">
                    <p class="lead"><?php the_author_posts_link(); ?></p>
                  <?php echo nl2br(get_the_author_meta('description')); ?>
                </div>
              </div>
            </section>
          <?php
          }
        ?>




        <!-- Display related post -->
        <?php 
          if(is_single()) { 
            
            $categorys = get_the_category();
            $rp_query  = new WP_Query([
              'posts_per_page'      => 2,
              'post__not_in'        => [ $post->ID ],
              'cat'                 => !empty($categorys) ? $categorys[0]->term_id : null,
            ]);
            
            
                if($rp_query->have_posts() ) :
                  ?>
            <section class="related-posts card mb-5">
            <div class="card-header">
              <p class="lead text-center"><?php _e('Post You May Like', 'cleancut'); ?></p>
            </div>
            <section class="related-posts card-body">
              <div class="row">
              <?php
                  while($rp_query->have_posts() ) :
                    $rp_query->the_post();
              ?>
                <div class="col-md-6">
                <?php 
                  if(has_post_thumbnail()) {
                    ?> <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-thumbnail mb-3"> <?php
                  } 
                ?>
                <div class="post-title">
                  <a href="<?php the_permalink(); ?>" class="">
                    <h6 class="text-uppercase text-secondary"><?php the_title(); ?></h6>
                  </a>
                </div>
                </div>
                <?php
                  endwhile;
                    wp_reset_postdata();
                  ?>
                  </div>
                </section> 
                </section> 
                <hr>
                   <?php
            endif;
          }
        ?>



        <!-- Display comment section -->
        <section class="comment-wrap">
          <?php comments_template(); ?>
        </section>
      </div>




      <!-- Display sidebar section -->
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
