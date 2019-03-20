<?php
class cx_bench {
    private $username;
    private $pass;
    private $db;
    private $host;
    private $bench;
    private $port;

    function __construct($username,$pass,$db,$host,$bench,$port)
    {
    $this->setUsername($username);
    $this->setPass($pass);
    $this->setDB($db);
    $this->setHost($host);
    $this->setBench($bench);
    $this->setPort($port);
    }

    public function cx_bench() {
        try {
            $conn = new PDO($this->getDB().':'.$this->getHost().'='.$this->getUsername().'port='.$this->getPort().';dbname='.$this->getBench(), $this->getUsername(),$this->getPass(),array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
                PDO::ATTR_PERSISTENT => false,
                PDO::ATTR_EMULATE_PREPARES => false,
                )
            );
            return $conn;
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function setUsername($args) 
    {
        $this->username = $args;
    }

    public function getUsername() 
    {
        return $this->username;
    }

    public function setPass($args) 
    {
        $this->pass = $args;
    }

    public function getPass() 
    {
        return $this->pass;
    }

    public function setDB($args) 
    {
        $this->db = $args;
    }

    public function getDB() 
    {
        return $this->db;
    }

    public function setBench($args) 
    {
        $this->bench = $args;
    }

    public function getBench() 
    {
        return $this->bench;
    }

    public function setHost($args) 
    {
        $this->host = $args;
    }

    public function getHost() 
    {
        return $this->host;
    }

    public function setPort($args) 
    {
        $this->port = $args;
    }

    public function getPort() 
    {
        return $this->port;
    }
}



?>