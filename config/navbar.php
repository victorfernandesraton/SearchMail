<div class="navbar-fixed">
    <ul id="dropdown1" class="dropdown-content grey darken-3 status">
        <li><a class="status" href="#!">one</a></li>
        <li><a class="status" href="#!"></a></li>
        <li><a class="status" href="#!">three</a></li>
    </ul>
    <nav class="nav">
            <a href="#" class="brand-logo right">Logo</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="./Menu.php">Início</a></li>
                <li><a href="./relatorio.php">Relatório</a></li>
                <li><a href="./teste.php">Teste</a></li>
                <li><a href="./domain.php">Dominios</a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Status<i></i></a></li>
            </ul>
            <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">Javascript</a></li>
    <li><a href="mobile.html">Mobile</a></li>
  </ul>

            </nav>
</div>
<script>
$(".dropdown-trigger").dropdown();
</script>