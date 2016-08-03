<?php

vc_map( array(
	'name' => __( 'Navigation', 'ish_sc_plugin' ),
	'base' => 'ish_menu',
	'class' => '',
	'show_settings_on_create' => true,
	'category' => Array( __('Content', 'js_composer'), __('IshYoBoy', 'ish_sc_plugin') ),
	'description' => __( 'Navigation menu', 'ish_sc_plugin' ),
	'icon' => 'ish-icon-menu',
	//'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
	//'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
	'weight' => 900,
	'params' => array_merge(
		array(
			array(
				'type' => 'dropdown',
				'heading' => __( 'Navigation Menu', 'ish-sc-plugin' ),
				'param_name' => 'menu',
				'admin_label' => true,
				'value' => $ish_available_menus,
				'description' => __( 'Select a Menu you previously prepared under Appearance -> Menus.', 'ish_sc_plugin' )
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Menu Depth', 'ish_sc_plugin' ),
				'class' => 'ish-button',
				'param_name' => 'depth',
				'value' => '0',
				'description' => __( 'A number representing the depth of the menu.', 'ish_sc_plugin' ),
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
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Active Background Color', 'ish-sc-plugin' ),
				'param_name' => 'active_bg_color',
				'std' => '',
				'value' => array_merge( array( __( 'No Color', 'ish_sc_plugin' ) => ''), $ish_theme_colors ),
			),
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Active Text Color', 'ish-sc-plugin' ),
				'param_name' => 'active_text_color',
				'std' => '',
				'value' => array_merge( array( __( 'No Color', 'ish_sc_plugin' ) => ''), $ish_theme_colors ),
			),
		),
		$ish_global_params
	)
) );