<?php

vc_map( array(
	'name' => __( 'Headline', 'ish_sc_plugin' ),
	'base' => 'ish_headline',
	'class' => '',
	'show_settings_on_create' => true,
	'category' => Array( __('Content', 'js_composer'), __('IshYoBoy', 'ish_sc_plugin') ),
	'icon' => 'ish-icon-text-width',
	//'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
	//'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
	'weight' => 900,
	'params' => array_merge(
		array(
			array(
				'type' => 'textarea_html',
				'heading' => __( 'Headline Text', 'ish_sc_plugin' ),
				'holder' => 'div',
				'class' => 'ish-headline',
				'param_name' => "content",
				'value' => __( 'Headline Text', 'ish_sc_plugin' ),
				//'description' => __( 'Enter the headline text.', 'ish_sc_plugin' ),
				//'admin_label' => true,
			),
			array(
				'type' => 'ish_buttons_selector',
				'heading' => __( 'Headline Size', 'ish_sc_plugin' ),
				'param_name' => 'tag_size',
				'value' => array(
					__( 'H1', 'ish_sc_plugin' ) => 'h1',
					__( 'H2', 'ish_sc_plugin' ) => 'h2',
					__( 'H3', 'ish_sc_plugin' ) => 'h3',
					__( 'H4', 'ish_sc_plugin' ) => 'h4',
					__( 'H5', 'ish_sc_plugin' ) => 'h5',
					__( 'H6', 'ish_sc_plugin' ) => 'h6',
				),
				'description' => __( 'Choose Headline size', 'ish_sc_plugin' ),
			),
			array(
				'type' => 'ish_alignment_selector',
				'heading' => __( 'Headline Alignment', 'ish_sc_plugin' ),
				'param_name' => 'align',
				'value' => $ish_alignmment_params,
				//'description' => __( 'Align element', 'ish_sc_plugin' ),
			),
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Color', 'ish_sc_plugin' ),
				'param_name' => 'color',
				'value' => array_merge( array( __( 'No Color', 'ish_sc_plugin' ) => ''), $ish_theme_colors ),
				//'value' => $ish_theme_colors,
			),
			array(
				'type' => 'ish_fontello_icons_selector',
				'heading' => __( 'Headline Icon', 'ish_sc_plugin' ),
				'param_name' => 'icon',
				'value' => $ish_available_icons,
				'description' => __( 'Choose an icon which will be displayed next to the headline.', 'ish_sc_plugin' ) . ' ' . sprintf( __( 'To add your own set of icons go to %s, download your custom font and unzip it in "ish-plugins/ishyoboy-shortcodes/fontello/" folder inside the child theme root.', 'ish_sc_plugin' ), '<a href="http://fontello.com/" target="_blank">Fontello.com</a>' ),
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
				'type' => 'ish_buttons_selector',
				'heading' => __( 'HTML Element', 'ish_sc_plugin' ),
				'param_name' => 'tag',
				'value' => array(
					__( 'H', 'ish_sc_plugin' ) => 'h',
					__( 'DIV', 'ish_sc_plugin' ) => 'div',
				),
				'description' => __( 'Choose DIV if the regular headline elements are not suitable due to semantic or seo reasons.', 'ish_sc_plugin' ),
			),
		),
		$ish_global_params
	),
	'js_view' => 'IshDefaultView',
) );