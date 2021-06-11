<!-- Header part including -->
<?php 

  //Template Name: Themes

  get_header(); 

?>

  <section class="breadcrumb-wrap container-fluid" id="bc-wrpa" style="background: url('<?php header_image(); ?>');">
  <div class="container">
    <div class="breadcrumb">
      <?php get_breadcrumb(); ?>
    </div>
  </div>
</section>



<?php

$themes = new WP_Query(
  array(
    'post_type' => 'themes',
    'posts_per_page' => 12,
    'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
  )
);

if($themes->have_posts()) : ?>

<section class="section container-fluid home-latest-theme-wrap" id="hlt-wrap">
<div class="container">
    <div class="section-heading text-center">
      <h2><?php echo get_theme_mod('theme_post_heading', 'Our latest Theme'); ?></h2>
    </div>
    <div class="home-themes theme-post-wrap">
      <div class="row">
      
      <?php
while($themes->have_posts()) :
$themes->the_post(); 

  $category = get_post_meta($post->ID,'category',true);
  $buy_link = get_post_meta($post->ID,'buy_link',true);
  $demo_link = get_post_meta($post->ID,'demo_link',true);

?>

  <div class="col-lg-4 col-md-6 mb-5 not-singl fpp-theme"> 
    <div class="single-post-wrap">
      <?php
        if(has_post_thumbnail()) {
          ?>
            <div class="theme-post-thumb mb-4">
              <a href="<?php the_permalink(); ?>">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid thumbnail">
              </a>

              <div class="theme-link clearfix">
                <a href="<?php echo $buy_link; ?>" class="btn buy-btn">Buy Now</a>
                <a href="<?php echo $demo_link; ?>" class="btn demo-btn float-right">Demo</a>
              </div>
            </div>
          <?php
        } 
      ?>
      <div class="post-content">
         <div class="post-cat">
            <span class="text-danger"><?php echo $category; ?></span>
          </div> 
      <div class="post-heading">
        <a href="<?php the_permalink(); ?>" class="">
          <?php the_title(); ?>
        </a>
      </div>
      <div class="theme-content">
        <?php the_excerpt(); ?>
      </div>
      </div>
    </div>
  </div>  


<?php
endwhile;

?>

      </div>
    </div>
  </div>
</section>

<?php
else :
  echo '<p> Nothing found!!</p>';
endif;
?>


<section class="pagination-wrap container-fluid" id="pagination">
    <div class="container text-center">
      
        <?php wpbeginner_numeric_posts_nav(); 
          $total_pages = $themes->max_num_pages;

          if ($total_pages > 1){
      
              $current_page = max(1, get_query_var('paged'));
      
              echo paginate_links(array(
                  'base' => get_pagenum_link(1) . '%_%',
                  'format' => '/page/%#%',
                  'current' => $current_page,
                  'total' => $total_pages,
                  'prev_text'    => __('« Previus Page'),
                  'next_text'    => __('Next Page »'),
              ));
          }  
        ?>
        
      
    </div>
  </section>

<!-- Footer part including -->
<?php get_footer(); ?>