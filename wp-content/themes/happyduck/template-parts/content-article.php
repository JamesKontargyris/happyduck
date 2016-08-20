<?php
/**
 * Template part for displaying a service area in page.php.
 * @package happyduck
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="page-bg--yellow">

	<div class="page-section">
		<div class="page-section__container">
			<header class="entry-header article__header">

				<?php include('partials/breadcrumbs.php'); ?>

				<h1 class="article__title entry-title"><?php the_title(); ?></h1>
				<p class="article__meta"><span class="text--bold"><?php echo the_date('j F Y'); ?></span>
					<?php if(get_the_category()) : ?>in <?php the_category(', '); endif; ?>

					<br><span class="hide--s hide--xs text--14"><img src="<?php echo t_img('icon-comment.svg'); ?>" alt="" class="svg article__icon"> <?php comments_number('0 comments', '1 comment', '% comments'); ?> <img src="<?php echo t_img('icon-clock.svg'); ?>" alt="" class="svg article__icon"> <?php echo reading_time(get_the_content()); ?> minutes <img src="<?php echo t_img('icon-eye.svg'); ?>" alt="" class="svg article__icon"> <?php echo getPostViews(get_the_ID()); ?> views</span>
				</p>
			</header>

			<section class="page-section__main article__main">

				<?php if(has_post_thumbnail()) : ?>
					<img src="<?php echo get_the_post_thumbnail_url($article->ID, 'article-feature'); ?>" alt="<?php the_title(); ?>" class="article__featured-image">
				<?php endif; ?>


				<div class="page-section__content-format">

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

				</div> <!--	.page-section__content-format -->

				<?php if(get_the_tags()) : ?>
					<ul class="link-group link-group--inline">
						<li class="link-group__item text--mid-grey text--bold">Tags:</li>
						<?php foreach(get_the_tags() as $tag) : ?>
							<li class="link-group__item"><a class="btn btn--tertiary btn--xsmall" href="<?php echo get_tag_link($tag); ?>"><?php echo $tag->name; ?></a></li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>

				<?php dynamic_sidebar('post-article'); ?>

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
