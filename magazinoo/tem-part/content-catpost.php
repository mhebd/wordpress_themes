  
  <article class="card sp-content">
    <div class="cb">
      <a href="<?php the_permalink(); ?>" class="">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
      </a>
      <div class="pt-content">
        <p class="cat-name"><span><?php the_category(' '); ?></span></p>
        <h3 class="title">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
        <div class="post-meta">
          <span class="pr-3">By: <em><?php echo get_the_author_posts_link(); ?></em></span>
          <span class="">On: <em><?php the_date(); ?></em></span>
        </div>
      </div>
    </div>
  </article>