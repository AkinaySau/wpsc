<?php
/**
 * Created by PhpStorm.
 * User: sau
 * Date: 12.07.18
 * Time: 16:33
 */

namespace Sau\WP\WPSC;

use Sau\WP\WPSC\Config\Config;
use Sau\WP\WPSC\Editor\Editor;

class KernelSimpleComposer {
	/**
	 * @var Config
	 */
	private $config;
	private $editor;

	public function __construct() {
		$this->config = new Config();
		$this->editor = new Editor();
	}


	/**
	 * @return Config
	 */
	public function getConfig(): Config {
		return $this->config;
	}

}