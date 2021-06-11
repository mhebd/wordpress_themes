
  <footer id="footer-wrap" class="bg-dark text-light">
    <div class="footer-widget-wrap">
      <div class="container">
        <div class="row">
          <?php
            if( is_active_sidebar( 'footer-widget' )) {
              dynamic_sidebar( 'footer-widget' );
            }
          ?>
        </div>
      </div>
    </div>

    <div class="copywright-wrap">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <?php 
              wp_nav_menu([
                'theme_location'      => 'secondary',
                'depth'         => 0,
                'menu_class'      => 'nav justify-content-md-start justify-content-center',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'      => new WP_Bootstrap_Navwalker(),
              ]);
            ?>
          </div>
          <div class="col-md-6">
            <p class="text-md-right text-center">&copy; <?php echo get_theme_mod('copyright', '2020 All Rights Reserved') ?>  <a href="<?php echo site_url(); ?>" class="text-light"><?php bloginfo('name'); ?></a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>


    <div id="gotop" class="gotop-btn">
      <a href="#top" class="btn "><i class="fas fa-angle-double-up"></i></a>
    </div>



      <script>
        	function Scroll() {
                var top = document.getElementById('gotop');
            		var ypos = window.pageYOffset;
            		if (ypos > 350) {
               			 top.classList.add('show');
            		} else {
                		top.classList.remove('show');
            		}
        	}
        	window.addEventListener("scroll", Scroll);
    	</script>


      <script>
        jQuery(document).ready(function($){
          var lastScrollTop = 20;
          $(window).scroll(function(event){
            var st = $(this).scrollTop();
            if (st > lastScrollTop){
              $('#header').addClass('scrolling-down');
              $('#header').removeClass('scrolling-up');
            } else {
              $('#header').addClass('scrolling-up');
              $('#header').removeClass('scrolling-down');
            }
            lastScrollTop = st;
          });
        })
      </script>











  <?php wp_footer(); ?>
</body>
</html>