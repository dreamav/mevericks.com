<?php

vc_map( array(
	'name' => __( 'Social Share Bar', 'ish_sc_plugin' ),
	'base' => 'ish_social_share',
	'class' => '',
	'show_settings_on_create' => false,
	'category' => Array( __('Social', 'js_composer'), __('IshYoBoy', 'ish_sc_plugin') ),
	'icon' => 'ish-icon-share',
	//'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
	//'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
	'weight' => 900,
	'params' => array_merge(
		array(
			array(
				'type' => 'ish_alignment_selector',
				'heading' => __( 'Alignment', 'ish_sc_plugin' ),
				'param_name' => 'align',
				'value' => array(
					__( 'No Alignment', 'ish_sc_plugin' ) => '',
					__( 'Align Left', 'ish_sc_plugin' ) => 'left',
					__( 'Align Right', 'ish_sc_plugin' ) => 'right',
				),
				//'description' => __( 'Align element', 'ish_sc_plugin' ),
			),
		),
		$ish_global_params
	)
) );