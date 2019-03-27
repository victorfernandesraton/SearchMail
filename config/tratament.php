<?php

    // database connection
    require_once "./database/_sql_connect.php";
        
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
    require_once "./_class/_ErrorCase.php";

    // lista de dominio
    // teste
        $doms = array("gmail.com","hotmail.com","hotmail.com.br","hotmail.com.mx","hotmail.com.ar","msn.com");
        // lista de prioridade em caso de semelhança
        $priority_list = array("msn.com","hotmail.com.br","hotmail.com.mx","hotmail.com.ar","hotmail.com","gmail.com");
    
    // carregando dominios e regiões como objeto
    foreach ($doms as $value) {
        $domain_obj[] = new _Domain($value);
    }

    // carregando as regioes em um array
    foreach ($domain_obj as $value) {
        $AllRegions[] = $value->getRegion();
    }
    // array de regiões
    $reg = array_unique($AllRegions); // array de regiões sem repetição

    // criando objeto contendo as possíveis regios
    foreach ($reg as $value) {
        $region[] = new _Region($value);   
    }

    // lista de enail
    // lista teste
    $mailList = array("jose@gmailk.com","icaro@hoitmal.com.fr","lucio@hotmail.com","icaro@tmsn.com","lucio@hotmal.com","victor.baiao1101@gmil.com","jose@gmail.com","mark@gmal.com");

    // carregando emails como objetos
    foreach ($mailList as $value) {
        $mail_obj[] = new _Mails($value);
    }

    // validador de dominio
    foreach ($mail_obj as $mail) { // passagen de objeto email
        foreach ($domain_obj as $domain) { // passagen de objeto dominio
            ValidDomain($mail,$domain); // valida os dominios
        }
    }
    
    // subistituição e correção dos dôminios   
    foreach ($mail_obj as $mail) { // passagen de objeto email
        foreach ($domain_obj as $domain) { // passagen de objeto dominio
            ErrorDomain($mail,$domain,$priority_list); // função de análise de erros
        }
        WhereErrorDomain($mail); // onde ocorre o erro
        ErrorRegionCounter($mail,$region); // contabiliza os paises que mais erraram
        ErorDomainCounter($mail,$domain_obj); // contabiliza os dominios que são mais errados
    }

    // captura os casos de error
    foreach ($mail_obj as $value) {
        if ($value->getStatus() == false) {
            $errorCases[] = $value->getDomain();
        }
    }

    // unifica os caos de error
    $err = array_unique($errorCases);

    foreach ($err as $value) {
        $error_list[] = new _ErrorCase($value);
    }

    // contabiliza o erro
    foreach ($mail_obj as $mail) {
        if ($mail->getStatus() == false) {
            foreach ($error_list as  $case_error) {
                if (strcmp($mail->getDomain(),$case_error->getCase()) == 0) {
                    $case_error->setErrorCount();
                }
            }
        }    
    }
?>
