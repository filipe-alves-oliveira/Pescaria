<?php //listarPescador.php
    include 'menu.php';
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






   

