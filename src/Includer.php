<?php

namespace GGG\Includer;

class Includer
{
	
	public function __construct( $type )
	{
		$typeclass = trim( '\\GGG\\Includer\\Assets\\ ' ) . ucfirst( $type );
		if( class_exists( $typeclass ) ) {
			return new $typeclass;
		} else {
			trigger_error( 'Class [' . $typeclass . '] does not exists.' );
		}
	}
	
}