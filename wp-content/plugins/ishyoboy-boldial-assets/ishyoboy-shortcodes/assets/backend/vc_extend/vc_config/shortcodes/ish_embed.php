<?php

vc_map( array(
	'name' => __( 'Media Embed', 'ish_sc_plugin' ),
	'base' => 'ish_embed',
	'class' => '',
	'show_settings_on_create' => true,
	'category' => Array( __('Content', 'js_composer'), __('IshYoBoy', 'ish_sc_plugin') ),
	'description' => __( 'Vimeo, Youtube, ...', 'ish_sc_plugin' ),
	'icon' => 'ish-icon-video',
	//'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
	//'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
	'weight' => 900,
	'params' => array_merge(
		array(
			array(
				'type' => 'textfield',
				'heading' => __( 'Media URL', 'ish_sc_plugin' ),
				'holder' => 'div',
				'class' => 'ish-headline',
				'param_name' => "content",
				'value' => __( 'http://', 'ish_sc_plugin' ),
				'description' => sprintf( __( 'Vimeo, YouTube, SoundCloud, Instagram, Flickr, Twitter, SlideShare, Spotify, etc... See %s.', 'ish_sc_plugin' ), '<a href="http://codex.wordpress.org/Embeds#Okay.2C_So_What_Sites_Can_I_Embed_From.3F" target="_blank">All WordPress Embeds</a>' ),
				//'admin_label' => true,
			),
		),
		$ish_global_params
	)
) );