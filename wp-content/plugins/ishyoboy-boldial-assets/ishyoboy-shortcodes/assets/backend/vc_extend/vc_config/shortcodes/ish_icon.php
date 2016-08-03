<?php

vc_map( array(
	'name' => __( 'Icon', 'ish_sc_plugin' ),
	'base' => 'ish_icon',
	'class' => '',
	'show_settings_on_create' => true,
	'category' => Array( __('Content', 'js_composer'), __('IshYoBoy', 'ish_sc_plugin') ),
	'icon' => 'ish-icon-heart',
	//'admin_enqueue_js' => array( IYB_SC_PLUGIN_URI . '/assets/backend/js/vc_shortcodes/' . 'ish_icon' . '.js' ),
	//'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
	'weight' => 900,
	'params' => array_merge(
		array(
			array(
				'type' => 'ish_fontello_icons_selector',
				'heading' => __( 'Icon', 'ish_sc_plugin' ),
				'param_name' => 'icon',
				'value' => $ish_available_icons_no_empty,
				'description' => __( 'Choose an icon.', 'ish_sc_plugin' ) . ' ' . sprintf( __( 'To add your own set of icons go to %s, download your custom font and unzip it in "ish-plugins/ishyoboy-shortcodes/fontello/" folder inside the child theme root.', 'ish_sc_plugin' ), '<a href="http://fontello.com/" target="_blank">Fontello.com</a>' ),
			),
			array(
				'type' => 'ish_buttons_selector',
				'heading' => __( 'Type', 'ish_sc_plugin' ),
				'param_name' => 'type',
				'admin_label' => true,
				'value' => array(
					__( 'Simple', 'ish_sc_plugin' ) => 'simple',
					__( 'Square', 'ish_sc_plugin' ) => 'square',
					__( 'Circle', 'ish_sc_plugin' ) => 'circle',
					__( 'Hexagon', 'ish_sc_plugin' ) => 'hexagon',
					__( 'Hexagon Rounded', 'ish_sc_plugin' ) => 'hexagon_rounded',
				),
				//'description' => __( '', 'ish_sc_plugin' ),
			),
			array(
				'type' => 'ish_buttons_selector',
				'heading' => __( 'Background Glow', 'ish-sc-plugin' ),
				'param_name' => 'bg_glow',
				'value' => Array(
					__( 'No Glow', 'ish-sc-plugin' ) => '',
					__( 'With Glow', 'ish-sc-plugin' ) => 'yes',
				),
				'description' => __( 'Adds a glow to the background of the icon.', 'ish_sc_plugin' ),
				'dependency' => Array( 'element' => 'type', 'value' => array( 'square', 'circle', 'hexagon', 'hexagon_rounded' ) ),
			),
			array(
				'type' => 'ish_alignment_selector',
				'heading' => __( 'Alignment', 'ish_sc_plugin' ),
				'param_name' => 'align',
				'value' => $ish_alignmment_params,
				//'description' => __( 'Align element', 'ish_sc_plugin' ),
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
				'value' => array_merge( array( __( 'No Color', 'ish_sc_plugin' ) => ''), $ish_theme_colors ),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Size', 'ish_sc_plugin' ),
				'param_name' => 'size',
				'value' => '', //__( '', 'ish_sc_plugin' ),
				'description' => __( 'Number - icon size in pixels', 'ish_sc_plugin' ),
			),
			array(
				'type' => 'vc_link',
				'heading' => __( 'URL', 'ish_sc_plugin' ),
				'param_name' => 'url',
				'value' => '',
				//'description' => __( 'Select target URL', 'ish_sc_plugin' ),
			),
		),
		$ish_global_params
	),
	'js_view' => 'IshIconView',
) );