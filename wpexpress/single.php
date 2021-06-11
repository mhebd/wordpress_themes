<?php get_header(); ?>

<section class="breadcrumb-wrap container-fluid" id="bc-wrap" style="background: url('<?php header_image(); ?>');">
  <div class="container">
    <div class="breadcrumb">
      <?php get_breadcrumb(); ?>
    </div>
  </div>
</section>

<section class=" single-post" id="sp-wrap">
  <div class="">
        <?php 
          if(have_posts()) :
            while(have_posts()) :
              the_post();  
              
              get_template_part('tem-part/content'); 

            endwhile;
          else :
            echo '<p class="lead">Nothing found!!</P>';
          endif;
        ?>

        <hr>
        <section class="comment-wrap container py-5">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <?php comments_template(); ?>
            </div>
          </div>
        </section>

  
  </div>
</section>




<?php get_footer(); ?>