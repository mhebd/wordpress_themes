

  <article class="single-post">
    <div class="row">
    <?php
      if(has_post_thumbnail()) {
          if(is_single()) {
          ?> <div class="col-12 mb-3"> <?php
        } else {
          ?> <div class="col-sm-5 mb-3"> <?php
        } 
            ?>  <a href="<?php the_permalink(); ?>" class="">
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-thumbnail">  
                </a>
          </div> <?php
      }
    
    ?>
      
      <?php 
      if(is_single() || is_page() ) {
        ?> <div class="col-12 mb-3">
          <h2 class="post-heading"><?php the_title(); ?></h2> 
         <?php
      } else {
        ?> <div class="col-sm-7 mb-3">
        <a href="<?php the_permalink(); ?>" class="post-heading">
          <h2 class=""><?php the_title(); ?></h2> 
        </a> <?php
      }
      ?>
      
        
        <?php 
          if( is_single() ) {
            ?> <div class="post-meta">
            <strong>Posted In: </strong> <span><?php the_category( ', ') ?></span> | 
            <strong>Posted On: </strong> <span><?php the_date(); ?></span>
          </div> <?php
          } else {
            ?> <div class="post-meta not-single">
            <span>Last Update On: </span>
            <span><?php the_date(); ?></span>
          </div>  <?php
          }
        ?>
        <div class="post-content">
          <?php if(is_single() || is_page()){
            the_content();
          } else {
            the_excerpt();
            } ?>
        </div> 
        <?php 
          if(  is_single() ||  is_page()) {
            
          } else {
            ?> <div class="read-more">
            <a href="<?php the_permalink(); ?>" class="">
              Read More <i class="fas fa-long-arrow-alt-right"></i>
            </a>
          </div> <?php
          }
        ?>
        
      </div>
    </div>
  </article>
  