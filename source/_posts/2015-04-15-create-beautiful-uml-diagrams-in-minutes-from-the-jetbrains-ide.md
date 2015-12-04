---
title: Create Beautiful UML Diagrams in Minutes from the JetBrains IDE
author: Georgiana
excerpt: |
  A few days ago I needed to assemble together several disparate pieces of information about the current project. Our technology stack is complex, and people have different backgrounds, so I realised that a visual representation in UML would be the best fit.
  The current article details how to prepare a working environment using Graphviz and PlantUML in PHPStorm, then goes through the process of creating a simple sequence diagram to use them.
layout: post
permalink: blog/processes/create-beautiful-uml-diagrams-in-minutes-from-the-jetbrains-ide/
categories:
  - Processes
tags:
  - Graphviz
  - OSX
  - Software development processes
  - UML
---
A few days ago I needed to assemble together several disparate pieces of information about the current project. Our technology stack is complex, and people have different backgrounds, so I realised that a visual representation in UML would be the best fit.  
The current article details how to prepare a working environment using Graphviz and PlantUML in PHPStorm, then goes through the process of creating a simple sequence diagram to use them.

## Diagrams: the &#8220;why&#8221; and the &#8220;how&#8221;

Created by the Object Management Group, [UML][1] is the de-facto standard design language in the software community. If you are not familiar with it, or just need a quick refresher, [this article on the developerWorks website][2] is very good.

As I tried a couple of [online][3] [services][4], it became increasingly clear that they were not fit for my complex set of interacting components. I then turned to my favorite diagramming, tool [Graphviz][5]. It turned out there was no straightforward editor on top of it to do sequence diagrams. Luckily, I pretty quickly found PlantUML, which uses Graphviz for all it diagrams but sequence ones. I was impressed by the amount of [integrations it offers][6] so I decided to give it a try, and was amazed with the speed of which I produced the end result.

In the next sections we&#8217;ll learn how to get our environment up and running, and then draw a quick example sequence diagram.

## Setup

### Prerequisite

Installing Graphviz using brew worked perfectly for me.  
`<br />
$ brew install graphviz<br />
`  
If you prefer an alternate method, you can [download the package][7] instead.

### PlantUML

Internally, our company uses PHPStorm as an IDE for developing PHP code, and IntelliJ idea for the Java bits. I will present details for the PHPStorm users, but the steps should be easy to replicate in other IDEs of the same vendor.

Let&#8217;s open the preferences and start looking for new plugins.

[<img class="ngg-singlepic ngg-none" src="http://i0.wp.com/www.tekkie.ro/wp-content/gallery/plant-uml/thumbs/thumbs_01-phpstorm-plugins.png?w=700" alt="01-phpstorm-plugins" data-recalc-dims="1" />][8]{.thickbox}

We need to search for &#8220;PlantUML&#8221; and install it.

[<img class="ngg-singlepic ngg-none" src="http://i0.wp.com/www.tekkie.ro/wp-content/gallery/plant-uml/thumbs/thumbs_02-phpstorm-install-plantumlintegration.png?w=700" alt="02-phpstorm-install-plantumlintegration" data-recalc-dims="1" />][9]{.thickbox}

After restarting the IDE, we notice there are new filetypes available for us to create:

[<img class="ngg-singlepic ngg-none" src="http://i1.wp.com/www.tekkie.ro/wp-content/gallery/plant-uml/thumbs/thumbs_03-phpstorm-newfiletypes.png?w=700" alt="03-phpstorm-newfiletypes" data-recalc-dims="1" />][10]{.thickbox}

## Sequence Diagram example

Let&#8217;s create a new UML Sequence diagram, named &#8220;demo&#8221;. Notice how the `.puml` extension was automatically added.

[<img class="ngg-singlepic ngg-none" src="http://i1.wp.com/www.tekkie.ro/wp-content/gallery/plant-uml/thumbs/thumbs_04-phpstorm-newumlsequence.png?w=700" alt="04-phpstorm-newumlsequence" data-recalc-dims="1" />][11]{.thickbox}

The diagram I actually needed to produce is very heavy, and not fit for the purpose of this quick introduction. Then I remembered checking the Clean Coders Yahoo group the other day, and found [some Ruby sourcecode][12] they were talking about. I thought it would be a good example to try our new diagram superpowers on, as it&#8217;s short.

The first step is to define the participants in our diagram. It&#8217;s easier to list them all in the beginning, because this way we can choose the order in which they appear.

[<img class="ngg-singlepic ngg-none" src="http://i0.wp.com/www.tekkie.ro/wp-content/gallery/plant-uml/thumbs/thumbs_05-defineparticipants.png?w=700" alt="05-defineparticipants" data-recalc-dims="1" />][13]{.thickbox}

We will now add the sequence of events. The PlantUML website has a great [page on the various options available][14], so make sure to check it out.

[<img class="ngg-singlepic ngg-none" src="http://i1.wp.com/www.tekkie.ro/wp-content/gallery/plant-uml/thumbs/thumbs_06-describesequence.png?w=700" alt="06-describesequence" data-recalc-dims="1" />][15]{.thickbox}

The stock look and feel is nice and gets us far. I however felt the need to prettify the end result by introducing some nice formatting options. The [manual page for the `skinparam` command][16] is very helpful.

[<img class="ngg-singlepic ngg-none" src="http://i1.wp.com/www.tekkie.ro/wp-content/gallery/plant-uml/thumbs/thumbs_07-nicelyformatted.png?w=700" alt="07-nicelyformatted" data-recalc-dims="1" />][17]{.thickbox}

## Conclusion

After installing Graphviz and PlantUML extension for PHPStorm, we were able to produce a sequence diagram in a few minutes. You can take a look at the [final version of the code][18] as we obtained it. The advantage of having these tools available straight from the IDE is that the diagrams can be part of the project code, and be managed together.

 [1]: http://uml.org
 [2]: http://www.ibm.com/developerworks/rational/library/769.html
 [3]: https://www.websequencediagrams.com/
 [4]: http://www.yuml.me/
 [5]: http://www.graphviz.org
 [6]: http://www.plantuml.com/running.html
 [7]: http://www.graphviz.org/Download_macos.php
 [8]: http://i0.wp.com/www.tekkie.ro/wp-content/gallery/plant-uml/01-phpstorm-plugins.png
 [9]: http://i1.wp.com/www.tekkie.ro/wp-content/gallery/plant-uml/02-phpstorm-install-plantumlintegration.png
 [10]: http://i2.wp.com/www.tekkie.ro/wp-content/gallery/plant-uml/03-phpstorm-newfiletypes.png
 [11]: http://i1.wp.com/www.tekkie.ro/wp-content/gallery/plant-uml/04-phpstorm-newumlsequence.png
 [12]: https://gist.github.com/nicholasjhenry/ac1405dd6ffba10089b7
 [13]: http://i0.wp.com/www.tekkie.ro/wp-content/gallery/plant-uml/05-defineparticipants.png
 [14]: http://www.plantuml.com/sequence.html
 [15]: http://i0.wp.com/www.tekkie.ro/wp-content/gallery/plant-uml/06-describesequence.png
 [16]: http://www.plantuml.com/skinparam.html
 [17]: http://i0.wp.com/www.tekkie.ro/wp-content/gallery/plant-uml/07-nicelyformatted.png
 [18]: https://gist.github.com/georgiana-gligor/e7f34c232e63b770988f#file-demo-03-final-puml
