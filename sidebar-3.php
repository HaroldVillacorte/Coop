<?php
/**
 * The sidebar containing the Hero widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coop
 */

if ( ! is_active_sidebar( 'sidebar-3' ) ) {
	return;
}
?>

<div class="zen-container">
	<aside id="hero" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-3' ); ?>
	</aside><!-- #hero -->
</div><!-- .zen-container-->

