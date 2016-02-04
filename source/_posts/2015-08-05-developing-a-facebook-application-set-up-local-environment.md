---
title: 'Developing a Facebook application: set up local environment'
author: Georgiana
excerpt: Detailed steps on how to set up local environment for developing a Facebook application and connecting it to a localhost URL.
layout: post
permalink: resources/developing-a-facebook-application-set-up-local-environment/
categories:
  - Resources
tags:
  - Facebook
  - test version
---
Once I have defined my application, I wanted to set up a development-friendly environment that I could use to interact with it, without touching the production version.

Fortunately, Facebook has made it easy by letting developers define test versions, and I added one with the label &#8220;localhost&#8221; in the end (step 1). It is highly probable that I will need a staging environment as well, so I will just postfix with &#8220;staging&#8221; when time will come.

Next, I went to my test version of the application, and opened the &#8220;Settings&#8221; screen.

There are two important changes to be made here:

  * I had to define the application domain to be &#8220;localhost&#8221; (step 2)
  * I pointed the site URL to my local web server and port values (step 3). The simple steps needed for this are [described separately][1].

After saving changes, I was able to use Facebook login in my localhost application.

 [1]: http://www.tekkie.ro/quick-n-dirty/serve-static-files-locally-with-the-http-server-nodejs-module/
