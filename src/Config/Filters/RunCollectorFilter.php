<?php
/**
 * Created by PhpStorm.
 * User: sau
 * Date: 16.07.18
 * Time: 9:40
 */

namespace Sau\WP\WPSC\Config\Filters;


use Sau\WP\WPSC\DEFINES;

/**
 * Collecting namespace
 *
 * @package Sau\WP\WPSC\Config\Filters
 */
class RunCollectorFilter {
	/**
	 * @var array
	 */
	private $collection;

	public function __construct() {
		$this->add( 'theme_particles', get_stylesheet_directory() . DS . 'particles' );
	}

	/**
	 * Add new namespace
	 *
	 * @param string $namespace Namespace for particles
	 * @param string $path      Path for fields
	 * @param bool   $rewrite   If set as false then return `false` if namespace is registered
	 *
	 * @return bool
	 */
	public function add( $namespace, $path, $rewrite = true ) {
		if ( ! $rewrite && array_key_exists( $namespace, $this->collection ) ) {
			return false;
		}
		$this->collection[ $namespace ] = [
			'namespace' => $namespace,
			'path'      => $path
		];

		return true;
	}

	/**
	 * Get all namespaces
	 * @return array
	 */
	public function get() {
		/**
		 * MUST HAVE FOR INCLUDE PLUGIN NAMESPACE
		 */
		$this->add( 'wpsc', DEFINES::PLUGIN_DIR_PATH . 'particles' );

		$collection = $this->collection;

		return $collection;

	}
}