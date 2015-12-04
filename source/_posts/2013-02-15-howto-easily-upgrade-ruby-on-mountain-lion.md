---
title: HowTo Easily Upgrade Ruby on Mountain Lion
author: Georgiana
layout: post
permalink: blog/computer-setup/howto-easily-upgrade-ruby-on-mountain-lion/
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
  - install
  - OSX
  - quickies
  - Ruby
---
The default Ruby version coming with Mountain Lion is a bit old  
`➜  ruby -v<br />
ruby 1.8.7 (2012-02-08 patchlevel 358) [universal-darwin12.0]`

If only for staying up-to-date with the latest Ruby version, you will want at least 1.9 on your local machine.

There are multiple ways to achieve this, but I found it easiest to use the [Ruby Version Manager][1]. This clever command-line tool gives you the freedom you want, at a minimal cost.

Let&#8217;s start by installing it:

`➜ curl -L https://get.rvm.io | bash -s stable --ruby`

At the time of this writing, the latest Ruby version was 1.9.3, and RVM already installed it on your machine.

All you need to do now is to type  
`➜ rvm use 1.9.3<br />
➜ ruby -v<br />
ruby 1.9.3p385 (2013-02-06 revision 39114) [x86_64-darwin12.2.1]`

In case you will need to return to the default ruby version, this is easily accomplished by  
`➜ rvm system`

The screencast has even more detailed RVM usage, geared towards developers.

 [1]: https://rvm.io/ "Ruby Version Manager homepage"
