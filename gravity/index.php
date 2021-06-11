<?php get_header(); ?>

  <section class="container-fluid hero-post-sec" id="hero-post">
    <div class="row cf-padding">
      <div class="col-md-8 mb-4 psw">
        <div class="post-slider-wrap">
          <div class="owl-carousel">

          <?php
            $sliderpost = new WP_Query(
              array(
                'post_type' => 'customslider',
                'posts_per_page' => '5',
              )
            );

            if($sliderpost->have_posts()) :
              while($sliderpost->have_posts()) :
                $sliderpost->the_post(); ?>

            <div class="item">
              <div class="post-img">
                <a href="<?php the_permalink(); ?>" class="">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
              </a>
              </div>
              <div class="post-content p-5">
                <div class="title">
                <a href="<?php the_permalink(); ?>" class="heading">
                  <h2 style="color: white;"><?php the_title(); ?></h2>
                </a>
                </div>
              </div>
            </div>

                <?php
                endwhile;
                else :
                  ?>
                  <p class="lead">There is no post found!!</p>
                  <?php
                endif;
          ?>

          
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="column-post-wrap">

        <?php 
          $kpost = new WP_Query(
            array(
              'post_type' => 'post',
              'posts_per_page' => '10',
              'category_name' => 'Knowledge'
            )
          );

          if($kpost->have_posts()) :
            while($kpost->have_posts()) :
              $kpost->the_post(); ?>
              <div class="single-post clearfix">
              <div class="float-left w-25">
                <a href="<?php the_permalink(); ?>">
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                </a>
              </div>
              <div class="float-left w-75 pl-3">
                <div class="cat-name"><?php the_category(','); ?></div>
                <a href="<?php the_permalink(); ?>" class="heading">
                  <h6><?php the_title(); ?></h6>
                </a>
              </div>
            </div>
          <?php  
            endwhile;
          else : 
            ?>
            <p class="lead">There is no post found!!</p>
            <?php
          endif;
        ?>

          
          
        </div>
      </div>
    </div>
  </section>


  <section class="container-fluid main-section" id="main">
    <div class="row cf-padding">
      
      <?php get_template_part('content'); ?>

      <div class="col-md-4 mb-4 pt-4">
        <section class="sidebar-wrap">

          <?php get_sidebar(); ?>
          
        </section>
      </div>
    </div>
  </section>

<?php get_footer(); ?>