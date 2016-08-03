<?php


class WPBakeryShortCode_Ish_Box extends WPBakeryShortCodesContainer  {

}

vc_map( array(
	'name' => __( 'Box', 'ish_sc_plugin' ),
	'base' => 'ish_box',
	'as_parent' => array( 'only' => 'vc_row' ), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	'as_child' => array('except' => 'vc_column_inner'),
	'show_settings_on_create' => true,
	'description' => __( 'Colored content box', 'ish_sc_plugin' ),
	'category' => Array( __('Content', 'js_composer'), __('IshYoBoy', 'ish_sc_plugin') ),
	'is_container' => false,
	'icon' => 'ish-icon-stop',
	'weight' => 900,
	'params' => array_merge(
		array(
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
	'default_content' => '
	[vc_row_inner][vc_column_inner width="1/1"][/vc_column_inner][/vc_row_inner]
	',
	'js_view' => 'IshBoxView',
) );