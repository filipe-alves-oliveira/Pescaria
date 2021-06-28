<?php 
    include 'conexao.php'; 
    $descricao= trim($_POST['txtDescricao']); 
    $especie = trim($_POST['txtEspecie']); 
    $outros = trim($_POST['txtOutros']);

    
    if (!empty($descricao)  && !empty($especie) && !empty($outros) ){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "INSERT INTO Tipo (descricao, especie, outros) VALUES(?, ?, ?);";
        $query = $pdo->prepare($sql); 
        $query->execute(array($descricao, $especie, $outros));
        Conexao::desconectar(); 
    }
    header("location:listarTipo.php"); 

?>