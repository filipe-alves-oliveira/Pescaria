<?php 
    include 'conexao.php'; 
    $id = trim($_POST['id']); 
    $nome = trim($_POST['txtNome']); 
    $isca = trim($_POST['txtIsca']); 
    $peso = trim($_POST['txtPeso']);
  
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE peixe set nome=?, isca=?, peso=? WHERE id=?";
        $query = $pdo->prepare($sql); 
        $query->execute(array($nome, $isca, $peso, $id));
        Conexao::desconectar(); 
    
    header("location:listarPeixe.php"); 

?>