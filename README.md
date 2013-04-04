# Markdown Parser for SilverStripe 2+

Markdown parsing in SilverStripe templates.

## Requirements

 * Silverstripe 2 or newer

## Installation

Copy the `markdownparser` folder in your silverstripe installation and rebuild the manifest with `/?flush=all` flush command.

## Usage

You can now parse any DataObject texfields with the markdown parser:

	<h1>$Title</h1>
	$Content.Parse(Markdown)

## Tests

Run test with `$> sake dev/tests/module/markdownparser`

## Copyright and License

I took the [markdown parser](https://github.com/michelf/php-markdown/) which is written by Michel Fortin under the [GNU General Public License v2](http://michelf.ca/projects/php-markdown/license/).

So this module is under the **GNU Genereal PUblic License v2** as well.
