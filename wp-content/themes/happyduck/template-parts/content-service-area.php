<?php
/**
 * Template part for displaying a service area in page.php.
 * @package happyduck
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<?php include('partials/page-menu-service-area.php'); ?>

		<section class="hero hero--coral hero--align-centre">
			<div class="hero__content">
				<?php if(has_post_thumbnail()) : ?>
					<img class="icon icon--xxxlarge" src="<?php echo t_img('crystalball.svg'); ?>" alt="Crystal Ball">
				<?php endif; ?>
				<h1 class="entry-title header--show-as-h6 text--white hide--l-up"><?php the_title(); ?></h1>
				<h2 class="text--white text--regular"><?php echo get_field('headline'); ?></h2>
				<?php if(get_field('lead_paragraph')) : ?>
					<hr class="divider divider--narrow divider--overlay">
					<p class="text--white para--narrow para--lead margin--none"><?php echo get_field('lead_paragraph'); ?></p>
				<?php endif; ?>
			</div>
		</section>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="service">
			<div class="service__bar is-toggle" data-toggle-items=".service__content">
				<div class="service__header">
					<i class="service__toggle-arrow"></i>
					<div class="service__icon icon icon--large margin--no-bottom"><img class="svg" src="<?php echo t_img('speech-bubble.svg'); ?>"></div>
					<div class="service__title">Financial Modelling</div>
				</div>
			</div>
			<div class="service__content">
				<div class="service__description">
					<p>Gain valuable insights into the financial future of your business, taking into account internal and external factors. What would happen if an exchange rate changed, that company you just pitched to came on board or material prices decreased? In conjunction with our budgeting tools, you’ll get the full picture for the here and now, as well as the future.</p> <a class="btn btn--secondary btn--small" href="#">Contact us for more information</a>
				</div>
			</div>
		</div>
		<div class="service">
			<div class="service__bar is-toggle" data-toggle-items=".service__content">
				<div class="service__header">
					<i class="service__toggle-arrow"></i>
					<div class="service__icon icon icon--large margin--no-bottom"><img class="svg" src="<?php echo t_img('speech-bubble.svg'); ?>"></div>
					<div class="service__title">Financial Modelling</div>
				</div>
			</div>
			<div class="service__content">
				<div class="service__description">
					<p>Gain valuable insights into the financial future of your business, taking into account internal and external factors. What would happen if an exchange rate changed, that company you just pitched to came on board or material prices decreased? In conjunction with our budgeting tools, you’ll get the full picture for the here and now, as well as the future.</p> <a class="btn btn--secondary btn--small" href="#">Contact us for more information</a>
				</div>
			</div>
		</div>
		<div class="service">
			<div class="service__bar is-toggle" data-toggle-items=".service__content">
				<div class="service__header">
					<i class="service__toggle-arrow"></i>
					<div class="service__icon icon icon--large margin--no-bottom"><img class="svg" src="<?php echo t_img('speech-bubble.svg'); ?>"></div>
					<div class="service__title">Financial Modelling</div>
				</div>
			</div>
			<div class="service__content">
				<div class="service__description">
					<p>Gain valuable insights into the financial future of your business, taking into account internal and external factors. What would happen if an exchange rate changed, that company you just pitched to came on board or material prices decreased? In conjunction with our budgeting tools, you’ll get the full picture for the here and now, as well as the future.</p> <a class="btn btn--secondary btn--small" href="#">Contact us for more information</a>
				</div>
			</div>
		</div>
	</div><!-- .entry-content -->

	<footer class="entry-footer page-footer">
		<div class="page-footer__content padding--no-top">
			<i class="icon icon--circle icon--centred icon--nudge-up">
				<img class="svg" src="<?php echo t_img('speech-bubble.svg'); ?>">
			</i>
			<h3 class="text--coral">Ready to discuss your project?</h3>
			<a href="#" class="btn btn--primary btn--large">Contact us</a>
		</div>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
