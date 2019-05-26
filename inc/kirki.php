<?php
/**
 * Kirki configuration.
 *
 * @package coop
 */

// Kirki  UI  setup.
if ( ! function_exists( 'kirki_demo_configuration_sample_styling' ) ) {

	/**
	 *  Style  Customizer.
	 *
	 * @param  array $config The config.
	 *
	 * @return  array
	 */
	function kirki_demo_configuration_sample_styling( $config ) {
		return wp_parse_args( array(
			'description'    => esc_html__( 'The Coop theme By Harold Villacorte.', 'coop' ),
			'disable_loader' => false,
		), $config );
	}
	add_filter( 'kirki/config', 'kirki_demo_configuration_sample_styling' );
}

// Config.
$theme_coop = 'coop';
Kirki::add_config( $theme_coop, array(
	'capability'  => 'edit_theme_options',
	'option_type' => 'theme_mod',
) );

// Coop Colors panel.
$coop_panel = 'coop_panel';
Kirki::add_panel( $coop_panel, array(
	'priority'    => 1001,
	'title'       => esc_html__( 'Coop', 'coop' ),
	'description' => esc_html__( 'More options for customizing the Coop theme.', 'coop' ),
) );

// Coop Colors section.
Kirki::add_section( 'coop_colors_section', array(
	'title'       => esc_html__( 'Colors', 'coop' ),
	'description' => esc_html__( 'Customize colors', 'coop' ),
	'panel'       => $coop_panel,
) );

Kirki::add_field( $theme_coop, array(
	'type'     => 'color',
	'settings' => 'coop_colors_accent',
	'label'    => esc_html__( 'Accent Color:', 'coop' ),
	'section'  => 'coop_colors_section',
	'output'   => array(
		array(
			'element' => array(
				'a:hover',
				'a:focus',
				'.prev:before',
				'.prev:after',
				'.next:before',
				'.next:after',
				'.nav-next:before',
				'.nav-next:after',
				'.nav-previous:before',
				'.nav-previous:after',
				'#footer-top a:hover',
				'#footer-top a:focus',
				'#footer-bottom a:hover',
				'#footer-bottom a:focus',
				'.back-to-top',
				'.gallery-tooltip a',
				'a.read-more',
				'.tagcloud a',
			),
			'property' => 'color',
		),
		array(
			'element' => array(
				'.dot-irecommendthis:hover',
				'.dot-irecommendthis:active',
				'.dot-irecommendthis:focus',
				'.dot-irecommendthis.active',
			),
			'property' => 'color',
			'suffix'   => ' !important',
		),
		array(
			'element'  => array(
				'.hfeed:not(.search) .taxonomy-links-toggle',
			),
			'property' => 'background',
		),
		array(
			'element'  => array(
				'button',
				'button[disabled]:hover',
				'button[disabled]:focus',
				'input[type="button"]',
				'input[type="button"][disabled]:hover',
				'input[type="button"][disabled]:focus',
				'input[type="reset"]',
				'input[type="reset"][disabled]:hover',
				'input[type="reset"][disabled]:focus',
				'input[type="submit"]',
				'input[type="submit"][disabled]:hover',
				'input[type="submit"][disabled]:focus',
				'.current',
				'.widget_calendar tbody a',
			),
			'property' => 'background-color',
		),
		array(
			'element'  => array(
				'.gallery-tooltip a',
				'.gallery-tooltip a:hover',
				'.comments-area',
				'a.read-more:hover',
				'a.read-more:focus',
				'.tagcloud a:hover',
				'.tagcloud a:focus',
			),
			'property' => 'border-color',
		),
	),
) );

Kirki::add_field( $theme_coop, array(
	'type'     => 'color',
	'settings' => 'coop_comments_border_color',
	'label'    => esc_html__( 'Comments Area Top Border Color:', 'coop' ),
	'section'  => 'coop_colors_section',
	'output'   => array(
		array(
			'element'  => array(
				'.comments-area',
			),
			'property' => 'border-color',
		),
	),
) );

