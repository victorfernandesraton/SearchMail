<?php

    // database connection
    require_once "./database/_sql_connect.php";
    
    // configurações
    require_once "_carryMail.php";
    require_once "_carryDomain.php";
    require_once "_carryRegion.php";
    
    // funções
    require_once "./fun/ValidDomain.php";
    require_once "./fun/ErrorDomain.php";
    require_once "./fun/SimilarDomain.php";
    require_once "./fun/ErrorDomainCountry.php";
    require_once "./fun/CathAllRegions.php";
    require_once "./fun/ErrorRegionCounter.php";
    require_once "./fun/WhereErrorDomain.php";

    //classes
    require_once "./_class/_Mails.php";
    require_once "./_class/_Domain.php";
    require_once "./_class/_Region.php";

    // conectando ao sql
    $pdo = new cx_bench("root","vfbr1101","mysql","localhost","bteste","3306");
    $cx = $pdo->cx_bench();

    // lista de dominio
    // lista teste
    $doms = array("outlook.com","gmail.com","outlook.com.ar","hotmail.com");
    
    // carregando dominios como objeto
    $domain_obj = carryDomain($doms);
    
    // carregando as regions como objeto
    $AllRegions = CathAllRegions($domain_obj); // captura todas as regios
    $reg = array_unique($AllRegions); // regiões sem repetição
    $region = carryRegion($reg);

    // lista de enail
    // lista teste
    $mailList = array("jose@gmailk.com","icaro@outlook.com","lucio@hotmail.com","icaro@tlok.ar","lucio@hotmal.com","victor.baiao1101@gmil.com","jose@gmail.com","mark@gmal.com");
    // carregando emails como objetos
    $mail_obj = carryMail($mailList);


    // validador de dominio
    ValidDomain($mail_obj,$domain_obj);

    // paises com erro
    $ctr = ErrorDomainCountry($mail_obj);
    $ctr2 = array_unique($ctr);
    $errorlist = array("hotmail","gmail");
    // subistituição e correção dos dôminios   
    ErrorDomain($mail_obj,$domain_obj,$errorlist);

    // verifica onde houve a ocorrência de erro
    foreach ($mail_obj as $value) {
        WhereErrorDomain($value);
    }
        
    // contabilizando paises com erro
    ErrorRegionCounter($mail_obj,$region);    
?>
