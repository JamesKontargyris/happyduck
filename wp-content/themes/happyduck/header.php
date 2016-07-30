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
			<img class="logo" src="http://placehold.it/300x75" alt="Happy Duck Consulting">
			<nav class="header__nav">
				<ul class="link-group link-group--inline link-group--align-right">
					<li class="link-group__item"><img src="http://placehold.it/24x24" alt=""></li>
					<li class="link-group__item"><img src="http://placehold.it/24x24" alt=""></li>
					<li class="link-group__item"><img src="http://placehold.it/24x24" alt=""></li>
					<li class="link-group__item"><img src="http://placehold.it/24x24" alt=""></li>
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
		
		<section class="page-menu has-drop-shadow">
			<ul class="page-menu__items">
				<li class="page-menu__mobile-toggle is-toggle" data-toggle-items=".page-menu__item">
					<img class="icon icon--xsmall icon--right" src="<?php echo get_template_directory_uri(); ?>/img/menu.svg" alt=""> Our Services
				</li>
				<li class="page-menu__item">
					<a class="page-menu__link" href="#">Business and Financial Analysis</a>
				</li>
				<li class="page-menu__item">
					<a class="page-menu__link page-menu__link--active" href="#">Financial and Scenario Modelling</a>
				</li>
				<li class="page-menu__item">
					<a class="page-menu__link" href="#">Data Manipulation and Presentation</a>
				</li>
				<li class="page-menu__item">
					<a class="page-menu__link" href="#">Business Management Tools</a>
				</li>
				<li class="page-menu__item">
					<a class="page-menu__link" href="#">Password Recovery / Removal</a>
				</li>
			</ul>
		</section>

		<section class="hero" style="background-color:#ff6666">
			w00t
		</section>