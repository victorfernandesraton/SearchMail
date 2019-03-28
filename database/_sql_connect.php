<?php
function cx_bench($dbtype,$host,$port,$username,$pass,$database) {
    try {
        $conn = new PDO($dbtype.':'.$host.'='.$username.'port='.$port.';dbname='.$database, $username,$pass,array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
            PDO::ATTR_PERSISTENT => false,
            PDO::ATTR_EMULATE_PREPARES => false,
            )
        );
    return $conn;
    } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
}
    
    // conectando ao sql
    // $pdo = new cx_bench("root","vfbr1101","mysql","localhost","bteste","3306");
    // $cx = $pdo->cx_bench();
?>