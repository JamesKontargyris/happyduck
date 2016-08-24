<?php
/*
Plugin Name: Site Plugin for Happy Duck Consulting
Description: Site-specific code changes for Happy Duck Consulting
*/

/**
 * Import the bem_menu function for better control of Wordpress menus
 * by implementing BEM naming conventions
 */
include('inc/bem_menu.php');

// Import helper functions
include 'inc/helpers.php';

// Import shortcode functions and registrations
include 'inc/shortcodes.php';

// Import widgets
include 'inc/popular_recent_articles_widget.php';
include 'inc/mailinglist_signup_form_widget.php';
include 'inc/menu_widget.php';

/**
 * Set thumbnail sizes
 */
add_image_size( 'small-thumb', 90, 58, true );
add_image_size( 'medium-thumb', 120, 80, true );
add_image_size( 'large-thumb', 150, 100, true );
add_image_size( 'article-feature', 1200, 792, true );
add_image_size( 'article-archive', 600, 400, true );

/**
 * Allow SVG.
 *
 * @param $mimes
 *
 * @return mixed
 */
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

/**
 * Ensure svg previews display correctly on admin pages
 */
function svg_size() {
	echo '<style>
    svg, img[src*=".svg"] {
      max-width: 150px !important;
      max-height: 150px !important;
    }
  </style>';
}
add_action('admin_head', 'svg_size');


/**
 * Track views for each post
 *
 * @param $postID
 *
 * @return string
 */
function getPostViews($postID){
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if($count==''){
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
		return 0;
	}
	return number_format($count);
}
function setPostViews($postID) {
	if( ! current_user_can('manage_options')) { // user is admin so don't add page views
		$count_key = 'post_views_count';
		$count = get_post_meta($postID, $count_key, true);
		if($count==''){
			$count = 0;
			delete_post_meta($postID, $count_key);
			add_post_meta($postID, $count_key, '0');
		}else{
			$count++;
			update_post_meta($postID, $count_key, $count);
		}
	}
}
// Remove issues with prefetching adding extra views
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


/**
 * Add a filter to searches so that, if a post_type variable is
 * spotted in the URL, only show results of that post type.
 * Checks to see if the post type is included in searches too.
 *
 * @param $query
 */
function searchfilter($query)
{
	if ($query->is_search && !is_admin() )
	{
		if(isset($_GET['post_type'])) {
			$types = (array) $_GET['post_type'];
			$allowed_types = get_post_types(['public' => true, 'exclude_from_search' => false]);

			foreach($types as $type)
			{
				if( in_array( $type, $allowed_types ) ) { $filter_type[] = $type; }
			}
			if(count($filter_type))
			{
				$query->set('post_type',$filter_type);
			}
		}
	}
}
add_filter('pre_get_posts', 'searchfilter');

// Add custom post types to archive, category and tag pages
add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
	if(is_category() || is_tag()) {
		$post_type = get_query_var('post_type');
		if($post_type)
			$post_type = $post_type;
		else
			$post_type = array('nav_menu_item', 'article'); // custom post types here - leave nav_menu_item in place so menus are loaded
		$query->set('post_type',$post_type);
		return $query;
	}
}

// Ensure a comment author's display name is displayed on comments
function comment_author_display_name($author) {
	global $comment;
	if (!empty($comment->user_id)){
		$user=get_userdata($comment->user_id);
		$author=$user->display_name;
	}

	return $author;
}
add_filter('get_comment_author', 'comment_author_display_name');

// Query Functions

function get_service_areas()
{
	global $post;

	$args = [
		'post_type' => 'service-area',
		'post_status' => 'publish',
		'posts_per_page' => -1,
		'orderby' => 'menu_order'
	];

	return get_posts($args);
}

function get_recent_articles($count = 5)
{
	global $post;

	$args = [
		'post_type' => 'article',
		'post_status' => 'publish',
		'posts_per_page' => $count,
		'orderby' => 'date'
	];

	return get_posts($args);
}

function get_popular_articles($count = 5)
{
	global $post;

	$args = [
		'post_type' => 'article',
		'post_status' => 'publish',
		'posts_per_page' => $count,
		'meta_key' => 'post_views_count',
		'orderby' => 'meta_value_num'
	];

	return get_posts($args);
}

/**
 * Get articles assigned to a particular category
 *
 * @param $cat   the ID of the category to grab posts from
 * @param int $count   the number of posts to return
 * @param string $exclude    a post ID to exclude
 *
 * @return array
 */
function get_articles_in_category($cat, $count = 6, $exclude = '')
{
	global $post;

	$args = [
		'post_type' => 'article',
		'post_status' => 'publish',
		'posts_per_page' => $count,
		'category' => $cat,
		'orderby' => 'date',
		'exclude' => $exclude
	];

	return get_posts($args);
}