<?php

class SubmissionTester
{
    private $name;
    private $submittedContent;
    private $badWords;
    private $acceptedSubmission = true;
    private $badWordsFoundInSubmission = array();

    public function getBadWordsFoundInSubmission()
    {
        return $this->badWordsFoundInSubmission;
    }

    public function getBadWords()
    {
        return $this->badWords;
    }

    public function setBadWords($badWords)
    {
        if ($badWords !== false && is_array($badWords) && count($badWords) > 0) {
            $this->badWords = $badWords;
        } else {
            $this->badWords = array();
        }
    }

    public function getSubmittedContent()
    {
        return $this->submittedContent;
    }

    public function setSubmittedContent($submittedContent)
    {
        $this->submittedContent = $submittedContent;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function testSubmission()
    {
        foreach ($this->badWords as $badWord) {
            if (strpos($this->submittedContent, $badWord)) {
                $this->acceptedSubmission = false;
                array_push($this->badWordsFoundInSubmission, $badWord);
            }
        }
    }

    public function respond()
    {
        if ($this->acceptedSubmission == true) {
            return sprintf('Thanks, %s, your submission was successful');
        }

        return sprintf('Sorry, %s, your submission was not allowed because it contained %s', $this->getName(),
            implode(' and ', $this->badWordsFoundInSubmission));

    }

    public function __construct($name, $submittedContent, $badWords = false)
    {
        $this->setName($name);
        $this->setSubmittedContent($submittedContent);
        $this->setBadWords($badWords);
        $this->testSubmission();
    }

}