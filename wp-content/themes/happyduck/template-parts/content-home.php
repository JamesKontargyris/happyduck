<?php include('partials/home-anim-banner.php'); ?>

<!--USP bar 1-->

<section class="usp-bar">
	<?php if(get_field("usp_bar_1_title")) : ?>
		<h2 class="usp-bar__title">
			<?php echo get_field("usp_bar_1_title"); ?>
		</h2>
	<?php endif; ?>

	<ul class="gallery gallery--row-of-3 margin--no-bottom">

		<?php for($i = 1; $i <= 3; $i++) : ?>
			<li class="usp">
				<?php if(get_field("usp_bar_1_icon_$i")) : ?>
					<i class="usp__image usp__image--circle usp__image--large"><img src="<?php echo get_field("usp_bar_1_icon_$i"); ?>" alt="<?php echo get_field("usp_bar_1_title_$i"); ?>" class="svg"></i>
				<?php endif; ?>

				<?php if(get_field("usp_bar_1_title_$i")) : ?>
					<h4 class="usp__title">
						<?php echo get_field("usp_bar_1_title_$i"); ?>
					</h4>
				<?php endif; ?>

				<?php if(get_field("usp_bar_1_text_$i")) : ?>
					<p class="usp__text">
						<?php echo get_field("usp_bar_1_text_$i"); ?>
					</p>
				<?php endif; ?>
			</li>
		<?php endfor; ?>
	</ul>

	<?php if(get_field("usp_bar_1_call_to_action")) : ?>
		<div class="btn-group btn-group--align-center">
			<a href="<?php echo get_the_permalink(get_field('usp_bar_1_call_to_action')[0]); ?>" class="btn btn--primary"><?php echo trim(get_field('usp_bar_1_call_to_action_text')) ? get_field('usp_bar_1_call_to_action_text') : get_the_title(get_field('usp_bar_1_call_to_action')[0]); ?></a>
		</div>
	<?php endif; ?>
</section>
<!--End of USP bar 1-->

<section class="home-service-areas-intro">
	<div class="home-service-areas-intro__content">
		<?php if(get_field('service_areas_image')) : ?>
			<div class="home-service-areas-intro__left-col">
				<img src="<?php echo get_field('service_areas_image'); ?>" alt="">
			</div>
			<div class="home-service-areas-intro__right-col">
				<h2 class="home-service-areas-intro__title"><?php echo get_field('service_areas_title'); ?></h2>
				<p class="home-service-areas-intro__text"><?php echo get_field('service_areas_text'); ?></p>
				<a href="/services" class="btn btn--primary hide--l hide--xl">Learn more</a>
			</div>
		<?php else : ?>
			<h2 class="text--medium"><?php echo get_field('service_areas_title'); ?></h2>
			<p><?php echo get_field('service_areas_text'); ?></p>
			<a href="#" class="btn btn--primary hide--l hide--xl">Learn more</a>
		<?php endif; ?>

	</div>
</section>

<section class="home-service-areas-switcher">
	<div class="home-service-areas-switcher__content">
		<ul class="home-service-areas-switcher__menu">
			<?php foreach($service_areas = get_service_areas() as $service_area) : ?>
				<li class="home-service-areas-switcher__menu__item"><a class="home-service-areas-switcher__menu__link" data-service-area-block="<?php echo $service_area->ID; ?>" href="<?php echo get_the_permalink($service_area->ID); ?>"><?php echo get_the_title($service_area->ID); ?></a></li>
			<?php endforeach; ?>
		</ul>

<!--		service-area-content blocks are hidden/shown depending on the link clicked above-->
		<div class="home-service-areas-switcher__service-area-blocks">

			<?php foreach($service_areas as $service_area) : ?>
				<div id="<?php echo $service_area->ID; ?>" class="home-service-areas-switcher__service-area-content">
					<?php if(has_post_thumbnail($service_area->ID)) : ?>
						<div class="home-service-areas-switcher__icon">
							<i>
								<img src="<?php echo get_the_post_thumbnail_url($service_area->ID); ?>" alt="<?php echo get_the_title($service_area->ID); ?>" class="svg">
							</i>
						</div>
					<?php endif; ?>
					<div class="home-service-areas-switcher__details">
						<div class="home-service-areas-switcher__service-area-text">
							<div class="home-service-areas-switcher__service-area-title">
								<?php echo get_field('summary_headline', $service_area->ID); ?>
							</div>
							<p><?php echo get_field('summary', $service_area->ID); ?></p>
							<p class="margin--none"><a href="<?php echo get_the_permalink($service_area->ID); ?>" class="btn btn--primary">Learn more</a></p>
						</div>
						<div class="home-service-areas-switcher__services-tick-list">
							<?php if($services = get_field('services', $service_area->ID)) : ?>
								<p>We offer:</p>
								<ul class="services-tick-list">
									<?php foreach($services as $service) : ?>
										<li class="services-tick-list__item"><?php echo get_the_title($service->ID); ?></li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>
						</div>
					</div>
				</div>
			<?php endforeach; ?>

		</div>
	</div>
</section>

<!--USP bar 2-->
<section class="usp-bar">
	<?php if(get_field("usp_bar_2_title")) : ?>
		<h2 class="usp-bar__title">
			<?php echo get_field("usp_bar_2_title"); ?>
		</h2>
	<?php endif; ?>

	<ul class="gallery gallery--row-of-3 margin--no-bottom">

		<?php for($i = 1; $i <= 3; $i++) : ?>
			<li class="usp">
				<?php if(get_field("usp_bar_2_icon_$i")) : ?>
					<i class="usp__image usp__image--coral-icon"><img src="<?php echo get_field("usp_bar_2_icon_$i"); ?>" alt="<?php echo get_field("usp_bar_2_title_$i"); ?>" class="svg"></i>
				<?php endif; ?>

				<?php if(get_field("usp_bar_2_title_$i")) : ?>
					<h4 class="usp__title">
						<?php echo get_field("usp_bar_2_title_$i"); ?>
					</h4>
				<?php endif; ?>

				<?php if(get_field("usp_bar_2_text_$i")) : ?>
					<p class="usp__text">
						<?php echo get_field("usp_bar_2_text_$i"); ?>
					</p>
				<?php endif; ?>
			</li>
		<?php endfor; ?>
	</ul>

	<?php if(get_field("usp_bar_2_call_to_action")) : ?>
		<div class="btn-group btn-group--align-center">
			<a href="<?php echo get_the_permalink(get_field('usp_bar_2_call_to_action')[0]); ?>" class="btn btn--primary"><?php echo trim(get_field('usp_bar_2_call_to_action_text')) ? get_field('usp_bar_2_call_to_action_text') : get_the_title(get_field('usp_bar_2_call_to_action')[0]); ?></a>
		</div>
	<?php endif; ?>
</section>
<!--End of USP bar 2-->