<?php
// configutação do sql
require_once "../config/const.php";
require_once "../database/_sql_connect.php";

// requisiçao pdo mysql
require_once "./_mailoldlist.php";

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