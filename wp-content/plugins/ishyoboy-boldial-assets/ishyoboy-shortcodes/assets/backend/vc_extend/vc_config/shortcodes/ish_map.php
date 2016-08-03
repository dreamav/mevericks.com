<?php


//Your "container" content element should extend WPBakeryShortCodesContainer class to inherit all required functionality
class WPBakeryShortCode_Ish_Map extends WPBakeryShortCodesContainer {

}

class WPBakeryShortCode_Ish_Location extends WPBakeryShortCode {

}

vc_map( array(
	'name' => __( 'Google Map', 'ish_sc_plugin' ),
	'base' => 'ish_map',
	'as_parent' => array( 'only' => 'ish_location' ), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	'show_settings_on_create' => false,
	'content_element' => true,
	'category' => Array( __('Content', 'js_composer'), __('IshYoBoy', 'ish_sc_plugin') ),
	'icon' => 'ish-icon-map',
	'description' => __( 'Google Map with custom locations', 'ish_sc_plugin' ),
	'weight' => 900,
	'params' => array_merge(
		array(
			array(
				'type' => 'ish_buttons_selector_full',
				'heading' => __( 'Inverted Map Colors', 'ish_sc_plugin' ),
				'param_name' => 'invert_colors',
				'value' => array(
					__( 'Regular', 'ish_sc_plugin' ) => '',
					__( 'Inverted', 'ish_sc_plugin' ) => 'yes',
				),
				'description' => __( 'Inverted colors add a "nightly" effect since dark colors become light and vice versa.', 'ish_sc_plugin' ),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Map Zoom', 'ish_sc_plugin' ),
				'param_name' => 'zoom',
				'value' => '8',
				'description' => __( 'Number "0" corresponds to a map of the Earth fully zoomed out, and higher zoom levels zoom in at a higher resolution.', 'ish_sc_plugin' ),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Optional Map Height', 'ish_sc_plugin' ),
				'param_name' => 'height',
				'value' => '',
				'description' => __( 'A number to set the height of the map in pixels. E.g.: "450".', 'ish_sc_plugin' ),
			),
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Default Color', 'ish_sc_plugin' ),
				'param_name' => 'color',
				'value' => array_merge( array( __( 'No Color', 'ish_sc_plugin' ) => ''), $ish_theme_colors ),
			),
		),
		$ish_global_params
	),
	'default_content' => '
	[ish_location lat_lng="-34.397, 150.644" title="Location Title" color="color1" text_color="color4"]This is the text displayed in the Map Location bubble.[/ish_location]
	',
	'js_view' => 'IshMapView',
) );

vc_map( array(
	'name' => __( 'Map Location', 'ish_sc_plugin' ),
	'base' => 'ish_location',
	"as_child" => array( 'only' => 'ish_map' ), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	'show_settings_on_create' => true,
	'category' => Array( __('Content', 'js_composer'), __('IshYoBoy', 'ish_sc_plugin') ),
	'icon' => 'ish-icon-location',
	'params' => array_merge(
		array(
			array(
				'type' => 'textfield',
				'heading' => __( 'Location Title', 'ish_sc_plugin' ),
				'param_name' => 'headline',
				'holder' => 'div',
				'value' => __( 'Location Title', 'ish_sc_plugin' ),
				'description' => __( 'It will not be displayed in the Map Location bubble. Serves for better orientation in the page builder.', 'ish_sc_plugin' ),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Location Latitude & Longitude', 'ish_sc_plugin' ),
				'param_name' => 'lat_lng',
				'value' => __( 'A, B', 'ish_sc_plugin' ),
				'description' => sprintf( __( 'To get the coordinates of any address use %s or google for "Address to Latitude longitude".', 'ish_sc_plugin' ), '<a href="http://itouchmap.com/latlong.html" target="_blank">' . __( 'This Page', 'ish_sc_plugin' ) . '</a>' )
			),
			array(
				'type' => 'textarea_html',
				'heading' => __( 'Location Content', 'ish_sc_plugin' ),
				'param_name' => 'content',
				'value' => __( 'This is the text displayed in the Map Location bubble.', 'ish_sc_plugin' ),
				//'description' => __( '', 'ish_sc_plugin' ),
			),
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Background Color', 'ish-sc-plugin' ),
				'param_name' => 'color',
				'std' => 'color1',
				'value' => $ish_theme_colors,
			),
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Text Color', 'ish-sc-plugin' ),
				'param_name' => 'text_color',
				'std' => 'color3',
				'value' => $ish_theme_colors,
			),
		),
		$ish_global_params
	),
	'js_view' => 'IshDefaultView',
) );