---
title: Use Google Sheet as a free online database for prototyping
author: Georgiana
excerpt: Developer notes showing how to get started with Google Sheet as a free online database for prototyping
layout: post
permalink: /quick-n-dirty/use-google-sheet-as-a-free-online-database-for-prototyping/
categories:
  - Quick and dirty
tags:
  - API
  - database
  - Google
  - Google sheets
  - prototype
---
I really like prototyping, since I can quickly show a clickable version of an idea that&#8217;s floating around my head. But the pain of setting up an environment for that is sometimes too expensive and less attractive. Recently I found a cheap way to using a database that I wanted to share.

Google Drive is a great way of keeping a virtual collection of documents. I especially appreciate small incentives like them offering a [dashboard with the online status][1] of each service, and we can easily see that it&#8217;s quite a reliable solution for most needs. Another (less popular) use of Google documents is that of an online database to feed data to other applications. I was very happy to discover it has quite a bit of support for the [Sheets][2] by having an API exposed.

An added cool factor is the fact that we can [access data as json][3] to adding `alt=json` in the URL query params. And it gets even better, we can also [pass a callback][4] by adding `alt=json-in-script&callback=handcraftedCallback` to have data wrapped to `handcraftedCallback`.

Some basic things we should note in the setup are the permissions.  
For this example I&#8217;ve set up a [harmless spreadsheet][4] to toy around with.  
On the first attempt to access it via this URL  
`https://spreadsheets.google.com/feeds/list/1YNiISzk3b1emyeNI4TRt58Q0Ni1Librq087anSy64Pk/1/public/values?alt=json-in-script&callback=handcraftedCallback` the response will be an error saying &#8220;We&#8217;re sorry. This document is not published.&#8221;

This needs us to publish the document to web.  
<a class="thickbox" title=" " href="http://i1.wp.com/www.tekkie.ro/wp-content/gallery/bugs-screenshots/publish-to-web-menu.jpg" rel="" data-image-id="28" data-src="http://www.tekkie.ro/wp-content/gallery/bugs-screenshots/publish-to-web-menu.jpg" data-thumbnail="http://i2.wp.com/www.tekkie.ro/wp-content/gallery/bugs-screenshots/thumbs/thumbs_publish-to-web-menu.jpg?w=700" data-title="publish-to-web-menu" data-description=" "><img class="ngg-singlepic ngg-none" src="http://i2.wp.com/www.tekkie.ro/wp-content/gallery/bugs-screenshots/thumbs/thumbs_publish-to-web-menu.jpg?w=700" alt="publish-to-web-menu" data-recalc-dims="1" /></a>

After we access the dialog screen,

<a class="thickbox" title=" " href="http://i0.wp.com/www.tekkie.ro/wp-content/gallery/bugs-screenshots/publish-to-web-button.jpg" rel="" data-image-id="27" data-src="http://www.tekkie.ro/wp-content/gallery/bugs-screenshots/publish-to-web-button.jpg" data-thumbnail="http://i0.wp.com/www.tekkie.ro/wp-content/gallery/bugs-screenshots/thumbs/thumbs_publish-to-web-button.jpg?w=700" data-title="publish-to-web-button" data-description=" "><img class="ngg-singlepic ngg-none" src="http://i0.wp.com/www.tekkie.ro/wp-content/gallery/bugs-screenshots/thumbs/thumbs_publish-to-web-button.jpg?w=700" alt="publish-to-web-button" data-recalc-dims="1" /></a>  
then we click &#8220;Start publishing&#8221;,

<a class="thickbox" title=" " href="http://i2.wp.com/www.tekkie.ro/wp-content/gallery/bugs-screenshots/publish-to-web-published.jpg" rel="" data-image-id="29" data-src="http://www.tekkie.ro/wp-content/gallery/bugs-screenshots/publish-to-web-published.jpg" data-thumbnail="http://i2.wp.com/www.tekkie.ro/wp-content/gallery/bugs-screenshots/thumbs/thumbs_publish-to-web-published.jpg?w=700" data-title="publish-to-web-published" data-description=" "><img class="ngg-singlepic ngg-none" src="http://i2.wp.com/www.tekkie.ro/wp-content/gallery/bugs-screenshots/thumbs/thumbs_publish-to-web-published.jpg?w=700" alt="publish-to-web-published" data-recalc-dims="1" /></a>  
then we confirm our choice in the dialog.

 [1]: http://www.google.com/appsstatus#hl=en&v=status
 [2]: https://developers.google.com/google-apps/spreadsheets/
 [3]: https://developers.google.com/gdata/docs/json?hl=en#json-output
 [4]: https://developers.google.com/gdata/docs/json?hl=en#json-in-script-output