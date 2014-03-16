<?php


use \Michelf\MarkdownParser;

class Markdown extends TextParser {

  static $useExtraMarkdown = false;

  function parse() {
    $useExtra = ($this->hasMethod('config')) ? $this->config()->get('useExtraMarkdown') : self::$useExtraMarkdown;
    if ($useExtra) {
      require_once(dirname(__FILE__).'/../vendor/MarkdownExtra.inc.php');
    } else {
      require_once(dirname(__FILE__).'/../vendor/Markdown.inc.php');
    }
    return MarkdownParser::defaultTransform($this->content);
  }

}
