<?php
/**
 * Created by PhpStorm.
 * User: sau
 * Date: 12.07.18
 * Time: 16:48
 */

namespace Sau\WP\WPSC\Config;


use Sau\WP\WPSC\DEFINES;

class AdminMenu {
	/**
	 * AdminMenu constructor.
	 * Create menu item for config page
	 *
	 * @param AdminPage $page
	 *
	 * @version 1.0
	 * @since   1.0
	 */
	public function __construct( AdminPage $page ) {
		$page_title = __( 'Simple Composer', DEFINES::TRANSLATE_DOMAIN );
		$menu_title = __( 'Simple Composer', DEFINES::TRANSLATE_DOMAIN );
		$capability = DEFINES::ADMIN_PAGE_CAPABILITY;
		$menu_slug  = 'wpsc';
		add_action( 'admin_menu', function () use ( $page_title, $menu_title, $capability, $menu_slug, $page ) {
			add_options_page( $page_title, $menu_title, $capability, $menu_slug, [ $page, 'render' ] );
		} );
	}
}