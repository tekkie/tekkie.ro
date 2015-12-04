---
title: Install node.js on Ubuntu servers
author: Georgiana
excerpt: Debian-based distributions need a bit of help in setting up node.js for the first time. We detail the steps to make it easier for the reader to perform them.
layout: post
permalink: /computer-setup/install-node-js-on-ubuntu-servers/
categories:
  - Computer setup
tags:
  - deployment
  - node.js
  - production
---
Debian-based distros are not particularly friendly with node.js applications. I found this out the hard way, as I tried to

    $ apt-get install node
    

and noticed that there is zero output when trying to check the node.js version with

    $ node -v
    $
    

Nothing. Nada.

I went on to see what was the `node` command actually executing. Here&#8217;s what it said:

    $ which node
    /usr/sbin/node
    
    $ ll /usr/sbin/node
    lrwxrwxrwx 1 root root 9 Oct 29  2012 /usr/sbin/node -> ax25-node*
    

That can&#8217;t be good, I wanted to get node.js, not some creepy ax25.

So I started digging around and found out that [readme.debian does provide the proper information][1] if one has time to look around. Also, [DigitalOcean has a great writeup][2] for getting node.js properly installed in an Ubuntu environment.

One quick way to do it would be to simply symlink current `nodejs` into `/usr/bin`, like this:

    $ sudo ln -s /usr/bin/nodejs /usr/bin/node
    

I wanted to not take this route, and rather go back to square one and start over clean.

    # Ubuntu names the package nodejs instead of node
    $ apt-get install nodejs
    
    # verify version
    $ nodejs -v
    v0.10.25
    
    # install the legacy bridge
    $ apt-get install nodejs-legacy
    
    # verify node version
    $ node -v
    v0.10.25
    

Now that everything is properly linked, I was able to use the `pm2` process manager in the way DigitalOcean guide was suggesting.

 [1]: http://stackoverflow.com/questions/21168141/can-not-install-packages-using-node-package-manager-in-ubuntu
 [2]: https://www.digitalocean.com/community/tutorials/how-to-install-node-js-on-an-ubuntu-14-04-server