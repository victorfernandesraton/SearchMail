<?php
class _Mails
{
    private $mail;
    private $user;
    private $domain;
    private $position;
    private $status;
    private $region;
    private $domainError;
    private $similarDomain;
    private $percent;

    function __construct($mail) {
        $this->percent = null;
        $this->mail = $mail;
        $this->position = strpos($this->getMail(), '@');
        $this->domain = substr($this->getMail(),($this->getPosition()+1));
        $this->user = substr($this->getMail(),0,($this->getPosition()));
        if ((substr($mail,-3) == "com")) {
            $this->region = "com";
        } else $this->region = substr($mail,-2);
        $this->domainError = $this->similarDomain = null;
    }
    function setStatus($value) {
        $this->status = $value;
    }
    function getStatus() {
        return $this->status;
    }
    function getMail() {
        return $this->mail;
    }
    function getPosition() {
        return $this->position;
    }
    function getDomain() {
        return $this->domain;
    }
    function getUser() {
        return $this->user;
    }
    function getRegion() {
        return $this->region;
    }
    function setErrorDomain($value) {
        $this->domainError = $value;
    }
    function getErrorDomain() {
        return $this->domainError;
    }
    function setSimilarDomain($value) {
        $this->similarDomain = $value;
        if ((substr($value,-3) == "com")) {
            $this->region = "com";
        } else $this->region = substr($value,-2);
    }
    function getSimilarDomain() {
        return $this->similarDomain;
    }
    function setPercent($value) {
        $this->percent = $value;
    }
    function getPercent() {
        return $this->percent;
    }
}