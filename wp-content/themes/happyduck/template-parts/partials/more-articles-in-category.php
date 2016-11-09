<?php if($more_articles = get_articles_in_category(get_the_category()[0]->cat_ID, 6, get_the_ID())) : ?>
	<section class="more-in-category">
		<h3 class="text--mid-grey text--bold heading--with-border-top">More in <?php echo get_the_category()[0]->name; ?></h3>
		<ul class="gallery gallery--row-of-4">
			<?php foreach($more_articles as $article) : ?>
				<li class="gallery__item">
					<div class="article-extract">
						<a href="<?php echo get_the_permalink($article->ID); ?>">
							<?php if(has_post_thumbnail($article->ID)) : ?>
								<img class="article-extract__image" src="<?php echo get_the_post_thumbnail_url($article->ID, 'large-thumb'); ?>" alt="<?php echo get_the_title($article->ID); ?>">
							<?php endif; ?>
							<span class="article-extract__title text--medium"><?php echo truncate( get_the_title($article->ID), 80 ); ?></span>
						</a>
						<div class="article-extract__meta text--light-grey text--14"><?php echo date( "j F Y", strtotime( get_the_date('j F Y', $article->ID) ) ) ?></div>
					</div>
				</li>
			<?php endforeach; ?>
		</ul>
	</section>
<?php endif; ?>