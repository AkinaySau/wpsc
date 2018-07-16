# WP Simple Composer


## Particle namespaces
add new namespaces for search particles
```php
// as action
add_action( 'wpsc_config_run_collector', function ( $collection ) {
	$collection->add( 'namespaces', 'path' );

	return $collection;
} );
// or as filter
add_filter( 'wpsc_config_run_collector', function ( $collection ) {
	$collection->add( 'namespaces', 'path' );

	return $collection;
} );
```