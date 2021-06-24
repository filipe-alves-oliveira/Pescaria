<?php 
  session_start();
  if (!isset($_SESSION['usuario']))
      Header("location:index.php"); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

    <title>Campeonato de Pescaria 2021</title>
</head>

<body>
   <!-- menu suspenso -->
  <nav class="grey darken-2">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo right"><img src="imagens/img1.jpg" width="110" height="63"></a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="listarPescador.php">Pescador</a></li>
        <li><a href="listarPeixe.php">Peixe</a></li>
        <li><a href="listar.php">Premiação</a></li>
        <li><a href="listarTipo.php">Tipo de Peixe</a></li>
        <li><a href="logout.php">SAIR</a></li>
      </ul>
    </div>
  </nav>
  <!-- menu lateral -->
  <ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="imagens/img2.jpg" width="300">
      </div>
      <a href="#user"><img class="circle" src="imagens/img3.jpg"></a>
      <a href="#name"><span class="black-text name">Filipe</span></a>
      <a href="#email"><span class=black-text email">filipe@teste.com.br</span></a>
    </div></li>
    <li><a href="#!"><h7>Seja Bem Vindo!</h7></a></li>
    <li><div class="divider"></div></li>
    <li><a href="menu.php"><i class="material-icons">person</i>Menu</a></li>
  </ul>
  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

</body>
</html>

<script  type="text/javascript">

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  // Initialize collapsible (uncomment the lines below if you use the dropdown variation)
  // var collapsibleElem = document.querySelector('.collapsible');
  // var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
  });


</script>
