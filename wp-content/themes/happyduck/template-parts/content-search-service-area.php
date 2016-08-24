<div class="search-result">

	<div class="search-result__content">
		<a href="<?php echo get_the_permalink(); ?>">
			<h4 class="search-result__title"><?php the_title(); ?></h4>
		</a>

		<?php if(get_field('lead_paragraph')) : ?>
			<p class="search-result__extract"><?php echo truncate( get_field('lead_paragraph'), 200 ); ?> <a
					href="<?php echo get_the_permalink(); ?>">More...</a></p>
		<?php endif; ?>
	</div>

</div>