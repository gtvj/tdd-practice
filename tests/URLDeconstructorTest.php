<?php

require dirname(__DIR__) . '/URLDeconstructor.php';

class URLDeconstructorTest extends PHPUnit_Framework_TestCase
{

    public function testURLDeconstructorType()
    {
        $url = new URLDeconstructor();
        $this->assertInstanceOf('URLDeconstructor', $url, "The object is an instance of URLDeconstructor");
    }
    
}
