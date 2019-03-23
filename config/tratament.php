<?php

    // database connection
    require_once "./database/_sql_connect.php";
    
    // configurações
    require_once "_carryMail.php";
    require_once "_carryDomain.php";
    
    // funções
    require_once "./fun/ValidDomain.php";
    require_once "./fun/ErrorDomain.php";
    require_once "./fun/SimilarDomain.php";
    require_once "./fun/ErrorDomainCountry.php";

    //classes
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

    // verificando os dominios com erro
    $DomainErrorList = array();
    // subistituição e correção dos dôminios   
    ErrorDomain($mail_obj,$domain_obj); 
    
    ?>
