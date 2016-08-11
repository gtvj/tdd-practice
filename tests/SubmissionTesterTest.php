<?php

require dirname(__DIR__) . '/SubmissionTester.php';

class SubmissionTesterTest extends PHPUnit_Framework_TestCase
{
    protected function setUp() {
        $this->bad_words = array('onions', 'pepperoni');
        $this->submission = new SubmissionTester('Gwyn', 'More onions, pepperoni, cheese and mushrooms for me please',
            $this->bad_words);
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

    public function testBadWordsAttribute()
    {
        $this->assertEquals($this->submission->getBadWords(), $this->bad_words);
    }

    public function testTestSubmission()
    {
        $this->assertEquals($this->submission->getBadWordsFoundInSubmission(), array('onions', 'pepperoni'));
        
    }
}
