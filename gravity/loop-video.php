<section class="p-4 bg-light post my-3">
  <div class="post-aside">
    <div class="post-meta">
      <?php the_author_posts_link(); ?>@<?php the_time('M, d, Y'); ?>
    </div>
    <div class="post-content">
      <?php the_content(); ?>
    </div>
  </div>
</section>