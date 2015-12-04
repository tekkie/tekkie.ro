---
title: How do I run IE6 and IE7 (even IE8) together on the same machine?
author: Georgiana
excerpt: There are explained several options one has when trying to run IE6 and IE7 on the same machine.
layout: post
permalink: /software/how-do-i-run-ie6-ie7-together-same-machine/
ratings_users:
  - 0
ratings_score:
  - 0
ratings_average:
  - 0
categories:
  - Quick and dirty
  - Software
  - testing
tags:
  - browser
  - quickies
  - testing
---
This is a very common issue among us, developers or testers of web applications, so I will explain here exactly what worked for me, along with other solutions which have proved useful for others in the past.

After trying the various solutions on the internet, I learnt that the simple is the best.

  1. <span style="text-decoration: underline;">IE6 standalone install</span> (best choice) 
      * download the [IE6 standalone kit][1] from evolt.org
      * unpack the archive in a convenient place on your computer; be careful to keep all the files into the same directory
      * create a shortcut to iexplore.exe either on the desktop or in the QuickLaunch bar
      * Congratulations, you&#8217;re done!
      * please note that until IE8 is a stable release and gains a small market share I am not interested in testing web apps for it, so this is the reason I chose this solution to be the best one for me
  2. <span style="text-decoration: underline;">Use Internet Explorer Collection</span> 
      * download the [IE Collection kit][2] (note: at the time of this writing, the IE Collection has 42.4 MB, and has reached 1.1.0.1);
      * this package contains various versions of IE: 
          * Internet Explorer 8.0 (8.0.6001.18241)
          * Internet Explorer 7.0 (7.0.5730.13)
          * Internet Explorer 6.0 (6.00.2800.1106)
          * Internet Explorer 5.5 (5.51.4807.2300)
          * Internet Explorer 5.01 (5.00.3314.2100)
          * Internet Explorer 4.01 (4.72.3110.0)
          * Internet Explorer 3.0 (3.0.1152)
          * Internet Explorer 2.01 (2.1.0.46)
          * Internet Explorer 1.5 (0.1.0.10)
          * Internet Explorer 1.0 (4.40.0.308)
      * choose the version of IE you want to install
      * All set up!
      * please note that this solution does not work with Microsoft Vista
  3. <span style="text-decoration: underline;">Use IETester</span> 
      * download the [IETester kit][3] from the [My DebugBar page][4] (note: at the time of this writing the kit has reached version 0.2.3 and has 24 MB)
      * please note that you need to have Windows Vista or Windows XP with IE7 installed if you choose this solution (ithese 2 are the configurations known to work)
      * install it and you&#8217;re ready to go!
    <div>
    </div>
    
    <div>
      Happy coding / testing!
    </div>

 [1]: http://browsers.evolt.org/download.php?/ie/32bit/standalone/ie6eolas_nt.zip "IE6 standalone kit: download page on evolt.org"
 [2]: http://codecpack.nl/iecollection1101.exe "Internet Explorer Collection 1.1.0.1 kit"
 [3]: http://www.my-debugbar.com/ietester/install-ietester-v0.2.3.exe "IETester kit download link"
 [4]: http://www.my-debugbar.com/wiki/IETester/HomePage "IETester page @ My DebugBar"