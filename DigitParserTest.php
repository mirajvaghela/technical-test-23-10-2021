<?php
use PHPUnit\Framework\TestCase;

require 'DigitParser.php';

class DigitParserTest extends TestCase
{
    public function testDigitTotal(): void
    {   
        $test_digits = [
            "123" => 6,
            "4" => 4,
            "18" => 9,
            "258" => 6,
        ];

        foreach ($test_digits as $test_digit => $expected_result) {
            $digit_parser = new DigitParser($test_digit);

            $this->assertEquals($expected_result, $digit_parser->addDigits());
        }
    }
}
