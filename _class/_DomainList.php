<?php
class _DomainList {
    private $domain = array();
    private $region = array();
    
    function __construct($arr)
    {
        $this->setDomainList($arr);
        $this->setRegionList($arr);
    }

    function setDomainList($arr) {
        foreach ($arr as $value) {
            array_push($this->domain,$value);
        }
    }

    function getDomainList() {
        return $this->domain;
    }
    function getRegionList() {
        return $this->region;
    }

    function setRegionList($arr) {
        foreach ($arr as $value) {
            if ((substr($value,-2) == "om")) {
                array_push($this->region,"undefined");
            } else array_push($this->region,substr($value,-2));
        }
    }
            
}
?>