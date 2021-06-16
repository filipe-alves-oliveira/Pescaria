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
    <title>Listar Pescador</title>
</head>
<body>

        <h3>Litar Pescador </h3>
        <table>
            <tr class="light-blue darken-4  grey-text text-lighten-3">    
                <th>ID</th>
                <th>NOME</th>
                <th>CIDADE</th>
                <th>ESTADO</th>
                <th>IDADE</th>
                <th colspan="2">Função</th>
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
                    <td><?php echo $pescador['somanota'];?></td>
                    <td> <a class="btn-floating btn-small waves-effect waves-light orange"
                          onclick="JavaScript:location.href='frmEdtCompetidor.php?id=' +
                          <?php echo $pescador['id'];?>" >
                           <i class="material-icons">edit</i>
                    </td>

                </tr>
            <?php
        </table>

</body>
</html>

