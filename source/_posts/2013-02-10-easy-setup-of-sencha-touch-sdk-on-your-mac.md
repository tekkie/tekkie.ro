---
title: Easy Setup of Sencha Touch SDK on Your Mac
author: Georgiana
excerpt: Detailed instructions on how to setup the sencha touch SDK on an OSX-based development machine.
layout: post
permalink: /mobile-development/easy-setup-of-sencha-touch-sdk-on-your-mac/
ratings_users:
  - 0
ratings_score:
  - 0
ratings_average:
  - 0
categories:
  - Mobile development
tags:
  - install
  - Sencha
  - Sencha SDK
  - Sencha Touch
---
**Step 1**: Go to the [download page of the Sencha Touch product][1].

In the Free Commercial Version form, enter your email address and click the Download button.

At the time of this writing, the latest stable SDK version is 2.1.1, which you will find referenced in the paragraphs below.

**Step 2**: Click the download link in your email. This will open a browser window and start the sdk download process. The result should be a `sencha-touch-2.1.1-commercial.zip` file in your `Downloads` folder.

**Step 3**: Move the sdk archive to a working folder. I used `~/Documents/learn/sencha/sencha-touch-2.1.1-commercial.zip` as the final destination.

**Step 4**: Unarchive the sdk. This should create a folder `~/Documents/learn/sencha/touch-2.1.1` on your machine.

That&#8217;s it!

Now, when you see instructions on the Sencha documentation that look like  
`<br />
#  Make sure the current working directory is the Sencha Touch 2 SDK<br />
cd /path/to/sencha-touch-2-sdk<br />
`

you will need to do use the path obtained in step 4 above. In my case, this means:  
`cd ~/Documents/learn/sencha/touch-2.1.1`

 [1]: http://www.sencha.com/products/touch/download/ "download sencha touch"