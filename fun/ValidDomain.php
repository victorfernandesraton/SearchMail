<?php
function ValidDomain($domain_mail,$domain_list) {
    for ($i = 0; $i < count($domain_mail); $i++) {
        for($j = 0; $j < count($domain_list);$j++) {
            if ($domain_mail[$i]->getDomain() == $domain_list[$j]->getDomain()) {
                $domain_mail[$i]->setStatus(true);
                break;
            } else {
                $domain_mail[$i]->setStatus(false);
            }
        }
    }
}

?>