<?php

namespace GGG\AssetInc;

class AssetInc
{
	
	public static function init( $type )
	{
		$typeclass = '\\GGG\\AssetInc\\Assets\\' . ucfirst( $type );
		if( class_exists( $typeclass ) ) {
			return new $typeclass;
		} else {
			trigger_error( 'Class [' . $typeclass . '] does not exists.' );
		}
	}
	
}