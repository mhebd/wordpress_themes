


    <footer class="footer text-light px-3 pt-5">
      <div class="footer-widget-wrap"> 
        <div class="row">
          <div class="col-md-6 mb-4">
            <?php 
              if(is_active_sidebar('footer-left')) {
                dynamic_sidebar('footer-left');
              } 
            ?>
          </div>
          <!-- footer left sidebar end -->

          <div class="col-md-6 mb-4">
            <div class="row">
              <?php 
                if(is_active_sidebar('footer-right')) {
                  dynamic_sidebar('footer-right');
                } 
              ?>
            </div>
          </div>
          <!-- footer right sidebar end -->
        </div>
      </div>
      <!-- footer widget end -->

      <div class="copyright-wrap">
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="social-widget-wrap d-flex justify-content-center justify-content-md-start">
              <div class="social-menu">
                <?php if( is_active_sidebar('footer-social')) {
                  dynamic_sidebar('footer-social');
                } ?>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <p class="text-center text-md-right">&copy; <a href="" class="text-light">Lambda</a> <?php echo get_theme_mod('copyright', 'All Rights Reserved 2020') ?></p>
          </div>
        </div>
      </div>
      <!-- copyright wrap end -->
    </footer>
  </section>
  <!-- Full site wrapper -->



  <?php wp_footer(); ?>

</body>

</html>