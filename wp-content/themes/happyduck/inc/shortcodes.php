<?php

/**
 * Generate a URL for an image in the template img directory
 *
 * @param $atts
 *
 * @return string
 */
function t_img_shortcode( $atts ) {
	$attr = shortcode_atts( [
		'name' => '' // filename attribute passed in
	], $atts );

	return t_img($attr['name']);
}
add_shortcode( 't_img', 't_img_shortcode' );