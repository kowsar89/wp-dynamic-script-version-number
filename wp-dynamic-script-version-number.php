<?php
/*
Plugin Name: WP Dynamic Script Version Number
Plugin URI: https://kowsarhossain.com/
Description: Generate Dynamic Script Version Number into CSS/JS to ignore static cache
Version: 1.0
*/

if ( ! defined( 'ABSPATH' ) ) exit;

// Change asset version num
add_filter( 'script_loader_src', 'foa_dynamic_script_ver', 150 );
add_filter( 'style_loader_src', 'foa_dynamic_script_ver', 150);
function foa_dynamic_script_ver( $src ){
	return add_query_arg( 'ver', time(), $src );
}
