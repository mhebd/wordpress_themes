<!-- Header part including -->
<?php get_header(); ?>

  <section class="breadcrumb-wrap container-fluid mb-5" id="bc-wrpa" style="background: url('<?php header_image(); ?>');">
  <div class="container">
    <div class="breadcrumb">
      <p class=""> <a href="<?php echo home_url(); ?>">Home</a> &raquo;
      <?php 
        if( is_category() ) {
          single_cat_title();
        }else if( is_author() ) {
          the_post();
          echo get_the_author();
          rewind_posts();
        } else if( is_tag() ) {
          single_tag_title();
        } else if( is_day() ) {
          echo get_the_date();
        } else if( is_month() ) {
          echo get_the_date('F y');
        } else if( is_year() ) {
          echo get_the_date('Y');
        } else {
          echo 'Anonymous Archive!!';
        }
      ?>
      </p>
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