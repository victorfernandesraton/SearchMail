<?php
    // classes e funções
    require_once "./_class/_sql.php";
    require_once "./_fun/_carryMail.php";
    require_once "./_class/_Mails.php";

    // conectando ao sql
    $pdo = new cx_bench("root","vfbr1101","mysql","localhost","bteste","3306");
    $cx = $pdo->cx_bench();

    // lista de exemplo
    $mailList = array("victor.baiao1101@gmail.com","jose@hotmail.com");
    $mail_obj = carryMail($mailList);
    echo $mail_obj[0]->getMail();

   ?>
