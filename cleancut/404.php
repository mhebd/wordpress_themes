  <!-- get header -->
  <?php get_header(); ?>

  <section class="contaner-fluid bg-warning">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="py-5">
            <p class="lead display-3 text-danger">Something Is Wrong!!</p>
            <p class="lead display-3 text-danger mb-4">It's A 404 Error</p>
            <a href="<?php echo home_url(); ?>" class="">Go Back To Home Page</a> Or Search what do you want
            <div class="search-form mt-5">
              <?php get_search_form(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- get footer -->
  <?php get_footer(); ?>
