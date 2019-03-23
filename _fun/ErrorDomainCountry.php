<?php

function  ErrorDomainCountry($mail_list) {
    $arr_rtr = array();
    foreach ($mail_list as $value) {
        if ($value->getStatus() == false) {
            if ($value->getRegion() == false) {
                array_push($arr_rtr,"International");
            } else array_push($arr_rtr,$value->getRegion());
        }
    }
    return $arr_rtr;
}

?>