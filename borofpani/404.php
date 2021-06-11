<?php get_header(); ?>


      <section class="hero-post-wrap" style=" background-image: linear-gradient(rgba(0, 0, 0, 0.719),rgba(0, 0, 0, 0.418)) ,url(<?php echo get_theme_mod('theme-banner', get_template_directory_uri().'/img/1.jpg' ) ?>); ">
        <div class="container-xl">
        <div class="hero-post-info">
          <p class="lead text-danger">
            Oppos!!! There is something wrong.
          </p>
        </div>
        </div>
      </section>


      <section class="error-page py-5">
        <div class="container-lg">
          <div class="text-center text-danger">
            <div class="display-1">
              Oppos!!!
            </div>
            <div class="display-1">
              It's A 404 Error
            </div>
            <div class="lead text-dark pt-5">
              <p>
              Go Back To <a href="<?php echo home_url(); ?>">HOME</a>
              </p>

              <p>Or</p>

              <p>Search Something</p>

              <div class="d-flex justify-content-center"><?php echo get_search_form(); ?></div>
            </div>
          </div>
        </div>
      </section>
      







<?php get_footer(); ?>