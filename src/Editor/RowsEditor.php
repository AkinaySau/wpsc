<?php
/**
 * Created by PhpStorm.
 * User: sau
 * Date: 18.07.18
 * Time: 10:40
 */

namespace Sau\WP\WPSC\Editor;


use Sau\WP\WPSC\Helpers\ConsoleHelper;
use Sau\WP\WPSC\Rows\Row;

class RowsEditor {
	protected $namespace;
	protected $path;
	protected $rows;


	public function __construct( string $namespace, string $path ) {
		$this->namespace = $namespace;
		$this->path      = $path;
		$this->getRows();
	}

	protected function addRow( $path_to_fields ) {

	}

	/**
	 * Collect all files in namespace
	 */
	protected function getRows() {
		$files = scandir( $this->path );
		$files = array_diff( $files, [ '.', '..' ] );
		$rows  = [];
		/**
		 * create array with all fields
		 */
		foreach ( $files as $file ) {
			$path_info = pathinfo( $this->path . DIRECTORY_SEPARATOR . $file );

			$ext = $path_info[ 'extension' ];
			if ( in_array( $ext, [ 'php', 'twig' ] ) ) {
				$rows[ $path_info[ 'filename' ] ][ $ext ] = $path_info;
			}
		}

		foreach ( $rows as &$row ) {
			$row = new Row($row);
		}


		ConsoleHelper::log( $rows);

	}

}