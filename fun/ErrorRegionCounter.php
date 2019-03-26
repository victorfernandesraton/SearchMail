<?php
function ErrorRegionCounter($mail_obj,$region) {
foreach($mail_obj as $reg_mail) {
        foreach ($region as $reg_list) {
            if ($reg_mail->getStatus() == false){
                if (strcmp($reg_mail->getRegion(),$reg_list->getRegion()) == 0) {
                    $reg_list->setErrorCount();
                } 
            }
        }
    }
}
?>