---
title: Reattach to a screen session
author: Georgiana
excerpt: Simple recipe for reattaching to a screen session.
layout: post
permalink: /quick-n-dirty/reattach-to-a-screen-session/
categories:
  - Quick and dirty
tags:
  - Linux
  - quickies
  - screen
---
Over the weekend I was working on a small pet project, and I decided to play with a DigitalOcean droplet as I had some spare credit.

As usual, I was using [`screen`][1] to get everything set up. A sysadmin friend first showed me how we could do a server screen sharing with it, and I never looked back eversince. I usually refer to the [one-page manual][2] if I forget the keyboard combination.

At some point the internet connection dropped for a few minutes. When I got back online, I was unable to reattach and continue my work.

    $ screen -r
    There is a screen on:
        28033.pts-0.konf-api    (08/07/15 06:58:36) (Attached)
    There is no screen to be resumed.
    

Somewhere in the `man screen` instructions I found the magical `-D` option.

       -d|-D [pid.tty.host]
            does not start screen, but detaches the elsewhere running screen session. It has the same effect as typing "C-a d" from screen's control-
            ling terminal. -D is the equivalent to the power detach key.  If no session can be detached, this option is ignored. In combination  with
            the -r/-R option more powerful effects can be achieved
    

Basically it detaches everything else and allows me to reattach right away. Lovely.

So, I went on to execute with that option enabled, and of course magic happened.

    $ screen -D -r '28033.pts-0.konf-api'
    [detached from 28033.pts-0.konf-api]

 [1]: http://www.gnu.org/software/screen/
 [2]: http://www.gnu.org/software/screen/manual/screen.html