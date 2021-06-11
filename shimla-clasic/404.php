<?php get_header(); ?>

  <!-- Main section start
  ================================================================ -->
  <main id="main" class="py-5 mt-5">
    <div class="container-xl mx-auto">
      <div class="404-wrap alert alert-danger text-center">
        <div class="display-1">404</div>
        <div class="display-4">It's a 404 Error!</div>
        <div class="row py-5">
          <div class="col-md-6 mx-auto">
            <p class="lead text-dark">Go Back To <a href="<?php echo home_url(); ?>">Home</a></p>
            <p class="lead text-dark">Or</p>
            <p class="lead text-dark">Search What Do You Want??</p>
            <?php echo get_search_form(); ?>
          </div>
        </div>
      </div>
    </div>
  </main>





<?php get_footer(); ?>