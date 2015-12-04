---
title: How to use wget on your Mac
author: Georgiana
layout: post
permalink: blog/computer-setup/how-to-use-wget-on-your-mac/
ratings_users:
  - 0
ratings_score:
  - 0
ratings_average:
  - 0
categories:
  - Computer setup
---
It&#8217;s a simple install that gives you a lot more power and a productivity boost while you&#8217;re in the command line.

Of course you could open up a browser and download that file, but it takes so many clicks to do it that you just need wget. Here&#8217;s how to install in a few simple steps:

  * download your preferred version from [here][1]; at the time of this writing, the latest version is [1.12][2]
  * unpack it
      * either by double-clicking the file you downloaded
      * or by executing in the command line `tar xvf wget-1.12.tar.gz`
  * navigate to the folder where it was extracted `cd wget-1.12`
  * `./configure`
  * `make`
  * `make install` (you might need to do `sudo make install` to get all the needed permissions)

You can now use the wget command from your Terminal.

 [1]: http://ftp.gnu.org/pub/gnu/wget/ "wget ftp download directory"
 [2]: http://ftp.gnu.org/pub/gnu/wget/wget-1.12.tar.gz "download wget 1.12"
