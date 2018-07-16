<?php
/**
 * Created by PhpStorm.
 * User: sau
 * Date: 16.07.18
 * Time: 16:04
 */

namespace Sau\WP\WPSC\Fields;


class CheckboxListField extends Field {
	protected $type = 'CheckboxListField';
	protected $list = [];

	/**
	 * @param array $list
	 *
	 * @return CheckboxListField
	 */
	public function setList( array $list ): CheckboxListField {
		$this->list = $list;

		return $this;
	}
}