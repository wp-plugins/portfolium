<?php
/*
Plugin Name: Portfolium
Description: Embed projects, skills and experiences from Portfolium.com into your WordPress site
Version: 1.0
Author: Rami Yushuvaev
Author URI: http://GenerateWP.com/
License: GPL2+
*/

function portfolium_oembed_provider() {

	wp_oembed_add_provider( '#https?://(www\.)?portfolium.com/entry/.*#i', 'https://api.portfolium.com/oembed/', true );

}

add_action( 'init', 'portfolium_oembed_provider' );
