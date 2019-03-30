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
foreach ($list as $value) {
    echo "<a>".$value['domainAdress']."</a><a href =../fun/move_to_up.php?value=".$value['domainAdress'].">Teste</a><br>";
}

?>