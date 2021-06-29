<?php 
    include 'conexao.php'; 
    $id = trim($_POST['id']); 
    $descricao = trim($_POST['txtDescricao']); 
    $especie = trim($_POST['txtEspecie']); 
    $outros = trim($_POST['txtOutros']);
    
  
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE tipo set descricao=?, especie=?, outros=? WHERE id=?";
        $query = $pdo->prepare($sql); 
        $query->execute(array($descricao, $especie, $outros, $id));
        Conexao::desconectar(); 
    
    header("location:ListarTipo.php"); 

?>
