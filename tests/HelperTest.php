<?php

use SilverStripe\Dev\SapphireTest;
use Zeitpulse\SilverStripeHelper\Tests\Model\TestDataObject;

class HelperTest extends SapphireTest
{
    protected static $fixture_file = 'TestDataObject.yml';

    protected static $extra_dataobjects = [
      TestDataObject::class,
    ];

    public function testTextToMarkdown()
    {
        $this->assertEquals(
            $this->markdown('TextContent')->Markdown(),
            "<h2>Title</h2>\n<p><strong>Lorem ipsum</strong> dolor sit amet <em>consectetur</em> adipiscing elit.</p>"
        );
    }

    public function testTextToInlineMarkdown()
    {
        $this->assertEquals(
            $this->markdown('Sentance')->Markdown(),
            '<p>Example <strong>sentance</strong></p>'
        );
    }

    public function testHTMLToMarkdown()
    {
        $this->assertEquals(
            $this->markdown('HTMLContent')->HTMLToMarkdown(),
            "### Title\n\n**Lorem ipsum** dolor sit amet *consectetur* adipiscing elit."
        );
    }

    public function testTextToMarkdownExtra()
    {
        $this->assertEquals(
            $this->markdownExtra('TextContent')->MarkdownExtra(),
            "<h2 class=\"title\">Title</h2>\n<p><strong>Lorem ipsum</strong> dolor sit amet <em>consectetur</em> adipiscing elit.</p>"
        );
    }

    public function testTextToInlineMarkdownExtra()
    {
        $this->assertEquals(
            $this->markdownExtra('Sentance')->InlineMarkdownExtra(),
            'Example <strong>sentance</strong> with <pre>inline</pre> html'
        );
    }

    private function markdown($field)
    {
        return $this
          ->objFromFixture(TestDataObject::class, 'markdown')
          ->dbObject($field);
    }

    private function markdownExtra($field)
    {
        return $this
          ->objFromFixture(TestDataObject::class, 'markdownExtra')
          ->dbObject($field);
    }
}
