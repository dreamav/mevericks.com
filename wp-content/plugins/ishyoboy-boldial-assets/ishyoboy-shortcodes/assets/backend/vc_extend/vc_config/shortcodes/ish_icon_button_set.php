<?php


//Your "container" content element should extend WPBakeryShortCodesContainer class to inherit all required functionality
class WPBakeryShortCode_Ish_Icon_Button_Set extends WPBakeryShortCodesContainer {

}

vc_map( array(
	'name' => __( 'Icon/Button Set', 'ish_sc_plugin' ),
	'base' => 'ish_icon_button_set',
	'as_parent' => array( 'only' => 'ish_icon,ish_button,ish_svg_icon' ), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	'show_settings_on_create' => false,
	'category' => Array( __('Content', 'js_composer'), __('IshYoBoy', 'ish_sc_plugin') ),
	'icon' => 'ish-icon-progress-3',
	'description' => __( 'Container for a set of inline icons or buttons', 'ish_sc_plugin' ),
	'weight' => 900,
	'params' => array_merge(
		array(

		),
		$ish_global_params
	),
	'js_view' => 'VcColumnView', //'VcColumnView',
) );