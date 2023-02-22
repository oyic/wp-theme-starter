<?php

function _placeholder_assets() {
    $version = filemtime( get_template_directory() . '/dist/assets/css/main.css' ) ? : '1.0.0';
	wp_register_style( '_placeholder-stylesheet', get_template_directory_uri() . '/dist/assets/css/main.css', [], $version, 'all' );
	wp_enqueue_style( '_placeholder-stylesheet');

    $version = filemtime( get_template_directory() . '/dist/assets/js/main.js' ) ? : '1.0.0';
	wp_register_script( '_placeholder-scripts', get_template_directory_uri() . '/dist/assets/js/main.js', array('jquery'), $version, true);
	wp_enqueue_script( '_placeholder-scripts');
   
}

add_action('wp_enqueue_scripts','_placeholder_assets');


function _placeholder_admin_assets() {
	if(wp_style_is('_placeholder-admin-stylesheet')):
		wp_enqueue_style('_placeholder-admin-stylesheet');
	else:
		$version = filemtime( get_template_directory() . '/dist/assets/css/admin.css' ) ? : '1.0.0';
		wp_enqueue_style( '_placeholder-admin-stylesheet', get_template_directory_uri() . '/dist/assets/css/main.css', array(), $version, 'all' );
	endif;
	if(wp_script_is('_placeholder-admin-scripts')):
		wp_enqueue_script( '_placeholder-admin-scripts');
	else:
		$version = filemtime( get_template_directory() . '/dist/assets/js/admin.js' ) ? : '1.0.0';
		wp_enqueue_script( '_placeholder-admin-scripts', get_template_directory_uri() . '/dist/assets/js/main.js', array('jquery'), $version, true);
	endif;
}

add_action('admin_enqueue_scripts','_placeholder_admin_assets');

function _placeholder_custom_excerpt_length( $length ) {
    return 27;
}
add_filter( 'excerpt_length', '_placeholder_custom_excerpt_length', 999 );