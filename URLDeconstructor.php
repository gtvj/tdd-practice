<?php


class URLDeconstructor
{
    private $url;
    private $path;
    private $pattern = '/((http)s?:\/\/)?(www.)?[^\.]*.(gov.uk|com|co.uk)(\/.*)/';

    public function getPath()
    {
        return $this->path;
    }

    public function setPath($url)
    {
        $this->path = preg_filter($this->pattern, '$5', $url);
    }

    public function __construct($url)
    {
        $this->url = $url;
        $this->setPath($this->url);
    }


}