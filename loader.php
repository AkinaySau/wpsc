<?php
/**
 * Created by PhpStorm.
 * User: sau
 * Date: 12.07.18
 * Time: 16:31
 */


use Sau\WP\WPSC\KernelSimpleComposer;

global $kernel_wpsc;

#todo не могу получить эти константы в классе DEFINE, надо подумать
define( 'WPSC_PLUGIN_DIR_PATH', plugin_dir_path( __FILE__ ) );
define( 'WPSC_PLUGIN_DIR_URL', plugin_dir_url( __FILE__ ) );

$kernel_wpsc = new KernelSimpleComposer();