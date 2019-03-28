<?php

require_once "../database/_sql_connect.php";

// requisiçao pdo mysql
$cx = cx_bench("mysql","localhost","3306","root","vfbr1101","mailtool");
// querry
$querryTables = "SELECT * FROM mailoldlist";
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
<caption>Old mail</caption>
<tr>
    <th>index</th>
    <th>mail adress</th>
</tr>
<?php
    foreach ($list_mailoldlist as $value):
?>
<tr>
    <td><?php echo $value['index'];?></td>
    <td><?php echo $value['mailAdress'];?></td>
</tr>
<?php
    endforeach;
}
?>
</table>