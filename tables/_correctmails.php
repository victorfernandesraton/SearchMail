<?php
$path = dirname(__DIR__);
// conexão sql
require_once $path."/database/_sql_connect.php";
$cx = cx_bench("mailtool");
if (verfy_tb("mailcorrect") == true) {
    $query = "SELECT * FROM mailcorrect";
    $stmt = $cx->prepare($query);
    $stmt->execute();
    $mailcorrect_list = $stmt->fetchALL(PDO::FETCH_ASSOC);
} else {
    echo "false";
} 
?>