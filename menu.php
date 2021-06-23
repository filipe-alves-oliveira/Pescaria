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
      <a href="#" class="brand-logo right"><img src="imagens/logo3.png" width="60"></a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="listarPescador.php">Pescador</a></li>
        <li><a href="listarPeixe.php">Peixe</a></li>
        <li><a href="listar.php">Premiação</a></li>
        <li><a href="listarTipo.php">Tipo de Peixe</a></li>
        <li><a href="logout.php">SAIR</a></li>
      </ul>
    </div>
  </nav>
