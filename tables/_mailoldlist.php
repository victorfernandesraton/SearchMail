<?php
// requisiçao pdo mysql
$cx = cx_bench("mysql","localhost","3306","root","vfbr1101","mailtool");

// querry
$querryTables = "SELECT * FROM mailoldlist";
$sql_mailoldlist = $cx->prepare($querryTables);

// verificação de uso
$sql_mailoldlist->execute();

// array de valores
$list_mailoldlist = $sql_mailoldlist->fetchALL(PDO::FETCH_ASSOC);
?>