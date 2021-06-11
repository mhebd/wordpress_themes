<?php get_header(); ?>




  <section class="container-fluid main-section" id="main">
    <div class="row cf-padding">
    <?php get_template_part('content') ?>

      <div class="col-md-4 mb-4 pt-4">
        <section class="sidebar-wrap">

          <?php get_sidebar(); ?>
          
        </section>
      </div>
    </div>
  </section>

<?php get_footer(); ?>