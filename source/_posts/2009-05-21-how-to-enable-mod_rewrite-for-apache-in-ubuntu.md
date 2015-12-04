---
title: How to enable mod_rewrite for Apache in Ubuntu
author: Georgiana
layout: post
permalink: /computer-setup/how-to-enable-mod_rewrite-for-apache-in-ubuntu/
ratings_users:
  - 0
ratings_score:
  - 0
ratings_average:
  - 0
categories:
  - Computer setup
tags:
  - Apache
  - Computer setup
  - Ubuntu
---
It&#8217;s already installed, but not enabled. The easiest way to enable it is to follos these steps:

  1. run this command (a2enmod == **a**pache**2** **en**able **mod**ule): [sourcecode language=&#8217;html&#8217;]a2enmod rewrite[/sourcecode]
  2. edit this file /etc/apache2/sites-enabled/000-default; you can use the following command: [sourcecode language=&#8217;html&#8217;]sudo gedit /etc/apache2/sites-enabled/000-default[/sourcecode]
  3. make sure you have there AllowOverride All directive for the default directory (this will make all the subdirectories inherit this behaviour): 
    [sourcecode language=&#8217;html&#8217;]  
    DocumentRoot /var/www  
    <Directory />  
    Options FollowSymLinks  
    AllowOverride All  
    </Directory>  
    <Directory /var/www/>  
    Options Indexes FollowSymLinks MultiViews  
    AllowOverride All  
    Order allow,deny  
    allow from all  
    </Directory>  
    [/sourcecode] </li> 
    
      * restart apache and enjoy! [sourcecode language=&#8217;html&#8217;]sudo /etc/init.d/apache2 restart[/sourcecode]</ol> 
    
    Note: I use gedit because it&#8217;s my home desktop computer. On a server where you have no graphical interface at your disposal (and no gedit for that matter), you can safely use you favorite editor (nano, pico, vi) so all you have to do is replace [sourcecode language=&#8217;html&#8217;]sudo gedit[/sourcecode] with [sourcecode language=&#8217;html&#8217;]sudo nano[/sourcecode] if your favorite is nano.