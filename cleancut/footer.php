
  
    <section class="container-fluid footer-wrap text-light" id="footer-wrap">

        <div class="footer-widget-wrap">
        <div class="container">
          <div class="row">
            <?php
            
              if(is_active_sidebar('footerwid1')) {
                dynamic_sidebar('footerwid1');
              }
            
            ?>
            <div class="col-md-6 mb-4">
              <div class="row">
              <?php
            
                if(is_active_sidebar('footerwid2')) {
                  dynamic_sidebar('footerwid2');
                }
          
              ?>
              </div>
            </div>
          </div>
        </div>
        </div>

        <div class="footer-copywrite-wrap">
          <div class="container">
            <div class="copywrite text-center">
              Copywrite &copy; <a href="<?php echo home_url(); ?>" class=""><?php bloginfo('name'); ?></a> <?php the_time('Y'); ?> All Right Resurved
            </div>
          </div>
        </div>

    </section>

    <a href="#top" class="btn go-top-btn" id="gtb">
      <i class="fas fa-angle-double-up"></i>
    </a>

    <script>
        	function Scroll() {
            		var top = document.getElementById('gtb');
            		var ypos = window.pageYOffset;
            		if (ypos > 350) {
               			 top.style.display = 'block';
            		} else {
                		top.style.display = 'none';
            		}
        	}
        	window.addEventListener("scroll", Scroll);
    	</script>




<?php wp_footer(); ?>
</body>
</html>