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
	<div class="home-anim-banner__plane"></div>
	<div class="home-anim-banner__sun"><img src="<?php echo t_img('home/sun.svg'); ?>" alt="" class="svg"></div>
	<div class="home-anim-banner__content">
		<h1 class="home-anim-banner__title">
			<?php echo get_field('banner_title'); ?>
		</h1>
		<p class="home-anim-banner__sub-title">
			<?php echo get_field('banner_sub_title'); ?>
		</p>
		<p class="home-anim-banner__links">
			<a href="#" class="btn btn--primary">Contact Us</a>
		</p>
		<div class="home-anim-banner__devices"><img src="<?php echo t_img('home/devices.svg'); ?>" alt="" class="svg"></div>
	</div>
</div>

<!--USP bar 1-->

<section class="usp-bar">
	<?php if(get_field("usp_bar_1_title")) : ?>
		<h2 class="text--light-grey text--align-center">
			<?php echo get_field("usp_bar_1_title"); ?>
		</h2>
	<?php endif; ?>

	<ul class="gallery gallery--row-of-3">

		<?php for($i = 1; $i <= 3; $i++) : ?>
			<li class="usp-bar__block">
				<?php if(get_field("usp_bar_1_icon_$i")) : ?>
					<i class="icon icon--xxxxlarge icon--circle icon--align-center hide--xs hide--s"><img src="<?php echo get_field("usp_bar_1_icon_$i"); ?>" alt="<?php echo get_field("usp_bar_1_title_$i"); ?>" class="svg"></i>
				<?php endif; ?>

				<?php if(get_field("usp_bar_1_title_$i")) : ?>
					<h4 class="text--coral text--bold text--align-center">
						<?php echo get_field("usp_bar_1_title_$i"); ?>
					</h4>
				<?php endif; ?>

				<?php if(get_field("usp_bar_1_text_$i")) : ?>
					<p class="text--align-center">
						<?php echo get_field("usp_bar_1_text_$i"); ?>
					</p>
				<?php endif; ?>
			</li>
		<?php endfor; ?>
	</ul>
</section>
<!--End of USP bar 1-->

<section class="hero hero--yellow">
	<div class="hero__content">
		<?php if(get_field('service_areas_image')) : ?>
			<div class="grid__one-half">
				<h2 class="text--medium"><?php echo get_field('service_areas_title'); ?></h2>
				<p><?php echo get_field('service_areas_text'); ?></p>
				<a href="#" class="btn btn--primary hide--l hide--xl">Learn more</a>
			</div>
			<div class="grid__one-half hide--xs hide--s hide--m">
				<img src="<?php echo get_field('service_areas_image'); ?>" alt="">
			</div>
		<?php else : ?>
			<h2 class="text--medium"><?php echo get_field('service_areas_title'); ?></h2>
			<p><?php echo get_field('service_areas_text'); ?></p>
			<a href="#" class="btn btn--primary hide--l hide--xl">Learn more</a>
		<?php endif; ?>

	</div>
</section>

<!--USP bar 2-->
<?php if(get_field("usp_bar_2_title")) : ?>
	<h2 class="text--light-grey text--align-center">
		<?php echo get_field("usp_bar_2_title"); ?>
	</h2>
<?php endif; ?>

<ul class="usp-bar gallery gallery--row-of-3">

	<?php for($i = 1; $i <= 3; $i++) : ?>
		<li>
			<?php if(get_field("usp_bar_2_icon_$i")) : ?>
				<i class="icon icon--xlarge icon--align-center icon--fill-coral"><img src="<?php echo get_field("usp_bar_2_icon_$i"); ?>" alt="<?php echo get_field("usp_bar_2_title_$i"); ?>" class="svg"></i>
			<?php endif; ?>

			<?php if(get_field("usp_bar_2_title_$i")) : ?>
				<h4 class="text--coral text--bold text--align-center">
					<?php echo get_field("usp_bar_2_title_$i"); ?>
				</h4>
			<?php endif; ?>

			<?php if(get_field("usp_bar_2_text_$i")) : ?>
				<p class="text--align-center">
					<?php echo get_field("usp_bar_2_text_$i"); ?>
				</p>
			<?php endif; ?>
		</li>
	<?php endfor; ?>
</ul>
<!--End of USP bar 2-->