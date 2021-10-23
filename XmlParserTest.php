<?php
use PHPUnit\Framework\TestCase;

require 'XmlParsers.php';

class XmlParserTest extends TestCase
{
    public function testXmlParser(): void
    {   
        $expected_response = ["1P3115" => "commercial"];
        $xml_parser = new XmlParsers();
        $this->assertEquals($expected_response, $xml_parser->generateIds('/Users/miraj/23-10-2021/technical-test-23-10-2021/sample-reaxml.xml'));
        
    }
}
