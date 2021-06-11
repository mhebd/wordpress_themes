<?php

  function theme_scripts() {
    
    wp_enqueue_style( 'bootstrap', get_theme_file_uri('/css/bootstrap.min.css'),array('style'),'4.0' );
    wp_enqueue_style('owl-stylesheet',get_theme_file_uri('/css/owl.carousel.min.css'), array('style'),'2.0');
    wp_enqueue_style('owl-theme-default', get_theme_file_uri('/css/owl.theme.default.min.css'),array('style'),'2.0');
    wp_enqueue_style( 'style', get_stylesheet_uri(),'', '3' );
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js',get_theme_file_uri('/js/bootstrap.min.js'),array('jquery'),'4.0',true);
    wp_enqueue_script('owl-js',get_theme_file_uri('/js/owl.carousel.min.js'),array('jquery'),'2.1',true);
    wp_enqueue_script('font-awesome',get_theme_file_uri('/js/font.js'),array(),'',true);
    wp_enqueue_script('main-script',get_theme_file_uri('/js/app.js'),array('jquery'),'1.0.0',true);
  }
  add_action('wp_enqueue_scripts', 'theme_scripts');


  //Theme support
  function theme_supports(){
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('aside','gallery','video','audio','link'));
    add_theme_support('menus');

    register_post_type(
      'customslider',
      array(
        'labels' => array(
          'name' => 'Slider',
          'add_new_item' => 'Add New Slider',
        ),
        'public' => true,
        'supports' => array(
          'title', 'thumbnail','editor'
        )
      )
    );

    register_sidebar(
      array(
        'name' => 'Left Sidebar',
        'id' => 'left-sidebar',
        'description' => 'This is page sidebar widget',
        'before_widget' => '<div class="single-sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="sidebar-heading">',
        'after_title' => '</h2>'
      )
    );
    register_sidebar(
      array(
        'name' => 'Footer Sidebar',
        'id' => 'footer-sidebar',
        'description' => 'This is footer wedget part',
        'before_widget' => '<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
        <div class="footer-widget sidebar-wrap">',
        'after_widget' => '</div></div>',
        'before_title' => '<h2 class="fw-header">',
        'after_title' => '</h2>',
      )
    );
  }
  add_action( 'after_setup_theme', 'theme_supports' );

  //Menu Register
  function menu_register(){
    register_nav_menus(
      array(
        'primary-menu' => __('Header Menu')
      )
    );
  }
  add_action('init','menu_register');



  //Pagination code
  function wpbeginner_numeric_posts_nav() {
 
    if( is_singular() )
        return;
 
    global $wp_query;
 
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
 
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
 
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
 
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
 
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
 
    echo '<div class="navigation"><ul class="pagination justify-content-center">' . "\n";
 
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
 
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
 
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
 
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
 
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
 
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
 
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
 
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );
 
    echo '</ul></div>' . "\n";
 
}


  //Option Tree

  /**
  *Required: set ‘ot_theme_mode’ filter to true.
  */
  add_filter( 'ot_theme_mode', '__return_true' );
  /**
  * Required: include OptionTree.
  */
  require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );

  
  include_once('theme-options.php');


  //Shortcodes

  function my_shortcode($atts, $content=null) {
    extract(shortcode_atts(
      array(
        'link'=> '',
        'type'=> '',
        'text'=> '',
      ), $atts
    ) );
    return'<a class="btn btn-'.$type.'" href="'.$link.'">'.$text.'</a>';
  }
  add_shortcode('btn','my_shortcode');


  //short code button for user
  // Hooks your functions into the correct filters
function my_add_mce_button() {
	// check user permissions
	if ( !current_user_can( 'edit_posts' ) && !current_user_can( 'edit_pages' ) ) {
		return;
	}
	// check if WYSIWYG is enabled
	if ( 'true' == get_user_option( 'rich_editing' ) ) {
		add_filter( 'mce_external_plugins', 'my_add_tinymce_plugin' );
		add_filter( 'mce_buttons', 'my_register_mce_button' );
	}
}
add_action('admin_head', 'my_add_mce_button');

// Declare script for new button
function my_add_tinymce_plugin( $plugin_array ) {
	$plugin_array['my_mce_button'] = get_template_directory_uri() .'/js/mce-button.js';
	return $plugin_array;
}

// Register new button in the editor
function my_register_mce_button( $buttons ) {
	array_push( $buttons, 'my_mce_button' );
	return $buttons;
}


function my_excerpt() {
  return 40;
}
add_filter('excerpt_length', 'my_excerpt');


//post type link filter
function taxonomies() {
  $taxonomies = array();

  $taxonomies['customslider_category'] = array(
      'hierarchical'  => true,
      'query_var'     => 'customslider-category',
      'rewrite'       => array(
          'slug'      => 'customslider/category'
      ),
      'labels'            => array(
          'name'          => 'customslider Category',
          'singular_name' => 'customslider Category',
          'edit_item'     => 'Edit customslider Category',
          'update_item'   => 'Update customslider Category',
          'add_new_item'  => 'Add customslider Category',
          'new_item_name' => 'Add New customslider Category',
          'all_items'     => 'All customslider Category',
          'search_items'  => 'Search customslider Category',
          'popular_items' => 'Popular customslider Category',
          'separate_items_with_commas' => 'Separate customslider Categories with Commas',
          'add_or_remove_items' => 'Add or Remove customslider Categories',
          'choose_from_most_used' => 'Choose from most used categories',
      ),
      'show_admin_column' => true
  );

  $taxonomies['customslider_location'] = array(
          'hierarchical'  => true,
          'query_var'     => 'location',
          'rewrite'       => array(
              'slug'      => 'customsliders' 
          ),
          'labels'            => array(
              'name'          => 'Location',
              'singular_name' => 'Location',
              'edit_item'     => 'Edit Location',
              'update_item'   => 'Update Location',
              'add_new_item'  => 'Add Location',
              'new_item_name' => 'Add New Location',
              'all_items'     => 'All Location',
              'search_items'  => 'Search Location',
              'popular_items' => 'Popular Location',
              'separate_items_with_commas' => 'Separate Location Categories with Commas',
              'add_or_remove_items' => 'Add or Remove Location Categories',
              'choose_from_most_used' => 'Choose from most used categories',
          ),
          'show_admin_column' => true
      );

  flush_rewrite_rules();

  foreach( $taxonomies as $name => $args ) {
      register_taxonomy( $name, array( 'customslider' ), $args );
  }
}
add_action( 'init', 'taxonomies' );


function filter_post_type_link($link, $post)
{
    if ($post->post_type != 'customslider')
        return $link;

    if ($cats = get_the_terms($post->ID, 'customslider_category'))
        $link = str_replace('%customslider_category%', array_pop($cats)->slug, $link);
    return $link;
}
add_filter('post_type_link', 'filter_post_type_link', 10, 2);

function filter_post_type_link_location($link, $post)
{
    if ($post->post_type != 'customslider')
        return $link;

    if ($cats = get_the_terms($post->ID, 'customslider_location'))
        $link = str_replace('%customslider_location%', array_pop($cats)->slug, $link);
    return $link;
}
add_filter('post_type_link', 'filter_post_type_link_location', 10, 2);