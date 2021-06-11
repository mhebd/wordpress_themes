<?php get_header(); ?>

<section class="breadcrumb-wrap container-fluid mb-5" id="bc-wrpa" style="background: url('<?php header_image(); ?>');">
  <div class="container">
    <div class="breadcrumb">
      <?php 
        echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
        if (is_category() || is_single()) {
            echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
            echo '<a href="'.home_url().'/themes-2">Themes</a>';
                if (is_single()) {
                    echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                    the_title();
                }
        } 
      ?>
    </div>
  </div>
</section>



<?php

$themes = new WP_Query(
  array(
    'post_type' => 'themes',
  )
);

if(have_posts()) : ?>

<section class="container-fluid single-theme-post-wrap">
  <div class="container">
  <?php
  while(have_posts()) :
    the_post(); 
    
      $category = get_post_meta($post->ID,'category',true);
      $buy_link = get_post_meta($post->ID,'buy_link',true);
      $demo_link = get_post_meta($post->ID,'demo_link',true);
      $theme_woner = get_post_meta($post->ID,'theme_woner',true);
      $publish_date = get_post_meta($post->ID,'publish_date',true);
    
    ?>

    <div class="theme-product-view-wrap pb-5">
      <div class="row">
        <div class="col-md-6 mb-4 theme-img">
        <?php
            if(has_post_thumbnail()) {
              ?>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid thumbnail">
              <?php
            } 
          ?>
        </div>
        <div class="col-md-6 theme-content">
            <div class="theme-name text-capitalize">
              <h2><?php the_title(); ?></h2>
            </div>
            <div class="other-info">
              <table class="table">
                <tr>
                  <td>Theme Type</td>
                  <td>:</td>
                  <td><?php echo $category; ?></td>
                </tr>
                <tr>
                  <td>Theme Woner</td>
                  <td>:</td>
                  <td><?php echo $theme_woner; ?></td>
                </tr>
                <tr>
                  <td>Theme Published</td>
                  <td>:</td>
                  <td><?php echo $publish_date; ?></td>
                </tr>
              </table>
            </div>
            <div class="theme-links">
              <a href="<?php echo $buy_link; ?>" class="btn buy-btn">Buy Now</a>
              <a href="<?php echo $demo_link; ?>" class="btn  demo-btn ">Demo</a>
          </div>
        </div>
      </div>
    </div>

    <hr>

    <div class="theme-info-wrap py-3">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <?php the_content(); ?>
        </div>
      </div>
    </div>

    <?php
  endwhile;

?>
  </div>
</section>

<?php
  else : ?>
    <div class="lead display-3">
      There are Nothing found!!
    </div> <?php
  endif;
  ?>


  <section class="container-fluid comment-wrap py-5">
    <div class="container">
      <?php
       // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif; 
 
      ?>
    </div>
  </section>



<?php get_footer(); ?>