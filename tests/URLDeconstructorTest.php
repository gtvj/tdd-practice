<?php

require dirname(__DIR__) . '/URLDeconstructor.php';

class URLDeconstructorTest extends PHPUnit_Framework_TestCase
{

    public function testURLDeconstructorType()
    {
        $url = new URLDeconstructor('http://www.nationalarchives.gov.uk/news');
        $this->assertInstanceOf('URLDeconstructor', $url, "The object is an instance of URLDeconstructor");
    }

    public function testPathAttribute()
    {
        $url = new URLDeconstructor('http://www.nationalarchives.gov.uk/news');
        $this->assertEquals($url->getPath(), '/news', "The path attribute was set successfully");

        $url = new URLDeconstructor('http://www.google.com/news');
        $this->assertEquals($url->getPath(), '/news', "The path attribute was set successfully");

        $url = new URLDeconstructor('https://www.example.co.uk/news');
        $this->assertEquals($url->getPath(), '/news', "The path attribute was set successfully");

    }

    public function testProtocol()
    {
        $url = new URLDeconstructor('http://www.nationalarchives.gov.uk/news');
        $this->assertEquals($url->getProtocol(), 'http://', "The protocol attribute was set successfully");

        $url = new URLDeconstructor('https://www.nationalarchives.gov.uk/news');
        $this->assertEquals($url->getProtocol(), 'https://', "The protocol attribute was set successfully");
    }


}
