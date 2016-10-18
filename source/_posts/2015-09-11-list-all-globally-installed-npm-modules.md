---
title: List all globally installed npm modules
author: Georgiana
excerpt: List all globally installed npm modules
layout: post
permalink: computer-setup/list-all-globally-installed-npm-modules/
categories:
  - Computer setup
tags:
  - nodejs
  - npm
---
Today I needed to have a look at all the `npm` modules that were installed globally on my machine. I found that `npm` has a `list` command that does just that. But, in order to only see the modules, and not all their dependencies, I needed to specify a `depth` value of 0:

    npm list -g --depth=0

    /usr/local/lib
    ├── ampersand@3.0.5
    ├── bower@1.4.1
    ├── brunch@1.8.3
    ├── grunt-cli@0.1.13
    ├── gulp@3.9.0
    ├── http-server@0.8.0
    ├── javascripting@2.0.3
    ├── mocha@2.3.0
    ├── n@2.0.1
    ├── node-gyp@2.0.2
    ├── npm@2.11.3
    ├── phantomas@1.11.0
    ├── react-native-cli@0.1.4
    ├── react-tools@0.13.3
    ├── supervisor@0.7.1


The `-g` switch is the same one that I used when globally installing each module.

If the name of some package doesn&#8217;t immediately ring a bell, replacing `list` with `ll` can help:

    npm ll -g --depth=0

    │ /usr/local/lib
    │
    ├── ampersand@3.0.5
    │   CLI tool for generating single page apps a. la. http://humanjavascript.com
    │   git+https://github.com/ampersandjs/ampersand.git
    │   https://github.com/ampersandjs/ampersand
    ├── bower@1.4.1
    │   The browser package manager
    │   git+https://github.com/bower/bower.git
    │   http://bower.io
    ├── brunch@1.8.3
    │   A lightweight approach to building HTML5 applications with emphasis on elegance and     simplicity
    │   git+https://github.com/brunch/brunch.git
    │   http://brunch.io/
    ├── grunt-cli@0.1.13
    │   The grunt command line interface.
    │   git://github.com/gruntjs/grunt-cli.git
    │   http://gruntjs.com/
    ├── gulp@3.9.0
    │   The streaming build system
    │   git+https://github.com/gulpjs/gulp.git
    │   http://gulpjs.com
    ├── http-server@0.8.0
    │   A simple zero-configuration command-line http server
    │   git://github.com/indexzero/http-server.git
    │   https://github.com/indexzero/http-server
    ├── javascripting@2.0.3
    │   https://docs.npmjs.com/
    ├── phantomas@1.11.0
    │   PhantomJS-based web performance metrics collector
    │   git://github.com/macbre/phantomas.git
    │   https://github.com/macbre/phantomas
    ├── react-native-cli@0.1.4
    │   The ReactNative cli tools
    ├── react-tools@0.13.3
    │   A set of complementary tools to React, including the JSX transformer.
    │   git+https://github.com/facebook/react.git
    │   https://facebook.github.io/react
    ├── supervisor@0.7.1
    │   A supervisor program for running nodejs programs
    │   git://github.com/petruisfan/node-supervisor.git
    │   https://github.com/petruisfan/node-supervisor/
