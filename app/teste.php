<?php
$path = dirname(__DIR__);
require_once $path."/tables/_domainList.php";
?>
<script type="text/javascript">
    var domain_list = [<?php foreach ($list_domainoldlist as $value) {
        echo ('"'.$value['domainAdress'].'"'.",");
    } ?>];
</script>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SearchMail - Teste de script</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="./jQuerry/jQuerry.js"></script>
    <script type="text/javascript" src="./js/getForm.js"></script>
</head>
<body>
    <form id ="mailform">
    <input type="email" id ="mail" name = "mail" required>
    <a id="verify">Enviar</a>
    <div id = "_teste">
    </div>
    <input type="submit" value="enviar">
    </form>
</body>
</html>