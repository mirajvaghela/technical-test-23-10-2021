<?php
use PHPUnit\Framework\TestCase;

require 'WordsParser.php';
 
class WordsParserTest extends TestCase
{
    public function testparseDate(): void
    {   
        $test_words = [
            "documentarily" => true,
            "aftershock" => true,
            "countryside" => true,
            "six-year-old" => true,
            "Double-down" => false,
            "Euclidean" => false,
            "epidemic" => false,
        ];

        foreach ($test_words as $test_word_input => $expected_result) {
            $word_parser = new WordsParser($test_word_input);
            $this->assertEquals($expected_result, $word_parser->validWord());
        }
    }
}
