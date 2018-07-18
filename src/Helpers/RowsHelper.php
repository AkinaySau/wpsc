<?php
/**
 * Created by PhpStorm.
 * User: sau
 * Date: 18.07.18
 * Time: 14:39
 */

namespace Sau\WP\WPSC\Helpers;


abstract class RowsHelper {
	/**
	 * @param string $path Full path to rows
	 *
	 * @return array
	 */
	public static function scanPath( string $path ) {
		$files = scandir( $path );
		$files = array_diff( $files, [ '.', '..' ] );
		$rows  = [];
		/**
		 * create array with all fields
		 */
		foreach ( $files as $file ) {
			$path_info = pathinfo( $path . DIRECTORY_SEPARATOR . $file );

			$ext = $path_info[ 'extension' ];
			if ( in_array( $ext, [ 'php', 'twig' ] ) ) {
				$rows[ $path_info[ 'filename' ] ][ $ext ] = $path_info;
			}
		}

		return $rows;
	}

}