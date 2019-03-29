<?php
$path = dirname(__DIR__);
// requisiçao pdo mysql
require_once $path."/database/_sql_connect.php";
$cx = cx_bench("mailtool");

if (verfy_tb("mailoldlist") == true) {
    // querry
    $query = "SELECT * FROM mailoldlist";
    $sql_mailoldlist = $cx->prepare($query);
    
    // verificação de uso
    $sql_mailoldlist->execute();
    
    // array de valores
    $list_mailoldlist = $sql_mailoldlist->fetchALL(PDO::FETCH_ASSOC);
} else {
    echo "false";
}
?>
