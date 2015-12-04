---
title: QA in Software Projects with Sebastian Bergmann @ Dutch PHP Conference | Part 1 | Notes
author: Georgiana
layout: post
permalink: /testing/qa-in-software-projects-with-sebastian-bergmann-dutch-php-conference-part-1-notes/
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
-> what is SW quality?  
-> the BankAccount example  
&#8212;> PHPUnit 3.4.12 is used for these examples  
&#8212;> CLI run using phpunit BankAccountTest  
&#8212;> phpunit &#8211;testdox BankAccountTest &#8212;> used for instance to present functionality summary before the actual coding  
&#8212;> setUp()  
&#8212;> Q&A &#8212;> use @expectedException annotation instead of the try/catch block inside the method body  
&#8212;> Q&A &#8212;> use 1 test method for each test, not stuff everything in 1 method  
&#8212;> PHPUnit 4 might use the traits feature of PHP, as opposed to the JUnit approach

-> organizing tests  
&#8212;> tree structure, mirroring the actual code organization  
&#8212;> using group annotation you can run only specific tests  
&#8212;> phpunit &#8211;filter testFreezingAnObjectWorks Tests [ excludes a specific slow test ]

-> automated bugfixes project  
&#8212;> write a test to repro the bug  
&#8212;> use genetic programming to issue the patch that fixes the bug

-> SW testing pyramid /// Categories of (Unit) Tests  
&#8212;> bottom level: unit tests  
&#8212;> upper level: functional tests \[this is not the functional testing w/ Selenium!\] \[it&#8217;s testing blocks of functionality instead units\] [do the interfaces between classes abide their contracts?]  
&#8212;> top-level: End-to-End Test [these are the expensive ones &#8230; running a full Selenium arrangement across all browsers took more than 24h]

-> minimalistic MVC implementation  
&#8212;> used to demo unit testing for more than just the Model  
&#8212;> assertAttributeEmpty() and assertAttributeContains() work with public / private / private class members  
&#8212;> @depends is a simple way of declaring dependencies between tests  
&#8212;> sample of refactoring so that there&#8217;s no need to assertAttribute*() for protected / private members

-> PHPUnit Best Practices  
&#8212;> use an XML configuration file  
&#8212;> look inside the cwd for a phpunit.xml [fallback to phpunit.xml.dist]  
&#8212;> generate code coverage report, showing also dead code  
&#8212;> new beta thingy: code coverage distribution report + class complexity