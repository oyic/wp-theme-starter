<?php

function _theme_assets() {
    $version = filemtime( get_template_directory() . '/dist/assets/css/main.css' ) ? : '1.0.0';
	wp_enqueue_style( '_theme-stylesheet', get_template_directory_uri() . '/dist/assets/css/main.css', array(), $version, 'all' );
    $version = filemtime( get_template_directory() . '/dist/assets/js/main.js' ) ? : '1.0.0';
	wp_enqueue_script( '_theme-scripts', get_template_directory_uri() . '/dist/assets/js/main.js', array(), $version, true);
   
}

add_action('wp_enqueue_scripts','_theme_assets');


function _theme_admin_assets() {
	$version = filemtime( get_template_directory() . '/dist/assets/css/admin.css' ) ? : '1.0.0';
	wp_enqueue_style( '_theme-admin-stylesheet', get_template_directory_uri() . '/dist/assets/css/admin.css', array(), $version, 'all' );
	$version = filemtime( get_template_directory() . '/dist/assets/js/admin.js' ) ? : '1.0.0';
	wp_enqueue_script( '_theme-admin-scripts', get_template_directory_uri() . '/dist/assets/js/admin.js', array(), $version, true);
}

add_action('admin_enqueue_scripts','_theme_admin_assets');