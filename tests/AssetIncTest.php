<?php

// PHPUnit testing of GGG\AssetInc

use GGG\AssetInc\AssetInc;

class AssetIncTest extends \PHPUnit_Framework_TestCase
{

	public function testInsertJs()
    {
		$JSasset = AssetInc::init( 'js' );
		$actual = $JSasset->insert( 'jquery' );
		$expected = '<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>';
        $this->assertSame( $expected, $actual );
    }
	
	public function testInsertCss()
    {
		$CSSasset = AssetInc::init( 'css' );
		$actual = $CSSasset->insert( 'font-awesome' );
		$expected = '<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">';
        $this->assertSame( $expected, $actual );
    }
	
	public function testAdd_AssetJs()
    {
		$JSasset = AssetInc::init( 'js' );
		$JSasset->add_asset( 'test-js-asset', 'https://www.test-js-asset.com/test.js' );
		$actual = $JSasset->insert( 'test-js-asset' );
		$expected = 'https://www.test-js-asset.com/test.js';
        $this->assertSame( $expected, $actual );
    }
	
	public function testAdd_AssetCss()
    {
		$CSSasset = AssetInc::init( 'css' );
		$CSSasset->add_asset( 'test-css-asset', 'https://www.test-css-asset.com/test.css' );
		$actual = $CSSasset->insert( 'test-css-asset' );
		$expected = 'https://www.test-css-asset.com/test.css';
        $this->assertSame( $expected, $actual );
    }
	
}
