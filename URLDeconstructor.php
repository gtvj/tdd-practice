<?php


class URLDeconstructor
{
    private $url;
    private $path;
    private $protocol;
    private $pattern = '/(https?:\/\/)?(www.)?[^\.]*.(gov.uk|com|co.uk)(\/.*)/';

    public function getPath()
    {
        return $this->path;
    }

    public function setPath($url)
    {
        $this->path = preg_filter($this->pattern, '$4', $url);
    }

    public function getProtocol()
    {
        return $this->protocol;
    }

    public function setProtocol($url)
    {
        $this->protocol = preg_filter($this->pattern, '$1', $url);
    }

    public function __construct($url)
    {
        $this->url = $url;
        $this->setPath($this->url);
        $this->setProtocol($this->url);
    }


}