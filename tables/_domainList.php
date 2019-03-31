<?php
$path = dirname(__DIR__);
// requisiçao pdo mysql
require_once $path."/database/_sql_connect.php";
$cx = cx_bench("mailtool");

if (verfy_tb("domainlist") == true) {
    // querry
    $query = "SELECT * FROM domainlist";
    $sql_domainoldlist = $cx->prepare($query);
    
    // verificação de uso
    $sql_domainoldlist->execute();
    
    // array de valores
    $list_domainoldlist = $sql_domainoldlist->fetchALL(PDO::FETCH_ASSOC);
} else {
    echo "false";
}
?>
