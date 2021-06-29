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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/style_geral.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <title>Campeonato de Pescaria 2021</title>

  
</head>

<body bgcolor="add8e6"> 
<body>
  <!-- menu suspenso -->
  <nav class="light-blue darken-4">
    <div class="nav-wrapper">
    <a href="#" class="brand-logo right"><img src="imagens/img9.jpg" width="60" class="circle responsive-img"></a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="listarPescador.php">Pescador</a></li>
        <li><a href="listarPeixe.php">Peixe</a></li>
        <li><a href="listarPremiacao.php">Premiação</a></li>
        <li><a href="listarTipo.php">Tipo de Peixe</a></li>
        <li><a href="logout.php"  i class="material-icons">keyboard_tab</i></a></li>
      </ul>
      <h7 right>Usuário: <?php echo $_SESSION['usuario']; ?><h7>
    </div>
  </nav>
  

  <style>
  div.b {
  width: 500px;

  position:absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%)!important;}

</style>

<div class = "">
<div class="slider">
    <ul class="slides">
      <li>
        <img src="./Imagens/img12.jpg"> <!-- random image -->
        <div class="caption center-align">
        </div>
      </li>

      <li>
        <img src="./Imagens/img14.jpg"> <!-- random image -->
        <div class="caption center-align">
        </div>
      </li>

    </ul>
  </div>
</div>

  
 <script>
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems);
  });
 </script> 

   </body>
</html>

</body>
</html>

