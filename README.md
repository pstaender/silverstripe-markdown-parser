# Markdown Parser for SilverStripe 2+

Markdown parsing in SilverStripe templates.

## Requirements

 * Silverstripe 2 or newer

## Installation

Install with composer:

```sh
  $ composer require pstaender/silverstripe-markdown-parser dev-master
```

… or download / clone the repository into your silverstripe project.

Finally flush the silverstripe cache via `/?flush=all` for the changes to take effect.

## Usage

Now you can convert any DataObject strings to html with the markdown parser:

```html
  <h1>$Title</h1>
  <section>
    $Content.Parse(Markdown)
  </section>
```

## Use extra markdown options

To use extended support of markdown you can switch the flag `useExtraMarkdown` in your `config.yml` (it's deactivated by default):

```yaml
Markdown:
  useExtraMarkdown: true
```
Alternatively trough `Markdown::$useExtraMarkdown = true;`.

## Tests

Run tests with:

```sh
  $ sake dev/tests/module/markdownparser
```

## Copyright and License

It's using the [markdown parser](https://github.com/michelf/php-markdown/) written by Michel Fortin under the [GNU General Public License v2](http://michelf.ca/projects/php-markdown/license/).

This module is under the **GNU General Public License v2** as well.
