---
title: Easy upgrade the node.js version using n
author: Georgiana
excerpt: Easy upgrade the node.js version using n
layout: post
permalink: computer-setup/easy-upgrade-the-node-js-version-using-n/
categories:
  - Computer setup
tags:
  - node.js
  - version management
---
I hadn&#8217;t used [node.js][1] for about half a year, and when I got a new project lined up, I decided to update it today. At the beginning of the process, my current version was 0.12.0, as checked with:

`$ node -v<br />
v0.12.0`

My working environment is OSX, where I previously attempted to use [nvm][2] and had troubles with it. This time I found an excellent node version manager, with a clean and friendly UI: [n][3].

The update steps were very simple, and straightforward, I detailed below each one.

## Clean the npm cache

This step is optional, but as a developer I really enjoy having full control over what is going on. With this, I made sure everything was clean before I began.

`$ sudo npm cache clean -f<br />
Password:<br />
npm WARN using --force I sure hope you know what you are doing.`

## Install n

I performed a global install of `n`, the node version manager I found earlier.

`$ sudo npm install -g n<br />
/usr/local/bin/n -> /usr/local/lib/node_modules/n/bin/n<br />
n@2.0.1 /usr/local/lib/node_modules/n`

## Install the desired node version and switch to it

I then asked `n` to install the latest stable node version.

    $ sudo n stable

      install : node-v0.12.7
        mkdir : /usr/local/n/versions/node/0.12.7
        fetch : https://nodejs.org/dist/v0.12.7/node-v0.12.7-darwin-x64.tar.gz
    installed : v0.12.7


This also made the switch to the installed version.

## Verification

Checking the currently running version shows I&#8217;m running the latest one indeed:

`$ node -v<br />
v0.12.7`

## Other usage scenarios

`n` can also be used to switch to a specific node version. Let&#8217;s say I wanted 0.12.5, all I would need to do would be to specify that as an input parameter: `$ sudo n 0.12.5`

 [1]: http://nodejs.org/
 [2]: https://github.com/creationix/nvm
 [3]: https://github.com/tj/n