Kirki::add_field( $theme_coop, array(
	'type'     => 'color',
	'settings' => 'coop_back_to_top_color',
	'label'    => esc_html__( 'Back To Top Button Color:', 'coop' ),
	'section'  => 'coop_colors_section',
	'output'   => array(
		array(
			'element'  => array(
				'.back-to-top',
			),
			'property' => 'color',
		),
	),
) );

Kirki::add_field( $theme_coop, array(
		'type'     => 'color',
		'settings' => 'coop_back_to_top_landing_page_color',
		'label'    => esc_html__( 'Back To Top Landing Page Button Color:', 'coop' ),
		'section'  => 'coop_colors_section',
		'output'   => array(
				array(
						'element'  => array(
								'.page-template-landing-page .back-to-top',
						),
						'property' => 'color',
				),
		),
) );

// Coop Header section.
Kirki::add_section( 'coop_header_section', array(
	'title'       => esc_html__( 'Header', 'coop' ),
	'description' => esc_html__( 'Customize Header', 'coop' ),
	'panel'       => $coop_panel,
) );

Kirki::add_field( $theme_coop, array(
	'type'     => 'color',
	'settings' => 'coop_header_background_color',
	'label'    => esc_html__( 'Header Background Color:', 'coop' ),
	'section'  => 'coop_header_section',
	'output'   => array(
		array(
			'element'  => array(
				'.site-header',
			),
			'property' => 'background-color',
		),
	),
) );

Kirki::add_field( $theme_coop, array(
	'type'        => 'typography',
	'settings'    => 'coop_header_site_title_typography',
	'label'       => esc_attr__( 'Site Title Typography', 'coop' ),
	'section'     => 'coop_header_section',
	'default'     => array(
		'font-family'    => 'Oswald',
		'variant'        => 'regular',
		'font-size'      => '40px',
		'line-height'    => '1',
		'letter-spacing' => '3px',
		'subsets'        => array( 'latin' ),
		'color'          => '#000',
		'text-transform' => 'none',
		'text-align'     => 'center',
	),
	'output'      => array(
		array(
			'element' => array(
				'.site-title',
				'.site-title a',
			),
		),
	),
) );

Kirki::add_field( $theme_coop, array(
	'type'     => 'color',
	'settings' => 'coop_header_site_title_hover',
	'label'    => esc_html__( 'Site Title Hover Color:', 'coop' ),
	'section'  => 'coop_header_section',
	'output'   => array(
		array(
			'element'  => array(
				'.site-title a:hover',
				'.site-title a:focus',
			),
			'property' => 'color',
		),
	),
) );

Kirki::add_field( $theme_coop, array(
	'type'     => 'checkbox',
	'settings' => 'coop_header_site_title_shadow',
	'label'    => esc_html__( 'Remove Site Title Text Shadow', 'coop' ),
	'section'  => 'coop_header_section',
) );

Kirki::add_field( $theme_coop, array(
	'type'        => 'typography',
	'settings'    => 'coop_header_site_description_typography',
	'label'       => esc_attr__( 'Site Description Typography:', 'coop' ),
	'section'     => 'coop_header_section',
	'default'     => array(
		'font-family'    => 'Oswald',
		'variant'        => 'regular',
		'font-size'      => '16px',
		'line-height'    => '1.5',
		'letter-spacing' => '3px',
		'subsets'        => array( 'latin' ),
		'color'          => '#000',
		'text-transform' => 'none',
		'text-align'     => 'center',
	),
	'output'      => array(
		array(
			'element' => array(
				'.site-description',
			),
		),
	),
) );

// Coop Primary Navigation section.
Kirki::add_section( 'coop_primary_nav_section', array(
	'title'       => esc_html__( 'Primary Navigation', 'coop' ),
	'description' => esc_html__( 'Customize Primary Navigation', 'coop' ),
	'panel'       => $coop_panel,
) );

