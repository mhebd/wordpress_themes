<?php get_header(); ?>

    
  <section class="error py-5">
    <div class="row mb-5">
      <div class="col-md-10 mx-auto">
        <div class="text-center text-danger">
          <p class="display-1">404!!</p>
          <p class="display-4">It's a 404 Error!!</p>
          <div class="py-5"></div>
          <p class="lead text-light">Go Back To <a href="<?php echo home_url(); ?>" class="">HOME</a></p>
          <p>or</p>
          <p class="lead text-light">Search Something</p>
          <div class="row my-5">
            <div class="col-md-6 col-sm-10 mx-auto">
              <p><?php echo get_search_form(); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
   

<?php get_footer(); ?>