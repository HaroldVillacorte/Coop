<?php
/**
 * The sidebar containing the Footer Top Landing Page widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coop
 */

if ( ! is_active_sidebar( 'sidebar-9' ) ) {
	return;
}
?>

<aside id="footer-top-landing-page" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-9' ); ?>
</aside><!-- #footer-top-landing-page -->