Kirki::add_field( $theme_coop, array(
	'type'     => 'color',
	'settings' => 'coop_primary_nav_background_color',
	'label'    => esc_html__( 'Primary Navigation Background Color:', 'coop' ),
	'section'  => 'coop_primary_nav_section',
	'output'   => array(
		array(
			'element'  => array(
				'.main-navigation-wrapper',
			),
			'property' => 'background-color',
		),
	),
) );

Kirki::add_field( $theme_coop, array(
	'type'        => 'typography',
	'settings'    => 'coop_primary_nav_top_level_links_typography',
	'label'       => esc_attr__( 'Primary Navigation Top Level Links Typography', 'coop' ),
	'section'     => 'coop_primary_nav_section',
	'default'     => array(
		'font-family'    => 'Prata',
		'variant'        => 'regular',
		'font-size'      => '16px',
		'line-height'    => '38px',
		'letter-spacing' => '2px',
		'subsets'        => array( 'latin' ),
		'color'          => '#fff',
		'text-transform' => 'uppercase',
		'text-align'     => 'left',
	),
	'output'      => array(
		array(
			'element' => array(
				'.main-navigation #primary-menu.menu > li > a',
			),
		),
	),
) );

// Coop Widgets section.
Kirki::add_section( 'coop_widgets_section', array(
	'title'       => esc_html__( 'Widgets', 'coop' ),
	'description' => esc_html__( 'Customize Widgets', 'coop' ),
	'panel'       => $coop_panel,
) );

Kirki::add_field( $theme_coop, array(
	'type'        => 'typography',
	'settings'    => 'coop_widget_title_typography',
	'label'       => esc_attr__( 'Widget Titles Typography', 'coop' ),
	'section'     => 'coop_widgets_section',
	'default'     => array(
		'font-family'    => 'Oswald',
		'variant'        => '700',
		'font-size'      => '16px',
		'line-height'    => '1.5',
		'letter-spacing' => '2px',
		'subsets'        => array( 'latin' ),
		'color'          => '#980000',
		'text-transform' => 'uppercase',
		'text-align'     => 'left',
	),
	'output'      => array(
		array(
			'element' => array(
				'.widget-title',
				'.widget-title a',
			),
		),
	),
) );

Kirki::add_field( $theme_coop, array(
		'type'        => 'typography',
		'settings'    => 'coop_widget_title_typography_entry_content',
		'label'       => esc_attr__( 'Widgets in Content Titles Typography', 'coop' ),
		'section'     => 'coop_widgets_section',
		'default'     => array(
				'font-family'    => 'Oswald',
				'variant'        => '700',
				'font-size'      => '16px',
				'line-height'    => '1.5',
				'letter-spacing' => '2px',
				'subsets'        => array( 'latin' ),
				'color'          => '#000',
				'text-transform' => 'uppercase',
				'text-align'     => 'left',
		),
		'output'      => array(
				array(
						'element' => array(
								'.entry-content .widget-title',
								'.entry-content .widget-title a',
						),
				),
		),
) );

// Coop Footer Top section.
Kirki::add_section( 'coop_footer_top_section', array(
	'title'       => esc_html__( 'Footer Top', 'coop' ),
	'description' => esc_html__( 'Customize Footer Top', 'coop' ),
	'panel'       => $coop_panel,
) );

Kirki::add_field( $theme_coop, array(
	'type'     => 'color',
	'settings' => 'coop_footer_top_background_color',
	'label'    => esc_html__( 'Footer Top Background Color:', 'coop' ),
	'section'  => 'coop_footer_top_section',
	'output'   => array(
		array(
			'element'  => array(
				'.footer-top-wrapper',
			),
			'property' => 'background-color',
		),
	),
) );

Kirki::add_field( $theme_coop, array(
	'type'     => 'color',
	'settings' => 'coop_footer_top_text_color',
	'label'    => esc_html__( 'Footer Top Text Color:', 'coop' ),
	'section'  => 'coop_footer_top_section',
	'output'   => array(
		array(
			'element'  => array(
				'#footer-top',
			),
			'property' => 'color',
		),
	),
) );

