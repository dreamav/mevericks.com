<?php

/*

	color1 -> color2
	color2 -> color1
	color3 -> color1
	color4 -> color1
	color5 - color* -> color1

*/

$n_colors = Array();

for ($i = 1; $i <= IYB_COLORS_COUNT; $i++ ) {
	if ( isset( $newdata['color' . $i] ) && '' != $newdata['color' . $i] ) {
		$n_colors['ish-color' . $i]['hex'] = $newdata['color' . $i];
		$n_colors['ish-color' . $i]['rgb'] = ishyoboy_hex2rgb( $newdata['color' . $i] );
	} else {
		$n_colors['ish-color' . $i]['hex'] = ( defined( 'ISH_COLOR_' . $i ) ) ? constant( 'ISH_COLOR_' . $i ) : '#FFFFFF';
		$n_colors['ish-color' . $i]['rgb'] = ( defined( 'ISH_COLOR_' . $i ) ) ? ishyoboy_hex2rgb( constant( 'ISH_COLOR_' . $i ) ) : ishyoboy_hex2rgb( '#FFFFFF' );
	};
}

$c_text = ( isset( $newdata['text_color'] ) && '' != $newdata['text_color'] ) ? $newdata['text_color'] : ISH_TEXT_COLOR;
$c_body = ( isset( $newdata['body_color'] ) && '' != $newdata['body_color'] ) ? $newdata['body_color'] : ISH_BODY_COLOR;
$c_background = ( isset( $newdata['background_color'] ) && '' != $newdata['background_color'] ) ? $newdata['background_color'] : ISH_BACKGROUND_COLOR;

$c_body_rgb = ishyoboy_hex2rgb($c_body);
$c_text_rgb = ishyoboy_hex2rgb($c_text);

$dyn_col_opacity = 0.6;

?>


/* Body text -------------------------------------------------------------------------------------------------------- */
body,
.ish-blog-post-details a, .ish-blog-post-links a,
.ish-section-filter li a:hover,
.ish-section-filter li.current-cat a,
.ish-section-filter li.current-cat a:hover,
.ish-section-filter .ish-p-filter li a:hover,
.ish-section-filter .ish-p-filter li a.ish-active,
.ish-part_content .ish-sc-element a, .ish-part_content .wpb_text_column a, .ish-comments-form a
{
	color: <?php echo $c_text ?>;
}

.ish-section-filter li a,
.ish-section-filter .ish-p-filter li a
{
	color: rgba(<?php echo ishyoboy_hex2rgb($c_text) . ", " . $dyn_col_opacity ?>);
}


/* Body background -------------------------------------------------------------------------------------------------- */
body
{
	background-color: <?php echo $c_background ?>;
	/*color: */<?php /*echo $c_text */?>;
}


/* Body background color -------------------------------------------------------------------------------------------- */
[class^="ish-part_"] > .ish-row, [class*=" ish-part_"] > .ish-row,
[class^="ish-part_"] > .wpb_row, [class*=" ish-part_"] > .wpb_row,
.ish-blog-classic > .wpb_row[class*="ish-color"]
{
	background-color: <?php echo $c_body ?>;
}

.ish-row_section .ish-row-decor-top polyline.ish-color,
.ish-row_section .ish-row-decor-bottom polyline.ish-color,
.ish-row_section .ish-row-decor-top path.ish-color,
.ish-row_section .ish-row-decor-bottom path.ish-color,
.ish-row_section .ish-row-decor-top polygon.ish-color,
.ish-row_section .ish-row-decor-bottom polygon.ish-color,
.ish-row_section .ish-row-decor-top rect.ish-color,
.ish-row_section .ish-row-decor-bottom rect.ish-color
{
	fill: <?php echo $c_body ?>;
}


/* Color1 - IYB_COLORS_COUNT ---------------------------------------------------------------------------------------- */
<?php

