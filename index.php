<?php
    // classes e funções
    require_once "./_fun/_carryMail.php";
    require_once "./_fun/IsDomain.php";
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
    $mailList = array("victor.baiao1101@gmail.com","jose@outlook.com","mark@fg.com");
    // carregando emails como objetos
    $mail_obj = carryMail($mailList);

    // validador de dominio
    IsDomain($mail_obj,$domainList->getDomainList());
    ?>
