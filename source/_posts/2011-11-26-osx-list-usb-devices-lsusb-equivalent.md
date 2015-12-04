---
title: OSX list USB devices (lsusb equivalent)
author: Georgiana
layout: post
permalink: blog/mobile-development/osx-list-usb-devices-lsusb-equivalent/
ratings_users:
  - 0
ratings_score:
  - 0
ratings_average:
  - 0
categories:
  - Mac OSX
  - Mobile development
tags:
  - mobile
  - OSX
  - quickies
---
Linux users have the `lsusb` command to list all their usb devices.  
The Mac OSX command line equivalent is  
`system_profiler SPUSBDataType`

For a visual alternative in Lion, the steps are:

  * click the apple in the top left corner
  * choose *About This Mac*
  * click on the *More Info&#8230;* button to access the *System Information* application
  * click on the *System Report&#8230;* button
  * under *Hardware* group, there&#8217;s the *USB* option that we were searching for

I needed this information to access my HTC phone with Android that I had connected via USB.
