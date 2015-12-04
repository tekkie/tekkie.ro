---
title: HowTo Reset Your Drupal Administrator password
author: Georgiana
layout: post
permalink: /quick-n-dirty/howto-reset-your-drupal-administrator-password/
ratings_users:
  - 0
ratings_score:
  - 0
ratings_average:
  - 0
categories:
  - CMS
  - Quick and dirty
tags:
  - Drupal 7
  - quickies
---
`drush upwd admin --password="new-password-goes-here"`

If the username admin is not working, check the list of your defined users like this:

` drush sql-cli<br />
mysql> select name from users;<br />
`