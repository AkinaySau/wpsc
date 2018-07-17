<?php
/**
 * Created by PhpStorm.
 * User: sau
 * Date: 12.07.18
 * Time: 17:22
 */

namespace Sau\WP\WPSC;


final class DEFINES {
	/**
	 * Name this plugin
	 */
	const NAME_PLUGIN = 'wpsc';

	/**
	 * Name Config page
	 */
	const NAME_PLUGIN_CONFIG_PAGE = self::NAME_PLUGIN;

	/**
	 * Option prefix for save in db table
	 */
	const OPTION_PREFIX = self::NAME_PLUGIN . '_';

	/**
	 * Translate code for __(),_e(), ...
	 */
	const TRANSLATE_DOMAIN = 'sau_wpsc';

	/**
	 * Work script-name for admin panel
	 */
	const ADMIN_SCRIPT_HANDLE = self::NAME_PLUGIN;
	/**
	 * Work stylesheet-name for admin panel
	 */
	const ADMIN_STYLESHEET_HANDLE = self::NAME_PLUGIN;

	/**
	 * Work script-name for admin panel
	 */
	const ADMIN_SCRIPT_HANDLE_EDITOR = self::NAME_PLUGIN.'_editor';
	/**
	 * Work stylesheet-name for admin panel
	 */
	const ADMIN_STYLESHEET_HANDLE_EDITOR = self::NAME_PLUGIN.'_editor';

	/**
	 * Abs path to this plugin
	 */
	const PLUGIN_DIR_PATH = WPSC_PLUGIN_DIR_PATH;

	/**
	 * Full url to this plugin
	 */
	const PLUGIN_DIR_URL = WPSC_PLUGIN_DIR_URL;

	/*Config defines*********************************/
	/**
	 * Rights for change configs
	 */
	const ADMIN_PAGE_CAPABILITY = 'manage_options';


}