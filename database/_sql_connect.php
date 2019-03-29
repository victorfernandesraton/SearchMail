<?php
function cx_bench($database) {
    try {
        $conn = new PDO(SQL_TYPE.':'.SQL_HOST.'='.SQL_USER.'port='.SQL_PORT.';dbname='.$database, SQL_USER,SQL_PASS,array(
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