<?php

require_once(dirname(__FILE__).'/../parsedown-1.0.1/Parsedown.php');

class MarkdownParser extends TextParser
{

    public function parse()
    {
        $Parsedown = new Parsedown();
        return $Parsedown->text($this->content);
    }
}
