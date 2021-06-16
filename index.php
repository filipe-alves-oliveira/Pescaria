<?php //listarPescador.php
    include 'conexao.php'; 
     $pdo = Conexao::conectar(); 
     $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "Select * from pescador"; 
     $listaPescadores = $pdo->query($sql); 
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

        </table>

</body>
</html>

