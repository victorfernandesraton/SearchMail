<?php

function ErrorRegion($mail,$region) {
    $after = $before = $out = 0;
    foreach ($mail as $mail_value) {
        // echo $mail_value->getMail()."<br>";
        foreach ($region as $region_value) {
            if ($mail_value->getStatus() == false) {
                if (strlen($mail_value->getRegion()) < 1) {
                    $mail_value->setRegion("com");
                } else {
                    $after = $before;
                    similar_text($mail_value->getRegion(),$region_value->getRegion(),$before);
                    // echo $before."-".$mail_value->getPercent()."<br>";
                    if ($before > $after) {
                        $out = $before;
                        $mail_value->setSimilarRegion($region_value->getRegion());
                    }
                }            
            }
        }
    }
}


?>