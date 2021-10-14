# Markdown Parser for SilverStripe

Converts any string field to Markdown and vice versa.

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
  $Content.markdown
  $Content.markdownExtra
  <p>
    $Title.inlineMarkdown
  </p>
  <p>
    $Title.inlineMarkdownExtra
  </p>
  <pre>
  $MyHTMLContent.htmlToMarkdown
  </pre>
</article>
```

## Configuration

Every converting should work as expected out of the box.

Under the hood the parsers `Parsedown`, `ParsedownExtra` and `League\HTMLToMarkdown\HtmlConverter` are used for conversion. Anyhow, if you need to different parsing options you can hook any parser with a custom `Injector` configuration.

## License

MIT License
