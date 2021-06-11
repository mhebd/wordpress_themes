
  <footer class="container-fluid footer" id="footer">
    <div class="footer-widget-wrap cf-padding">
      <div class="row">
      <?php 
  if(is_active_sidebar('footer-sidebar')) {
    dynamic_sidebar('footer-sidebar');
  }
?>
      </div>
    </div>
    <div class="copywright-wrap">

    <?php $copy = ot_get_option('copywrite_sec') ?>

      <div class="lead text-center text-capitalize">
         <?php echo $copy; ?>
      </div>

      <?php $designer = ot_get_option('copywrite_designer_sec'); ?>
      <div class="lead text-center">
        <?php echo $designer; ?>
      </div>
    </div>
  </footer>


  <div class="go-top">
    <a href="#top" class="btn btn-success"><i class="fas fa-angle-up"></i></a>
  </div>


  <script>
    
//on scroll add calss

function Scroll() {
            		var top = document.querySelector('.go-top');
            		var ypos = window.pageYOffset;
            		if (ypos > 300) {
               			 top.classList.add('scroll');
            		} else {
                		top.classList.remove('scroll');
            		}
        	}
        	window.addEventListener("scroll", Scroll);
  </script>




  <?php wp_footer(); ?>

  

</body>

</html>