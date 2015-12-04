---
title: Sound is not working after upgrading to Ubuntu 9.04 (Jaunty Jackalope)
author: Georgiana
layout: post
permalink: blog/computer-setup/sound-is-not-working-after-upgrading-to-ubuntu-904-jaunty-jackalope/
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
  - quickies
  - Ubuntu
---
I had the same problem as a lot of people, actually. I found the following solution to be working for me:

Open the alsa config file by:

[sourcecode language=&#8217;css&#8217;]  
sudo gedit /etc/modprobe.d/alsa-base.conf  
[/sourcecode]

at the end of the file just paste the following lines:

[sourcecode language=&#8217;css&#8217;]  
options snd-pcsp index=-2  
options snd slots=snd-hda-intel  
options snd-hda-intel model=hp-m4  
alias snd-card-0 snd-hda-intel  
options snd-hda-intel enable_msi=1  
[/sourcecode]

Solution came from [this forum thread][1]. Thanks guys.

 [1]: http://ubuntuforums.org/showthread.php?t=1136670 "Ubuntu Forums: sound not working after upgrade to 9.04"
