
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
    $path = dirname(__DIR__);
    require_once $path."/config/tratament.php";

    set_time_limit(2); // Limite de tempo de execução: Deixe 0 (zero) para sem limite
    ignore_user_abort( true ); // Não encerra o processamento em caso de perda de conexão

    if (verfy_tb("mailoldlist") === true) { // verifica se a tabela exite
        LoadCorrectMails($mail_obj,$cx);
    } // cria tabela caso não exista