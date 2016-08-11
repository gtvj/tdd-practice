<?php

class SubmissionTester
{
    private $name;
    private $submittedContent;

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

    public function __construct($name, $submittedContent)
    {
        $this->setName($name);
        $this->setSubmittedContent($submittedContent);
    }

}