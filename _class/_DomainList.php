<?php
class _DomainList {
    private $domain = array();
    private $region = array();
    
    function __construct($arr)
    {
        $this->setDomainList($arr);
    }

    function setDomainList($arr) {
        foreach ($arr as $value) {
            array_push($this->domain,$value);
        }
    }

    function getDomainList() {
        return $this->domain;
    }

    function setRegionList() {
        
    }
            
}
?>