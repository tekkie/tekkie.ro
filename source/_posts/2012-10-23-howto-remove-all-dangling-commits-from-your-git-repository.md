---
title: HOWTO remove all dangling commits from your git repository
author: Georgiana
layout: post
permalink: /news/howto-remove-all-dangling-commits-from-your-git-repository/
ratings_users:
  - 0
ratings_score:
  - 0
ratings_average:
  - 0
categories:
  - News
---
A <a title="explanation of git dangling commits" href="http://osdir.com/ml/git/2009-04/msg01874.html" target="_blank">good explanation of the dangling commits</a> source tells you how they get created.

<pre>git fsck --full
Checking object directories: 100% (256/256), done.
Checking objects: 100% (3658/3658), done.
dangling commit 79a3a6af4cda22c8b4f9f6eb01f537d961c088df
dangling blob 82c4e5aa9483cbd92cb4f03c2a8c23272ce41df9
dangling commit 5a857dc2e84bed64434c22a204bf5ed039802b46
dangling blob 3a482dae3fa596c91314ec25311952b740445846
dangling blob 2ed1ba8e6e884414e19b0a59989a0daef1918ccf
dangling commit 3c3a2073d9335627b48ff5f309bf1c6eafb69919</pre>

How to quickly remove those?

<pre>git reflog expire --expire=now --all
git gc --prune=now</pre>

Make sure you really want to remove them, as you <a href="http://gitready.com/advanced/2009/01/17/restoring-lost-commits.html" target="_blank">might decide you need them after all</a>.