<?php
function carryRegion($regions) {
    foreach ($regions as $key => $value) {
         $obj[(int) $key] = new _Region($value);
    }
    return $obj;
} 
    

?>