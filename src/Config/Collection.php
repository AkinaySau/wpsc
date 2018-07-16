<?php
/**
 * Created by PhpStorm.
 * User: sau
 * Date: 16.07.18
 * Time: 9:22
 */

namespace Sau\WP\WPSC\Config;


use Sau\WP\WPSC\Config\Filters\RunCollectorFilter;

class Collection {
	protected $collection = [];

	public function __construct() {
		$this->run();
	}

	protected function run() {
		$collection = new RunCollectorFilter();
		/**
		 * Action after create RunCollectorFilter.
		 */
		do_action( 'wpsc_config_run_collector', $collection );
		$tmp_collection = apply_filters( 'wpsc_config_run_collector', $collection );
		if ( $tmp_collection instanceof RunCollectorFilter ) {
			$this->collection = $tmp_collection->get();
		}
	}

	/**
	 * @return array
	 */
	public function getCollection(): array {
		return $this->collection;
	}
}