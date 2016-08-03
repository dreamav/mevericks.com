<?php

vc_map( array(
	'name' => __( 'Portfolio Gallery', 'ish_sc_plugin' ),
	'base' => 'ish_portfolio_gallery',
	'class' => '',
	'show_settings_on_create' => true,
	'category' => Array( __('Content', 'js_composer'), __('IshYoBoy', 'ish_sc_plugin') ),
	//'description' => __( '', 'ish_sc_plugin' ),
	'icon' => 'ish-icon-briefcase',
	//'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
	//'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
	'weight' => 900,
	'params' => array_merge(
		array(
			array(
				'type' => 'ish_buttons_selector_full',
				'heading' => __( 'Slideshow', 'ish_sc_plugin' ),
				'param_name' => 'slideshow',
				'value' => array(
					__( 'Yes', 'ish_sc_plugin' ) => '',
					__( 'No', 'ish_sc_plugin' ) => 'no',

				),
				'description' => __( 'Display images in a slideshow or as separate images.', 'ish_sc_plugin' ),
			),
			array(
				'type' => 'ish_buttons_selector',
				'heading' => __( 'Animation', 'ish_sc_plugin' ),
				'param_name' => 'animation',
				'value' => array(
					__( 'Slide', 'ish_sc_plugin' ) => 'slide',
					__( 'Fade', 'ish_sc_plugin' ) => 'fade',
				),
				'description' => __( 'Choose the transition between slides', 'ish_sc_plugin' ),
				'dependency' => Array( 'element' => 'slideshow', 'value' => '' ),
			),
			array(
				'type' => 'ish_buttons_selector_full',
				'heading' => __( 'Navigation', 'ish_sc_plugin' ),
				'param_name' => 'navigation',
				'value' => array(
					__( 'Yes', 'ish_sc_plugin' ) => '',
					__( 'No', 'ish_sc_plugin' ) => 'no',

				),
				'description' => __( 'Display buttons to switch between slides', 'ish_sc_plugin' ),
				'dependency' => Array( 'element' => 'slideshow', 'value' => '' ),
			),
			array(
				'type' => 'ish_alignment_selector',
				'heading' => __( 'Navigation Alignment', 'ish_sc_plugin' ),
				'param_name' => 'nav_align',
				'value' => array(
					__( 'Align Left', 'ish_sc_plugin' ) => 'left',
					__( 'Align Center', 'ish_sc_plugin' ) => 'center',
					__( 'Align Right', 'ish_sc_plugin' ) => 'right',
				),
				'dependency' => Array( 'element' => 'navigation', 'value' => '' ),
			),
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Navigation Color', 'ish-sc-plugin' ),
				'param_name' => 'nav_color',
				'std' => 'color1',
				'value' => $ish_theme_colors,
				'dependency' => Array( 'element' => 'navigation', 'value' => '' ),
			),
			array(
				'type' => 'ish_buttons_selector_full',
				'heading' => __( 'Prev/Next buttons', 'ish_sc_plugin' ),
				'param_name' => 'prevnext',
				'value' => array(
					__( 'Yes', 'ish_sc_plugin' ) => '',
					__( 'No', 'ish_sc_plugin' ) => 'no',
				),
				'description' => __( 'Display previous and next slide buttons', 'ish_sc_plugin' ),
				'dependency' => Array( 'element' => 'slideshow', 'value' => '' ),
			),
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Prev/Next Color', 'ish-sc-plugin' ),
				'param_name' => 'prevnext_color',
				'std' => 'color3',
				'value' => $ish_theme_colors,
				'dependency' => Array( 'element' => 'prevnext', 'value' => '' ),
			),
			array(
				'type' => 'ish_buttons_selector_full',
				'heading' => __( 'Autoslide', 'ish_sc_plugin' ),
				'param_name' => 'autoslide',
				'value' => array(
					__( 'Yes', 'ish_sc_plugin' ) => '',
					__( 'No', 'ish_sc_plugin' ) => 'no',
				),
				'description' => __( 'Automatically switch the slides every few seconds.', 'ish_sc_plugin' ),
				'dependency' => Array( 'element' => 'slideshow', 'value' => '' ),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Interval', 'ish_sc_plugin' ),
				'param_name' => 'interval',
				'value' => '', //__( '', 'ish_sc_plugin' ),
				'description' => __( 'Time interval in seconds before switching the slide. If empty, the default is "4" seconds.', 'ish_sc_plugin' ),
				'dependency' => Array( 'element' => 'slideshow', 'value' => '' ),
			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Image size', 'ish_sc_plugin' ),
				'param_name' => 'thumbnail_size',
				//'admin_label' => true,
				'value' => $ish_image_sizes,
				//'description' => __( '', 'ish_sc_plugin' ),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Maximum Height', 'ish-sc-plugin' ),
				'param_name' => 'max_height',
				'value' => '',
				'description' => __( 'The max. height a slider can have.', 'ish_sc_plugin' ),
				'dependency' => Array( 'element' => 'slideshow', 'value' => '' ),
			),
		),
		$ish_global_params
	)
) );