<?php get_header(); ?>




  <?php 
  $category = get_queried_object();

    $hero = new WP_Query([
      'post_type'         => 'post',
      'cat'               => $category->term_id,
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
        <span><?php echo _e('New In ', 'borofpani'); ?>
        "<?php 
        if( is_category() ) {
          single_cat_title();
        } else {
          echo 'Anonymous Archive!!';
        }
      ?>"
        </span>
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
            <p class="lead"><?php echo _e('Post Show From ', 'borofpani'); ?>
      "<?php 
        if( is_category() ) {
          single_cat_title();
        } else {
          echo 'Anonymous Archive!!';
        }
      ?>"</p>
          </div>
          </div>
        </section>
      <?php
    endif;
  ?>



 
  <section class="cat-list pt-5 text-center">
    <div class="container-xl">
    <?php wp_list_categories([
      'separator'         => '',
      'title_li'          => '',
    ]); ?>
    </div>
  </section>
  <section class="main-blogs-area pt-2 py-5">
    <div class="container-xl">
      <div class="row">

        <div class="col-md-9 mb-4">
          <main class="recent-posts-wrap">
            <div class="row">
              <?php
                if( have_posts() ) :
                  while( have_posts() ) :
                    the_post();
              
                    get_template_part('tem-part/content');

                  endwhile;
                else : 
                  echo _e('There is no post found!!', 'borofpani'); 
                endif;
              ?>
            </div>
          </main>

          <section class="paginatin-wrap py-5">
            <?php posts_pagination_nav(); ?>
          </section>
        </div>

        <div class="col-md-3 mb-4">
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