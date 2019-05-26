<?php
/**
 * The sidebar containing the Footer Bottom Landing Page widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coop
 */

if ( ! is_active_sidebar( 'sidebar-6' ) ) {
	return;
}
?>

<aside id="footer-bottom-landing-page" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-6' ); ?>
</aside><!-- #footer-bottom-landing-page -->

