<?php
/**
 * Created by PhpStorm.
 * User: sau
 * Date: 12.07.18
 * Time: 16:53
 */

namespace Sau\WP\WPSC\Config;

use Sau\WP\WPSC\DEFINES;
use Sau\WP\WPSC\Fields\CheckboxListField;
use Sau\WP\WPSC\Helpers\PostHelper;

/**
 * For load and save options
 * @package Sau\WP\WPSC\Config
 */
class Model {
	/**
	 * List post types where using editor
	 * @var array
	 * @since 1.0
	 */
	public $post_types = [ 'page' ];

	/**
	 * Model constructor.
	 *
	 * @since 1.0
	 * @return void
	 */
	public function __construct() {
		$this->getVars();
	}

	/**
	 * Get options. If options changed this method get value from db table.
	 *
	 * @since 1.0
	 * @return Model
	 */
	public function getVars(): Model {
		$vars = get_object_vars( $this );

		foreach ( $vars as $name => $var ) {
			$this->$name = get_option( static::getOptionName( $name ), $var );
		}

		return $this;
	}

	/**
	 * Save current data in model and reload options
	 *
	 * @since 1.0
	 * @return array
	 */
	public function save(): array {
		$vars  = get_object_vars( $this );
		$error = [];
		foreach ( $vars as $name => $var ) {
			if ( ! update_option( static::getOptionName( $name ), $var, false ) ) {
				$error[] = $name;
			}
		}
		$this->getVars();

		return $error;
	}

	/**
	 * Return option name after add prefix
	 *
	 * @param string $property
	 *
	 * @since 1.0
	 * @return string
	 */
	public static function getOptionName( string $property ): string {
		return DEFINES::OPTION_PREFIX . $property;
	}

	public function form() {
		$form = [];
		foreach ( $this->getVars() as $key => $vars ) {
			switch ( $key ):
				case 'post_types':

					$field  = ( new CheckboxListField( $key ) )->setValue( $vars )
					                                                  ->setLabel( __( 'Using for post type', DEFINES::TRANSLATE_DOMAIN ) )
					                                                  ->setList( PostHelper::getPostTypes() );
					$form[] = $field->getVueJson();
					break;
				default:

					break;
			endswitch;

		}

		return $form;
	}

	public function getAlerts() {
		
	}

}