---
title: 'Smarty: adding two numbers'
author: Georgiana
excerpt: Correct syntax to add two numbers using Smarty.
layout: post
permalink: blog/quick-n-dirty/smarty-adding-two-numbers/
ratings_users:
  - 0
ratings_score:
  - 0
ratings_average:
  - 0
categories:
  - Quick and dirty
tags:
  - quickies
---
Let&#8217;s start with the initialization:  
`{assign var="iItemOne" value=1}<br />
{assign var="iItemTwo" value=2}`

Beware that the first code is working, while the second is not:

Working sample:  
`{assign var="iSum" value=$iItemOne+$iItemTwo}<br />
Result of adding {$iItemOne} and {$iItemTwo} is {$iSum}.`

Not working sample:  
`{assign var="iSum" value=$iItemOne + $iItemTwo}<br />
Result of adding {$iItemOne} and {$iItemTwo} is {$iSum}.`
