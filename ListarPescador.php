<?php //listarPescador.php
    include 'conexao.php'; 
     $pdo = Conexao::conectar(); 
     $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "Select * from pescador"; 
     $listaPescador = $pdo->query($sql); 
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
    <title>Lista Pescador</title>
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col s12">
        <h3 class="blue lighten-4">Listar Pescadores</h3>
        <div class="blue lighten-5">
        <table class="striped highlight  white lighten-3 responsive-table">
            <tr class="light-blue darken-4">    
                <th>ID</th>
                <th>NOME</th>
                <th>CIDADE</th>
                <th>ESTADO</th>
                <th>IDADE</th>
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

