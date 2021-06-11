

    <footer id="footer" class="theme-bg text-light pt-5">
      <div class="container-fluid">

        <div class="footer-widget-wrap">
          <div class="row">
            
             <?php 
              if( is_active_sidebar('footer-sidebar')){
                dynamic_sidebar('footer-sidebar');
              }
             ?>
            <!-- single widget end -->

          </div>
        </div>
        <!-- footer widget-wrap end -->

        <div class="footer-copyright-wrap py-4">
          <div class="row">
            <div class="col-md-6 mb-3 order-1 order-md-2">
              <div class="footer-social-menu d-flex justify-content-center justify-content-md-end">

                <div class="social-menu-widget">
                  <?php 
                    if( is_active_sidebar('footer-social-sidebar') ) {
                      dynamic_sidebar('footer-social-sidebar');
                    }
                  ?>
                </div>
                
              </div>
            </div>
            <div class="col-md-6 mb-3 order-2 order-md-1">
              <div class="copywright-text d-flex justify-content-center justify-content-md-start">
                <p class="">&copy; <a href="<?php echo home_url(); ?>" class="text-light"><?php bloginfo('name'); ?></a> <?php echo get_theme_mod('copyright', 'All Rights Reserved') ?></p>
              </div>
            </div>
          </div>
        </div>
        <!-- footer copyright wrap -->
      </div>
    </footer>
    <!-- Footer section end -->

  </div>





  <?php wp_footer(); ?>

</body>

</html>