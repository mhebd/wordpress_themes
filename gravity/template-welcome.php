<?php
/**
 * Template Name: Welcome
 */
get_header(); ?>




  <section class="container-fluid main-section" id="main">
    <div class="row cf-padding">
      <div class="col-md-8 mb-4 pt-4 pws">
        <section class="posts-wrapper">

        <?php 
          if(have_posts()) :
            while(have_posts()): 
              the_post();
              ?>
              <div class="post">
            <div class="row">
              <div class="col-12 mx-auto mb-4">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid post-thumb" style="max-height:400px; width:100%;" >
              </div>
              <div class="col-12">
                <div class="row">
                  <div class="col-12 mb-5">
                    <a href="<?php the_permalink(); ?>" class="heading">
                      <h2><?php the_title(); ?></h2>
                    </a>
                    <p class="post-meta">
                      <strong>By: </strong><span><?php the_author_posts_link(); ?></span> | 
                      <strong>On: </strong><span><?php the_date(); ?> <?php the_time(); ?></span> | 
                      <strong>In: </strong><span><?php the_category(','); ?></span>
                      
                    </p>
                  </div>
                  <div class="col-12">
                    <div class="content"><?php
                      the_content();
                      ?> </div>
                    <div class="tags my-4">
                      <?php the_tags(); 
                      $next_post = get_next_post();
if ( is_a( $next_post , 'WP_Post' ) ) : ?>
    <a href="<?php echo get_permalink( $next_post->ID ); ?>">
    <?php echo get_the_title( $next_post->ID ); ?>
    <?php echo get_the_post_thumbnail( $next_post->ID ); ?>
  </a>
<?php endif; ?>
                    </div>
                  </div>



                  <div class="col-12">
                    <div class="social-share-btn">
                      <ul class="nav">

                      <?php 
              $share_btns = ot_get_option( 'share_link', array() );
  
              if ( ! empty( $share_btns ) ) {
                foreach( $share_btns as $share_btn ) {
                  echo '<li class="nav-item"><a href="'.$share_btn['share_btn_link'].'" class="nav-link"><i class="fab fa-'.$share_btn['share_btn_name'].'"></i>  '.$share_btn['share_btn_type'].'</a></li>'
                  ;
                }
              }
  
  
  ?>
                        
                      </ul>
                    </div>
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
        <div class="pagination-wrap" style="border-top: 1px solid var(--db);">
          <?php comments_template(); ?>
        </div>
      </div>

      
    </div>
  </section>

<?php get_footer(); ?>