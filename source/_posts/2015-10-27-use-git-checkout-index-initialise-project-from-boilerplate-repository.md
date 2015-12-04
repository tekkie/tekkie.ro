---
title: Using git checkout-index to init project from boilerplate repository
author: Georgiana
excerpt: As developers, we are always looking for inspiration in other people’s code. Either we learn something totally unfamiliar to us, or we are just in for a trick, but what makes us better developers is the social aspect of coding. How do we start a project from a boilerplate repository using just git commands?
layout: post
permalink: blog/methodology/use-git-checkout-index-initialise-project-from-boilerplate-repository/
categories:
  - Methodology
tags:
  - boilerplate
  - bootstrap
  - checkout-index
  - git
---
As developers, we are always looking for inspiration in other people&#8217;s code. Either we learn something totally unfamiliar to us, or we are just in for a trick, but what makes us better developers is the social aspect of coding.

There are a lot of boilerplate repositories that put together several libraries into a starter package for new projects. So how do we use them as efficiently as possible?

Find your favorite [boilerplate repository on github][1]. For this example, I am picking the [ultimate boilerplate][2] repo only because it has &#8220;ultimate&#8221; in its name.

So the first step would be to clone it. Business as usual.

```bash
$ git clone git@github.com:numerogeek/ultimate-symfony2-boilerplate.git
```

Old school folks would recursively remove `.git` folders at this point. But not us. Let&#8217;s see what git awesomeness there is in our sleeve:

```bash
$ git checkout-index -f -a --prefix=/work/webdev/kickstart/
```

This will create the `/work/webdev/kickstart/` folder and copy all the files there, without the `.git` items.

Now we can safely navigate to our destination folder

```bash
$ cd /work/webdev/kickstart/
```

and continue with

```bash
$ git init
```

and then add everything to the repo

```bash
$ git add .
```

then just

```bash
$ git commit -m "initial setup
```

We&#8217;re ready to go, and not starting from scratch!

 [1]: https://github.com/search?utf8=%E2%9C%93&q=boilerplate
 [2]: https://github.com/numerogeek/ultimate-symfony2-boilerplate
