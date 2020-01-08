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
	<wrapper id="wrapper">
		<div class="scanlines">
			
			<div id="page" class="site">
				<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lostboys2020' ); ?></a>

				<header id="masthead" class="site-header scene_element--fadein">
					<div class="site-branding">
			<!--<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$lostboys2020_description = get_bloginfo( 'description', 'display' );
			if ( $lostboys2020_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $lostboys2020_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

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
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<section class="logoSection">
		<div class="imgLogo box">

				<video width="400" height="400" autoplay loop muted poster="<?php echo get_template_directory_uri(); ?>/img/logo/logo.jpg">
					<source src="<?php echo get_template_directory_uri(); ?>/img/logo/logo3.mp4" type="video/mp4" />

						Your browser does not support the video tag.
					</video>
	
			</div>
		</section>
		<div id="content" class="site-content scene_element scene_element--fadein">


