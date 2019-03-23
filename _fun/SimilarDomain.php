<?php
function SimilarDomain($domain_mail,$domain_list) {
    for ($i = 0; $i <= strlen($domain_mail); $i++) {
        // substr($domain_mail,strpos($domain,0,$i));
        if ((substr($domain_list,0,$i)) == (substr($domain_mail,0,$i))) {
            echo substr($domain_list,0,$i);
            $port = $domain_list;
            break;
        } else continue;
    }
    return $port;
}

function SimilarDomainNew($domain_list,$domain_mail) {
    for ($i = 1; $i <= strlen($domain_list); $i++) {
        if (strcmp(substr($domain_list,0,$i),substr($domain_mail,0,$i)) == 0) {
            $port = $domain_list;
        }
    }
    return $port;
}
?>

