---
title: QQA in Software Projects with Sebastian Bergmann @ Dutch PHP Conference | Part 2 | Notes
author: Georgiana
layout: post
permalink: testing/qqa-in-software-projects-with-sebastian-bergmann-dutch-php-conference-part-2-notes/
ratings_users:
  - 0
ratings_score:
  - 0
ratings_average:
  - 0
categories:
  - testing
tags:
  - PHPUnit
  - Sebastian Bergmann
  - testing
---
-> Continuous Integration  
&#8212;> build automation [write build script to get latest code version; run tools to detect problems; run unit tests & publish these results; package; deploy]  
&#8212;> summary of the tools enumerated below can be found in this presentation: http://www.slideshare.net/sebastian_bergmann/continuous-integration-of-php-projects-4354597

-> static code analysis  
&#8212;> LOC [= lines of code] metric  
&#8212;> CLOC [= comment LOC]  
&#8212;> NCLOC [= non-comment LOC]  
&#8212;> ELOC [= executable LOC]  
&#8212;> welcome to phploc [ <http://github.com/sebastianbergmann/phploc> ]  
&#8212;> demo phploc directly on PHPUnit

-> code duplication  
&#8212;> totally identical LOC  
&#8212;> phptok some_file.php  
&#8212;> phpcpd /path/to/your/project [ the [copy/paste detector][1] >:) ]

-> code complexity  
&#8212;> cyclomatic complexity [count the # of branching points]  
&#8212;> NPath complexity [count the # of possible execution paths]

-> phpcs  
&#8212;> the code sniffer <img src="http://i2.wp.com/www.tekkie.ro/wp-includes/images/smilies/simple-smile.png?w=700" alt=":-)" class="wp-smiley" style="height: 1em; max-height: 1em;" data-recalc-dims="1" />  
&#8212;> start here: <http://github.com/sebastianbergmann/phpcs-sebastian>  
&#8212;> allows for defining own sniffs; [demo sniff list][2]

-> pdepend  
&#8212;> static analysis of PHP code  
&#8212;> helps identify parts of app. which should be refactored

-> build automation tools  
&#8212;> ant, make, phing, rake  
&#8212;> delve a bit into ant features  
&#8212;> small ant config to pull from git, run phpunit, run some of the static code analysis tools in parallel  
&#8212;> demo ant run for an [existing project][3], and get a glimpse at the reports of the static code analysis tools output

-> continuous integration server options  
&#8212;> phpUnderControl: customized CruiseControl  
&#8212;> Hudson [Java-based, open-source]  
&#8212;> Bamboo -> the Atlassian way of doing it, still Java-based  
&#8212;> Arbit -> an alpha release, PHP-based solution  
&#8212;> demo: <http://ci.thephp.cc/>

 [1]: http://github.com/sebastianbergmann/phpcpd
 [2]: http://github.com/sebastianbergmann/phpcs-sebastian/blob/master/SebastianCodingStandard.php
 [3]: http://github.com/sebastianbergmann/php-object-freezer
