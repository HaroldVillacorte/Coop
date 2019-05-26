<?php
/**
 * The sidebar containing the Footer Bottom widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coop
 */

if ( ! is_active_sidebar( 'sidebar-8' ) ) {
	return;
}
?>

<aside id="footer-bottom" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-8' ); ?>
</aside><!-- #footer-bottom -->

