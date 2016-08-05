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
					<i class="icon icon--xxxlarge hide--xs hide--s">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Crystal Ball">
					</i>
				<?php endif; ?>
				<h1 class="entry-title heading--show-as-h6 text--white hide--l-up"><?php the_title(); ?></h1>
				<h2 class="text--white text--regular"><?php echo get_field('headline'); ?></h2>
				<?php if(get_field('lead_paragraph')) : ?>
					<hr class="divider divider--narrow divider--overlay-light">
					<p class="text--white para--narrow para--lead margin--none"><?php echo get_field('lead_paragraph'); ?></p>
				<?php endif; ?>
			</div>
		</section>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php if(get_field('services')) : ?>
			<?php foreach(get_field('services') as $service_id) : ?>
				<div class="service">
					<div class="service__bar is-toggle" data-toggle-items=".service__content">
						<div class="service__header">
							<i class="service__toggle-arrow"></i>
							<i class="service__icon icon icon--large margin--no-bottom">
								<?php if( ! has_post_thumbnail($service_id)) : ?>
									<img class="svg" src="<?php echo t_img('hdc_mascot.svg'); ?>">
								<?php else : ?>
									<img class="svg" src="<?php echo get_the_post_thumbnail_url($service_id); ?>">
								<?php endif; ?>

							</i>
							<div class="service__title text--brown margin--none"><?php echo get_the_title($service_id); ?></div>
						</div>
					</div>
					<div class="service__content">
						<div class="service__description">
							<p><?php echo get_field('description', $service_id); ?></p> <a class="btn btn--secondary btn--small" href="#">Contact us for more information</a>
	<!--						TODO: Update contact us link with subject line -->
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		<?php endif; ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer page-footer">
		<div class="page-footer__content padding--no-top">
			<i class="icon icon--badge icon--small icon--nudge-up">
				<img class="svg" src="<?php echo t_img('speech-bubbles.svg'); ?>">
			</i>
			<h2 class="text--coral">Ready to discuss your project?</h2>
			<a href="#" class="btn btn--primary btn--large">Contact us</a>
		</div>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