Kirki::add_field( $theme_coop, array(
	'type'     => 'color',
	'settings' => 'coop_footer_top_link_color',
	'label'    => esc_html__( 'Footer Top Link Color:', 'coop' ),
	'section'  => 'coop_footer_top_section',
	'output'   => array(
		array(
			'element'  => array(
				'#footer-top a',
			),
			'property' => 'color',
		),
	),
) );

Kirki::add_field( $theme_coop, array(
	'type'     => 'color',
	'settings' => 'coop_footer_top_link_hover_color',
	'label'    => esc_html__( 'Footer Top Link Hover Color:', 'coop' ),
	'section'  => 'coop_footer_top_section',
	'output'   => array(
		array(
			'element'  => array(
				'#footer-top a:hover',
				'#footer-top a:focus',
			),
			'property' => 'color',
		),
	),
) );

Kirki::add_field( $theme_coop, array(
	'type'        => 'typography',
	'settings'    => 'coop_footer_top_widget_title_typography',
	'label'       => esc_attr__( 'Footer Top Widget Titles Typography', 'coop' ),
	'section'     => 'coop_footer_top_section',
	'default'     => array(
		'font-family'    => 'Oswald',
		'variant'        => '700',
		'font-size'      => '16px',
		'line-height'    => '1.5',
		'letter-spacing' => '2px',
		'subsets'        => array( 'latin' ),
		'color'          => '#000',
		'text-transform' => 'uppercase',
		'text-align'     => 'left',
	),
	'output'      => array(
		array(
			'element' => array(
				'#footer-top .widget-title',
				'#footer-top .widget-title a',
				'#footer-top .widget-title a:hover',
				'#footer-top .widget-title a:focus',
			),
		),
	),
) );

// Coop Footer Bottom section.
Kirki::add_section( 'coop_footer_bottom_section', array(
	'title'       => esc_html__( 'Footer Bottom', 'coop' ),
	'description' => esc_html__( 'Customize Footer Bottom', 'coop' ),
	'panel'       => $coop_panel,
) );

Kirki::add_field( $theme_coop, array(
	'type'     => 'color',
	'settings' => 'coop_footer_bottom_background_color',
	'label'    => esc_html__( 'Footer Bottom Background Color:', 'coop' ),
	'section'  => 'coop_footer_bottom_section',
	'output'   => array(
		array(
			'element'  => array(
				'.footer-bottom-wrapper',
			),
			'property' => 'background-color',
		),
	),
) );

Kirki::add_field( $theme_coop, array(
	'type'     => 'color',
	'settings' => 'coop_footer_bottom_text_color',
	'label'    => esc_html__( 'Footer Bottom Text Color:', 'coop' ),
	'section'  => 'coop_footer_bottom_section',
	'output'   => array(
		array(
			'element'  => array(
				'#footer-bottom',
			),
			'property' => 'color',
		),
	),
) );

Kirki::add_field( $theme_coop, array(
	'type'     => 'color',
	'settings' => 'coop_footer_bottom_link_color',
	'label'    => esc_html__( 'Footer Bottom Link Color:', 'coop' ),
	'section'  => 'coop_footer_bottom_section',
	'output'   => array(
		array(
			'element'  => array(
				'#footer-bottom a',
			),
			'property' => 'color',
		),
	),
) );

Kirki::add_field( $theme_coop, array(
	'type'     => 'color',
	'settings' => 'coop_footer_bottom_link_hover_color',
	'label'    => esc_html__( 'Footer Bottom Link Hover Color:', 'coop' ),
	'section'  => 'coop_footer_bottom_section',
	'output'   => array(
		array(
			'element'  => array(
				'#footer-bottom a:hover',
				'#footer-bottom a:focus',
			),
			'property' => 'color',
		),
	),
) );

