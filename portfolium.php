<?php
/*
Plugin Name: Portfolium
Description: Embed projects, skills and experiences from Portfolium.com into your WordPress site
Version: 1.2
Author: Rami Yushuvaev
Author URI: http://GenerateWP.com/
Text Domain: portfolium
Domain Path: /languages
License: GPL2+
*/



/*
 * Prevent direct access to the file
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



/*
 * Portfolium oEmbed
 */
function portfolium_oembed_provider() {

	wp_oembed_add_provider( '#https?://(www\.)?portfolium.com/entry/.*#i', 'https://api.portfolium.com/oembed/', true );

}

add_action( 'init', 'portfolium_oembed_provider' );



/*
 * Portfolium Shortcode
 */
function portfolium_shortcode( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'id'    => '',
			'width' => '637',
		), $atts )
	);

	// Code
	return '<div class="portfolium-entry-widget" data-id="' . $id . '" data-width="' . $width . '"></div><script src="https://portfolium.com/js/prod/portfolium.js" async></script>';

}
add_shortcode( 'portfolium', 'portfolium_shortcode' );
