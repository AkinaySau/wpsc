<?php
/**
 * Created by PhpStorm.
 * User: sau
 * Date: 17.07.18
 * Time: 11:18
 */

namespace Sau\WP\WPSC\Editor;


class Model {
	/**
	 * @var string
	 */
	protected $content = '';
	/**
	 * name field
	 */
	const NAME_FIELD = 'content';

	public function __construct() {
	}

	/**
	 * @return string
	 */
	public function getContent(): string {
		return $this->content;
	}

	/**
	 * @param string $content
	 */
	public function setContent( string $content ) {
		$this->content = $content;
	}

}