<?php

vc_map( array(
	'name' => __( 'Portfolio Categories', 'ish_sc_plugin' ),
	'base' => 'ish_portfolio_categories',
	'class' => '',
	'show_settings_on_create' => true,
	'category' => Array( __('Content', 'js_composer'), __('IshYoBoy', 'ish_sc_plugin') ),
	'description' => __( 'List of categories', 'ish_sc_plugin' ),
	'icon' => 'ish-icon-briefcase',
	//'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
	//'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
	'weight' => 900,
	'params' => array_merge(
		array(
			array(
				'type' => 'ish_buttons_selector_full',
				'heading' => __( 'Link', 'ish_sc_plugin' ),
				'param_name' => 'links',
				'value' => array(
					__( 'Yes', 'ish_sc_plugin' ) => '',
					__( 'No', 'ish_sc_plugin' ) => 'no',
				),
				'description' => __( 'Link categories to category pages', 'ish_sc_plugin' ),
			),
			array(
				'type' => 'ish_buttons_selector_full',
				'heading' => __( 'Display Categories As', 'ish-sc-plugin' ),
				'param_name' => 'behavior',
				'value' => Array(
					__( 'Text only', 'ish-sc-plugin' ) => '',
					__( 'Buttons', 'ish-sc-plugin' ) => 'buttons',
				),
				//'description' => __( '', 'ish_sc_plugin' ),
				'dependency' => Array( 'element' => 'links', 'value' => '' ),
			),
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Background Color', 'ish-sc-plugin' ),
				'param_name' => 'color',
				'std' => 'color1',
				'value' => $ish_theme_colors,
				'dependency' => Array( 'element' => 'behavior', 'value' => 'buttons' ),
			),
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Text Color', 'ish-sc-plugin' ),
				'param_name' => 'text_color',
				'value' => array_merge( array( __( 'No Color', 'ish_sc_plugin' ) => ''), $ish_theme_colors ),
			),
			array(
				'type' => 'ish_alignment_selector',
				'heading' => __( 'Alignment', 'ish_sc_plugin' ),
				'param_name' => 'align',
				'value' => $ish_alignmment_params,
				//'description' => __( 'Align element', 'ish_sc_plugin' ),
			),
		),
		$ish_global_params
	)
) );