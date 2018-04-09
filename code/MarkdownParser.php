<?php

use Michelf\MarkdownExtra;

class MarkdownParser extends TextParser {

  function parse() {
    return MarkdownExtra::defaultTransform($this->content);
  }

}
