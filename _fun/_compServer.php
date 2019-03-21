<?php
function ServerVerify($string,$arr) {
    foreach ($arr as $key => $value) {
        if ($value == $string) {
        return $key;
        break;
        }
    }
}
?>