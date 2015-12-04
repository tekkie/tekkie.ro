---
title: Easy Setup of Sencha Command on Your Mac
author: Georgiana
layout: post
permalink: /news/easy-setup-of-sencha-command-on-your-mac/
ratings_users:
  - 0
ratings_score:
  - 0
ratings_average:
  - 0
categories:
  - Mobile development
  - News
---
<p style="text-align: justify;">
  <strong>Prerequisite</strong>: If you haven&#8217;t done this already, <a title="Easy Setup of Sencha Touch SDK on Your Mac" href="http://www.tekkie.ro/mobile-development/easy-setup-of-sencha-touch-sdk-on-your-mac/">setup Sencha Touch SDK</a>.
</p>

<p style="text-align: justify;">
  <strong>Step 1</strong>: Download Sencha Cmd from the <a title="download latest Sencha Cmd" href="http://www.sencha.com/products/sencha-cmd/download">dedicated page</a>.
</p>

<p style="text-align: center;">
  <a href="http://i2.wp.com/www.tekkie.ro/wp-content/uploads/2013/02/download-sencha-cmd.png"><img class="aligncenter size-medium wp-image-350" title="download-sencha-cmd" src="http://i2.wp.com/www.tekkie.ro/wp-content/uploads/2013/02/download-sencha-cmd-300x205.png?fit=300%2C205" alt="Download latest Sencha Cmd from the sencha.com website" data-recalc-dims="1" /></a>
</p>

<p style="text-align: justify;">
  &nbsp;
</p>

<p style="text-align: justify;">
  <strong>Step 2</strong>: Move the archive to a working folder. I used <code>~/Documents/Work/learn/sencha</code>.
</p>

<p style="text-align: justify;">
  <strong>Step 3</strong>: Unpack SenchaCmd-3.0.2.288-osx.app.zip by double-clicking it. You should find the installer in your working directory, like in the picture below.
</p>

<p style="text-align: justify;">
  <a href="http://i0.wp.com/www.tekkie.ro/wp-content/uploads/2013/02/sencha-cmd-installer.png"><img class="aligncenter size-medium wp-image-353" title="sencha-cmd-installer" src="http://i0.wp.com/www.tekkie.ro/wp-content/uploads/2013/02/sencha-cmd-installer-300x221.png?fit=300%2C221" alt="" data-recalc-dims="1" /></a>
</p>

**Step 4**: Launch the setup by double-clicking the installer. Proceed to the next step. Accept the license agreement and click Next once more.

[<img class="aligncenter size-medium wp-image-354" title="sencha-cmd-installation-directory" src="http://i1.wp.com/www.tekkie.ro/wp-content/uploads/2013/02/sencha-cmd-installation-directory-300x228.png?fit=300%2C228" alt="" data-recalc-dims="1" />][1]  
Make a note of the installation folder you choose in this step. I used `/Users/g/bin`. Proceed to the end of the wizard and click Finish.

**Step 5**: Verify that everything went okay. This is achieved from the command-line, by [navigating to the SDK setup folder][2] and launching the `sencha` command.

[<img class="aligncenter size-medium wp-image-359" title="verify-sencha-command" src="http://i1.wp.com/www.tekkie.ro/wp-content/uploads/2013/02/verify-sencha-command-300x221.png?fit=300%2C221" alt="" data-recalc-dims="1" />][3]

Note 1: The Sencha Cmd installer automatically adds its dependencies to the .bashrc settings file. if your favorite shell is not bash, you need to perform an extra-step before the verification works. If you&#8217;re a zsh user like me, at the end of your .zshrc file you need to add 2 lines to make this work.

[<img class="aligncenter size-full wp-image-360" title="zshrc path additions" src="http://i2.wp.com/www.tekkie.ro/wp-content/uploads/2013/02/zshrc.png?fit=525%2C129" alt="" data-recalc-dims="1" />][4]`<br />
export PATH=/Users/g/bin/Sencha/Cmd/3.0.2.288:$PATH<br />
export SENCHA_CMD_3_0_0="/Users/g/bin/Sencha/Cmd/3.0.2.288"`

Don&#8217;t forget to reload the settings file:

`. ~/.zshrc`

Note 2: If you had previous versions of Sencha installed, it&#8217;s a good time to cleanup your .bashrc (or .zshrc) file from those occurrences.

 [1]: http://i1.wp.com/www.tekkie.ro/wp-content/uploads/2013/02/sencha-cmd-installation-directory.png
 [2]: http://www.tekkie.ro/mobile-development/easy-setup-of-sencha-touch-sdk-on-your-mac/ "Easy Setup of Sencha Touch SDK on Your Mac"
 [3]: http://i2.wp.com/www.tekkie.ro/wp-content/uploads/2013/02/verify-sencha-command.png
 [4]: http://i2.wp.com/www.tekkie.ro/wp-content/uploads/2013/02/zshrc.png