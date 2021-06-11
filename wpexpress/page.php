<?php get_header(); ?>

<section class="breadcrumb-wrap container-fluid mb-4" id="bc-wrpa" style="background: url('<?php header_image(); ?>');">
  <div class="container">
    <div class="breadcrumb">
      <?php get_breadcrumb(); ?>
    </div>
  </div>
</section>

<section class="container-fluid single-post pb-5" id="sp-wrap">
  <div class="container">
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
  </div>
</section>


<?php get_footer(); ?>