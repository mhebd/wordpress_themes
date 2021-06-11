<?php get_header(); ?>
  <section id="hero-wrapper">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto">
          <div class="mt-5 alert alert-danger">
            <p class="lead display-1 text-danger text-center">oppos!!!</p>
            <p class="lead display-1 text-danger text-center">It's 404 Error!!!</p>
          </div>
          <div class="my-5">
            <p class="text-center"> Go Back To 
              <a href="<?php echo site_url(); ?>">HOME</a>
            </p>
            <span class="text-center lead d-block">or</span>
            <p class="text-center">
              Search What Do You Want
              <?php get_search_form(); ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>





<?php get_footer(); ?>