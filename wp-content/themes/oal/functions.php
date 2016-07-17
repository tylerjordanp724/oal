<?php
/**
 * starter_theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package starter_theme
 */

if ( ! function_exists( 'starter_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function starter_theme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on starter_theme, use a find and replace
	 * to change 'starter_theme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'starter_theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'starter_theme' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // starter_theme_setup
add_action( 'after_setup_theme', 'starter_theme_setup' );


/**
 * Enqueue scripts and styles.
 */



function starter_theme_scripts() {

	wp_enqueue_style( 'fonts', get_stylesheet_directory_uri() . '/css/fonts.css', array(), '0.0.0');
	wp_enqueue_style( 'plugins', get_stylesheet_directory_uri() . '/css/plugins.css', array(), '0.0.0');
	wp_enqueue_style( 'starter_theme-style', get_stylesheet_directory_uri() . '/css/styles.css', array(), '0.0.0');
	wp_enqueue_script( 'modernizr', get_stylesheet_directory_uri() . '/js/modernizr.js', array(), true);
	wp_enqueue_script('jquery', 'http' . ($_SERVER['SERVER_PORT'] == 443 ? 's' : '') . '://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', array(), null, true);
	wp_enqueue_script( 'plugins', get_stylesheet_directory_uri() . '/js/plugins.js', array(), true);
	wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'), '0.0.0', true);


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'starter_theme_scripts' );


/**
* Custom Post Types
*/

function my_service() {
    $labels = array(
      'name'                => _x( 'Services', 'post type general name' ),
      'singular_name'       => _x( 'Service', 'post type singular name' ),
      'add_new'             => _x( 'Add New', 'Service' ),
      'add_new_item'        => __( 'Add New Service' ),
      'edit_item'           => __( 'Edit Service' ),
      'new_item'            => __( 'New Service' ),
      'all_items'           => __( 'All Services' ),
      'view_item'           => __( 'View Service' ),
      'search_items'        => __( 'Search Services' ),
      'not_found'           => __( 'No item found' ),
      'not_found_in_trash'  => __( 'No items found in the Trash' ), 
      'parent_item_colon'   => '',
      'menu_name'           => 'Services'
    );
    $args = array(
      'labels'            => $labels,
      'description'       => 'My Services',
      'public'            => true,
      'menu_position'     => 5,
      'supports'          => array( 'title', 'editor', 'excerpt', 'post-formats', 'thumbnail'),
      'has_archive'       => false
    );
    register_post_type( 'Service', $args ); 
}
add_action( 'init', 'my_service' );

function my_testimonial() {
  	$labels = array(
  	  'name'               	=> _x( 'Testimonials', 'post type general name' ),
  	  'singular_name'      	=> _x( 'Testimonial', 'post type singular name' ),
  	  'add_new'            	=> _x( 'Add New', 'Testimonial' ),
  	  'add_new_item'       	=> __( 'Add New Testimonial' ),
  	  'edit_item'          	=> __( 'Edit Testimonial' ),
  	  'new_item'           	=> __( 'New Testimonial' ),
  	  'all_items'          	=> __( 'All Testimonials' ),
  	  'view_item'          	=> __( 'View Testimonial' ),
  	  'search_items'       	=> __( 'Search Testimonials' ),
  	  'not_found'          	=> __( 'No item found' ),
  	  'not_found_in_trash' 	=> __( 'No items found in the Trash' ), 
  	  'parent_item_colon'  	=> '',
  	  'menu_name'          	=> 'Testimonials'
  	);
  	$args = array(
  	  'labels'        		=> $labels,
  	  'description'   		=> 'Client testimonials',
  	  'public'        		=> true,
  	  'menu_position' 		=> 5,
  	  'supports'      		=> array( 'title', 'editor', 'excerpt', 'post-formats'),
  	  'has_archive'   		=> false
  	);
  	register_post_type( 'Testimonial', $args ); 
}
add_action( 'init', 'my_testimonial' );

function my_workshops() {
  	$labels = array(
  	  'name'               	=> _x( 'Workshops', 'post type general name' ),
  	  'singular_name'      	=> _x( 'Workshop', 'post type singular name' ),
  	  'add_new'            	=> _x( 'Add New', 'Workshop' ),
  	  'add_new_item'       	=> __( 'Add New Workshop' ),
  	  'edit_item'          	=> __( 'Edit Workshop' ),
  	  'new_item'           	=> __( 'New Workshop' ),
  	  'all_items'          	=> __( 'All Workshops' ),
  	  'view_item'          	=> __( 'View Workshop' ),
  	  'search_items'       	=> __( 'Search Workshops' ),
  	  'not_found'          	=> __( 'No item found' ),
  	  'not_found_in_trash' 	=> __( 'No items found in the Trash' ), 
  	  'parent_item_colon'  	=> '',
  	  'menu_name'          	=> 'Workshops'
  	);
  	$args = array(
  	  'labels'        		=> $labels,
  	  'description'   		=> 'Workshop videos from Youtube',
  	  'public'        		=> true,
  	  'menu_position' 		=> 5,
  	  'supports'      		=> array( 'title', 'editor', 'excerpt', 'post-formats'),
  	  'has_archive'   		=> false
  	);
  	register_post_type( 'Workshop', $args ); 
}
add_action( 'init', 'my_workshops' );


register_sidebar(
  array(
    'name'          => __( 'Main Sidebar', 'theme_text_domain' ),
    'id'            => 'my-sidebar',
    'description'   => 'Main sidebar for blog index',
    'class'         => 'sidebar',
    'before_widget' => '<div id="main-sidebar" class="sidebar">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5 class="widget-title">',
    'after_title'   => '</h5>'
  )
);

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

function themify_custom_excerpt_length( $length ) {
   return 30;
}
add_filter( 'excerpt_length', 'themify_custom_excerpt_length', 999 );

// add more link to excerpt
function themify_custom_excerpt_more($more) {
   global $post;
   return '...<div class="learn-more-btn"><a class="more-link" href="'. get_permalink($post->ID) . '">'. __('Read More &rarr;', 'themify') .'</a></div>';
}
add_filter('excerpt_more', 'themify_custom_excerpt_more');

/** Admin Slug Function */
function the_slug() {
  $post_data = get_post($post->ID, ARRAY_A);
  $slug = $post_data['post_name'];
  return $slug; 
}