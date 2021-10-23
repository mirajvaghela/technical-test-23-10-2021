<?php
use PHPUnit\Framework\TestCase;

require 'StringParser.php';

class StringParserTest extends TestCase
{
    private $string_parser;
 
    protected function setUp() : void
    {
        $this->string_parser = new StringParser();
    }
 
    protected function tearDown() : void
    {
        $this->string_parser = NULL;
    }
    
    // Issue with latest php unit is not allowing to add providers
/*    public function stringProvider() : array
    {
        return array(
          array('MICHAEL', 'JORDAN', 'MJIOCRHDAAENL')
        );
    }*/

    public function testparseString(): void
    {   
        $test_strings[] = ["MICHAEL", "JORDAN", "MJIOCRHDAAENL"];
        foreach ($test_strings as $test_string) {
            $merged_string = $this->string_parser->setString1($test_string[0])->setString2($test_string[1])->mergeStrings();
            $this->assertEquals($test_string[2], $merged_string);
        }
    }
}
