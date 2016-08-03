<?php

vc_map( array(
	'name' => __( 'Button', 'ish_sc_plugin' ),
	'base' => 'ish_button',
	'class' => '',
	'show_settings_on_create' => true,
	'category' => Array( __('Content', 'js_composer'), __('IshYoBoy', 'ish_sc_plugin') ),
	'icon' => 'ish-icon-db-shape',
	//'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
	//'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
	'weight' => 900,
	'params' => array_merge(
		array(
			array(
				'type' => 'textfield',
				'heading' => __( 'Text on the button', 'ish_sc_plugin' ),
				'holder' => 'div',
				'class' => 'ish-button',
				'param_name' => 'el_text',
				'value' => __( 'Text on the button', 'ish_sc_plugin' ),
				//'description' => __( 'Text on the button.', 'ish_sc_plugin' ),
				//'admin_label' => true,
			),
			array(
				'type' => 'vc_link',
				'heading' => __( 'URL', 'ish_sc_plugin' ),
				'param_name' => 'url',
				'value' => '',
				//'description' => __( 'Select target URL', 'ish_sc_plugin' ),
			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Size', 'ish_sc_plugin' ),
				'param_name' => 'size',
				'value' => array(
					__( 'Small', 'ish_sc_plugin' ) => 'small',
					__( 'Medium', 'ish_sc_plugin' ) => 'medium',
					__( 'Big', 'ish_sc_plugin' ) => 'big',
				),
				//'description' => __( 'Choose element size', 'ish_sc_plugin' ),
			),
			array(
				'type' => 'ish_alignment_selector',
				'heading' => __( 'Button Alignment', 'ish_sc_plugin' ),
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
				'std' => 'color3',
				'value' => $ish_theme_colors,
			),
			array(
				'type' => 'ish_fontello_icons_selector',
				'heading' => __( 'Button Icon', 'ish_sc_plugin' ),
				'param_name' => 'icon',
				'value' => $ish_available_icons,
				'description' => __( 'Choose an icon which will be displayed inside the button.', 'ish_sc_plugin' ) . ' ' . sprintf( __( 'To add your own set of icons go to %s, download your custom font and unzip it in "ish-plugins/ishyoboy-shortcodes/fontello/" folder inside the child theme root.', 'ish_sc_plugin' ), '<a href="http://fontello.com/" target="_blank">Fontello.com</a>' ),
			),
			array(
				'type' => 'ish_alignment_selector',
				'heading' => __( 'Icon alignment', 'ish_sc_plugin' ),
				'param_name' => 'icon_align',
				'value' => $ish_alignmment_params_reduced,
				'description' => __( 'Choose alignment for the icon', 'ish_sc_plugin' ),
				'dependency' => Array( 'element' => 'icon', 'not_empty' => true ),
			),
			array(
				'type' => 'ish_buttons_selector_full',
				'heading' => __( 'Full-width', 'ish_sc_plugin' ),
				'param_name' => 'full_width',
				'value' => array(
					__( 'No', 'ish_sc_plugin' ) => '',
					__( 'Yes', 'ish_sc_plugin' ) => 'yes',
				),
				//'description' => __( 'change color of tooltip', 'ish_sc_plugin' ),
			),
		),
		$ish_global_params
	),
	'js_view' => 'IshButtonView',
) );