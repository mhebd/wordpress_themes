<div class="col-lg-3 col-md-4 left-sidebar">
        <div class="left-sidebar-heading">
          <div class="heading d-none d-md-block">
            <h3 class="text-center"><?php echo get_theme_mod('left-sidebar-heading', 'Categoris') ?></h3>
          </div>
          <div class="icon l-icon-close d-block d-md-none text-center">
            <i class="fas fa-angle-double-right"></i>
          </div>
          <div class="icon l-icon-open d-block d-md-none text-center">
            <i class="fas fa-angle-double-left"></i>
          </div>
        </div>

        <div class="left-sidebar-widgets">
          <?php 
            if( is_active_sidebar('left-sidebar-wid') ) {
              dynamic_sidebar( 'left-sidebar-wid' );
            }
          ?> 
        </div>

      </div>