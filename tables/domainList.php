<?php
// requisição para usar sql
require_once "../database/_sql_connect.php";

// motagen da lista de dominios
include_once "./_domainList.php";

// construindo front-end (tabela)
if ($list_domainoldlist == null) {
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
    foreach ($list_domainoldlist as $value):
?>
<tr>
    <td><?php echo $value['index'];?></td>
    <td><?php echo $value['domainAdress'];?></td>
    <td><?php echo $value['regionAdress'];?></td>
</tr>
<?php
    endforeach;
}
?>
</table>