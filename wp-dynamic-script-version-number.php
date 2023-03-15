<?php
/*
Plugin Name: WP Dynamic Script Version Number
Plugin URI: https://kowsarhossain.com/
Description: Generate dynamic version number into CSS/JS to bypass browser cache. Could be used inside mu-plugins as well.
Version: 1.0
*/

if ( ! defined( 'ABSPATH' ) ) exit;

// Change asset version num
add_filter( 'script_loader_src', 'foa_dynamic_script_ver', 150 );
add_filter( 'style_loader_src', 'foa_dynamic_script_ver', 150);
function foa_dynamic_script_ver( $src ){
	return add_query_arg( 'ver', time(), $src );
}
