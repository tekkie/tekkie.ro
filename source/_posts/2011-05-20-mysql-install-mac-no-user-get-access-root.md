---
title: MySQL install on Mac creates no user, how to get access as root
author: Georgiana
layout: post
permalink: blog/quick-n-dirty/mysql-install-mac-no-user-get-access-root/
ratings_users:
  - 0
ratings_score:
  - 0
ratings_average:
  - 0
categories:
  - Computer setup
  - Quick and dirty
---
So, you installed mySql on your Mac and there&#8217;s no way to work with it, create DBs, and do any other task you need because it has no privileges?

You may either not be able to connect at all (even mysql -u root fails in your case) or you can connect, but your command-line mysql tells you something like:  
`<br />
mysql> use information_schema<br />
Database changed<br />
mysql> select * from USER_PRIVILEGES;<br />
+----------------+---------------+----------------+--------------+<br />
| GRANTEE        | TABLE_CATALOG | PRIVILEGE_TYPE | IS_GRANTABLE |<br />
+----------------+---------------+----------------+--------------+<br />
| ''@'localhost' | def           | USAGE          | NO           |<br />
+----------------+---------------+----------------+--------------+<br />
1 row in set (0.00 sec)`

` `

Let&#8217;s see what we can do to fix that and get you working on more important things.

1. If the mysqld server is already running on your Mac, stop it first with:

`launchctl unload -w ~/Library/LaunchAgents/com.mysql.mysqld.plist`

2. Start the mysqld server with the following command which lets anyone log in with full permissions.

`mysqld_safe --skip-grant-tables`

3. Run `mysql -u root` to log in successfully without a password.

4. Reset all the root passwords. Make sure to replace &#8216;NewPassword&#8217; with something more secure.

`UPDATE mysql.user SET Password=PASSWORD('NewPassword') WHERE User='root'; FLUSH PRIVILEGES;`

5. Because writing your scripts with root access is not a good practice, make yourself a favor and create a new user now, using a command like  
`grant all on *.* to 'your_username_here'@'localhost' identified by 'your_favorite_password_here';<br />
`  
6. Kill the running copy of mysqld_safe. `sudo killall -9 mysqld` Phew.

7. Start mysql again without the skip-grant-tables option:

8. You should be able to log in with `mysql -u root -p` and the new password you just set and also with the user that you created before.

That was simple, wasn&#8217;t it?
