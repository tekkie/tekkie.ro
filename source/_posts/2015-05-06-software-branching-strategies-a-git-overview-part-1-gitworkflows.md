---
title: 'Software branching strategies: A git overview | Part 1: gitworkflows'
author: Georgiana
layout: post
permalink: revision-control/software-branching-strategies-a-git-overview-part-1-gitworkflows/
categories:
  - Processes
  - Revision control
tags:
  - branching model
  - branching strategy
  - git
---
We will start by presenting a working example, which will be used as a basis to illustrate the various git branching models from a practical point of view. In the first part of the serios, we&#8217;ll detail the rules and practices of the *gitworkflows* branching model. Towards the end of the series we will outline several common approaches that have emerged as best practices in recent years.

An important note to make is that we will approach the branching strategies from several distinct perspectives. The most frequently used is the `developer` one, and sometimes the only one considered. But we also need to place ourselves in the `bug hunter` shoes, to account for the different midset needed to identify when a certain change has been introduced. Moving forward from the people creating / changing the software, we will account for the `packagist` role, responsible for assembling software into the package that will be deployed in a specific environment.

## Working example: *AcmeGreen*

Let&#8217;s assume we are working on a new greenfield project, named *AcmeGreen*. Our internal project management tool is Jira, and the project codename is *AG*.

When we first created the repository, we started with the `master` branch. Each of our initial features received their own branch. To easily find them, our team has reused a naming convention they previously used, to use a `<project>-<4DigitsTaskNumber>-<details>` name them after the Jira tasks they are attached to. So in our system there are currently some extremely recent branches, all originating from `master`:

  * `AG-0001-initial-setup` prepares the project codebase
  * `AG-0002-use-cases` that the BA and product owner are working on to define the core functionality in the form of use cases

## Strategy: gitworkflows

The manual page for gitworkflows<sup id="fnref-man-gitworkflows"><a href="#fn-man-gitworkflows" rel="footnote">1</a></sup> presents a set of rules and tries to motivate each of them. Let&#8217;s see what they are, and use our working example as illustration.

  * preparation of the upcoming maintenance release is done on `maint`
  * `master` holds the work in progress that is preparing the future release
  * `next` is a stability brach for testing items that will be promoted to `master`
  * throw-away integration brach `pu`, which stands for &#8220;proposed updates&#8221;

### Rule: Topic Branches

