---
title: How to install Google Chrome in Ubuntu
author: Georgiana
layout: post
permalink: computer-setup/how-to-install-google-chrome-in-ubuntu/
ratings_users:
  - 0
ratings_score:
  - 0
ratings_average:
  - 0
categories:
  - Computer setup
tags:
  - browser
  - Computer setup
  - Google
  - Ubuntu
---
In the Linux world, Chrome&#8217;s name is Chromium. Let&#8217;s follow some simple steps to get it on the Ubuntu machine:

  1. add the following repository at the end of your /etc/apt/sources/list file:
      * [sourcecode]deb http://ppa.launchpad.net/chromium-daily/ppa/ubuntu jaunty main[/sourcecode]
  2. add the GPG key using the following command:
      * [sourcecode]sudo apt-key adv &#8211;recv-keys &#8211;keyserver keyserver.ubuntu.com 0xfbef0d696de1c72ba5a835fe5a9bf3bb4e5e17b5[/sourcecode]
  3. update sources list:
      * <span style="background-color: #ffffff;">[sourcecode]sudo apt-get update[/sourcecode]</span>
  4. <span style="background-color: #ffffff;">install the Chromium browser:</span>
      * [sourcecode]sudo apt-get install chromium-browser[/sourcecode]
