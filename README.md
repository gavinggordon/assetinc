# Includer

[![Build Status](https://travis-ci.org/gavinggordon/includer.svg?branch=master)](https://travis-ci.org/gavinggordon/includer)

This class (GGG\Includer\Includer) provides a simple and quick way to include/add JS or CSS assets to an HTML document.

## Installation

	composer require gavinggordon/includer

## Examples

#### Instantiation:

	include_once( __DIR__ . '/vendor/autoload.php' );
	
	$JSincluder = new \GGG\Includer\Includer( 'js' );
	
	$CSSincluder = new \GGG\Includer\Includer( 'css' );

#### JS:

    $JSincluder->insert( 'jquery' );
    // Result: <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	
	$JSincluder->add_asset( ASSET_NAME, ASSET_URL );
	$JSincluder->insert( ASSET_NAME );
	// Result: ASSET_URL
	
#### CSS:

    $CSSincluder->insert( 'font-awesome' );
    // Result: <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
	
	$CSSincluder->add_asset( ASSET_NAME, ASSET_URL );
	$CSSincluder->insert( ASSET_NAME );
	// Result: ASSET_URL


[View this class package](http://www.phpclasses.org/package/9698.html) on [PHPClasses.org](http://www.phpclasses.org).
