<?php get_header(); ?>


  <?php 
    $hero = new WP_Query([
      'post_type'         => 'post',
      'posts_per_page'    => 1,
    ]);

    if( $hero->have_posts() ) :
      while( $hero->have_posts() ) :
        $hero->the_post();
      
  ?>
  <section class="hero-post-wrap" style=" background-image: linear-gradient(rgba(0, 0, 0, 0.719),rgba(0, 0, 0, 0.418)) ,url(<?php if( has_post_thumbnail() ) {
	echo get_the_post_thumbnail_url();
} else {
	echo get_theme_mod('theme-banner', get_template_directory_uri().'/img/1.jpg' );
}  ?>); ">
    <div class="container-xl">
    <div class="hero-post-info">
      <div class="post-meta mb-3">
        <span><?php  _e('New In Blog', 'borofpani') ?></span>
      </div>
      <div class="post-meta mb-3">
        <span class="mr-3"><i class="far fa-user"></i> <em><?php echo get_the_author_posts_link(); ?></em></span>
        <span class="mr-3"><i class="far fa-calendar"></i> <em><?php the_date(); ?></em></span>
        <span class="mr-3"><i class="far fa-folder"></i> <em><?php the_category(', '); ?></em></span>
      </div>
      <div class="post-title">
        <a href="<?php the_permalink(); ?>" class="h2"><?php the_title(); ?></a>
      </div>
    </div>
    </div>
  </section>
  <?php 
      endwhile;
      wp_reset_postdata();
    else :
      ?>
      <section class="hero-post-wrap" style=" background-image: linear-gradient(rgba(0, 0, 0, 0.719),rgba(0, 0, 0, 0.418)) ,url(<?php echo get_theme_mod('theme-banner', get_template_directory_uri().'/img/1.jpg' ) ?>); ">
        <div class="container-xl">
        <div class="hero-post-info">
          <p class="lead"><?php  _e('There Is No Post Found!!', 'borofpani'); ?></p>
        </div>
        </div>
      </section>
      <?php
    endif;
  ?>



  <section class="featured-posts py-5">
    <div class="container-xl">
      <div class="row no-gutters">
        <div class="col-md-8 mb-4">
          <?php 
            $featured1_cat = get_theme_mod('featured1', 'Wordpress');
            $featured1 = new WP_Query([
              'post_type'         => 'post',
              'category_name'     => $featured1_cat,
              'posts_per_page'    => 1,
            ]);

            if( $featured1->have_posts() ) :
              while( $featured1->have_posts() ) :
                $featured1->the_post();
        
          ?>
          <article class="fs-post mr-md-2 featured-1">
            <div class="fs-post-thumb">
              <a href="<?php the_permalink(); ?>">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
              </a>
            </div>
            <div class="fs-post-title">
              <a href="<?php the_permalink(); ?>" class="h4"><?php the_title(); ?></a>
            </div>
          </article>
          <?php 
              endwhile;
              wp_reset_postdata();
            else :
              echo _e('There Is No Post Found!!', 'borofpani');
            endif;
          ?>
        </div>

        <div class="col-md-4 mb-4 d-none d-md-block">
          <?php 
            $featured2_cat = get_theme_mod('featured2', 'Technology');
            $featured2 = new WP_Query([
              'post_type'         => 'post',
              'category_name'     => $featured2_cat,
              'posts_per_page'    => 2,
            ]);

            if( $featured2->have_posts() ) :
              while( $featured2->have_posts() ) :
                $featured2->the_post();
        
          ?>
          <article class="fs-post featured-2 mb-md-2 mb-4">
            <div class="fs-post-thumb">
              <a href="<?php the_permalink(); ?>">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
              </a>
            </div>
            <div class="fs-post-title">
              <a href="" class="h4">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</a>
            </div>
          </article>
          <?php 
              endwhile;
              wp_reset_postdata();
            else :
              echo '<p class="container-xl"> There is no post found!! </p>';
            endif;
          ?>
          
        </div>
      </div>
    </div>
  </section>




  <section class="main-blogs-area pt-2 pb-5">
    <div class="container-xl">
      <div class="row">

        <div class="col-sm-8 col-md-9 mb-4">
          <main class="recent-posts-wrap">
            <div class="row">
              <?php
                if( have_posts() ) :
                  while( have_posts() ) :
                    the_post();
              
                    get_template_part('tem-part/content');

                  endwhile;
                else : 
                  ?> <p class="lead">
                    <?php  _e('There Is No Post Found!!', 'borofpani') ?>
                  </p> <?php
                endif;
              ?>
            </div>
          </main>

          <section class="paginatin-wrap py-5">
            <?php posts_pagination_nav(); ?>
          </section>
        </div>

        <div class="col-sm-4 col-md-3 mb-4">
          <div class="sidebar-wrap">
            
            <?php 
              if( is_active_sidebar('left-widget') ) {
                dynamic_sidebar('left-widget');
              }
            ?>
            
          </div>
        </div>

      </div>
    </div>
  </section>

<?php get_footer(); ?>