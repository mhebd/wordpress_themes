<?php get_header(); ?>

  <!-- Main content wrapper area
  *****************************************************************
  ***************************************************************** -->
  <main id="main" class="mt-5 pt-3">

    <!-- Featured section
    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
    <section id="featured" class="">
      <div class="container-xl mx-auto">
        <div class="row no-gutters fp-wrap">
          <div class="col-md-6 sec-1">
            <?php 
              $f_cat_name = get_theme_mod('featured', 'featured');
              $featured1 = new WP_Query([
                'post_type'         => 'post',
                'posts_per_page'    => 1,
                'category_name'          => $f_cat_name,
              ]);

              if( $featured1->have_posts() ) :
                while( $featured1->have_posts() ) :
                  $featured1->the_post();
                  
                  get_template_part('tem-part/content', 'catpost');

                endwhile;
              else :
                echo '<p class="lead">There is no post for featured!!</p>';
              endif;
            ?>
          </div>
          <div class="col-md-6 sec-2">
            <div class="row no-gutters">
              <?php 
                $featured2 = new WP_Query([
                  'post_type'         => 'post',
                  'posts_per_page'    => 2,
                  'offset'            => 1,
                  'category_name'          => $f_cat_name,
                ]);

                if( $featured2->have_posts() ) :
                  while( $featured2->have_posts() ) :
                    $featured2->the_post();
                ?>
                <div class="col-12">
                  <?php  get_template_part('tem-part/content', 'catpost'); ?>
                </div>
                <?php
                  endwhile;
                else :
                  echo '<p class="lead">There is no post for featured!!</p>';
                endif;
              ?>
            </div>
            
          </div>
        </div>
      </div>
    </section>









    <!-- category section one
    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
    <section id="cat-one" class="mt-5">
      <div class="container-xl mx-auto">
        <div class="row">
          <div class="col-lg-8 mb-4">
            <div class="section-heading mb-5">
              <h3><?php echo get_theme_mod('section-1h', 'lifestyle'); ?></h3>
              <a href="<?php echo home_url().'/category/'.get_theme_mod('section-1') ?>" class="text-uppercase rdm">Read More <i class="fas fa-angle-double-right"></i></a>
            </div>
            <div class="row s1p-wrap">
              <div class="col-md-8 mb-3 sec-1">
                <?php 
                  $s1_cat_name = get_theme_mod('section-1', 'travel');
                  $secOne1 = new WP_Query([
                    'post_type'         => 'post',
                    'posts_per_page'    => 1,
                    'category_name'          => $s1_cat_name,
                  ]);

                  if( $secOne1->have_posts() ) :
                    while( $secOne1->have_posts() ) :
                      $secOne1->the_post();
                      
                      get_template_part('tem-part/content', 'catpost');

                    endwhile;
                  else :
                    echo '<p class="lead">There is no post for featured!!</p>';
                  endif;
                ?>
              </div>
              <div class="col-md-4">
                <div class="sec-2">
                    <?php 
                      $secOne2 = new WP_Query([
                        'post_type'         => 'post',
                        'posts_per_page'    => 2,
                        'offset'            => 1,
                        'category_name'          => $s1_cat_name,
                      ]);

                      if( $secOne2->have_posts() ) :
                        while( $secOne2->have_posts() ) :
                          $secOne2->the_post();
                      ?>
                      <div class="mb-3">
                        <?php  get_template_part('tem-part/content', 'catpost'); ?>
                      </div>
                      <?php
                        endwhile;
                      else :
                        echo '<p class="lead">There is no post for featured!!</p>';
                      endif;
                    ?>
                </div>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block mb-4">
            <div class="s1-widget">
              <div class="admin-info card mt-5">
                <div class="card-body">
                  <h3 class="lsw-title mb-4 mt-4">About Me</h3>
                  <div class="admin-avatar d-flex justify-content-center mb-5">
                    <?php
                      echo get_avatar(1, 180, '', 'Author Img', [
                        'class'   => 'img-fluid rounded rounded-circle'
                      ]);
                    ?>
                  </div>
                  <div class="admin-info">
                    <h3 class="name text-center"><?php the_author_meta('display_name', '1') ?></h3>
                    <div class="desc mb-4">
                      <?php 
                        nl2br(the_author_meta('description', '1'));
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>









    <!-- Populer post
    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
    <?php 
            $count = 0;
            $populer = new WP_Query([
              'post_type'         => 'post',
              'posts_per_page'    => 4,
              'meta_key' => 'post_views_count',
              'orderby' => 'meta_value_num',
              'order'             => 'DESC',
            ]);

            if( $populer->have_posts() ) : 
    ?>

    <section id="populer" class="d-none d-sm-block mt-5">
      <div class="container-xl mx-auto">
        <div class="section-heading mb-5">
          <h3>populer</h3>
        </div>
        <div class="d-flex justify-content-center populer">
            <?php
              while( $populer->have_posts() ) :
                $count ++;
                $populer->the_post();
            ?>
            <div class="item<?php echo $count; ?> item mb-5">
              <?php  get_template_part('tem-part/content', 'catpost'); ?>
            </div>
            <?php
              endwhile;
            ?>
        </div>
      </div>
    </section>
    
    <?php
       else :
         echo '<p class="lead">There is no post for featured!!</p>';
      endif;
    ?>









    <!-- category section Two
    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
    <section id="cat-two" class="mt-5">
      <div class="container-xl mx-auto">
        <div class="row">
          <div class="col-lg-8 mb-4">
            <div class="section-heading mb-5">
              <h3><?php echo get_theme_mod('section-2h', 'travel'); ?></h3>
              <a href="<?php echo home_url().'/category/'.get_theme_mod('section-2'); ?>" class="text-uppercase  rdm">Read More <i class="fas fa-angle-double-right"></i></a>
            </div>
            <div class="row s2p-wrap s1p-wrap">
                <?php 
                  $s2_cat_name = get_theme_mod('section-2', 'travel');
                  $secTwo1 = new WP_Query([
                    'post_type'         => 'post',
                    'posts_per_page'    => 1,
                    'category_name'     => $s2_cat_name,
                  ]);

                  if( $secTwo1->have_posts() ) :
                    while( $secTwo1->have_posts() ) :
                      $secTwo1->the_post();
                  ?>
                  <div class="col-12 mb-4">
                    <?php  get_template_part('tem-part/content', 'recent'); ?>
                  </div>
                  <?php
                    endwhile;
                  else :
                    echo '<p class="lead">There is no post for featured!!</p>';
                  endif;
                ?>
              <div class="col-12 sec-2">
                <div class="row ">
                  <?php 
                    $secTwo2 = new WP_Query([
                      'post_type'         => 'post',
                      'posts_per_page'    => 3,
                      'offset'            => 1,
                      'category_name'          => $s2_cat_name,
                    ]);

                    if( $secTwo2->have_posts() ) :
                      while( $secTwo2->have_posts() ) :
                        $secTwo2->the_post();
                    ?>
                    <div class="col-md-4 mb-3">
                      <?php  get_template_part('tem-part/content', 'catpost'); ?>
                    </div>
                    <?php
                      endwhile;
                    else :
                      echo '<p class="lead">There is no post for featured!!</p>';
                    endif;
                  ?>
                </div>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block mb-4">
            <div class="s2-sidebar">
              <?php
                if( is_active_sidebar('widget-ad') ) {
                  dynamic_sidebar('widget-ad');
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>










    <!-- category three post
    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
    <section id="populer" class="d-none d-sm-block">
      <div class="container-xl mx-auto">
        <div class="section-heading mb-5">
          <h3><?php echo get_theme_mod('section-3h', 'business'); ?></h3>
        </div>
        <div class="row s3p-wrap populer no-gutters">
          <?php 
            $s3_cat_name = get_theme_mod('section-3', 'technology');
            $section3= new WP_Query([
              'post_type'         => 'post',
              'posts_per_page'    => 4,
              'category_name'     => $s3_cat_name,
            ]);

            if( $section3->have_posts() ) :
              while( $section3->have_posts() ) :
                $section3->the_post();
            ?>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
              <?php  get_template_part('tem-part/content', 'catpost'); ?>
            </div>
            <?php
              endwhile;
            else :
              echo '<p class="lead">There is no post for featured!!</p>';
            endif;
          ?>
        </div>
      </div>
    </section>









    <!-- Recent post section
    %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
    <section id="recent" class="mt-5 pt-4">
      <div class="container-xl mx-auto">
        <div class="row">
          <div class="col-md-8 mb-5">
            <div class="section-heading mb-5">
              <h3><?php echo get_theme_mod('recent', 'New In Blog'); ?></h3>
            </div>
            <div class="rp-wrap">
              <?php 
                if( have_posts() ) :
                  while( have_posts() ) :
                    the_post();
              
                    get_template_part('tem-part/content', 'recent');

                  endwhile;
                else :
                  echo '<p class="lead">There is no post found</p>';
                endif;
              ?>
            </div>
            <section class="pagination-wrap mt-5">
              <?php posts_pagination_nav(); ?>
            </section>
          </div>
          <div class="col-md-4 mb-5">
            <?php 
              get_sidebar();
            ?>
          </div>
        </div>
      </div>
    </section>







  </main>

 







<?php get_footer(); ?>