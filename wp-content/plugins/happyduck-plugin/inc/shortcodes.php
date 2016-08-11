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

function date_shortcode( $atts ) {
	$attr = shortcode_atts( [
		'format' => '' // e.g. d-m-Y
	], $atts );

	return date($attr['format']);
}
add_shortcode( 'date', 'date_shortcode' );

/**
 * Shortcode to generate a page menu with links to service areas
 *
 * @usage [service-area-page-menu]
 *
 * @return string
 */
function service_area_page_menu_shortcode()
{
	$string = '';
	if($areas = get_service_areas())
	{
		$string .= '<section class="page-menu has-drop-shadow">';
			$string .= '<ul class="page-menu__items">';
				$string .= '<li class="page-menu__mobile-toggle is-toggle" data-toggle-items=".page-menu__item">Services</li>';
				foreach($areas as $area) {
					$string .= '<li class="page-menu__item">';
					$string .= '<a class="page-menu__link ';
					if($area->ID == get_the_ID()) {
						$string .= 'page-menu__link--active';
					}
					$string .= '" href="' . get_the_permalink($area->ID) . '">' . get_the_title($area->ID) . '</a>';
					$string .= '</li>';
				}
			$string .= '</ul>';
		$string .= '</section>';
	}

	return $string;
}
add_shortcode( 'service-area-page-menu', 'service_area_page_menu_shortcode' );

/**
 * Shortcode to list service areas in feature blocks
 *
 * @usage [service-area-list format="alternate|standard"]
 *
 * @param $atts
 *
 * @return string
 */
function service_area_list_shortcode($atts)
{
	$attr = shortcode_atts( [
		'format' => 'alternate' // standard or alternate
	], $atts );

	$string = '';

	if($service_areas = get_service_areas()) {
		$count = 0;
		foreach($service_areas as $service_area) : $id = $service_area->ID;

			$string .= '<div class="feature ';
			if($count % 2 && $attr['format'] == 'alternate') {
				$string .= 'feature--light-grey';
			}
			$string .= '">';

				$string .= '<div class="feature__content ';
				if($count % 2 && $attr['format'] == 'alternate') {
					$string .= 'feature__content--reverse';
				}
				$string .= '">';

					if(has_post_thumbnail($id)) {
						$string .= '<div class="feature__icon feature__icon--padded feature__icon--circle feature__icon--coral"><img class="svg" src="' . get_the_post_thumbnail_url($id) . '" alt="' . get_the_title($id) .'" /></div>';
					}

					$string .= '<div class="feature__text">';
						$string .= '<h4 class="text--bold margin--none">' . get_the_title($id) . '</h4>';
						$string .= '<h3 class="text--coral margin--bottom-small">' . get_field('summary_headline', $id) . '</h3>';
						$string .= '<p>' . get_field('summary', $id) . '</p>';
						$string .= '<p class="margin--none"><a class="btn btn--primary btn--small margin--none" href="' . get_the_permalink($id) . '">' . get_field('summary_button_text', $id) . '</a></p>';
					$string .= '</div>';

				$string .= '</div>';
			$string .= '</div>';
			$count++;
		endforeach;
	}

	return $string;
}
add_shortcode( 'service-area-list', 'service_area_list_shortcode' );
