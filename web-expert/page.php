  <!-- //Header part including -->
  <?php get_header(); ?>




  <section class="container-fluid main-content-wrap" id="main-wrap page">
    <div class="row no-gutters main-content">

      <?php get_template_part('tem-part/left-sidebar') ?>   

      <div class="col-lg-6 col-md-8">
        <div class="posts-wrap">
          <div class="posts-wrap-heading clearfix">
               
              <h3 class="text-center"><?php the_title(); ?></h3>
            
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


        </div>
      </div>


      <?php get_template_part('tem-part/right-sidebar') ?>
    </div>
  </section>



  <!-- //Footer part including -->
  <?php get_footer(); ?>
