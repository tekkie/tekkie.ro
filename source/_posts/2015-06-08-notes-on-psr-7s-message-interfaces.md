---
title: 'Notes on PSR-7&#8217;s Message Interfaces'
author: Georgiana
excerpt: 'The PHP world is currently in the middle of a revolution. As someone working with PHP for more than a decade, I could feel the earthquake that Composer brought to the community. And these days there is an even bigger one happening: the PSR-7.'
layout: post
permalink: blog/news/notes-on-psr-7s-message-interfaces/
categories:
  - News
tags:
  - PHP
  - PSR
  - symfony2
---
The PHP world is currently in the middle of a revolution. As someone working with PHP for more than a decade, I could feel the earthquake that [Composer][1] [brought][2] to the community. And these days there is an even bigger one happening: the [PSR-7][3]. HTTP abstractions have traditionally been implemented by each framework, popular or not, in an attempt to simplify the life of the developers using it. The main reason that made frameworks so popular was the fact that they allowed people to focus on writing the actual behaviour of their application, the magic bit that generates a response based on data in the incoming request. While this is great for the developers in the short term, it does lock them into using that framework on the long run.

## PSR-7: Message Interfaces

The framework interoperability group saw this problem, so they decided to work on a higher-level abstraction of the items detailed in the HTTP [message syntax and routing][4] and [semantics and content][5] RFCs, as well as the [URI syntax][6] one, and so PSR-7 was born. It focuses on supplying descriptive interfaces for the `Request` and `Response` parts, with an emphasis on using streams for handling the message bodies, in order to address critical performance issues from the very beginning. I consider this approach very powerful and highly beneficial in the long term, as it handles problematic scenarios very elegantly, at the specification level. It definitely accomplishes the goal of focusing on &#8220;practical applications and usability&#8221;.

## Middleware

The term `middleware` is part of our geek lingo for a long time, in fact it has been [in use since 1968][7], and with the advance of software development techniques it slightly shifted its meaning. In the context of PSR-7, it is used to designate &#8220;everything that happens between request and response&#8221;. It is the application specific behaviour that interprets the request, possibly enhances it, as well as act upon it. If you are not familiar with [some of the community efforts][8], I strongly encourage you to have a look at them.

Let&#8217;s go into a bit more detail with two middleware examples that you are already familiar with. When a user makes a request, it is normal that you:  
* check that his credentials are valid (authentication)  
* check he is allowed to perform the request (authorization)

Following the MVC pattern, you already have a controller in place, and a method inside it that responds to the request. A common approach is to implement both authentication and authorization inside the controller action, after it has been routed, like  

<pre>namespace Sample;

class DemoController
{
    public function action(Request $request)
    {
        // authentication check
        if (! $authenticated) {
            return new Response('Please authenticate first', 403);
        }

        // authorization step
        if (! $authorized) {
            return new Response('Not authorized', 401);
        }

        // application logic
        $results = 'results';

        return new Response($results, 200);
    }
}
</pre>

Let&#8217;s think a bit why this is not such a good idea:

  * while not impossible, it is difficult to reuse the authentication and authorization code in a different part of the application
  * testing the authorization and authentication become part of testing the action, when in fact this would better be extracted to a dedicated place
  * leads to fat controllers antipattern
  * the code is not easy to read, as it draws the reader attention from the actual application behaviour How would this be done better? By having a dedicated authentication middleware, that performs the related tasks, and is piped properly in the application execution chain. The solution is [not completely new][9], but it is now more eloquent and easier to grasp by newcomers to the codebase.

Currently available middleware implementations are:  
* [Matthew&#8217;s Stratigility][10],  
* [Paul M Jones&#8217;s Pipeline][11]  
* [Stack][12]

I encourage you to check out each of them for concrete code samples of how the middlewares can be piped, as there is a lot to learn from those codebases.

## Some conclusions

By using the abstractions of the HTTP messages, we are making one crucial step towards being framework agnostic. We can be even more granular in our implementation, and use the micro-services approach with more confidence than ever before, because we will be able to reuse it when preparing a scaled approach of our application. The benefits of PSR-7 are great, and the best proof is the large traction that we are able to see already. Symfony has [made the process of using it today a breeze][13]. Zend Framework 3 [has it on the roadmap][14] for a few months already, while Matthew [not only blogs about it][15], but also supplies [code snippets to make it as easy as possible][16] for people to understand the mechanisms. After all, there will be a lot of ways in which various bits of code will be put together and I suspect there will be a [frenzy of new frameworks][17] in the short term.

 [1]: https://getcomposer.org
 [2]: http://www.sitepoint.com/mastering-composer-tips-tricks/
 [3]: http://www.php-fig.org/psr/psr-7/
 [4]: http://tools.ietf.org/html/rfc7230
 [5]: http://tools.ietf.org/html/rfc7231
 [6]: http://tools.ietf.org/html/rfc3986
 [7]: http://ironick.typepad.com/ironick/2005/07/update_on_the_o.html
 [8]: http://stackphp.com/middlewares/
 [9]: http://www.craftitonline.com/2013/06/departing-from-symfony2-into-stackphp-middlewares-part-i-series/
 [10]: https://github.com/zendframework/zend-stratigility
 [11]: http://pipelinephp.github.io
 [12]: http://stackphp.com/
 [13]: http://symfony.com/blog/psr-7-support-in-symfony-is-here
 [14]: http://framework.zend.com/blog/announcing-the-zend-framework-3-roadmap.html
 [15]: https://mwop.net/blog/2015-01-08-on-http-middleware-and-psr-7.html
 [16]: https://github.com/phly/psr7examples
 [17]: http://www.slideshare.net/corleycloud/middleware-php-a-simple-microframework
