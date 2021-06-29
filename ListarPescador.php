<?php //listarPremiacao.php
include 'conexao.php';

$pdo = Conexao::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "Select * from pescador";
$listaPescador = $pdo->query($sql);

session_start();
if (!isset($_SESSION['usuario']))
  Header("location:index.php");

if (isset($_GET['busca']))
  $busca = $_GET['busca'];
else $busca = '';



if ($busca != '')
  $sql = "Select * from pescador WHERE nome like '%" . $busca .  "%' order by nome";
else $sql = "Select * from pescador order by nome";
$listaPescador = $pdo->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="css/style_geral.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


  <title>Listar Pescador</title>
</head>

<body>

  <body bgcolor="add8e6">

    <!-- menu suspenso -->
    <nav class="light-blue darken-4">
      <div class="nav-wrapper">
        <a href="menu.php" class="brand-logo right"><img src="imagens/img9.jpg" width="60" class="circle responsive-img"></a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
          <a href="menu.php" class="brand-logo center"><i class="material-icons">home</i>Home</a>
          <li><a href="listarPescador.php">Pescador</a></li>
          <li><a href="listarPeixe.php">Peixe</a></li>
          <li><a href="listarPremiacao.php">Premiação</a></li>
          <li><a href="listarTipo.php">Tipo de Peixe</a></li>
          <li><a href="logout.php" i class="material-icons">keyboard_tab</i></a></li>
        </ul>
        <h7 right>Usuário: <?php echo $_SESSION['usuario']; ?><h7>
      </div>
    </nav>


    <!-- menu lateral -->
    <ul id="slide-out" class="sidenav">
      <li>
        <div class="user-view">
          <div class="background">
            <img src="imagens/img8.jpg" width="300">
          </div>
          <a><img class="circle" src="imagens/img3.jpg"></a>
          <a><span class="black-text name">Usuário: Filipe</span>
        </div>
      </li>
      <h7>Seja Bem Vindo!</h7>
      </a></li>
      <li>
        <div class="divider"></div>
      </li>
      <li><a href="menu.php"><i class="material-icons">person</i>Menu</a></li>
    </ul>
    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

    <div class="row">
      <div class="col s12">
        <h3 class="white lighten-4">Listar Pescador <a class="btn-floating btn-large waves-effect waves-light green" onclick="JavaScript:location.href='frmInsPescador.php'"><i class="material-icons">add</i></a>
        </h3>

        <div class="row">
          <div class="input-field">
            <form action="listarPescador.php" method="GET" id="formBuscaPescador" class="col s12">
              <div class="input-field col s12">
                <input type="text" placeholder="  Informe o nome do pescador." class="form-control col s10" id="txtBusca" name="busca">
                <button class="btn light-blue darken-4 col s2" type="submit" name="action">Buscar<i class="material-icons right">search</i>
              </div>
            </form>
          </div>

          <div class="blue lighten-5">
            <table class="striped highlight  white lighten-3 responsive-table">
              <tr class="light-blue darken-4">
                <th>ID</th>
                <th>NOME</th>
                <th>CIDADE</th>
                <th>ESTADO</th>
                <th>IDADE</th>
                <th colspan="2">EDITAR / REMOVER</th>
              </tr>
              </tr>
              <?php
              foreach ($listaPescador as $pescador) {
              ?>
                <tr>
                  <td><?php echo $pescador['id']; ?></td>
                  <td><?php echo $pescador['nome']; ?></td>
                  <td><?php echo $pescador['cidade']; ?></td>
                  <td><?php echo $pescador['estado']; ?></td>
                  <td><?php echo $pescador['idade']; ?></td>

                  <td><a class="btn-floating btn-small waves-effect waves-light orange" onclick="JavaScript:location.href='frmedtPescador.php?id=' +
                          <?php echo $pescador['id']; ?>">
                      <i class="material-icons">edit</i>
                  </td>

                  <td><a class="btn-floating btn-small waves-effect waves-light red" onclick="JavaScript:location.href='frmrmvPescador.php?id=' +
                          <?php echo $pescador['id']; ?>">
                      <i class="material-icons">delete</i>
                  </td>
                </tr>
              <?php
              }
              ?>
            </table>
          </div>
        </div>
      </div>

  </body>

</html>

<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  // Initialize collapsible (uncomment the lines below if you use the dropdown variation)
  // var collapsibleElem = document.querySelector('.collapsible');
  // var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

  // Or with jQuery

  $(document).ready(function() {
    $('.sidenav').sidenav();
  });
</script>