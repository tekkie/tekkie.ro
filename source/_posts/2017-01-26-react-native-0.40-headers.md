---
title: Support React Native 0.40 iOS Headers
author: Georgiana Gligor
layout: post
permalink: quick-n-dirty/support-react-native-0.40-ios-headers/
excerpt: React Native 0.40 introduces a breaking change for iOS. Find out how to mitigate this in your current projects.
categories:
  - Quick and dirty
tags:
  - React Native
  - npm
---


## Symptoms

A [lot][err-react-native] of [people][err-sqlite-storage] have been [complaining][err-navigation] lately about errors like
```css
Duplicate interface definition for class 'RTCBridge'
```

or

```css
Property has a previous declaration
```

## React Native 0.40 iOS Breaking Change

All iOS native libraries out there are suffering from a [breaking change introduced in version 0.40](https://github.com/facebook/react-native/releases/tag/v0.40.0), by requiring that all header includes be [properly namespaced](https://github.com/facebook/react-native/commit/e1577df1fd70049ce7f288f91f6e2b18d512ff4d). If previously you had code like
```objectivec
#import "RCTBridgeModule.h"
```
and you get build errors, you must change your library's code to
```objectivec
#import <React/RCTBridgeModule.h>
```

## Approach

Since these problems are not in our project, but in third-party libraries, 
the solution seems outside our control. I will detail below the strategy 
we adopted in our current project. It's mostly a manual process, so be careful 
and don't miss any steps.

#### 1. Check if your dependency already implemented the fix

Our first problem was [`react-native-sqlite-storage`][src-sqlite-storage], and 
we were happy to find that they already merged a pull request to fix the problem:

![](/images/2017-01-26-react-native/react-native-sqlite-storage.jpg){.ui .fluid .image}

But, unfortunately, it was not part of a stable release,

![](/images/2017-01-26-react-native/react-native-sqlite-storage-unstable.jpg){.ui .fluid .image}

So we had to point our dependency to the `master` branch (typically considered 
unstable) until a new stable release would be issued. This meant editing `package.json` 
and looking for the line that said:
```js
{
  "dependencies": {
    // ...
    "react-native-sqlite-storage": "^3.1.3",
    // ...
  }
}
```

We replaced it with a reference to the `master` branch of the author:
```js
{
  "dependencies": {
    // ...
    "react-native-sqlite-storage": "git+https://github.com/andpor/react-native-sqlite-storage.git",
    // ...
  }
}
```

#### 2. Libraries that don't have the fix yet in the main repo

The second scenario was the one where someone has implemented a fix that has not yet been merged by the library author, in our case `react-native-orientation` [pull request #146][src-orientation].

We [carefully checked][src-orientation-compare] that the only difference between the fork and master library was the namespace fix. It is important to perform this verification, as the forked code might contain other improvements specific to the author's needs, which we didn't want.

We decided `jedt`'s fork was good for our needs, so we took the chance and used the same `package.json` dependency definition trick, this time updating `"react-native-orientation": "^1.17.0"` with `"react-native-orientation": "git+https://github.com/jedt/react-native-orientation.git"`. 

#### 3. Libraries that have no fix in place

This was our chance to help the community out. For [`react-native-youtube`][src-youtube] there was no fix in sight, so we took the problem in our hands and created the fix ourselves by:

- forking the repo,
- implementing the change, 
- testing locally,
- pushing the code to our fork,
- [opening pull request #104][src-youtube-our-fix] for others to benefit as well.

Then, in our local `package.json` we replaced `"react-native-youtube": "^0.8.0"` with `"react-native-youtube": "git+https://github.com/georgiana-gligor/react-native-youtube.git"`.

## Caution

Using non-released versions of code will solve the problem in the short term, and will let you continue working on solving your business need. We strongly advise you to add a task in your task tracker to periodically go and check the dependencies latest version, and once the fixes make it into a stable version, use that in `package.json`.

[err-react-native]: https://github.com/facebook/react-native/issues/11725
[err-navigation]: https://github.com/wix/react-native-navigation/issues/662
[err-sqlite-storage]: https://github.com/andpor/react-native-sqlite-storage/issues/119
[src-sqlite-storage]:  https://github.com/andpor/react-native-sqlite-storage
[src-orientation]: https://github.com/yamill/react-native-orientation/pull/146
[src-orientation-compare]: https://github.com/yamill/react-native-orientation/compare/master...jedt:master?expand=1
[src-youtube]: https://github.com/inProgress-team/react-native-youtube
[src-youtube-our-fix]: https://github.com/inProgress-team/react-native-youtube/pull/104
