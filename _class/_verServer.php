<?php
class VerServer {
    private $server;
    private $mails;
    private $addres;
    
    function __construct()
    {
        $this->setServer();
    }

    function setServer() {
        $this->server = array("gmail.com","outlook.com","facebook.com");
    }

    function addServer($value) {
        array_push($this->server,$value);
    }
    public function listServer() {
        return $this->server;
    }        
}
?>