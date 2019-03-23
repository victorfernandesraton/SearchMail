<?php
class _Domain {
    private $domain;
    private $region;
    private $errorquant;
    
    function __construct($value)
    {
        $this->domain = $value;
        if ((substr($value,-2) == "om")) {
            $this->region = "undefined";
        } else $this->region = substr($value,-2);
        $this->errorquant = 0;
    }
    

    function setDomain($value) {
        $this->domain = $value;
    }

    function getDomain() {
        return $this->domain;
    }
    function getRegion() {
        return $this->region;
    }

    function setErrorQuant($value) {
        $this->errorquant = $value;
    }
    function getErrorQuant() {
        return $this->errorquant;
    }
}

?>