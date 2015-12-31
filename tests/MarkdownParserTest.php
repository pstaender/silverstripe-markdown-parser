<?php

class MarkdownParserTest extends SapphireTest
{

    public function testParsingMarkdown()
    {
        $text     = "**A test**\n\nAnd a new paragraph.";
        $expected = "<p><strong>A test</strong></p><p>And a new paragraph.</p>";
        $parser = new MarkdownParser($text);
    // we ignore wrapping whitespace and newlines 
    $result = trim(str_replace("\n", '', $parser->parse()));
        $this->assertEquals($result, $expected, 'Translation markdown to HTML.');
    }
}
