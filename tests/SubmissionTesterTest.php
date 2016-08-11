<?php

require dirname(__DIR__) . '/SubmissionTester.php';

class SubmissionTesterTest extends PHPUnit_Framework_TestCase
{

    public function testInstanceOf()
    {
        $bad_words = array('onions', 'pepperoni');
        $submission = new SubmissionTester('Gwyn', 'More onions, pepperoni, cheese and mushrooms for me please',
            $bad_words);

        $this->assertInstanceOf('SubmissionTester', $submission, "It is an instance of the SubmissionTester class");
    }
}
