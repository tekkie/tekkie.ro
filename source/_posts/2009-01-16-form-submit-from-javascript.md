---
title: Form submit from JavaScript
author: Georgiana
layout: post
permalink: /news/form-submit-from-javascript/
ratings_users:
  - 0
ratings_score:
  - 0
ratings_average:
  - 0
categories:
  - News
tags:
  - JavaScript
  - quickies
---
Be careful: if you want to submit a form from Javascript using something like

[sourcecode language=&#8217;javascript&#8217;]  
this.form.submit();  
[/sourcecode]

or

[sourcecode language=&#8217;javascript&#8217;]  
document.forms[ myFormName ].submit();  
[/sourcecode]

and it gives you a nasty error like

[sourcecode language=&#8217;javascript&#8217;]  
submit is not a function  
[/sourcecode]

don&#8217;t despair, just:

  * look at the HTML source code:  
    [sourcecode language=&#8217;html&#8217;]  
    <input id="submit" name="submit" value="Send to developer" type="submit" />  
    [/sourcecode]
  * change the name of the button to something else, like:  
    [sourcecode language=&#8217;html&#8217;]  
    <input id="mySubmitButton" name="mySubmitButton" value="Send to developer" type="submit" />  
    [/sourcecode] 

That&#8217;s all!

Now the explanation: the browser confuses your `submit();` call with the button object, which has no such action.

The browser acted just like you were explicitly calling

[sourcecode language=&#8217;javascript&#8217;]  
button = document.getElementById( &#8216;submit&#8217; );  
button.submit();  
[/sourcecode]