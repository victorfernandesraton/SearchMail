<?php
    // classes e funções
    require_once "./_class/_sql.php";
    require_once "./_fun/_ifvoid.php";
    require_once "./_class/_scanMail.php";
    require_once "./_class/_verServer.php";
    require_once "./_fun/_compServer.php";

    // conectando ao sql
    $pdo = new cx_bench("root","vfbr1101","mysql","localhost","bteste","3306");
    $cx = $pdo->cx_bench();

    // trabalhando os endereços
        
    // lista de teste
    $mails = array("victor.baiao1101@gmail.com","paulo@facebook.com");
    
    $server = new VerServer();
    foreach ($mails as $key => $value) {
        $scan[] = new ScMail($value);
    }    
   ?>
