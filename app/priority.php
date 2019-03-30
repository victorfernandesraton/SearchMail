<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <table>
    <caption>Tabela de prioridade dos dôminios</caption>
    <tr>
        <th>Domínio</th>
        <th>Mover</th>
    </tr>
<?php
$path = dirname(__DIR__);
require_once $path."/database/_sql_connect.php";
if (verfy_tb("domainlist") != false) {
    $cx = cx_bench("mailtool");
    $query = "SELECT * FROM domainlist";
    $stmt = $cx->prepare($query);
    $stmt->execute();
    $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
} 
// var_dump($list);
$list = array_reverse($list);
foreach ($list as $value) {
    echo "<tr><td>".$value['domainAdress']."</td>
    <td>
    <a href =../fun/move_to_up.php?value=".$value['domainAdress'].">Descer</a><a href =../fun/move_to_down.php?value=".$value['domainAdress'].">Subir</a></td>
    </tr>";
}
?>
    </tr>
    </table>
</body>
</html>
