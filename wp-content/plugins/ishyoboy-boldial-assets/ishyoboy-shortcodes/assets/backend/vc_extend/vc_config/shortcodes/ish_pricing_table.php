<?php


//Your "container" content element should extend WPBakeryShortCodesContainer class to inherit all required functionality
class WPBakeryShortCode_Ish_Pricing_Table extends WPBakeryShortCodesContainer {

}

class WPBakeryShortCode_Ish_Pricing_Row extends WPBakeryShortCode {

}

vc_map( array(
	'name' => __( 'Pricing Table', 'ish_sc_plugin' ),
	'base' => 'ish_pricing_table',
	'as_parent' => array( 'only' => 'ish_pricing_row' ), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	'show_settings_on_create' => false,
	'content_element' => true,
	'category' => Array( __('Content', 'js_composer'), __('IshYoBoy', 'ish_sc_plugin') ),
	'icon' => 'ish-icon-table',
	'weight' => 900,
	'params' => array_merge(
		array(
			array(
				'type' => 'ish_buttons_selector_full',
				'heading' => __( 'Highlight Even Rows', 'ish_sc_plugin' ),
				'param_name' => 'striped',
				'value' => array(
					__( 'Yes', 'ish_sc_plugin' ) => '',
					__( 'No', 'ish_sc_plugin' ) => 'no',
				),
				//'description' => __( 'change color of tooltip', 'ish_sc_plugin' ),
			),
			array(
				'type' => 'ish_alignment_selector',
				'heading' => __( 'Text Alignment', 'ish_sc_plugin' ),
				'param_name' => 'align',
				'std' => 'center',
				'value' => $ish_alignmment_params,
				//'description' => __( 'Align element', 'ish_sc_plugin' ),
			),
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Table Background Color', 'ish_sc_plugin' ),
				'param_name' => 'color',
				'std' => 'color3',
				'value' => array_merge( array( __( 'No Color', 'ish_sc_plugin' ) => ''), $ish_theme_colors ),
				//'value' => $ish_theme_colors,
			),
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Table Text Color', 'ish_sc_plugin' ),
				'param_name' => 'text_color',
				'std' => 'color1',
				'value' => array_merge( array( __( 'No Color', 'ish_sc_plugin' ) => ''), $ish_theme_colors ),
				//'value' => $ish_theme_colors,
			),
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Table Border Color', 'ish_sc_plugin' ),
				'param_name' => 'border_color',
				'std' => 'color13',
				'value' => array_merge( array( __( 'No Color', 'ish_sc_plugin' ) => ''), $ish_theme_colors ),
				//'value' => $ish_theme_colors,
			),
		),
		$ish_global_params
	),
	'default_content' =>
		'[ish_pricing_row text_content="HEADER" text_size="h3" icon="ish-icon-spin5" button_text="Text on the button" button_size="small" color="color1" text_color="color3" button_icon_align="left" tooltip_color="color1" tooltip_text_color="color3"]
		[ish_pricing_row text_content="Value 1" icon="ish-icon-spin5" button_text="Text on the button" button_size="small" color="color1" text_color="color3" button_icon_align="left" tooltip_color="color1" tooltip_text_color="color3"]
		[ish_pricing_row text_content="Value 2" icon="ish-icon-spin5" button_text="Text on the button" button_size="small" color="color1" text_color="color3" button_icon_align="left" tooltip_color="color1" tooltip_text_color="color3"]
		[ish_pricing_row text_content="Value3" icon="ish-icon-spin5" button_text="Text on the button" button_size="small" color="color1" text_color="color3" button_icon_align="left" tooltip_color="color1" tooltip_text_color="color3"]
		[ish_pricing_row text_content="Value 4" icon="ish-icon-spin5" button_text="Text on the button" button_size="small" color="color1" text_color="color3" button_icon_align="left" tooltip_color="color1" tooltip_text_color="color3"]
		[ish_pricing_row text_content="Value 5" icon="ish-icon-spin5" button_text="Text on the button" button_size="small" color="color1" text_color="color3" button_icon_align="left" tooltip_color="color1" tooltip_text_color="color3"]
		[ish_pricing_row type="button" text_content="Row Value" icon="ish-icon-spin5" button_text="Button" url="url:%23||" button_size="small" color="color8" text_color="color4" button_icon_align="left" tooltip_color="color1" tooltip_text_color="color3"]',
	'js_view' => 'IshPricingTableView',
) );

