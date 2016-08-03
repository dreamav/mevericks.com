<?php

vc_map( array(
	'name' => __( 'Quote', 'ish_sc_plugin' ),
	'base' => 'ish_quote',
	'class' => '',
	'show_settings_on_create' => true,
	'category' => Array( __('Content', 'js_composer'), __('IshYoBoy', 'ish_sc_plugin') ),
	'icon' => 'ish-icon-quote',
	'weight' => 900,
	'params' => array_merge(
		array(
			array(
				'type' => 'textfield',
				'heading' => __( 'Quote Author', 'ish_sc_plugin' ),
				'param_name' => 'author',
				'value' => 'The Author',
				//'description' => __( 'Please enter the content of the quote.', 'ish_sc_plugin' ),
			),
			array(
				'type' => 'vc_link',
				'heading' => __( 'URL', 'ish_sc_plugin' ),
				'param_name' => 'url',
				'value' => '',
				//'description' => __( 'Select target URL', 'ish_sc_plugin' ),
			),
			array(
				'type' => 'textarea_html',
				'heading' => __( 'Quote content', 'ish_sc_plugin' ),
				'holder' => 'div',
				'class' => 'ish-list',
				'param_name' => 'content',
				'value' => __( 'I am a quote. Click edit button to change this text.', 'ish_sc_plugin' ),
				//'description' => __( 'Please enter the content of the quote.', 'ish_sc_plugin' ),
			),
			array(
				'type' => 'ish_buttons_selector',
				'heading' => __( 'Size', 'ish_sc_plugin' ),
				'param_name' => 'size',
				'value' => array(
					__( 'Regular size', 'ish_sc_plugin' ) => '',
					__( 'H1', 'ish_sc_plugin' ) => 'h1',
					__( 'H2', 'ish_sc_plugin' ) => 'h2',
					__( 'H3', 'ish_sc_plugin' ) => 'h3',
					__( 'H4', 'ish_sc_plugin' ) => 'h4',
					__( 'H5', 'ish_sc_plugin' ) => 'h5',
					__( 'H6', 'ish_sc_plugin' ) => 'h6',
				),
				'description' => __( 'Choose text size', 'ish_sc_plugin' ),
			),
			array(
				'type' => 'ish_alignment_selector',
				'heading' => __( 'Alignment', 'ish_sc_plugin' ),
				'param_name' => 'align',
				'value' => array(
					__( 'Align Left', 'ish_sc_plugin' ) => 'left',
					__( 'Align Center', 'ish_sc_plugin' ) => 'center',
					__( 'Align Right', 'ish_sc_plugin' ) => 'right',
				),
				//'description' => __( 'Choose ', 'ish_sc_plugin' ),
			),
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Color', 'ish_sc_plugin' ),
				'param_name' => 'color',
				'value' => array_merge( array( __( 'No Color', 'ish_sc_plugin' ) => ''), $ish_theme_colors ),

			),
		),
		$ish_global_params
	),
	'js_view' => 'IshDefaultView',
) );