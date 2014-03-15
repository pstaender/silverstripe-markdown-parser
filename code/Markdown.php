<?php


use \Michelf\MarkdownParser;

class Markdown extends TextParser {

  function parse() {
    require_once(dirname(__FILE__).'/../vendor/Markdown.inc.php');
    return MarkdownParser::defaultTransform($this->content);
  }

}
