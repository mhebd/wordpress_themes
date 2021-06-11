

  <!-- Footer section
  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
  <footer id="footer" class="mt-5 py-5" 
    style="
      <?php 
        if( get_theme_mod('theme-footer-bg') ) {
          ?>
            background-image:linear-gradient( rgba(0, 0, 0, 0.719),rgba(0, 0, 0, 0.719)), url(<?php echo get_theme_mod('theme-footer-bg', get_bloginfo('template_directory').'/img/1.jpg');
      ?>);
          <?php
        }
      ?> 
    ">
    <div class="container-xl mx-auto pt-5">
      <div class="fw-wrap">
        <div class="row">
          <?php 
            if( is_active_sidebar('footer-widget') ) {
              dynamic_sidebar('footer-widget');
            }
          ?>
        </div>
      </div>
      <div class="fc-wrap">
        <div class="row">
          <div class="col-md-6 mb-4 d-flex justify-content-md-start justify-content-center">
            <?php 
              wp_nav_menu([
                'theme_location'          => 'footer',
                'menu_class'              => 'navbar-nav',
                'depth'                   => 1,
                'fallback_cb'             => 'WP_Bootstrap_Navwalker::fallback',
                'walder'                  => new WP_Bootstrap_Navwalker(),
              ]);
            ?>
          </div>
          <div class="col-md-6 mb-4 d-flex justify-content-md-end justify-content-center">
            <p class="cp-text">Copyright &copy; <a href="<?php echo home_url(); ?>" class="text-light text-uppercase"><?php bloginfo('name'); ?></a> <?php echo get_theme_mod('copyright', '2020 All Rights Reserved'); ?></p>
          </div>
        </div>
      </div>
    </div>
  </footer>













  <?php wp_footer(); ?>
</body>
</html>