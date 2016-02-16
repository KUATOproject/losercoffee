<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package losercoffee
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="wp-content/themes/losercoffee-theme/custom.css">
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'losercoffee' ); ?></a>
<div class="wrapper">
	<div class="inner_wrapper">
	<header id="masthead" class="site-header" role="banner">

		<nav id="site-navigation" class="mainNavigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Primary Menu', 'losercoffee' ); ?></button>
			<ul>
				<li><a href="">über uns</a></li>
				<li>test</li>
				<li><span class="logospacer"></span></li>
				<li><a href="">über uns</a></li>
				<li><a href="">über uns</a></li>
			</ul>

			<!--
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				-->
		</nav><!-- #site-navigation -->

		<!-- Logo -->
		<div class="site-branding">

		</div><!-- .site-branding -->
	</header><!-- #masthead -->


	<div id="content" class="site-content">
