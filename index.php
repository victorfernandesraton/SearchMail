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
    $doms = array("hotmail.com","outlook.com","gmail.com","outlook.ar","fb.com");
    // carregando dominios como objeto
    $domain_obj = carryDomain($doms);

    // lista de enail
    // lista teste
    $mailList = array("victor.baiao1101@gmail.com","jose@ouk.ar","mark@outloo.com");
    // carregando emails como objetos
    $mail_obj = carryMail($mailList);


    // validador de dominio
    ValidDomain($mail_obj,$domain_obj);

    // paises com erro
    $ctr = ErrorDomainCountry($mail_obj);
    var_dump($ctr);

    
    ?>
