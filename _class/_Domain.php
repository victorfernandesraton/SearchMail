<?php
class _Domain {
    private $domain;
    private $region;
    private $errorquant;
    private $errorquantregion;
    
    function __construct($value)
    {
        $this->domain = $value;
        if ((substr($value,-3) === "com")) {
            $this->region = "undefined";
        } else $this->region = substr($value,-2);
        $this->errorquant = $this->errorquantregion = 0;
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
    function setErrorQuantRegion($value) {
        $this->errorquant = $value;
    }
    function getErrorQuantRegion() {
        return $this->errorquant;
    }
}
?>