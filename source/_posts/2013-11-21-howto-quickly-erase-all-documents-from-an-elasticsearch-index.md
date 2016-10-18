---
title: HowTo Quickly Erase All Documents from an ElasticSearch Index
author: Georgiana
layout: post
permalink: quick-n-dirty/howto-quickly-erase-all-documents-from-an-elasticsearch-index/
categories:
  - Quick and dirty
tags:
  - elasticsearch
---
Let&#8217;s say you are locally developing things using the amazing ElasticSearch technology, and would like to quickly wipe out all documents from a specific index.

Assuming you have ES installed on `localhost`, and the index name is `playground`, here&#8217;s how you would do it:

`curl -XDELETE 'http://localhost:9200/playground/?pretty=true'`

And the index is now empty, waiting for test data!
