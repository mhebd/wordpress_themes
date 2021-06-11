
    <!-- friends4ever footer section
    ====================================================== -->
    <footer id="site-footer" class="pt-5 pb-3">
      <div class="footer-menu">
        <div class="mx-auto">
          <?php
            wp_nav_menu([
              'theme_location'      => 'secondary',
              'menu_class'          => 'nav justify-content-center',
              'depth'               => 1,
              'fallback_cb'         => 'WP_Bootstrap_Navwalker::fallback',
              'walker'              => new WP_Bootstrap_Navwalker(),
            ]);
          ?>
        </div>
      </div>

      <div class="copyright-wrap">
        <p class="text-center">
          Copyright &copy; <a href="<?php echo home_url(); ?>" class=""><?php bloginfo('name'); echo Date(' Y'); ?></a>  All Rights Reserved.
        </p>
      </div>
    </footer>

  </div>


  <?php wp_footer(); ?>
</body>
</html>