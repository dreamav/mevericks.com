<?php


//Your "container" content element should extend WPBakeryShortCodesContainer class to inherit all required functionality
class WPBakeryShortCode_Ish_Slidable extends WPBakeryShortCodesContainer {

}

class WPBakeryShortCode_Ish_Slide extends WPBakeryShortCodesContainer  {

}

vc_map( array(
	'name' => __( 'Slidable', 'ish_sc_plugin' ),
	'base' => 'ish_slidable',
	'as_parent' => array( 'only' => 'ish_slide' ), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	'as_child' => array('except' => 'vc_column_inner'),
	'show_settings_on_create' => true,
	'content_element' => true,
	'category' => Array( __('Content', 'js_composer'), __('IshYoBoy', 'ish_sc_plugin') ),
	'icon' => 'ish-icon-easel',
	'description' => __( 'Content slideshows', 'ish_sc_plugin' ),
	'weight' => 900,
	'params' => array_merge(
		array(
			array(
				'type' => 'ish_buttons_selector',
				'heading' => __( 'Animation', 'ish_sc_plugin' ),
				'param_name' => 'animation',
				'value' => array(
					__( 'Slide', 'ish_sc_plugin' ) => 'slide',
					__( 'Fade', 'ish_sc_plugin' ) => 'fade',
				),
				'description' => __( 'Choose the transition between slides', 'ish_sc_plugin' ),
			),
			array(
				'type' => 'ish_buttons_selector_full',
				'heading' => __( 'Navigation', 'ish_sc_plugin' ),
				'param_name' => 'navigation',
				'value' => array(
					__( 'Yes', 'ish_sc_plugin' ) => '',
					__( 'No', 'ish_sc_plugin' ) => 'no',

				),
				'description' => __( 'Display buttons to switch between slides', 'ish_sc_plugin' ),
			),
			array(
				'type' => 'ish_alignment_selector',
				'heading' => __( 'Navigation Alignment', 'ish_sc_plugin' ),
				'param_name' => 'nav_align',
				'value' => array(
					__( 'Align Left', 'ish_sc_plugin' ) => 'left',
					__( 'Align Center', 'ish_sc_plugin' ) => 'center',
					__( 'Align Right', 'ish_sc_plugin' ) => 'right',
				),
				'dependency' => Array( 'element' => 'navigation', 'value' => '' ),
			),
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Navigation Color', 'ish-sc-plugin' ),
				'param_name' => 'nav_color',
				'std' => 'color1',
				'value' => $ish_theme_colors,
				'dependency' => Array( 'element' => 'navigation', 'value' => '' ),
			),
			array(
				'type' => 'ish_buttons_selector_full',
				'heading' => __( 'Prev/Next buttons', 'ish_sc_plugin' ),
				'param_name' => 'prevnext',
				'value' => array(
					__( 'Yes', 'ish_sc_plugin' ) => '',
					__( 'No', 'ish_sc_plugin' ) => 'no',
				),
				'description' => __( 'Display previous and next slide buttons', 'ish_sc_plugin' ),
			),
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Prev/Next Color', 'ish-sc-plugin' ),
				'param_name' => 'prevnext_color',
				'std' => 'color3',
				'value' => $ish_theme_colors,
				'dependency' => Array( 'element' => 'prevnext', 'value' => '' ),
			),
			array(
				'type' => 'ish_buttons_selector_full',
				'heading' => __( 'Autoslide', 'ish_sc_plugin' ),
				'param_name' => 'autoslide',
				'value' => array(
					__( 'Yes', 'ish_sc_plugin' ) => '',
					__( 'No', 'ish_sc_plugin' ) => 'no',
				),
				'description' => __( 'Automatically switch the slides every few seconds.', 'ish_sc_plugin' ),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Interval', 'ish_sc_plugin' ),
				'param_name' => 'interval',
				'value' => '', //__( '', 'ish_sc_plugin' ),
				'description' => __( 'Time interval in seconds before switching the slide. If empty, the default is "4" seconds.', 'ish_sc_plugin' ),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Maximum Height', 'ish-sc-plugin' ),
				'param_name' => 'max_height',
				'value' => '',
				'description' => __( 'The max. height a slider can have.', 'ish_sc_plugin' ),
			),
		),
		$ish_global_params
	),
	'default_content' => '
	[ish_slide title="Slide Title"]This is the text displayed in the Map Location bubble.[/ish_slide]
	',
	'js_view' => 'IshVcSlidableView', //'VcColumnView',
) );

vc_map( array(
	'name' => __( 'Single Slide', 'ish_sc_plugin' ),
	'base' => 'ish_slide',
	'as_parent' => array( 'only' => 'vc_row,vc_row_inner' ), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	'as_child' => array( 'only' => 'ish_slidable' ), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	'show_settings_on_create' => true,
	'category' => Array( __('Content', 'js_composer'), __('IshYoBoy', 'ish_sc_plugin') ),
	'is_container' => true,
	'icon' => 'ish-icon-picture-1',
	'params' => array_merge(
		array(
		),
		$ish_global_params
	),
	'default_content' => '
	[vc_row_inner][vc_column_inner width="1/1"][/vc_column_inner][/vc_row_inner]
	',
	'js_view' => 'IshVcSlideView', //'VcColumnView',
) );