Kirki::add_field( $theme_coop, array(
	'type'        => 'typography',
	'settings'    => 'coop_footer_bottom_widget_title_typography',
	'label'       => esc_attr__( 'Footer Bottom Widget Titles Typography', 'coop' ),
	'section'     => 'coop_footer_bottom_section',
	'default'     => array(
		'font-family'    => 'Oswald',
		'variant'        => '700',
		'font-size'      => '16px',
		'line-height'    => '1.5',
		'letter-spacing' => '2px',
		'subsets'        => array( 'latin' ),
		'color'          => '#f7f7f7',
		'text-transform' => 'uppercase',
		'text-align'     => 'left',
	),
	'output'      => array(
		array(
			'element' => array(
				'#footer-bottom .widget-title',
				'#footer-bottom .widget-title a',
				'#footer-bottom .widget-title a:hover',
				'#footer-bottom .widget-title a:focus',
			),
		),
	),
) );

// Coop Footer Top Landing Page section.
Kirki::add_section( 'coop_footer_top_landing_page_section', array(
		'title'       => esc_html__( 'Footer Top Landing Page', 'coop' ),
		'description' => esc_html__( 'Customize Footer Top Landing Page', 'coop' ),
		'panel'       => $coop_panel,
) );

Kirki::add_field( $theme_coop, array(
		'type'     => 'color',
		'settings' => 'coop_footer_top_landing_page_background_color',
		'label'    => esc_html__( 'Footer Top Landing Page Background Color:', 'coop' ),
		'section'  => 'coop_footer_top_landing_page_section',
		'output'   => array(
				array(
						'element'  => array(
								'.footer-top-wrapper.landing-page',
						),
						'property' => 'background-color',
				),
		),
) );

Kirki::add_field( $theme_coop, array(
		'type'     => 'color',
		'settings' => 'coop_footer_top_landing_page_text_color',
		'label'    => esc_html__( 'Footer Top Landing Page Text Color:', 'coop' ),
		'section'  => 'coop_footer_top_landing_page_section',
		'output'   => array(
				array(
						'element'  => array(
								'#footer-top-landing-page',
						),
						'property' => 'color',
				),
		),
) );

Kirki::add_field( $theme_coop, array(
		'type'     => 'color',
		'settings' => 'coop_footer_top_landing_page_link_color',
		'label'    => esc_html__( 'Footer Top Landing Page Link Color:', 'coop' ),
		'section'  => 'coop_footer_top_landing_page_section',
		'output'   => array(
				array(
						'element'  => array(
								'#footer-top-landing-page a',
						),
						'property' => 'color',
				),
		),
) );

Kirki::add_field( $theme_coop, array(
		'type'     => 'color',
		'settings' => 'coop_footer_top__landing_page_link_hover_color',
		'label'    => esc_html__( 'Footer Top Landing Page Link Hover Color:', 'coop' ),
		'section'  => 'coop_footer_top_landing_page_section',
		'output'   => array(
				array(
						'element'  => array(
								'#footer-top-landing-page a:hover',
								'#footer-top-landing-page a:focus',
						),
						'property' => 'color',
				),
		),
) );

Kirki::add_field( $theme_coop, array(
		'type'        => 'typography',
		'settings'    => 'coop_footer_top_landing_page_widget_title_typography',
		'label'       => esc_attr__( 'Footer Top Landing Page Widget Titles Typography', 'coop' ),
		'section'     => 'coop_footer_top_landing_page_section',
		'default'     => array(
				'font-family'    => 'Oswald',
				'variant'        => '700',
				'font-size'      => '16px',
				'line-height'    => '1.5',
				'letter-spacing' => '2px',
				'subsets'        => array( 'latin' ),
				'color'          => '#000',
				'text-transform' => 'uppercase',
				'text-align'     => 'left',
		),
		'output'      => array(
				array(
						'element' => array(
								'#footer-top-landing-page .widget-title',
								'#footer-top-landing-page .widget-title a',
								'#footer-top-landing-page .widget-title a:hover',
								'#footer-top-landing-page .widget-title a:focus',
						),
				),
		),
) );

