<?php

class Markdown extends TextParser {

  function parse() {
    $Parsedown = new Parsedown();
    return $Parsedown->text($this->content);
  }

}
