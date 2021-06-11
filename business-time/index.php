<?php get_header(); ?>
  <section id="hero-wrapper">
    <div class="container py-5">
      <div class="row no-gutters pb-5">

        <div class="col-md-7">
          <?php 
            $featured1 = new WP_Query(
              [
                'post_type' => 'post',
                'posts_per_page' => 1,
              ]
              );

              if($featured1->have_posts()) :
                while($featured1->have_posts()) :
                  $featured1->the_post();
          ?>
          <div class="featured-post-wrap featured1">
          <?php get_template_part('tem-part/featured-content') ?>
          </div>

          <?php 
            endwhile; 
            wp_reset_postdata();
            else :
            endif;
          ?>
        </div>

        <div class="col-md-5">
          <div class="featured2-wrap">
          <?php 
            $featured2 = new WP_Query(
              [
                'post_type' => 'post',
                'offset' => 1,
                'posts_per_page' => 1,
              ]
              );

              if($featured2->have_posts()) :
                while($featured2->have_posts()) :
                  $featured2->the_post();
          ?>
          <div class="featured-post-wrap featured2">
          <?php get_template_part('tem-part/featured-content') ?>
          </div>

          <?php 
            endwhile; 
            wp_reset_postdata();
            else :
            endif;
          ?>
          </div>

          <div class="row no-gutters">
          <?php 
            $featured3 = new WP_Query(
              [
                'post_type' => 'post',
                'offset' => 2,
                'posts_per_page' => 2,
              ]
              );

              if($featured3->have_posts()) :
                while($featured3->have_posts()) :
                  $featured3->the_post();
          ?>
            <div class="col-6">
              <div class="featured-post-wrap featured3">
                <?php get_template_part('tem-part/featured-content') ?>
              </div>
            </div>
            <?php 
            endwhile; 
            wp_reset_postdata();
            else :
            endif;
          ?>
          </div>

        </div>

      </div>
    </div>
  </section>


  <section id="main-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <main id="main-post">
            <div class="section-heading  lead mb-5">
              <sapn class="bg-dark text-light py-1 px-2"><?php echo get_theme_mod('main-post-heading', 'Recent Post') ?></sapn>
            </div>
        
              <div class="posts-wrap">

              <?php
                $recent = new WP_Query([
                  'post_type'   => 'post',
                  'offset'      => 4,
                ]);

                if($recent->have_posts()) :
                  while($recent->have_posts()) :
                    $recent->the_post(); 

                    get_template_part('tem-part/content');

                  endwhile;
                else :
                  echo '<p class="lead">Sorry. No post found!!</p>';
                endif;

              ?>

                
                
                
              </div>
          </main>

          <div class="pagination-wrap my-5 py-4">
            <?php wpbeginner_numeric_posts_nav() ?>
          </div>
        </div>

        <?php get_sidebar(); ?>
      </div>
    </div>
  </section>


<?php get_footer(); ?>