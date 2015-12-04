---
title: How to add and use Compiz in your Ubuntu 8.10 Intrepid 64-bit
author: Georgiana
layout: post
permalink: /computer-setup/how-to-add-and-use-compiz-in-your-ubuntu-intrepid-64-bit/
ratings_users:
  - 0
ratings_score:
  - 0
ratings_average:
  - 0
categories:
  - Computer setup
tags:
  - Computer setup
  - Linux
  - quickies
---
So, you are using Ubuntu 8.10 (codenamed Intrepid Ibex) and you&#8217;d like to play around with Compiz, which made you &#8220;wooow&#8221;. Let&#8217;s see.  


<!--more-->

  
Do you have a 3D-capable graphics card? If you don&#8217;t, it&#8217;s time to go get one now, because otherwise you won&#8217;t be able to play with Compiz.

## Graphics card drivers should be in place

I have an Nvidia graphics card, and I had already installed the proprietary driver for it. If you haven&#8217;t done that already, you should do it now. Installation is done from the `Hardware Drivers` too, which can be started from ` System > Administration > Hardware Drivers`. It should tell you that there&#8217;s an NVIDIA graphics driver available for your system. To install it, click on `Activate`, wait for the NVIDIA driver to be downloaded and installed. A computer restart is needed in order to use the new driver.

## Install Simple Compizconfig Settings Manager & Enable Compiz

Open the Synaptic Package Manager (`System > Administration > Synaptic Package Manager`), select the package `simple-ccsm` (simple Compizconfig settings manager) and install it.

Go to `System > Preferences > Appearance` and select `Custom` on the `Visual Effects` tab.

Hurray! You&#8217;ve just enabled Compiz!

## Configure & play around with Compiz

Open the CompizConfig Settings Manager by going to `System > Preferences > CompizConfig Settings Manager`.

Here&#8217;s [a nice list of shortcuts][1] for you to use while playing around.

Have fun!

P.S. 1: there&#8217;s nothing special to do in the case of 64-bit architectures, as you may have already noticed.

P.S. 2: you might want to check out [Forlong&#8217;s Blog][2] for further details on how to customize Compiz.

 [1]: http://wiki.compiz-fusion.org/CommonKeyboardShortcuts
 [2]: http://forlong.blogage.de/entries/2008/4/26/How-to-set-up-Compiz-Fusion-074 "Forlong's Blog: How to set up Compiz Fusion"