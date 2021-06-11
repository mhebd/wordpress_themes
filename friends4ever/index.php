<?php get_header(); ?>


    <!-- Friends4ever main section
    =============================================== -->
    <main id="site-main">
      

      <section class="main-section-wrap">
        <div class="row">
          <div class="col-md-8 mb-4">
            <div class="activity-wrap">
              <div class="section-heading">
                <h4>Recent Activity</h4>
              </div>

              <div class="activitys">
                <?php 
                  if( is_active_sidebar('activity') ){
                    dynamic_sidebar('activity');
                  }
                ?>
              </div>
            </div>  
          </div>

          <div class="col-md-4">
            <div class="site-sidebar-wrap">
              <?php 
                if( is_active_sidebar('sidebar-widget') ){
                  dynamic_sidebar('sidebar-widget');
                }
              ?>
            </div>
          </div>
        </div>
      </section>

    </main>
  


<?php get_footer(); ?>