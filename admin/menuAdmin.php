<!DOCTYPE html>

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <title>SGR</title>

  <link rel="stylesheet" type="text/css" href="../css/foundation.css">
  <link rel="stylesheet" type="text/css" href="../css/foundation.min.css">
  <link rel="stylesheet" type="text/css" href="../css/app.css">
  <link rel="icon" type="image/png" href="../img/favicon.ico"/>
  
</head>
<body>

  <div class="top-bar">
    <div class="top-bar-title">
      <span data-responsive-toggle="responsive-menu" data-hide-for="medium">
        
      </span>
      <strong> <a href="#">SGR</a></strong>
    </div>
    <div id="responsive-menu">
      <div class="top-bar-left">
        <ul class="dropdown menu" data-dropdown-menu>
          <li class="is-dropdown-submenu-parent">
            <a href="#">Adminsitração</a>
            <ul class="menu">
              <li><a href="gerenciarAlunos.php">Alunos</a></li>
              <li><a href="gerenciarReservas.php">Reservas</a></li>
              <li><a href="../modules/users/gerenciarUsuario.php">Usuarios</a></li>

            </ul>
          </li>

          

          <li class="is-dropdown-submenu-parent">
            <a href="#">Nutricionista</a>
            <ul class="menu">
              <li><a href="../modules/nutricionista/formulario_cardapio.php">Criar cardapio</a></li>
              <li><a href="../modules/nutricionista/listar_cardapio.php">Gerenciar cardapio</a></li>
              <li><a href="relatorio_totalReservasDia.php">Reservas</a></li>
              <li><a href="../modules/estoque/index.html">Almoxarifado</a></li>
              <!-- ... -->
            </ul>
          </li>


          <li class="is-dropdown-submenu-parent">
            <a href="#">Alunos</a>
            <ul class="menu">
              <li><a href="../modules/alunos/relatorioVisitantes.php">Visitantes</a></li>
              
              <!-- ... -->
            </ul>
          </li>

          <li><a href="../modules/estoque/index.html">Almoxarifado</a></li>
          <li><a href="admindb.php">DB</a></li>
          
        </ul>
      </div>
      <div class="top-bar-right">
        <ul class="menu">
          <li><input type="search" placeholder="Pesquisar"></li>
          <li><button type="button" class="button">Pesquisar</button></li>
        </ul>


      </div>
    </div>
  </div>