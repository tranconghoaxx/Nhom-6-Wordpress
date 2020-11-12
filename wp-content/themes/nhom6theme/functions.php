<?php
function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );
register_nav_menus( [ 'primary' => __( 'Primary Menu' ) ] );

function get_the_top_ancestor_id() {
	global $post;
	if ( $post->post_parent ) {
		$ancestors = array_reverse( get_post_ancestors( $post->ID ) );
		return $ancestors[0];
	} else {
		return $post->ID;
	}
}

/* sets the excerpt length */
function customize_the_excerpt_length() {
	return 30;
}
add_filter('excerpt_length','customize_the_excerpt_length');

/* Add Featured Image Support To Your WordPress Theme */
function add_featured_image_support_to_your_wordpress_theme() {
	add_theme_support( 'post-thumbnails' );
/* Add Featured Image Support To Your WordPress Theme */
	add_image_size( 'small-thumbnail', 200, 200, true );
	add_image_size( 'single-post-image', 350, 350, true );
}
 
add_action( 'after_setup_theme', 'add_featured_image_support_to_your_wordpress_theme' );


