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
		'main-navigation-menu' => __( 'Main Navigation Menu' )
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
		'before_title'  => '<h6 class="widget-title text--mid-blue text--bold text--uppercase text--expanded text--12">',
		'after_title'   => '</h6>',
	] );

	register_sidebar( [
		'name'          => esc_html__( 'Footer - Centre', 'happyduck' ),
		'id'            => 'footer-centre',
		'description'   => esc_html__( 'Add widgets to the centre column in the footer.', 'happyduck' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h6 class="widget-title text--mid-blue text--bold text--uppercase text--expanded text--12">',
		'after_title'   => '</h6>',
	] );

	register_sidebar( [
		'name'          => esc_html__( 'Footer - Right', 'happyduck' ),
		'id'            => 'footer-right',
		'description'   => esc_html__( 'Add widgets to the right-hand column in the footer.', 'happyduck' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h6 class="widget-title text--mid-blue text--bold text--uppercase text--expanded text--12">',
		'after_title'   => '</h6>',
	] );

	register_sidebar( [
		'name'          => esc_html__( 'Footer - Post-Footer', 'happyduck' ),
		'id'            => 'post-footer',
		'description'   => esc_html__( 'Add widgets to bar after the footer.', 'happyduck' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s margin--none">',
		'after_widget'  => '</section>',
		'before_title'  => '<h6 class="widget-title text--mid-blue text--bold text--uppercase text--expanded text--12">',
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
 * Unregister some of the default Wordpress widgets and others
 */
function unregister_widgets() {
	unregister_widget('WP_Widget_Pages');
	unregister_widget('WP_Widget_Calendar');
	unregister_widget('WP_Widget_Archives');
	unregister_widget('WP_Widget_Links');
	unregister_widget('WP_Widget_Meta');
	unregister_widget('WP_Widget_Search');
//	unregister_widget('WP_Widget_Text');
//	unregister_widget('WP_Widget_Categories');
	unregister_widget('WP_Widget_Recent_Posts');
	unregister_widget('WP_Widget_Recent_Comments');
	unregister_widget('WP_Widget_RSS');
	unregister_widget('WP_Widget_Tag_Cloud');
	unregister_widget('WP_Nav_Menu_Widget');
	unregister_widget('bcn_widget');  // breadcrumb NavXT widget
	unregister_widget('Twenty_Eleven_Ephemera_Widget');
}

add_action('widgets_init', 'unregister_widgets', 11);

// Add site css styles for the Wordpress editor
add_editor_style('style.css');

//Process shortcodes in the text/HTML widget
add_filter('widget_text', 'do_shortcode');

// Custom comment layout for articles
function happyduck_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;

	?>
	<li <?php comment_class('comment'); ?> id="comment-<?php comment_ID(); ?>">
		<div class="comment__meta"><span class="comment__author"><?php comment_author(); ?></span> on <?php comment_date('j F Y \a\t G:i'); ?></div>
		<div class="comment__content"><?php comment_text(); ?></div>
		<div class="comment__reply">
			<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'happyduck' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		</div>
	</li>
	<?php
}

// Change the default "Leave a reply" title on the comment form
function change_comment_form_title($defaults) {
	$defaults['title_reply'] = 'Leave a comment';
	$defaults['title_reply_to'] = 'Reply to %s';
	return $defaults;
}
add_filter('comment_form_defaults', 'change_comment_form_title');
