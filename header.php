<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coop
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager -->
<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>
<!-- /Google Tag Manager -->

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'coop' ); ?></a>

	<?php if ( has_header_image() ) : ?>
	<header id="masthead" class="site-header" role="banner" style="background-image: url( <?php esc_attr( header_image() ); ?> );
		height: <?php echo esc_attr( get_custom_header()->height ); ?>px">
	<?php else : ?>
	<header id="masthead" class="site-header" role="banner">
	<?php endif; ?>

		<div class="zen-container">
			<div class="site-branding">
				<?php coop_the_custom_logo(); ?>
				<?php
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				endif;

				$description = get_bloginfo( 'description', 'display' ); ?>

				<?php if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>

			</div><!-- .site-branding.columns.large-12 -->
		</div><!-- .zen-container -->

	</header><!-- #masthead -->

	<?php if ( has_nav_menu( 'primary' ) ) : ?>
	<div class="main-navigation-wrapper">
		<div class="zen-container">
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php if ( ! function_exists( 'max_mega_menu_is_enabled' ) || ! max_mega_menu_is_enabled( 'primary' ) ) : ?>
				<button class="menu-toggle"><?php echo esc_html__( 'MENU', 'coop' ); ?></button><!-- .menu-toggle -->
				<?php endif; ?>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation.columns.large-12 -->
		</div><!-- .zen-container -->
	</div><!-- .main-navigation-wrapper -->
	<?php endif; ?>

	<div id="content" class="site-content">

		<?php get_sidebar( '3' ); ?>
