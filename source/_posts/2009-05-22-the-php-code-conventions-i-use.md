---
title: The PHP code conventions I use
author: Georgiana
layout: post
permalink: blog/resources/the-php-code-conventions-i-use/
ratings_users:
  - 0
ratings_score:
  - 0
ratings_average:
  - 0
categories:
  - Resources
tags:
  - code conventions
  - PHP
---

```php

<?php
// Did you notice the full-style opening PHP tags?

/**************************************************************
 * Variable Naming conventions
 *************************************************************
 * - Use data type as prefix inside the name
 *          Eg: $sName instead of just $name
 * - Try to use as descriptive names as possible
 *         Eg: $arProductList instead of just $arList
 **************************************************************/

/**************************************************************
 * Basic Datatypes conventions
 **************************************************************/

// Strings
$sName = "tekkie.ro";

// Integers
$iYear = 2004;

// Floats
$fAccountValue = 12.34;

// Booleans
$bCheck = true;

// Objects
$oProduct = new Product( $iProductId );

// Arrays
$aProperties = array ('1', '2', '3');

/**************************************************************
* Spacing convention
**************************************************************/

$iSum = $iNumber1 + $iNumber2;
$sSum = $iNumber1 . $iNumber2; // space dot space before and after a variable
$sSum = ' Here we add a number ' . $iNumber1; // quote space dot space after a string
$sSum = $iNumber2 . ' Here we add a number '; // space dot space quote before a string

/*
* Function definition convention
*
* A comment describing the function should precede its declaration.
* Begin with a slash followed by two stars.
* Give a one-line function synopsis, then a brief explanation.
*/

/**
 * bool hasPrices (obj oProduct [, bool bAlwaysTrue])
 *
 * @param Product the product we chack for prices
 * @param boolean
 * @return true if the Product has prices, false otherwise
*/

function hasPrices( $oProduct, $bAlwaysTrue = false ) {
    if ($bAlwaysTrue) return true;
    foreach ($oProduct->aProperties as $sProperty ) {


if( &#8216;price&#8217; === $sProperty ) { // use === as often as possible; put the string first for speed reasons  
return( true );  
} // .. if  
}  
return( false );  
} // END func hasPrices()

/*  
* echo tag  
*/

define (CR, &#8220;\n&#8221;);

echo

CR, &#8216;Line1  
&#8216;,

CR, &#8216;Line2  
&#8216;,

CR, &#8216;Line3  
&#8216;  
;

/\***\***\***\***\***\***\***\***\***\***\***\***\***\***\***\***\***\***\***\*****  
* Spacing convention  
\***\***\***\***\***\***\***\***\***\***\***\***\***\***\***\***\***\***\***\*****/

// Code like this:

$sText = &#8216;Time flies like an arrow.&#8217;;  
$sText .= &#8216; Fruit flies like bananas.&#8217;;

// Should be done in one statement instead of two:

$sText =  
&#8216;Time flies like an arrow.&#8217; .  
&#8216; Fruit flies like bananas.&#8217;  
;

?>  
```
