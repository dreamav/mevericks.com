<?php

vc_map( array(
	'name' => __( 'Post Media', 'ish_sc_plugin' ),
	'base' => 'ish_blog_media',
	'class' => '',
	'show_settings_on_create' => false,
	'category' => Array( __('Content', 'js_composer'), __('IshYoBoy', 'ish_sc_plugin') ),
	'description' => __( 'The post media', 'ish_sc_plugin' ),
	'icon' => 'ish-icon-video',
	//'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
	//'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
	'weight' => 900,
	'params' => array_merge(
		array(

		),
		$ish_global_params
	)
) );