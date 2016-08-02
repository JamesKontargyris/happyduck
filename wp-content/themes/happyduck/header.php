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
