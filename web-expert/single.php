  <!-- //Header part including -->
  <?php get_header(); ?>




  <section class="container-fluid main-content-wrap" id="main-wrap single">
    <div class="row no-gutters main-content">

      <?php get_template_part('tem-part/left-sidebar') ?>   

      <div class="col-lg-6 col-md-8">
        <div class="posts-wrap">
          <div class="posts-wrap-heading clearfix">
            <div class="float-left">
              <div class="post-meta">
                <span><?php the_category( ' ' ); ?></span>
              </div>
            </div>
            <div class="float-right">
              <?php comments_number('No Comment', 'One Comment', '% Comments') ?>
            </div>
          </div>

          <?php 
            
            if( have_posts() ) :
              while( have_posts() ) :
                the_post();
                
                get_template_part('tem-part/content-one');

              endwhile;
            else :
              echo '<p class="lead text-warning">There is nothing found!!</p>';
            endif;

          ?>

          <section class="author-info py-5 px-2">
            <div class="card">
              <div class="card-body row">
                <div class="clo-md-3 mb-3">
                  <div class="author-img">
                    <?php echo get_avatar('', 80, '', '', [
                    'class' => 'img-thumbnail author-img rounded rounded-circle mr-3'
                  ]); ?>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="author-meta">
                    <p class="lead"><?php the_author_posts_link(); ?></p>
                    <p class=""><?php echo nl2br(get_the_author_meta('description')) ?></p>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="comments-wrap py-5 px-2">
            <?php comments_template(); ?>
          </section>


        </div>
      </div>


      <?php get_template_part('tem-part/right-sidebar') ?>
    </div>
  </section>



  <!-- //Footer part including -->
  <?php get_footer(); ?>
