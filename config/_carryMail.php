<?php
function carryMail($arr) {
    for ($i=0; $i < count($arr); $i++) { 
        $var[$i] = new _Mails($arr[$i]);
    }
    return $var;
}
?>