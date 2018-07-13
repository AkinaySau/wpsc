<?php
/**
 * Created by PhpStorm.
 * User: sau
 * Date: 12.07.18
 * Time: 16:48
 */

namespace Sau\WP\WPSC\Config;


use Sau\WP\WPSC\DEFINES;

class AdminPage {
	/**
	 * @var Model
	 */
	private $model;

	public function __construct( Model $model ) {
		$this->model = $model;
		$this->includeScript();
	}

	public function render() {
		$options = json_encode( $this->model );
		echo "<div class='wrap'><div id='wpsc_vue_app' data-options'{$options}'></div></div>";
	}

	protected function includeScript() {
		add_action( 'admin_enqueue_scripts', function () {
			if ( $_GET[ 'page' ] === DEFINES::NAME_PLUGIN_CONFIG_PAGE ) {
				wp_enqueue_script( DEFINES::ADMIN_SCRIPT_HANDLE, DEFINES::PLUGIN_DIR_URL . "assets/js/admin_config.min.js" );
				wp_enqueue_style( DEFINES::ADMIN_STYLESHEET_HANDLE, DEFINES::PLUGIN_DIR_URL . 'assets/css/admin_config.css' );
			}
		} );
	}

}