vc_map( array(
	'name' => __( 'Pricing Row', 'ish_sc_plugin' ),
	'base' => 'ish_pricing_row',
	'as_child' => array( 'only' => 'ish_pricing_table' ), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
	'show_settings_on_create' => true,
	'category' => Array( __('Content', 'js_composer'), __('IshYoBoy', 'ish_sc_plugin') ),
	'icon' => 'ish-icon-minus',
	'params' => array_merge(
		array(
			array(
				'type' => 'ish_buttons_selector_full',
				'heading' => __( 'Type', 'ish_sc_plugin' ),
				'param_name' => 'type',
				'admin_label' => false,
				'value' => array(
					__( 'Text', 'ish_sc_plugin' ) => '',
					__( 'Icon', 'ish_sc_plugin' ) => 'icon',
					__( 'Button', 'ish_sc_plugin' ) => 'button'
				),
			),

			// TEXT
			array(
				'type' => 'textfield',
				'heading' => __( 'Row Text', 'ish_sc_plugin' ),
				'holder' => 'div',
				'class' => 'ish-pricing-row',
				'param_name' => 'text_content',
				'value' => __( 'Row Value', 'ish_sc_plugin' ),
				//'description' => __( 'Text on the button.', 'ish_sc_plugin' ),
				//'admin_label' => true,
				'dependency' => Array( 'element' => 'type', 'value' => '' ),
			),
			array(
				'type' => 'ish_buttons_selector_full',
				'heading' => __( 'Text Size', 'ish_sc_plugin' ),
				'param_name' => 'text_size',
				'value' => array(
					__( 'Text', 'ish_sc_plugin' ) => '',
					__( 'H1', 'ish_sc_plugin' ) => 'h1',
					__( 'H2', 'ish_sc_plugin' ) => 'h2',
					__( 'H3', 'ish_sc_plugin' ) => 'h3',
					__( 'H4', 'ish_sc_plugin' ) => 'h4',
					__( 'H5', 'ish_sc_plugin' ) => 'h5',
					__( 'H6', 'ish_sc_plugin' ) => 'h6',
				),
				'description' => __( 'Choose Text size', 'ish_sc_plugin' ),
				'dependency' => Array( 'element' => 'type', 'value' => '' ),
			),

			// ICON
			array(
				'type' => 'ish_fontello_icons_selector',
				'heading' => __( 'Icon', 'ish_sc_plugin' ),
				'param_name' => 'icon',
				'value' => $ish_available_icons_no_empty,
				'description' => __( 'Choose an icon.', 'ish_sc_plugin' ) . ' ' . sprintf( __( 'To add your own set of icons go to %s, download your custom font and unzip it in "ish-plugins/ishyoboy-shortcodes/fontello/" folder inside the child theme root.', 'ish_sc_plugin' ), '<a href="http://fontello.com/" target="_blank">Fontello.com</a>' ),
				'dependency' => Array( 'element' => 'type', 'value' => Array( 'icon' ) ),
			),
			array(
				'type' => 'textfield',
				'heading' => __( 'Size', 'ish_sc_plugin' ),
				'param_name' => 'icon_size',
				'value' => '', //__( '', 'ish_sc_plugin' ),
				'description' => __( 'Number - icon size in pixels', 'ish_sc_plugin' ),
				'dependency' => Array( 'element' => 'type', 'value' => 'icon' ),
			),

			// BUTTON
			array(
				'type' => 'textfield',
				'heading' => __( 'Button Text', 'ish_sc_plugin' ),
				'param_name' => 'button_text',
				'value' => __( 'Text on the button', 'ish_sc_plugin' ),
				//'description' => __( 'Text on the button.', 'ish_sc_plugin' ),
				//'admin_label' => true,
				'dependency' => Array( 'element' => 'type', 'value' => 'button' ),
			),
			array(
				'type' => 'vc_link',
				'heading' => __( 'URL', 'ish_sc_plugin' ),
				'param_name' => 'url',
				'value' => '',
				//'description' => __( 'Select target URL', 'ish_sc_plugin' ),
				'dependency' => Array( 'element' => 'type', 'value' => 'button' ),
			),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Size', 'ish_sc_plugin' ),
				'param_name' => 'button_size',
				'value' => array(
					__( 'Small', 'ish_sc_plugin' ) => 'small',
					__( 'Medium', 'ish_sc_plugin' ) => 'medium',
					__( 'Big', 'ish_sc_plugin' ) => 'big',
				),
				//'description' => __( 'Choose element size', 'ish_sc_plugin' ),
				'dependency' => Array( 'element' => 'type', 'value' => 'button' ),
			),
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Background Color', 'ish-sc-plugin' ),
				'param_name' => 'color',
				'std' => 'color1',
				'value' => $ish_theme_colors,
				'dependency' => Array( 'element' => 'type', 'value' => 'button' ),
			),
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Text Color', 'ish-sc-plugin' ),
				'param_name' => 'text_color',
				'std' => 'color3',
				'value' => $ish_theme_colors,
				'dependency' => Array( 'element' => 'type', 'value' => 'button' ),
			),
			array(
				'type' => 'ish_fontello_icons_selector',
				'heading' => __( 'Button Icon', 'ish_sc_plugin' ),
				'param_name' => 'button_icon',
				'value' => $ish_available_icons,
				'description' => __( 'Choose an icon which will be displayed inside the button.', 'ish_sc_plugin' ) . ' ' . sprintf( __( 'To add your own set of icons go to %s, download your custom font and unzip it in "ish-plugins/ishyoboy-shortcodes/fontello/" folder inside the child theme root.', 'ish_sc_plugin' ), '<a href="http://fontello.com/" target="_blank">Fontello.com</a>' ),
				'dependency' => Array( 'element' => 'type', 'value' => 'button' ),
			),
			array(
				'type' => 'ish_alignment_selector',
				'heading' => __( 'Icon alignment', 'ish_sc_plugin' ),
				'param_name' => 'button_icon_align',
				'value' => $ish_alignmment_params_reduced,
				'description' => __( 'Choose alignment for the icon', 'ish_sc_plugin' ),
				'dependency' => Array( 'element' => 'type', 'value' => 'button' ),
			),
		),
		$ish_global_params
	),
	'js_view' => 'IshPricingRowView',
) );