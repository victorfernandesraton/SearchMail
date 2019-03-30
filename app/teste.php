<?php
$path = dirname(__DIR__);
require_once $path."/tables/_domainList.php";
?>
<script>
    var domain_list = [<?php 
    foreach ($list_domainoldlist as $value) {
        echo ('"'.$value['domainAdress'].'"'.",");
    } ?>];
</script>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SearchMail - Teste de script</title>
    <?php 
    $path = dirname(__DIR__);
    require_once $path."/config/allfront.php";
    ?>
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