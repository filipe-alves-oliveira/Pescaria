<?php 
    include 'conexao.php'; 
    $id = trim($_POST['id']); 
    $colocacao = trim($_POST['txtColocacao']); 
    $pescador = trim($_POST['txtPescador']); 
    $premio = trim($_POST['txtPremio']);
    
  
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE premiacao set colocacao=?, pescador=?, premio=? WHERE id=?";
        $query = $pdo->prepare($sql); 
        $query->execute(array($colocacao, $pescador, $premio, $id));
        Conexao::desconectar(); 
    
    header("location:ListarPremiacao.php");
