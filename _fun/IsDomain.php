<?php
function IsDomain($string,$arr) {
    for ($i = 0; $i < count($string); $i++) {
        for($j = 0; $j < count($arr);$j++) {
            if ($string[$i]->getDomain() == $arr[$j]) {
                $string[$i]->setStatus(1);
                break;
            } else $string[$i]->setStatus(0);
        }
    }
}
?>