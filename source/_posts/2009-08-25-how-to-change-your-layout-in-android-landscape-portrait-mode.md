---
title: How to change your layout in Android landscape / portrait mode
author: Georgiana
layout: post
permalink: /quick-n-dirty/how-to-change-your-layout-in-android-landscape-portrait-mode/
ratings_users:
  - 0
ratings_score:
  - 0
ratings_average:
  - 0
categories:
  - Quick and dirty
tags:
  - Android
  - quickies
---
In the `res` folder we are used to having a `layout` folder, in which we keep the XML files which describe our application&#8217;s layouts. This trick will show you how to improve the view in landscape or portrait mode, whichever you might need.

### How do I quickly change my emulator from portrait to landscape and viceversa?

Use `Ctrl + F11` to test around.

### Can I only improve the layout and use no extra code?

The short answer is **yes**, definitely.

The layouts in `/res/layout` are applied to both portrait and landscape, unless you specify otherwise. Let&#8217;s assume we have `/res/layout/home.xml` for our homepage and we want it to look differently in the 2 layout types.

  1. create folder `/res/layout-land` (here you will keep your landscape adjusted layouts)
  2. copy `home.xml` there
  3. make necessary changes to it
  4. run the application in the emulator and test it using the `Ctrl + F11` combination