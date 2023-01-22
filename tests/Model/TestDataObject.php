<?php

namespace Zeitpulse\SilverStripeHelper\Tests\Model;

use SilverStripe\Dev\TestOnly;
use SilverStripe\ORM\DataObject;

class TestDataObject extends DataObject implements TestOnly
{
    private static $db = [
        'TextContent' => 'Text',
        'HTMLContent' => 'HTMLText',
        'Sentence' => 'Text',
        'EmptyText' => 'Text',
    ];
}
