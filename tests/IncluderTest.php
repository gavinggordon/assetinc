<?php

use GGG\Includer\Includer;

class IncluderTest extends \PHPUnit_Framework_TestCase
{

	public function testInsertJs()
    {
		$JSincluder = new Includer( 'js' );
		$expected = '<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>';
        $this->assertSame( $expected, $JSincluder->insert( 'jquery' ) );
    }
	
	public function testInsertCss()
    {
		$CSSincluder = new Includer( 'css' );
		$expected = '<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">';
        $this->assertSame( $expected, $CSSincluder->insert( 'font-awesome' ) );
    }
	
	public function testAdd_AssetJs()
    {
		$JSincluder = new Includer( 'js' );
		$JSincluder->add_asset( 'test-js-asset', 'https://www.test-js-asset.com/test.js' );
		$expected = 'https://www.test-js-asset.com/test.js';
        $this->assertSame( $expected, $JSincluder->insert( 'test-js-asset' ) );
    }
	
	public function testAdd_AssetCss()
    {
		$CSSincluder = new Includer( 'css' );
		$CSSincluder->add_asset( 'test-css-asset', 'https://www.test-css-asset.com/test.css' );
		$expected = 'https://www.test-css-asset.com/test.css';
        $this->assertSame( $expected, $CSSincluder->insert( 'test-css-asset' ) );
    }
	
}
