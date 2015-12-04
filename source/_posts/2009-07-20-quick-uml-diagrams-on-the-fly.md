---
title: Quick UML diagrams, on the fly
author: Georgiana
layout: post
permalink: /quick-n-dirty/quick-uml-diagrams-on-the-fly/
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
  1. You go to the [yUml site][1] and throw some data in the text box offered
  2. Press &#8220;Generate the Diagram!&#8221;
  3. Voila!

And here&#8217;s an example, as well:

[sourcecode]

http://yuml.me/diagram/scruffy;scale:60/usecase/[Admin]^[User Free], [Admin]^[User Premium], [Admin]-(note: Most privileged user), [User Free]-(note: No costs), [User Premium]-(note: Monthly subscription), [User Free]-(Login), [User Free]-(Logout) , [User Premium]-(Login), [User Premium]-(Logout) , (Login)<(Reminder) , (Login)>(Captcha).

[/sourcecode]

![example][2]

[See it in action.][3]

 [1]: http://yuml.me/diagram/scruffy/usecase/draw
 [2]: http://yuml.me/diagram/scruffy;scale:60/usecase/[Admin]^[User Free], [Admin]^[User Premium], [Admin]-(note: Most privileged user), [User Free]-(note: No costs), [User Premium]-(note: Monthly subscription), [User Free]-(Login), [User Free]-(Logout) , [User Premium]-(Login), [User Premium]-(Logout) , (Login)<(Reminder) , (Login)>(Captcha).
 [3]: http://yuml.me/diagram/scruffy/usecase/[Admin]^[User Free], [Admin]^[User Premium], [Admin]-(note: Most privileged user), [User Free]-(note: No costs), [User Premium]-(note: Monthly subscription), [User Free]-(Login), [User Free]-(Logout) , [User Premium]-(Login), [User Premium]-(Logout) , (Login)<(Reminder) , (Login)>(Captcha).