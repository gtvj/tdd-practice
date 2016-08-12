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

    public function testResponse()
    {
        $this->assertEquals($this->submission->respond(), 'Sorry, Gwyn, your submission was not allowed because it contained onions and pepperoni');

        // Testing several different variants
        $bad_words = array('cheese');
        $submission = new SubmissionTester('Peter', 'More onions, pepperoni, cheese and mushrooms for me please',
            $bad_words);

        $this->assertEquals($submission->respond(), 'Sorry, Peter, your submission was not allowed because it contained cheese');


        $bad_words = array('mushrooms');
        $submission = new SubmissionTester('Paul', 'More onions, pepperoni, cheese and mushrooms for me please',
            $bad_words);

        $this->assertEquals($submission->respond(), 'Sorry, Paul, your submission was not allowed because it contained mushrooms');

        $bad_words = array('pepperoni');
        $submission = new SubmissionTester('Mary', 'More onions, pepperoni, cheese and mushrooms for me please',
            $bad_words);

        $this->assertEquals($submission->respond(), 'Sorry, Mary, your submission was not allowed because it contained pepperoni');
    }

    public function testNoBadWords()
    {
        $submission = new SubmissionTester('Mary', 'More onions, pepperoni, cheese and mushrooms for me please',
            false);
    }


}
