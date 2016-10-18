---
title: PHP in the mobile ecosystem
author: Georgiana
layout: post
permalink: mobile-development/php-in-the-mobile-ecosystem/
ratings_users:
  - 0
ratings_score:
  - 0
ratings_average:
  - 0
categories:
  - Mobile development
tags:
  - browser
  - mobile
  - PHP
---
## Device detection

Mostly from the user agent.

&#8212;> http://detectmobilebrowsers.mobi/

&#8212;>>> ugly code, good docs

&#8212;> http://www.deviceatlas.com/

&#8212;>>> $99 / year for production

&#8212;> http://wurfl.sourceforge.net/

&#8212;>>> open-source list of mobile devices for easy detection

Don&#8217;t redirect to homepage, it&#8217;s not what the user wants.

Beware: the screen sizes vary heavily, don&#8217;t make assumptions about this.

Small demo code to show how easy it is in ZF-enabled apps to use a different layout, css and set of views.

Since ZF 1.11 one can use Zend\_Http\_UserAgent for easier browser detection + more info device-specific.

## UI Considerations

&#8211; hover magic is unexpected for user

&#8211; HTML5, yay!

## Other

jQTouch

## API improvements & Security

&#8211; use versioning in the URL of the API to separate users who did not upgrade their apps

&#8211; use signed URLs ?x=1&signature=hash( secret, time limit, params)

&#8211; using https is difficult for the iPhone apps

## Deploy as native apps

www.ipfaces.org : html on the server, supports php

www.phonegap.com

&#8211; not as good as the native apps
