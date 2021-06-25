<?php //listarPremiacao.php
    include 'menu.php';
    include 'conexao.php'; 

     $pdo = Conexao::conectar(); 
     $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "Select * from tipo"; 
     $listaPremiacao = $pdo->query($sql); 
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
    
            
    <title>Listar Tipo</title>
</head>

    <div class="container">
    <div class="row">
        <div class="col s12">
        <h3 class="blue lighten-4">Listar Tipo <a class="btn-floating btn-large waves-effect waves-light green"
               onclick="JavaScript:location.href='frmInsTipo.php'"><i class="material-icons">add</i></a>
        </h3>
        <div class="blue lighten-5">
        <table class="striped highlight  white lighten-3 responsive-table">
            <tr class="light-blue darken-4">    
                <th>ID</th>
                <th>DESCRIÇÃO</th>
                <th colspan="2">EDITAR / REMOVER</th>
            </tr>
            </tr>    
            <?php 
                foreach ($listaTipo as $tipo){
            ?>
                <tr>
                    <td><?php echo $tipo['id'];?></td>
                    <td><?php echo $tipo['descricao'];?></td>

                    <td><a class="btn-floating btn-small waves-effect waves-light orange"
                          onclick="JavaScript:location.href='frmedtTipo.php?id=' +
                          <?php echo $tipo['id'];?>">
                           <i class="material-icons">edit</i>
                    </td>

                    <td><a class="btn-floating btn-small waves-effect waves-light red"
                          onclick="JavaScript:location.href='frmrmvTipo.php?id=' +
                          <?php echo $tipo['id'];?>" >
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