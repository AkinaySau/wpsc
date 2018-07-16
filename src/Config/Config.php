<?php
/**
 * Created by PhpStorm.
 * User: sau
 * Date: 12.07.18
 * Time: 16:49
 */

namespace Sau\WP\WPSC\Config;

class Config {
	/**
	 * @var Model
	 */
	private static $model;
	/**
	 * @var Collection
	 */
	private static $collector;

	public function __construct() {
		static::$model     = new Model();
		static::$collector = new Collection();
		$admin_page        = new AdminPage( static::$model );
		$admin_menu        = new AdminMenu( $admin_page );
	}

	/**
	 * @return Collection
	 */
	public static function getCollector(): Collection {
		return self::$collector;
	}

	/**
	 * @return Model
	 */
	//	public static function getModel(): Model {
	//		return self::$model;
	//	}

}