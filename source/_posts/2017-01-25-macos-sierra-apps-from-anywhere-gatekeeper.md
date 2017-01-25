---
title: Disable Gatekeeper to Allow Applications from Anywhere in macOS Sierra
author: Georgiana
layout: post
permalink: quick-n-dirty/disable-gatekeeper-allow-applications-anywhere-macos-sierra/
excerpt: CQRS is an acronym for Command-Query Responsibility Segregation. It is an architectural pattern first discussed by Greg Young in 2010. It suggests splitting the responsibilities of reading and writing data into completely different objects. This opposes the well-known CRUD approach.
categories:
  - Quick and dirty
tags:
  - OS X
  - macOS
---


## Background Info

Recently I had to wipe my macOS clean, and therefore lost all my customisations.

Therefore, when I needed to install an application from a colleague, I got the usual permission issues.

## Solution

I needed the `Anywhere` option to appear in my `Security & Privacy` screen. For that to happen, I had to disable Gatekeeper entirely, so I opened a `Terminal` session and used the following command:

```bash
$ sudo spctl --master-disable
```

I was able to check the change was successfully performed by checking the status flag:
```bash
$ spctl --status
assessments disabled
```

As can be seen in the screenshot below, 

![](/images/2017-01-25-macos-security/security-and-privacy-macos.jpg){.img-responsive}

, my full control over which apps are allowed is now back in my hands.

## Reenable Gatekeeper

If you ever need to turn Gatekeeper back on, it's as easy as executing:

```bash
$ sudo spctl --master-enable
```
