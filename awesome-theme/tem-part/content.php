
    <?php if( is_single() || is_page() ){
      ?> <div class="col-md-12 mb-4"> <?php
    } else {
      ?> <div class="col-md-4 col-sm-6 mb-5"> <?php
    } ?>
  
    <article class="single-post-wrap">
      <div class="card">
        <?php if( !is_page() ) { ?>
          <div class="card-header">
          <a href="<?php the_permalink(); ?>">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid post-thumb">
          </a>
          <?php if( !is_single() ){
            ?> <div class="post-cat"><?php the_category(', '); ?></div> <?php
          } ?>
        </div> <?php
        } ?>
        <div class="card-body">
          <div class="post-title mb-3">
            <?php if( is_single() || is_page() ){
              ?> 
              <h4><?php the_title(); ?></h4>
            <?php
            } else {
              ?> <a href="<?php the_permalink(); ?>">
              <h4><?php the_title(); ?></h4>
            </a> <?php
            } ?>
          </div>
          <div class="post-meta mb-2">
            <?php if( is_single() || is_page() ){
              ?> <span><strong>Last Update On:</strong> <?php the_date(); ?></span> | <span><strong>In:</strong> <?php the_category(', ') ?></span>  <?php
            } else {
              ?> <span><strong>By:</strong> <?php echo get_the_author_posts_link(); ?></span> | <span><strong>On:</strong> <?php the_date(); ?></span> <?php
            } ?>
          </div>
          <div class="post-content">
            <?php if( is_single() || is_page() ){
              the_content(); 
            } else {
              the_excerpt();
            } ?>
          </div>
        </div>
      </div>
    </article>
  </div>