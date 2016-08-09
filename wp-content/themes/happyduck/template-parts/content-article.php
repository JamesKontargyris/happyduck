<?php
/**
 * Template part for displaying a service area in page.php.
 * @package happyduck
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="page-bg--yellow">

	<div class="page-section">
		<div class="page-section__container">
			<header class="entry-header">
				<h1 class="article__title entry-title"><?php the_title(); ?></h1>
				<p class="article__meta"><span class="text--bold"><?php echo the_date('j F Y'); ?></span>
					<?php if($cats = get_the_category()) : ?>in <?php echo format_categories($cats); endif; ?>

					<br>Reading time: <?php echo reading_time(get_the_content(get_the_ID())); ?> minutes <span class="hide--l hide--xl"><br></span> <span class="hide--xs hide--s hide--m">|</span> <?php comments_number('0 comments', '1 comment', '% comments'); ?><span class="hide--l hide--xl"><br></span><span class="hide--xs hide--s hide--m">,</span> <?php echo getPostViews(get_the_ID()); ?> views</p>
			</header>
			<section class="page-section__main article__main">

				<?php if(has_post_thumbnail()) : ?>
					<img src="<?php echo get_the_post_thumbnail_url($article->ID, 'article-feature'); ?>" alt="<?php the_title(); ?>" class="article__featured-image">
				<?php endif; ?>


				<div class="entry-content article__content">

<!--					Lead paragraph-->
					<?php if(get_field('lead_paragraph')) : ?>
						<p class="article__lead-para"><?php echo get_field('lead_paragraph'); ?></p>
					<?php endif; ?>

<!--					Article file(s) download link-->
					<?php if(get_field('article_file')) : ?>
						<p class="text--italic text--light-grey"><a href="<?php echo get_field('article_file'); ?>" class="text--bold" download>Download the accompanying file(s) for this article.</a></p>
					<?php endif; ?>

<!--					Article content-->
					<?php the_content(); ?>

				</div><!-- .entry-content -->

				<?php include('partials/more-articles-in-category.php'); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
			</section>

			<section class="page-section__sidebar article__sidebar">
				<?php dynamic_sidebar('article'); ?>
			</section>
		</div>
	</div>

</article><!-- #post-## -->
