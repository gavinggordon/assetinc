<?php

namespace GGG\AssetInc\Assets\Interfaces;

abstract class AssetInterface
{
	public function insert( $scriptname );
	public function add_asset( $scriptname, $cndurl );
}