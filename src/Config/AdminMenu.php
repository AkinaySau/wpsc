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
	 * @var false|string
	 */
	private $page;
	private $page_title;
	private $menu_title;
	private $capability;
	private $menu_slug;

	/**
	 * AdminMenu constructor.
	 * Create menu item for Config page
	 *
	 * @param AdminPage $page
	 *
	 * @version 1.0
	 * @since   1.0
	 */
	public function __construct( AdminPage $page ) {
		$this->page       = $page;
		$this->page_title = __( 'Simple Composer', DEFINES::TRANSLATE_DOMAIN );
		$this->menu_title = __( 'Simple Composer', DEFINES::TRANSLATE_DOMAIN );
		$this->capability = DEFINES::ADMIN_PAGE_CAPABILITY;
		$this->menu_slug  = DEFINES::NAME_PLUGIN_CONFIG_PAGE;
		add_action( 'admin_menu', [ $this, 'addSubmenuPage' ] );
	}

	public function addSubmenuPage() {
		$this->page = add_submenu_page( 'options-general.php', $this->page_title, $this->menu_title, $this->capability, $this->menu_slug, [
			$this->page,
			'render'
		] );
	}

}