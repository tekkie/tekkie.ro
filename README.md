Tekkie Consulting public-facing website
=======================================

The public-facing website and blog of [Tekkie Consulting](http://tekkie.ro).

Powered by [Sculpin](http://sculpin.io).

## Develop

### Basic workflow
```bash
$ vendor install
$ vendor/bin/sculpin generate --watch --server --port=12345
```
The development environment is accessible at [`http://localhost:12345/`](http://localhost:12345/).

### Extra workflow

```bash
$ vendor/bin/sculpin generate --watch --server --url=http://localhost:12345 --port=12345
```

The style is now SASS, so you need to
```bash
$ cd source/themes/tekkie/tekkie/assets/css
$ sass --watch style.scss:style.css
```
