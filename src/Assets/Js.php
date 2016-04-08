<?php

namespace GGG\AssetInc\Assets;

use \GGG\AssetInc\Assets\Abstracts\AbstractAsset;
use \GGG\AssetInc\Assets\Interfaces\AssetInterface;
use \GGG\AssetInc\Assets\Traits\ScriptVendors;

class Js extends AbstractAsset implements AssetInterface
{

	use ScriptVendors;
	
	public function __construct()
	{
		return $this;
	}
	
}