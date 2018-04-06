<?php

use Michelf\MarkdownExtra;
use SilverStripe\ORM\DataExtension;

class MarkdownDBStringExtension extends DataExtension
{

    private static $casting = [
        "Markdown" => "HTMLFragment",
    ];

    public function Markdown()
    {
        return MarkdownExtra::defaultTransform($this->owner->RAW());
    }

}
