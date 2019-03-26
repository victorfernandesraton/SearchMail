<?php
function ErrorDomain_older($mail_obj,$domain_obj) {
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

function ErrorDomain($mail,$domain,$error) {
    $before = 0;
    foreach ($mail as $mail_value) { // passagen de objeto email
        foreach ($domain as $domain_value) { // passagen de objeto dominio
            if ($mail_value->getStatus() == false) { // se o estatus for falso:
                if (strlen($mail_value->getDomain()) < 4) { // em casos onde temos endereço de email com poucos caracteres
                    $mail_value->setSimilarDomain(false);
                } else {
                    similar_text($mail_value->getDomain(),$domain_value->getDomain(),$before);
                    if($before == $mail_value->getPercent() && $before != 0) { // caso onde há duas possibilidades distintas de semelhança
                        foreach ($error as $error_value) {
                            if (strcmp($mail_value->getSimilarDomain(),$error_value) == 0 || strcmp($domain_value->getDomain(),$error_value) == 0) {
                                $mail_value->setSimilarDomain($error_value);
                            }
                        }
                    } else if ($before > $mail_value->getPercent() && $mail_value->getStatus() == false) { // detecta qual tem a maior porcentagem
                        $mail_value->setPercent($before);
                        $mail_value->setSimilarDomain($domain_value->getDomain());
                    }
                }            
            }
        }
    }
}
?>