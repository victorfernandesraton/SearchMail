<?php
    // classes e funções
    require_once "./_fun/_carryMail.php";
    require_once "./_fun/IsDomain.php";
    require_once "./_fun/ErrorDomain.php";
    require_once "./_fun/SimilarDomain.php";
    require_once "./_class/_sql.php";
    require_once "./_class/_Mails.php";
    require_once "./_class/_DomainList.php";

    // conectando ao sql
    $pdo = new cx_bench("root","vfbr1101","mysql","localhost","bteste","3306");
    $cx = $pdo->cx_bench();

    // lista de dominio
    $doms = array("hotmail.com","outlook.com","gmail.com");
    $domainList = new _DomainList($doms);

    // lista de exemplo
    $mailList = array("victor.baiao1101@gmail.com","jose@outlook.com","mark@gmi.com");
    // carregando emails como objetos
    $mail_obj = carryMail($mailList);

    // validador de dominio
    IsDomain($mail_obj,$domainList->getDomainList());

    // verificando os erros dos dominios
    for ($i=0; $i < count($mail_obj); $i++) { 
        for ($j = 0; $j < count($domainList->getDomainList());$j++) {
            if ($mail_obj[$i]->getStatus() == "Domain-INvalid") {
                $mail_obj[$i]->setErrorDomain(ErrorDomain($mail_obj[$i]->getDomain(),$domainList->getDomainList()[$j]));
                $mail_obj[$i]->setSimilarDomain(SimilarDomain($mail_obj[$i]->getDomain(),$domainList->getDomainList()[$j]));
            }
        }
    }

    // montando a lista de erros mo dominio
    $ErrorList = array();
    
    for ($i=0; $i < count($mail_obj); $i++) { 
        if ($mail_obj[$i]->getStatus() == "Domain-INvalid") {
        array_push($ErrorList,$mail_obj[$i]->getSimilarDomain());
        }
    }

    var_dump($ErrorList);
    ?>
