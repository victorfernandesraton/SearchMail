<?php
function carryMail($arr) {
    for ($i=0; $i < count($arr); $i++) { 
        $var[$i] = new Mails($arr[$i]);
    }
    return $var;
}
?>