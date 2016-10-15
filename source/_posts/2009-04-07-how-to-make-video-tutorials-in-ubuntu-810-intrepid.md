---
title: How to make video tutorials in Ubuntu 8.10 Intrepid
author: Georgiana
layout: post
permalink: quick-n-dirty/how-to-make-video-tutorials-in-ubuntu-810-intrepid/
ratings_users:
  - 0
ratings_score:
  - 0
ratings_average:
  - 0
categories:
  - Computer setup
  - Quick and dirty
tags:
  - Computer setup
  - Linux
  - quickies
---
You might need to make a short video recording of your actions to share with someone else. Maybe you need to show a client how things should be done, or you want to show off to your blog&#8217;s readers, who knows?

## What software package to use?

There are a lot of solutions out there, I&#8217;ve tried a bunch of them, but only got one to work: [GTK recordMyDesktop][1].

## How to install it?

If you&#8217;re a command-line tekkie, go ahead and type this:  
`sudo apt-get install gtk-recordmydesktop`

Alternatively, you can install `gtk-recordmydesktop` from the Synaptic package manager.

## How do I use it?

I recommend you to use the [documentation section][2] on the package&#8217;s website.  
Here are some quick tips to get you started:

  * open the app using `Applications > Sound & Video > gtk-recordMyDesktop`
  * go to the `Advanced` settings and change the settings to fit your needs (hint: you might want to use maximum number of frames, which is 50, for smoother videos)
  * click `Record` and the gtk-recordMyDesktop window will minimize to a small red dot at the bottom left of your screen; when you are finished recording, you will click this button
  * after you&#8217;re done, click `Save As` to write the file in your filesystem
  * I assume you will not be happy with the .ogv extension if you have windows clients, so you will want to make .mpg; here&#8217;s how you do this in the command line: `ffmpeg -i my_saved_file.ogv my_destination_file.mpg`

 [1]: http://recordmydesktop.sourceforge.net/about.php
 [2]: http://recordmydesktop.sourceforge.net/documentation.php
