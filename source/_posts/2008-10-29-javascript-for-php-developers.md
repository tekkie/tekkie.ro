---
title: JavaScript for PHP developers
author: Georgiana
excerpt: "If you're a PHP developer and you find it difficult to get used to all the insides of JavaScript, you might need PHP.JS, developed by Kevin van Zonneveld."
layout: post
permalink: blog/resources/javascript-for-php-developers/
ratings_users:
  - 0
ratings_score:
  - 0
ratings_average:
  - 0
categories:
  - Resources
tags:
  - JavaScript
  - PHP
---
If you&#8217;re a PHP developer and you find it difficult to get used to all the insides of JavaScript, I think you need to take a look at [PHP.JS][1]. It&#8217;s a brilliant tool initially developed by [Kevin van Zonneveld][2], and which aims to port most of the usual PHP functions into equivalent JavaScript ones.

There are two ways of using this excellent codebase:

  * grab all the [available PHP.JS functions][3] and use them as you need them
  * take each function you really need and put it into your JS codebase for the project

The advantage of the second method is that you don&#8217;t have code you don&#8217;t need included all over the place, but it also means you will search each time the codebase to discover the code you need. Meanwhile, the first solution seems appropriate for the ones in a hurry, you just try to use one function like you&#8217;re accustomed in PHP and it&#8217;s there already included, you&#8217;re developing fast and safe, with just a small performance issue you can always address later.

Let&#8217;s say you&#8217;ve using the [long2ip][4] and [ip2long][5] PHP functions for storing IPs as numbers, and have a strong preference for using them for performance reasons, as all your IPs are stored as numbers in the database. What if you need similar functionality in JavaScript? Well, just [take the code][6] [you need][7] and use it! It&#8217;s that simple <img src="http://i2.wp.com/www.tekkie.ro/wp-includes/images/smilies/simple-smile.png?w=700" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" data-recalc-dims="1" />

 [1]: http://phpjs.org/
 [2]: http://kevin.vanzonneveld.net/about/
 [3]: http://kevin.vanzonneveld.net/code/php_equivalents/php.js "one file containing all the available PHP.Js functions"
 [4]: http://php.net/long2ip "PHP long2ip function manual page"
 [5]: http://www.php.net/ip2long "PHP ip2long function manual page"
 [6]: http://phpjs.org/functions/long2ip:48e4b52c-c26c-4ba7-84f0-2d6486a786ee "PHP.JS long2ip function"
 [7]: http://phpjs.org/functions/ip2long:48e4b52b-3860-4f6c-830b-2d6486a786ee "PHP.JS ip2long function"
