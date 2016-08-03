<?php

/*******************************************************************************************************************
 * Add custom meta boxes
 */
/*
add_ishyo_meta_box('slides_urls', array(
	'title'     => __('Slide Settings', 'ishyoboy'),
	'pages'		=> array('ishyoboy_slides'),
	'context'   => 'side',
	'priority'  => 'default',
	'fields'    => array(
		array(
			'name' => __('Slide type', 'ishyoboy'),
			'id' => 'slide_type',
			'default' => 'content',
			'desc' => '',//__('Choose how the lead content will be displayed. The "unboxed" version is usually used for full-width slider shortcodes.', 'ishyoboy'),
			'type' => 'radio',
			'options' => array(
				'content' => __('Content', 'ishyoboy'),
				'image' => __('Image', 'ishyoboy'),
			)
		),
		array(
			'name' => __('Slide url link', 'ishyoboy'),
			'id' => 'slide_url',
			'default' => '',
			'desc' => __('Enter the url which the slide will link to. E.g. http://www.ishyoboy.com', 'ishyoboy'),
			'type' => 'text',
		),
		array(
			'name' => __('New window', 'ishyoboy'),
			'id' => 'slide_url_nw',
			'default' => 'true',
			'desc' => __('Open link in a new window.', 'ishyoboy'),
			'type' => 'checkbox'
		)
	)
));
*/
add_ishyo_meta_box('ishyoboy_portfolio_images_box', array(
	'title'     => __('Portfolio Gallery', 'ishyoboy'),
	'pages'		=> array('portfolio-post'),
	'context'   => 'side',
	'priority'  => 'default',
	'fields'    => array(
		array(
			'name' => '', //__('Upload images', 'ishyoboy'),
			'id' => 'porfolio_images',
			'default' => '',
			'desc' => '',
			'type' => 'images2',
		)
	)
));

add_ishyo_meta_box('ishyoboy_portfolio_settings', array(
	'title'     => __('Color Settings', 'ishyoboy'),
	'pages'		=> array('portfolio-post'),
	'context'   => 'normal',
	'priority'  => 'core',
	'fields'    => array(
		array(
			'name' => __( 'Background color', 'ishyoboy' ),
			'id' => 'color',
			'default' => '',
			'desc' => __( 'Used in Taglines and portfolio Grid overview.', 'ishyoboy'),
			'type' => 'color_selector',
		),
		array(
			'name' => __( 'Text color', 'ishyoboy' ),
			'id' => 'text_color',
			'default' => '',
			'desc' => __( 'Used in Taglines and portfolio Grid overview.', 'ishyoboy'),
			'type' => 'color_selector',
		),
		array(
			'name' => __('Masonry size', 'ishyoboy'),
			'id' => 'masonry_size',
			'default' => '',
			'desc' => __( 'Used in Masonry Grid overview.', 'ishyoboy'),
			'type' => 'radio_random',
			'options' => array(
				'1_1' => __( '1 x 1', 'ishyoboy' ),
				'1_2' => __( '1 x 2', 'ishyoboy' ),
				'2_1' => __( '2 x 1', 'ishyoboy' ),
				'2_2' => __( '2 x 2', 'ishyoboy' ),
			)
		),
	)
));