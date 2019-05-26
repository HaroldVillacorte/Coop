<?php
/**
 * Coop functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package coop
 */

if ( ! function_exists( 'coop_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function coop_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on coop, use a find and replace
		 * to change 'coop' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'coop', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		/*
		 * Sets size for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/reference/functions/set_post_thumbnail_size/
		 */
		set_post_thumbnail_size( 1120, 9999 );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'coop' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		/*
		 * Enable support for Post Formats.
		 *
		 *  @since Coop 1.0.0
		 */
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );

		/*
		 * Enable support for custom logo.
		 *
		 *  @since Coop 1.0.0
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 60,
			'width'       => 340,
			'flex-height' => true,
			'flex-width' => true,
		) );

	}
endif;
add_action( 'after_setup_theme', 'coop_setup' );

/**
 * Change Excerpt length.
 *
 * @return int
 */
function coop_excerpt_length() {
	return 30;
}
add_filter( 'excerpt_length', 'coop_excerpt_length', 999 );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function coop_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'coop_content_width', 1920 );
}

add_action( 'after_setup_theme', 'coop_content_width', 0 );

/**
 * Register widget areas.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function coop_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Hero', 'coop' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Add widgets here.', 'coop' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Content Top', 'coop' ),
		'id'            => 'sidebar-7',
		'description'   => esc_html__( 'Add widgets here.', 'coop' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
			'name'          => esc_html__( 'Content Bottom', 'coop' ),
			'id'            => 'sidebar-5',
			'description'   => esc_html__( 'Add widgets here.', 'coop' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Left', 'coop' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'coop' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Right', 'coop' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'coop' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Top', 'coop' ),
		'id'            => 'sidebar-4',
		'description'   => esc_html__( 'Add widgets here.', 'coop' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Bottom', 'coop' ),
		'id'            => 'sidebar-8',
		'description'   => esc_html__( 'Add widgets here.', 'coop' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
			'name'          => esc_html__( 'Footer Top Landing Page', 'coop' ),
			'id'            => 'sidebar-9',
			'description'   => esc_html__( 'Add widgets here.', 'coop' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
	) );
	register_sidebar( array(
			'name'          => esc_html__( 'Footer Bottom Landing Page', 'coop' ),
			'id'            => 'sidebar-6',
			'description'   => esc_html__( 'Add widgets here.', 'coop' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'coop_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function coop_scripts() {

	/* CSS Libraries */
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css', array(), coop_get_version() );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/lib/animate.min.css', array(), coop_get_version() );
	wp_enqueue_style( 'tooltipster', get_template_directory_uri() . '/lib/tooltipster.bundle.min.css', array(), coop_get_version() );
	wp_enqueue_style( 'tooltipster-borderless', get_template_directory_uri() . '/lib/tooltipster-sideTip-light.min.css', array(), coop_get_version() );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/lib/slick/slick.css', array(), coop_get_version() );
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/lib/slick/slick-theme.css', array(), coop_get_version() );

	/* Theme CSS */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_style( 'coop', get_stylesheet_uri(), array(), coop_get_version() );

	/* JS Libraries */
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'tooltipster-js', get_template_directory_uri() . '/lib/tooltipster.bundle.min.js', array(), coop_get_version(), true );
	wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/lib/jquery.smooth-scroll.min.js', array(), coop_get_version(), true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/lib/slick/slick.min.js', array(), coop_get_version(), true );

	/* Theme JS */
	wp_enqueue_script( 'coop-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), coop_get_version(), true );
	wp_enqueue_script( 'coop-nav', get_template_directory_uri() . '/js/navigation.js', array(), coop_get_version(), true );
	wp_enqueue_script( 'coop-js', get_template_directory_uri() . '/js/coop.js', array(), coop_get_version(), true );

}

add_action( 'wp_enqueue_scripts', 'coop_scripts' );

/**
 * Coop wp_footer action hook with highest priority.
 */
function coop_footer_hook_one() {
	coop_inline_script_one();
}
add_action( 'wp_footer', 'coop_footer_hook_one', 1 );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load Max Mega Menu themes.
 */
require get_template_directory() . '/inc/max-mega-menu.php';

/**
 * Load Mobile Detect.
 */
require get_template_directory() . '/inc/coop-mobile-detect.php';

/**
 * Load TGM plugin activation class.
 */
require get_template_directory() . '/inc/class-tgm-plugin-activation.php';

/**
 * Load Kirki config.
 */
if ( class_exists( 'Kirki' ) ) {
	require get_template_directory() . '/inc/kirki.php';
}
