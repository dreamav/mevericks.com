<?php


//Your "container" content element should extend WPBakeryShortCodesContainer class to inherit all required functionality
class WPBakeryShortCode_Ish_Tabs extends WPBakeryShortCodesContainer {

	public function contentAdmin($atts, $content = null) {
		$width = $el_class = '';
		$output = parent::contentAdmin( $atts, $content );

		$title = '<span class="ish-tabs-title-holder">' . __( $this->settings['name'] , 'ish_sc_plugin' ) . '</span>';

		//$search = '<div '.$this->containerHtmlBlockParams($width, 1).'>';
		$search = '<div class="wpb_element_wrapper">';
		$replace = $search . '<h4 class="wpb_element_title">' . $title . '</h4>';

		// Replace the content just once!
		$pos = strpos( $output,$search );
		if ($pos !== false) {
			$output = substr_replace( $output, $replace, $pos, strlen($search) );
		}

		return $output;
	}

}

class WPBakeryShortCode_Ish_Tab extends WPBakeryShortCodesContainer  {

	public function contentAdmin($atts, $content = null) {
		$width = $el_class = '';
		$output = parent::contentAdmin( $atts, $content );

		$title = '<span class="ish-tab-title-holder">' . __( $this->settings['name'] , 'ish_sc_plugin' ) . '</span>';

		// Get the Tab Title if set
		if ( isset( $this->settings['params']) ) {

			foreach ($this->settings['params'] as $param) {

				if ( 'tab_title' == $param['param_name'] ) {
					$title = '<span class="ish-tab-title-holder">' . $param['value'] . '</span>';
				}

			}

		}

		//$search = '<div '.$this->containerHtmlBlockParams($width, 1).'>';
		$search = '<div class="wpb_element_wrapper">';
		$replace = $search . '<h4 class="wpb_element_title">' . $title . '</h4>';

		// Replace the content just once!
		$pos = strpos( $output,$search );
		if ($pos !== false) {
			$output = substr_replace( $output, $replace, $pos, strlen($search) );
		}

		return $output;
	}

}

vc_map( array(
	'name' => __( 'Tabs', 'ish_sc_plugin' ),
	'base' => 'ish_tabs',
	'as_parent' => array( 'only' => 'ish_tab' ), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	'as_child' => array('except' => 'vc_column_inner'),
	'show_settings_on_create' => true,
	'content_element' => true,
	'category' => Array( __('Content', 'js_composer'), __('IshYoBoy', 'ish_sc_plugin') ),
	'icon' => 'ish-icon-th-list',
	'description' => __( 'Tabbed container', 'ish_sc_plugin' ),
	'weight' => 900,
	'params' => array_merge(
		array(
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Navigation Background Color', 'ish-sc-plugin' ),
				'param_name' => 'color',
				'std' => 'color1',
				'value' => $ish_theme_colors,
			),
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Navigation Text Color', 'ish-sc-plugin' ),
				'param_name' => 'text_color',
				'std' => 'color3',
				'value' => $ish_theme_colors,
			),
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Content Background Color', 'ish-sc-plugin' ),
				'param_name' => 'contents_color',
				'value' => array_merge( array( __( 'No Color', 'ish_sc_plugin' ) => ''), $ish_theme_colors ),
			),
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Content Text Color', 'ish-sc-plugin' ),
				'param_name' => 'contents_text_color',
				'value' => array_merge( array( __( 'No Color', 'ish_sc_plugin' ) => ''), $ish_theme_colors ),
			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Layout', 'ish_sc_plugin' ),
				'param_name' => 'layout',
				'value' => array(
					__( 'Horizontal', 'ish_sc_plugin' ) => '',
					__( 'Vertical - Left Navigation', 'ish_sc_plugin' ) => 'vertical-left',
					__( 'Vertical - Right Navigation', 'ish_sc_plugin' ) => 'vertical-right',
				),
				//'description' => __( 'change color of tooltip', 'ish_sc_plugin' ),
			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Vertical Layout', 'ish-sc-plugin' ),
				'param_name' => 'vertical_layout',
				'admin_label' => true,
				'value' => Array(
					__( '1/3 + 2/3' ) => '', // 1-2 - if you change this, please update the template as well
					__( '1/4 + 3/4' ) => '1-3',
					__( '1/6 + 5/6' ) => '1-5',
					__( '2/3 + 1/3' ) => '2-1',
					__( '3/4 + 1/4' ) => '3-1',
					__( '5/6 + 1/6' ) => '5-1',
					__( '1/2 + 1/2' ) => '1-1',
				),
				'description' => __( 'Which posts to display first.', 'ish_sc_plugin' ),
				'dependency' => Array( 'element' => 'layout', 'value' => Array( 'vertical-left' , 'vertical-right' ) ),
			),
		),
		$ish_global_params
	),
	'default_content' => '
	[ish_tab tab_title="Tab Title"][/ish_tab]
	',
	'js_view' => 'IshVcTabsView', //'VcColumnView',
) );

