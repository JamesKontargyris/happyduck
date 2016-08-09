<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package happyduck
 */

?>

	</div><!-- #content -->

	<div class="footer-head <?php if(get_field('testimonials')) : ?>footer-head--with-testimonials <?php endif; ?>">
		<img class="footer-head__mascot" src="<?php echo t_img('footer-mascot.png'); ?>" alt="Happy Duck Mascot">
	</div>

	<footer class="footer">
		<div class="footer__sections">
			<section class="footer__section">
				<?php dynamic_sidebar('footer-left'); ?>
			</section>
			<section class="footer__section">
				<?php dynamic_sidebar('footer-centre'); ?>
			</section>
			<section class="footer__section">
				<?php dynamic_sidebar('footer-right'); ?>
			</section>
		</div>
	</footer>

	<section class="footer__post-footer">
		<?php dynamic_sidebar('post-footer'); ?>
	</section>

	<section class="footer__site-info">
		<div class="footer__site-info__cols">
			<div class="footer__site-info__left-col">
				<?php dynamic_sidebar('site-info-left'); ?>
			</div>
			<div class="footer__site-info__right-col">
				<?php dynamic_sidebar('site-info-right'); ?>
			</div>
		</div>
	</section>


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
