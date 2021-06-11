  <!-- //Header part including -->
  <?php get_header(); ?>




  <section class="container-fluid main-content-wrap" id="main-wrap search">
    <div class="row no-gutters main-content">

      <?php get_template_part('tem-part/left-sidebar') ?>

      <div class="col-lg-6 col-md-8">
        <div class="posts-wrap">
          <div class="posts-wrap-heading">
            <h3 class="text-center">Search Result For: <?php the_search_query(); ?></h3>
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
