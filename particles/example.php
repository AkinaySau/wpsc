<?php


use Sau\WP\WPSC\Editor\RowEditor;
use Sau\WP\WPSC\Fields\TextField;

return new RowEditor( [
	TextField::make( 'test_var' )
	         ->setLabel( 'gsdfg' )
	         ->setHelp( 'help text' )
] );