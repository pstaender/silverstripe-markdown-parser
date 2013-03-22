<?php

class MarkdownParserTest extends SapphireTest {
  
  function testParsingMarkdown() {
    $text     = "**A test**\n\nAnd a new paragraph.";
    $expected = "<p><strong>A test</strong></p>\n\n<p>And a new paragraph.</p>";
    $parser = new Markdown($text);
    $this->assertEquals(trim($parser->parse()), $expected, 'Translation markdown to HTML.');
  }

}