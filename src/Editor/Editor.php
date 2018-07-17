<?php
/**
 * Created by PhpStorm.
 * User: sau
 * Date: 17.07.18
 * Time: 10:15
 */

namespace Sau\WP\WPSC\Editor;


use Sau\WP\WPSC\Config\Config;
use Sau\WP\WPSC\DEFINES;
use WP_Post;

class Editor {
	/**
	 * @var array
	 */
	private $config;

	public function __construct() {
		/**
		 * Run only type
		 */
		$this->config = Config::getConfigs();

		add_action( 'edit_form_after_title', [ $this, 'scripts' ] );
	}

	/**
	 * @param WP_Post $post
	 */
	public function scripts( $post ) {
		if ( in_array( $post->post_type, $this->config->options->post_types ) ) {
			$js  = DEFINES::PLUGIN_DIR_URL . "assets/js/admin_editor.min.js";
			$css = DEFINES::PLUGIN_DIR_URL . 'assets/css/admin_editor.css';

			do_action( 'wpsc_before_include_editor_css' );
			echo "<link rel='stylesheet' type='text/css' href='$css'/>";
			do_action( 'wpsc_after_include_editor_css' );
			do_action( 'wpsc_before_include_editor_js' );
			echo "<script type='text/javascript' src='$js'></script>";
			do_action( 'wpsc_after_include_editor_js' );

		}
	}

}