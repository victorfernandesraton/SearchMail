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
    <?php require_once $path."/config/allfront.php"; ?>
    <!-- charts -->
    <script src="./js/charts.js"></script>

</head>
<body>
<?php require_once $path."/config/navbar.php"; ?>
<section class="section">
    <div class="container" id ="sub">
        <ul>
            <li><a href="#geral">Relatório geral</a></li>
            <li><a href="#regioes">Regiões</a></li>
        </ul>
    </div>
</section>
<section class = "section">
    <div class="container">  <!-- container principal -->
        <h1>Relatório geral</h1>
        <div class="row" id="geral"> <!-- linha 1 -->
            <div class="col s3"> <!-- coluna -->

            <table class = "responsive-table tbrelatorio">
            <h2 class = "tbrelatorio legenda">E-mails cadastrados</h2>
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
            </div>
            <div class="col s3">
                <div id="piechart" style="width: 700px; height: 400px;"></div>
            </div> <!-- fim da coluna -->
        </div> <!-- fim da linha superior -->
        <div class="row" id ="regioes">
            <h2>Regiões</h2>    
            <div id="barchart_material_regions" style="width: 600px; height: 300px;"></div>
        </div>
        <table class = "responsive-table tbrelatorio">
            <h2 class = "tbrelatorio legenda">Domínios</h2>
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
        <table class = "responsive-table tbrelatorio">
        <h2 class = "tbrelatorio legenda">Casos de erro</h2>
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
    </div> <!-- fim do container principal -->
</section>
</body>
<!-- grafico de casos gerais -->
<?php include_once $path."/app/charts/total.php";   ?>
<?php include_once $path."/app/charts/regions.php";   ?>
</html>
