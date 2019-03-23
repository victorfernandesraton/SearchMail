<?php
class _Domain {
    private $domain;
    private $region;
    
    function __construct($value)
    {
        $this->domain = $value;
        if ((substr($value,-2) == "om")) {
            $this->region = "undefined";
        } else $this->region = substr($value,-2);
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
}

?>