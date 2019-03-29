<?php
// requisiçao pdo mysql
$cx = cx_bench("mailtool");

// querry
$querryTables = "SELECT * FROM mailoldlist";
$sql_mailoldlist = $cx->prepare($querryTables);

// verificação de uso
$sql_mailoldlist->execute();

// array de valores
$list_mailoldlist = $sql_mailoldlist->fetchALL(PDO::FETCH_ASSOC);
?>
