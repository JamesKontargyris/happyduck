<?php if($areas = get_service_areas()) : ?>
	<section class="page-menu has-drop-shadow">
		<ul class="page-menu__items">
			<li class="page-menu__mobile-toggle is-toggle" data-toggle-items=".page-menu__item">
				<i class="icon icon--small icon--right">
					<img class="svg" src="<?php echo get_template_directory_uri(); ?>/img/menu.svg" alt="Menu">
				</i> Our Services
			</li>
			<?php foreach($areas as $area) :?>
			<li class="page-menu__item">
				<a class="page-menu__link <?php if($area->ID == get_the_ID()) : ?>page-menu__link--active<?php endif; ?>" href="<?php echo get_the_permalink($area->ID); ?>"><?php echo get_the_title($area->ID); ?></a>
			</li>
			<?php endforeach; ?>
		</ul>
	</section>
<?php endif; ?>