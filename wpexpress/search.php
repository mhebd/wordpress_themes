<!-- Header part including -->
<?php get_header(); ?>

  <section class="breadcrumb-wrap container-fluid mb-5" id="bc-wrpa" style="background: url('<?php header_image(); ?>');">
  <div class="container">
    <div class="breadcrumb">
      <?php get_breadcrumb(); ?>
    </div>
  </div>
</section>

  <section class="blog-post-wrap container-fluid" id="bp-wrap">
    <div class="container">
      <div class="row blog-posts">
        <?php
          if(have_posts()) :
            while(have_posts()) :
              the_post(); ?>

              <?php get_template_part('tem-part/content'); ?>

              <?php
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