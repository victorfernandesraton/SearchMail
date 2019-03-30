<?php

$arrteste = array(1,2,3,4);

function addOne($arrteste,$iten) {
    foreach ($arrteste as $key => $value) {
        if ($iten == $value) {
            $out = $key;
            break;
        } else $out == null;
    }
    if ($out != null) {
        foreach ($arrteste as $key => $value) {
            if ($key == $out-1) {
                $after = $value;
            } else if ($key == $out) {
                $true = $value;
            } else if ($key == $out+1) {
                $before = $value;
            }
        }
        foreach ($arr as $key => $value) {
            # code...
        }
    }
}

?>