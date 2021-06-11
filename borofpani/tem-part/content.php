<?php if( is_single() || is_page() ) { ?>
  <div class="col-12 single-page-wrap"> <?php 
} else { ?>
  <div class="col-lg-4 col-md-6">
<?php } ?>
    <article class="singel-post-container mb-4">
    
      
      <?php 
        if( is_single() || is_page() ) { ?>
          <div class="card"> <?php
        } else { ?>
        <div class="card">
          <div class="card-header">
            <div class="post-thumb">
              <a href="<?php the_permalink(); ?>">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
              </a>
            </div>
          </div> <?php
        }
      ?>
        
        <?php 
          if( is_single() || is_page() ) { ?>
            <div class="card-body mt-4">
              <h3 class="post-title h3 text-center my-3"><?php the_title(); ?></h3>
               <div class="post-meta mb-5 text-center">
                <span>Last Update On: <em><?php the_date(); ?></em></span>
              </div>
                <div class="post-content">
          <?php if( is_single() || is_page() ) {
            the_content(); 
          } else {
             the_excerpt(); 
          }?>
        </div>
      </div> <?php
          } else { ?>
      <div class="card-body">
        <a href="<?php the_permalink(); ?>" class="post-title h5 my-3"><?php the_title(); ?></a>
        <div class="post-meta mb-2">
          <span><i class="far fa-user"></i> <em><?php echo get_the_author_posts_link(); ?></em></span>

          <span><i class="far fa-calendar"></i> <em><?php the_date(); ?></em></span>

          <span><i class="far fa-folder"></i> <em><?php the_category(', '); ?></em></span>
        </div>
        <div class="post-content">
          <?php if( is_single() || is_page() ) {
            the_content();
          } else {
             the_excerpt(); 
          }?>
        </div>
      </div> <?php
    }
        ?>
    </div>
    </article>
  </div>
  <!-- singel post end -->