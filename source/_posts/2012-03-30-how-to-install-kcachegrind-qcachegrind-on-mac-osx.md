---
title: How to install kcachegrind / qcachegrind on Mac OSX
author: Georgiana
layout: post
permalink: /computer-setup/how-to-install-kcachegrind-qcachegrind-on-mac-osx/
ratings_users:
  - 0
ratings_score:
  - 0
ratings_average:
  - 0
categories:
  - Computer setup
tags:
  - cachegrind
  - install
  - Mac
  - OS X
  - profiling
---
Installing kcachegrind via macports takes a long time because it has to build KDE, as well. An alternative faster way is described below.  
* [download Qt binary][1] and install it  
* download and install graphviz; I used `brew install graphviz`  
* fix default graphviz location by symlinking to a place where cachegrind will find it `sudo ln -s /usr/local/bin/dot /usr/bin/dot`  
* `qmake -spec 'macx-g++'; make`  
* copy generated `qcachegrind.app` to your Applications folder  
* enjoy!

 [1]: http://qt.nokia.com/downloads/qt-for-open-source-cpp-development-on-mac-os-x/ "download Qt for Mac OSX"