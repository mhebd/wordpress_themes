
        <footer>
            <div class="container-fluid bg-dark text-white-50 ">
                <div class="container py-4">
                    <div class="footer-wrapper">
                        <div class="footer-full-width-widget">

                        </div> <!-- footer full width widget end-->

                        <div class="footer-widget-wrapper">
                            <div class="row">
                            <?php
                              if( is_active_sidebar('footerside') ){
                                dynamic_sidebar('footerside');
                              }
                            ?>
                                
                            </div>
                        </div> <!-- footer widget wrapper end -->
                    </div>
                </div>

                <div class="copy-write-area">
                    <div class="container">
                        <div class="footer-copy-write-wrapper wow animated fadeIn">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="text-md-left text-center">&copy; All Right Resurved <a href="#">Learn
                                            Something New</a></p>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-md-right text-center">Design By: <a href="#">Mehedi Hassan</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>



    </div> <!-- container wrapper end -->


  <script>
    function Scroll() {
  var top = document.getElementById('go-top');
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