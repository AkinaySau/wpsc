<?php
/**
 * Created by PhpStorm.
 * User: sau
 * Date: 12.07.18
 * Time: 16:31
 */


use Sau\WP\WPSC\Config\Model;
use Sau\WP\WPSC\KernelSimpleComposer;

/**
 * For configure plugin in theme and block config after load theme
 */
add_action( 'after_setup_theme', function () {
	do_action( 'wpsc_before_init' );
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
	do_action( 'wpsc_after_init' );

} );

do_action( 'activated_plugin', function () {
	( new Model() )->save();
} );