for ( $i = 1; $i <= IYB_COLORS_COUNT; $i++ ) {

	// Current color name E.g.: "ish-color1" ---------------------------------------------------------------------------
	$cc = 'ish-color' . $i;
	$tc = 'ish-text-color' . $i;
	$sc = 'ish-skill-color' . $i;
	$nc = 'ish-nav-color' . $i;
	$pnc = 'ish-prevnext-color' . $i;

	$lc1 = 'ish-link1-color' . $i;
	$lc2 = 'ish-link2-color' . $i;
	$bbgc = 'ish-block-bg-color' . $i;
	$btc = 'ish-block-text-color' . $i;
	$bg_cc = 'ish-bg-text-color' . $i;
	$tt_bg = 'ish-tooltip-color' . $i;
	$tt_tc = 'ish-tooltip-text-color' . $i;

	$hbg = 'ish-header-bg-color' . $i;
	$htc = 'ish-header-text-color' . $i;

	$borderc = 'ish-border-color' . $i;


	// color* ----------------------------------------------------------------------------------------------------------
	echo "
	.wpb_row.$tc,
	.wpb_row.$tc a,
	.ish-sc_headline.$cc,
	.ish-sc_headline.$cc a,
	.ish-sc_list.$cc li:before,
	.ish-sc_list.$cc.ish-noicon li:before,
	.ish-sc_list.$tc,
	.ish-sc_quote.$cc,
	.ish-sc_quote.$cc a,
	.ish-p-overlay.$tc,
	.ish-blog .wpb_row.$cc h2 a,
	.ish-blog .wpb_row.$cc blockquote a,
	.ish-blog .wpb_row.$cc .ish-blog-post-details a:hover,
	.ish-blog .wpb_row.$cc .ish-blog-post-links i:before,
	.ish-blog .wpb_row.$cc .ish-blog-post-links a:hover,
	.ish-blog.ish-blog-fullwidth .wpb_row.$tc h2 a,
	.ish-blog.ish-blog-fullwidth .wpb_row.$tc .ish-blog-post-details a,
	.ish-blog.ish-blog-fullwidth .wpb_row.$tc .ish-blog-post-details a:hover,
	.ish-blog.ish-blog-fullwidth .wpb_row.$tc .ish-blog-post-details span,
	.ish-blog.ish-blog-fullwidth .wpb_row.$tc blockquote a,
	.ish-blog.ish-blog-masonry .$tc,
	.ish-blog.ish-blog-masonry .$tc a,
	.ish-blog.ish-blog-masonry .$tc cite:before,
	.ish-blog.ish-blog-masonry .$tc .ish-blog-post-details a,
	.ish-blog.ish-blog-masonry .$tc .ish-blog-post-details a:hover,
	.ish-blog.ish-blog-masonry .$tc .ish-blog-post-details span,
	.ish-blog.ish-blog-masonry .$tc .ish-link-content a,
	.ish-tagline-image.$tc h1,
	.ish-tagline-image.$tc .ish-blog-post-details a,
	.ish-tagline-colored.$tc h1,
	.ish-tagline-colored.$tc .ish-blog-post-details a,
	.$tc .ish-section-filter li a:hover,
	.$tc .ish-section-filter li a.ish-active,
	.$tc .ish-section-filter li.current-cat a:hover,
	.ish-recent_posts_post.$cc h3 a,
	.ish-sc-element.ish-sc_icon.$tc,
	.ish-sc-element.ish-sc_icon.$tc a, .ish-sc-element.ish-sc_icon.$tc a:hover,
	.ish-sc_skills .ish-sc_skill.$tc .ish-bar-bg .ish-bar,
	.ish-sc_skills .ish-sc_skill.$tc.ish-outside > span,
	.ish-gmap_box.$tc, .ish-gmap_box.$tc a, .ish-gmap_box.$tc a:hover,
	div.ish-recent_posts_post.$tc, div.ish-recent_posts_post.$tc a, div.ish-recent_posts_post.$cc h3 a,
	.ish-sc-element.$pnc .flex-direction-nav li a,
	.ish-tgg-acc-title.$tc, .ish-tgg-acc-content.$tc,
	.ish-sc_tab.$tc, .ish-tabs-navigation li.$tc a,
	.ish-sc_sidebar.$tc .widget,
	.ish-sc_sidebar.$lc1 .widget-title,
	.ish-sc_sidebar.$lc1 .widget a,
	.ish-sc_sidebar.$lc2 .widget_calendar #wp-calendar tfoot a,
	.ish-sc_sidebar.$lc2 .widget_ishyoboy-recent-portfolio-widget a.ish-button-small,
	.ish-sc_sidebar.$lc2 .widget_ishyoboy-dribbble-widget a.ish-button-small,
	.ish-sc_sidebar.$lc2 .widget_ishyoboy-flickr-widget a.ish-button-small,
	.ish-sc_sidebar.$lc2 .widget_ishyoboy-twitter-widget a.ish-button-small,

	.ish-sc_sidebar.$btc .widget select,
	.ish-sc_sidebar.$btc .widget option,
	.ish-sc_sidebar.$btc .widget_search input[type='text'],
	.ish-sc_sidebar.$btc .widget_search input[type='submit'],
	.ish-sc_sidebar.$btc .widget_tag_cloud a,
	.ish-sc_sidebar.$btc .widget_tag_cloud a:hover,

	.ish-sc_cf7.$bg_cc input,
	.ish-sc_cf7.$bg_cc textarea,
	.ish-sc_cf7.$bg_cc select,

	.ish-sc_cf7.$tc,

	.ish-sc_menu.$tc li a,
	.ish-sc_menu.$btc li a:hover,
	.ish-sc_menu.$btc li.current_page_item a,
	.wpb_text_column.$tc,
	.tooltipster-default.$tt_tc,

	.ish-sc_table.$tc,
	.ish-sc_table.$htc th,
	.ish-sc_table th.$tc,
	.ish-sc_table td.$tc,

	.ish-sc_pricing_table.$tc

	{
		color: " . $n_colors[$cc]['hex'] . ";
	}\n";

	echo "
	.ish-sc_button.$tc, a.ish-sc_button.$tc:hover,
	.ish-sc_portfolio_categories.$tc, .ish-sc_portfolio_categories.$tc a
	{
		color: " . $n_colors[$cc]['hex'] . " !important;
	}\n";

	echo "
	.ish-sc-element.ish-sc_icon.$tc:not([class*='ish-color']) a:hover,
	.ish-recent_posts_post.$cc h3 a:hover,
	.ish-blog .wpb_row.$cc h2 a:hover,
	.ish-blog.ish-blog-fullwidth .wpb_row.$tc h2 a:hover,
	.ish-sc_sidebar.$lc1 .widget a:hover,

	.ish-sc_sidebar.$lc2 .widget_calendar #wp-calendar tfoot a:hover,
	.ish-sc_sidebar.$lc2 .widget_ishyoboy-recent-portfolio-widget a.ish-button-small:hover,
	.ish-sc_sidebar.$lc2 .widget_ishyoboy-dribbble-widget a.ish-button-small:hover,
	.ish-sc_sidebar.$lc2 .widget_ishyoboy-flickr-widget a.ish-button-small:hover,
	.ish-sc_sidebar.$lc2 .widget_ishyoboy-twitter-widget a.ish-button-small:hover
	{
		color: " . ishyoboy_adjust_brightness( $n_colors[$cc]['hex'], -25 ) . ";
	}\n";

	echo "
	.ish-sc-element.$pnc .flex-direction-nav li a:hover
	{
		color: " . ishyoboy_adjust_brightness( $n_colors[$cc]['hex'], -50 ) . ";
	}\n";


	// color* ----------------------------------------------------------------------------------------------------------
	echo "

	.ish-tagline-image.$tc h2,
	.ish-tagline-colored.$tc h2
	{
		color: rgba(" . $n_colors[$cc]['rgb'] . ", 0.8);
	}\n";


	$prefixes = array( ':-moz-placeholder', '::-webkit-input-placeholder', '.placeholder' );
	foreach ( $prefixes as $prefix ) {
		echo '.ish-sc_cf7.'. $bg_cc . ' ' . $prefix . "{ color: rgba(" . $n_colors[$cc]['rgb'] . ", " . $dyn_col_opacity . "); }\n";
	}

	// color* ----------------------------------------------------------------------------------------------------------
	echo "

	.ish-tagline-image.$tc .ish-blog-post-details,
	.ish-tagline-image.$tc .ish-blog-post-details span,
	.ish-tagline-image.$tc .ish-blog-post-details a:hover,
	.ish-tagline-colored.$tc .ish-blog-post-details,
	.ish-tagline-colored.$tc .ish-blog-post-details span,
	.ish-tagline-colored.$tc .ish-blog-post-details a:hover,
	.$tc .ish-section-filter li a
	{
		color: rgba(" . $n_colors[$cc]['rgb'] . ", " . $dyn_col_opacity . ");
	}\n";

	echo "
	.ish-sc_sidebar.$btc .widget_search input[type='text']:-moz-placeholder           { color: rgba(" . $n_colors[$cc]['rgb'] . ", " . $dyn_col_opacity . "); }
	.ish-sc_sidebar.$btc .widget_search input[type='text']::-webkit-input-placeholder { color: rgba(" . $n_colors[$cc]['rgb'] . ", " . $dyn_col_opacity . "); }
	.ish-sc_sidebar.$btc .widget_search input[type='text'].placeholder                { color: rgba(" . $n_colors[$cc]['rgb'] . ", " . $dyn_col_opacity . "); }
	\n";


	// background-color* -----------------------------------------------------------------------------------------------
	echo "
	.wpb_row.$cc,
	.ish-row-overlay.$cc,
	.ish-sc_svg_icon.ish-square.$cc,
	.ish-sc_svg_icon.ish-circle.$cc,
	.ish-gmap_box.$cc,
	.ish-blog .wpb_row.$cc .ish-blog-post-links:after,
	.ish-blog-post-masonry.$cc,
	.ish-blog-post-masonry.$cc.ish-image-cover .ish-blog-post-media + div,
	.ish-blog-post-masonry.$tc.ish-image-cover .ish-blog-post-media + div:before,
	.ish-tagline-colored.$cc .ish-overlay,
	.ish-sc_icon.$cc.ish-square span span,
	.ish-sc_icon.$cc.ish-circle span span,
	.ish-sc_skills .ish-sc_skill.$sc .ish-bar-bg .ish-bar,
	.ish-sc_skills .ish-sc_skill.$cc .ish-bar-bg,
	.ish-sc-element.$nc .flex-control-nav li a,
	.ish-tgg-acc-title.$cc, .ish-tgg-acc-content.$cc,
	.ish-sc_tab.$cc, .ish-tabs-navigation li.$cc a,
	.ish-sc_separator.ish-separator-bold.$cc,
	.ish-sc_separator.ish-separator-thin-bold.$cc:before,

	.ish-sc_sidebar.$bbgc .widget select,
	.ish-sc_sidebar.$bbgc .widget option,
	.ish-sc_sidebar.$bbgc .widget_search input[type='text'],
	.ish-sc_sidebar.$bbgc .widget_tag_cloud a,

	.ish-sc_cf7.$cc input,
	.ish-sc_cf7.$cc textarea,
	.ish-sc_cf7.$cc select,
	.tooltipster-default.$tt_bg,

	.ish-sc_table.$cc td,
	.ish-sc_table.$cc th,
	.ish-sc_table.$hbg table th,
	.ish-sc_table table th.$cc,
	.ish-sc_table table td.$cc,

	.ish-sc_pricing_table.$cc table

	{
		background-color: " . $n_colors[$cc]['hex'] . ";
	}\n";

	echo "
	.ish-sc_icon.$cc.ish-square a:hover span span,
	.ish-sc_icon.$cc.ish-circle a:hover span span,
	.ish-sc_svg_icon.ish-square.$cc a:hover,
	.ish-sc_svg_icon.ish-circle.$cc a:hover,
	.ish-tgg-acc-title.$cc:hover, .ish-tgg-acc-title.$cc.ish-active,
	.ish-sc_sidebar.$bbgc .widget_search input[type='submit']:hover,
	.ish-blog-post-masonry.$cc:hover > div,
	.ish-blog-post-masonry.$cc.ish-image-cover:hover .ish-blog-post-media + div
	{
		background-color: " . ishyoboy_adjust_brightness( $n_colors[$cc]['hex'], -25 ) . ";
	}\n";

	echo "
	.ish-sc-element.$nc .flex-control-nav li a:hover, .ish-sc-element.$nc .flex-control-nav li a.flex-active
	{
		background-color: " . ishyoboy_adjust_brightness( $n_colors[$cc]['hex'], -50 ) . ";
	}\n";

	echo "
	.ish-sc_table.ish-striped.$cc table tr:nth-child(even) td,
	.ish-sc_pricing_table.ish-striped.$cc tr:nth-child(even) td
	{
		background-color: " . ishyoboy_adjust_brightness( $n_colors[$cc]['hex'], -10 ) . ";
	}\n";

	echo "
	.ish-sc_table.ish-striped table tr:nth-child(even) td.$cc
	{
		background-color: " . ishyoboy_adjust_brightness( $n_colors[$cc]['hex'], -10 ) . " !important;
	}\n";

	echo "
	.ish-sc_button.$cc,
	.ish-tgg-acc-title.$cc,
	.ish-tabs-navigation li.$cc a,
	.ish-sc_cf7.$cc input[type=\"submit\"],
	.ish-sc_menu.$cc li a,
	.ish-sc_menu.$bbgc li a:hover,
	.ish-sc_menu.$bbgc li.current_page_item a
	{
		background-color: " . $n_colors[$cc]['hex'] . ";
		box-shadow: 0 3px 0 " . ishyoboy_adjust_brightness( $n_colors[$cc]['hex'], -25 ) . ";
	}\n";


	echo "
	a.ish-sc_button.$cc:hover,
	.ish-tgg-acc-title.$cc:hover, .ish-tgg-acc-title.$cc.ish-active,
	.ish-tabs-navigation li.$cc a:hover, .ish-tabs-navigation li.$cc.ish-active a,
	.ish-sc_sidebar.$bbgc .widget_tag_cloud a:hover,
	.ish-sc_cf7.$cc input[type=\"submit\"]:hover,
	.ish-sc_menu.ish-no-active-bg.$cc li a:hover,
	.ish-sc_menu.ish-no-active-bg.$cc li.current_page_item a,
	.ish-sc_menu.$bbgc li.current_page_item a:hover
	{
		background-color: " . ishyoboy_adjust_brightness( $n_colors[$cc]['hex'], -25 ) . ";
		box-shadow: 0 3px 0 " . ishyoboy_adjust_brightness( $n_colors[$cc]['hex'], -50 ) . ";
	}\n";


	// fill* -----------------------------------------------------------------------------------------------------------
	echo "
	.ish-sc_icon.ish-hexagon.$cc svg polygon,
	.ish-sc_icon.ish-hexagon_rounded.$cc svg path,
	.ish-sc_svg_icon.ish-hexagon.$cc svg polygon,
	.ish-sc_svg_icon.ish-hexagon_rounded.$cc svg path,
	.ish-row_section.$cc .ish-row-decor-top polyline.ish-color,
	.ish-row_section.$cc .ish-row-decor-bottom polyline.ish-color,
	.ish-row_section.$cc .ish-row-decor-top path.ish-color,
	.ish-row_section.$cc .ish-row-decor-bottom path.ish-color,
	.ish-row_section.$cc .ish-row-decor-top polygon.ish-color,
	.ish-row_section.$cc .ish-row-decor-bottom polygon.ish-color,
	.ish-row_section.$cc .ish-row-decor-top rect.ish-color,
	.ish-row_section.$cc .ish-row-decor-bottom rect.ish-color
	{
		fill: " . $n_colors[$cc]['hex'] . ";
	}\n";

	echo "
	.ish-sc_icon.ish-hexagon.$cc a:hover svg polygon,
	.ish-sc_icon.ish-hexagon_rounded.$cc a:hover svg path,
	.ish-sc_svg_icon.ish-hexagon.$cc a:hover svg polygon,
	.ish-sc_svg_icon.ish-hexagon_rounded.$cc a:hover svg path
	{
		fill: " . ishyoboy_adjust_brightness( $n_colors[$cc]['hex'], -25 ) . ";
	}\n";


	// background-color* -----------------------------------------------------------------------------------------------
	echo "
	.ish-p-overlay.$cc > span,
	.ish-blog-fullwidth .wpb_row.$cc > .ish-overlay,
	.ish-tagline-image.$cc .ish-overlay
	{
		background-color: rgba(" . $n_colors[$cc]['rgb'] . ", 0.9);
	}\n";


	// border-color* ---------------------------------------------------------------------------------------------------
	echo "
	.ish-gmap_box.$cc:before,
	.ish-blog.ish-blog-masonry .$tc blockquote,
	.ish-sc_separator.ish-separator-thin.$cc,
	.ish-sc_separator.ish-separator-thin-bold.$cc,
	.$cc .recent_posts_post_content .post-quote-content,
	.ish-sc_table.$borderc th, .ish-sc_table.$borderc tr, .ish-sc_table.$borderc td,
	.ish-sc_pricing_table.$borderc th, .ish-sc_pricing_table.$borderc tr, .ish-sc_pricing_table.$borderc td
	{
		border-color: " . $n_colors[$cc]['hex'] . ";
	}\n";



	// box-shadow* -----------------------------------------------------------------------------------------------------
	echo "
	.ish-sc_sidebar.$bbgc .widget_tag_cloud a
	{
		box-shadow: 0 3px 0 " . ishyoboy_adjust_brightness( $n_colors[$cc]['hex'], -25 ) . ";
	}
	\n";


	// box-shadow* -----------------------------------------------------------------------------------------------------
	echo "
	.$tt_bg .tooltipster-arrow-top span,
	.$tt_bg .tooltipster-arrow-bottom span{
		border-top-color: " . $n_colors[$cc]['hex'] . " !important;
		border-bottom-color: " . $n_colors[$cc]['hex'] . " !important;
	}

	.$tt_bg .tooltipster-arrow-left span,
	.$tt_bg .tooltipster-arrow-right span{
		border-left-color: " . $n_colors[$cc]['hex'] . " !important;
		border-right-color: " . $n_colors[$cc]['hex'] . " !important;
	}
	\n";

}

?>


/* Color1 ----------------------------------------------------------------------------------------------------------- */
.ish-blog .wpb_row h2 a,
.ish-blog .wpb_row blockquote a,
.ish-blog .wpb_row .ish-blog-post-details a,
.ish-blog .wpb_row .ish-blog-post-links a,
.single-post .ish-part_tagline:not([class*="ish-color"]) .ish-blog-post-details a,
.ish-blog.ish-blog-masonry h3 a,
.ish-blog.ish-blog-masonry .ish-link-content a
{
	color: <?php echo $n_colors['ish-color1']['hex']; ?>;
}

.ish-blog .wpb_row h2 a:hover,
.ish-blog .wpb_row blockquote a:hover,
.ish-blog .wpb_row .ish-blog-post-details a:hover,
.ish-blog .wpb_row .ish-blog-post-links a:hover,
.single-post .ish-part_tagline:not([class*="ish-color"]) .ish-blog-post-details a:hover
{
	color: <?php echo ishyoboy_adjust_brightness( $n_colors['ish-color1']['hex'], -25 ); ?>;
}

.ish-comments-headline:before,
.ish-comments-form:before,
input[type="submit"],
.ish-blog .wpb_row .ish-blog-post-links:after,
.ish-blog-post-masonry.ish-image-cover .ish-blog-post-media + div:before
{
	background-color: <?php echo $n_colors['ish-color1']['hex']; ?>;
}

.ish-comments li.comment
{
	background-color: <?php echo "rgba(" . $n_colors['ish-color1']['rgb'] . ", 0.05);" ?>;
}


/* Color2 ----------------------------------------------------------------------------------------------------------- */
.comment-reply-link, .comment-edit-link, .comment-awaiting-moderation
{
	color: <?php echo $n_colors['ish-color2']['hex']; ?>;
}

.widget select,
.widget_search form div,
.mejs-controls .mejs-time-rail .mejs-time-loaded,
input, textarea, select
{
	background-color: <?php echo $n_colors['ish-color2']['hex']; ?>;
}


/* Color3 ----------------------------------------------------------------------------------------------------------- */
.ish-back_to_top,
.widget select,
.widget_search input[type="text"],
.ish-pe-close,
.ish-p-overlay,
.ish-blog.ish-blog-fullwidth .ish-blog-post-links a,
.ish-blog.ish-blog-fullwidth .ish-blog-post-links > span,
input, textarea, select
{
	color: <?php echo $n_colors['ish-color3']['hex']; ?>;
}

.ish-blog.ish-blog-fullwidth .ish-blog-post-links a:hover,
.ish-blog.ish-blog-fullwidth .ish-blog-post-links i:before
{
	color: <?php echo $n_colors['ish-color3']['hex']; ?> !important;
}

<?php
$prefixes = array( ':-moz-placeholder', '::-webkit-input-placeholder', '.placeholder' );
foreach ( $prefixes as $prefix ) {
	echo $prefix . "{ color: rgba(" . $n_colors['ish-color3']['rgb'] . ", " . $dyn_col_opacity . "); }\n";
}
?>

.ish-back_to_top
{
	border-color: <?php echo $n_colors['ish-color3']['hex']; ?>;
}


/* Color4 ----------------------------------------------------------------------------------------------------------- */


/* Color5 ----------------------------------------------------------------------------------------------------------- */
.ish-back_to_top,
.mejs-controls .mejs-time-rail .mejs-time-current,
.ish-comments li.comment-author-admin:before,
input[type="submit"]:hover
{
	background-color: <?php echo $n_colors['ish-color5']['hex']; ?>;
}

.ish-comments .bypostauthor
{
	background-color: rgba(<?php echo ishyoboy_hex2rgb($n_colors['ish-color5']['hex']); ?>, 0.25);
}

.ish-part_header .ish-row_inner:before
{
	border-color: <?php echo $n_colors['ish-color5']['hex']; ?>;
}

.ish-back_to_top:hover {
	background: <?php echo ishyoboy_adjust_brightness( $n_colors['ish-color5']['hex'], -25 ); ?>;
}

/* Extra colors - error, success ------------------------------------------------------------------------------------ */
.wpcf7-validation-errors, .wpcf7-mail-sent-ok, .ish-alert-notice { color: #fff; }
.wpcf7-validation-errors { background-color: #fa594a; } /* Error */
.wpcf7-mail-sent-ok { background-color: #9ac54a; }      /* Success */
.ish-alert-notice { background-color: #49a9e8; }      /* Notice */


<?php
// Header colors -------------------------------------------------------------------------------------------------------
if ( isset( $newdata['header_colors'] ) ) {

	// Bg
	if ( isset( $newdata['header_colors']['bg'] ) && '' != $newdata['header_colors']['bg'] ) {
		?>
		.ish-part_header .ish-row {
			background-color: <?php echo $newdata['header_colors']['bg']; ?>;

			<?php if ( isset( $newdata['header_colors_bg_opacity'] ) && '' != $newdata['header_colors_bg_opacity'] ) { ?>
				background-color: rgba(<?php echo ishyoboy_hex2rgb($newdata['header_colors']['bg']); ?>, <?php echo ( (int)$newdata['header_colors_bg_opacity'] / 100 ); ?>);
			<?php } ?>
		}
		<?php
	}

	// Text
	if ( isset( $newdata['header_colors']['text'] ) && '' != $newdata['header_colors']['text'] ) {
		?>
		.ish-part_header, .ish-part_header a {
			color: <?php echo $newdata['header_colors']['text']; ?>;
		}
		<?php
	}

	// Text active
	if ( isset( $newdata['header_colors']['text_active'] ) && '' != $newdata['header_colors']['text_active'] ) {
		?>
		.ish-part_header a:hover {
			color: <?php echo $newdata['header_colors']['text_active']; ?>;
		}
		<?php
	}
}
?>


<?php
// Main navigation colors ----------------------------------------------------------------------------------------------
if ( isset( $newdata['main_nav_colors'] ) ) {

	// BG
	if ( isset( $newdata['main_nav_colors']['bg'] ) && '' != $newdata['main_nav_colors']['bg'] ){
		?>
		.ish-ph-main_nav > ul > li > a {
			background-color: <?php echo $newdata['main_nav_colors']['bg']; ?>;
		}
		<?php
	}

	// Text
	if ( isset( $newdata['main_nav_colors']['text'] ) && '' != $newdata['main_nav_colors']['text'] ){
		?>
		.ish-ph-main_nav > ul > li > a {
			color: <?php echo $newdata['main_nav_colors']['text']; ?>;
		}
		<?php
	}

	// Active bg
	if ( isset( $newdata['main_nav_colors']['bg_active'] ) && '' != $newdata['main_nav_colors']['bg_active'] ){
		?>
		.ish-ph-main_nav > ul > li > a:hover, .ish-ph-main_nav > ul > li:hover > a,
		.ish-ph-main_nav > ul > .current-menu-item > a,
		.ish-ph-mn-resp_menu a.ish-active,
		.ish-ph-main_nav > ul > .current_page_ancestor > a,
		.ish-ph-main_nav > ul > .current_page_item > a,
		.ish-ph-main_nav > ul > .current_page_parent > a
		{
			background-color: <?php echo $newdata['main_nav_colors']['bg_active']; ?>;
		}
		<?php
	}

	// Active text
	if ( isset( $newdata['main_nav_colors']['text_active'] ) && '' != $newdata['main_nav_colors']['text_active'] ){
		?>
		.ish-ph-main_nav > ul > li > a:hover, .ish-ph-main_nav > ul > li:hover > a,
		.ish-ph-main_nav > ul > .current-menu-item > a,
		.ish-ph-mn-resp_menu a.ish-active,
		.ish-ph-main_nav > ul > .current_page_ancestor > a,
		.ish-ph-main_nav > ul > .current_page_item > a,
		.ish-ph-main_nav > ul > .current_page_parent > a
		{
			color: <?php echo $newdata['main_nav_colors']['text_active']; ?>;
		}
		<?php
	}
}
?>


<?php
// Main navigation submenu colors --------------------------------------------------------------------------------------
if ( isset( $newdata['main_nav_submenu_colors'] ) ) {

	// BG
	if ( isset( $newdata['main_nav_submenu_colors']['bg'] ) && '' != $newdata['main_nav_submenu_colors']['bg'] ){
		?>
		.ish-ph-main_nav > ul > li ul {
			background-color: <?php echo $newdata['main_nav_submenu_colors']['bg']; ?>;
		}
		<?php
	}

	// Text
	if ( isset( $newdata['main_nav_submenu_colors']['text'] ) && '' != $newdata['main_nav_submenu_colors']['text'] ){
		?>
		.ish-ph-main_nav > ul > li > ul li a {
			color: <?php echo $newdata['main_nav_submenu_colors']['text']; ?>;
		}
		<?php
	}

	// Active text
	if ( isset( $newdata['main_nav_submenu_colors']['text_active'] ) && '' != $newdata['main_nav_submenu_colors']['text_active'] ){
		?>
		.ish-ph-main_nav > ul > li > ul li a:hover,
		.ish-ph-main_nav > ul > li > ul li:hover > a,
		.ish-ph-main_nav > ul > li > ul .current_page_ancestor > a,
		.ish-ph-main_nav > ul > li > ul .current_page_item > a,
		.ish-ph-main_nav > ul > li > ul .current_page_parent > a {
			color: <?php echo $newdata['main_nav_submenu_colors']['text_active']; ?>;
		}
		<?php
	}
}
?>


<?php
// Tagline colors ------------------------------------------------------------------------------------------------------
if ( isset( $newdata['tagline_colors'] ) ) {

	// Bg
	if ( isset( $newdata['tagline_colors']['bg'] ) && '' != $newdata['tagline_colors']['bg'] ) {
	?>
		.ish-part_tagline, .ish-part_tagline:before {
			background-color: <?php echo $newdata['tagline_colors']['bg']; ?>;
		}
		.ish-part_tagline > .ish-row {
			background-color: transparent;
		}
		<?php
	}

	// Tagline1
	if ( isset( $newdata['tagline_colors']['headline_1'] ) && '' != $newdata['tagline_colors']['headline_1'] ) {
		?>
		.ish-part_tagline h1,
		.single-post .ish-blog-post-details a:hover {
			color: <?php echo $newdata['tagline_colors']['headline_1']; ?>;
		}
		<?php
	}

	// Tagline2
	if ( isset( $newdata['tagline_colors']['headline_2'] ) && '' != $newdata['tagline_colors']['headline_2'] ) {
		?>
		.ish-part_tagline h2,
		.single-post .ish-blog-post-details,
		.single-post .ish-blog-post-details span,
		.single-post .ish-blog-post-details a {
			color: <?php echo $newdata['tagline_colors']['headline_2']; ?>;
		}
		<?php
	}
}
?>


<?php
// Breadcrumbs colors --------------------------------------------------------------------------------------------------
if ( isset( $newdata['breadcrumbs_colors'] ) ) {

	// Bg
	if ( isset( $newdata['breadcrumbs_colors']['bg'] ) && '' != $newdata['breadcrumbs_colors']['bg'] ) {
		?>
		.ish-part_breadcrumbs .ish-row,
		.ish-part_breadcrumbs:before,
		.ish-pb-socials .ish-sc_icon a > span
		{
			background-color: <?php echo $newdata['breadcrumbs_colors']['bg']; ?>;
		}
		<?php
	}

	// Text
	if ( isset( $newdata['breadcrumbs_colors']['text'] ) && '' != $newdata['breadcrumbs_colors']['text'] ) {
		?>
		.ish-part_breadcrumbs div
		{
			color: <?php echo $newdata['breadcrumbs_colors']['text']; ?>;
		}
		<?php
	}

	// Link
	if ( isset( $newdata['breadcrumbs_colors']['link'] ) && '' != $newdata['breadcrumbs_colors']['link'] ) {
		?>
		.ish-part_breadcrumbs a
		{
			color: <?php echo $newdata['breadcrumbs_colors']['link']; ?>;
		}
		<?php
	}

	// Link active
	if ( isset( $newdata['breadcrumbs_colors']['link_active'] ) && '' != $newdata['breadcrumbs_colors']['link_active'] ) {
		?>
		.ish-part_breadcrumbs a:hover
		{
			color: <?php echo $newdata['breadcrumbs_colors']['link_active']; ?>;
		}
		<?php
	}
}
?>


<?php
// Search colors -------------------------------------------------------------------------------------------------------
if ( isset( $newdata['search_colors'] ) ) {

	// Bg
	if ( isset( $newdata['search_colors']['bg'] ) && '' != $newdata['search_colors']['bg'] ) {
		?>
		.ish-part_searchbar {
			background-color: <?php echo $newdata['search_colors']['bg']; ?>;
		}
		<?php
	}

	// Text
	if ( isset( $newdata['search_colors']['text'] ) && '' != $newdata['search_colors']['text'] ) {
		?>
		.ish-part_searchbar input[type="text"], .ish-ps-searchform_close {
			color: <?php echo $newdata['search_colors']['text']; ?>;
		}

		<?php
		$prefixes = array( ':-moz-placeholder', '::-webkit-input-placeholder', '.placeholder' );
		$placeholders = Array( '.ish-part_searchbar input[type="text"]' );
		foreach ( $placeholders as $placeholder ) {
			foreach ( $prefixes as $prefix ) {
				echo $placeholder . $prefix . "{ color: rgba(" . ishyoboy_hex2rgb($newdata['search_colors']['text']) . ", " . $dyn_col_opacity . "); }\n";
			}
		}
	}

	// Text active
	if ( isset( $newdata['search_colors']['text'] ) && '' != $newdata['search_colors']['text'] ) {
		?>
		.ish-part_searchbar a:hover {
			color: <?php echo $newdata['search_colors']['text_active']; ?>;
		}
		<?php
	}
}
?>


<?php
// Sidenav colors ------------------------------------------------------------------------------------------------------
if ( isset( $newdata['sidenav_colors'] ) ) {

	// Bg
	if ( isset( $newdata['sidenav_colors']['bg'] ) && '' != $newdata['sidenav_colors']['bg'] ) {
		?>
		.ish-sidenav {
			background-color: <?php echo $newdata['sidenav_colors']['bg']; ?>;
		}
		<?php
	}

	// Link
	if ( isset( $newdata['sidenav_colors']['link'] ) && '' != $newdata['sidenav_colors']['link'] ) {
		?>
		.ish-sidenav a {
			color: <?php echo $newdata['sidenav_colors']['link']; ?>;
			border-color: rgba(<?php echo ishyoboy_hex2rgb($newdata['sidenav_colors']['link']) . ", " . $dyn_col_opacity; ?>);
		}
		<?php
	}

	// Link active
	if ( isset( $newdata['sidenav_colors']['link_active'] ) && '' != $newdata['sidenav_colors']['link_active'] ) {
		?>
		.ish-sidenav a:hover,
		.ish-sidenav .current-menu-item > a,
		.ish-sidenav a.ish-active,
		.ish-sidenav .current_page_ancestor > a,
		.ish-sidenav .current_page_item > a,
		.ish-sidenav .current_page_parent > a {
			color: <?php echo $newdata['sidenav_colors']['link_active']; ?>;
		}
		<?php
	}
}
?>


<?php
// Responsive navigation colors ----------------------------------------------------------------------------------------
if ( isset( $newdata['respnav_colors'] ) ) {

	// Bg
	if ( isset( $newdata['respnav_colors']['bg'] ) && '' != $newdata['respnav_colors']['bg'] ) {
		?>
		.ish-ph-mn-be_resp {
			background-color: <?php echo $newdata['respnav_colors']['bg']; ?>;
		}
		<?php
	}

	// Link
	if ( isset( $newdata['respnav_colors']['link'] ) && '' != $newdata['respnav_colors']['link'] ) {
		?>
		.ish-ph-mn-be_resp a {
			color: <?php echo $newdata['respnav_colors']['link']; ?>;
			border-color: rgba(<?php echo ishyoboy_hex2rgb($newdata['respnav_colors']['link']) . ", " . $dyn_col_opacity; ?>) !important;
		}
		<?php
	}

	// Link active
	if ( isset( $newdata['respnav_colors']['link_active'] ) && '' != $newdata['respnav_colors']['link_active'] ) {
		?>
		.ish-ph-mn-be_resp a:hover,
		.ish-ph-mn-be_resp a.ish-active,
		.ish-ph-mn-be_resp .current_page_ancestor > a,
		.ish-ph-mn-be_resp .current_page_item > a,
		.ish-ph-mn-be_resp .current_page_parent > a {
			color: <?php echo $newdata['respnav_colors']['link_active']; ?>;
		}
		<?php
	}
}
?>


<?php
// Exapndable area colors ----------------------------------------------------------------------------------------------
if ( isset( $newdata['exparea_colors'] ) || isset( $newdata['exparea_block_colors'] ) ) {

	// Bg
	if ( isset( $newdata['exparea_colors']['bg'] ) && '' != $newdata['exparea_colors']['bg'] ) {
		?>
		.ish-part_expandable .ish-pe-bg
		{
			background-color: <?php echo $newdata['exparea_colors']['bg']; ?>;
		}
		<?php
	}

	// Text
	if ( isset( $newdata['exparea_colors']['text'] ) && '' != $newdata['exparea_colors']['text'] ) {
		?>
		.ish-part_expandable .widget
		{
			color: <?php echo $newdata['exparea_colors']['text']; ?>;
		}
		<?php
	}

	// Link 1
	if ( isset( $newdata['exparea_colors']['link1'] ) && '' != $newdata['exparea_colors']['link1'] ) {
		?>
		.ish-part_expandable .widget-title,
		.ish-part_expandable .widget a
		{
			color: <?php echo $newdata['exparea_colors']['link1']; ?>;
		}
		<?php
	}
	// Link 1 hover
	if ( isset( $newdata['exparea_colors']['link1'] ) && '' != $newdata['exparea_colors']['link1'] ) {
		?>
		.ish-part_expandable .widget a:hover
		{
			color: <?php echo ishyoboy_adjust_brightness( $newdata['exparea_colors']['link1'], -25 ); ?>;
		}
		<?php
	}

	// Link 2
	if ( isset( $newdata['exparea_colors']['link2'] ) && '' != $newdata['exparea_colors']['link2'] ) {
		?>
		.ish-part_expandable .widget_calendar #wp-calendar tfoot a,
		.ish-part_expandable .widget_ishyoboy-recent-portfolio-widget a.ish-button-small,
		.ish-part_expandable .widget_ishyoboy-dribbble-widget a.ish-button-small,
		.ish-part_expandable .widget_ishyoboy-flickr-widget a.ish-button-small,
		.ish-part_expandable .widget_ishyoboy-twitter-widget a.ish-button-small
		{
			color: <?php echo $newdata['exparea_colors']['link2']; ?>;
		}
		<?php
	}
	// Link 2
	if ( isset( $newdata['exparea_colors']['link2'] ) && '' != $newdata['exparea_colors']['link2'] ) {
		?>
		.ish-part_expandable .widget_calendar #wp-calendar tfoot a:hover,
		.ish-part_expandable .widget_ishyoboy-recent-portfolio-widget a.ish-button-small:hover,
		.ish-part_expandable .widget_ishyoboy-dribbble-widget a.ish-button-small:hover,
		.ish-part_expandable .widget_ishyoboy-flickr-widget a.ish-button-small:hover,
		.ish-part_expandable .widget_ishyoboy-twitter-widget a.ish-button-small:hover
		{
			color: <?php echo ishyoboy_adjust_brightness( $newdata['footer_colors']['link2'], -25 ); ?>;
		}
		<?php
	}

	// Block el bg
	if ( isset( $newdata['exparea_block_colors']['block_bg'] ) && '' != $newdata['exparea_block_colors']['block_bg'] ) {
		?>
		.ish-part_expandable .widget select,
		.ish-part_expandable .widget option,
		.ish-part_expandable .widget_search input[type="text"],
		.ish-part_expandable .widget_tag_cloud a
		{
			background-color: <?php echo $newdata['exparea_block_colors']['block_bg']; ?>;
		}
		<?php
	}

	// Block el bg active
	if ( isset( $newdata['exparea_block_colors']['block_bg'] ) && '' != $newdata['exparea_block_colors']['block_bg'] ) {
		?>
		.ish-part_expandable .widget_search input[type="submit"]:hover
		{
			background-color: <?php echo ishyoboy_adjust_brightness( $newdata['exparea_block_colors']['block_bg'], -25 ); ?>;
		}
		<?php
	}

	// Block el text
	if ( isset( $newdata['exparea_block_colors']['block_text'] ) && '' != $newdata['exparea_block_colors']['block_text'] ) {
		?>
		.ish-part_expandable .widget select,
		.ish-part_expandable .widget option,
		.ish-part_expandable .widget_search input[type="text"],
		.ish-part_expandable .widget_search input[type="submit"],
		.ish-part_expandable .widget_tag_cloud a,
		.ish-part_expandable .widget_tag_cloud a:hover
		{
			color: <?php echo $newdata['exparea_block_colors']['block_text']; ?>;
		}

		<?php
		$prefixes = array( ':-moz-placeholder', '::-webkit-input-placeholder', '.placeholder' );
		$placeholders = Array( '.ish-part_expandable .widget_search input[type="text"]' );
		foreach ( $placeholders as $placeholder ) {
			foreach ( $prefixes as $prefix ) {
				echo $placeholder . $prefix . "{ color: rgba(" . ishyoboy_hex2rgb($newdata['exparea_block_colors']['block_text']) . ", " . $dyn_col_opacity . "); }\n";
			}
		}
	}

	// Block shadow
	if ( isset( $newdata['exparea_block_colors']['block_bg'] ) && '' != $newdata['exparea_block_colors']['block_bg'] ) {
		?>
		.ish-part_expandable .widget_tag_cloud a
		{
			box-shadow: 0 3px 0 <?php echo ishyoboy_adjust_brightness( $newdata['exparea_block_colors']['block_bg'], -25 ); ?>;
		}
		<?php
	}

	// Block bg + shadow hover
	if ( isset( $newdata['exparea_block_colors']['block_bg'] ) && '' != $newdata['exparea_block_colors']['block_bg'] ) {
		?>
		.ish-part_expandable .widget_tag_cloud a:hover
		{
			background-color: <?php echo ishyoboy_adjust_brightness( $newdata['exparea_block_colors']['block_bg'], -25 ); ?>;
			box-shadow: 0 3px 0 <?php echo ishyoboy_adjust_brightness( $newdata['exparea_block_colors']['block_bg'], -50 ); ?>;
		}
		<?php
	}
}
?>


<?php
// Sidebar colors ------------------------------------------------------------------------------------------------------
if ( isset( $newdata['sidebar_colors'] ) || isset( $newdata['sidebar_block_colors'] ) ) {

	// Bg
	if ( isset( $newdata['sidebar_colors']['bg'] ) && '' != $newdata['footer_colors']['bg'] ) {
		?>
		.ish-main-sidebar
		{
			background-color: <?php echo $newdata['sidebar_colors']['bg']; ?>;
		}
		<?php
	}

	// Text
	if ( isset( $newdata['sidebar_colors']['text'] ) && '' != $newdata['sidebar_colors']['text'] ) {
		?>
		.ish-main-sidebar .widget
		{
			color: <?php echo $newdata['sidebar_colors']['text']; ?>;
		}
		<?php
	}

	// Link 1
	if ( isset( $newdata['sidebar_colors']['link1'] ) && '' != $newdata['sidebar_colors']['link1'] ) {
		?>
		.ish-main-sidebar .widget-title,
		.ish-main-sidebar .widget a
		{
			color: <?php echo $newdata['sidebar_colors']['link1']; ?>;
		}
		<?php
	}
	// Link 1 hover
	if ( isset( $newdata['sidebar_colors']['link1'] ) && '' != $newdata['sidebar_colors']['link1'] ) {
		?>
		.ish-main-sidebar .widget a:hover
		{
			color: <?php echo ishyoboy_adjust_brightness( $newdata['sidebar_colors']['link1'], -25 ); ?>;
		}
		<?php
	}

	// Link 2
	if ( isset( $newdata['sidebar_colors']['link2'] ) && '' != $newdata['sidebar_colors']['link2'] ) {
		?>
		.ish-main-sidebar .widget_calendar #wp-calendar tfoot a,
		.ish-main-sidebar .widget_ishyoboy-recent-portfolio-widget a.ish-button-small,
		.ish-main-sidebar .widget_ishyoboy-dribbble-widget a.ish-button-small,
		.ish-main-sidebar .widget_ishyoboy-flickr-widget a.ish-button-small,
		.ish-main-sidebar .widget_ishyoboy-twitter-widget a.ish-button-small
		{
			color: <?php echo $newdata['sidebar_colors']['link2']; ?>;
		}
		<?php
	}
	// Link 2
	if ( isset( $newdata['sidebar_colors']['link2'] ) && '' != $newdata['sidebar_colors']['link2'] ) {
		?>
		.ish-main-sidebar .widget_calendar #wp-calendar tfoot a:hover,
		.ish-main-sidebar .widget_ishyoboy-recent-portfolio-widget a.ish-button-small:hover,
		.ish-main-sidebar .widget_ishyoboy-dribbble-widget a.ish-button-small:hover,
		.ish-main-sidebar .widget_ishyoboy-flickr-widget a.ish-button-small:hover,
		.ish-main-sidebar .widget_ishyoboy-twitter-widget a.ish-button-small:hover
		{
			color: <?php echo ishyoboy_adjust_brightness( $newdata['sidebar_colors']['link2'], -25 ); ?>;
		}
		<?php
	}

	// Block el bg
	if ( isset( $newdata['sidebar_block_colors']['block_bg'] ) && '' != $newdata['sidebar_block_colors']['block_bg'] ) {
		?>
		.ish-main-sidebar .widget select,
		.ish-main-sidebar .widget option,
		.ish-main-sidebar .widget_search input[type="text"],
		.ish-main-sidebar .widget_tag_cloud a
		{
			background-color: <?php echo $newdata['sidebar_block_colors']['block_bg']; ?>;
		}
		<?php
	}

	// Block el bg active
	if ( isset( $newdata['sidebar_block_colors']['block_bg'] ) && '' != $newdata['sidebar_block_colors']['block_bg'] ) {
		?>
		.ish-main-sidebar .widget_search input[type="submit"]:hover
		{
			background-color: <?php echo ishyoboy_adjust_brightness( $newdata['sidebar_block_colors']['block_bg'], -25 ); ?>;
		}
		<?php
	}

	// Block el text
	if ( isset( $newdata['sidebar_block_colors']['block_text'] ) && '' != $newdata['sidebar_block_colors']['block_text'] ) {
		?>
		.ish-main-sidebar .widget select,
		.ish-main-sidebar .widget option,
		.ish-main-sidebar .widget_search input[type="text"],
		.ish-main-sidebar .widget_search input[type="submit"],
		.ish-main-sidebar .widget_tag_cloud a,
		.ish-main-sidebar .widget_tag_cloud a:hover
		{
			color: <?php echo $newdata['sidebar_block_colors']['block_text']; ?>;
		}

		<?php
		$prefixes = array( ':-moz-placeholder', '::-webkit-input-placeholder', '.placeholder' );
		$placeholders = Array( '.ish-main-sidebar .widget_search input[type="text"]' );
		foreach ( $placeholders as $placeholder ) {
			foreach ( $prefixes as $prefix ) {
				echo $placeholder . $prefix . "{ color: rgba(" . ishyoboy_hex2rgb($newdata['footer_block_colors']['block_text']) . ", " . $dyn_col_opacity . "); }\n";
			}
		}
	}

	// Block shadow
	if ( isset( $newdata['sidebar_block_colors']['block_bg'] ) && '' != $newdata['sidebar_block_colors']['block_bg'] ) {
		?>
		.ish-main-sidebar .widget_tag_cloud a
		{
			box-shadow: 0 3px 0 <?php echo ishyoboy_adjust_brightness( $newdata['sidebar_block_colors']['block_bg'], -25 ); ?>;
		}
		<?php
	}

	// Block bg + shadow hover
	if ( isset( $newdata['sidebar_block_colors']['block_bg'] ) && '' != $newdata['sidebar_block_colors']['block_bg'] ) {
		?>
		.ish-main-sidebar .widget_tag_cloud a:hover
		{
			background-color: <?php echo ishyoboy_adjust_brightness( $newdata['sidebar_block_colors']['block_bg'], -25 ); ?>;
			box-shadow: 0 3px 0 <?php echo ishyoboy_adjust_brightness( $newdata['sidebar_block_colors']['block_bg'], -50 ); ?>;
		}
		<?php
	}
}
?>


<?php
// Footer colors -------------------------------------------------------------------------------------------------------
if ( isset( $newdata['footer_colors'] ) || isset( $newdata['footer_block_colors'] ) ) {

	// Bg
	if ( isset( $newdata['footer_colors']['bg'] ) && '' != $newdata['footer_colors']['bg'] ) {
		?>
		.ish-part_footer
		{
			background-color: <?php echo $newdata['footer_colors']['bg']; ?>;
		}
		<?php
	}

	// Text
	if ( isset( $newdata['footer_colors']['text'] ) && '' != $newdata['footer_colors']['text'] ) {
		?>
		.ish-part_footer .widget
		{
			color: <?php echo $newdata['footer_colors']['text']; ?>;
		}
		<?php
	}

	// Link 1
	if ( isset( $newdata['footer_colors']['link1'] ) && '' != $newdata['footer_colors']['link1'] ) {
		?>
		.ish-part_footer .widget-title,
		.ish-part_footer .widget a
		{
			color: <?php echo $newdata['footer_colors']['link1']; ?>;
		}
		<?php
	}
	// Link 1 hover
	if ( isset( $newdata['footer_colors']['link1'] ) && '' != $newdata['footer_colors']['link1'] ) {
		?>
		.ish-part_footer .widget a:hover
		{
			color: <?php echo ishyoboy_adjust_brightness( $newdata['footer_colors']['link1'], -25 ); ?>;
		}
		<?php
	}

	// Link 2
	if ( isset( $newdata['footer_colors']['link2'] ) && '' != $newdata['footer_colors']['link2'] ) {
		?>
		.ish-part_footer .widget_calendar #wp-calendar tfoot a,
		.ish-part_footer .widget_ishyoboy-recent-portfolio-widget a.ish-button-small,
		.ish-part_footer .widget_ishyoboy-dribbble-widget a.ish-button-small,
		.ish-part_footer .widget_ishyoboy-flickr-widget a.ish-button-small,
		.ish-part_footer .widget_ishyoboy-twitter-widget a.ish-button-small
		{
			color: <?php echo $newdata['footer_colors']['link2']; ?>;
		}
		<?php
	}
	// Link 2 hover
	if ( isset( $newdata['footer_colors']['link2'] ) && '' != $newdata['footer_colors']['link2'] ) {
		?>
		.ish-part_footer .widget_calendar #wp-calendar tfoot a:hover,
		.ish-part_footer .widget_ishyoboy-recent-portfolio-widget a.ish-button-small:hover,
		.ish-part_footer .widget_ishyoboy-dribbble-widget a.ish-button-small:hover,
		.ish-part_footer .widget_ishyoboy-flickr-widget a.ish-button-small:hover,
		.ish-part_footer .widget_ishyoboy-twitter-widget a.ish-button-small:hover
		{
			color: <?php echo ishyoboy_adjust_brightness( $newdata['footer_colors']['link2'], -25 ); ?>;
		}
		<?php
	}

	// Block el bg
	if ( isset( $newdata['footer_block_colors']['block_bg'] ) && '' != $newdata['footer_block_colors']['block_bg'] ) {
		?>
		.ish-part_footer .widget select,
		.ish-part_footer .widget option,
		.ish-part_footer .widget_search input[type="text"],
		.ish-part_footer .widget_tag_cloud a
		{
			background-color: <?php echo $newdata['footer_block_colors']['block_bg']; ?>;
		}
		<?php
	}

	// Block el bg active
	if ( isset( $newdata['footer_block_colors']['block_bg'] ) && '' != $newdata['footer_block_colors']['block_bg'] ) {
		?>
		.ish-part_footer .widget_search input[type="submit"]:hover
		{
			background-color: <?php echo ishyoboy_adjust_brightness( $newdata['footer_block_colors']['block_bg'], -25 ); ?>;
		}
		<?php
	}

	// Block el text
	if ( isset( $newdata['footer_block_colors']['block_text'] ) && '' != $newdata['footer_block_colors']['block_text'] ) {
		?>
		.ish-part_footer .widget select,
		.ish-part_footer .widget option,
		.ish-part_footer .widget_search input[type="text"],
		.ish-part_footer .widget_search input[type="submit"],
		.ish-part_footer .widget_tag_cloud a,
		.ish-part_footer .widget_tag_cloud a:hover
		{
			color: <?php echo $newdata['footer_block_colors']['block_text']; ?>;
		}

		<?php
		$prefixes = array( ':-moz-placeholder', '::-webkit-input-placeholder', '.placeholder' );
		$placeholders = Array( '.ish-part_footer .widget_search input[type="text"]' );
		foreach ( $placeholders as $placeholder ) {
			foreach ( $prefixes as $prefix ) {
				echo $placeholder . $prefix . "{ color: rgba(" . ishyoboy_hex2rgb($newdata['footer_block_colors']['block_text']) . ", " . $dyn_col_opacity . "); }\n";
			}
		}
	}

	// Block shadow
	if ( isset( $newdata['footer_block_colors']['block_bg'] ) && '' != $newdata['footer_block_colors']['block_bg'] ) {
		?>
		.ish-part_footer .widget_tag_cloud a
		{
			box-shadow: 0 3px 0 <?php echo ishyoboy_adjust_brightness( $newdata['footer_block_colors']['block_bg'], -25 ); ?>;
		}
		<?php
	}

	// Block bg + shadow hover
	if ( isset( $newdata['footer_block_colors']['block_bg'] ) && '' != $newdata['footer_block_colors']['block_bg'] ) {
		?>
		.ish-part_footer .widget_tag_cloud a:hover
		{
			background-color: <?php echo ishyoboy_adjust_brightness( $newdata['footer_block_colors']['block_bg'], -25 ); ?>;
			box-shadow: 0 3px 0 <?php echo ishyoboy_adjust_brightness( $newdata['footer_block_colors']['block_bg'], -50 ); ?>;
		}
		<?php
	}
}
?>


<?php
// Footer legals colors ------------------------------------------------------------------------------------------------
if ( isset( $newdata['footer_legals_colors'] ) ) {

	// Bg
	if ( isset( $newdata['footer_legals_colors']['bg'] ) && '' != $newdata['footer_legals_colors']['bg'] ) {
		?>
		.ish-part_legals .ish-row
		{
			background-color: <?php echo $newdata['footer_legals_colors']['bg']; ?>;
		}
		<?php
	}

	// Text
	if ( isset( $newdata['footer_legals_colors']['text'] ) && '' != $newdata['footer_legals_colors']['text'] ) {
		?>
		.ish-part_legals
		{
			color: <?php echo $newdata['footer_legals_colors']['text']; ?>;
		}
		<?php
	}

	// Link
	if ( isset( $newdata['footer_legals_colors']['link'] ) && '' != $newdata['footer_legals_colors']['link'] ) {
		?>
		.ish-part_legals a
		{
			color: <?php echo $newdata['footer_legals_colors']['link']; ?>;
		}
		<?php
	}

	// Link active
	if ( isset( $newdata['footer_legals_colors']['link'] ) && '' != $newdata['footer_legals_colors']['link'] ) {
		?>
		.ish-part_legals a:hover
		{
			color: <?php echo ishyoboy_adjust_brightness( $newdata['footer_legals_colors']['link'], -25 ); ?>;
		}
		<?php
	}
}