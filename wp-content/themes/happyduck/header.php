<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package happyduck
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'happyduck' ); ?></a>

	<header class="header has-drop-shadow">
		<div class="header__inner">
			<img class="logo" src="<?php echo t_img('hdc_logo.svg'); ?>" alt="Happy Duck Consulting">
			<nav class="header__nav">
				<ul class="link-group link-group--inline link-group--align-right">
					<li class="link-group__item social-media"><a  class="social-media__link social-media__link--facebook" href="http://facebook.com"><img class="svg" src="<?php echo t_img('facebook-logo.svg'); ?>" alt="Facebook"></a></li>
					<li class="link-group__item social-media"><a  class="social-media__link social-media__link--twitter" href="http://twitter.com"><img class="svg" src="<?php echo t_img('twitter-logo.svg'); ?>" alt="Twitter"></a></li>
					<li class="link-group__item social-media"><a  class="social-media__link social-media__link--googleplus" href="http://plus.google.com"><img class="svg" src="<?php echo t_img('googleplus-logo.svg'); ?>" alt="Google+"></a></li>
					<li class="link-group__item social-media"><a  class="social-media__link social-media__link--linkedin" href="http://linkedin.com"><img class="svg" src="<?php echo t_img('linkedin-logo.svg'); ?>" alt="LinkedIn"></a></li>
					<li class="link-group__item"><a class="btn btn--primary btn--xsmall margin--none" href="#">Live Chat</a></li>
				</ul>
				<ul class="menu menu--inline menu--no-bottom-margin menu--align-right">
					<li class="menu__item"><a href="#" class="menu__link">About Us</a></li>
					<li class="menu__item"><a href="#" class="menu__link menu__link--active">Our Services</a></li>
					<li class="menu__item"><a href="#" class="menu__link">Articles</a></li>
					<li class="menu__item"><a href="#" class="menu__link">Contact Us</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div id="content" class="site-content">
