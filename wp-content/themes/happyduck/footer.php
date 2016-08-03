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

	<div class="footer-head">
		<img class="footer-head__mascot" src="<?php echo t_img('footer-mascot.png'); ?>" alt="Happy Duck Mascot">
	</div>

	<footer class="footer">
		<div class="footer__sections">
			<section class="footer__section">
				<h5 class="text--12">Quicklinks</h5>
				<ul class="link-group">
					<li class="link-group__item"><a class="link-group__link link--white text--medium" href="#">About Us</a></li>
					<li class="link-group__item"><a class="link-group__link link--white text--medium" href="#">Business and Financial Analysis</a></li>
					<li class="link-group__item"><a class="link-group__link link--white text--medium" href="#">Link</a></li>
					<li class="link-group__item"><a class="link-group__link link--white text--medium" href="#">Link</a></li>
					<li class="link-group__item"><a class="link-group__link link--white text--medium" href="#">Link</a></li>
				</ul>
			</section>
			<section class="footer__section">
				<h5 class="text--12">Recent Articles</h5>
				<div class="article-extract article-extract--inline">
					<a class="link--white" href="#">
						<img class="article-extract__image" src="http://lorempixel.com/120/80" alt="Article Title">						<span class="article-extract__title"><?php echo truncate('Basic Microsoft Excel functions: SUM and operators blah blah blah Basic Microsoft Excel functions: SUM and operators blah blah blah', 80); ?></span>
					</a>
					<div class="article-extract__meta">16 May 2016</div>
				</div>
				<div class="article-extract article-extract--inline">
					<a class="link--white" href="#">
						<img class="article-extract__image" src="http://lorempixel.com/120/80" alt="Article Title">						<span class="article-extract__title"><?php echo truncate('Basic Microsoft Excel functions: SUM and operators blah blah blah Basic Microsoft Excel functions: SUM and operators blah blah blah', 80); ?></span>
					</a>
					<div class="article-extract__meta">16 May 2016</div>
				</div>
				<div class="article-extract article-extract--inline">
					<a class="link--white" href="#">
						<img class="article-extract__image" src="http://lorempixel.com/120/80" alt="Article Title">						<span class="article-extract__title"><?php echo truncate('Basic Microsoft Excel functions: SUM and operators blah blah blah Basic Microsoft Excel functions: SUM and operators blah blah blah', 80); ?></span>
					</a>
					<div class="article-extract__meta">16 May 2016</div>
				</div>
			</section>
			<section class="footer__section">
				<h5 class="text--12">Contact Us</h5>
				<address>
					111 Western Avenue, Pontefract,<br>
					West Yorkshire, WF1 2AB <br>
					United Kingdom <br><br>

					Tel. 01234 5678910 <br>
					<a href="#" class="link--white text--medium">hello@happyduckco.co.uk</a>
				</address>

				<ul class="link-group link-group--inline">
					<li class="link-group__item social-media"><a  class="social-media__link social-media__link--white" href="http://facebook.com"><img class="svg" src="<?php echo t_img('facebook-logo.svg'); ?>" alt="Facebook"></a></li>
					<li class="link-group__item social-media"><a  class="social-media__link social-media__link--white" href="http://twitter.com"><img class="svg" src="<?php echo t_img('twitter-logo.svg'); ?>" alt="Twitter"></a></li>
					<li class="link-group__item social-media"><a  class="social-media__link social-media__link--white" href="http://plus.google.com"><img class="svg" src="<?php echo t_img('googleplus-logo.svg'); ?>" alt="Google+"></a></li>
					<li class="link-group__item social-media"><a  class="social-media__link social-media__link--white" href="http://linkedin.com"><img class="svg" src="<?php echo t_img('linkedin-logo.svg'); ?>" alt="LinkedIn"></a></li>
				</ul>

				<a href="#" class="btn btn--primary btn--small">Live Chat</a>

			</section>
		</div>
	</footer>

	<section class="footer__mailing-list">
		<div class="signup-form signup-form--inline">
			<div class="signup-form__intro text--white">
				<h4 class="text--yellow text--bold">Join our Mailing List</h4>
				Receive tips, articles and advice direct from HDHQ to your inbox.
			</div>
			<div class="signup-form__fields">
				<div class="signup-form__fieldgroup">
					<label class="text--white" for="name">Your name</label>
					<input type="text" class="input--full-span">
				</div>
				<div class="signup-form__fieldgroup">
					<label class="text--white" for="email">Your email address</label>
					<input type="text" class="input--full-span">
				</div>
				<div class="signup-form__fieldgroup">
					<input type="submit" value="Join" class="btn btn--primary btn--fill-parent">
				</div>
			</div>
		</div>
	</section>

	<section class="footer__site-info">
		<div class="footer__site-info__cols">
			<div class="footer__site-info__left-col">
				&copy; Happy Duck Consulting Ltd. <?php echo date('Y'); ?>. All rights reserved.
			</div>
			<div class="footer__site-info__right-col">
				<ul class="link-group link-group--inline link-group--align-right">
					<li class="link-group__item"><a class="link-group__link link--white text--medium" href="#">About Us</a></li>
					<li class="link-group__item"><a class="link-group__link link--white text--medium" href="#">Legal information</a></li>
					<li class="link-group__item"><a class="link-group__link link--white text--medium" href="#">Terms of Service </a></li>
					<li class="link-group__item"><a class="link-group__link link--white text--medium" href="#">Privacy Policy</a></li>
				</ul>
			</div>
		</div>
	</section>


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
