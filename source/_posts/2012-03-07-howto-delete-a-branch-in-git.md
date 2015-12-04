---
title: Howto delete a branch in git
author: Georgiana
layout: post
permalink: /quick-n-dirty/howto-delete-a-branch-in-git/
ratings_users:
  - 0
ratings_score:
  - 0
ratings_average:
  - 0
categories:
  - Quick and dirty
tags:
  - git
  - GitHub
  - quickies
---
Delete a branch that&#8217;s already fully merged in its upstream branch, or in HEAD if no upstream was set with &#8211;track or &#8211;set-upstream.  
`git branch -d feature/not-needed-anymore`

If you don&#8217;t want to bother with the merge status of the branch simply use.  
`git branch -D feature/not-needed-anymore`