---
title: 'mySQL: find out distinct values of a column and the number of their occurrences'
author: Georgiana
layout: post
permalink: /software/mysql-find-out-distinct-values-column-number-their-occurrences/
ratings_users:
  - 0
ratings_score:
  - 0
ratings_average:
  - 0
categories:
  - Quick and dirty
  - Software
  - testing
tags:
  - mySQL
  - quickies
---
So, we need to find out different values of a column and the number of their occurrences. Let&#8217;s set up a small test first:

[sourcecode lang=&#8221;sql&#8221;]  
&#8212; Step #1: prepare the ground  
CREATE DATABASE IF NOT EXISTS \`test\`;

DROP TABLE IF EXISTS \`test\`.\`test\_count\_distinct\`;

CREATE TABLE \`test\`.\`test\_count\_distinct\` (  
\`id\` INT(11) NOT NULL auto_increment  
PRIMARY KEY,  
\`title\` VARCHAR(50) NOT NULL DEFAULT &#8221;,  
\`date_created\` TIMESTAMP NOT NULL DEFAULT 0,  
\`date_updated\` TIMESTAMP NOT NULL  
DEFAULT CURRENT_TIMESTAMP  
ON UPDATE CURRENT_TIMESTAMP  
);

&#8212; using NULL insert for a timestamp column is  
&#8212; just like using NOW()  
&#8212; @link http://dev.mysql.com/doc/refman/4.1/en/timestamp.html  
INSERT INTO \`test\`.\`test\_count\_distinct\` ( \`title\`, \`date_created\` )  
VALUES  
( &#8216;value&#8217;, NULL )  
, ( &#8216;value 1&#8217;, NULL )  
, ( &#8216;value 2&#8217;, NULL )  
, ( &#8216;value&#8217;, NULL )  
, ( &#8216;value 1&#8217;, NULL )  
, ( &#8216;value 2&#8217;, NULL )  
, ( &#8216;value&#8217;, NULL )  
, ( &#8216;value 3&#8217;, NULL )  
;  
[/sourcecode]

Now let&#8217;s find out how many different values are there in the \`title\` column, and how many times each value occurs:

[sourcecode lang=&#8221;sql&#8221;]  
&#8212; Step #2: do work  
&#8212; here is where we find out  
&#8212; different values of \`title\` and  
&#8212; the number of their occurrences  
SELECT  
DISTINCT \`t\`.\`title\` AS \`title\`,  
COUNT( \`t\`.\`title\`) AS \`cnt\`  
FROM \`test\`.\`test\_count\_distinct\` t  
GROUP BY \`title\`  
ORDER BY \`cnt\` DESC  
;  
[/sourcecode]

And the result will look like:  
[sourcecode lang=&#8221;sql&#8221;]  
+&#8212;&#8212;&#8212;+&#8212;&#8211;+  
| title | cnt |  
+&#8212;&#8212;&#8212;+&#8212;&#8211;+  
| value | 3 |  
| value 2 | 2 |  
| value 1 | 2 |  
| value 3 | 1 |  
+&#8212;&#8212;&#8212;+&#8212;&#8211;+  
4 rows in set (0.00 sec)  
[/sourcecode]

You can get the code [here][1].

 [1]: http://www.tekkie.ro/wp-content/uploads/2009/06/count_distinct.sql "mySQL code for count distinct test"