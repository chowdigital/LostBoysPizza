<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LostBoys2020
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
			<wrapper id="wrapper">
			<div class="scanlines">
				<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lostboys2020' ); ?></a>

				<header id="masthead" class="site-header scene_element--fadein">
			

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<div id="hamburger" class="hamburger">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
			<a class="book" href="book">  <img width="150" height="auto" src="<?php echo get_template_directory_uri(); ?>/img/book/book.gif" alt="BOOK"></a>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<section class="logoSection">
		<div class="imgLogo box">

				<video width="400" height="400" autoplay loop playsinline muted poster="<?php echo get_template_directory_uri(); ?>/img/logo/logo.jpg">
					<source src="<?php echo get_template_directory_uri(); ?>/img/logo/logo3.mp4" type="video/mp4" />

						Your browser does not support the video tag.
					</video>
	
			</div>
		</section>
		<div id="content" class="site-content scene_element scene_element--fadein">


