<div class="article-archive">

	<?php if(has_post_thumbnail()) : ?>
		<a href="<?php echo get_the_permalink(); ?>">
			<img class="article-archive__image" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'article-archive'); ?>" alt="<?php echo get_the_title(); ?>">
		</a>
	<?php endif; ?>
	<div class="article-archive__content">
		<a href="<?php echo get_the_permalink(); ?>">
			<h4 class="article-archive__title text--medium"><?php the_title(); ?></h4>
		</a>

		<div class="article-archive__meta">
			<?php the_date('j F Y'); ?> in <?php the_category(', '); ?><br>
			<span class="hide--s hide--xs"><img src="<?php echo t_img('icon-comment.svg'); ?>" alt="" class="svg article-archive__icon"> <?php comments_number('0 comments', '1 comment', '% comments'); ?> <img src="<?php echo t_img('icon-clock.svg'); ?>" alt="" class="svg article-archive__icon"> <?php echo reading_time(get_the_content()); ?> minutes <img src="<?php echo t_img('icon-eye.svg'); ?>" alt="" class="svg article-archive__icon"> <?php echo getPostViews(get_the_ID()); ?> views</span>
		</div>

		<?php if(get_field('lead_paragraph')) : ?>
			<p class="article-archive__extract"><?php echo truncate( get_field('lead_paragraph'), 200 ); ?> <a
					href="<?php echo get_the_permalink(); ?>">More...</a></p>
		<?php else : ?>
			<p class="article-archive__extract"><?php echo truncate( strip_tags(get_the_content()), 200 ); ?> <a
					href="<?php echo get_the_permalink(); ?>">More...</a></p>
		<?php endif; ?>
		<p class="article-archive__tags"><?php the_tags(); ?></p>
	</div>

</div>