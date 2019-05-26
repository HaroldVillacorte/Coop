<?php
/**
 * The sidebar containing the Content Bottom widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coop
 */

if ( ! is_active_sidebar( 'sidebar-5' ) ) {
	return;
}
?>

<aside id="content-bottom" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-5' ); ?>
</aside><!-- #content-bottom -->