// Coop Footer Bottom Landing Page section.
Kirki::add_section( 'coop_footer_bottom_landing_page_section', array(
		'title'       => esc_html__( 'Footer Bottom Landing Page', 'coop' ),
		'description' => esc_html__( 'Customize Footer Bottom Landing Page', 'coop' ),
		'panel'       => $coop_panel,
) );

Kirki::add_field( $theme_coop, array(
		'type'     => 'color',
		'settings' => 'coop_footer_bottom_landing_page_background_color',
		'label'    => esc_html__( 'Footer Bottom Landing Page Background Color:', 'coop' ),
		'section'  => 'coop_footer_bottom_landing_page_section',
		'output'   => array(
				array(
						'element'  => array(
								'.footer-bottom-wrapper.landing-page',
						),
						'property' => 'background-color',
				),
		),
) );

Kirki::add_field( $theme_coop, array(
		'type'     => 'color',
		'settings' => 'coop_footer_bottom_landing_page_text_color',
		'label'    => esc_html__( 'Footer Bottom Landing Page Text Color:', 'coop' ),
		'section'  => 'coop_footer_bottom_landing_page_section',
		'output'   => array(
				array(
						'element'  => array(
								'#footer-bottom-landing-page',
						),
						'property' => 'color',
				),
		),
) );

Kirki::add_field( $theme_coop, array(
		'type'     => 'color',
		'settings' => 'coop_footer_bottom_landing_page_link_color',
		'label'    => esc_html__( 'Footer Bottom Landing Page Link Color:', 'coop' ),
		'section'  => 'coop_footer_bottom_landing_page_section',
		'output'   => array(
				array(
						'element'  => array(
								'#footer-bottom-landing-page a',
						),
						'property' => 'color',
				),
		),
) );

Kirki::add_field( $theme_coop, array(
		'type'     => 'color',
		'settings' => 'coop_footer_bottom_landing_page_link_hover_color',
		'label'    => esc_html__( 'Footer Bottom Landing Page Link Hover Color:', 'coop' ),
		'section'  => 'coop_footer_bottom_landing_page_section',
		'output'   => array(
				array(
						'element'  => array(
								'#footer-bottom-landing-page a:hover',
								'#footer-bottom-landing-page a:focus',
						),
						'property' => 'color',
				),
		),
) );

Kirki::add_field( $theme_coop, array(
		'type'        => 'typography',
		'settings'    => 'coop_footer_bottom_landing_page_widget_title_typography',
		'label'       => esc_attr__( 'Footer Bottom Landing Page Widget Titles Typography', 'coop' ),
		'section'     => 'coop_footer_bottom_landing_page_section',
		'default'     => array(
				'font-family'    => 'Oswald',
				'variant'        => '700',
				'font-size'      => '16px',
				'line-height'    => '1.5',
				'letter-spacing' => '2px',
				'subsets'        => array( 'latin' ),
				'color'          => '#f7f7f7',
				'text-transform' => 'uppercase',
				'text-align'     => 'left',
		),
		'output'      => array(
				array(
						'element' => array(
								'#footer-bottom-landing-page .widget-title',
								'#footer-bottom-landing-page .widget-title a',
								'#footer-bottom-landing-page .widget-title a:hover',
								'#footer-bottom-landing-page .widget-title a:focus',
						),
				),
		),
) );

if ( ! function_exists( 'coop_kirki_style' ) ) :
	/**
	 * Inline styles based on customizer options.
	 */
	function coop_kirki_style() {
		$header_remove_site_title_text_shadow = get_theme_mod( 'coop_header_site_title_shadow', false ); ?>

		<style type="text/css">
			<?php if ( $header_remove_site_title_text_shadow ) : ?>
			.site-title a {
				text-shadow: none;
			}
			<?php endif; ?>
		</style>

		<?php
	}
	add_action( 'wp_head', 'coop_kirki_style' );
endif;
