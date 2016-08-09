<?php
/**
 * happyduck functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package happyduck
 */

if ( ! function_exists( 'happyduck_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function happyduck_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on happyduck, use a find and replace
	 * to change 'happyduck' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'happyduck', get_template_directory() . '/languages' );

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

	// Set up the WordPress core custom background feature.
//	add_theme_support( 'custom-background', apply_filters( 'happyduck_custom_background_args', array(
//		'default-color' => 'ffffff',
//		'default-image' => '',
//	) ) );
}
endif;
add_action( 'after_setup_theme', 'happyduck_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function happyduck_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'happyduck_content_width', 640 );
}
add_action( 'after_setup_theme', 'happyduck_content_width', 0 );


/**
 * Register menu areas.
 */
function register_menus() {
	register_nav_menus([
		'main-navigation-menu' => __( 'Main Navigation Menu' ),
		'quicklinks-menu' => __( 'QuickLinks Footer Menu' )
	]);
}
add_action( 'init', 'register_menus' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function happyduck_widgets_init() {
	register_sidebar( [
		'name'          => esc_html__( 'Article Sidebar', 'happyduck' ),
		'id'            => 'article',
		'description'   => esc_html__( 'Add widgets below the default content in the article section sidebar.', 'happyduck' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h6 class="widget-title text--light-grey text--medium text--uppercase text--expanded">',
		'after_title'   => '</h6>',
	] );

	register_sidebar( [
		'name'          => esc_html__( 'Footer - Left', 'happyduck' ),
		'id'            => 'footer-left',
		'description'   => esc_html__( 'Add widgets to the left-hand column in the footer.', 'happyduck' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h6 class="widget-title text--mid-blue text--bold text--uppercase">',
		'after_title'   => '</h6>',
	] );

	register_sidebar( [
		'name'          => esc_html__( 'Footer - Centre', 'happyduck' ),
		'id'            => 'footer-centre',
		'description'   => esc_html__( 'Add widgets to the centre column in the footer.', 'happyduck' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h6 class="widget-title text--mid-blue text--bold text--uppercase">',
		'after_title'   => '</h6>',
	] );

	register_sidebar( [
		'name'          => esc_html__( 'Footer - Right', 'happyduck' ),
		'id'            => 'footer-right',
		'description'   => esc_html__( 'Add widgets to the right-hand column in the footer.', 'happyduck' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h6 class="widget-title text--mid-blue text--bold text--uppercase">',
		'after_title'   => '</h6>',
	] );

	register_sidebar( [
		'name'          => esc_html__( 'Site Info Bar - Left', 'happyduck' ),
		'id'            => 'site-info-left',
		'description'   => esc_html__( 'Add widgets to the left-hand column in the site info bar.', 'happyduck' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '',
		'after_title'   => '',
	] );
	register_sidebar( [
		'name'          => esc_html__( 'Site Info Bar - Right', 'happyduck' ),
		'id'            => 'site-info-right',
		'description'   => esc_html__( 'Add widgets to the right-hand column in the site info bar.', 'happyduck' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '',
		'after_title'   => '',
	] );
}
add_action( 'widgets_init', 'happyduck_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function happyduck_scripts() {
	wp_enqueue_style( 'happyduck-slick-css', get_template_directory_uri() . '/js/slick/slick.css' );
	wp_enqueue_style( 'happyduck-style', get_stylesheet_uri() );

	wp_enqueue_script( 'happyduck-jquery', get_template_directory_uri() . '/js/jquery-3.1.0.min.js', array(), '20160728', true );

	wp_enqueue_script( 'happyduck-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'happyduck-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'happyduck-match-height-js', get_template_directory_uri() . '/js/jquery.matchHeight.js', array(), '20160805', true );
	wp_enqueue_script( 'happyduck-slick-js', get_template_directory_uri() . '/js/slick/slick.js', array(), '20160805', true );
	wp_enqueue_script( 'happyduck-site-js', get_template_directory_uri() . '/js/site.js', array(), '20160728', true );
	wp_enqueue_script( 'happyduck-testimonial-js', get_template_directory_uri() . '/js/testimonial.js', array(), '20160805', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'happyduck_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Import the bem_menu function for better control of Wordpress menus
 * by implementing BEM naming conventions
 */
include('inc/bem_menu.php');

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


// Happy Duck Functions

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

/**
 * Helper function to return a theme image
 * @param $filename
 *
 * @return string
 */
function t_img($filename)
{
	return get_template_directory_uri() . '/img/' . $filename;
}

/**
 * Include a script in the inc folder
 * @param $filename
 *
 * @return string
 */
function t_include($filename)
{
	return get_template_directory_uri() . '/inc/' . $filename;
}

/**
 * Helper function to truncate text to a desired length,
 * cutting off text at the first white space beyond the
 * character count
 * @param $text
 * @param int $chars
 *
 * @return string
 */
function truncate($text, $chars = 25)
{
	if(strlen($text) <= $chars) return $text;

	$text = $text." ";
	$text = substr($text,0,$chars);
	$text = substr($text,0,strrpos($text,' '));
	$text = $text."...";

	return $text;
}

function clean_testimonial_quote($quote)
{
	$quote = trim($quote);
	$quote = ltrim($quote, '"');
	$quote = ltrim($quote, "'");
	$quote = rtrim($quote, '"');
	$quote = rtrim($quote, "'");

	return '&quot;' . $quote . '&quot;';
}

/**
 * A function to give an estimated article reading time
 * in minutes based on an article's word count
 *
 * @param $post_content
 *
 * @return float
 */
function reading_time($post_content)
{
	$word = str_word_count(strip_tags($post_content));
	$m = floor($word / 200); // 200 words per minute
	return ($m <= 1) ? 2 : $m;
}

function format_categories($categories)
{
	$string = '';
	$last_item = end($categories);

	foreach($categories as $category)
	{
		if($category == $last_item && count($categories) > 1)
		{
			$string .= 'and <a href="#" class="text--bold">' . $category->name . '</a>';
		}
		elseif(count($categories) > 1)
		{
			$string .= '<a href="#" class="text--bold">' . $category->name . '</a> ';
		}
		else
		{
			$string .= '<a href="#" class="text--bold">' . $category->name . '</a>, ';
		}
	}

	return $string;
}

// Import shortcode functions and registrations
include 'inc/shortcodes.php';

// Import custom post types
//include 'inc/custom-post-types.php';


// Add site css styles for the Wordpress editor
add_editor_style('style.css');