<?php
function ValidDomain($domain_mail,$domain_list) {
    for ($i = 0; $i < count($domain_mail); $i++) {
        for($j = 0; $j < count($domain_list);$j++) {
            if ($domain_mail[$i]->getDomain() == $domain_list[$j]->getDomain()) {
                $domain_mail[$i]->setStatus(true);
                $domain_mail[$i]->setPercent(100);
                $domain_mail[$i]->setSimilarDomain($domain_mail[$i]->getDomain()); 
                break;
            } else if($domain_mail[$i]->getStatus() == null){
                $domain_mail[$i]->setStatus(false);
                $domain_mail[$i]->setSimilarDomain("not found");
            }
        }
    }
}

?>