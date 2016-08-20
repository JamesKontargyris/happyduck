<?php if(get_field('use_content_formatting_helper')) : ?>
	<div class="page-section__content-format">
<?php endif; ?>

<?php the_content(); ?>

<?php if(get_field('use_content_formatting_helper')) : ?>
	</div>
<?php endif; ?>