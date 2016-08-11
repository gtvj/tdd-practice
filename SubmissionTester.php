<?php

class SubmissionTester
{
    private $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function __construct($name)
    {
        $this->setName($name);
    }

}