---
title: How to restore your Mac settings
author: Georgiana
layout: post
permalink: quick-n-dirty/how-to-restore-your-mac-settings/
ratings_users:
  - 0
ratings_score:
  - 0
ratings_average:
  - 0
categories:
  - Quick and dirty
tags:
  - Mac
  - quickies
---
If you installed a program which took the horrible approach of rewriting your .profile settings file and you discover you don&#8217;t have access to the shortcuts from your terminal anymore, here&#8217;s how to fix it:

  * open a terminal window and make sure you navigate to the home directory
<pre>cd ~</pre>

  * open your profile settings using the full path to your editor (I use nano):
<pre>/usr/bin/nano .profile</pre>

  * make sure your PATH setting contains at least the following information:
<pre>export PATH=/usr/bin:/bin:</pre>

  * make the shell reload your profile
<pre>. ./.profile</pre>

Now we&#8217;re talking! You can `ls` and `sudo` again!
