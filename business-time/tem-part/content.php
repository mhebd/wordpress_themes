<article class="single-post-wrap clearfix">

    <?php 
      if( is_single() || is_page() ) { ?>
        <div class="float-none post-img single-post-img  w-100 mb-5"> <?php
      } else { ?>
        <div class="float-left post-img  w-25"> <?php
      }
    ?>

    <?php if(has_post_thumbnail()) : ?>
    <a href="<?php the_permalink(); ?>">
    <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
  </a>
      <?php 
      else : 
        if( is_page() ){

        } else {
          ?>
          <a href="<?php the_permalink() ?>">
          <img src="<?php echo get_template_directory_uri(); ?>./img/4.jpg" alt="" class="img-fluid">
          </a>
      <?php
        }
        endif;  
    if( is_single() || is_page() ) { 

    } else {
      ?>
      <small class="bg-dark text-light text-uppercase category-meta px-2 py-1 "><?php the_category(', '); ?></small> <?php
    }
    ?>
    
    
  </div>

  
    <?php 
      if(is_single() || is_page() ) { ?>
        <div class="float-none post-content  w-100"> <?php 
      } else { ?>
        <div class="float-left post-content pl-3 w-75"> <?php
      }
    
    ?>
    <h4 class="heading">
      <?php 
        if(is_single() || is_page()){  
          the_title();  
        } else { ?>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <?php
        }
      ?>

    </h4>

    <div class="post-meta">
      <?php
        if( is_single() || is_page() ){ ?>
          <span>Last Update On: <?php the_date(); ?></span> <?php
        } else { ?>
          <span>By: <?php echo get_the_author_posts_link(); ?>,</span>  <span>On: <?php the_date(); ?></span> <?php
        }
       ?>
    </div>

    <div class="content"><?php
      if(is_single() || is_page() ){
        the_content();
      } else{ 
      the_excerpt(); ?> 
      <?php 
      } ?>
    </<div>
  </div>
</article> 