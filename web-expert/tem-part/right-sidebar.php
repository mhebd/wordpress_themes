<div class="col-lg-3 col-md-4 right-sidebar">
        <div class="right-sidebar-heading">
          <div class="heading d-none d-lg-block">
            <h3 class="text-center"><?php echo get_theme_mod('right-sidebar-heading', 'more') ?></h3>
          </div>
          <div class="icon r-icon-close d-block d-lg-none text-center">
            <i class="fas fa-angle-double-left"></i>
          </div>
          <div class="icon r-icon-open d-block d-lg-none text-center">
            <i class="fas fa-angle-double-right"></i>
          </div>
        </div>

        <div class="right-sedebar-widgets">
          <div class="accordion" id="wid-accordion">
            <div class="card">
              <div class="card-header">
                <div class="nav">
                  <li class="nav-item active">
                    <a href="#populer-post" data-toggle="collapse" class="nav-link" title="Populer">
                      <i class="fas fa-star"></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#archive" data-toggle="collapse" class="nav-link" title="Archive">
                      <i class="fas fa-clock"></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#comments" data-toggle="collapse" class="nav-link" title="Comments">
                      <i class="fas fa-comment"></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#custom-text" data-toggle="collapse" class="nav-link" title="Text">
                      <i class="fas fa-pen"></i>
                    </a>
                  </li>
                </div>
              </div>

              <div class="collapse show" id="populer-post" data-parent="#wid-accordion">
                <div class="card-body">
                  <?php 
                    if( is_active_sidebar('right-sidebar-pp-wid') ) {
                      dynamic_sidebar( 'right-sidebar-pp-wid' );
                    }
                  ?>
                </div>
              </div>

              <div class="collapse" id="archive" data-parent="#wid-accordion">
                <div class="card-body">
                  <?php 
                    if( is_active_sidebar('right-sidebar-a-wid') ) {
                      dynamic_sidebar( 'right-sidebar-a-wid' );
                    }
                  ?>
                </div>
              </div>

              <div class="collapse" id="comments" data-parent="#wid-accordion">
                <div class="card-body">
                  <?php 
                    if( is_active_sidebar('right-sidebar-rc-wid') ) {
                      dynamic_sidebar( 'right-sidebar-rc-wid' );
                    }
                  ?>
                </div>
              </div>

              <div class="collapse" id="custom-text" data-parent="#wid-accordion">
                <div class="card-body">
                  <?php 
                    if( is_active_sidebar('right-sidebar-ct-wid') ) {
                      dynamic_sidebar( 'right-sidebar-ct-wid' );
                    }
                  ?>
                </div>
              </div>

            </div>
          </div>
        </div>



      </div>