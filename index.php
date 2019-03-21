<?php
    require_once "./_class/_sql.php";
    require_once "./_fun/_ifvoid.php";
    require_once "./_fun/_scanMail.php";
    // conectando ao sql
    $pdo = new cx_bench("root","vfbr1101","mysql","localhost","bteste","3306");
    $cx = $pdo->cx_bench();

    // verificando existência
    $query = "SHOW TABLES";
    $stmt = $cx->prepare($query);
    $stmt->execute();
    $out = $stmt->fetch(PDO::FETCH_ASSOC);
    IfVoid($out);
    $scan = new ScMail("victor.baiao1101@gmail.com");
    var_dump(($scan->getPosition()));
    var_dump(($scan->getBefore()));
    var_dump(($scan->getAfter()));

   ?>
