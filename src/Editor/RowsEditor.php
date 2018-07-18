<?php
/**
 * Created by PhpStorm.
 * User: sau
 * Date: 18.07.18
 * Time: 10:40
 */

namespace Sau\WP\WPSC\Editor;


use Sau\WP\WPSC\Helpers\RowsHelper;

class RowsEditor {
	protected $namespace;
	protected $path;
	protected $rows;


	public function __construct( string $namespace, string $path ) {
		$this->namespace = $namespace;
		$this->path      = $path;
		$this->getRows();
	}

	/**
	 * Collect all files in namespace
	 */
	protected function getRows() {
		$rows = RowsHelper::scanPath( $this->path );
		foreach ( $rows as $key => &$row ) {
			if ( isset( $row[ 'php' ] ) ) {
				$path_to_fields = $row[ 'php' ][ 'dirname' ] . DIRECTORY_SEPARATOR . $row[ 'php' ][ 'basename' ];
				$row            = include $path_to_fields;
				if ( ! $row instanceof RowEditor ) {
					unset( $rows[ $key ] );
				}
				$row = $row->getFields();
			} else {
				unset( $rows[ $key ] );
			}
		}
		$this->rows = $rows;
	}

	/**
	 * @return string|array
	 */
	public function getVueJson( $json = false ) {
		$data = [
			'namespace' => $this->namespace,
			'rows'      => $this->rows,

		];

		return $json ? json_encode( $data ) : $data;
	}

}