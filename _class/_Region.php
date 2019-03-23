<?php
class _Region {
    private $region;
    private $errorcount;

    function __construct($region) {
        $this->region = $region;
        $this->errorcount = 0;
    }
    function setErrorCount() {
        $this->errorcount++;
    }
    function getErrorCount() {
        return $this->errorcount;
    }
    function getRegion() {
        return $this->region;
    }
}


?>