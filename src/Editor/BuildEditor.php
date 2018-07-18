<?php
/**
 * Created by PhpStorm.
 * User: sau
 * Date: 17.07.18
 * Time: 10:18
 */

namespace Sau\WP\WPSC\Editor;


class BuildEditor {
	/**
	 * @var array
	 */
	protected $fields     = [];
	protected $namespaces = [];

	public function __construct( $namespaces ) {
		$this->scanNamespaces( $namespaces );
	}

	/**
	 * collect fields in namespaces
	 */
	protected function scanNamespaces( array $namespaces ) {
		foreach ( $namespaces as $namespace ) {

			$path      = $namespace[ 'path' ];
			$namespace = $namespace[ 'namespace' ];
			if ( is_dir( $path ) ) {
				$this->namespaces[ $namespace ] = new RowsEditor( $namespace, $path );
			}
		}
	}
}