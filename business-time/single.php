<?php get_header(); ?>



  <section id="main-wrapper">
    
    <section class="breadcrumb-wrap text-light mb-5 py-5 bg-dark">
      <div class="container">
        <div class="breadcrumb">
        <?php get_breadcrumb(); ?>
        </div>
      </div>
    </section>

    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <main id="main-post">

            
        
              <div class="posts-wrap">

              <?php
                $recent = new WP_Query([
                  
                ]);

                if(have_posts()) :
                  while(have_posts()) :
                    the_post(); ?>

                  <?php get_template_part('tem-part/content'); ?>
                <?php
                  endwhile;
                else :
                  echo '<p class="lead">Sorry. No post found!!</p>';
                endif;

              ?>

                
                
                
              </div>

              <section class="author-info-wrap py-4">
                <div class="card">
                  <div class="card-body clearfix">
                    <div class="float-left w-25">
                      <?php echo get_avatar('', 100, 'wavatar', 'Author Image', [
                        'class' => 'img-thumbnail author-img rounded rounded-circle mr-3',
                      ]) ?>
                    </div>
                    <div class="float-left pl-1 w-75">
                      <p class="lead"><?php echo get_the_author_posts_link(); ?></p>
                      <div class="">
                        <?php echo nl2br(get_the_author_meta('description')); ?>
                      </div>
                    </div>
                  </div>
                </div>
              </section>

              <section class="post-comment py-5">
                <div class="card">
                  <div class="card-body">
                  <?php comments_template(); ?>
                  </div>
                </div>
              </section>
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