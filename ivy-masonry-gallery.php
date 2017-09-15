<?php
/*
Plugin Name: Ivy Masonry Image Gallery
Version: 1.1
License: GPL
Description: Adds a masonry style to the default WordPress gallery. 
Author: Landon Dorrier
*/



//registering javascript and css
wp_register_script ( 'masonry-js', plugins_url ( 'js/ivy-masonry-gallery.js', __FILE__ ) );
wp_register_script ( 'featherlight', plugins_url ( 'js/featherlight.min.js', __FILE__ ) );
wp_register_script ( 'featherlight-gallery', plugins_url ( 'js/featherlight.gallery.min.js', __FILE__ ) );
wp_register_script ( 'detect-swipe', plugins_url ( 'js/jquery.detect_swipe.min.js', __FILE__ ) );

wp_register_style ( 'masonry-style', plugins_url ( 'css/style.css', __FILE__ ) );
wp_register_style ( 'featherlight', plugins_url ( 'css/featherlight.min.css', __FILE__ ) );
wp_register_style ( 'featherlight-gallery', plugins_url ( 'css/featherlight.gallery.min.css', __FILE__ ) );

//implementing the registerd javascript and css in the page
wp_enqueue_script( 'masonry-js', 'js/ivy-masonry-gallery.js', array( ), false, true );
wp_enqueue_script( 'featherlight', 'js/featherlight.min.js', array( ), false, true );
wp_enqueue_script( 'featherlight-gallery', 'js/featherlight.gallery.min.js', array( ), false, true );
wp_enqueue_script( 'detect-swipe', 'js/jquery.detect_swipe.min.js', array(), false, false );

wp_enqueue_style('featherlight');
wp_enqueue_style('featherlight-gallery');
wp_enqueue_style('masonry-style');
		
		
function branchlands2015_gallery_defaults ( $settings ) {
	$settings['galleryDefaults']['link'] = 'file'; // Change this to 'none' to disable links on images
	$settings['galleryDefaults']['columns'] = '3'; // Change this value to set the number of columns
	return $settings;
}
add_filter ( 'media_view_settings', 'branchlands2015_gallery_defaults' );

add_filter( 'shortcode_atts_gallery',
	function( $out ){
 		$out['size'] = 'medium';
 		return $out;
	}
);


?>
