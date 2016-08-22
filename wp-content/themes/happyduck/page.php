<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package happyduck
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				if(is_front_page()) {
					get_template_part( 'template-parts/content', 'home' );
				} else {
					switch(get_post_type()) {
						case 'service-area':
							get_template_part( 'template-parts/content', 'service-area' );
							break;
						case 'article':
							get_template_part( 'template-parts/content', 'article' );
							break;
						default:
//						By default, load the template part with the suffix that matches the page layout selected for the current page
							get_template_part( 'template-parts/content', 'page-' . get_field('page_layout') );
							break;
					}
				}


				// If comments are open or we have at least one comment, load up the comment template.
//				if ( comments_open() || get_comments_number() ) :
//					comments_template();
//				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
include('template-parts/partials/testimonials.php');
get_footer();
