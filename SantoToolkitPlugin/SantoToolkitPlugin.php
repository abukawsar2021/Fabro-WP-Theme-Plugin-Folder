<?php
/*

Plugin Name: Santo Toolkit 

*/


if(!defined('ABSPATH')){
	exit;
}


// plgugin url
define('SANTO_PLUGIN_URL', plugin_basename(__FILE__));

// plgugin dir path
define('SANTO_PLUGIN_PATH', plugin_dir_path(__FILE__));


function santo_hero_slider_list(){	
	$args = wp_parse_args(array(
	 'post_type'   => 'slider',
	 'numberposts' => -1,
	));
	$posts = get_posts($args); // get post data
	$post_options = array(esc_html__('--Select slider--','santo'));  // marge into array or update array
	if($posts){
		foreach($posts as $post){
			$post_options[$post->post_title] = $post->ID;
		}
	}
 return $post_options;   
}


/**
 * "slider" cpt

 */
function santo_slider_cpt() {
	
    $labels = array(
        'name'                  => _x( 'Sliders', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Slider', 'Post type singular name', 'textdomain' ),
        'add_new_item'          => __( 'Add New Slider', 'textdomain' ),
        'new_item'              => __( 'New Slider', 'textdomain' ),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'show_ui'            => true,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
    );
 
    register_post_type( 'slider', $args );
}
add_action( 'init', 'santo_slider_cpt' );


/**
 *  "testimonial" cpt

 */
function santo_testimonial_cpt() {
	
    $labels = array(
        'name'                  => _x( 'Testimonials', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Testimonial', 'Post type singular name', 'textdomain' ),
        'add_new_item'          => __( 'Add New Testimonial', 'textdomain' ),
        'new_item'              => __( 'New Testimonial', 'textdomain' ),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'show_ui'            => true,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
    ); 
    register_post_type( 'testimonial', $args );
}
add_action( 'init', 'santo_testimonial_cpt' );


 // testimonial list 
function santo_testimonial_list(){	
	$args = wp_parse_args(array(
	 'post_type'   => 'testimonial',
	 'numberposts' => -1,
	));
	$posts = get_posts($args); // get post data
	$post_options = array(esc_html__('--Select Testimonial--','santo'));  // marge into array or update array
	if($posts){
		foreach($posts as $post){
			$post_options[$post->post_title] = $post->ID;
		}
	}
 return $post_options;   
}


/**
 *  "work" cpt
 */
function santo_work_cpt(){	
    $labels = array(
        'name'                  => _x( 'Works',  'santo' ),
        'singular_name'         => _x( 'Work',  'santo' ),
        'add_new_item'          => __( 'Add New Work', 'santo' ),
        'new_item'              => __( 'New Work', 'santo' ),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'show_ui'            => true,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail','excerpt'),
    ); 
    register_post_type( 'work', $args );
}
add_action( 'init', 'santo_work_cpt' );

function santo_work_taxonomy(){ 
    $labels = array(
        'name'              => _x( 'Work Categories', 'santo' ),
        'singular_name'     => _x( 'Work Category',  'santo' ),
		'add_new_item'      => __( 'Add New Category', 'santo' ),
        'new_item'          => __( 'New Category', 'santo' ),
    );
    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
    );
    register_taxonomy( 'work_category', 'work', $args );
}
add_action( 'init', 'santo_work_taxonomy' );



/**
 *  "team" cpt

 */
function santo_team_cpt() {	
    $labels = array(
        'name'                  => _x( 'Teams', 'Post type general name', 'santo' ),
        'singular_name'         => _x( 'Team', 'Post type singular name', 'santo' ),
        'add_new_item'          => __( 'Add New Team', 'santo' ),
        'new_item'              => __( 'New Team', 'santo' ),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'show_ui'            => true,
        'supports'           => array( 'title', 'editor', 'author','excerpt','thumbnail' ),
    ); 
    register_post_type( 'team', $args );
}
add_action( 'init', 'santo_team_cpt' );



/**
 *  "service" cpt

 */
function santo_service_cpt() {	
    $labels = array(
        'name'                  => _x( 'Services', 'Post type general name', 'santo' ),
        'singular_name'         => _x( 'Service', 'Post type singular name', 'santo' ),
        'add_new_item'          => __( 'Add New Service', 'santo' ),
        'new_item'              => __( 'New Service', 'santo' ),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'show_ui'            => true,
        'supports'           => array( 'title', 'editor', 'author','excerpt','thumbnail' ),
    ); 
    register_post_type( 'service', $args );
}
add_action( 'init', 'santo_service_cpt' );




/**
 *  "about" cpt

 */
function santo_about_cpt() {	
    $labels = array(
        'name'                  => _x( 'Abouts', 'Post type general name', 'santo' ),
        'singular_name'         => _x( 'About', 'Post type singular name', 'santo' ),
        'add_new_item'          => __( 'Add New About', 'santo' ),
        'new_item'              => __( 'New About', 'santo' ),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'show_ui'            => true,
        'supports'           => array( 'title', 'editor', 'author','excerpt','post-formats'),
    ); 
    register_post_type( 'about', $args );
}
add_action( 'init', 'santo_about_cpt' );


function santo_about_taxonomy(){ 
    $labels = array(
        'name'              => _x( 'About Categories', 'santo' ),
        'singular_name'     => _x( 'About Category',  'santo' ),
		'add_new_item'      => __( 'Add New Category', 'santo' ),
        'new_item'          => __( 'New Category', 'santo' ),
    );
    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
    );
    register_taxonomy( 'about_category', 'about', $args );
}
add_action( 'init', 'santo_about_taxonomy' );



// vc addon loading
require_once(SANTO_PLUGIN_PATH  .  'inc/customAddon/customAddon.php');
require_once(SANTO_PLUGIN_PATH  .  'inc/customShortcode/customShortcode.php');


include_once(ABSPATH . 'wp-admin/includes/plugin.php');


/**
 * Widget Load
 */
require_once('inc/widgets/custom-widget.php' );


//adding shortcode into widget
add_filter('widget_text', 'do_shortcode');


// flicker gallery file

require_once ('inc/flickr-feed/flicker-gallery.php');

// flicker gallery  shortcode

require_once ('inc/flickr-feed/flickr-gallery-shortcode.php');





// file bootstrping
function santo_plguin_file_bootstraping(){
	wp_enqueue_style('owl.carousel' ,  plugin_dir_url(__FILE__) . 'assets/css/owl.carousel.css');
	wp_enqueue_style('santo-toolkit' , plugin_dir_url(__FILE__) . 'assets/css/santo-toolkit.css');
	wp_enqueue_script('owl.carousel' , plugin_dir_url(__FILE__) . 'assets/js/owl.carousel.min.js',array('jquery'),'2.3.4',true);
	wp_enqueue_script('isotope.pkgd' , plugin_dir_url(__FILE__) . 'assets/js/isotope.pkgd.min.js',array('jquery'),'3.0.4',true);
	wp_enqueue_script('ticker'      , plugin_dir_url(__FILE__) . 'assets/js/ticker.js',array('jquery'),'3.0.4',true);

}
add_action('wp_enqueue_scripts','santo_plguin_file_bootstraping');










