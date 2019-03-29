<?php
// requisiçao pdo mysql
require_once $path."/database/_sql_connect.php";
$cx = cx_bench("mailtool");

// querry
$querryTables = "SELECT * FROM domainlist";
$sql_domainoldlist = $cx->prepare($querryTables);

// verificação de uso
$sql_domainoldlist->execute();

// array de valores
$list_domainoldlist = $sql_domainoldlist->fetchALL(PDO::FETCH_ASSOC);
?>
