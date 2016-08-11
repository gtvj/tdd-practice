<?php

class SubmissionTester
{
    private $name;
    private $submittedContent;
    private $badWords;

    public function getBadWords()
    {
        return $this->badWords;
    }

    public function setBadWords($badWords)
    {
        $this->badWords = $badWords;
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

    public function __construct($name, $submittedContent, $badWords)
    {
        $this->setName($name);
        $this->setSubmittedContent($submittedContent);
        $this->setBadWords($badWords);
    }

}