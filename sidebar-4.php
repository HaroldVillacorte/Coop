<?php
/**
 * The sidebar containing the Footer widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coop
 */

if ( ! is_active_sidebar( 'sidebar-4' ) ) {
	return;
}
?>

<div class="zen-container">
	<aside id="footer-top" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-4' ); ?>
	</aside><!-- #footer-top -->
</div><!-- .zen-container-->

