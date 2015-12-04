---
title: Create PDF files from Markdown sources in OSX
author: Georgiana
excerpt: For technical people, writing is easier in markdown. To pass the results around to other people, less technical, a markdown source file and a bunch of images is not the best approach, so converting it to a more robust format like PDF seems like a much better choice. The present article details how to easily assemble a solution for this using Pandoc and Mactex.
layout: post
permalink: blog/blogging/create-pdf-files-from-markdown-sources-in-osx/
categories:
  - Blogging
  - Mac OSX
  - Software
tags:
  - mactex
  - OSX
  - pandoc
  - pdf
  - write
---
# Create PDF files from Markdown sources in OSX

When [Markdown][1] appeared more than 10 years ago, it aimed to make it easier to express ideas in an easy-to-write plain text format. It offers a simple syntax that takes the writer focus away from the formatting, thus giving her time to focus on the actual content.

The market abunds of editors to be used for help with markdown. After a few attempts, I settled to Sublime and its browser preview plugin, which work great for me and have a small memory footprint to accomplish that. To pass the results around to other people, less technical, a markdown file and a bunch of images is not the best approach, so converting it to a more robust format like PDF seems like a much better choice.

[Pandoc][2] is the swiss-army knife of converting documents between various formats. While being able to deal with heavy-weight formats like docx and epub, we will need it for the more lightweight markdown. To be able to generate PDF files, we need LaTeX. On OSX, the solution of choice is usually [MacTeX][3].

## Setup Pandoc for document conversion

Choose the easy `brew` way:

`$ brew update<br />
$ brew install pandoc`

If the above solution is not working, the alternative is to take the `cabal` route:

`$ brew install ghc cabal-install<br />
$ cabal update<br />
$ cabal install pandoc`

For those interested, the [install page][4] covers each aspect in more depth.

## Setup Mactex for PDF generation

`$ brew tap phinze/cask<br />
$ brew install brew-cask<br />
$ brew cask install mactex`

## Generating PDF files

We will use the current article as the example we want to export as PDF. The markdown source is [available as a gist][5].

When trying the output command from the pandoc documentation, we notice there is a problem, as it can&#8217;t find `pdflatex`.

`$ pandoc -o out.pdf osx-pdf-from-markdown.markdown<br />
pandoc: pdflatex not found. pdflatex is needed for pdf output.`

Let&#8217;s check it&#8217;s been properly installed and symlink it correctly.

`$ ls -lsa /usr/texbin/pdflatex<br />
$ sudo ln -s /usr/texbin/pdflatex /usr/local/bin/`

Re-running the output command works correctly and gives us a shiny new PDF file.

`$ pandoc -o out.pdf osx-pdf-from-markdown.markdown`

 [1]: http://daringfireball.net/projects/markdown/
 [2]: http://pandoc.org/index.html
 [3]: https://tug.org/mactex/
 [4]: http://pandoc.org/installing.html
 [5]: https://gist.github.com/georgiana-gligor/fd247d02f8a44ce745db
