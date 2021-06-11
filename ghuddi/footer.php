



    <!-- Footer section
    ============================================= -->
    <footer class="footer-wrap">
      <div class="container-fluid">
        <div class="footer-widget-wrap">
          <div class="row">
            
            <?php
              if( is_active_sidebar('footer-widget') ) {
                dynamic_sidebar('footer-widget');
              }
            ?>
              
          </div>
        </div>
  
        <div class="footer-copyright-wrap">
          <div class="row">
            <div class="col-md-6 mb-4 d-flex justify-content-md-start justify-content-center">
              <?php 
                if( is_active_sidebar('f-social')) {
                  dynamic_sidebar('f-social');
                }
              ?> 
            </div>

            <div class="col-md-6 mb-4 d-flex justify-content-md-end justify-content-center">
              <p class="">&copy; <a href="<?php echo home_url(); ?>" class="text-light"><?php bloginfo('name'); ?></a> <?php echo get_theme_mod('copyright', '2020- All Rights Reserved'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  
  </div>







  <?php wp_footer(); ?>
  
</body>
</html>