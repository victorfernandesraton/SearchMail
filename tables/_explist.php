<?php

$path = dirname(__DIR__);
// conexão sql
require_once $path."/database/_sql_connect.php";
$cx = cx_bench("mailtool");
if (verfy_tb("exception") == true ) {
    $query = "SELECT * FROM exception";
    $stmt = $cx->prepare($query);
    $stmt->execute();
    $exception_list = $stmt->fetchALL(PDO::FETCH_ASSOC);
} else {
    echo "create";
}

?>