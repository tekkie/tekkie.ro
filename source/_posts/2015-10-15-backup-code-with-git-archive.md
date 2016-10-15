---
title: Backup code with git archive
author: Georgiana
layout: post
permalink: processes/backup-code-with-git-archive/
categories:
  - Processes
tags:
  - archive
  - bundle
  - git
  - tools
---
I am currently working on a Facebook application using nodejs and other frontend goodies. While that&#8217;s all sweet and interesting, localhost can be used to play around after applying certain tricks that [I described a while back][1]. Some particular features (more specifically the share button) cannot be tested in a  
`localhost`  
environment, so I need to place the current code version on a test server and execute it from there.

While I&#8217;m coding, the last thing I want to do is to worry about git commits while my functionality might be breaking. I need to quickly see the results of my code changes. So I searched for a way to quickly pack my local code, and came across the beautiful `git archive` command. As its name says, it allows me to [generate an archive][2] of my current code, but it can also just export the files without packing them (it&#8217;s called `git checkout-index`).

I first exported the code as an archive,

<pre>g@local $ git archive --format=zip HEAD &gt; ~/Desktop/work-in-progress.zip</pre>

Then I uploaded the archive on the testing machine with

<pre>g@local $ scp -v ~/Desktop/work-in-progress.zip deployer@123.x.x.x:.</pre>

Next step was to unpack it there,

<pre>deployer@remote $ unzip work-in-progress.zip</pre>

I then installed its dependencies

<pre>deployer@remote $ npm install</pre>

Starting the process was easy as pie,

<pre>deployer@remote $ npm run dev</pre>

I got myself a solid process consisting of just 4 steps, which can easily be the starting point of the production deployment when I get to that point.

For different use-cases where the versioning information is also needed, I find `<a href="http://rypress.com/tutorials/git/tips-and-tricks">git bundle</a>` to be more appropriate.

 [1]: http://www.tekkie.ro/resources/developing-a-facebook-application-set-up-local-environment/
 [2]: http://gitready.com/intermediate/2009/01/29/exporting-your-repository.html
