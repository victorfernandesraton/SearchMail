<?php

// requisiçao pdo mysql
require_once "../database/_sql_connect.php";
$cx = cx_bench("mysql","localhost","3306","root","vfbr1101","mailtool");

// querry
$querryTables = "SELECT * FROM domainlist";
$sql_mailoldlist = $cx->prepare($querryTables);

// verificação de uso
if ($sql_mailoldlist->execute()) {
    echo "<span>tabela disponível</span>";
} else {
    echo "<span>tabela indisponível</span>";
}

// array de valores
$list_mailoldlist = $sql_mailoldlist->fetchALL(PDO::FETCH_ASSOC);

if ($list_mailoldlist == null) {
    echo  "<span>tabela vazia</span>";
} else {
?>
<table>
<caption>Old domainList</caption>
<tr>
    <th>index</th>
    <th>domaim adress</th>
    <th>Region</th>
</tr>
<?php
    foreach ($list_mailoldlist as $value):
?>
<tr>
    <td><?php echo $value['index'];?></td>
    <td><?php echo $value['domainAdress'];?></td>
</tr>
<?php
    endforeach;
}
?>
</table>