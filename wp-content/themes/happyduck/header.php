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

	<header class="header <?php if(! is_front_page()) : ?>has-drop-shadow<?php endif;?>">
		<div class="header__content">
			<h1 class="header__logo heading--show-as-h4 text--black text--coral margin--none"><?php bloginfo(); ?></h1>
			<a class="btn btn--secondary btn--small text--uppercase header__nav-mobile-menu-toggle is-toggle" data-toggle-items=".header__nav">Menu</a>

			<nav class="header__nav">
<!--				TODO: add search bar-->
<!--				TODO: add widget area for this link-group-->
				<ul class="link-group link-group--inline link-group--align-right hide--xs hide--s hide--m margin--none">
					<li class="link-group__item social-media"><a  class="social-media__link social-media__link--facebook" href="http://facebook.com"><img class="svg" src="<?php echo t_img('facebook-logo.svg'); ?>" alt="Facebook"></a></li>
					<li class="link-group__item social-media"><a  class="social-media__link social-media__link--twitter" href="http://twitter.com"><img class="svg" src="<?php echo t_img('twitter-logo.svg'); ?>" alt="Twitter"></a></li>
					<li class="link-group__item social-media"><a  class="social-media__link social-media__link--googleplus" href="http://plus.google.com"><img class="svg" src="<?php echo t_img('googleplus-logo.svg'); ?>" alt="Google+"></a></li>
					<li class="link-group__item social-media"><a  class="social-media__link social-media__link--linkedin" href="http://linkedin.com"><img class="svg" src="<?php echo t_img('linkedin-logo.svg'); ?>" alt="LinkedIn"></a></li>
					<li class="link-group__item link-group--is-button"><a class="btn btn--primary btn--xsmall margin--none" href="#">Live Chat</a></li>
				</ul>

				<?php bem_menu('main-navigation-menu', 'menu', ['menu--inline', 'menu--no-bottom-margin', 'menu--align-right', 'margin--none']); ?>
			</nav>
		</div>
	</header>

	<div id="content" class="site-content">
