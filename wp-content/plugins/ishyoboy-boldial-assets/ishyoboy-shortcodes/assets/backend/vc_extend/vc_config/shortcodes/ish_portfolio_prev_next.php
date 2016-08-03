<?php

vc_map( array(
	'name' => __( 'Portfolio Links', 'ish_sc_plugin' ),
	'base' => 'ish_portfolio_prev_next',
	'class' => '',
	'show_settings_on_create' => true,
	'category' => Array( __('Content', 'js_composer'), __('IshYoBoy', 'ish_sc_plugin') ),
	'description' => __( 'Prev/Next Links', 'ish_sc_plugin' ),
	'icon' => 'ish-icon-briefcase',
	//'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
	//'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
	'weight' => 900,
	'params' => array_merge(
		array(
			array(
				'type' => 'ish_alignment_selector',
				'heading' => __( 'Alignment', 'ish_sc_plugin' ),
				'param_name' => 'align',
				'value' => $ish_alignmment_params,
				//'description' => __( 'Align element', 'ish_sc_plugin' ),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Previous Text', 'ish_sc_plugin' ),
				'holder' => 'div',
				'class' => '',
				'param_name' => 'prev_text',
				'value' => '',
				'description' => sprintf ( __( 'Leave empty to use the default text: %s', 'ish_sc_plugin' ), __( 'Older project &gt;', 'ish_sc_plugin' ) ),
				//'admin_label' => true,
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Next Text', 'ish_sc_plugin' ),
				'holder' => 'div',
				'class' => '',
				'param_name' => 'next_text',
				'value' => '',
				'description' => sprintf ( __( 'Leave empty to use the default text: %s', 'ish_sc_plugin' ), __( '&lt; Newer project', 'ish_sc_plugin' ) ),
				//'admin_label' => true,
			),
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Background Color', 'ish-sc-plugin' ),
				'param_name' => 'color',
				'std' => 'color2',
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
	)
) );