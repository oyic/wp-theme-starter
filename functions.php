<?php

require_once(__DIR__ .'/vendor/autoload.php');

$default_directory = get_stylesheet_directory();
foreach(glob($default_directory . '/inc/*.php') as $file){
	require_once($file);
}

if(function_exists('get_field')) echo "ACF installed";
else echo "ACF NOT installed";