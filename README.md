# AssetInc

[![Build Status](https://travis-ci.org/gavinggordon/assetinc.svg?branch=v1.0.1)](https://travis-ci.org/gavinggordon/assetinc)

This class (GGG\AssetInc\AssetInc) provides a simple and quick way to include/add JS or CSS assets to an HTML document's head and/or body.

## Installation

	composer require gavinggordon/assetinc

## Examples

#### Instantiation:

	include_once( __DIR__ . '/vendor/autoload.php' );
	
	$JSasset = \GGG\AssetInc\AssetInc::init( 'js' );
	
	$CSSasset = \GGG\AssetInc\AssetInc::init( 'css' );

#### JS:

    $JSasset->insert( 'jquery' );
    // Result: <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	
	$JSasset->add_asset( ASSET_NAME, ASSET_URL );
	$JSasset->insert( ASSET_NAME );
	// Result: ASSET_URL
	
#### CSS:

    $CSSasset->insert( 'font-awesome' );
    // Result: <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
	
	$CSSasset->add_asset( ASSET_NAME, ASSET_URL );
	$CSSasset->insert( ASSET_NAME );
	// Result: ASSET_URL


[View this class package](http://www.phpclasses.org/package/9698.html) on [PHPClasses.org](http://www.phpclasses.org).
