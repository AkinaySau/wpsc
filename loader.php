<?php
/**
 * Created by PhpStorm.
 * User: sau
 * Date: 12.07.18
 * Time: 16:31
 */


use Sau\WP\WPSC\KernelSimpleComposer;

global $kernel_wpsc;

if ( ! defined( 'DS' ) ) {
	define( 'DS', DIRECTORY_SEPARATOR );
}

#todo не могу получить эти константы в классе DEFINE, надо подумать
if ( ! defined( 'WPSC_PLUGIN_DIR_PATH' ) ) {
	define( 'WPSC_PLUGIN_DIR_PATH', plugin_dir_path( __FILE__ ) );
}

if ( ! defined( 'WPSC_PLUGIN_DIR_URL' ) ) {
	define( 'WPSC_PLUGIN_DIR_URL', plugin_dir_url( __FILE__ ) );
}

$kernel_wpsc = new KernelSimpleComposer();