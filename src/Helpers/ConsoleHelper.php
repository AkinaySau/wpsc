<?php
/**
 * Created by PhpStorm.
 * User: sau
 * Date: 18.07.18
 * Time: 10:23
 */

namespace Sau\WP\WPSC\Helpers;


class ConsoleHelper {
	public static function log( $data ) {
		switch ( $type = gettype( $data ) ):
			case "boolean":
				$data = "'boolean: " . ( $data === true ? 'true' : 'false' ) . "'";
				break;
			case "integer":
			case "double":
			case "string":
			case "resource":
				$data = "'$type: " . $data . "'";
				break;
			case "array":
			case "unknown type":
			case "object":
				$data = json_encode( $data );
				break;
			case "NULL":
				$data = null;
				break;
		endswitch;

		echo "<script type='text/javascript'>console.log($data)</script>";
	}
}