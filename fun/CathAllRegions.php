<?php
function CathAllRegions($dons) {
    foreach ($dons as $value) {
        $arr[] = $value->getRegion();
    }
    return $arr;
}

?>