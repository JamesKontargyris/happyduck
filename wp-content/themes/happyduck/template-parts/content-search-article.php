<div class="search-result">

	<div class="search-result__content">
		<a href="<?php echo get_the_permalink(); ?>">
			<h4 class="search-result__title"><?php the_title(); ?></h4>
		</a>

		<div class="search-result__meta">
			<?php the_date('j F Y'); ?> in <?php the_category(', '); ?><br>
			<span class="hide--s hide--xs"><img src="<?php echo t_img('icon-comment.svg'); ?>" alt="" class="svg search-result__meta-icon"> <?php comments_number('0 comments', '1 comment', '% comments'); ?> <img src="<?php echo t_img('icon-clock.svg'); ?>" alt="" class="svg search-result__meta-icon"> <?php echo reading_time(get_the_content()); ?> minutes <img src="<?php echo t_img('icon-eye.svg'); ?>" alt="" class="svg search-result__meta-icon"> <?php echo getPostViews(get_the_ID()); ?> views</span>
		</div>

		<?php if(get_field('lead_paragraph')) : ?>
			<p class="search-result__extract"><?php echo truncate( get_field('lead_paragraph'), 200 ); ?> <a
					href="<?php echo get_the_permalink(); ?>">More...</a></p>
		<?php else : ?>
			<p class="search-result__extract"><?php echo truncate( strip_shortcodes(strip_tags(get_the_content())), 200 ); ?> <a
					href="<?php echo get_the_permalink(); ?>">More...</a></p>
		<?php endif; ?>
		<p class="search-result__tags"><?php the_tags(); ?></p>
	</div>

</div>