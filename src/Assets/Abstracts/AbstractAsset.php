<?php

namespace GGG\AssetInc\Assets\Abstracts;

abstract class AbstractAsset
{
	
	public function insert( $asset )
	{
		$asset = strtolower( $asset );
		if( array_key_exists( $asset, $this->assets ) ) {
			return $this->assets[ $asset ];
		} else {
			return 'Asset ' . $asset . ' does not exist.';
		}
	}
	
	public function add_asset( $asset, $url )
	{
		$asset = strtolower( $asset );
		if(! array_key_exists( $asset, $this->assets ) ) {
			$this->assets[ $asset ] = $url;
			return $this;
		} else {
			return 'Asset ' . $asset . ' already exists.';
		}
	}
}