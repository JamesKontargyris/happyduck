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
				<p class="article__meta"><span class="text--bold">6 June 2016</span>
					<?php if($cats = get_the_category()) : ?>in <?php echo format_categories($cats); endif; ?>

					<br>Reading time: <?php echo reading_time(get_the_content(get_the_ID())); ?> minutes <span class="hide--l hide--xl"><br></span> <span class="hide--xs hide--s hide--m">|</span> 0 comments</p>
			</header>
			<section class="page-section__main article__main">

				<img src="http://lorempixel.com/1200/792" alt="" class="article__featured-image">


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

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
			</section>

			<section class="page-section__sidebar article__sidebar">
				<div class="signup-form signup-form--padded signup-form--rounded-corners">
					<div class="signup-form__intro text--white">
						<h4 class="text--yellow text--bold margin--none">Join our Mailing List</h4>
						Receive tips, articles and advice direct from HDHQ to your inbox.
					</div>
					<div class="signup-form__fields">
						<div class="signup-form__fieldgroup">
							<label class="text--white" for="name">Your name</label>
							<input type="text" class="input--full-span">
						</div>
						<div class="signup-form__fieldgroup">
							<label class="text--white" for="email">Your email address</label>
							<input type="text" class="input--full-span">
						</div>
						<div class="signup-form__fieldgroup">
							<input type="submit" value="Join" class="btn btn--primary btn--fill-parent">
						</div>
					</div>
				</div>

				<section class="widget">
					<h6 class="widget-title text--light-grey text--medium text--uppercase text--expanded">Popular Posts</h6>
					<div class="article-extract article-extract--inline">
						<a href="#">
							<img class="article-extract__image" src="http://lorempixel.com/90/58" alt="Article Title">						<span class="article-extract__title text--medium"><?php echo truncate('Basic Microsoft Excel functions: SUM and operators blah blah blah Basic Microsoft Excel functions: SUM and operators blah blah blah', 80); ?></span>
						</a>
						<div class="article-extract__meta text--light-grey text--12">16 May 2016</div>
					</div>
					<div class="article-extract article-extract--inline">
						<a href="#">
							<img class="article-extract__image" src="http://lorempixel.com/90/58" alt="Article Title">						<span class="article-extract__title text--medium"><?php echo truncate('Basic Microsoft Excel functions: SUM and operators blah blah blah Basic Microsoft Excel functions: SUM and operators blah blah blah', 80); ?></span>
						</a>
						<div class="article-extract__meta text--light-grey text--12">16 May 2016</div>
					</div>
					<div class="article-extract article-extract--inline">
						<a href="#">
							<img class="article-extract__image" src="http://lorempixel.com/90/58" alt="Article Title">						<span class="article-extract__title text--medium"><?php echo truncate('Basic Microsoft Excel functions: SUM and operators blah blah blah Basic Microsoft Excel functions: SUM and operators blah blah blah', 80); ?></span>
						</a>
						<div class="article-extract__meta text--light-grey text--12">16 May 2016</div>
					</div>
					<div class="article-extract article-extract--inline">
						<a href="#">
							<img class="article-extract__image" src="http://lorempixel.com/90/58" alt="Article Title">						<span class="article-extract__title text--medium"><?php echo truncate('Basic Microsoft Excel functions: SUM and operators blah blah blah Basic Microsoft Excel functions: SUM and operators blah blah blah', 80); ?></span>
						</a>
						<div class="article-extract__meta text--light-grey text--12">16 May 2016</div>
					</div>
				</section>

<!--				<section class="widget">-->
<!--					<h6 class="widget-title text--light-grey text--medium text--uppercase text--expanded">Categories</h6>-->
<!--					<ul class="link-group text--light-grey">-->
<!--						<li class="link-group__item"><a class="link-group__link text--medium" href="#">Excel Basics</a> (7)</li>-->
<!--						<li class="link-group__item"><a class="link-group__link text--medium" href="#">Accountancy Tips</a> (4)</li>-->
<!--						<li class="link-group__item"><a class="link-group__link text--medium" href="#">Category</a> (3)</li>-->
<!--						<li class="link-group__item"><a class="link-group__link text--medium" href="#">Category</a> (2)</li>-->
<!--						<li class="link-group__item"><a class="link-group__link text--medium" href="#">Category</a> (2)</li>-->
<!--					</ul>-->
<!--				</section>-->

				<?php dynamic_sidebar('article'); ?>
			</section>
		</div>
	</div>

</article><!-- #post-## -->
