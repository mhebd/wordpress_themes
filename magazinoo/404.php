<?php get_header(); ?>

  <!-- Main content wrapper area
  *****************************************************************
  ***************************************************************** -->
  <main id="main" class="mt-5 pt-5">

    <!-- Recent post section
    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
    <section id="recent" class=" pt-4">
      <div class="container-xl mx-auto">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="alert alert-danger pt-5">
              <div class="text-center">
                <div class="display-1 font-weight-bold"><strong>404!</strong></div>
                <div class="display-4 font-weight-bold">It's A <strong>404!</strong> Error</div>
                <div class="lead pt-5 mt-5">Go back to <a href="<?php echo home_url(); ?>" class="text-success">HOME</a></div>
                <p class="">Or</p>
                <p class="lead">Search, What Do You Want?</p>
                <div class="mx-auto text-center py-5 mb-5">
                  <?php get_search_form(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

 







<?php get_footer(); ?>