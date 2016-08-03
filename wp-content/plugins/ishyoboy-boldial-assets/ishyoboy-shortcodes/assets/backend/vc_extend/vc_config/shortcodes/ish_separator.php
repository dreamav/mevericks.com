<?php

vc_map(
	array(
		'name' => __( 'Separator', 'ish_sc_plugin' ),
		'base' => 'ish_separator',
		'class' => '',
		'show_settings_on_create' => false,
		'description' => __( 'Horizontal separator', 'ish_sc_plugin' ),
		'category' => Array( __('Content', 'js_composer'), __('IshYoBoy', 'ish_sc_plugin') ),
		'icon' => 'ish-icon-ellipsis',
		'weight' => 900,
		'params' => array_merge(
			array(
				array(
					'type' => 'ish_color_selector',
					'heading' => __( 'Color', 'ish-sc-plugin' ),
					'param_name' => 'color',
					'std' => 'color1',
					'value' => $ish_theme_colors,
				),
				array(
					'type' => 'dropdown',
					'heading' => __( 'Separator Type', 'ish_sc_plugin' ),
					'param_name' => 'type',
					'admin_label' => true,
					'value' => array(
						__( 'Bold Line', 'ish_sc_plugin' ) => 'bold',
						__( 'Thin Line', 'ish_sc_plugin' ) => 'thin',
						__( 'Thin & Bold Line', 'ish_sc_plugin' ) => 'thin-bold',
					),
					//'description' => __( 'Choose element size', 'ish_sc_plugin' ),
				),
				array(
					'type' => 'ish_alignment_selector',
					'heading' => __( 'Alignment', 'ish_sc_plugin' ),
					'param_name' => 'align',
					'value' => $ish_alignmment_params,
				),
				array(
					'type' => 'textfield',
					'heading' => __( 'Width in %', 'ish-sc-plugin' ),
					'param_name' => 'width_percent',
					'value' => '',
					'description' => __( 'Enter number to set the percentual width. E.g. "100" for 100%.', 'ish_sc_plugin' ),
					'dependency' => Array( 'element' => 'type', 'value' => Array( 'thin', 'thin-bold' ) ),
				),
			),
			$ish_global_params
		),
		'js_view' => 'IshDefaultView',
	)
);