<?php
class _Mails
{
    private $mail;
    private $user;
    private $domain;
    private $position;
    private $arr_status = array("Domain-INvalid","Domain-valid");
    private $status;
    private $region;
    

    function __construct($mail) {
        $this->mail = $mail;
        $this->position = strpos($this->getMail(), '@');
        $this->domain = substr($this->getMail(),($this->getPosition()+1));
        $this->user = substr($this->getMail(),0,($this->getPosition()));
        if ((substr($this->getMail(),-2) == "om")) {
            $this->region = false;
        } else $this->region = substr($this->getMail(),-2);
    }

    function setStatus($value) {
        $this->status = $this->arr_status[$value];
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
}