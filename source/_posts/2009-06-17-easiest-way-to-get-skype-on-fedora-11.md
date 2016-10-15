---
title: Easiest way to get Skype on Fedora 11
author: Georgiana
layout: post
permalink: computer-setup/easiest-way-to-get-skype-on-fedora-11/
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
  - Fedora
  - Skype
---
I investigated today about an hour, and none of the solutions worked. Until I found this one, quick and easy setup. Thanks, [guys][1].

> [&#8230;] install the Skype repository. Open a terminal and type:
>
> [sourcecode language=&#8217;html&#8217;]  
> su -c &#8216;gedit /etc/yum.repos.d/skype.repo&#8217;  
> [/sourcecode]
>
> In that file copy the following lines:  
> [sourcecode language=&#8217;html&#8217;]  
> [skype]  
> name=Skype Repository  
> baseurl=http://download.skype.com/linux/repos/fedora/updates/i586/  
> enabled=1  
> gpgkey=http://www.skype.com/products/skype/linux/rpm-public-key.asc  
> gpgcheck=0  
> [/sourcecode]
>
> Now you can easily install/update skype by typing:  
> [sourcecode language=&#8217;html&#8217;]  
> su -c &#8216;yum install skype&#8217;  
> su -c &#8216;yum update skype&#8217;  
> [/sourcecode]

 [1]: http://www.my-guides.net/en/content/view/161/26/1/9/
