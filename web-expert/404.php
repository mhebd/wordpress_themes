  <!-- //Header part including -->
  <?php get_header(); ?>




  <section class="container-fluid main-content-wrap" id="main-wrap home">
    <div class="row no-gutters main-content">

      <?php get_template_part('tem-part/left-sidebar') ?>

      <div class="col-lg-6 col-md-8">
        <div class="posts-wrap">
          <div class="posts-wrap-heading">
            <h3 class="text-center">404 Error!!</h3>
          </div>



          <section class="p-5 alert">
            <p class="alert alert-warning laed">There is nothing found!!</p>
            <div class="alert alert-success">
              <a href="<?php echo home_url(); ?>" class="text-center">&laquo; Back To Home</a> 
              <span>Or search anything...</span>
            </div>
            <div class="alert alert-light">
              <?php get_search_form(); ?>
            </div>
          </section>


        </div>
      </div>


      <?php get_template_part('tem-part/right-sidebar') ?>
    </div>
  </section>



  <!-- //Footer part including -->
  <?php get_footer(); ?>
