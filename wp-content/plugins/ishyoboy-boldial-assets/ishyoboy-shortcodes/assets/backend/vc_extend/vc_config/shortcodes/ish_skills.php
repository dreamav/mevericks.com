<?php


//Your "container" content element should extend WPBakeryShortCodesContainer class to inherit all required functionality
class WPBakeryShortCode_Ish_Skills extends WPBakeryShortCodesContainer {

}

class WPBakeryShortCode_Ish_Skill extends WPBakeryShortCode {

}

vc_map( array(
	'name' => __( 'Skills', 'ish_sc_plugin' ),
	'base' => 'ish_skills',
	'as_parent' => array( 'only' => 'ish_skill' ), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	'show_settings_on_create' => false,
	'content_element' => true,
	'category' => Array( __('Content', 'js_composer'), __('IshYoBoy', 'ish_sc_plugin') ),
	'icon' => 'ish-icon-align-left',
	'weight' => 900,
	'params' => array_merge(
		array(
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Background Color', 'ish_sc_plugin' ),
				'param_name' => 'color',
				'value' => array_merge( array( __( 'No Color', 'ish_sc_plugin' ) => ''), $ish_theme_colors ),
			),
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Track Color', 'ish-sc-plugin' ),
				'param_name' => 'skill_color',
				'std' => 'color1',
				'value' => $ish_theme_colors,
			),
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Text Color', 'ish-sc-plugin' ),
				'param_name' => 'text_color',
				'value' => array_merge( array( __( 'No Color', 'ish_sc_plugin' ) => ''), $ish_theme_colors ),
			),
			array(
				'type' => 'ish_buttons_selector_full',
				'heading' => __( 'Default Title Position', 'ish_sc_plugin' ),
				'param_name' => 'outside',
				'value' => array(
					__( 'Inside', 'ish_sc_plugin' ) => '',
					__( 'Outside', 'ish_sc_plugin' ) => 'yes',
				),
				'description' => __( 'This title position will be inherited by all skill bars', 'ish_sc_plugin' ),
			),
		),
		$ish_global_params
	),
	'default_content' => '
	[ish_skill percent="90" tooltip_color="color1"]Skill Bar 1[/ish_skill]
	[ish_skill percent="90" tooltip_color="color1"]Skill Bar 2[/ish_skill]
	',
	'js_view' => 'IshSkillsView',
) );

vc_map( array(
	'name' => __( 'Single Skill', 'ish_sc_plugin' ),
	'base' => 'ish_skill',
	'as_child' => array( 'only' => 'ish_skills' ), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	'show_settings_on_create' => true,
	'category' => Array( __('Content', 'js_composer'), __('IshYoBoy', 'ish_sc_plugin') ),
	'icon' => 'ish-icon-align-left',
	'params' => array_merge(
		array(
			array(
				'type' => 'textfield',
				'heading' => __( 'Title', 'ish_sc_plugin' ),
				'holder' => 'div',
				'param_name' => 'content',
				'value' => __( 'Skill Bar', 'ish_sc_plugin' ),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Percentage', 'ish_sc_plugin' ),
				'param_name' => 'percent',
				'value' => '90',
				'description' => __( 'Number - skill percentage. E.g: "90"', 'ish_sc_plugin' ),
			),
			array(
				'type' => 'ish_buttons_selector',
				'heading' => __( 'Title Position', 'ish_sc_plugin' ),
				'param_name' => 'outside',
				'value' => array(
					__( 'Inherit from parent', 'ish_sc_plugin' ) => '',
					__( 'Inside', 'ish_sc_plugin' ) => 'no',
					__( 'Outside', 'ish_sc_plugin' ) => 'yes',
				),
				'description' => __( 'Choose only if you want to override the title position set in the parent container', 'ish_sc_plugin' ),
			),
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Background Color', 'ish_sc_plugin' ),
				'param_name' => 'color',
				'value' => array_merge( array( __( 'No Color', 'ish_sc_plugin' ) => ''), $ish_theme_colors ),
			),
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Track Color', 'ish-sc-plugin' ),
				'param_name' => 'skill_color',
				'value' => array_merge( array( __( 'No Color', 'ish_sc_plugin' ) => ''), $ish_theme_colors ),
			),
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Text Color', 'ish-sc-plugin' ),
				'param_name' => 'text_color',
				'value' => array_merge( array( __( 'No Color', 'ish_sc_plugin' ) => ''), $ish_theme_colors ),
			),
		),
		$ish_global_params
	),
	'js_view' => 'IshDefaultView',
) );