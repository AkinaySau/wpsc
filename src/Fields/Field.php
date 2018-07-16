<?php
/**
 * Created by PhpStorm.
 * User: sau
 * Date: 16.07.18
 * Time: 15:58
 */

namespace Sau\WP\WPSC\Fields;

/**
 * TODO: add AOP
 */
abstract class Field {
	protected $name;
	protected $value = '';
	protected $label = '';
	protected $type  = 'text';
	protected $help  = '';

	public function __construct( string $name ) {
		$this->name = $name;
	}

	/**
	 * Generate valid json for vue field
	 *
	 * @param bool $json True return json else array
	 *
	 * @return string|array
	 */
	public function getVueJson( $json = false ) {
		if ( $json ) {
			return json_encode( get_object_vars( $this ) ) ?: '{}';
		} else {
			return get_object_vars( $this );
		}
	}

	/**
	 * @param string $help
	 *
	 * @return $this
	 */
	public function setHelp( string $help ) {
		$this->help = $help;

		return $this;
	}

	/**
	 * @param string $label
	 *
	 * @return $this
	 */
	public function setLabel( string $label ) {
		$this->label = $label;

		return $this;
	}

	/**
	 * @param string $value
	 *
	 * @return $this
	 */
	public function setValue( $value ) {
		$this->value = $value;

		return $this;
	}
}