
<?php 

  //Theme scripts file loading
  include_once('inc/scripts.php');

  //Theme-setup file loading
  include_once('inc/theme-setup.php');

  //Bootstrap nav walker script loading
  include_once('inc/bt-walker.php');

  //POst pagination script 
  include_once('inc/pagination.php');

  //breadcrumb script loading
  include_once('inc/breadcrumb.php');

  //Theme customizer script
  include_once('inc/customizer.php');









  //Post excerpt filter
  function magazinoo_excerpt_length() {
    return 16;
  }
  add_filter('excerpt_length', 'magazinoo_excerpt_length');
  function magazinoo_excerpt_more() {
    return '...';
  }
  add_filter( 'excerpt_more', 'magazinoo_excerpt_more');










  //POst view counter script
  function gt_get_post_view() {
    $count = get_post_meta( get_the_ID(), 'post_views_count', true );
    return "$count views";
  }


  function gt_set_post_view() {
    $key = 'post_views_count';
    $post_id = get_the_ID();
    $count = (int) get_post_meta( $post_id, $key, true );
    $count++;
    update_post_meta( $post_id, $key, $count );
  }


  function gt_posts_column_views( $columns ) {
    $columns['post_views'] = 'Views';
    return $columns;
  }


  function gt_posts_custom_column_views( $column ) {
    if ( $column === 'post_views') {
        echo gt_get_post_view();
    }


  }
  add_filter( 'manage_posts_columns', 'gt_posts_column_views' );
  add_action( 'manage_posts_custom_column', 'gt_posts_custom_column_views' );








  //TGM Plugin activation 
  require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
  require_once get_template_directory() . '/inc/required.php';






