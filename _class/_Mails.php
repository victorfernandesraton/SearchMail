<?php
class _Mails
{
    private $mail;
    private $user;
    private $domain;
    private $position;
    private $status;
    

    function __construct($mail) {
        $this->mail = $mail;
        $this->position = strpos($this->getMail(), '@');
        $this->domain = substr($this->getMail(),($this->getPosition()+1));
        $this->user = substr($this->getMail(),0,($this->getPosition()));
        $this->status = null;
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
}