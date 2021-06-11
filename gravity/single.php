<?php get_header(); ?>




  <section class="container-fluid main-section" id="main">
    <div class="row cf-padding">
      <div class="col-lg-8 col-md-10 mx-auto mb-4 pt-4">
        <section class="posts-wrapper">

        <?php 
          if(have_posts()) :
            while(have_posts()): 
              the_post();
              ?>
              <div class="">
            <div class="row">
            <div class="col-12 mb-5">
                    <div class="text-secondary">
                      <h2><?php the_title(); ?></h2>
                    </div>
                    <p class="post-meta">
                      <strong>By: </strong><span><?php the_author_posts_link(); ?></span> | 
                      <strong>On: </strong><span><?php the_date(); ?> <?php the_time(); ?></span> | 
                      <strong>In: </strong><span><?php the_category(','); ?></span>
                      
                    </p>
                    <hr>
                  </div>
              <div class="col-12 mx-auto mb-4">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid post-thumb" style="max-height:400px; width:100%;" >
              </div>
              <div class="col-12">
                <div class="row">
                  
                  <div class="col-12">
                    <div class="content"><?php
                      the_content();
                      ?> </div>
                    <div class="tags my-4">
                      <?php the_tags(); ?>
                    </div>
                    <div class="next-prev-post clearfix my-4">
                      <div class="float-left">
                      <?php                       $next_post = get_previous_post();
if ( is_a( $next_post , 'WP_Post' ) ) : ?>
    <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="btn btn-outline-secondary">
    <i class="fas fa-angle-double-left"></i> Previous Post
  </a>
<?php endif;  ?>
                      </div>
                      <div class="float-right">
<?php                       $next_post = get_next_post();
if ( is_a( $next_post , 'WP_Post' ) ) : ?>
    <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="btn btn-outline-secondary">
    Next Post <i class="fas fa-angle-double-right"></i>
  </a>
<?php endif;  ?>
                      </div>
                    </div>
                  </div>



                  <div class="col-12 d-none">
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
        
        <?php
//for use in the loop, list 5 post titles related to first tag on current post
$tags = wp_get_post_tags($post->ID);
if ($tags) {
echo 'Related Posts';
$first_tag = $tags[0]->term_id;
$second_tag = $tags[1]->term_id;
$third_tag = $tags[2]->term_id;
$forth_tag = $tags[3]->term_id;
$args=array(
'tag__in' => array($first_tag,$second_tag,$third_tag,$forth_tag ),
'post__not_in' => array($post->ID),
'posts_per_page'=>5,
'caller_get_posts'=>1
);
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
  ?>
  
<div class="pagination-wrap" style="border-top: 1px solid var(--db);"> <?php 
while ($my_query->have_posts()) : $my_query->the_post(); ?>

<div class="row">
  <div class="col-md-3 col-sm-6">
  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
<img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
<h6 class="mt-2 text-uppercase"><?php the_title(); ?></h6>
</a>
  </div>
</div>

 
<?php
endwhile;
} ?>
</div> <?php
wp_reset_query();
}
?>
        
        <div class="pagination-wrap" style="border-top: 1px solid var(--db);">
          <?php comments_template(); ?>
        </div>
      </div>

      
  </section>

<?php get_footer(); ?>