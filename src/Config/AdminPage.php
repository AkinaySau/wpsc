<?php
/**
 * Created by PhpStorm.
 * User: sau
 * Date: 12.07.18
 * Time: 16:48
 */

namespace Sau\WP\WPSC\Config;


class AdminPage {
	/**
	 * @var Model
	 */
	private $model;

	public function __construct( Model $model ) {
		$this->model = $model;
	}

	public function render() {
		//		$data = get_class_vars( $this->model );

		echo "<div class='wrap'><div id='wpsc_wrapper'></div></div>";
	}
}