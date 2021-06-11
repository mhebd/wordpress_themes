<article class="rp-content card mb-4">
  <div class="row card-body">
    <?php 
      if( is_single()  || is_page() ){
        ?> 
          <?php 
            if( has_post_thumbnail() ){
              ?>
              <div class="col-12 mb-5"> 
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid post-thumb">
              </div>
              <?php
            }
          ?>
          <div class="col-12">
            <div class="rpt-content">
              <h3 class="title mb-3">
                <?php the_title(); ?>
              </h3>
              <div class="post-meta mb-5">
                <span class="pr-4">Last Update On: <em><?php the_date(); ?></em></span>
                <?php 
                  if( ! is_page() ){
                    ?> 
                    <span class="pr-3">In: <em><?php the_category( ', ' ); ?></em></span> 
                    <span class="pr-3"> <em><?php echo gt_get_post_view(); ?></em></span>
                    <?php
                  }
                ?>
              </div>
              <div class="post-content text-justify">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
      <?php
      } else {
        ?> 
          <div class="col-sm-6 mb-3"> 
            <a href="<?php the_permalink(); ?>" class="">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid post-thumb">
            </a>
          </div>
          <div class="col-sm-6">
            <div class="rpt-content">
              <h3 class="title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h3>
              <div class="post-meta">
                <span class="pr-3">By: <em><?php echo get_the_author_posts_link(); ?></em></span>
                <span class="pr-3">In: <em><?php the_category( ', ' ); ?></em></span>
                <span class="">On: <em><?php the_date(); ?></em></span>
              </div>
              <div class="post-content">
                <?php the_excerpt(); ?>
              </div>
            </div>
          </div>
        <?php
      }
    ?>
  </div>
</article>