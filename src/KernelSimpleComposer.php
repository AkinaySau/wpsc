<?php
/**
 * Created by PhpStorm.
 * User: sau
 * Date: 12.07.18
 * Time: 16:33
 */

namespace Sau\WP\WPSC;

use Sau\WP\WPSC\Config\Config;

class KernelSimpleComposer {
	/**
	 * @var Config
	 */
	private $config;

	public function __construct() {
		$this->config = new Config();
	}


	/**
	 * @return Config
	 */
	public function getConfig(): Config {
		return $this->config;
	}

}