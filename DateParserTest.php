<?php
use PHPUnit\Framework\TestCase;

require 'DateParser.php';
 
class DateParserTest extends TestCase
{
    private $date_parser;
 
    protected function setUp() : void
    {
        $this->date_parser = new DateParser();
    }
 
    protected function tearDown() : void
    {
        $this->date_parser = NULL;
    }
 
    public function testparseDate(): void
    {   
        $test_dates = [
            "The first Monday of October 2019" => "2019-10-07",
            "The third Tuesday of October 2019" => "2019-10-15",
            "The last Wednesday of October 2019" => "2019-10-30",
        ];

        foreach ($test_dates as $test_date_str => $test_date) {
            $result = $this->date_parser->parseDate($test_date_str);
            $this->assertsame($test_date, $result);
        }
    }
}
