<?php
// requisiçao pdo mysql
$cx = cx_bench("mysql","localhost","3306","root","vfbr1101","mailtool");

// querry
$querryTables = "SELECT * FROM domainlist";
$sql_domainoldlist = $cx->prepare($querryTables);

// verificação de uso
$sql_domainoldlist->execute();

// array de valores
$list_domainoldlist = $sql_domainoldlist->fetchALL(PDO::FETCH_ASSOC);
?>
