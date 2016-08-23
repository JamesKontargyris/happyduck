<div class="home-anim-banner">
	<div class="home-anim-banner__waves home-anim-banner__waves-white"></div>
	<div class="home-anim-banner__waves home-anim-banner__waves-light-blue"></div>
	<div class="home-anim-banner__waves home-anim-banner__waves-mid-blue"></div>
	<div class="home-anim-banner__waves home-anim-banner__waves-darker-mid-blue"></div>
	<div class="home-anim-banner__waves home-anim-banner__waves-dark-blue"></div>
	<div class="home-anim-banner__hills"></div>
	<div class="home-anim-banner__sailing-ship-small-container">
		<img src="<?php echo t_img('home/sailing-ship.svg'); ?>" alt="" class="svg home-anim-banner__sailing-ship-small">
	</div>
	<div class="home-anim-banner__sailing-ship-large-container">
		<img src="<?php echo t_img('home/sailing-ship.svg'); ?>" alt="" class="svg home-anim-banner__sailing-ship-large">
	</div>
	<div class="home-anim-banner__cloud-1"></div>
	<div class="home-anim-banner__cloud-2"></div>
	<div class="home-anim-banner__cloud-3"></div>
	<div class="home-anim-banner__cloud-4"></div>
	<div class="home-anim-banner__cloud-5"></div>
	<div class="home-anim-banner__plane"></div>
	<div class="home-anim-banner__sun"><img src="<?php echo t_img('home/sun.svg'); ?>" alt="" class="svg"></div>
	<div class="home-anim-banner__content">
		<h1 class="home-anim-banner__title">
			<?php echo get_field('banner_title'); ?>
		</h1>

		<p class="home-anim-banner__sub-title">
			<?php echo get_field('banner_sub_title'); ?>
		</p>

		<?php if(get_field('banner_links')) : ?>
			<p class="home-anim-banner__links">
				<?php foreach(get_field('banner_links') as $page_id) : ?>
					<a href="<?php echo get_the_permalink($page_id); ?>" class="btn btn--primary"><?php echo get_the_title($page_id); ?></a>
				<?php endforeach; ?>
			</p>
		<?php endif; ?>

		<div class="home-anim-banner__devices"><img src="<?php echo t_img('home/devices.svg'); ?>" alt="" class="svg"></div>
	</div>
</div>