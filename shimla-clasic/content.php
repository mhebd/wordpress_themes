<article class="card sp-wrap mb-5">
              
  <div class="card-body">
    <?php if( is_single() ) {
      ?> 
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="card-img-top img-fluid mb-5">
      <?php
    } else {
      ?>
        <a href="<?php the_permalink(); ?>" class="">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="card-img-top img-fluid mb-4">
        </a>
      <?php
    } ?>
    <h3 class="post-title">
      <?php if( is_single() || is_page() ) {
        the_title();
      } else {
        ?>
        <a href="<?php the_permalink(); ?>" class="">
          <?php the_title(); ?>
        </a>
        <?php
      } ?>
    </h3>


      <?php if( is_page() ) {
        ?>
        <div class="mb-5">
          
        </div>
        <?php
      } else {
        ?>
        <div class="post-meta">
          <span><strong>By:</strong> <em><?php echo get_the_author_posts_link(); ?></em></span> | 
          <span><strong>In:</strong> <em><?php the_category( ', ' ); ?></em></span> | 
          <span><strong>On:</strong> <em><?php the_date(); ?></em></span>
        </div>
        <?php
      } ?>
    

    <div class="post-content">
      <?php if( is_single() || is_page() ) {
        the_content(); 
      } else {
        the_excerpt();
      } ?>
    </div>
  </div>
</article>