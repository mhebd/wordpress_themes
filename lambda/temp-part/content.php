    <article class="single-post index-page">
      <?php if( is_single() || is_page() ) { ?> 
        <h2 class="post-title text-center"><?php the_title(); ?></h2>
        
        <div class="post-meta text-center mb-5">
        
        <span><em>Last Update On: <?php the_date(); ?></em></span>
        
        </div> 
        <hr>
      <?php } ?>

      <div class="post-thumb">
        <a href="<?php the_permalink(); ?>">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
        </a>
      </div>

      <?php if( is_single() || is_page() ) { 

      } else { ?>
        <a href="<?php the_permalink(); ?>">
          <h2 class="post-title"><?php the_title(); ?></h2>
        </a>
        <div class="post-meta">
          <span><em>By: <?php echo get_the_author_posts_link(); ?></em></span>,
          <span><em>On: <?php the_date(); ?></em></span>,
          <span><em>In: <?php the_category(', '); ?></em></span>
        </div> <?php  
      } ?>

      
        <?php if( is_single() || is_page() ) { ?>
          <div class="post-content mt-3 pt-4"> 
          
          <?php
          the_content();
        } else { ?>
          <div class="post-content excerpt"> 
          <?php
          the_excerpt();
          ?>
        <a href="<?php the_permalink(); ?>" class="read-more">Continue &raquo; </a> <?php
        }?>
      </div>
    </article>