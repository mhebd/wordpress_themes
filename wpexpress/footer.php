
  <footer class="container-fluid footer-wrap" id="f-wrap">
    <div class="container">
      <div class="footer-widget-wrap">
        <div class="row">
        
        <?php
          if(is_active_sidebar('footer_widget')) {
            dynamic_sidebar('footer_widget');
          }
        ?>
            
        </div>
      </div>
    </div>
      <div class="footer-copywrite-wrap">
        <div class="text-center">
          &copy; <a href="<?php site_url(); ?>" class="text-light"><?php bloginfo('name'); the_date(' Y') ?></a>- All Right Reserved
        </div>
    </div>

    <div class="go-top-btn" id="gtpb">
      <a href="#top" class="">
        <i class="fas fa-angle-double-up"></i>
      </a>
    </div>
  </footer>  


  <?php wp_footer(); ?>
</body>
</html>