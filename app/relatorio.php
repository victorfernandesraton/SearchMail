<?php
    // cabeçário
    $path = dirname(__DIR__);
    include_once $path."/config/tratament.php";
?>    
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SearchMail - Relatório</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- materialize css -->
    <link rel="stylesheet" type="text/css" media="screen" href="./materialize/css/materialize.min.css">
    <!-- my css -->
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <!-- materialize script -->
    <script src="./materialize/js/materialize.min.js"></script>
    <!-- meu script -->
    <script src="main.js"></script>
</head>
<body>
<?php require_once $path."/config/navbar.php"; ?>
    <h1>Relatório geral</h1>
    <table class = "tbrelatorio">
    <caption class = "tbrelatorio legenda">E-mails cadastrados</caption>
        <tr>
            <th>Quantidade</th>
            <td> <?php echo count($mail_obj); ?> </td>
        </tr>
        <tr>
            <th>Endereços corretos</th>
            <td><?php echo $correctcases; ?></td>
        </tr>
        <tr>
            <th>Endereços incorretos</th>
            <td><?php echo $totalerros; ?></td>
        </tr>
        <tr>
            <th>Casos de indeterminação</th>
            <td><?php echo $indetermination; ?></td>
        </tr>
    </table>
    <table class = "tbrelatorio"><br><hr>
    <caption class = "tbrelatorio legenda">Regiões</caption>
    <tr>
        <th>Região</th>
        <th>Total</th>
        <th>Corretos</th>
        <th>Erros</th>
    </tr>
    <?php foreach($region as $value): ?>
    <tr> 
        <td><?php echo $value->getRegion();?></td>
        <td><?php echo($value->getTotalCount()); ?></td>
        <td><?php echo($value->getCorrectCount()); ?></td>
        <td><?php echo($value->getErrorCount()); ?></td>
    </tr>
    <?php endforeach; ?>
    </table><br><hr>
    <table class = "tbrelatorio">
    <caption class = "tbrelatorio legenda">Domínios</caption>
    <tr>
        <th>Domínio</th>
        <th>Total</th>
        <th>Corretos</th>
        <th>Erros</th>
    </tr>
    <?php foreach($domain_obj as $value): ?>
    <tr> 
        <td><?php echo $value->getDomain();?></td>
        <td><?php echo($value->getTotalQuant()); ?></td>
        <td><?php echo($value->getCorrectCount()); ?></td>
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
