<?php

namespace GGG\Includer\Assets;

use \GGG\Includer\Assets\Abstracts\AbstractAsset;
use \GGG\Includer\Assets\Interfaces\AssetInterface;
use \GGG\Includer\Assets\Traits\ScriptVendors;

class Js extends AbstractAsset implements AssetInterface
{

	use ScriptVendors;
	
	public function __construct()
	{
		return $this;
	}
	
}