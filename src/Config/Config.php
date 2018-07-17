<?php
/**
 * Created by PhpStorm.
 * User: sau
 * Date: 12.07.18
 * Time: 16:49
 */

namespace Sau\WP\WPSC\Config;

use stdClass;

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
		static::$model = new Model();
		$this->save();
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

	final private function save() {
		if ( isset( $_POST[ 'wpsc' ][ 'save' ] ) ) {
			foreach ( $_POST[ 'wpsc' ] as $key => $value ) {
				if ( property_exists( static::$model, $key ) ) {
					static::$model->$key = $value;
				}
			}
			self::$model->save();
		}
	}

	/**
	 * Get options
	 * @return stdClass
	 */
	public static function getConfigs() {
		$configs             = new stdClass();
		$configs->options    = static::$model->getVars();
		$configs->namespaces = static::$collector->getCollection();

		return $configs;
	}

}