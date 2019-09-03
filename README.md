[![Build Status](https://img.shields.io/travis/pstaender/silverstripe-markdown-parser.svg?style=flat-square)](https://travis-ci.org/pstaender/silverstripe-markdown-parser)

# Markdown Parser for SilverStripe

Converts (inline) text to Markdown / MarkdownExtra and vice versa.

## Requirements

 * Silverstripe 4+

## Installation

Install with composer:

```sh
  $ composer require pstaender/silverstripe-markdown-parser
```

## Usage

After flushing your cache you can use the convertes in any template:

```html
<article>
  $Text.Markdown
  $Text.MarkdownExtra
  <p>
    $Title.InlineMarkdown
  </p>
  <p>
    $Title.InlineMarkdownExtra
  </p>
  <pre>
  $Content.HTMLToMarkdown
  </pre>
</article>
```

## Configuration

Every converting should work as expected out of the box.

Under the hood the parsers `Parsedown`, `ParsedownExtra` and `League\HTMLToMarkdown\HtmlConverter` are used for conversion. Anyhow, if you need to different parsing options you can hook any parser with a custom `Injector` configuration.

## License

MIT License
