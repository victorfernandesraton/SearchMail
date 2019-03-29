<?php
    include_once "./config/tratament.php";
?>    
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SearchMail - Relatório</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <h1>Relatório geral</h1>
    <table class = "tbrelatorio">
    <caption class = "tbrelatorio legenda">E-mails cadastrados</caption>
        <tr>
            <th>Quantidade</th>
            <td> <?php echo count($mail_obj); ?> </td>
        </tr>
    </table>
    <table class = "tbrelatorio"><br><hr>
    <caption class = "tbrelatorio legenda">Erros por pais</caption>
    <tr>
        <th>Região</th>
        <th>Quantidade</th>
    </tr>
    <?php foreach($region as $value): ?>
    <tr> 
        <td><?php echo $value->getRegion();?></td>
        <td><?php echo($value->getErrorCount()); ?></td>
    </tr>
    <?php endforeach; ?>
    </table><br><hr>
    <table class = "tbrelatorio">
    <caption class = "tbrelatorio legenda">Domínios com erro</caption>
    <tr>
        <th>Domínio</th>
        <th>Quantidade de erro</th>
    </tr>
    <?php foreach($domain_obj as $value): ?>
    <tr> 
        <td><?php echo $value->getDomain();?></td>
        <td><?php echo($value->getErrorQuant()); ?></td>
    </tr>
    <?php endforeach; ?>
    </table><br><hr>
    <table class = "tbrelatorio">
    <caption class = "tbrelatorio legenda">Casos de erro</caption>
    <tr>
        <th>Casos</th>
        <th>Quantidade</th>
    </tr>
    <?php foreach($error_list as $value): ?>
    <tr> 
        <td><?php echo $value->getCase();?></td>
        <td><?php echo($value->getErrorCount()); ?></td>
    </tr>
    <?php endforeach; ?>
</body>
</html>
