--
-- count distinct.sql
-- We want to find out the distinct values from column `title`, and also the number of times they occur
--
-- @author Georgiana Beju <http://www.tekkie.ro/> <gb@tekkie.ro>
--


-- Step #1: prepare the ground
CREATE DATABASE IF NOT EXISTS `test`;

DROP TABLE IF EXISTS `test`.`test_count_distinct`;

CREATE TABLE `test`.`test_count_distinct` (
	`id`    INT(11) NOT NULL auto_increment PRIMARY KEY,
	`title` VARCHAR(50) NOT NULL DEFAULT '',
	`date_created` TIMESTAMP NOT NULL DEFAULT 0,
	`date_updated` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
                                          ON UPDATE CURRENT_TIMESTAMP
);

-- using NULL insert for a timestamp column is just like using NOW()
-- @link http://dev.mysql.com/doc/refman/4.1/en/timestamp.html
INSERT INTO `test`.`test_count_distinct` ( `title`, `date_created` )
VALUES
  ( 'value',   NULL )
, ( 'value 1', NULL )
, ( 'value 2', NULL )
, ( 'value',   NULL )
, ( 'value 1', NULL )
, ( 'value 2', NULL )
, ( 'value',   NULL )
, ( 'value 3', NULL )
;

-- Step #2: do work
--          here is where we find out different values of `title` and the number of their occurrences
SELECT DISTINCT `t`.`title` AS `title`, COUNT( `t`.`title`) AS `cnt` 
    FROM `test`.`test_count_distinct` t 
    GROUP BY `title`
    ORDER BY `cnt` DESC
;