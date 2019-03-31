<?php
$path = dirname(__DIR__);
require_once $path."/database/_sql_connect.php";
$cx = cx_bench("mailtool");
if (verfy_tb("domainlist") == true && $_POST['newDomain'] != NULL && $_POST['newRule'] != NULL) {
    $query = "INSERT INTO exception (domainAdress,rule) VALUES (:domainAdress,:rule)";
    $stmt = $cx->prepare($query);
    $stmt->bindValue(":domainAdress",$_POST['newDomain']);
    $stmt->bindValue(":rule",$_POST['newRule']);
    $stmt->execute();
    header("Location: ../app/rules.php");
} else {
    echo "fail";
}