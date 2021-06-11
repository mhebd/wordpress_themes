
<section class="pt-5 bg-light"></section>


  <footer class="container-fluid footer-wrap" id="footer">
    <div class="footer-widget-wrap">
      <div class="row">
        <?php 
          if( is_active_sidebar('footer-wid') ) {
            dynamic_sidebar( 'footer-wid' );
          }
        ?>
      </div>
    </div>

    <div class="footer-copywrite-wrap">
      <p class="lead text-center">© <a href="<?php  echo home_url(); ?>"><?php bloginfo('name'); ?></a><?php echo get_theme_mod('foote-copywrite', '2020- All right Reserved') ?></p>
    </div>
  </footer>




  <?php wp_footer(); ?>

</body>

</html>