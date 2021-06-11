


<?php
    if(is_single() || is_page()) {
      ?> <div class=""> <?php
    } else {
      ?> <div class="col-lg-4 col-md-6 mb-5 not-singl "> <?php
    } 
  ?>
  <div class="single-post-wrap">
    <?php
      if(has_post_thumbnail()) {
        if( is_single() || is_page() ) {
          ?> 
            <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid thumbnail mb-4">
          
          <?php
        } else {
          ?> 
            <a href="<?php the_permalink(); ?>">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid thumbnail mb-4">
          </a>
          <?php
        }
      }; 
      
     if( is_single() || is_page() ) { ?>
    <div class="col-lg-7 col-md-9 mx-auto"> <?php
     } else { ?>
     <div class=""> 
     <?php } ?>
      <div class="post-content">
        <?php
          if(! is_single()) {
            ?> <div class="post-cat">
            <?php the_category(', '); ?>
          </div> <?php
          }
        ?>
        <div class="post-heading">
          <?php if( is_single() || is_page() ) {
            ?> <h2 class=" text-dark sph mb-3"><?php the_title(); ?> </h2> <?php
          } else { ?>
          <a href="<?php the_permalink(); ?>" class="">
            <?php the_title(); ?>
          </a> <?php 
          } ?>
        </div>
        <?php
          if(is_single() || is_page() ) {
            ?>
          <div class="post-meta text-secondary mb-5">
            <span><i class="fas fa-user"></i> </span><em class="mr-4"><?php the_author_posts_link(); ?></em>   

            <span><i class="fas fa-calendar"></i> </span><em class="mr-4"><?php the_date(); ?></em>

            <?php if( has_category() ) {
              ?> <span><i class="fas fa-folder"></i> </span><em><?php the_category(', '); ?></em> <?php
            }; ?> 
            

            <hr>
          </div>
        <?php
          }
        ?>
        <div class="post-text">
          <?php
            if(is_single() || is_page()) {
              the_content();
            } else { 
              the_excerpt();
            }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>