vc_map( array(
	'name' => __( 'Single Tab', 'ish_sc_plugin' ),
	'base' => 'ish_tab',
	'as_parent' => array( 'only' => 'vc_row,vc_row_inner' ), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	'as_child' => array( 'only' => 'ish_tabs' ), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	'show_settings_on_create' => true,
	'category' => Array( __('Content', 'js_composer'), __('IshYoBoy', 'ish_sc_plugin') ),
	'is_container' => true,
	'icon' => 'ish-icon-th-list',
	'params' => array_merge(
		array(
			array(
				'type' => 'textfield',
				'heading' => __( 'Tab Title', 'ish_sc_plugin' ),
				'param_name' => 'tab_title',
				'value' => __( 'Tab Title', 'ish_sc_plugin' ),
				//'description' => __( 'Text on the button.', 'ish_sc_plugin' ),
				//'admin_label' => true,
			),
			array(
				'type' => 'ish_buttons_selector_full',
				'heading' => __( 'Active', 'ish_sc_plugin' ),
				'param_name' => 'active',
				'value' => array(
					__( 'No', 'ish_sc_plugin' ) => '',
					__( 'Yes', 'ish_sc_plugin' ) => 'yes',
				),
				'description' => __( 'Please make sure only one tab is active.', 'ish_sc_plugin' ),
			),
			array(
				'type' => 'ish_fontello_icons_selector',
				'heading' => __( 'Icon', 'ish_sc_plugin' ),
				'param_name' => 'icon',
				'value' => $ish_available_icons,
				'description' => __( 'Choose an icon which will be displayed next to the tab tile.', 'ish_sc_plugin' ) . ' ' . sprintf( __( 'To add your own set of icons go to %s, download your custom font and unzip it in "ish-plugins/ishyoboy-shortcodes/fontello/" folder inside the child theme root.', 'ish_sc_plugin' ), '<a href="http://fontello.com/" target="_blank">Fontello.com</a>' ),
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
				'type' => 'ish_color_selector',
				'heading' => __( 'Navigation Background Color', 'ish-sc-plugin' ),
				'param_name' => 'color',
				'value' => array_merge( array( __( 'Inherit from parent container', 'ish_sc_plugin' ) => ''), $ish_theme_colors ),
			),
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Navigation Text Color', 'ish-sc-plugin' ),
				'param_name' => 'text_color',
				'value' => array_merge( array( __( 'Inherit from parent container', 'ish_sc_plugin' ) => ''), $ish_theme_colors ),
			),
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Content Background Color', 'ish-sc-plugin' ),
				'param_name' => 'contents_color',
				'value' => array_merge( array( __( 'Inherit from parent container', 'ish_sc_plugin' ) => ''), $ish_theme_colors ),
			),
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Content Text Color', 'ish-sc-plugin' ),
				'param_name' => 'contents_text_color',
				'value' => array_merge( array( __( 'Inherit from parent container', 'ish_sc_plugin' ) => ''), $ish_theme_colors ),
			),
		),
		$ish_global_params
	),
	'default_content' => '
	[vc_row_inner][vc_column_inner width="1/1"][/vc_column_inner][/vc_row_inner]
	',
	'js_view' => 'IshVcTabView', //'VcColumnView',
) );