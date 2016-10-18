---
title: Premature Optimization with Ilia Alshanetsky @ Dutch PHP Conference | Notes
author: Georgiana
layout: post
permalink: news/premature-optimization-with-ilia-alshanetsky-dutch-php-conference-notes/
ratings_users:
  - 0
ratings_score:
  - 0
ratings_average:
  - 0
categories:
  - News
---
-> demonstrate the user concept with an imperfect solution that does the job, optimize along the way  
-> tune the right portions of the application, not over-engineer from the very beginning  
&#8212;> scale the scope to the nature of the problem

-> simplify  
&#8212;> less code does not mean that it&#8217;s faster  
&#8212;> PHP doubled the # of LOC in a few years but it&#8217;s faster, not slower <img src="http://i2.wp.com/www.tekkie.ro/wp-includes/images/smilies/simple-smile.png?w=700" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" data-recalc-dims="1" />

-> hardware [HW]  
&#8212;> since it&#8217;s cheaper, maybe throwing HW at it this might get it faster & buy you time to find the solution to the problem  
&#8212;> SW development time to optimize might be more expensive  
&#8212;> CPU bottlenecks & RAM issues are easier to solve lately  
&#8212;> drives, the well-known bottleneck, have also received SSD [measurements show it&#8217;s a lot better]

-> HW caveat  
&#8212;> might only temporarily solve issues  
&#8212;> DB saturation  
&#8212;> non-scalable code [this is NOT the same as high-performing code]  
&#8212;> network bottlenecks [latency]  
&#8212;> extremely low # of sessions per server [Smarty: 50 reqs/sec]

-> optimization  
&#8212;> start by trying to make the code faster without modifying a LOC [this way you avoid introducing new bugs & QA cycle, easier deployment]

-> how PHP works in 30 secs  
&#8212;> each require/include triggers compile+execute  
&#8212;> compilation is expensive  
&#8212;> opcode cache [if the file is not changed, you get it from the cache]  
&#8212;> APC vs Zend&#8217;s solution vs X-Cache

-> in-memory cache  
&#8212;> do the PHP sessions in memcache instead of filesystem

-> ways of caching data  
&#8212;> complete page [caching proxy, e.g. Squid; pre-generate; on-demand]  
&#8212;> cache the parts that are really slowing down the page [example using memcache for SQL results caching]  
&#8212;> partial caching of code [example using memcache for results of a function call; cache TTL of 1h]

-> output buffering  
&#8212;> Apache&#8217;s SendBufferSize should be the same as PageSize  
&#8212;> tcp_wmem | affects everything on tcp-ip  
&#8212;> tcp_mem |

-> use profiling to understand the real bottleneck in the code, without the &#8220;educated assumptions&#8221;  
&#8212;> Xdebug & XHProf [last one comes from Facebook]  
&#8212;> Kcachegrind

-> code that generates notices / errors is slowed down by them, because resources are allocated for them, even if you don&#8217;t see them
