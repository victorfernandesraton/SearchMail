<?php
function ErrorDomain($mail_obj,$domain_obj) {
    for ($i=0; $i < count($mail_obj); $i++) { 
        $temp_domain = $mail_obj[$i]->getDomain();
        for ($j=0; $j < count($domain_obj); $j++) {
            $temp_true = $domain_obj[$j]->getDomain();
            for ($k=0; $k < strlen($temp_true); $k++) {
                if ($mail_obj[$i]->getStatus() == false) {

                    if (strcmp(substr($temp_domain,0,$k),substr($temp_true,0,$k)) == 0) {
                        $out = substr($temp_domain,0,$k);
                    } else if ($k > 3 && $out != null && strcmp(substr($temp_domain,0,$k),substr($temp_true,0,$k)) != 0) {
                        $mail_obj[$i]->setSimilarDomain($temp_true);
                        $mail_obj[$i]->setErrorDomain(substr($temp_domain,0,$k));
                        $domain_obj[$j]->setErrorQuant($domain_obj[$j]->getErrorQuant()+1);
                        break;
                    } else {
                        continue;
                    }
                } 
            }
        }
    }
}
?>