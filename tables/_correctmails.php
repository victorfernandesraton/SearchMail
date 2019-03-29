<?php
$path = dirname(__DIR__);
// conexão sql
require_once $path."/database/_sql_connect.php";
$cx = cx_bench("mailtool");

// querry
$query = "SELECT 1 FROM mailcorrect";
$stmt = $cx->prepare($query);
$stmt->execute();

$mailcorrect_list = $stmt->fetchALL(PDO::FETCH_ASSOC);
if ($mailcorrect_list == null) {
    $mailcorrect_status = true;
} else {
    $mailcorrect_status = false;
}
?>