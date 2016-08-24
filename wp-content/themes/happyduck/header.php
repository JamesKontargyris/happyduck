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

		<?php get_search_form(); ?>

		<div class="header__content">
			<h1 class="header__logo heading--show-as-h4 text--black text--coral margin--none"><?php bloginfo(); ?></h1>
			<div class="header__nav-toggle-buttons">
				<a class="btn btn--secondary btn--small text--uppercase header__nav-mobile-search-toggle is-toggle" data-toggle-items=".header__search-form" data-focus='.search-form__field'><span class="hide--xs hide--s">Search</span></a>
				<a class="btn btn--secondary btn--small text--uppercase header__nav-mobile-menu-toggle is-toggle" data-toggle-items=".header__nav"><span class="hide--xs hide--s">Menu</span></a>
			</div>

			<nav class="header__nav">
<!--				TODO: add search bar-->
				<?php dynamic_sidebar('header_links'); ?>

				<?php bem_menu('main-navigation-menu', 'menu', ['menu--inline', 'menu--no-bottom-margin', 'menu--align-right', 'margin--none']); ?>
			</nav>
		</div>
	</header>

	<div id="content" class="site-content">
