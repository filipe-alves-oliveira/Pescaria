<?php //listarPescador.php
    include 'conexao.php'; 
     $pdo = Conexao::conectar(); 
     $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "Select * from pescador"; 
     $listaPescador = $pdo->query($sql); 
?> 

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
   
   <!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

   <!-- Compiled and minified JavaScript -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
   
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
            
    <title>Listar Pescador</title>
</head>

    <div class="container">
    <div class="row">
        <div class="col s12">
        <h3 class="blue lighten-4">Listar Pescador <a class="btn-floating btn-large waves-effect waves-light green"
               onclick="JavaScript:location.href='frmInsPescador.php'"><i class="material-icons">add</i></a>
        </h3>
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
                foreach ($listaPescador as $pescador){
            ?>
                <tr>
                    <td><?php echo $pescador['id'];?></td>
                    <td><?php echo $pescador['nome'];?></td>
                    <td><?php echo $pescador['cidade'];?></td>
                    <td><?php echo $pescador['estado'];?></td>
                    <td><?php echo $pescador['idade'];?></td>

                    <td><a class="btn-floating btn-small waves-effect waves-light orange"
                          onclick="JavaScript:location.href='frmedtPescador.php?id=' +
                          <?php echo $pescador['id'];?>">
                           <i class="material-icons">edit</i>
                    </td>

                    <td><a class="btn-floating btn-small waves-effect waves-light red"
                          onclick="JavaScript:location.href='frmrmvPescador.php?id=' +
                          <?php echo $pescador['id'];?>" >
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
    </div>         
</body>
</html>






   




    <title>Listar Pacientes</title>
</head>

<body bgcolor="#696969"> 
<style>
  div.a{
    text-align: center;
  }

</style>

<nav>
    <div class="nav-wrapper">
      <a href="menu.php" class="brand-logo center"><i class="material-icons">home</i>Home</a>
      <a href="logout.php" class="waves-effect waves-light btn-large red accent-4 right"><i class="material-icons">exit_to_app</i></a>
      <ul class="left hide-on-med-and-down">
        <li><a href="listarPacientes.php"><i class="material-icons left">face</i>Pes</a></li>
        <li><a href="listarServicos.php"><i class="material-icons left">star_border</i>Serviços</a></li>
        <li><a href="listarConsultas.php">Consultas<i class="material-icons left">next_week</i></a></li>
        <li><a href="listarMateriais.php">Atendimento<i class="material-icons left">local_hospital</i></a></li>
      </ul>
  </nav>
 
    <div  class="row s10">
      <div class = "a">
      <h3 class="white-text">Lista de Pacientes  
      </div>
       <a class="wbtn-floating btn-large waves-effect waves-light green"
        onclick="JavaScript:location.href='frmInsPaciente.php'"><i class="material-icons left">person_add
</i>Adicionar Paciente</a>
      </h3>
    </div>
    <table  class="highlight  grey lighten-4 responsive-table">
        <tr  class = "  deep-orange lighten-4 ">
            <th>ID</th>
            <th>Nome</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Telefone</th>
            <th>Editar</th>
            <th>Remover</th>
        
        </tr>
        <?php
           foreach ($listaPacientes as $paciente) {
        ?> 
        <tr  class="black-text  accent-4"  >
            <td><?php echo $paciente['id']; ?></td>
            <td><?php echo $paciente['nome']; ?></td>
            <td><?php echo $paciente['cidade']; ?> </td>
            <td><?php echo $paciente['estado']; ?></td>
            <td><?php echo $paciente['telefone']; ?></td>
            <td><a class="btn-floating btn-small waves-effect waves-light   blue darken-2"
                  onclick="JavaScript:location.href='frmEdtPaciente.php?id=' + 
                           <?php echo $paciente['id'];?>">
                  <i class="material-icons">mode_edit</i></a></td>
            <td><a class="btn-floating btn-small waves-effect waves-light  red lighten-1"
                  onclick="JavaScript:location.href='frmRemPaciente.php?id=' + 
                           <?php echo $paciente['id'];?>">
                  <i class="material-icons">remove_circle</i></a></td>
        </tr>

        <?php
           } 
        ?>

    </table>
    </div>
</body>

</html>