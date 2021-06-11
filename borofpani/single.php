<?php get_header(); ?>


  <?php
    if( have_posts() ) :
      while( have_posts() ) :
        the_post();
      
  ?>
  <section class="hero-post-wrap" 
  style=" 
  background-image: linear-gradient(rgba(0, 0, 0, 0.719),rgba(0, 0, 0, 0.418)) ,url(<?php if( has_post_thumbnail() ) {
	echo get_the_post_thumbnail_url();
} else {
	echo get_theme_mod('theme-banner', get_template_directory_uri().'/img/1.jpg' );
}  ?>);
  height: 60vh;
  min-height: 500px; 
  ">
    <div class="container-xl">
    <div class="hero-post-info">
      
      <div class="breadcrumb-wrap">
        <?php get_breadcrumb(); ?>
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
            <p class="lead"><?php echo _e('There Is No Post Found!!', 'borofpani'); ?></p>
          </div>
          </div>
        </section>
      <?php
    endif;
  ?>



 



  <section class="main-blogs-area pt-2 pb-5">
    <div class="container-xl">
      <div class="row">

        <div class="col-lg-8 col-md-10 mx-auto">
          <main class="recent-posts-wrap">
            <div class="row">
              <?php
                if( have_posts() ) :
                  while( have_posts() ) :
                    the_post(); 
              
                    get_template_part('tem-part/content');
                    

                  endwhile;
                else :
                  echo _e('There Is No Post Found!!', 'borofpani');
                endif;
              ?>
            </div>

            <section class="tags-wrap card">
              <div class="card-body">
                <p class="lead"><?php echo _e('Tags:', 'borofpani'); ?>  <?php echo get_the_tag_list('', ' | ', ''); ?></p>
              </div>
            </section>


            

            <section class="related-posts py-4">
              <div class="card">
                <div class="card-header h4">
                <?php echo _e('You Might Like This', 'borofpani'); ?>
                </div>
                <div class="row card-body">
                  <?php 
                    $related = new WP_Query(
                        array(
                      'category__in'   => wp_get_post_categories( $post->ID ),
                      'posts_per_page' => 3,
                      'post__not_in'   => array( $post->ID )
                        )
                    );
                    if( $related->have_posts() ) : 
                        while( $related->have_posts() ) : 
                      $related->the_post(); 
                  ?>
                  <div class="col-md-4 mb-4">
                    <div class="post-thumb">
                      <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                      </a>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="h5 mt-2 post-title"><?php the_title(); ?></a>
                  </div>
                  <?php
                        endwhile;
                    else :
                      echo '<P class="alert alert-info">There is no related post</p>';
                    endif;
                  ?>
                </div>
              </div>
            </section>


            <section class="post-author py-4">
              <div class="card">
                <div class="card-header">
                  <p class="lead h4"><?php echo _e('About', 'borofpani'); ?> <?php echo get_the_author_posts_link(); ?></p>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-3 col-lg-2">
                      <?php 
                        echo get_avatar('', 100, 'wavatar', 'Author Img', [
                          'class'   => 'img-fluid rounded rounded-circle'
                        ]);
                      ?>
                    </div>
                    <div class="col-9 col-lg-10">
                      <p class="">
                        <?php 
                          echo nl2br(get_the_author_meta('description'));
                        ?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <section class="comments-wrapper">
              <div class="card">
                <div class="card-body">
                <?php comments_template(); ?>
                </div>
              </div>
            </section>
          </main>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>