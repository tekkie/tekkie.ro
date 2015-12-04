---
title: Fix Vagrant problems after Mavericks update
author: Georgiana
layout: post
permalink: /computer-setup/fixvagrant-problems-after-mavericks-update/
categories:
  - Computer setup
  - Mac OSX
tags:
  - Computer setup
  - Mavericks
---
Updated the [OSX to 10.9][1] over the weekend.

While most of the troubles I encountered were caused by [PHP 5.3 being completely wiped out and the system getting a stock install of 5.4][2], there were other minor things which didn&#8217;t go quite smoothly.

I use a [VirtualBox][3] + [Vagrant][4] + [puppet][5] combination to work on some side projects, and this was affected in a pretty mysterious way, as can be seen below:

<pre>➜  centos64 (master) ✗  vagrant up
Bringing machine 'default' up with 'virtualbox' provider...
[default] Importing base box 'theCentos64'...
[default] Matching MAC address for NAT networking...
[default] Setting the name of the VM...
[default] Clearing any previously set forwarded ports...
[default] Creating shared folders metadata...
[default] Clearing any previously set network interfaces...
There was an error while executing `VBoxManage`, a CLI used by Vagrant
for controlling VirtualBox. The command and stderr is shown below.

Command: ["hostonlyif", "create"]

Stderr: 0%...
Progress state: NS_ERROR_FAILURE
VBoxManage: error: Failed to create the host-only adapter
VBoxManage: error: VBoxNetAdpCtl: Error while adding new interface: failed to open /dev/vboxnetctl: No such file or directory

VBoxManage: error: Details: code NS_ERROR_FAILURE (0x80004005), component HostNetworkInterface, interface IHostNetworkInterface
VBoxManage: error: Context: "int handleCreate(HandlerArg*, int, int*)" at line 68 of file VBoxManageHostonly.cpp</pre>

This was not an easy task to fix, as Mavericks is pretty new, and Google doesn&#8217;t help very much with finding the solution.

In my case, I discovered that if I restarted VirtualBox things will be working again.

<pre>sudo /Library/StartupItems/VirtualBox/VirtualBox restart</pre>

So this is not strictly related to Vagrant itself, rather to the VirtualBox provider I was using.

 [1]: http://www.apple.com/osx/whats-new/ "OSX 10.9 Mavericks "
 [2]: http://mac.appstorm.net/reviews/os-x-reviews/everything-you-need-to-know-about-os-x-mavericks/ "extended details on what is available in OSX 10.9 Mavericks"
 [3]: https://www.virtualbox.org "VirtualBox homepage"
 [4]: https://www.vagrantup.com "Vagrant homepage"
 [5]: http://puppetlabs.com "Puppet Labs homepage"