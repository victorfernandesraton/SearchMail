<?php
function ErrorRegionCounter($mail,$region) {
    foreach ($region as $domain_list) {
        if ($mail->getStatus() == false){
            if (strcmp($mail->getRegion(),$domain_list->getRegion()) == 0) {
                $domain_list->setErrorCount();
            } 
        }
    }
}

function ErorDomainCounter($mail,$domain) {
    foreach ($domain as $domain_list) {
        if ($mail->getStatus() == false){
            if (strcmp($mail->getSimilarDomain(),$domain_list->getDomain()) == 0) {
                $domain_list->setErrorQuant();
            } 
        }
    }
}
?>