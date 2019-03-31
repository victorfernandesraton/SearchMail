<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SearchMail - Menu</title>
    <?php 
    $path = dirname(__DIR__);
    require_once $path."/config/allfront.php";
    ?>
   </head>
<body>
    <h1>Menu Principal</h1>
    <a href="./relatorio.php">Relatório</a>
    <a href = "../settings/conexao.php">Conexão</a>
    <a href = "./teste.php" target="_blank">Inserir e-mail</a>
    <a href = "./domain.php" target="_blank">Cofigurar a lista de prioridades</a>
    <a href = "./loading.php" target="_blank">Carregar o banco de dados</a>
</body>
</html>