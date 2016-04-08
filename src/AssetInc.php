<?php

namespace GGG\AssetInc;

class AssetInc
{
	
	public function __construct( $type )
	{
		$typeclass = trim( '\\GGG\\AssetInc\\Assets\\ ' ) . ucfirst( $type );
		if( class_exists( $typeclass ) ) {
			return new $typeclass;
		} else {
			trigger_error( 'Class [' . $typeclass . '] does not exists.' );
		}
	}
	
}