<?php

vc_map( array(
	'name' => __( 'Table', 'ish_sc_plugin' ),
	'base' => 'ish_table',
	'class' => '',
	'show_settings_on_create' => true,
	'category' => Array( __('Content', 'js_composer'), __('IshYoBoy', 'ish_sc_plugin') ),
	'icon' => 'ish-icon-table',
	'weight' => 900,
	'params' => array_merge(
		array(
			array(
				'type' => 'textarea_html',
				'heading' => __( 'Table Code', 'ish_sc_plugin' ),
				'holder' => 'div',
				'class' => 'ish-table',
				'param_name' => 'content',
				'value' => '
				<table>
					<thead>
						<tr>
							<th>Header 1</th>
							<th>Header 2</th>
							<th>Header 3</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Value 1</td>
							<td>Value 2</td>
							<td>Value 3</td>
						</tr>
						<tr>
							<td>Value 1</td>
							<td>Value 2</td>
							<td>Value 3</td>
						</tr>
						<tr>
							<td>Value 1</td>
							<td>Value 2</td>
							<td>Value 3</td>
						</tr>
					<tbody>
				</table>',
				'description' => __( 'To add more table rows or columns, switch to "Text" tab and edit the HTML code.', 'ish_sc_plugin' ),
				//'admin_label' => true,
			),
			array(
				'type' => 'ish_buttons_selector_full',
				'heading' => __( 'Highlight Even Rows', 'ish_sc_plugin' ),
				'param_name' => 'striped',
				'value' => array(
					__( 'No', 'ish_sc_plugin' ) => '',
					__( 'Yes', 'ish_sc_plugin' ) => 'yes',
				),
				//'description' => __( 'change color of tooltip', 'ish_sc_plugin' ),
			),
			array(
				'type' => 'ish_alignment_selector',
				'heading' => __( 'Text Alignment', 'ish_sc_plugin' ),
				'param_name' => 'align',
				'value' => $ish_alignmment_params,
				//'description' => __( 'Align element', 'ish_sc_plugin' ),
			),
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Table Background Color', 'ish_sc_plugin' ),
				'param_name' => 'color',
				'value' => array_merge( array( __( 'No Color', 'ish_sc_plugin' ) => ''), $ish_theme_colors ),
				//'value' => $ish_theme_colors,
			),
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Table Text Color', 'ish_sc_plugin' ),
				'param_name' => 'text_color',
				'value' => array_merge( array( __( 'No Color', 'ish_sc_plugin' ) => ''), $ish_theme_colors ),
				//'value' => $ish_theme_colors,
			),
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Header Background Color', 'ish_sc_plugin' ),
				'param_name' => 'header_bg_color',
				'value' => array_merge( array( __( 'No Color', 'ish_sc_plugin' ) => ''), $ish_theme_colors ),
				//'value' => $ish_theme_colors,
			),
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Header Text Color', 'ish_sc_plugin' ),
				'param_name' => 'header_text_color',
				'value' => array_merge( array( __( 'No Color', 'ish_sc_plugin' ) => ''), $ish_theme_colors ),
				//'value' => $ish_theme_colors,
			),
			array(
				'type' => 'ish_color_selector',
				'heading' => __( 'Table Border Color', 'ish_sc_plugin' ),
				'param_name' => 'border_color',
				'value' => array_merge( array( __( 'No Color', 'ish_sc_plugin' ) => ''), $ish_theme_colors ),
				//'value' => $ish_theme_colors,
			),
		),
		$ish_global_params
	),
	'js_view' => 'IshDefaultView',
) );