<?php
class _Mails
{
    private $mail;
    private $user;
    private $domain;
    private $position;
    private $status;
    private $status_arr;
    

    function __construct($mail) {
        $this->mail = $mail;
        $this->position = strpos($this->getmail(), '@');
        $this->domain = substr($this->getmail(),($this->getPosition()+1));
        $this->user = substr($this->getmail(),0,($this->getPosition()));
        $this->status = null;
    }

    function getmail() {
        return $this->mail;
    }

    function getPosition() {
        return $this->position;
    }

    function getdomain() {
        return $this->domain;
    }

    function getuser() {
        return $this->user;
    }
}