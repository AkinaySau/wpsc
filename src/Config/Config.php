<?php
/**
 * Created by PhpStorm.
 * User: sau
 * Date: 12.07.18
 * Time: 16:49
 */

namespace Sau\WP\WPSC\Config;

class Config {
	protected static $model;

	public function __construct() {
		static::$model = new Model();
		$admin_page    = new AdminPage(static::$model);
		$admin_menu    = new AdminMenu($admin_page);
	}
}