<?php

namespace Zeitpulse\SilverStripeMarkdownParser;

use Parsedown;
use ParsedownExtra;
use SilverStripe\ORM\DataExtension;
use League\HTMLToMarkdown\HtmlConverter;
use SilverStripe\Core\Injector\Injector;

class DBStringExtension extends DataExtension
{
    private static $casting = [
        'markdown' => 'HTMLFragment',
        'inlineMarkdown' => 'HTMLFragment',
        'markdownExtra' => 'HTMLFragment',
        'inlineMarkdownExtra' => 'HTMLFragment',
        'htmlToMarkdown' => 'Text',
    ];

    public function markdown(): string
    {
        return Injector::inst()
            ->create(Parsedown::class)
            ->text($this->owner->RAW() ?: '');
    }

    public function markdownExtra(): string
    {
        return Injector::inst()
            ->create(ParsedownExtra::class)
            ->text($this->owner->RAW() ?: '');
    }

    public function inlineMarkdown(): string
    {
        return Injector::inst()
            ->create(Parsedown::class)
            ->line($this->owner->RAW() ?: '');
    }

    public function inlineMarkdownExtra(): string
    {
        return Injector::inst()
            ->create(ParsedownExtra::class)
            ->line($this->owner->RAW() ?: '');
    }

    public function htmlToMarkdown(): ?string
    {
        return Injector::inst()
            ->create(HtmlConverter::class)
            ->convert($this->owner->RAW() ?: '');
    }
}
