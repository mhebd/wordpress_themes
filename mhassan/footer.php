    <!-- Footer Section -->
    <section id="footer">
        <div class="container-fluid">
            <div class="container">

                <div class="footer-content">
                    <div class="contact-list">
                    <div class="section-heading text-center">
                        <?php if(get_theme_mod('fs-heading')){  ?>
                          <h2 class=""><?php echo get_theme_mod('fs-heading', 'Do you have any project? <span>Let\'s Talk</span>') ?> </h2> <?php
                        } ?> 

                        <?php if(get_theme_mod('fs-title-desc')){ ?>
                          <p class="text-capitalize"><?php echo get_theme_mod('fs-title-desc', 'want to create a beautiful website for you or your business.
                                <br>Then, why are you waiting? let\'s discuss and Design something great!') ?> </p> <?php
                        } ?>
                    </div>
                        

                        <div class="list">
                            <ul class="nav justify-content-center">
                                <li class="nav-item"><a href="<?php if(get_theme_mod('f-skype')){
                                  echo get_theme_mod('f-skype', 'https://join.skype.com/invite/zL0Vx8IHyN9V');
                                } ?>"
                                        target="_blank" class="nav-link skype">Skype <i class="fab fa-skype"></i></a>
                                </li>

                                <li class="nav-item"><a href="<?php if(get_theme_mod('f-linkedin')){
                                  echo get_theme_mod('f-linkedin', 'https://www.linkedin.com/in/mehedi-hassan-emon-b7b2b6174/');
                                } ?>"
                                        target="_blank" class="nav-link linkedin">Linkded In <i
                                            class="fab fa-linkedin-in"></i></a></li>

                                <li class="nav-item"><a href="<?php if(get_theme_mod('f-massenger')){
                                  echo get_theme_mod('f-massenger', 'https://www.facebook.com/mehedihassanemonpro');
                                } ?>"
                                        target="_blank" class="nav-link messenger">Massenger <i
                                            class="fab fa-facebook-messenger"></i></a></li>

                                <li class="nav-item"><a href="<?php if(get_theme_mod('f-telegram')){
                                  echo get_theme_mod('f-telegram', 'https://t.me/mhemon');
                                } ?>" target="_blank"
                                        class="nav-link telegram">Telegram <i class="fab fa-telegram"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="copyright-wrapper text-center">
                        <p class="lead text-capitalize">&copy; <a href="<?php echo site_url(); ?>" class=""
                                style="font-family: 'Courgette', cursive;"><?php bloginfo('name'); ?></a> <?php if(get_theme_mod('copywrite')){
                                  echo get_theme_mod('copywrite', 'Personal Website');
                                } ?> <script>
                                let d = new Date().getFullYear();
                                document.write(d);
                            </script>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Footer Section End -->



  <script>
    // Typed script
jQuery(document).ready(function($){
  var typed3 = new Typed('.type', {
          strings: [
            <?php if(get_theme_mod('typed-text')){
              echo get_theme_mod('typed-text', "
			  'Good At: Html5 & css3',
              'Good At: twitter bootstrap',
              'Good At: Jquery',
              'Good At: javascript',
              'I Will do: parsonal website design',
              'I will do: blog design',
              'I will do: landing page design',
              'I will do: psd to html5 conver'");
            } ?>
          
          ],

          typeSpeed: 30,
          backSpeed: 30,
          backDelay: 1000,
          startDelay: 1000,
          smartBackspace: true, // this is a default
          loop: true
      });
});
// Typed script End
  </script>



    <?php wp_footer(); ?>
</body>

</html>
