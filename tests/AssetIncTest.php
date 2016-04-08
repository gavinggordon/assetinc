<?php

use GGG\AssetInc\AssetInc;

class AssetIncTest extends \PHPUnit_Framework_TestCase
{

	public function testInsertJs()
    {
		$JSasset = new AssetInc( 'js' );
		$expected = '<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>';
        $this->assertSame( $expected, $JSasset->insert( 'jquery' ) );
    }
	
	public function testInsertCss()
    {
		$CSSasset = new AssetInc( 'css' );
		$expected = '<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">';
        $this->assertSame( $expected, $CSSasset->insert( 'font-awesome' ) );
    }
	
	public function testAdd_AssetJs()
    {
		$JSasset = new AssetInc( 'js' );
		$JSasset->add_asset( 'test-js-asset', 'https://www.test-js-asset.com/test.js' );
		$expected = 'https://www.test-js-asset.com/test.js';
        $this->assertSame( $expected, $JSasset->insert( 'test-js-asset' ) );
    }
	
	public function testAdd_AssetCss()
    {
		$CSSasset = new AssetInc( 'css' );
		$CSSasset->add_asset( 'test-css-asset', 'https://www.test-css-asset.com/test.css' );
		$expected = 'https://www.test-css-asset.com/test.css';
        $this->assertSame( $expected, $CSSasset->insert( 'test-css-asset' ) );
    }
	
}
