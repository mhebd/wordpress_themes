

  <footer id="footer" class="py-5">
    <div class="container-xl">
      <div class="footer-widget-wrap">
        <div class="row">

          <?php 
            if( is_active_sidebar('footer-widget') ) {
              dynamic_sidebar('footer-widget');
            }
          ?>
          <!-- footer single widget end -->

        </div>
      </div>
    </div>

    <hr>

    <div class="copyright-wrap">
      <div class="container-xl">
        <div class="row">
          <div class="col-md-6 d-flex justify-content-center justify-content-md-start mb-4 mb-md-1">
            
            <?php
              wp_nav_menu([
                'theme_location'        => 'footer_menu',
                'depth'           => 1,
                'menu_class'      => 'navbar-nav',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
              ])
            ?>

          </div>

          <div class="col-md-6">
            <p class="text-center text-md-right">&copy; <a href="<?php echo home_url(); ?>">Borof Pani</a> <?php echo get_theme_mod('copyright', 'All Rights Reserved 2020'); ?></p>
          </div>
        </div>
      </div>
    </div>
  </footer>










  <?php wp_footer(); ?>


</body>

</html>