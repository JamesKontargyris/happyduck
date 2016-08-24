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

			<div class="page-section">
				<div class="page-section__container">
					<div class="page-section__main">

						<header class="entry-header">

							<h1 class="page-title"><?php printf( esc_html__( 'Search results for: %s', '_s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
						</header>

						<?php if(have_posts()) : ?>

							<?php
							while ( have_posts() ) : the_post();

								switch(get_post_type()) {
									case 'service-area':
										get_template_part( 'template-parts/content', 'search-service-area' );
										break;
									case 'article':
										get_template_part( 'template-parts/content', 'search-article' );
										break;
									default:
										// By default, load the template part with the suffix that matches the page layout selected for the current page
										get_template_part( 'template-parts/content', 'search' );
										break;
								}

							endwhile; // End of the loop.
							?>

						<?php else : ?>

							No results found. Please try again with different keywords.

						<?php endif; ?>

					</div>
					<div class="page-section__sidebar">
						<?php dynamic_sidebar('default'); ?>
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
include('template-parts/partials/testimonials.php');
get_footer();
