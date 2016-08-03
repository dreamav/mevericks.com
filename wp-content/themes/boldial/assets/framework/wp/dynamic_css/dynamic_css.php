<?php

/* *********************************************************************************************************************
 * Theme options
 */

include( locate_template( 'assets/framework/wp/dynamic_css/inc/dynamic_fonts.php' ) );
include( locate_template( 'assets/framework/wp/dynamic_css/inc/dynamic_colors.php' ) );
include( locate_template( 'assets/framework/wp/dynamic_css/inc/dynamic_patterns.php' ) );
include( locate_template( 'assets/framework/wp/dynamic_css/inc/dynamic_responsive.php' ) );
include( locate_template( 'assets/framework/wp/dynamic_css/inc/dynamic_misc.php' ) );
if ( ishyoboy_woocommerce_plugin_active() ){
	include( locate_template( 'assets/framework/wp/dynamic_css/inc/dynamic_woocommerce.php' ) );
}
