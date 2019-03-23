<?php
function carryDomain($arr) {
    for ($i=0; $i < count($arr); $i++) { 
        $var[$i] = new _Domain($arr[$i]);
    }
    return $var;
}
?>