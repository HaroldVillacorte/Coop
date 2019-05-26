<?php
/**
 * The search form for our theme.
 *
 * This is the template that displays the search form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coop
 */

?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'coop' ); ?></span>
		<input type="search" class="search-field"
		       placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'coop' ); ?>"
		       value="<?php echo get_search_query(); ?>" name="s"/>
	</label>
	<button type="submit" class="search-submit"><span
			class="screen-reader-text"><?php echo esc_html_x( 'Search', 'submit button', 'coop' ); ?></span></button>
</form>
