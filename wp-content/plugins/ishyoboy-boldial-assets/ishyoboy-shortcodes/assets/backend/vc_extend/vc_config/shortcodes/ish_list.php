<?php

vc_map( array(
	'name' => __( 'List', 'ish_sc_plugin' ),
	'base' => 'ish_list',
	'class' => '',
	'show_settings_on_create' => true,
	'category' => Array( __('Content', 'js_composer'), __('IshYoBoy', 'ish_sc_plugin') ),
	'icon' => 'ish-icon-list',
	'weight' => 900,
	'params' => array_merge(
		array(
			array(
				'type' => 'textarea_html',
				'heading' => __( 'List Items', 'ish_sc_plugin' ),
				'holder' => 'div',
				'class' => 'ish-list',
				'param_name' => 'content',
				'value' => '<ul><li>' . __( 'Item', 'ish_sc_plugin' ) . ' 1</li><li>' . __( 'Item', 'ish_sc_plugin' ) . ' 2</li><li>' . __( 'Item', 'ish_sc_plugin' ) . ' 3</li></ul>',
				'description' => __( 'Please enter the items in an unordered list.', 'ish_sc_plugin' ),
			),
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Bullet Color', 'ish_sc_plugin' ),
				'param_name' => 'color',
				'value' => array_merge( array( __( 'No Color', 'ish_sc_plugin' ) => ''), $ish_theme_colors ),

			),
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Text Color', 'ish_sc_plugin' ),
				'param_name' => 'text_color',
				'value' => array_merge( array( __( 'No Color', 'ish_sc_plugin' ) => ''), $ish_theme_colors ),

			),
			array(
				'type' => 'ish_fontello_icons_selector',
				'heading' => __( 'Icon', 'ish_sc_plugin' ),
				'param_name' => 'icon',
				'value' => $ish_available_list_icons,
				'description' => __( 'Choose an icon which will be displayed as list icon.', 'ish_sc_plugin' ) . ' ' . sprintf( __( 'To add your own set of icons go to %s, download your custom font and unzip it in "ish-plugins/ishyoboy-shortcodes/fontello/" folder inside the child theme root.', 'ish_sc_plugin' ), '<a href="http://fontello.com/" target="_blank">Fontello.com</a>' ),
			),
		),
		$ish_global_params
	),
	'js_view' => 'IshListView',
) );