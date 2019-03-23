<?php
    // funções
    require_once "./_fun/_carryMail.php";
    require_once "./_fun/_carryDomain.php";
    require_once "./_fun/ValidDomain.php";
    require_once "./_fun/ErrorDomain.php";
    require_once "./_fun/SimilarDomain.php";
    require_once "./_fun/ErrorDomainCountry.php";

    //classes
    require_once "./_class/_sql.php";
    require_once "./_class/_Mails.php";
    require_once "./_class/_Domain.php";

    // conectando ao sql
    $pdo = new cx_bench("root","vfbr1101","mysql","localhost","bteste","3306");
    $cx = $pdo->cx_bench();

    // lista de dominio
    // lista teste
    $doms = array("hotmail.com","outlook.com","gmail.com","outlook.ar");
    // carregando dominios como objeto
    $domain_obj = carryDomain($doms);

    // lista de enail
    // lista teste
    $mailList = array("victor.baiao1101@gmil.com","jose@gmail.com","mark@gmal.com");
    // carregando emails como objetos
    $mail_obj = carryMail($mailList);


    // validador de dominio
    ValidDomain($mail_obj,$domain_obj);

    // paises com erro
    $ctr = ErrorDomainCountry($mail_obj);
    var_dump($ctr);

    // verificando os dominios com erro
    $errolist = array();
    for ($i=0; $i < count($mail_obj); $i++) { 
        $temp_domain = $mail_obj[$i]->getDomain();
        for ($j=0; $j < count($domain_obj); $j++) {
            $temp_true = $domain_obj[$j]->getDomain();
            for ($k=0; $k < strlen($temp_true); $k++) { 
                if (strcmp(substr($temp_domain,0,$k),substr($temp_true,0,$k)) == 0) {
                    $out = substr($temp_domain,0,$k);
                } else if ($k > 1 && $out != null && strcmp(substr($temp_domain,0,$k),substr($temp_true,0,$k)) != 0) {
                    var_dump(substr($temp_true,0,$k));
                    array_push($errolist,substr($temp_true,0,$k));
                    $mail_obj[$i]->setSimilarDomain($temp_true);
                    $domain_obj[$j]->setErrorQuant($domain_obj[$j]->getErrorQuant()+1);
                    break;
                } else continue;
            }
        }
    }    
    ?>
