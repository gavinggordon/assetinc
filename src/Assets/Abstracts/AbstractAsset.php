<?php

namespace GGG\Includer\Assets\Abstracts;

abstract class AbstractAsset
{
	
	protected $assets;
	
	public function insert( $asset )
	{
		$asset = strtolower( $asset );
		if( array_key_exists( $asset, $this->assets ) ) {
			echo $this->assets[ $asset ];
		} else {
			echo 'Asset ' . $asset . ' does not exist.';
		}
		return $this;
	}
	
	public function add_asset( $asset, $url )
	{
		$asset = strtolower( $asset );
		if(! array_key_exists( $asset, $this->assets ) ) {
			$this->assets[ $asset ] = $url;
		} else {
			echo 'Asset ' . $asset . ' already exists.';
		}
		return $this;
	}
}