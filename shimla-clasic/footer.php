



  <!-- Footer section start
  =============================================== -->
  <footer id="footer" class="">
    <div class="container-xl mx-auto">
      <div class="fw-wrap pt-5">
        <div class="row">
          <?php 
            if( is_active_sidebar('footer-widgets') ) {
              dynamic_sidebar('footer-widgets');
            } 
          ?>
        </div>
      </div>   

      <div class="fc-wrap pt-4">
        <div class="row">
          <div class="col-md-6 mb-4 d-flex justify-content-md-start justify-content-center">
            <?php 
              if( is_active_sidebar( 'social' ) ) {
                dynamic_sidebar('social');
              }
            ?>
          </div>
          <div class="col-md-6 mb-4 d-flex justify-content-md-end justify-content-center">
            <p class="copyright">
              Copyright &copy; <a href="<?php echo home_url(); ?>" class="text-light"><?php bloginfo('name'); ?></a> <?php echo get_theme_mod('copyright', '2020- All Rights Reserved') ?>
            </p>
          </div>
        </div>
      </div>         
    </div>
  </footer>




  








  <?php wp_footer(); ?>

</body>
</html>