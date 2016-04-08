<?php

namespace GGG\Includer\Assets;

use \GGG\Includer\Assets\Abstracts\AbstractAsset;
use \GGG\Includer\Assets\Interfaces\AssetInterface;
use \GGG\Includer\Assets\Traits\StyleVendors;

class Css extends AbstractAsset implements AssetInterface
{

	use StyleVendors;
	
	public function __construct()
	{
		return $this;
	}
	
}