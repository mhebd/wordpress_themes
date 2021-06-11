<?php get_header(); ?>






    <!-- main post section
    ===================================================== -->
    <main class="container-fluid main-sec-wrap pt-5">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto text-center">
          <div class="alert alert-warning">
          <div class="display-1 text-danger">
            404
          </div>

            <h1 class="entry-title"><?php _e( 'Page Not Found', 'twentytwenty' ); ?></h1>

                <div class="intro-text"><p><?php _e( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.', 'twentytwenty' ); ?></p></div>

                <div class="row">
                  <div class="col-md-6 mx-auto">
                    <?php
                      get_search_form(
                        array(
                          'label' => __( '404 not found', 'twentytwenty' ),
                        )
                      );
                    ?>
                  </div>
                </div>

            </div><!-- .section-inner -->

          </div>
        </div>
    </main>



<?php get_footer(); ?>