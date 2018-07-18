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
	protected $rows       = [];
	protected $namespaces = [];

	public function __construct( $namespaces ) {
		$this->scanNamespaces( $namespaces );
		add_action( 'wpsc_before_include_editor_js', [ $this, 'script' ] );
	}

	/**
	 * collect fields in namespaces
	 */
	protected function scanNamespaces( array $namespaces ) {
		foreach ( $namespaces as $namespace ) {

			$path      = $namespace[ 'path' ];
			$namespace = $namespace[ 'namespace' ];
			if ( is_dir( $path ) ) {
				$this->namespaces[ $namespace ] = ( new RowsEditor( $namespace, $path ) )->getVueJson();
			}
		}

	}

	public function script() {
		$data = json_encode( $this->namespaces );
		echo "<script type='text/javascript'>window.wpsc_particles=$data</script>";
	}

}