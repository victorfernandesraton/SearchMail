<?php
$path = dirname(__DIR__);
require_once $path."/database/_sql_connect.php";
$cx = cx_bench("mailtool");
if (verfy_tb("exception") == true && $_GET['domain'] != NULL) {
    $query = "DELETE FROM exception WHERE domainAdress = :domainAdress";
    $stmt = $cx->prepare($query);
    $stmt->bindValue(":domainAdress",$_GET['domain']);
    $stmt->execute();
    header("Location: ../app/domain.php");
} else {
    echo "fail";
}