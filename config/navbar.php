<div class="navbar-fixed">
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!">one</a></li>
        <li><a href="#!">two</a></li>
        <li class="divider"></li>
        <li><a href="#!">three</a></li>
    </ul>
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo right">Logo</a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="./Menu.php">Início</a></li>
            <li><a href="./relatorio.php">Relatório</a></li>
            <li><a href="./teste.php">Teste</a></li>
            <li><a href="./domain.php">Dominios</a></li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Status<i></i></a></li>
            </ul>
        </div>
    </nav>
</div>
<script>
$(".dropdown-trigger").dropdown();
</script>