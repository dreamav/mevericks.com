<?php


//Your "container" content element should extend WPBakeryShortCodesContainer class to inherit all required functionality
class WPBakeryShortCode_Ish_Tgg_Acc extends WPBakeryShortCodesContainer {

	public function contentAdmin($atts, $content = null) {
		$width = $el_class = '';
		$output = parent::contentAdmin( $atts, $content );

		$title = '<span class="ish-tggacc-title-holder">' . __( $this->settings['name'] , 'ish_sc_plugin' ) . '</span>';

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

class WPBakeryShortCode_Ish_Tgg_Acc_Item extends WPBakeryShortCodesContainer  {

	public function contentAdmin($atts, $content = null) {
		$width = $el_class = '';
		$output = parent::contentAdmin( $atts, $content );

		$title = '<span class="ish-tgg-acc-title-holder">' . __( $this->settings['name'] , 'ish_sc_plugin' ) . '</span>';

		// Get the Toggle Title if set
		if ( isset( $this->settings['params']) ) {

			foreach ($this->settings['params'] as $param) {

				if ( 'el_title' == $param['param_name'] ) {
					$title = '<span class="ish-tgg-acc-title-holder">' . $param['value'] . '</span>';
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
	'name' => __( 'Toggle & Accordion', 'ish_sc_plugin' ),
	'base' => 'ish_tgg_acc',
	'as_parent' => array( 'only' => 'ish_tgg_acc_item' ), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	'as_child' => array('except' => 'vc_column_inner'),
	'show_settings_on_create' => true,
	'content_element' => true,
	'category' => Array( __('Content', 'js_composer'), __('IshYoBoy', 'ish_sc_plugin') ),
	'icon' => 'ish-icon-indent-right',
	//'description' => __( 'Tabbed container', 'ish_sc_plugin' ),
	'weight' => 900,
	'params' => array_merge(
		array(
			array(
				'type' => 'ish_buttons_selector_full',
				'heading' => __( 'Behavior', 'ish-sc-plugin' ),
				'param_name' => 'behavior',
				'value' => Array(
					__( 'Toggle', 'ish-sc-plugin' ) => '',
					__( 'Accordion', 'ish-sc-plugin' ) => 'accordion',
				),
				'description' => __( 'Accordion allows only one opened item. Toggle allows multiple.', 'ish_sc_plugin' ),
			),
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
				'heading' => __( 'Item Background Color', 'ish-sc-plugin' ),
				'param_name' => 'contents_color',
				'value' => array_merge( array( __( 'No Color', 'ish_sc_plugin' ) => ''), $ish_theme_colors ),
			),
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Item Text Color', 'ish-sc-plugin' ),
				'param_name' => 'contents_text_color',
				'value' => array_merge( array( __( 'No Color', 'ish_sc_plugin' ) => ''), $ish_theme_colors ),
			),
			array(
				'type' => 'ish_buttons_selector_full',
				'heading' => __( 'Navigation HTML Element', 'ish_sc_plugin' ),
				'param_name' => 'tag',
				'value' => array(
					__( 'Div', 'ish_sc_plugin' ) => '',
					__( 'H1', 'ish_sc_plugin' ) => 'h1',
					__( 'H2', 'ish_sc_plugin' ) => 'h2',
					__( 'H3', 'ish_sc_plugin' ) => 'h3',
					__( 'H4', 'ish_sc_plugin' ) => 'h4',
					__( 'H5', 'ish_sc_plugin' ) => 'h5',
					__( 'H6', 'ish_sc_plugin' ) => 'h6',
				),
				'description' => __( 'HTML element for the titles of all items.', 'ish_sc_plugin' ),
			),
		),
		$ish_global_params
	),
	'default_content' => '
	[ish_tgg_acc_item el_title="Item Title"][/ish_tgg_acc_item]
	',
	'js_view' => 'IshVcTggAccView', //'VcColumnView',
) );

vc_map( array(
	'name' => __( 'Toggle/Accordion Item', 'ish_sc_plugin' ),
	'base' => 'ish_tgg_acc_item',
	'as_parent' => array( 'only' => 'vc_row,vc_row_inner' ), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	'as_child' => array( 'only' => 'ish_tgg_acc' ), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	'show_settings_on_create' => true,
	'category' => Array( __('Content', 'js_composer'), __('IshYoBoy', 'ish_sc_plugin') ),
	'is_container' => true,
	'icon' => 'ish-icon-indent-right',
	'params' => array_merge(
		array(
			array(
				'type' => 'textfield',
				'heading' => __( 'Item Title', 'ish_sc_plugin' ),
				'param_name' => 'el_title',
				'value' => __( 'Item Title', 'ish_sc_plugin' ),
				//'description' => __( 'Text on the button.', 'ish_sc_plugin' ),
				//'admin_label' => true,
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Item Categories', 'ish_sc_plugin' ),
				'param_name' => 'categories',
				'value' => '', //__( '', 'ish_sc_plugin' ),
				'description' => __( 'Comma separated list of category names to make a the items filterable.', 'ish_sc_plugin' ),
				//'admin_label' => true,
			),
			array(
				'type' => 'ish_buttons_selector_full',
				'heading' => __( 'Opened by default', 'ish_sc_plugin' ),
				'param_name' => 'active',
				'value' => array(
					__( 'No', 'ish_sc_plugin' ) => '',
					__( 'Yes', 'ish_sc_plugin' ) => 'yes',
				),
				//'description' => __( 'Please make sure only one tab is active.', 'ish_sc_plugin' ),
			),
			array(
				'type' => 'ish_fontello_icons_selector',
				'heading' => __( 'Icon', 'ish_sc_plugin' ),
				'param_name' => 'icon',
				'value' => $ish_available_icons,
				'description' => __( 'Choose an icon which will be displayed next to the Item tile.', 'ish_sc_plugin' ) . ' ' . sprintf( __( 'To add your own set of icons go to %s, download your custom font and unzip it in "ish-plugins/ishyoboy-shortcodes/fontello/" folder inside the child theme root.', 'ish_sc_plugin' ), '<a href="http://fontello.com/" target="_blank">Fontello.com</a>' ),
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
				'heading' => __( 'Navigation HTML Element', 'ish_sc_plugin' ),
				'param_name' => 'tag',
				'value' => array(
					__( 'Inherit from parent container', 'ish_sc_plugin' ) => '',
					__( 'Div', 'ish_sc_plugin' ) => 'div',
					__( 'H1', 'ish_sc_plugin' ) => 'h1',
					__( 'H2', 'ish_sc_plugin' ) => 'h2',
					__( 'H3', 'ish_sc_plugin' ) => 'h3',
					__( 'H4', 'ish_sc_plugin' ) => 'h4',
					__( 'H5', 'ish_sc_plugin' ) => 'h5',
					__( 'H6', 'ish_sc_plugin' ) => 'h6',
				),
				'description' => __( 'HTML element for the title of this item.', 'ish_sc_plugin' ),
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
	'js_view' => 'IshVcTggAccItemView', //'VcColumnView',
) );