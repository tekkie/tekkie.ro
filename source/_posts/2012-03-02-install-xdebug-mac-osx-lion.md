---
title: Install Xdebug on Mac OSX Lion
author: Georgiana
layout: post
permalink: /computer-setup/install-xdebug-mac-osx-lion/
ratings_users:
  - 0
ratings_score:
  - 0
ratings_average:
  - 0
categories:
  - Computer setup
  - Mac OSX
tags:
  - Computer setup
  - OS X
  - PHP
  - xdebug
---
  * Download the latest Xdebug version. The most stable is currently 2.1.3, but if you&#8217;re brave you&#8217;ll use 
    <pre>xdebug-latest.tgz</pre>
    
    directly.  
    `<br />
cd /tmp/ && curl http://xdebug.org/files/xdebug-2.1.3.tgz > xdebug.tgz<br />
tar -xvzf xdebug.tgz<br />
cd xdebug-2.1.3<br />
`</li> 
    
      * configure it with phpize  
        `phpize`
      * specify some mac-specific environment variables  
        `<br />
MACOSX_DEPLOYMENT_TARGET=10.7<br />
CFLAGS="-arch i386 -arch x86_64 -g -Os -pipe -no-cpp-precomp"<br />
CCFLAGS="-arch i386 -arch x86_64 -g -Os -pipe"<br />
CXXFLAGS="-arch i386 -arch x86_64 -g -Os -pipe"<br />
LDFLAGS="-arch i386 -arch x86_64 -bind_at_load"<br />
export CFLAGS CXXFLAGS LDFLAGS CCFLAGS MACOSX_DEPLOYMENT_TARGET<br />
`
      * build and install  
        `./configure<br />
make<br />
sudo make install`
      * enable it in php.ini  
        `<br />
[xdebug]<br />
xdebug.profiler_output_dir = /var/log/xdebug<br />
xdebug.overload_var_dump = 0<br />
xdebug.profiler_output_name = callgrind.out.%R<br />
`
      * restart your Apache</ul>