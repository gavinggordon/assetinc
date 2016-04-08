<?php

namespace GGG\AssetInc\Assets\Interfaces;

interface AssetInterface
{
	public function insert( $scriptname );
	public function add_asset( $scriptname, $cndurl );
}