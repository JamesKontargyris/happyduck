<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package happyduck
 */

get_header(); ?>

	<div id="primary" class="content-area archive">
		<main id="main" class="site-main" role="main">
			<div class="page-header hero hero--grey margin--none">
				<div class="hero__content hero__content--shallow">
					<?php include('template-parts/partials/breadcrumbs.php'); ?>
					<?php
					the_archive_title( '<h1 class="page-title text--medium margin--none">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</div>
			</div>

			<div class="page-section">
				<div class="page-section__container">

					<section class="page-section__main archive__main">
						<?php if ( have_posts() ) : ?>
							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								switch(get_post_type()) {
									case 'article':
										get_template_part( 'template-parts/extract', 'article' );
										break;
									default:
	//						By default, load the template part with the suffix that matches the page layout selected for the current page
										get_template_part( 'template-parts/content', 'page-' . get_field('page_layout') );
										break;
								}

							endwhile;

							//			the_posts_navigation();

							else :

								get_template_part( 'template-parts/content', 'none' );
							?>

						<?php endif; ?>

					</section>

					<section class="page-section__sidebar">
						<?php dynamic_sidebar('archive'); ?>
					</section>

				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
