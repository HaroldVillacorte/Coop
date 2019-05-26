<?php
/**
 * The sidebar containing the Content Top widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coop
 */

if ( ! is_active_sidebar( 'sidebar-7' ) ) {
	return;
}
?>

<aside id="content-top" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-7' ); ?>
</aside><!-- #content-top -->

