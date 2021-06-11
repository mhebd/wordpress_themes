<?php if(has_post_thumbnail()) { ?>
<div class="featured-post-img ">
  <a href="<?php the_permalink(); ?>">
    <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid w-100 h-100">
  </a>
</div> <?php 
} ?>
<div class="featured-post-content">
  <small class="bg-dark text-light text-uppercase category-meta px-2 py-1 "><?php the_category(' '); ?></small>

  <h4>
    <a href="<?php the_permalink(); ?>" class="text-light"><?php the_title(); ?></a>
  </h4>
</div>