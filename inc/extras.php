<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package coop
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function coop_body_classes( $classes ) {

	// Instantiate new Mobile Detect class.
	$mobile_detect = new Coop_Mobile_Detect();

	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of sidebar-none to pages with no Sidebar Left or Sidebar Right.
	if ( ! is_active_sidebar( 'sidebar-2' ) && ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'sidebar-none';
	}

	// Adds a class of sidebar-right to pages with only Sidebar Left active.
	if ( is_active_sidebar( 'sidebar-2' ) && ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'sidebar-left';
	}

	// Adds a class of sidebar-right to pages with only Sidebar Right active.
	if ( ! is_active_sidebar( 'sidebar-2' ) && is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'sidebar-right';
	}

	// Adds mobile class.
	if ( $mobile_detect->is_mobile() ) {
		$classes[] = 'mobile';
	}

	// Adds tablet class.
	if ( $mobile_detect->is_tablet() ) {
		$classes[] = 'tablet';
	}

	return $classes;
}
add_filter( 'body_class', 'coop_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function coop_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', bloginfo( 'pingback_url' ), '">';
	}
}
add_action( 'wp_head', 'coop_pingback_header' );

/**
 * Version system.
 *
 * Returns the current version of the theme or random id depending on the WP_DEBUG constant.
 *
 * @return string The version number of the theme or a random string
 */
function coop_get_version() {
	$theme = wp_get_theme();
	return ( defined( 'WP_DEBUG' ) && true === WP_DEBUG ) ? uniqid() : $theme->get( 'Version' );
}

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function coop_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// Kirki.
		array(
			'name'        => 'Kirki',
			'slug'        => 'kirki',
			'required'  => false,
		),

	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'coop',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',
	);

	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'coop_register_required_plugins' );
