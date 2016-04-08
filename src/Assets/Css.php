<?php

namespace GGG\AssetInc\Assets;

use \GGG\AssetInc\Assets\Abstracts\AbstractAsset;
use \GGG\AssetInc\Assets\Interfaces\AssetInterface;
use \GGG\AssetInc\Assets\Traits\StyleVendors;

class Css extends AbstractAsset implements AssetInterface
{

	use StyleVendors;
	
	public function __construct()
	{
		return $this;
	}
	
}