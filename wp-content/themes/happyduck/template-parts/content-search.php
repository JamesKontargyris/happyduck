<div class="search-result">

	<div class="search-result__content">
		<a href="<?php echo get_the_permalink(); ?>">
			<h4 class="search-result__title"><?php the_title(); ?></h4>
		</a>

		<p class="search-result__extract"><?php echo truncate( strip_shortcodes(strip_tags(get_the_content())), 200 ); ?>
			<a href="<?php echo get_the_permalink(); ?>">More...</a>
		</p>
	</div>

</div>
