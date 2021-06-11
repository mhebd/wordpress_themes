  <!-- //Header part including -->
  <?php get_header(); ?>




  <section class="container-fluid main-content-wrap" id="main-wrap archive">
    <div class="row no-gutters main-content">

      <?php get_template_part('tem-part/left-sidebar') ?>

      <div class="col-lg-6 col-md-8">
        <div class="posts-wrap">
          <div class="posts-wrap-heading">
            <h3 class="text-center">
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
            </h3>
          </div>




            <?php get_template_part('tem-part/content-two') ?>


            
          <section class="pagination-wrap">
            <div class="pagination">
              <?php wpbeginner_numeric_posts_nav() ?>
            </div>
          </section>


        </div>
      </div>


      <?php get_template_part('tem-part/right-sidebar') ?>
    </div>
  </section>



  <!-- //Footer part including -->
  <?php get_footer(); ?>
