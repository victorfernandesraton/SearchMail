<?php
class ScMail
{
    private $string;
    private $after;
    private $before;
    private $position;

    function __construct($string) {
        $this->string = $string;
        $this->position = strpos($this->getString(), '@');
        $this->before = substr($this->getString(),($this->getPosition()+1));
        $this->after = substr($this->getString(),0,($this->getPosition()));
    }

    function getString() {
        return $this->string;
    }

    function getPosition() {
        return $this->position;
    }

    function getBefore() {
        return $this->before;
    }

    function getAfter() {
        return $this->after;
    }
}