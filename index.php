<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Serachmail Carregando...</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <!-- jquerry offline server side -->
    <!-- <script src = "./jQuerry/jQuerry.js";> -->
    <!-- jquerry google -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="main.js"></script>
</head>
<body>
    <h1>Carregando... Em breve você será redirecionado</h1>
</body>
</html>
<?php
    require_once "./config/tratament.php";
    require_once "./database/_sql_connect.php";
    // cria a tabela caso a mesma n exista
    $cs = cx_bench("mailtool");
    $query = "CREATE DATABASE IF NOT EXISTS mailtool";
    $stmt = $cx->prepare($query);
    $stmt->execute();

    // carrega os email's corrigidos em uma tabela sql
    header("location: ./app/Menu.php");
?>
