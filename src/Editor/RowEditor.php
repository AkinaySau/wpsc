<?php
/**
 * Created by PhpStorm.
 * User: sau
 * Date: 18.07.18
 * Time: 11:01
 */

namespace Sau\WP\WPSC\Editor;


use Sau\WP\WPSC\Fields\Field;

class RowEditor {
	protected $json;
	protected $template;
	public function __construct( $fields ) {

		$tmp=[];
		foreach ( $fields as $field ) {
			if ( ! $field instanceof Field ) {
				continue;
			}

		}
	}
}