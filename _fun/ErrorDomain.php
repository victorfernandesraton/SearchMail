<?php

function ErrorDomain($domainInput,$domain) {
    for ($i = 0; $i <= strlen($domainInput); $i++) {
        // substr($domainInput,strpos($domain,0,$i));
        if ((substr($domain,0,$i).'<br>') == (substr($domainInput,0,$i).'<br>')) {
            $port = null;
        } else if ($i > 1){
            $port = substr($domain,0,$i);
            break;
        } else continue;
    }
    return $port;
}
?>