> Make a side branch for every topic (feature, bugfix, &#8230;).  
> Fork it off at the oldest integration branch that you will eventually want to merge it into.

To prepare the ground for our team, we will open a `AG-0001-initial-setup` branch off master. This is the place to add initial gitignore rules, define the basic coding standards, etc.

`</p>
<pre>
$ git checkout master # start from the master branch
$ git checkout -b origin AG-0001-initial-setup

# [...] relevant commits in between

$ git push origin AG-0001-initial-setup # publish our work for the teammates benefit
</pre>
<p>`

### Rule: Merge Upwards

> Always commit your fixes to the oldest supported branch that require them.  
> Then (periodically) merge the integration branches upwards into each other.

The `AG-0001-initial-setup` is a few commits ahead. You can have a quicklook at them by executing

`</p>
<pre>
$ git log --pretty=oneline

9cf571c1c1225a5fecf61c43981048fb16193860 setup gitignore rules
3c1fef41a9ca5d1b24f767404f9bfd52affab90c naming convention for short-lived branches
0c1fe345edbebde03f217e7c67d5f67626f2ca7b explain long-term branches
</pre>
<p>`

Assuming this would be all we want to do on the initial setup branch, we want to merge our branch upwards. What is our destination branch in this case? Since there is no release yet, we are targetting the next release, so the master branch.

Let&#8217;s put on our packagist hat for a second. How will we know what went into a release and what didn&#8217;t, if we grab all those 3 commits above individually? Fortunately, there&#8217;s an easy way of assembling them together as one single entity in the integration branch, known as squashing<sup id="fnref-help-merge-squash"><a href="#fn-help-merge-squash" rel="footnote">2</a></sup>; it is an extremely useful method to [maintain a clean commit history][1].

`</p>
<pre>
$ git merge --squash AG-0001-initial-setup
$ git commit -v
$ git push origin master
</pre>
<p>`

The result can be [viewed online][2], with the mention that I have left the squash message untouched specifically for the reader to get a feel of the defaults.

At this point, let&#8217;s remove the feature branch, as we are done with it.

`</p>
<pre>
$ git push origin --delete AG-0001-initial-setup</pre>
<p>`

The maintainers of other topic branches are now able (and should) grab all changes in the integration branches early and often, in order to avoid solving complex conflicts later.

### Prepare our first release

We have reached an important milestone, our initial setup is in fact valid, so as a team we decide that our work so far should be refered to as &#8220;release 0.0.1&#8221;.

Check that `master` is a superset of `maint` by executing

`
<pre>$ git log master..maint</pre>
<p>`

and validating there are no commits found.

We can now tag the release:

`</p>
<pre>
$ git tag -m "initial setup 0.0.1" 0.0.1 master
$ git push --tags
</pre>
<p>`

Once the release is done from a coding perspective, we can now hand it over to the packagist. The next step is to tidy up the maintenance branches to reflect the new state of facts.

Since `maint` reflects the previous release, it would be a good time to spin off a new `maint-FORMER-RELEASE` to be able to supply quick fixes there. In our case this is not needed, as we don&#8217;t have a previous release to refer to.

What is needed, though, is to grab all the new code from `master` to `maint`, and we do that by

`</p>
<pre>
$ git checkout maint
$ git merge --ff-only master</pre>
<p>`

### Pull requests

While we were busy setting the 0.0.1 ground and making it happen, our colleagues were really busy carving out the use cases, and their branch advanced quite nicely. This time, they need their work to be validated by teammates, so they decide to create a pull request to showcase it.

Our example below will use the github UI for the visual part. Prepare the pull request by clicking on the new pull request button.

<a class="thickbox" title="Prepare to create pull request" href="http://i0.wp.com/www.tekkie.ro/wp-content/gallery/git-branching-models/github-pull-request-01-prepare.jpg" rel="" data-image-id="14" data-src="http://www.tekkie.ro/wp-content/gallery/git-branching-models/github-pull-request-01-prepare.jpg" data-thumbnail="http://i0.wp.com/www.tekkie.ro/wp-content/gallery/git-branching-models/thumbs/thumbs_github-pull-request-01-prepare.jpg?w=700" data-title="github-pull-request-01-prepare.jpg" data-description=" "><img class="ngg-singlepic ngg-none" src="http://i0.wp.com/www.tekkie.ro/wp-content/gallery/git-branching-models/thumbs/thumbs_github-pull-request-01-prepare.jpg?w=700" alt="Prepare to create pull request" data-recalc-dims="1" /></a>

Supply a relevant title and description.

<a class="thickbox" title="Teamwork" href="http://i2.wp.com/www.tekkie.ro/wp-content/gallery/git-branching-models/github-pull-request-03-merge.jpg" rel="" data-image-id="14" data-src="http://www.tekkie.ro/wp-content/gallery/git-branching-models/github-pull-request-03-merge.jpg" data-thumbnail="http://i2.wp.com/www.tekkie.ro/wp-content/gallery/git-branching-models/thumbs/thumbs_github-pull-request-03-merge.jpg?w=700" data-title="github-pull-request-03-merge.jpg" data-description=" "><img class="ngg-singlepic ngg-none" src="http://i2.wp.com/www.tekkie.ro/wp-content/gallery/git-branching-models/thumbs/thumbs_github-pull-request-03-merge.jpg?w=700" alt="Teamwork" data-recalc-dims="1" /></a>

When we are happy with the current state, pressing the green *Merge pull request* button will enable us to bring it to the main branch, in our case `master`.

<a class="thickbox" title="Add necesary details" href="http://i2.wp.com/www.tekkie.ro/wp-content/gallery/git-branching-models/github-pull-request-02-description.jpg" rel="" data-image-id="14" data-src="http://www.tekkie.ro/wp-content/gallery/git-branching-models/github-pull-request-02-description.jpg" data-thumbnail="http://i0.wp.com/www.tekkie.ro/wp-content/gallery/git-branching-models/thumbs/thumbs_github-pull-request-02-description.jpg?w=700" data-title="github-pull-request-02-description.jpg" data-description=" "><img class="ngg-singlepic ngg-none" src="http://i0.wp.com/www.tekkie.ro/wp-content/gallery/git-branching-models/thumbs/thumbs_github-pull-request-02-description.jpg?w=700" alt="github-pull-request-02-description.jpg" data-recalc-dims="1" /></a>

### A more complex release

For our first release, we did not have something to keep maintaining, so the steps we needed to execute were fewer and simpler. This time it will take a bit more attention from our end.

`</p>
<pre>
# always make sure we have the latest and greatest
$ git pull origin master

# check master is superset of maint
$ git log master..maint

# tag and publish
$ git tag -m "use cases described" 0.0.2 master
$ git push --tags
</pre>
<p>`

What is different this time? We will need to ensure we can easily fix items in 0.0.1 that get reported to us after we have created 0.0.2. The way to achieve this is to spin off maintenance branch for 0.0.1, and use that for fixes and tags.

`</p>
<pre>
$ git branch maint-0.0.1 maint
$ git push origin maint-0.0.1</pre>
<p>`

Now it is safe to update `maint` to contain the new release.

`</p>
<pre>
$ git checkout maint
$ git merge --ff-only master
$ git push origin maint</pre>
<p>`

## Conclusion

In the first part of the series, we have started with a working example, then detailed a few rules of the *gitworkflows* branching strategy, and illustrated them with real commands. Next we shown a few simple and effective rules of working with branches, then prepared a couple of releases and accounted for the specifics of each.

Part two of the series will showcase `git flow`, another popular branching strategy.

<li id="fn-man-gitworkflows">
  https://www.kernel.org/pub/software/scm/git/docs/gitworkflows.html <a href="#fnref-man-gitworkflows" rev="footnote">↩</a>
</li>
<li id="fn-help-merge-squash">
  http://www.git-scm.com/docs/git-merge <a href="#fnref-help-merge-squash" rev="footnote">↩</a></fn></footnotes>

 [1]: https://sandofsky.com/blog/git-workflow.html
 [2]: https://github.com/georgiana-gligor/branching-strategies-gitworkflows/commits/master
