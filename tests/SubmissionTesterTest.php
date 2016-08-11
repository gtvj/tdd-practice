<?php

require dirname(__DIR__) . '/SubmissionTester.php';

class SubmissionTesterTest extends PHPUnit_Framework_TestCase
{
    protected function setUp() {

        $bad_words = array('onions', 'pepperoni');
        $this->submission = new SubmissionTester('Gwyn', 'More onions, pepperoni, cheese and mushrooms for me please',
            $bad_words);
    }

    public function testInstanceOf()
    {
        $this->assertInstanceOf('SubmissionTester', $this->submission, "It is an instance of the SubmissionTester class");
    }

    public function testNameAttribute()
    {
        $this->assertEquals($this->submission->getName(), 'Gwyn');
    }

    public function testSubmittedContentAttribute()
    {
        $this->assertEquals($this->submission->getSubmittedContent(), 'More onions, pepperoni, cheese and mushrooms for me please');
    }


}
