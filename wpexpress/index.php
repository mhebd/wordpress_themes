<!-- Header part including -->
<?php

  //Template Name: Blog Theme


get_header(); ?>

  <section class="breadcrumb-wrap container-fluid mb-4" id="bc-wrpa" style="background: url('<?php header_image(); ?>');">
  <div class="container">
    <div class="breadcrumb">
      <?php get_breadcrumb(); ?> &nbsp;&nbsp;&#187;&nbsp;&nbsp; Blog
    </div>
  </div>
</section>

  <section class="blog-post-wrap container-fluid" id="bp-wrap">
    <div class="container">
      <div class="section-heading text-center">
        <h2><?php echo get_theme_mod('latest_post_heading', 'Our latest post'); ?></h2>
      </div>
      <div class="row blog-posts">
        <?php
          if(have_posts()) :
            while(have_posts()) :
              the_post();  
              
              get_template_part('tem-part/content'); 

              
            endwhile;
          else : ?>
            <div class="lead display-3">
              There are Nothing found!!
            </div> <?php
          endif;
        ?>
      </div>
    </div>
  </section>

  <section class="pagination-wrap container-fluid" id="pagination">
    <div class="container">
      
        <?php wpbeginner_numeric_posts_nav(); ?>
      
    </div>
  </section>

<!-- Footer part including -->
<?php get_footer(); ?>