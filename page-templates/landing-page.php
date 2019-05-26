<?php
/**
 * The template for displaying landing pages.
 *
 * This is the template that displays landing pages.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * Template Name: Landing Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package coop
 */

?>

<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>

	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'coop' ); ?></a>
		<div id="content" class="site-content">
			<div id="primary" class="content-area zen-container">
				<main id="main" class="site-main" role="main">
					<?php
					while ( have_posts() ) : the_post();
						the_content();
					endwhile; // End of the loop.
					?>
				</main><!-- #main -->
			</div><!-- #primary.zen-container -->
		</div><!-- #content -->

		<footer id="colophon" class="site-footer landing-page" role="contentinfo">
			<div class="footer-top-wrapper landing-page">
				<div class="zen-container">
					<?php get_sidebar( '9' ); ?>
				</div><!-- .zen-container -->
			</div><!-- .footer-top-wrapper.landing-page -->
			<div class="footer-bottom-wrapper landing-page">
				<div class="zen-container">
					<?php get_sidebar( '6' ); ?>
				</div><!-- .zen-container -->
			</div><!-- .footer-bottom-wrapper.landing-page -->
		</footer><!-- #colophon -->

	</div><!-- #page -->

	<a href="#page" id="back-to-top" class="back-to-top landing-page">
		<i class="fa fa-arrow-circle-up"></i>
		<span class="screen-reader-text"><?php echo esc_html__( 'Back to Top', 'coop' ); ?></span>
	</a><!-- #back-to-top -->

	<?php wp_footer(); ?>
</body>
</html>
