<?php get_header(); ?>


  <div class="left-section">

    <section class="error-page  mt-5 ">
      <div class="container-fluid">
        <div class="row mb-5">
          <div class="col-md-10 mx-auto alert alert-danger">
            <div class="text-center text-danger">
              <p class="display-1">404!!</p>
              <p class="display-4">It's a 404 Error!!</p>
              <div class="py-5"></div>
              <p class="lead text-dark">Go Back To <a href="<?php echo home_url(); ?>" class="">HOME</a></p>
              <p>or</p>
              <p class="lead text-dark">Search Something</p>
              <div class="row my-5">
                <div class="col-md-6 col-sm-10 mx-auto">
                  <p><?php echo get_search_form(); ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    


<?php get_footer(); ?>