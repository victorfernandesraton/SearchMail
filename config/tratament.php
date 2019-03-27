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
    // teste
        $doms = array("outlook.com","gmail.com","outlook.com.ar","hotmail.com");
        // lista de prioridade em caso de semelhança
        $errorlist = array("hotmail.com","gmail.com");
    
    // carregando dominios como objeto
    $domain_obj = carryDomain($doms);
    
    // carregando as regions como objeto
    $AllRegions = CathAllRegions($domain_obj); // captura todas as regios
    $reg = array_unique($AllRegions); // regiões sem repetição
    $region = carryRegion($reg);

    // lista de enail
    // lista teste
    $mailList = array("jose@gmailk.com","icaro@outlook.com.fr","lucio@hotmail.com","icaro@tlok.ar","lucio@hotmal.com","victor.baiao1101@gmil.com","jose@gmail.com","mark@gmal.com");
    // carregando emails como objetos
    $mail_obj = carryMail($mailList);

    // validador de dominio
    foreach ($mail_obj as $mail) { // passagen de objeto email
        foreach ($domain_obj as $domain) { // passagen de objeto dominio
            ValidDomain($mail,$domain); // valida os dominios
        }
    }
    
    // subistituição e correção dos dôminios   
    foreach ($mail_obj as $mail) { // passagen de objeto email
        foreach ($domain_obj as $domain) { // passagen de objeto dominio
            ErrorDomain($mail,$domain,$errorlist); // função de análise de erros
        }
        WhereErrorDomain($mail); // onde ocorre o erro
        ErrorRegionCounter($mail,$region); // contabiliza os paises que mais erraram
        ErorDomainCounter($mail,$domain_obj); // contabiliza os dominios que são mais errados
    }
?>
