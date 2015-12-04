---
title: Serve static files locally with the http-server nodejs module
author: Georgiana
excerpt: Quick introduction on how to start using the http-server node module to serve local static resources while developing locally.
layout: post
permalink: blog/quick-n-dirty/serve-static-files-locally-with-the-http-server-nodejs-module/
categories:
  - Quick and dirty
tags:
  - development environment
  - node.js
---
Since I left full-time LAMP development behind me, Apache and MySql servers are turned off by default on my Mac. I only start them when they are needed. I then noticed I didn&#8217;t want to deal with Apache for quick prototyping or doing local development on static files.

So I went shopping for a very small web server, and found a nodejs module that fits the bill perfectly. I liked [http-server][1], and it took me literally 5 minutes to start using it.

First, I performed a global install, so I can use it in multiple projects.

`$ npm install http-server -g`

Then I navigated to the folder that I wanted to play with, and started it on a non-standard port:

`$ http-server --cors -p 9879`

Loading up http://localhost:9879/ in a browser proved it was working perfectly.

The other available options can be seen when executing `$ http-server --help`, and they are very handy. For example, one can enable https if needed, or can use a certain certificate file.

 [1]: https://github.com/indexzero/http-server
