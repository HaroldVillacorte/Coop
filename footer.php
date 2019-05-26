<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coop
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="footer-top-wrapper">
			<div class="zen-container">
				<?php get_sidebar( '4' ); ?>
			</div><!-- .zen-container -->
		</div><!-- .footer-top-wrapper -->

		<div class="footer-bottom-wrapper">
			<div class="zen-container">
				<?php get_sidebar( '8' ); ?>
			</div><!-- .zen-container -->
		</div><!-- .footer-bottom-wrapper -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<a href="#masthead" id="back-to-top" class="back-to-top">
	<i class="fa fa-arrow-circle-up"></i>
	<span class="screen-reader-text"><?php echo esc_html__( 'Back to Top', 'coop' ); ?></span>
</a><!-- #back-to-top -->

<?php wp_footer(); ?>

</body>
</html>
