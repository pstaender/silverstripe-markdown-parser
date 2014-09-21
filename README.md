# Markdown Parser for SilverStripe 2+

Markdown parsing in SilverStripe templates. Inlcuding the ability to render GitHub flavoured markdown.

## Important: Name has changed from Markdown to MarkdownParser

To enable interoperability with the markdown field in [Silverstripe Markdown](https://github.com/UndefinedOffset/silverstripe-markdown), I renamed the parser class from `Markdown` to `MarkdownParser`. This cange is made in version 0.1.

## Requirements

 * Silverstripe 2 or newer
 * PHP 5.2 or newer

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
    $Content.Parse(MarkdownParser)
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

It's using the [Parsedown parser](https://github.com/erusev/parsedown) written by Emanuil Rusev under the MIT License.

This module is under the **GNU General Public License v2**.
