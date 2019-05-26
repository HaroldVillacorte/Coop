<?php
/**
 * This is a Max Mega Menu theme.
 *
 * @link https://www.megamenu.com/articles/theme-integration/
 *
 * @package coop
 */

/**
 * Max Mega Menu default theme override.
 *
 * @param array $value Settings.
 *
 * @return array $value
 */
function coop_megamenu_override_default_theme( $value ) {
	if ( ! isset( $value['primary']['theme'] ) ) {
		$value['primary']['theme'] = 'coop_1493258880';
	}

	return $value;
}
add_filter( 'default_option_megamenu_settings', 'coop_megamenu_override_default_theme' );

/**
 * Max Mega Menu theme.
 *
 * @param array $themes Array of themes.
 *
 * @return mixed
 */
function megamenu_add_theme_coop_1493258880($themes) {
	$themes["coop_1493258880"] = array(
			'title' => 'Coop',
			'container_background_from' => 'rgb(152, 0, 0)',
			'container_background_to' => 'rgb(152, 0, 0)',
			'container_padding_left' => '32px',
			'container_padding_right' => '32px',
			'menu_item_align' => 'center',
			'menu_item_background_hover_from' => 'rgba(255, 255, 255, 0)',
			'menu_item_background_hover_to' => 'rgba(255, 255, 255, 0)',
			'menu_item_spacing' => '10px',
			'menu_item_link_font' => 'Ovo',
			'menu_item_link_font_size' => '13px',
			'menu_item_link_height' => '36px',
			'menu_item_link_color' => 'rgb(255, 255, 255)',
			'menu_item_link_text_transform' => 'uppercase',
			'menu_item_link_text_align' => 'center',
			'menu_item_link_color_hover' => 'rgb(255, 255, 255)',
			'menu_item_link_text_decoration_hover' => 'underline',
			'menu_item_border_color' => 'rgba(34, 34, 34, 0)',
			'menu_item_highlight_current' => 'on',
			'panel_background_from' => 'rgb(255, 255, 255)',
			'panel_background_to' => 'rgb(255, 255, 255)',
			'panel_width' => '800px',
			'panel_inner_width' => '800px',
			'panel_border_color' => 'rgb(204, 204, 204)',
			'panel_border_left' => '1px',
			'panel_border_right' => '1px',
			'panel_border_bottom' => '1px',
			'panel_header_color' => 'rgb(34, 34, 34)',
			'panel_header_border_color' => '#555',
			'panel_padding_left' => '16px',
			'panel_padding_right' => '16px',
			'panel_padding_top' => '16px',
			'panel_padding_bottom' => '16px',
			'panel_widget_padding_left' => '16px',
			'panel_widget_padding_right' => '16px',
			'panel_widget_padding_top' => '16px',
			'panel_widget_padding_bottom' => '16px',
			'panel_font_size' => '16px',
			'panel_font_color' => 'rgb(34, 34, 34)',
			'panel_font_family' => 'inherit',
			'panel_second_level_font_color' => '#555',
			'panel_second_level_font_color_hover' => '#555',
			'panel_second_level_text_transform' => 'none',
			'panel_second_level_font' => 'Open Sans',
			'panel_second_level_font_size' => '16px',
			'panel_second_level_font_weight' => 'normal',
			'panel_second_level_font_weight_hover' => 'bold',
			'panel_second_level_text_decoration' => 'none',
			'panel_second_level_text_decoration_hover' => 'none',
			'panel_second_level_border_color' => '#555',
			'panel_third_level_font_color' => '#666',
			'panel_third_level_font_color_hover' => '#666',
			'panel_third_level_font' => 'inherit',
			'panel_third_level_font_size' => '14px',
			'flyout_width' => '300px',
			'flyout_menu_background_from' => 'rgba(0, 0, 0, 0)',
			'flyout_menu_background_to' => 'rgba(0, 0, 0, 0)',
			'flyout_menu_item_divider_color' => 'rgb(237, 237, 237)',
			'flyout_link_padding_left' => '20px',
			'flyout_link_padding_right' => '20px',
			'flyout_link_height' => '36px',
			'flyout_link_text_decoration_hover' => 'underline',
			'flyout_background_from' => 'rgba(0, 0, 0, 0.9)',
			'flyout_background_to' => 'rgba(0, 0, 0, 0.9)',
			'flyout_background_hover_from' => 'rgb(34, 34, 34)',
			'flyout_background_hover_to' => 'rgb(34, 34, 34)',
			'flyout_link_size' => '12px',
			'flyout_link_color' => 'rgb(255, 255, 255)',
			'flyout_link_color_hover' => 'rgb(255, 255, 255)',
			'flyout_link_family' => 'inherit',
			'responsive_breakpoint' => '900px',
			'shadow' => 'on',
			'shadow_vertical' => '5px',
			'shadow_spread' => '1px',
			'shadow_color' => 'rgba(0, 0, 0, 0.51)',
			'transitions' => 'on',
			'mobile_columns' => '1',
			'toggle_background_from' => 'rgba(34, 34, 34, 0)',
			'toggle_background_to' => 'rgba(34, 34, 34, 0)',
			'toggle_font_color' => 'rgb(34, 34, 34)',
			'toggle_bar_height' => '36px',
			'mobile_menu_item_height' => '36px',
			'mobile_background_from' => 'rgba(34, 34, 34, 0)',
			'mobile_background_to' => 'rgba(34, 34, 34, 0)',
			'custom_css' => '/** Push menu onto new line **/
#{$wrap} {
    clear: both;
}
#mega-menu-wrap-primary #mega-menu-primary > li.mega-menu-item > a.mega-menu-link {text-align:left}
@media all and (max-width:900px) {
  #mega-menu-wrap-primary #mega-menu-primary > li.mega-menu-flyout ul.mega-sub-menu,
  #mega-menu-wrap-primary #mega-menu-primary > li.mega-menu-megamenu > ul.mega-sub-menu {
    box-shadow:none;
  }
  #mega-menu-wrap-primary #mega-menu-primary > li.mega-menu-flyout ul.mega-sub-menu li.mega-menu-item a.mega-menu-link {
    background: #980000;
    &:hover,
    &:focus {
      background: none;
    }
  }
}
.ow-button-hover:hover, .ow-button-hover:focus {text-decoration:underline}',
			'tabbed_link_background_from' => 'rgba(0, 0, 0, 0.9)',
			'tabbed_link_background_to' => 'rgba(0, 0, 0, 0.9)',
			'tabbed_link_color' => 'rgb(255, 255, 255)',
			'tabbed_link_family' => 'inherit',
			'tabbed_link_size' => '12px',
			'tabbed_link_weight' => 'normal',
			'tabbed_link_padding_top' => '0px',
			'tabbed_link_padding_right' => '20px',
			'tabbed_link_padding_bottom' => '0px',
			'tabbed_link_padding_left' => '20px',
			'tabbed_link_height' => '36px',
			'tabbed_link_text_decoration' => 'none',
			'tabbed_link_text_transform' => 'none',
			'tabbed_link_background_hover_from' => 'rgb(34, 34, 34)',
			'tabbed_link_background_hover_to' => 'rgb(34, 34, 34)',
			'tabbed_link_weight_hover' => 'normal',
			'tabbed_link_text_decoration_hover' => 'underline',
			'tabbed_link_color_hover' => 'rgb(255, 255, 255)',
	);
	return $themes;
}
add_filter("megamenu_themes", "megamenu_add_theme_coop_1493258880");
