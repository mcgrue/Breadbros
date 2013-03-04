<?php

/**
* Starkers functions and definitions
* For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
* @package 	WordPress
* @subpackage 	Starkers
* @since 		Starkers 4.0
*/

/* ========================================================================================================================

Required external files

======================================================================================================================== */

require_once( 'parts/starkers-utilities.php' );

/* ========================================================================================================================

Theme specific settings

======================================================================================================================== */

add_theme_support('post-thumbnails');

register_nav_menus(array('main-menu' => 'Main Menu'));

// Clean up the <head>
function removeHeadLinks() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'feed_links', 2 );
	remove_action('wp_head', 'feed_links_extra', 3 );
	remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');

// Remove plugin stylesheets
add_action( 'wp_print_styles', 'my_deregister_styles', 100 );

function my_deregister_styles() {
	wp_deregister_style( 'wp-pagenavi' );
	wp_deregister_style( 'jetpack-widgets' );
}

/* ========================================================================================================================

Scripts

======================================================================================================================== */

// Load jQuery
if ( !is_admin() ) {
	wp_deregister_script('jquery');
	wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"), false);
	wp_enqueue_script('jquery');
}

/* ========================================================================================================================

Actions and Filters

======================================================================================================================== */

/*
add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );

function starkers_script_enqueuer() {

	wp_register_script( 'fitvids', get_template_directory_uri().'/js/jquery.fitvids.min.js' );
	wp_enqueue_script( 'fitvids' );

}
*/

add_filter( 'body_class', array( 'Starkers_Utilities', 'add_slug_to_body_class' ) );

add_action( 'wp_head', 'wpe_show_template_name' );
function wpe_show_template_name() {
	if ( is_home() || is_front_page() ) {
		echo '<!--';
		echo get_post_meta( $wp_query->post->ID, '_wp_page_template', true );
		echo '-->';
	}
}


?>