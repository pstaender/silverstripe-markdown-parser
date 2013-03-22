<?php

class Markdown extends TextParser {
  
  function parse() {
    $parser = new Markdown_Parser();
    return $parser->transform($this->content);
  }

}