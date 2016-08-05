<?php if(get_field('testimonials')) : ?>
	<div class="testimonial">
		<?php foreach(get_field('testimonials') as $testimonial_id) : ?>
			<figure class="testimonial__content">
				<blockquote class="testimonial__quote">
					<?php echo clean_testimonial_quote(get_field('quote', $testimonial_id)); ?>
				</blockquote>
				<footer class="testimonial__citation">
					<cite class="testimonial__author"><?php echo get_field('author', $testimonial_id); ?></cite><?php if(get_field('company', $testimonial_id)) : ?>, <cite class="testimonial__company"><?php echo get_field('company', $testimonial_id); ?></cite><?php endif; ?>
				</footer>
			</figure>
		<?php endforeach; ?>
	</div>
<?php endif; ?>
